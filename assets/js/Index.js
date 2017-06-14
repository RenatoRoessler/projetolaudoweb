function showPopupMessage(obj,i){
	dialogo(
		"Mensagem",
		obj[i],
		function(){
			if( $(obj).length > (i+1) ){
				showPopupMessage(obj, i+1);
			}
		},
		function(){},
		"a",
		true,
		false
	);
}