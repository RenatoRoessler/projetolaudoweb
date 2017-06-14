<div id="container" class="container main-container-form">
	<?php include VIEWPATH . "_includes/_mensagem.php";?>
	<div class="row">
		<div class="col-xs-7 col-sm-7 col-md-7 sys-label-header" >
			Laudo - <?php echo ucfirst($this->uri->segment(2));?>
		</div>
	</div>
	<!-- FORMULARIO -->
	<form id="formulario" name="formulario" action="/Editor/<?php echo $this->uri->segment(2);?>" method="post" class="form-horizontal" data-parsley-validate >
		<!-- CAMPOS -->
		<input type="hidden" id="codlaudo" name="codlaudo" value="<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(2);?>" 
			data-code="<?php echo $this->uri->segment(3); ?>" data-action="<?php echo $this->uri->segment(2);?>">
		<?php include VIEWPATH . "_includes/_recorder.php";?>
		<div class="tab-content">
	   		<div class="col-sm-12 col-xs-12">
	    		<div class="col-main col-md-2 col-sm-2 col-xs-2">
					<label class="sys-label col-sm-12 col-xs-12">Prontu&aacute;rio:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Prontuario" value="<?php echo $retorno["PRONTUARIO"]; ?>" readonly >
				</div>
	    		<div class="col-main col-md-2 col-sm-2 col-xs-2">
					<label class="sys-label col-sm-12 col-xs-12">Data:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Data" value="<?php echo $retorno["DATAATENDIMENTO"]; ?>" readonly >
				</div>
	    		<div class="col-main col-md-8 col-sm-8 col-xs-8">
					<label class="sys-label col-sm-12 col-xs-12">Paciente:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Paciente" value="<?php echo $retorno["PACIENTE"]; ?>" readonly >
				</div>
			</div>
			<div class="col-sm-12 col-xs-12">
	    		<div class="col-main col-md-4 col-sm-4 col-xs-4">
					<label class="sys-label col-sm-12 col-xs-12">Exame:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Exame" value="<?php echo $retorno["EXAME"]; ?>" readonly >
				</div>
	    		<div class="col-main col-md-4 col-sm-4 col-xs-4">
					<label class="sys-label col-sm-12 col-xs-12">Solicitante:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Solicitante" value="<?php echo $retorno["SOLICITANTE"]; ?>" readonly >
				</div>
				<div class="col-main col-md-2 col-sm-2 col-xs-2" >
					<label class="sys-label col-sm-12 col-xs-12">Realizante:</label>
					<select class="form-control col-sm-12 col-xs-12 selectpicker" id="Realizante" name="Realizante" data-live-search="true" required>
						<?php if( !$retorno['CODREA'] ){ ?>
			      			<option value="">&nbsp;</option>
			      		<?php }?>
			      		<?php
			      			foreach ( $realizante as $k => $v ){
			      				$sel = ( $v['CODREA'] == $retorno['CODREA'] ) ? 'selected' : '';
			      		?>
			      				<option value="<?php echo $v['CODREA'];?>" <?php echo $sel;?> ><?php echo $v['NOME'];?></option>
			      		<?php
			      			}
			      		?>
			      </select>
				</div>
				<div class="col-main col-md-2 col-sm-2 col-xs-2">
					<label class="sys-label col-sm-12 col-xs-12">Revisor:</label>
					<select class="form-control col-sm-12 col-xs-12 selectpicker" id="Revisor" name="Revisor" data-live-search="true">
						<?php if( count( $revisor ) == 0 ){ ?>
			      		<option <?php if( $revisor['CODREA'] == '' ) echo "selected"; ?> value="">&nbsp;</option>
			      		<?php }?>
			      		<?php
			      		foreach ( $revisor as $k => $v ){
			      				$sel = ( $v['CODREA'] == $retorno['REVISALAUDO'] ) ? 'selected' : '';
			      		?>
			      				<option value="<?php echo $v['CODREA'];?>" <?php echo $sel;?> ><?php echo $v['NOME'];?></option>
			      		<?php
			      			}
			      		?>
			      </select>
				</div>
			</div>	
			
			<div class="col-xs-12 col-sm-12 col-md-12 divisor" ></div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
	    		<div class="col-main col-md-12 col-sm-12 col-xs-12">
					<label class="sys-label col-sm-12 col-xs-12">T&iacute;tulo:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Titulo" name="Titulo" value="<?php echo $retorno["TITULO"]; ?>" maxlength="60" >
				</div>
			</div>
			<div id="EditorHTMLContainer" class="col-main col-md-12 col-sm-12 col-xs-12" style="padding: 10px 0px 0px 10px !important;">
				<textarea id="EditorHTML" name="EditorHTML"><?php echo $retorno['LAUDO']?></textarea>
				<input type="hidden" id="EditorHTMLContent" name="EditorHTMLContent" value=""/>
			</div>
		</div>
	</form>
</div>
<div class="row col-md-12 col-sm-12 col-xs-12 sys-btn-action-base-container" style="display:block;">
	
	<?php if( in_array( $this->uri->segment(2), [ 'digitar', 'revisar' ] ) ){?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-success glyphicon glyphicon-save sys-btn-action-base" id="btnSalvar" 
			data-toggle="tooltip" data-placement="top" title="Salvar Laudo" ></button>
	</div>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-info glyphicon glyphicon-print sys-btn-action-base" id="btnImprimir" 
			data-toggle="tooltip" data-placement="top" title="Imprimir Laudo" ></button>
	</div>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-default glyphicon glyphicon-star sys-btn-action-base" id="btnInserirLaudoPadrao" 
			data-toggle="tooltip" data-placement="top" title="Laudo Padrão" ></button>
	</div>
	<?php }?>
	<?php if( $this->session->permissoes['assinar'] && $retorno['FM_REVISADO'] == 'S' && $retorno['FM_ASSINADO'] == 'N' ){ ?>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-purple glyphicon glyphicon-ok sys-btn-action-base" id="btnAssinar" 
			data-toggle="tooltip" data-placement="top" title="Assinar Laudo" ></button>
	</div>
	<?php }?>
	<?php if( in_array( $this->uri->segment(2), ['ditar' ] ) && $this->session->permissoes['ditar'] ){?>
	<div class="col-sm-2 col-xs-4">
		<button class="btn btn-danger glyphicon glyphicon-record sys-btn-action-base" id="btnRecordGrava" 
			data-toggle="tooltip" data-placement="top" title="Gravar ditado" ></button>
		<button class="btn btn-danger glyphicon glyphicon-stop sys-btn-action-base sys-hide" id="btnRecordPara" 
			data-toggle="tooltip" data-placement="top" title="Parar gravação e salvar ditado" ></button>
		<button class="btn btn-default glyphicon glyphicon-pause sys-btn-action-base sys-hide" id="btnRecordPause" 
			data-toggle="tooltip" data-placement="top" title="Pausar/Continuar ditado" ></button>
	</div>
	<?php }?>
	
	<div class="col-sm-1 col-xs-2">
	<?php if( $dicom ){?>
		<button class="btn btn-black glyphicon glyphicon-folder-open sys-btn-action-base" id="btnDicomViewer" 
			data-toggle="tooltip" data-placement="top" title="Dicom Viewer" onclick="ir( '<?php echo $dicom;?>', '_blank' );loader(0);" ></button>
	<?php }?>
	</div>
	
	<div class="col-sm-1 col-xs-2" style="float:right;">
		<button class="btn btn-default glyphicon glyphicon-chevron-left sys-btn-action-base" id="btnCancelar" data-index="<?php echo $voltarPage;?>"
			data-toggle="tooltip" data-placement="top" title="Voltar" ></button>
	</div>
</div>
<div class="sys-container-box sys-container-player-small">
	<div id="containerPlayerToggle" title="Ditado(s)" data-toggle="tooltip" data-placement="top" class="sys-container-player-toggle glyphicon glyphicon glyphicon-record sys-hide" onclick="$('.sys-container-box').toggleClass('sys-container-player-small')"></div>
	<div class="sys-container-player sys-shadow sys-hide" id="containerPlayer">
		<div class="sys-container-player-title" onclick="$('.sys-container-box').toggleClass('sys-container-player-small')" >
			<span data-toggle="tooltip" data-placement="bottom" title="Encolher/Estender">Ditado(s)</span>
		</div>
	</div>
</div>
<script type="text/javascript">
	EDITORMODE='<?php echo $this->uri->segment(2);?>';
</script>
<script type="text/placeholder" id="DialogLaudoPadrao">
<div class='col-sm-12 col-md-12 col-xs-12'>
    <div class="col-main col-md-8 col-sm-8 col-xs-7">
		<label class="sys-label col-sm-12 col-xs-12">Nome:</label>
		<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="NomeTextoPadrao" value="" >
	</div>
    <div class="col-main col-md-3 col-sm-3 col-xs-3">
		<label class="sys-label col-sm-12 col-xs-12">Textos de:</label>
		<select class="form-control col-sm-12 col-xs-12 selectpicker" id="TipoTextoPadrao" name="TipoTextoPadrao" >
			<option value='<?php echo $retorno["CODEXA"]; ?>'><?php echo $retorno["EXAME"]; ?></option>
			<option value=''>outros exames</option>
		</select>
	</div>
    <div class="col-main col-md-1 col-sm-1 col-xs-2">
    	<label class="sys-label col-sm-12 col-xs-12">&nbsp;</label>
		<button type="button" id="btnFiltraLaudoPadrao" class="btn btn-primary btn-xs glyphicon glyphicon-search" style="top:-1px;" ><span> Filtrar</span></button>
	</div>
</div>
<div class='col-sm-12 col-md-12 col-xs-12 divisor'></div>
<div class='col-sm-12 col-md-12 col-xs-12'>
    <div class="panel-body table-responsive sys-texto-padrao-container">
		<table id="tableTextoPadrao" class="table table-middle table-condensed table-hover" style="width:100% !important;">
			<thead>
				<tr>
					<th>T&iacute;tulo</th>
					<th>Realizante</th>
					<th>Exame</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<div class='col-sm-12 col-md-12 col-xs-12 divisor'></div>
<iframe class='col-sm-12 col-md-12 col-xs-12 sys-texto-padrao-iframe' id='htmlTextoPadrao' src=''></iframe>
<div class='col-sm-12 col-md-12 col-xs-12'></div>
</script>
