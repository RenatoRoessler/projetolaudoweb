<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller principal do modulo de edição de textos padrão
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 1.0 - 22 de mai de 2017 21:08:52
 **/ 
class CadastroTextoPadrao extends MY_Controller{

	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array(
		'js/CadastroTextoPadrao.js',
		'js/form/TextoPadrao.js',
		'js/EditorHTML.js',
		'plugins/tinymce/tinymce/tinymce.min.js',
	);
	
	/**	Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 	@name $css
	 *	@access public
	 */
	public $css = array(
		'css/sys-laudo.css',
		'css/editor-html.css',
	);
	
	/**	Estilo dos status dos arquivos
	 * 	@name $csslabel
	 *	@access public
	 */
	private $csslabel = array(
		'N' => 'btn btn-smooth btn-xs glyphicon glyphicon-remove sys-info-btn', 	//	Negado
		'S' => 'btn btn-success btn-xs glyphicon glyphicon-ok sys-info-btn', 	//	Negado
	); 
	
	/**	Array com controles que podem executar metodos
	 * 	@name $controle
	 *	@access protected
	 */
	protected $controle = array('FluxoMedico','FluxoDigitacao');
	
	/*
	 * Construct
	 */
	public function __construct() {
		parent::__construct ();
	}
	
	/**
	 * 	Método para digitação dos laudos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 * 	@return void
	 */
	public function index($post = null){
		
		$info = array();
		
		//	Permissoes
		$this->validaPermissao( array( 'digitar' ) );
		
		//	Carregando Modelo
		$this->load->model( 'CadastroTextoPadraoModel' );
		
		//	Pegando realizantes e revisores disponiveis
		$this->CadastroTextoPadraoModel->listarEntidade( 'realizante', null, 'nome' );
		$info['realizante'] = $this->CadastroTextoPadraoModel->dados;

		$info['codtexto'] = $post['codtexto'];
		$info['Exame'] = $post['Exame'];
		$info['Codexa'] = $post['Codexa'];
		$info['Codrea'] = $post['Realizante'];
		$info['Titulo'] = $post['Titulo'];
		$info['EditorHTML'] = $post['EditorHTML'];
		$info['Usuario'] = $post['Usuario'];
		$info['Alterou'] = $post['Alterou'];
		
		$info['voltarPage'] = $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'];
		$info['titulo'] = SYS_NAME . ' - TextoPadrao';
		
		$this->loadView ( array (
			'view' => 'exames/CadastroTextoPadraoIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método para salvar laudo. 
	 * 	Usado tanto na digitação quanto na revisão.
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 13 de fev de 2017 21:38:10
	 * 	@return void
	 */
	public function salvar(){
		
		//	Carregando Modelo
		$this->load->model( 'CadastroTextoPadraoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar', 'laudar' ), null, 1 );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		if( $this->uri->segment(3) ){
			$this->validaEntidade( $this->CadastroTextoPadraoModel, array('laudo', array(
				array( 'codlau =', $this->uri->segment(3)),
				array( 'codrea =', $this->input->post('Realizante')),
				array( 'codexa =', $this->input->post('Codexa')),
			)));
			
			$checks = array ();
			if (! validChecksStats ( $this->CadastroTextoPadraoModel->dados[0], $checks )) {
				redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
				exit ();
			}
		}
		
		if( $this->uri->segment_array() && $this->input->post() ){
			
			//	Se o código existe atualiza, senão insere
			if( $this->uri->segment(3) ){
				// Add variaveis
				$_POST['Alterou'] = $this->session->idUsuario;
				$id = $this->CadastroTextoPadraoModel->atualizar( $this->uri->segment(3), $this->input->post() ) ;
				$_POST['codtexto'] = $this->uri->segment(3);
			}else{
				// Add variaveis
				$_POST['Usuario'] = $this->session->idUsuario;
				$id = $this->CadastroTextoPadraoModel->inserir( $this->input->post() ) ;
				$_POST['codtexto'] = $id;
			}
			
			//	Executando pesquisa
			if( !$id ){
				$this->session->set_userdata('MSG', array( 'e', 'Falha ao salvar texto pad&atilde;o. <br/>[' . $this->CadastroTextoPadraoModel->db->error() . ']' ));
			}else{
				$this->session->set_userdata('MSG', array( 's', 'Texto salvo com sucesso' ));
			}
		}
		
		$this->index( $this->input->post() );
	}
	
	/**
	 * 	Método para imprimir laudo
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 18 de fev de 2017 17:55:20
	 * 	@return void
	 */
	public function imprimir(){
		
		if( $this->uri->segment_array() ){
			
			//	Carregando Modelo
		$this->load->model( 'CadastroTextoPadraoModel' );
			
			//	Buscando laudos a partir dos filtros usados
		$this->CadastroTextoPadraoModel->imprimir( $this->uri->segment_array() );
			
			$this->load->library('classes/EditorHTML', array( $this->session->idSessao ) );
				
			//	Verificando se lauto HTML ja existe
			if( $this->CadastroTextoPadraoModel->dados['LAUDOH'] ){
				$this->CadastroTextoPadraoModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLPrintOut( $this->editorhtml->ajustaHTMLOut( $this->CadastroTextoPadraoModel->dados['LAUDOH'] ) );
			}else{
				$this->editorhtml->rtfToHtml( $this->CadastroTextoPadraoModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
					
				$this->CadastroTextoPadraoModel->dados['LAUDO'] = $this->CadastroTextoPadraoModel->ajustaHTMLPrintOut( $this->editorhtml->getBody() );
			}
			
			$this->load->library('classes/Exportador', array( $this->session->idSessao ) );
			$this->CadastroTextoPadraoModel->dados['ASSINATURA_IMAGEM'] = 0;
			
			//	Fechando buffer, pegando dados e iniciando relatorio
			$this->exportador->PDFLaudo( $this->CadastroTextoPadraoModel->dados );
		}	
	}
	
}