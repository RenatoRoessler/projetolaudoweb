<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Modelo Fatura
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:02:35
 **/ 
class TextoPadraoModel extends MY_Model {

	/**	Contrutor do model
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Metodo buscando textos padrao
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function listarTextoPadrao( $post ) {
	
		try {
				
			$filtros = array();
			( $post['codexa'] ) ? $filtros[] = "and l.codexa = $post[codexa]" : null; 
			( $post['nome'] ) ? $filtros[] = "and l.titulo like '%" . strtoupper( $post['nome'] ) . "%'" : null; 
			
			$param = implode( ' ', $filtros );
			
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select  	l.codlau, l.titulo, r.codrea, r.nome as realizante, e.codexa, e.nome as exame,
							l.apeluser as usuario, l.alterou as alterou
				from    	laudo l
					        inner join realizante r on ( r.codrea = l.codrea )
					        inner join exame e on ( e.codexa = l.codexa )
				where		1 = 1
							$param "
			);
			
			//	Retornando dados
			$this->dados = $this->dados->result_array();
				
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo buscando textos padrao
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function textoPadrao( $post ) {
	
		try {
			$param = implode( ' ', $filtros );
			
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select		texto, textoh
				from		laudo 
				where		codlau = $post[3]"
			);
			
			//	Retornando dados
			$this->dados = $this->dados->result_array();
			if( $this->dados[0]['TEXTO'] ){
				$this->dados['TEXTO'] = $this->dados[0]['TEXTO']->load();
			}
			if( $this->dados[0]['TEXTOH'] ){
				$this->dados['TEXTOH'] = $this->dados[0]['TEXTOH']->load();
			}
				
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
}