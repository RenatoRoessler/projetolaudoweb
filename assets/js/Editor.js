var Editor = function(){
	var _self = this;
	
	this.controlsAudioInit = function(){
		var seconds = 5;
		var audios = document.getElementsByTagName('audio');
		$.each(audios, function(i,a){
		    a.onplay = function() {
		    	$( window ).unbind('keydown').unbind('keyup');
		    	tinyMCE.activeEditor.off('keyup').off('keydown');
		        $.each(audios, function(ii,aa){
		        	if( a.id != aa.id ){
		            	aa.load();
		            }
		        });
		        monitorKey([118], function(){
		    		a.currentTime = a.currentTime - seconds;   
		    	});
		        monitorKey([119], function(){
		        	a.currentTime = a.currentTime + seconds;   
		        });
		        monitorKey([120], function(){
		        	a.pause();
		        });
		        monitorKeyEditor( tinyMCE.activeEditor, [118], function(){
		        	a.currentTime = a.currentTime - seconds; 
		        });
		        monitorKeyEditor( tinyMCE.activeEditor, [119], function(){
		        	a.currentTime = a.currentTime + seconds;
		        });
		    	monitorKeyEditor( tinyMCE.activeEditor, [120], function(){
		    		a.pause();
				});
		    };
		    a.onpause = function(){
		    	$( window ).unbind('keydown').unbind('keyup');
		    	tinyMCE.activeEditor.off('keyup').off('keydown');
		    	monitorKey([120], function(){
		    		a.play();
				});
		    	monitorKeyEditor( tinyMCE.activeEditor, [120], function(){
		    		a.play();
				});
		    }
		});
	}
	
	this.verificaDitado = function(){
		$.ajax({
			url : '/Editor/verificaDitado/' + $("#codlaudo").data('code'),
			type : 'POST',
			timeout: 10000,
			data : {},
			beforeSend: function(){},
			success: function( retorno ){
				var j = jsonEncode( retorno, 'json' );
				/* Verificando se tem arquivos para recuperar*/
				if( j.status == 999 ){
					_self.recuperarDitado(j);
					return false;
				}
				var f = false;
				$.each(j, function(i,v){
					$("#containerPlayer").append( 
						"<div class='sys-label-audio'>Seq.: "+v.i.s+", Usuário: "+v.i.u+", Data: "+v.i.c+"</div>" +
						"<div class='sys-content-audio'>" +
							"<audio id='audio"+i+"' src='/"+v.p+"' controls >" +
								"<p>Seu navegador não suporta essa media</p>" +
							"</audio>" +
						"</div>" +
						"<div class='sys-content-audio-action'>" +
							"<a href='javascript:loader(\"hide\");' onclick='controle.excluirDitado(\""+v.f+"\",\""+v.i.s+"\")' >Excluir</a>" +
							"<a href='javascript:loader(\"hide\");' onclick='ir(\"/Sys/download/B/"+v.pp+"\",\"_blank\")' >Download</a>" +
						"</div>"
					);
					f = true;
				});
				if( f ){
					$('#containerPlayer,#containerPlayerToggle').show();
				}
				_self.controlsAudioInit();
				startTooltip();
			},
			error: function( request, status, error ){ }
		});
	}
	
	this.recuperarDitado = function(o){
		dialogo(
			"Recupera&ccedil;&atilde;o de Ditado",
			"Ol&aacute;,<br/>" +
			"existe um &aacute;udio ditado que aparentemente n&atilde;o foi salvo corretamente.<br/><br/>" +
			"Gostaria de recuper&aacute;-lo e salv&aacute;-lo como ditado do laudo?<br/><br/>" +
			"<div class='sys-label-audio'>Seq.: "+o.file.s+", Usuário: "+o.file.u+", Data: "+o.file.d+"</div>" +
			"<div class='sys-content-audio'>" +
				"<audio id='audio"+o.file.s+"' src='/"+o.file.f+"' controls >" +
					"<p>Seu navegador não suporta essa media</p>" +
				"</audio>" +
			"</div>",
			function(){
				$.ajax({
					url : '/Gravador/recuperaDitadoIntervalo/' + o.file.n,
					type : 'POST',
					timeout: 10000,
					data : {},
					beforeSend: function(){ 
						loader('show');
					},
					success: function( retorno ){
						loader('hide');
						window.location.reload();
					},
					error: function( request, status, error ){
						loader('hide');
						window.location.reload();
					}
				});
			},
			function(){
				dialogo(
					'&Uacute;ltima chance',
					'Tem certeza que quer excluir esse &aacute;udio ?',
					function(){
						$.ajax({
							url : '/Gravador/descartaDitadoIntervalo/' + o.file.n,
							type : 'POST',
							timeout: 10000,
							data : {},
							beforeSend: function(){ 
								loader('show');
							},
							success: function( retorno ){
								loader('hide');
								window.location.reload();
							},
							error: function( request, status, error ){
								loader('hide');
								window.location.reload();
							}
						});
					},
					function(){},
					'p'
				);
			},
			'p',
			false,
			true,
			'Recuperar',
			'Descartar'
		);
	}
	
	this.salvar = function(){
		var act = $("#codlaudo").data("action");
		act = ( act == "digitar" ) ? "salvar" : act;
		preventGo( false );
		dialogo(
			firstCharUpper(act),
			"Deseja "+act+" laudo ?",
			function(){
				$( this ).prop( "disabled", true );
				var cod = $('#codlaudo').val();
				$("#EditorHTMLContent").val( htmlConvertToDB( tinyMCE.activeEditor.getContent({format : 'html'}))) ;
				if( typeof cod !== "undefined" ){
					//	Update
					$( "#formulario" )
						.attr( 'action', '/Editor/salvar/' + cod )
						.submit();
				}
			},
			function(){},
			"p"
		);
	}

	this.textoPadrao = function(){
		dialogo(
			"Laudo Padr&atilde;o",
			$("#DialogLaudoPadrao").html(),
			function(){
				var iframe = document.getElementById('htmlTextoPadrao');
				var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
				tinyMCE.activeEditor.setContent( iframeDocument.documentElement.getElementsByTagName('body')[0].innerHTML );
				preventGo(true);
				hideModal();
			},
			function(){
				hideModal()
			},
			"p",
			true,
			true,
			"Inserir Selecionado",
			"Cancelar"
		);
		$("#btnDialogoSim1").prop("disabled",true);
		$("#btnFiltraLaudoPadrao")
			.click(function(){
				var param = {};
				param.codexa = $("#TipoTextoPadrao").val()
				param.nome = $("#NomeTextoPadrao").val()
				textoPadrao.filtraTextoPadrao( param );
			});
		setTimeout(function(){
			$("#NomeTextoPadrao").focus()
			keyCallClick( "#NomeTextoPadrao", "#btnFiltraLaudoPadrao", 13 ); // 13 -> ENTER
		},700);
		startSelect();
	}
	this.excluirDitado = function ( file, seq ){
		dialogo(
			'Excluir Ditado',
			'Ol&aacute;,<br/>voc&ecirc; tem certeza que deseja excluir a grava&ccedil;&atilde;o "Seq.: '+seq+'" ?',
			function(){
				$.ajax({
					url : '/Editor/excluirDitado/' + $("#codlaudo").data('code') + '/' + file,
					type : 'POST',
					timeout: 10000,
					data : {},
					beforeSend: function(){
						loader("show")
					},
					success: function( retorno ){
						loader("hide");
						var j = jsonEncode( retorno, 'json' );
						mensagem( j.tipo, j.message );
						if(j.status){
							setTimeout( function(){
								window.location.reload();
							}, 1500 );
						}
					},
					error: function( request, status, error ){
						loader("hide");
					}
				});
			},
			function(){},
			'p'
		);
	}
	this.assinarLaudo = function( cod ){
		var id = cod;
		dialogo(
			"Assinar Laudo",
			"Deseja assinar laudo ?",
			function(){ir( '/FluxoMedico/assinar/' + id )},
			function(){},
			"p"
		);
	}
}

$("document").ready(function(){
	
	controle = new Editor();
	textoPadrao = new TextoPadrao();
	var editor = new EditorHTML();
	var gravador = new Gravador();
	
	$("#btnCancelar")
		.click(function(){
			ir( $(this).data('index') )
		});
	
	$("#btnInserirLaudoPadrao")
		.click(function(){
			controle.textoPadrao();
		});
	
	$("#btnImprimir")
		.click(function(){
			ir( '/Editor/imprimir/' + $('#codlaudo').val() + '/imprimir', '_blank' );
			loader('hide')
		});
	
	$("#btnAssinar")
		.click(function(){
			controle.assinarLaudo( $("#codlaudo").data("code") );
		});
	
	$("#btnSalvar")
		.click(function(){
			controle.salvar();
		});
	
	$("#btnRecordGrava")
		.click( function(){
			var state = gravador.getState();
			if( !state || state == 'inactive' ){
				dialogo(
					'Ditar Laudo',
					"Ol&aacute;,<br/>voc&ecirc; deseja iniciar ditado do laudo ?<br/><br/>" +
					"<b>DICA</b>: Durante a grava&ccedil;&atilde;o voc&ecirc; pode usar teclas de atalho.<br/>" +
					"<ul style='list-style:none;margin-left:-20px;'><li><b>Tecla P:</b> pausa ou resume a grava&ccedil;&atilde;o do ditado.</li>" +
					"<li><b>Tecla S:</b> para e salva a grava&ccedil;&atilde;o do ditado.</li></ul>",
					function(){
						preventGo(true);
						gravador.init();
						/* Tecla P */
						monitorKey([80], function(){
							$("#btnRecordPause").trigger('click');
						} );
						monitorKeyEditor( tinyMCE.activeEditor, [80], function(){
							$("#btnRecordPause").trigger('click');
				        });
						/* Tecla S*/
						monitorKey([83], function(){
							$("#btnRecordPara").trigger('click');
						} );
						monitorKeyEditor( tinyMCE.activeEditor, [83], function(){
							$("#btnRecordPara").trigger('click');
				        });
						$('#btnRecordPara,#btnRecordPause,#containerPlayer').show();
						$('#btnRecordGrava').hide();
					},
					function(){},
					'p'
				);
			}
		});
	
	$("#btnRecordPause")
		.click( function(){
			var state = gravador.getState();
			if( !state || state == 'recording' ){
				gravador.pause();
				$("#btnRecordPause").removeClass('glyphicon-pause').addClass('glyphicon-play');
			}else if( state == 'paused' ){
				gravador.resume();
				$("#btnRecordPause").removeClass('glyphicon-play').addClass('glyphicon-pause');
			}
		});

	$("#btnRecordPara")
		.click( function(){
			$('#btnRecordPara,#btnRecordPause').hide();
			preventGo(false);
			gravador.para();
			$( window ).unbind('keydown').unbind('keyup');
			tinyMCE.activeEditor.off('keyup').off('keydown');
		});
	
	// iniciando editor
	editor[EDITORMODE]( '#EditorHTML' );
	
	$('input[type="text"],select').change(function(){
		preventGo(true);
	});
	
	controle.verificaDitado();
	
	$(window).scroll(function(){
		if( $(this).scrollTop() > 210 ){
			$(this).scrollTop(210)
		}
	});
});