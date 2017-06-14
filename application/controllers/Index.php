<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Index da Aplicação
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 27 de mar de 2017 08:42:10
 **/ 
class Index extends MY_Controller{
	
	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array();
	
	/**	Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 	@name $css
	 *	@access public
	 */
	public $css = array(
		'css/sys-index.css'
	);
	
	/**
	 * 	Metodo construct
	 *
	 *	@version 1.0 - 27 de mar de 2017 08:24:05
	 * 	@return void
	 */
	public function __construct(){
		/* Carregando Main Controller */
		parent::__construct();
	}

	/**
	 * 	Metodo Index, tela inicial de login
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 12:41:17
	 * 	@return void
	 */
	public function index(){
		
		if( !$this->session->has_userdata('idSessao') ){
			$this->loadView(array(
				'view' => 'login/Index',
				'info' => array(
					'titulo'=>'LaudosWeb'
				)
			));
		}else{
			$this->loadView(array(
				'view' => 'main/Index',
				'info' => array(
					'titulo'=>'LaudosWeb'
				)
			));
		}
	}
}