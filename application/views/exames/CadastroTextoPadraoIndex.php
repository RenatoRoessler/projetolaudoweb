<div id="container" class="container main-container-form">
	<?php include VIEWPATH . "_includes/_mensagem.php";?>
	<div class="row">
		<div class="col-xs-7 col-sm-7 col-md-7 sys-label-header" >
			Texto Padr&atilde;o
		</div>
	</div>
	<!-- FORMULARIO -->
	<form id="formulario" name="formulario" action="/CadastroTextoPadrao/" method="post" class="form-horizontal" data-parsley-validate >
		<!-- CAMPOS -->
		<input type="hidden" id="codtexto" name="codtexto" value="<?php echo $codtexto;?>">
		<div class="tab-content">
			<div class="col-md-12 col-sm-12 col-xs-12">
	    		<div class="col-main col-md-9 col-sm-9 col-xs-9">
					<label class="sys-label col-sm-12 col-xs-12">Exame:</label>
					<div class="input-group">
						<input type="text" class="col-sm-10 col-xs-10 form-control input-sm" id="Exame" name="Exame" value="<?php echo $Exame;?>" readonly required >
						<input type="hidden" id="Codexa" name="Codexa" value="<?php echo $Codexa;?>" required>
						<span class="input-group-btn">
							<button type="button" id="btnProcuraExame" class="btn btn-default sys-btn-group glyphicon glyphicon-search" tabindex="-1"
								data-toggle="tooltip" data-placement="top" data-original-title="Busca por Exame"
								data-d1="<?php echo cript("Exame");?>" onclick="controle.buscaExame()" ></button>
						</span>
					</div>
				</div>
				<div class="col-main col-md-3 col-sm-3 col-xs-3" >
					<label class="sys-label col-sm-12 col-xs-12">Realizante:</label>
					<select class="form-control col-sm-12 col-xs-12 selectpicker" id="Realizante" name="Realizante" data-live-search="true" required >
						<?php if( !$Codrea ){ ?>
			      			<option value="">&nbsp;</option>
			      		<?php }?>
			      		<?php
			      			foreach ( $realizante as $k => $v ){
			      				$sel = ( $v['CODREA'] == $Codrea ) ? 'selected' : '';
			      		?>
			      				<option value="<?php echo $v['CODREA'];?>" <?php echo $sel;?> ><?php echo $v['NOME'];?></option>
			      		<?php
			      			}
			      		?>
			      	</select>
				</div>
			</div>	
			<div class="col-md-10 col-sm-10 col-xs-10">
	    		<div class="col-main col-md-12 col-sm-12 col-xs-12">
					<label class="sys-label col-sm-12 col-xs-12">T&iacute;tulo:</label>
					<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Titulo" name="Titulo" value="<?php echo $Titulo; ?>" maxlength="30" required >
				</div>
			</div>
			<div class="col-main col-md-1 col-sm-1 col-xs-1">
				<label class="sys-label col-sm-12 col-xs-12">Usu&aacute;rio:</label>
				<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Usuario" name="Usuario" value="<?php echo $Usuario; ?>" readonly >
			</div>
			<div class="col-main col-md-1 col-sm-1 col-xs-1">
				<label class="sys-label col-sm-12 col-xs-12">Alterou:</label>
				<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="Alterou" name="Alterou" value="<?php echo $Alterou; ?>" readonly >
			</div>
			<div id="EditorHTMLContainer" class="col-main col-md-12 col-sm-12 col-xs-12" style="padding: 10px 0px 0px 10px !important;">
				<textarea id="EditorHTML" name="EditorHTML"><?php echo $EditorHTML;?></textarea>
				<input type="hidden" id="EditorHTMLContent" name="EditorHTMLContent" value="<?php echo $EditorHTMLContent;?>"/>
			</div>
		</div>
	</form>
</div>
<div class="row col-md-12 col-sm-12 col-xs-12 sys-btn-action-base-container" style="display:block;">
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-success glyphicon glyphicon-save sys-btn-action-base" id="btnSalvar" 
			data-toggle="tooltip" data-placement="top" title="Salvar" ></button>
	</div>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-default glyphicon glyphicon-file sys-btn-action-base" id="btnNovo" 
			data-toggle="tooltip" data-placement="top" title="Novo" ></button>
	</div>
	<div class="col-sm-1 col-xs-2">
		<button class="btn btn-default glyphicon glyphicon-star sys-btn-action-base" id="btnInserir" 
			data-toggle="tooltip" data-placement="top" title="Texto Padrão" ></button>
	</div>
	<div class="col-sm-1 col-xs-2" style="float:right;">
		<button class="btn btn-default glyphicon glyphicon-chevron-left sys-btn-action-base" id="btnCancelar" data-index="<?php echo $voltarPage;?>"
			data-toggle="tooltip" data-placement="top" title="Voltar" ></button>
	</div>
</div>
<?php include VIEWPATH . "_includes/form/_texto-padrao.php";?>
