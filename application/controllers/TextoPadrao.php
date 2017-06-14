<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller principal do modulo de edição de Laudos
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:00:49
 **/ 
class TextoPadrao extends MY_Controller{

	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array();
	
	/**	Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 	@name $css
	 *	@access public
	 */
	public $css = array();
	
	/**	Estilo dos status dos arquivos
	 * 	@name $csslabel
	 *	@access public
	 */
	private $csslabel = array(); 
	
	/**	Array com controles que podem executar metodos
	 * 	@name $controle
	 *	@access protected
	 */
	protected $controle = array();
	
	/*
	 * Construct
	 */
	public function __construct() {
		parent::__construct ();
	}
	
	/**
	 * 	Método para listar textos padrão do sistema
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 18 de fev de 2017 17:55:20
	 * 	@return void
	 */
	public function listarTextoPadrao(){
		
		//	Carregando Modelo
		$this->load->model( 'TextoPadraoModel' );
		
		//	Buscando laudos a partir dos filtros usados
		$this->TextoPadraoModel->listarTextoPadrao( $this->input->post() );
		
		$trs = '';
		foreach ( $this->TextoPadraoModel->dados as $k => $v ){
			$trs .= 
				"<tr data-idlaudo='$v[CODLAU]' data-codrea='$v[CODREA]' data-codexa='$v[CODEXA]' data-usuario='$v[USUARIO]' data-alterou='$v[ALTEROU]'><td>$v[TITULO]</td><td>$v[REALIZANTE]</td><td>$v[EXAME]</td></tr>";
		}
		echo $trs;
	}
	
	/**
	 * 	Método para buscar preview do laudo
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 18 de fev de 2017 17:55:20
	 * 	@return void
	 */
	public function textoPadrao(){
		
		//	Carregando Modelo
		$this->load->model( 'TextoPadraoModel' );
		
		//	Buscando laudos a partir dos filtros usados
		$this->TextoPadraoModel->textoPadrao( $this->uri->segment_array() );

		if( !$this->TextoPadraoModel->dados ){
			echo 'Falha na visualiza&ccedil;&atilde;o...';
			return false;
		}
		
		$texto = '';
		
		$this->load->library('classes/EditorHTML', array( $this->session->idSessao ) );
		
		if( $this->TextoPadraoModel->dados['TEXTOH'] ){
			
			$texto = $this->editorhtml->ajustaHTMLOut( $this->TextoPadraoModel->dados['TEXTOH'] );
			
		}elseif( $this->TextoPadraoModel->dados['TEXTO'] ){
			
			$this->editorhtml->rtfToHtml( $this->TextoPadraoModel->dados['TEXTO'] );
			$this->editorhtml->ajustaHTML();
			$texto = $this->editorhtml->ajustaHTMLTextoPadrao( $this->editorhtml->getBody() );
		}
		
		//	Reset
		$body = '<html><head><style>';
		$body .= file_get_contents( SYS_LIB . '/css/reset.css' );
		$body .= '</style><body>';
		$body .= $texto;
		$body .= '<script>window.parent.disableElement(\'#btnDialogoSim1\',false);window.parent.loader(\'hide\');</script></body></html>';
		
		echo $body;
	}
}