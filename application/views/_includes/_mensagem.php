<div class="sys-hide" id="mensagem">
	<div id="mensagem-texto" class="alert" role="alert"></div>
</div>
<?php
	//	Mensagem padrão
	if( isVal( $MSG[0] ) && isVal( $MSG[1] ) ) {
		echo "<script>mensagem('$MSG[0]','$MSG[1]');</script>";
	}
	//	Mensagem infor bottom
	if( isVal( $MSGB[0] ) && isVal( $MSGB[1] ) ){
		echo "<script>infoBottom( true, '$MSGB[0]', '$MSGB[1]');</script>";
	}
	//	Comando
	if( isVal( $MSGC ) ){
		echo "<script>$MSGC;mensagemError();</script>";
	}
?>