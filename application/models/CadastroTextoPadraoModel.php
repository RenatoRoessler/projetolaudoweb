<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Modelo Fatura
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:02:35
 **/ 
class CadastroTextoPadraoModel extends MY_Model {

	/**	Contrutor do model
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Metodo para inserir novo texto padrão
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 *
	 *	@param $post Array - array com dados do $_POST
	 *
	 * 	@return array
	 */
	public function inserir( $post ) {
	
		try {
			
			$this->db->trans_begin();
			
			$this->db->query(
				"insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					$post[Codexa],
					'$post[Titulo]',
					'.',
					". $this->prepareCLOB( str_replace("'","", $post['EditorHTMLContent'] ) ) .",
					'$post[Realizante]',
					'" . $post['Usuario'] . "'
				)"
			);
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			
			$id = $this->db->query("select SEQ_LAUDO.CURRVAL from laudo where ROWNUM = 1");
			$id = $id->result_array();
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			$this->db->trans_commit();
			return $id[0]['CURRVAL'];
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo para atualizar texto padrão existente
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 25 de mai de 2017 21:20:567
	 *
	 *	@param $cod Int - Código do laudo para atualizar
	 *	@param $post Array - array com dados do $_POST
	 *
	 * 	@return array
	 */
	public function atualizar( $cod, $post ) {
	
		try {
			
			$this->db->trans_begin();
			
			$this->db->query(
				"update		laudo
				set			titulo = '" . $post['Titulo'] . "', 
							alterou = '" . $post['Alterou']. "'
				where 		codlau = $cod"
			);
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			//	Atualizando Laudo Clob
			$lob = $this->updateCLOB('laudo', 'textoh', $post['EditorHTMLContent'], array(
				array( 'codlau', '=', $cod ),
			) );
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			$this->db->trans_commit();
			return true;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
}