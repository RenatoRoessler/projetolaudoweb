<?php
/**	
 * 	Classe para pagina��o de listas
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 29 de mar de 2017 10:35:33
 **/ 
class Paginacao {
	
	/**
	 * 	Metodo que gera o html da paginacao das listas
	 * 
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@param int $links - Quantidade de links mostrados, pra frente e pra tras
	 *	@param int $pagina - Página atual
	 *	@param int $limite - Limite de págians
	 *	@param int $total - total de págians atual
	 *
	 *	@version 1.0 - 29 de mar de 2017 10:35:48
	 * 	@return void
	 */		
	public function paginar( $links, $pagina, $limite, $total ) {
		
		//	Peganco a quantidade de paginas
		$ultimo = ceil( $total / $limite );
	
		//	Definindo inicio e fim
		$inicio = ( ( $pagina - $links ) > 0 ) ? $pagina - $links : 1;
		$fim = ( ( $pagina + $links ) < $ultimo ) ? $pagina + $links : $ultimo;
	
		//	Escrevendo paginacao no estilo bootstrap
		$html = '<ul class="pagination pagination-md">';
			
		$class = ( $pagina == 1 ) ? "disabled" : "";
		$pag = ( $pagina > 1 ) ? 'onclick="paginaAct(' . ( $pagina - 1 ) . ')"' : "onclick='javascript:return false;'";
		
		$html .= '<li class="' . $class . '"><a href="#" '.$pag.'>&laquo;</a></li>';
	
		//	Caminhando pelo link
		if ( $inicio > 1 ) {
			$html .= '<li><a href="#" onclick="paginaAct(1)">1</a></li>';
			$html .= '<li class="disabled"><span>...</span></li>';
		}
	
		for ( $i = $inicio ; $i <= $fim; $i++ ) {
			$class = ( $pagina == $i ) ? "active" : "";
			$html .= '<li class="' . $class . '"><a href="#" onclick="paginaAct('. $i .')">' . $i . '</a></li>';
		}
	
		if ( $fim < $ultimo ) {
			$html .= '<li class="disabled"><span>...</span></li>';
			$html .= '<li><a href="#" onclick="paginaAct(' . $ultimo . ')">' . $ultimo . '</a></li>';
		}
	
		$class = ( $pagina == $ultimo ) ? "disabled" : "";
		$pag = ( $pagina < $ultimo ) ? 'onclick="paginaAct(' . ( $pagina + 1 ) . ')"' : "onclick='javascript:return false;'";
		
		$html .= '<li class="' . $class . '"><a href="#" '.$pag.'>&raquo;</a></li>';

		$html .= '</ul>';
		
		$html .= "<div class='sys-total-paginacao'>Total de registros: $total</div>";
	
		return $html;
	}
}