var FluxoMedico = function(){
	var _self = this;
	
	this.digitarLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'revisado' : [ 'revisado', 'S', 'i', "Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; est&aacute; revisado." ],
			'assinado' : [ 'assinado', 'S', 'i', "Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; est&aacute; assinado." ],
			'liberado' : [ 'liberado', 'S', 'i', "Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; est&aacute; liberado." ],
		}
		validChecksStats( id, checks );
		ir( '/Editor/digitar/' + id );
	}
	this.ditarLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'revisado' : [ 'revisado', 'S', 'i', "Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; est&aacute; revisado." ],
			'assinado' : [ 'assinado', 'S', 'i', "Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; est&aacute; assinado." ],
			'liberado' : [ 'liberado', 'S', 'i', "Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; est&aacute; liberado." ],
		}
		validChecksStats( id, checks );
		ir( '/Editor/ditar/' + id );
	}
	this.revisarLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele ainda n&atilde;o foi digitado." ],
			'assinado' : [ 'assinado', 'S', 'i', "Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele j&aacute; est&aacute; assinado." ],
			'liberado' : [ 'liberado', 'S', 'i', "Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele j&aacute; est&aacute; liberado." ],
		}
		validChecksStats( id, checks );
		ir( '/Editor/revisar/' + id );
	}
	this.revisarCLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'assinado' : [ 'assinado', 'S', 'i', "Laudo j&aacute; est&aacute; assinado." ],
			'liberado' : [ 'liberado', 'S', 'i', "Laudo j&aacute; est&aacute; liberado." ],
			'envelopado' : [ 'envelopado', 'S', 'i', "Laudo j&aacute; est&aacute; envelopado." ],
			'pronto' : [ 'pronto', 'S', 'i', "Laudo j&aacute; est&aacute; pronto para entrega." ],
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		dialogo(
			'Cancelar revis&atilde;o',
			'Ol&aacute;,<br/>voc&ecirc; tem certeza que deseja cancelar a revis&atilde;o do laudo?',
			function(){
				ir( '/FluxoMedico/cancelarRevisar/' + id );
			},
			function(){ },
			'p'
		);
	}
	this.assinarCLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'liberado' : [ 'liberado', 'S', 'i', "Laudo j&aacute; est&aacute; liberado." ],
			'envelopado' : [ 'envelopado', 'S', 'i', "Laudo j&aacute; est&aacute; envelopado." ],
			'pronto' : [ 'pronto', 'S', 'i', "Laudo j&aacute; est&aacute; pronto para entrega." ],
			'entregue' : [ 'entregue', 'S', 'i', "Laudo j&aacute; foi entregue." ],
		}
		validChecksStats( id, checks );
		dialogo(
			'Cancelar assinatura',
			'Ol&aacute;,<br/>voc&ecirc; tem certeza que deseja cancelar a assinatura do laudo?',
			function(){
				ir( '/FluxoMedico/cancelarAssinar/' + id );
			},
			function(){ },
			'p'
		);
	}
	this.imprimirLaudo = function( cod ){
		var id = cod.data("codlaudo");
		var checks = {
			'digitado' : [ 'digitado', 'N', 'i', "Voc&ecirc; n&atilde;o pode imprimir este laudo, pois ele ainda n&atilde;o foi digitado." ],
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
		var id = cod.data("codlaudo");
		ir( '/Editor/visualizar/' + id );
	}
	this.visualizarDICOM = function( dicom ){
		ir( dicom.data("dicom"), "_blank" );
		loader(0);
	}
}
$("document").ready(function(){
	
	var controle = new FluxoMedico();
	
//	Adiciona click e seleção a cada linha da tabela de registros
	$("#tableIndex tbody tr").on("click contextmenu",function(){
		selectLineInTable( $(this), function( line ){
			if( typeof line !== "undefined" ){
				$(".sys-btn-action-base-container").fadeIn("fast");
				if( !!$(line).data('dicom') ){
					$("#btnDicomViewer").show();
				}else{
					$("#btnDicomViewer").hide();
				}
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
	MENUACTION.sept = "---------";
	//$permissoes ['visualizarDICOM'] = [ 'name' => 'DicomViewer', 'icon' => 'folder-open' ];
	MENUACTION.visualizarDICOM = { "name" : "DicomViewer", "icon" : "folder-open" };
	$.contextMenu({
        selector: "#tableIndex tbody tr[data-dicom!='']", 
        callback: function(action, options) {
        	controle[action]( $(this) );
        },
        items: MENUACTION
    });
	
	//	Data picker
	startData("#FilterDataInicial,#FilterDataFinal");
	
	$("#btnSearch")
		.click(function(){
			$("#formulario").attr("action","/FluxoMedico");
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
	$("#btnDitarLaudo")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.ditarLaudo( cod )
		});
	$("#btnRevisar")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.revisarLaudo( cod )
		});
	$("#btnDicomViewer")
		.click(function(){
			var dicom = $("#tableIndex tbody tr.bg-lightgray");
			controle.visualizarDICOM( dicom )
		});
	$("#btnVisualizar")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.visualizarLaudo( cod )
		});
	$("#btnAssinar")
		.click(function(){
			var cod = $("#tableIndex tbody tr.bg-lightgray");
			controle.assinarLaudo( cod )
		});
});