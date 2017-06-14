<script type="text/placeholder" id="DialogLaudoPadrao">
<div class='col-sm-12 col-md-12 col-xs-12'>
    <div class="col-main col-md-11 col-sm-11 col-xs-10">
		<label class="sys-label col-sm-12 col-xs-12">Nome:</label>
		<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" id="NomeTextoPadrao" value="" >
		<input type="hidden" id="TipoTextoPadrao" name="TipoTextoPadrao" value="" >
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