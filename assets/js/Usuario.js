var Usuario = function(){
	//	Definindo self
	var _self = this;
	this.alteraFoto = function(){
		dialogo(
			"Alterar foto",
			$("#modeloModalFoto").html(),
			function(){},
			function(){},
			"a",
			null,
			"Enviar",
			"Cancelar"
		);
		$("#inputModalFoto")
			.on('fileuploaded', function(event, data, previewId, index) {
			    ir("/Usuario");
			})
			.fileinput({
				language: 'pt-BR',
				uploadUrl: '/Usuario/alteraFoto',
				previewFileType: "image",
		        allowedFileExtensions : ['jpg', 'png'],
		        browseClass: "btn btn-primary btn-sm"
		    });
	}
	this.removeFoto = function(){
		ir("/Usuario/removeFoto/1");
	}
	this.alteraSenha = function(){
		dialogo(
			"Alterar senha",
			"Olá<br/>você deseja alterar sua senha ?",
			function(){
				$("#formAlteraSenha").submit();
			},
			function(){},
			"p"
		);
	}
}
$("document").ready(function(){
	$("#btnAlteraFoto")
		.click(function(){
			var usuario = new Usuario();
			usuario.alteraFoto();
		});
	$("#btnRemoveFoto")
		.click(function(){
			var usuario = new Usuario();
			usuario.removeFoto();
		});
	$("#btnAlteraSenha")
		.click(function(){
			var usuario = new Usuario();
			usuario.alteraSenha();
		});
});