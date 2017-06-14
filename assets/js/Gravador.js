var Gravador = function(){
	
	var _self = this;
	
	/* Contador */
	this.num = 1; 

	/* Cronometro */
	this.tempo = { 'm': 0, 's':0 }; 
	
	/* codlaudo */
	this.codlaudo = $("#codlaudo").data('code');

	/* Intervalo */
	this.intervalo = { 'ditado':null, 'crono':null };
	
	/*Parametro de Audio*/
	this.audio = {
        tag: 'audio',
        type: 'audio/ogg',
        ext: '.ogg',
        gum: { audio: true }
	};
	
	/* Guarda pedacos do audio */
	this.chunks = [];

	/* Inicia objeto */
	this.init = function(){
		navigator.mediaDevices.getUserMedia( _self.audio.gum ).then( _stream => {
			_self.grava( _stream );
		});	
	}
	
	/* Inicia gravacao do audio */  
	this.grava = function( stream ){
		_self.chunks = [];
		_self.recorder = new MediaRecorder( stream );
		_self.recorder.ondataavailable = e => {
			_self.chunks.push( e.data );
			if( _self.recorder.state == 'inactive' ){
				_self.getConteudoAudio();
			}
		};
		_self.recorder.start();
		/* Inicia crnonometro */
		_self.cronoInit( 'Gravando: ' );
		/* Iniciando função que salva ditado em intervalos */
		_self.salvaDitadoIntervalo();
		/* Expande caixa de gravação*/
		$('.sys-container-box').removeClass('sys-container-player-small');
		$('#containerPlayerToggle').hide();
	}
	
	/* Para gravacao */
	this.para = function(){
		_self.recorder.stop();
		_self.tempo.m = _self.tempo.m = 0; 
		clearInterval( _self.intervalo.ditado );
		clearInterval( _self.intervalo.crono );
	}
	
	/* Pause na gravacao */
	this.pause = function(){
		_self.recorder.pause();
		clearInterval( _self.intervalo.ditado );
		clearInterval( _self.intervalo.crono );
		_self.cronoLabel( 'Em pausa: ', true );
	}
	
	/* Resume na gravacao */
	this.resume = function(){
		_self.recorder.resume();
		/* Inicia crnonometro */
		_self.cronoInit( 'Gravando: ' );
		/* Iniciando função que salva ditado em intervalos */
		_self.salvaDitadoIntervalo();
	}
	
	/* Metodo que salva conteudo a cada x segundos para evitar perdas de gravações*/
	this.salvaDitadoIntervalo = function(){
		_self.intervalo.ditado = setInterval( function(){_self.getConteudoAudio()} , 15000 ); /* 15 segundos */
		setTimeout(function(){_self.recorder.requestData()}, 14000);
	}
	
	/* Retorna pedacos da gravacao*/
	this.getConteudoAudio = function(){
		if( _self.recorder.state == 'recording' ){
			console.log(_self.chunks);
			_self.recorder.requestData();
			var blob = new Blob( _self.chunks, { type: _self.audio.type });
			var audio = new FormData();
			audio.append( 'codlaudo', _self.codlaudo );
			audio.append( 'num', _self.num++ );
			audio.append( 'ext', _self.audio.ext );
			audio.append( 'audio', blob );
			
			$.ajax({
				url : '/Gravador/salvaDitadoIntervalo',
				type : 'POST',
				timeout: 10000,
				data : audio,
				processData: false,
				contentType: false,
				beforeSend: function(){},
				success: function( retorno ){
					console.log( retorno )
				},
				error: function( request, status, error ){}
			});
		}else if( _self.recorder.state == 'inactive' ){
			console.log(_self.chunks);
			var blob = new Blob( _self.chunks, { type: _self.audio.type });
			var audio = new FormData();
			audio.append( 'codlaudo', _self.codlaudo );
			audio.append( 'num', _self.num++ );
			audio.append( 'ext', _self.audio.ext );
			audio.append( 'audio', blob );
			
			$.ajax({
				url : '/Gravador/salvaDitado',
				type : 'POST',
				timeout: 10000,
				data : audio,
				processData: false,
				contentType: false,
				beforeSend: function(){
					$("#containerPlayer").html( '<img alt="loader-small" src="/assets/images/loader32Circle.svg" style="width:25px;"> Salvando...' );
				},
				success: function( retorno ){
					var j = jsonEncode( retorno, "json" );
					if( !j.status ){
						$("#containerPlayer").html( j.message );
						return false;
					}
					$("#containerPlayer").html( j.message );
					setTimeout( function(){  
						window.location.reload();
					}, 1500 );
				},
				error: function( request, status, error ){}
			});
			_self.tempo.m = _self.tempo.s = 0;
		}
	}
	
	/* Verifica status  */
	this.getState = function(){
		var state = false;
		if( typeof _self.recorder !== "undefined" ){
			state = _self.recorder.state;
		}
		return state;
	}
	
	/* relogio */
	this.cronoInit = function( label ){
		_self.intervalo.crono = setInterval( function(){
			_self.tempo.s++;
			if( _self.tempo.s == 60 ){
				_self.tempo.m++;
				_self.tempo.s = 0;
			}
			_self.cronoLabel( label, true );
		},1000 );
	}
	
	/* Label do relogio */
	this.cronoLabel = function( label, tempo ){
		if( tempo ){
			$("#containerPlayer").html( label + ' ' + ( "00" + _self.tempo.m ).slice(-2) + ':' + ( "00" + _self.tempo.s ).slice(-2) );
		}else{
			$("#containerPlayer").html( label );
		}
	}
}