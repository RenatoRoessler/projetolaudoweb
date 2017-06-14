var CadastroTextoPadrao = function(){
	var _self = this;
	this.salvar = function(){
		preventGo( false );
		dialogo(
			"Salvar",
			"Deseja salvar texto padrão ?",
			function(){
				$( this ).prop( "disabled", true );
				var cod = $('#codtexto').val();
				$("#EditorHTMLContent").val( htmlConvertToDB( tinyMCE.activeEditor.getContent({format : 'html'}))) ;
				//	Update
				$( "#formulario" )
					.attr( 'action', '/CadastroTextoPadrao/salvar/' + cod )
					.submit();
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
				//	Pegando texto do editor
				tinyMCE.activeEditor.setContent( iframeDocument.documentElement.getElementsByTagName('body')[0].innerHTML );
				
				var line = $("#tableTextoPadrao .bg-lightgray");
				$("#Titulo").val( $(line.children()[0]).text() );
				$("#Exame").val( $(line.children()[2]).text() );
				$("#Codexa").val( line.data("codexa") );
				$("#Usuario").val( line.data("usuario") );
				$("#Alterou").val( line.data("alterou") );
				$("#Realizante").val( line.data("codrea") );
				$("#codtexto").val( line.data("idlaudo") );
				
				startSelect("refresh");
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
	
	this.buscaExame = function(pagina){
		dialogoBusca(
			[ 
				$("#btnProcuraExame").data("d1"),
				{ 'Ativo':'S', 'Nome':'$' },
				"Codexa,regexp_replace(CBHPM,'[^0-9]','') as CBHPM,regexp_replace(TUSS,'[^0-9]','') as TUSS,Nome", 
				'Codexa',
				'Busca por Exame', 
				'controle.selecionaCodigoExame',
				'controle.buscaExame',
			]
		);
	}
	this.selecionaCodigoExame = function(dados){
		$("#Exame").val(dados.NOME);
		$("#Codexa").val(dados.CODEXA);
		hideModal();
	}
}

$("document").ready(function(){
	
	controle = new CadastroTextoPadrao();
	textoPadrao = new TextoPadrao();
	var editor = new EditorHTML();
	
	$("#btnInserir")
		.click(function(){
			controle.textoPadrao();
		});
	$("#btnNovo")
		.click(function(){
			ir("/CadastroTextoPadrao");
		});
	
	$("#btnSalvar")
		.click(function(){
			controle.salvar();
		});
	
	// iniciando TextoPadrao
	editor['digitar']( '#EditorHTML' );
	
	$('input[type="text"],select').change(function(){
		preventGo(true);
	});
	
	$(window).scroll(function(){
		if( $(this).scrollTop() > 150 ){
			$(this).scrollTop(150)
		}
	});
});