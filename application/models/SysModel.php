<?php
/**	
 * 	Modelo com metodos de acesso ao banco do sistema
 * 
 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br>
 *	@version 0.1 - 23/07/2015 11:41:03
 **/ 
class SysModel extends MY_Model{
	
	/**	Contrutor do model
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Busca entidade
	 * 
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 12 de fev de 2016 16:44:55
	 *	@version 0.1
	 * 	@return void
	 */
	public function buscaEntidade( $entidade, $atributo, $codigo ){
			
		try {
			$db = new DB();
			$db->conecta();
			$db->select( $entidade, array(array($atributo, '=', $codigo),array('Situacao', '=', 1)),'ID');			
			if( $db->getResultado() ){
				return $db->dados[0];
			}else{
				return false;
			}
		} catch (Exception $e) {
			criaLog( 'Erro ao executar query no Sys', $e, $this, $db->query );
		}
		destroi($db);
	}
	
	/**
	 * 	Busca principal
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 8 de jun de 2016 14:45:25
	 *
	 *	@param	$entidade 	String
	 *			Nome da tabela
	 *	@param	$atributo	Array
	 *			Array com atributos e testes para busca do valor desejado
	 *	@param	$colunas	String
	 *			String com nome das colunas para exibir. Nomes separados por v�rgula	
	 *	@param	$order		String
	 *			Order by
	 *	
	 * 	@return Array
	 */
	public function buscaMain( $entidade, $atributo, $colunas, $order = '1' ){
			
		try {
			$filtros= '';
			foreach ( $atributo as $k => $v ){
				if( $k != 'V' ){
					( $v == '$' ) ? $v = $atributo['V'] : null;
					if( preg_match('[%]', $v) ){
						$filtros.= " and $k like '".strtoupper($v)."' ";
					}else{
						$vv = ( is_int( $v ) ) ? $v : "'".strtoupper($v)."'";
						$filtros.= " and $k = $vv ";
					}
				}
			}
			//	Montando query
			$query = 
				"select 	$colunas
							{{}}
				from 		$entidade
				where		1=1
							$filtros
				order by	$order ";
			
			$this->dados = $this->query($query);

			if( $this->db->trans_status() === false ){
				return false;
			}
			return $this->dados->result_array();
			
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
}