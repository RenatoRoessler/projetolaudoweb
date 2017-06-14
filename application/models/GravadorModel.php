<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Modelo Gravador
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:02:35
 **/ 
class GravadorModel extends MY_Model {

	/**	Contrutor
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	/**
	 * 	Metodo que persiste informações sobre o ditado no banco
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 16:24:49
	 * 	@return array
	 */
	public function salvaDitado( $cod ) {
		
		try {
				
			/* Atualizando informacao */
			$this->db->trans_start();
			$this->db->query(
				"update 	atd_laudo
				set			fm_ditado = 'S'
				where		codlaudo = $cod"
			);
			$this->db->trans_complete();
			
			if( $this->db->trans_status() === false ){
				$this->session->set_userdata('MSG', array( 'e', 'Falha ao atualizar registro.<br/>[ ' . $this->db->error() . ' ]'));
				return false;
			}
			return true;
		
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
}