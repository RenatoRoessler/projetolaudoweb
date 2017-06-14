var TextoPadrao = function(){
	var _self = this;
	this.filtraTextoPadrao = function( param ){
		$.ajax({
			url : '/TextoPadrao/listarTextoPadrao/',
			type : 'POST',
			timeout: 10000,
			data : param,
			beforeSend: function(){ 
				loader('show');
			},
			success: function( retorno ){
				$("#tableTextoPadrao tbody").html( retorno );
				$("#tableTextoPadrao tbody tr").click(function(){
					selectLineInTable( $(this), function( line ){
						_self.previewTextoPadrao( $(line).data( 'idlaudo' ) );
					} );
				});
				loader('hide');
			},
			error: function( request, status, error ){
				loader('hide');
			}
		});
	}
	this.previewTextoPadrao = function( id ){
		loader('show');
		$('#htmlTextoPadrao').attr( 'src', window.location.protocol + '//' + window.location.host + '/TextoPadrao/textoPadrao/' + id );
	}
}