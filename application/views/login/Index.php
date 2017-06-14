<div class="col-sm-12 col-xs-12" style="padding:5%;padding-left: 10% !important;">
	<h2><?php echo SYS_NAME;?></h2><br/>
</div>
<div id="containerPrincipal">
	<?php 
		include VIEWPATH . "_includes/_mensagem.php";
	?>
	<div id="containerLogin" class="container">
		<form id="formulario" name="formulario" action="/Login/login" method="POST">
			<div class="col-main col-sm-12 col-xs-12">
				<label class="sys-label col-sm-12 col-xs-12">Usu&aacute;rio:</label>
				<input type="text" id="login" name="login" class="form-control input-sm" required="required" value="">
			</div>
			<div class="col-main col-sm-12 col-xs-12">
				<label class="sys-label col-sm-12 col-xs-12">Senha:</label>
				<input type="password" id="senha" name="senha" class="form-control input-sm" required="required" value="">
			</div>
			<div class="col-main col-sm-12 col-xs-12">
				<input type="submit" class="btn btn-sm btn-primary" value="Login">
			</div>
		</form>
	</div>
	<div class="tri tri001"></div>
	<div class="tri tri002"></div>
	<div class="tri tri003"></div>
	<div class="tri tri004"></div>
	<div class="tri tri005"></div>
	<div class="tri tri006"></div>
	<div class="tri tri007"></div>
	<div class="tri tri008"></div>
	<div class="tri tri009"></div>
	<div class="tri tri010"></div>
	<div class="tri tri011"></div>
	<div class="tri tri012"></div>
</div>