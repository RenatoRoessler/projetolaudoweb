<!DOCTYPE html>
<html lang="<?php echo SYS_DF_LINGUAGEM;?>">
<head>
<meta charset="<?php echo SYS_DF_ENCODE;?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $titulo; ?></title>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
<!-- CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap<?php echo $TEMA;?>.min.css" rel="stylesheet" >
<link href="<?php echo base_url();?>assets/css/bootstrap-select.min.css" rel="stylesheet" >
<link href="<?php echo base_url();?>assets/css/parsley.css" rel="stylesheet" >
<link href="<?php echo base_url();?>assets/css/loader.css" rel="stylesheet" >
<link href="<?php echo base_url();?>assets/css/sys<?php echo $TEMA;?>.css" rel="stylesheet" >
<?php
	//	Adicionando arquivos de css personalizado
	if( isVal( $CSS ) ){
		foreach ( $CSS as $k => $v ){
?>
<link href="<?php echo base_url() . 'assets/' . $v;?>?v=<?php echo SYS_VERSION;?>" rel="stylesheet" >
<?php 
		}
	}	
?>
<!-- JS -->
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery-1.11.1.min.js" ></script>
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap.min.js" ></script>
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap-select.min.js" ></script>

<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery.mask.js" ></script>

<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/plugins/tablesorter/dist/js/jquery.tablesorter.min.js" ></script>
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/plugins/tablesorter/dist/js/jquery.tablesorter.widgets.min.js" ></script>

<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/parsley.js" ></script>
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/parsley-pt-br.js" ></script>

<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url();?>assets/js/SYS.js" ></script>
<?php 
	//	Adicionando arquivos de javascript personalizados
	if( isVal( $JS ) ){
		foreach ( $JS as $k => $v ){ 
?>
<script charset="<?php echo SYS_DF_ENCODE;?>" type="text/javascript" src="<?php echo base_url() .'assets/' . $v;?>?v=<?php echo SYS_VERSION;?>" ></script>
<?php 
		}
	}	
?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!	[endif]	-->
</head>
<body>
<?php include VIEWPATH . "_includes/_dialog.php";?>
<?php include VIEWPATH . "_includes/_loader.php";?>
<?php
//	Verificando se � para mostrar menu
//if( ! $escondeMenu ){
	//	Incluindo menu
	//include SYS_VIEWS . "_includes/_menu.php";
	echo $MENU;
//}
?>
<div id="infoBottom" class="col-sm-10 col-xs-10 sys-info-bottom">&nbsp;</div>