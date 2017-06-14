<div id="container" class="container main-container-form">
	<div class="row">
		<div class="col-xs-12 col-md-12" >
			<?php 
				include VIEWPATH . "_includes/_mensagem.php";
			?>
		</div>
	</div>
	<!-- TABELA -->
	<form id="formulario" name="formulario" action="/FluxoDigitacao/<?php echo $this->uri->segment(2);?>" method="post" class="form-horizontal" data-parsley-validate >
		<!-- ABAS -->
		<div class="col-sm-12 col-md-12 col-xs-12">
	    	<ul class="nav nav-tabs col-sm-12 col-md-12 col-xs-12" role="tablist">
	    		<li role="presentation" class="sys-label-tabs col-xs-12 col-sm-3 col-md-3">Fluxo de Digita&ccedil;&atilde;o</li>
				<li role="presentation" class="active"><a href="#consulta" aria-controls="consulta" role="tab" data-toggle="tab">Geral</a></li>
				<li role="presentation" ><a href="#laudo" aria-controls="laudo" role="tab" data-toggle="tab">Laudo</a></li>
				<li role="presentation" ><a href="#digitacao" aria-controls="digitacao" role="tab" data-toggle="tab">Digita&ccedil;&atilde;o</a></li>
				<li role="presentation" ><a href="#tempo" aria-controls="tempo" role="tab" data-toggle="tab">Tempo</a></li>
			</ul>
			<div class="col-xs-4 col-md-2 col-sm-2 sys-btn-filter-laudo">
				<div class="col-xs-6 col-sm-6">
		      		<button type="button" id="btnLimpar" class="btn btn-default btn-sm sys-btn-search glyphicon glyphicon-erase" ><span> Limpar</span></button>
	      		</div>
				<div class="col-xs-6 col-sm-6">
		      		<button type="button" id="btnSearch" class="btn btn-primary btn-sm sys-btn-search glyphicon glyphicon-search" ><span> Filtrar</span></button>
	      		</div>
		    </div>
		</div>
		
		<div class="row col-md-12 col-sm-12 col-xs-12" style='margin-top:3px;'></div>
		
		<div class="tab-content">
		
			<!-- ABA GERAL -->
    		<div role="tabpanel" class="tab-pane active" id="consulta">
    			<div class="col-sm-12 col-xs-12">
	    			<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-md-1 col-sm-12 col-xs-12">Prontuário:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterProntuario" name="FilterProntuario" value="<?php echo $this->session->filter['FilterProntuario']?>" data-mask="000000000000" >
					</div>
	    			<div class="col-main col-md-1 col-sm-1 col-xs-4">
						<label class="sys-label col-sm-12 col-xs-12">Consulta:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterConsulta" name="FilterConsulta" value="<?php echo $this->session->filter['FilterConsulta']?>" data-mask="000000000000" >
					</div>
	    			<div class="col-main col-md-2 col-sm-2 col-xs-4">
						<label class="sys-label col-sm-12 col-xs-12">Paciente:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterPaciente" name="FilterPaciente" value="<?php echo $this->session->filter['FilterPaciente']?>" >
					</div>
	    			<div class="col-main col-md-2 col-sm-2 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Exame:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterExame" name="FilterExame" value="<?php echo $this->session->filter['FilterExame']?>" >
					</div>
	    			<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Início:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterDataInicial" name="FilterDataInicial" value="<?php echo $this->session->filter['FilterDataInicial'];?>" data-mask="00/00/0000" placeholder="DD/MM/AAAA" >
					</div>
	    			<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Fim:</label>
						<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="FilterDataFinal" name="FilterDataFinal" value="<?php echo $this->session->filter['FilterDataFinal']?>" data-mask="00/00/0000" placeholder="DD/MM/AAAA" >
					</div>
					<div class="col-main col-sm-2 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Sala:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterSetor" name="FilterSetor" data-live-search="true" >
				      		<option <?php if( $this->session->filter['FilterSetor'] == "" ) echo "selected"; ?> value="">Todas</option>
				      		<?php
				      			foreach ( $setor as $k => $v ){
				      				$sel = ( $v['CODSETOR'] == $this->session->filter['FilterSetor'] ) ? 'selected' : '';
				      		?>
				      				<option value="<?php echo $v['CODSETOR'];?>" <?php echo $sel;?> ><?php echo $v['DESCRICAO'];?></option>
				      		<?php
				      			}
				      		?>
				      </select>
					</div>
					<div class="col-main col-sm-2 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Empresa:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterInstituicao" name="FilterInstituicao" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterInstituicao'] == '' ) echo "selected"; ?> value="">Todas</option>
				      		<?php
				      			foreach ( $instituicao as $k => $v ){
				      				$sel = ( $v['CODINST'] == $this->session->filter['FilterInstituicao'] ) ? 'selected' : '';
				      		?>
				      				<option value="<?php echo $v['CODINST'];?>" <?php echo $sel;?> ><?php echo $v['FANTASIA'];?></option>
				      		<?php
				      			}
				      		?>
				      </select>
					</div>
				</div>
    		</div>
    		<!-- ABA LAUDO -->
    		<div role="tabpanel" class="tab-pane" id="laudo">
    			<div class="col-sm-12 col-xs-12">
    				<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Laudado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterLaudado" name="FilterLaudado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterLaudado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterLaudado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterLaudado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
    				<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Ditado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterDitado" name="FilterDitado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterDitado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterDitado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterDitado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
    				<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Revisado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterRevisado" name="FilterRevisado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterRevisado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterRevisado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterRevisado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
    				<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Assinado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterAssinado" name="FilterAssinado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterAssinado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterAssinado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterAssinado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
    			</div>
    		</div>
    		<!-- ABA DIGITACAO -->
    		<div role="tabpanel" class="tab-pane" id="digitacao">
    			<div class="col-sm-12 col-xs-12">
    				<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Digitado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterDigitado" name="FilterDigitado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterDigitado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterDigitado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterDigitado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Impresso:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterImpresso" name="FilterImpresso" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterImpresso'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterImpresso'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterImpresso'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Liberado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterLiberado" name="FilterLiberado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterLiberado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterLiberado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterLiberado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Envelopado:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterEnvelopado" name="FilterEnvelopado" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterEnvelopado'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterEnvelopado'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterEnvelopado'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Pronto:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterPronto" name="FilterPronto" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterPronto'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterPronto'] == 'N' ) echo "selected"; ?> value="N">Não</option>
				      		<option <?php if( $this->session->filter['FilterPronto'] == 'S' ) echo "selected"; ?> value="S">Sim</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Entregue:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterEntregue" name="FilterEntregue" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterEntregue'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterEntregue'] == 'N' ) echo "selected"; ?> value="N">Sim</option>
				      		<option <?php if( $this->session->filter['FilterEntregue'] == 'S' ) echo "selected"; ?> value="S">Não</option>
				      </select>
					</div>
    			</div>
    		</div>
			<!-- ABA TEMPO -->
    		<div role="tabpanel" class="tab-pane" id="tempo">
    			<div class="col-sm-12 col-xs-12">
					<div class="col-main col-sm-2 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">Status:</label>
						<select class="form-control col-sm-12 col-xs-12 selectpicker" id="FilterTempo" name="FilterTempo" data-live-search="true">
				      		<option <?php if( $this->session->filter['FilterTempo'] == '' ) echo "selected"; ?> value="">Todos</option>
				      		<option <?php if( $this->session->filter['FilterTempo'] == 'A' ) echo "selected"; ?> value="A">Atrasado</option>
				      		<option <?php if( $this->session->filter['FilterTempo'] == 2 ) echo "selected"; ?> value="2">Menos de 2 horas</option>
				      		<option <?php if( $this->session->filter['FilterTempo'] == 6 ) echo "selected"; ?> value="6">Menos de 6 horas</option>
				      		<option <?php if( $this->session->filter['FilterTempo'] == 12 ) echo "selected"; ?> value="12">Menos de 12 horas</option>
				      		<option <?php if( $this->session->filter['FilterTempo'] == 24 ) echo "selected"; ?> value="24">Menos de 24 horas</option>
				      </select>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">&nbsp;</label>
						<div class="btn-green-circle sys-info-round sys-info-round-label" style="float:left;">23h</div>
						<div class="col-main col-sm-6 col-xs-6">Tempo Restante</div>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">&nbsp;</label>
						<div class="btn-danger glyphicon glyphicon-thumbs-down sys-info-round" style="float:left;"></div>
						<div class="col-main col-sm-6 col-xs-6">Atrasado</div>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">&nbsp;</label>
						<div class="btn-success glyphicon glyphicon-ok sys-info-round" style="float:left;"></div>
						<div class="col-main col-sm-6 col-xs-6">Pronto Entrega</div>
					</div>
					<div class="col-main col-sm-1 col-xs-2">
						<label class="sys-label col-sm-12 col-xs-12">&nbsp;</label>
						<div class="btn-primary glyphicon glyphicon-thumbs-up sys-info-round" style="float:left;"></div>
						<div class="col-main col-sm-6 col-xs-6">Entregue</div>
					</div>
				</div>
    		</div>
    	</div>
    	
    	<div class="row col-md-12 col-sm-12 col-xs-12" style="margin-top:3px;"></div>
    	
    	<!-- LISTA FLUXO DE LAUDOS -->
    	<div class="row col-md-12 col-sm-12 col-xs-12">
			<div class="col-md-12">
				<div class="panel-group" >
					<div class="panel panel-default">
					    <div id="collapseTodos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTodos">
					    	<div class="panel-body table-responsive">
								<table id="tableIndex" class="table table-middle table-condensed table-hover" style="width:100% !important;">
									<thead>
										<tr>
											<th>Prontuário</th>
											<th>Consulta</th>
											<th>Realização</th>
											<th>Paciente</th>
											<th>Exame</th>
											<th>Atendimento</th>
											<th>Tempo</th>
											<th>Ditado</th>
											<th>Laudado</th>
											<th>Digitado</th>
											<th>Revisado</th>
											<th>Assinado</th>
											<th>Impresso</th>
											<th>Liberado</th>
											<th>Envelop.</th>
											<th>Pronto</th>
											<th>Entregue</th>
										</tr>
									</thead>
									<tbody>
				    		<?php 
				    				foreach ( $retorno as $p => $t ){
				    		?>
				    				<tr id="<?php echo $t['CODLAUDO'];?>" 
				    					data-codlaudo="<?php echo $t['CODLAUDO'];?>"
				    					data-dicom="<?php echo $t['DICOM'];?>"
				    					>
				    					<td><?php echo $t['PRONTUARIO'];?></td>
				    					<td><?php echo $t['CONSULTA'];?></td>
				    					<td><?php echo $t['DATAATENDIMENTO'];?></td>
				    					<td><?php echo $t['PACIENTE']; ?></td>
				    					<td><?php echo $t['EXAME'];?></td>
				    					<td><?php echo $t['REALIZADO'];?></td>
				    					<?php 
				    						if( $t['FM_ENTREGUE'] == 'S' ){
				    							$status = 'E';
				    						}elseif( $t['FM_PRONTOPARAENTREGA'] == 'S' ){
				    							$status = 'P';
				    						}elseif( $t['TEMPO'] == '0' ){
				    							$status = 'A';
				    						}else{
				    							$status = 'T';
				    						}
				    						
			    							if( $status == 'T' ) {
			    								/*$mins = formatMinute($t['TEMPO']);
			    								$labelt1 = '';
			    								$labelt1 .= ( $mins['d'] ) ? $mins['d'] . ' dia(s), ': '';
			    								$labelt1 .= ( $mins['h'] ) ? $mins['h'] . ' hora(s), ': '';
			    								$labelt1 .= ( $mins['m'] ) ? $mins['m'] . ' minuto(s), ': '';
			    								$labelt1 = substr( $labelt1, 0, -2 );
			    								$pop = " data-toggle='tooltip' data-html='true' data-placement='top' title='Prev.: $t[DTPREVISAOENTREGA]<br/>$labelt1' ";
			    								
			    								$labelt2 = ( $mins['d'] ) ? $mins['d'].'d' : ( $mins['h'] ) ? $mins['h'].'h' : $mins['m'].'m';*/
			    								$pop = " data-toggle='tooltip' data-html='true' data-placement='top' title='Prev.: $t[DTPREVISAOENTREGA]<br/>hora(s)' ";
			    								$labelt2 = $t['TEMPO'].'h';
			    								
			    							}else{
			    								$labelt2 = $pop = null;
			    							}
			    						?>
				    					<td><div class="<?php echo $csslabel[$status];?>" <?php echo $pop;?>><?php echo $labelt2;?></div ></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_DITADO']];?>" data-ditado="<?php echo $t['FM_DITADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_LAUDADO']];?>" data-laudado="<?php echo $t['FM_LAUDADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_DIGITADO']];?>" data-digitado="<?php echo $t['FM_DIGITADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_REVISADO']];?>" data-revisado="<?php echo $t['FM_REVISADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_ASSINADO']];?>" data-assinado="<?php echo $t['FM_ASSINADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_IMPRESSO']];?>" data-impresso="<?php echo $t['FM_IMPRESSO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_LIBERADO']];?>" data-liberado="<?php echo $t['FM_LIBERADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_ENVELOPADO']];?>" data-envelopado="<?php echo $t['FM_ENVELOPADO'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_PRONTOPARAENTREGA']];?>" data-prontoparaentrega="<?php echo $t['FM_PRONTOPARAENTREGA'];?>" ></div></td>
				    					<td><div class="<?php echo $csslabel[$t['FM_ENTREGUE']];?>" data-entregue="<?php echo $t['FM_ENTREGUE'];?>" ></div></td>
				    				</tr>
				    		<?php
				    				}
				    		?>
				    				</tbody>
				    			</table>
					    	</div>
					    </div>
					</div>	
				</div>	
			</div>
		</div>
		 <!-- PAGINACAO -->
		<div class="row">
			<nav class="col-xs-12 col-md-12" >
				<?php echo $paginacao; ?>
			</nav>
		</div>
	</form>
</div>
<?php 
	include VIEWPATH . "_includes/_info.php";
?>
<?php 
	$permissoes = array();
?>
<div class="row col-md-11 col-sm-11 col-xs-11 sys-btn-action-base-container">
	<?php if( $this->session->permissoes['digitar'] || $this->session->permissoes['laudar'] ){
			$permissoes[ 'digitarLaudo' ] = array( 'name' => 'Digitar Laudo', 'icon' => 'pencil' );
	?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-primary glyphicon glyphicon-pencil sys-btn-action-base" id="btnDigitar" 
			data-toggle="tooltip" data-placement="top" title="Digitar Laudo" ></button>
	</div>
	<?php }?>
	<?php if( $this->session->permissoes['digitar'] || $this->session->permissoes['laudar'] ){
			$permissoes[ 'imprimirLaudo' ] = array( 'name' => 'Imprimir Laudo', 'icon' => 'print' );
	?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-info glyphicon glyphicon-print sys-btn-action-base" id="btnImprimir" 
			data-toggle="tooltip" data-placement="top" title="Imprimir Laudo" ></button>
	</div>
	<?php }?>
	<?php if( $this->session->permissoes['visualizar']){
			$permissoes[ 'visualizarLaudo' ] = array( 'name' => 'Visualizar Laudo', 'icon' => 'book' );
	?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-default glyphicon glyphicon-book sys-btn-action-base" id="btnVisualizar" 
			data-toggle="tooltip" data-placement="top" title="Visualizar Laudo" ></button>
	</div>
	<?php }?>
	<?php 
		$permissoes[ 'statusLaudo' ] = array( 
			'name' => 'Situação', 
			'items' => array(
				'liberarLaudo' => array( 'name' => 'Liberado', 'icon' => 'check' ),	
				'enveloparLaudo' => array( 'name' => 'Envelopado', 'icon' => 'envelope' ),	
				'prontoLaudo' => array( 'name' => 'Pronto para Entrega', 'icon' => 'ok-circle' ),
				'liberarCLaudo' => array( 'name' => 'Cancelar Liberado', 'icon' => 'check sys-icon-red' ),
				'enveloparCLaudo' => array( 'name' => 'Cancelar Envelopado', 'icon' => 'envelope sys-icon-red' ),
				'prontoCLaudo' => array( 'name' => 'Cancelar Pronto para Entrega', 'icon' => 'ok-circle sys-icon-red' ),
			),
			'icon' => 'tag'
		);
	?>
	<?php if( $this->session->permissoes['entregar'] && false ){
			$permissoes[ 'entregaLaudo' ] = array( 'name' => 'Entregar Exame', 'icon' => 'gift' );
	?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-purple glyphicon glyphicon-gift sys-btn-action-base" id="btnEntregar" 
			data-toggle="tooltip" data-placement="top" title="Entregar Exame" ></button>
	</div>
	<?php }?>
</div>
<script>
	MENUACTION = <?php echo json_encode( $permissoes ); ?>
</script>
