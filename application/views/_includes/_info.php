<!-- INFO -->
<div class="col-md-12 col-sm-12 col-xs-12 sys-footer-info sys-footer-info-hide" id="footerInfo">
	<?php include SYS_VIEWS . '_includes/_loader-small.php'; ?>
	<div class="sys-footer-info-btn glyphicon glyphicon-chevron-up"	id="btnFooterInfo" onclick="showFooterInfo($(this))" data-status='0'></div>
	<ul class="nav nav-tabs col-sm-12 col-md-12 col-xs-12" role="tablist">
		<li role="presentation" class="active"><a href="#geralInfo" aria-controls="geralInfo" role="tab" data-toggle="tab">Geral</a></li>
		<!-- 
		<li role="presentation" class=""><a href="#faturamentoInfo" aria-controls="faturamentoInfo" role="tab" data-toggle="tab">Faturamento</a></li>
		-->
		<li role="presentation" class=""><a href="#extrasInfo" aria-controls="extrasInfo" role="tab" data-toggle="tab">Extras</a></li>
	</ul>
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="geralInfo">
	    	<div class="panel-body table-responsive" style="position:relative;">
				<table id="tableFooterInfo" class="table table-middle table-condensed sys-footer-info-tab" style="width:100% !important;">
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Conv&ecirc;nio:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOCONVENIO">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Digitador:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFODIGITADOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Envelopado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOENVELOPADOPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Envelopado em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOENVELOPADOEM">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Atendido por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOATENDIDOPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Realizado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOREALIZADOPOR">
						</td>
					</tr>
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Grupo:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOGRUPO">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Digitado em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFODIGITADOEM">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Recebeu para digitar:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFORECEBEUPARADIGITAR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Recebeu em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFORECEBEUPARADIGITAREM">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Pronto para entregar por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOPRONTOPARAENTREGARPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Liberado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOLIBERADOPOR">
						</td>
					</tr>
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Solicitante:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOSOLICITANTE">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Alterado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOALTERADOPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Entregue por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOENTREGUEPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Entregue em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOENTREGUEEM">
						</td>
						<td colspan="2">
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Exame:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOEXAME"/>
						</td>
					</tr>
			   	</table>
		   </div>
		</div>
		<!--  
	    <div role="tabpanel" class="tab-pane" id="faturamentoInfo">
	    	<div class="panel-body table-responsive" style="position:relative;">
				<table id="tableFooterInfo" class="table table-middle table-condensed sys-footer-info-tab" style="width:100% !important;">
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Fatura:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOFATURA">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Enviado em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOENVIADOEM">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Importado:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOIMPORTADO">
						</td>
					</tr>
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Con&ecirc;nio:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOCONVENIO2">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Status:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOSTATUS">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Valor total:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOVALORTOTAL">
						</td>
					</tr>
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Plano:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOPLANO">
						</td>
						<td colspan="4">
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Observação:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOOBSERVACAO">
						</td>
					</tr>
			   	</table>
		   </div>
		</div>
		-->
	    <div role="tabpanel" class="tab-pane" id="extrasInfo">
	    	<div class="panel-body table-responsive" style="position:relative;">
				<table id="tableFooterInfo" class="table table-middle table-condensed sys-footer-info-tab" style="width:100% !important;">
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Fantasia:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOFANTASIA">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Paciente:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOPACIENTE">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Assinado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOASSINADOPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Assinado em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOASSINADOEM">
						</td>
						<td rowspan="4" style="vertical-align: top !important;">
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Observa&ccedil;&atilde;o:</label>
							<textarea readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" style="height: 100% !important;" id="INFOOBSERVACAO"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Agenda:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOAGENDA">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Consulta:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOCONSULTA">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Revisado por:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOREVISADOPOR">
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12">Revisado em:</label>
							<input readonly class="col-sm-12 col-xs-12 sys-footer-info-input input-sm form-control" id="INFOREVISADOEM">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12"></label>
						</td>
						<td>
							<label class="sys-label sys-footer-info-label col-sm-12 col-xs-12"></label>
						</td>
						<td colspan="2">
						</td>
					</tr>
			   	</table>
		   </div>
		</div>
	</div>
</div>