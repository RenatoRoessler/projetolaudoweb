var FluxoDigitacao = function(){
	var _self = this;
	
	this.digitarLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'revisado' : [ 'revisado', 'S', 'i', "Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; est&aacute; revisado." ],
			'assinado' : [ 'assinado', 'S', 'i', "Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; est&aacute; assinado." ],
		}
		validChecksStats( id, checks );
		ir( '/Editor/digitar/' + id );
	}
	this.imprimirLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode imprimir este laudo, pois ele n&atilde;o foi digitado." ],
		}
		validChecksStats( id, checks );
		if( $("#" + id + " div[data-assinado='S']").length ){
			dialogo(
				'Imprimir',
				'Ol&aacute;,<br/>voc&ecirc; deseja inserir a assinatura em imagem ?',
				function(){
					ir( '/Editor/imprimir/' + id + '/1/imprimir', '_blank' );
					loader('hide');
				},
				function(){
					ir( '/Editor/imprimir/' + id + '/0/imprimir', '_blank' );
					loader('hide');
				},
				'p'
			);
		}else{
			ir( '/Editor/imprimir/' + id + '/0/imprimir', '_blank' );
		}
		loader('hide');
	}
	this.visualizarLaudo = function( cod ){
		ir( '/Editor/visualizar/' + cod.data("codlaudo") );
	}
	this.liberarLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele n&atilde;o foi digitado." ],
			'assinado' : [ 'assinado', 'N', 'i', "Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele n&atilde;o foi assinado." ],
			'liberado' : [ 'liberado', 'S', 'i', "Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele j&aacute; est&aacute; liberado." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/liberar/' + cod.data("codlaudo") );
	}
	this.liberarCLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'envelopado' : [ 'envelopado', 'S', 'i', "Laudo j&aaacute; est&aacute; envelopado." ],
			'pronto' : [ 'pronto', 'S', 'i', "Laudo j&aaacute; est&aacute; pronto para entrega." ],
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aaacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/cancelarLiberar/' + id );
	}
	this.enveloparCLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'pronto' : [ 'pronto', 'S', 'i', "Laudo j&aaacute; est&aacute; pronto para entrega." ],
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/cancelarEnvelopar/' + id );
	}
	this.prontoCLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/cancelarPronto/' + id );
	}
	this.enveloparLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele n&atilde;o foi digitado." ],
			'assinado' : [ 'assinado', 'N', 'i', "Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele n&atilde;o foi assinado." ],
			'liberado' : [ 'liberado', 'N', 'i', "Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele n&atilde;o foi liberado." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/envelopar/' + id );
	}
	this.prontoLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele n&atilde;o foi digitado." ],
			'assinado' : [ 'assinado', 'N', 'i', "Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele n&atilde;o foi assinado." ],
			'liberado' : [ 'liberado', 'N', 'i', "Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele n&atilde;o foi liberado." ],
			'envelopado' : [ 'envelopado', 'N', 'i', "Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele n&atilde;o foi envelopado." ],
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		ir( '/FluxoDigitacao/pronto/' + id );
	}
}
$("document").ready(function(){
	
	var controle = new FluxoDigitacao();
	
	//	Adiciona click e seleção a cada linha da tabela de registros
	$("#tableIndex tbody tr").on("click contextmenu",function(){
		selectLineInTable( $(this), function( line ){
			if( typeof line !== "undefined" ){
				$(".sys-btn-action-base-container").fadeIn("fast");
				loadFooterInfo();
			}
		} );
	});
	//	Habilita menu no botão direito sem viewer Dicom
	$.contextMenu({
        selector: "#tableIndex tbody tr[data-dicom='']", 
        callback: function(action, options) {
        	controle[action]( $(this) );
        },
        items: MENUACTION
    });
	
	//	Data picker
	startData("#FilterDataInicial,#FilterDataFinal");
	
	$("#btnSearch")
		.click(function(){
			$("#formulario").attr("action","/FluxoDigitacao");
			$("#formulario").submit();
		});
	$("#btnLimpar")
		.click(function(){
			$("input[id^='Filter'],select[id^='Filter']").val("");
			startSelect("refresh");
		});
	$("#btnImprimir")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.imprimirLaudo( cod )
		});
	$("#btnDigitar")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.digitarLaudo( cod )
		});
	$("#btnVisualizar")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.visualizarLaudo( cod )
		});
	
});