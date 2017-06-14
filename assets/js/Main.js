var Main = function(){
	var _self = this;
	var _alvo;
	this.buscaEntidade = function(codigo, entidade, atributo, controle, metodoRetorno){
		if( $(this._alvo).val() == $(this._alvo).data("val") ){
			return false;
		}
		if( isVal(codigo) && isVal(entidade) && isVal(controle)  && isVal(atributo) ){
			$(this._alvo).data("val",$(this._alvo).val());
			$.ajax({
				url : controle,
				type : "post",
				data : {
					"Codigo" : codigo,
					"Entidade" : entidade,
					"Atributo" : atributo
				},
				timeout: 1000,
				beforeSend: function(){},
				success: function( retorno ){
					retorno = jsonEncode(retorno, "json");
					if(retornoJson(retorno, "false")){
						metodoRetorno(retorno);
					}else{
						$(_self._alvo).parent().next().children("input").val("");
						$(_self._alvo).select();
					}
				},
				error: function( request, status, error ){}
			});
		}
	}
}