<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe do Main para Controllers
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 27 de mar de 2017 12:42:54
 **/ 
class MY_Controller extends CI_Controller{
	
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
	
	/**	Array com controles que podem executar metodos
	 * 	@name $controle
	 *	@access protected
	 */
	protected $controle;
	
	/**	Array com controles que sao permitidos para todos
	 * 	@name $controlePermitido
	 *	@access protected
	 */
	protected $controlePermitido = array( "Index", "Erro", "Login", "Sys" );
	
	/**	Array com metodos que sao permitidos a todos
	 * 	@name $metodoPermitido
	 *	@access protected
	 */
	protected $metodoPermitido = array( "index", "logout", "errorClean" );
	
	/**	Contrutor do controler
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1 
	 **/
	public function __construct() {
		
		parent::__construct();
		
		/* Carregando configurações so sistema */
		$this->config->load('sys_config');
		
		//	Pega controllers padrao
		$this->controle[] = get_class($this);
		
		/* validando sessao */
		$this->validaSessao();
		
		/* Valida controle acessado */
		$this->validaControle();
	}
	
	/**
	 * 	Limpa dados da sessão
	 * 
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 14:11:27
	 * 	@return void
	 */
	public function limpaSessao() {
		
		/* Coloque dentro do array $reservado, os dados que você quer que permaneçam */
		$reservado = array();
		$sessao = $this->session->all_userdata();
		
		foreach( $sessao as $k => $v){
			if( !in_array( $k, $reservado ) ){
				$this->session->unset_userdata($k);
			}
		}
		
	}
	
	/**
	 * 	Paginação das paginas
	 * 
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 14:11:27
	 * 	@param	$model objetc - Model por referência
	 * 	@return void
	 */
	public function paginar( &$model ) {
		
		if( !$model ){
			return false;
		}
		$this->load->library('classes/Paginacao');
		return $this->paginacao->paginar( $model->links , $model->pagina, $model->limite, $model->total );
	}
	
	/**
	 * 	Método para carregar views
	 * 
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 14:11:27
	 * 	@param	$view array - Array com a view a ser carregada e possiveis dados [ array( 'view'=> 'nomeDaView', 'info' => array('info1'=> 1, ...)) ]
	 * 	@return void
	 */
	public function loadView( $view ) {
		
		if(!$view || !is_array($view)){
			show_error('Parâmetro View não é válido', 503);
			exit();
		}
		
		$view['info']['TEMA'] = $this->session->tema;
		$view['info']['MENU'] = $this->session->menu;
		
		//	add JS e CSS para carregar na view
		$view['info']['CSS'] = $this->css;
		$view['info']['JS'] = $this->js;
		
		//	Adicionando mensagens da sessao na view
		$view['info']['MSG'] = $this->session->MSG;
		$view['info']['MSGB'] = $this->session->MSGB;
		$view['info']['MSGC'] = $this->session->MSGC;
		
		/* Header View Footer */
		$this->load->view('_includes/_header.php', $view['info']);
		$this->load->view( $view['view'], $view['info']);
		$this->load->view('_includes/_footer.php', $view['info']);
		
	}
	
	/**
	 * 	Valida controllers permitidos ao usuário
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 15:16:11
	 * 	@return true
	 */
	public function validaControle(){
		
		if ( !in_array( $this->uri->segment(2), $this->metodoPermitido ) && isVal( $this->uri->segment(1) ) && isVal( $this->uri->segment(2) ) ){
			if( !in_array( $this->uri->segment(1), $this->controle ) && !in_array( $this->uri->segment(1), $this->controlePermitido )){
				show_error("Access denied", 403);
				exit();
			}
		}
	}
	
	/**
	 * 	Método para validar permissoes
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 *	
	 *  @param $permissoes Array - Array com permissões a serem validados
	 *	@param $page String - URL de redirecionamento
	 *	@param $tipo Int - Tipo da validação, 1 obriga que todos os parâmetros sejam true, 0 apenas hum
	 *
	 * 	@return booblean
	 */
	public function validaPermissao( $permissoes, $page = null, $tipo = 0 ){
		
		//	Verificação básica dos parametros
		if( ( !$permissoes || !is_array( $permissoes ) ) ){
			$this->session->set_userdata('MSG', array( 'e', 'Acesso negado. [Permission:nothing]' ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] ));
			exit();
		}
		
		$flag = 0;
		//	validando
		foreach ( $permissoes as $k => $v ){
			//	Validando permissao
			if( !$this->session->permissoes[ $v ] || $this->session->permissoes[ $v ] == 'N' ){
				$flag++;
			}
		}
		if( $tipo ){
			$flag = ( $flag == count($permissoes) ) ? true : false;
		}
		if( $flag ){
			$this->session->set_userdata('MSG', array( 'e', "Acesso negado. [Permission:$v]" ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] ));
			exit();
		}
		return true;
	}
	
	/**
	 * 	Método para validar parametros
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 *
	 *	@param $parametros Array - Array com parêmetros a serem validados
	 *	@param $page String - URL de redirecionamento
	 *	@param $tipo Int - Tipo da validação, 1 obriga que todos os parâmetros sejam true, 0 apenas hum
	 *	@param $msg String - Mensagem personalizada
	 *
	 * 	@return booblean
	 */
	public function validaParametro( $parametros, $page = null, $tipo = 0, $msg = null ){
		
		//	Verificação básica dos parametros
		if( ( !$parametros || !is_array( $parametros ) ) ){
			$this->session->set_userdata('MSG', array( 'e', 'Falha. [Param:failed]' ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] ));
			exit();
		}
		
		$flag = 0;
		//	validando
		foreach ( $parametros as $k => $v ){
			//	Validando parametro
			if( !isset( $v ) || (!isset( $v ) && $v != 0 ) ){
				$flag++;
			}
		}
		if( $tipo ){
			$flag = ( $flag == count($parametros) ) ? true : false;
		}
		if( $flag ){
			$this->session->set_userdata('MSG', array( 'e', returnVariable( $msg, "Falha, par&acirc;metro inv&aacute;lido." ) ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $_SESSION['tipoUsuario'] ]['Index'] ));
			exit();
		}
		return true;
	}
	
	/**
	 * 	Método para validar entidades
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 28 de abr de 2017 22:03:44
	 *
	 *	@param $modelo Object - Modelo para persistência no banco
	 *	@param $entidade String - Nome da tabela
	 *	@param $page String - URL para redirecionamento
	 *	@param $msg String - Mensagem personalizada
	 *
	 * 	@return booblean
	 */
	public function validaEntidade( $modelo, $entidade, $page = null, $msg = null){
		
		//	Verificação básica dos parametros
		if( !$modelo || ( !$entidade || !is_array( $entidade ) ) ){
			$this->session->set_userdata('MSG', array( 'e', 'Falha. [Entity:failed]' ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] ));
			exit();
		}
		
		//	Verificando se CST pode ser digitado
		$modelo->listarEntidade( $entidade[0], $entidade[1] );
		
		//	CST não encontrado
		if( count( $modelo->dados ) == 0 ){
			$this->session->set_userdata('MSG', array( 'e', returnVariable( $msg, 'Registro n&atilde;o encontrado.' ) ));
			redireciona( returnVariable( $page, $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] ));
			exit();
		}
		return true;
	}
	
	/**
	 * 	Valida sessão do usuário
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 29 de mar de 2017 17:10:44
	 * 	@return void
	 */
	public function validaSessao(){
	
		/* Log */
		log_message('debug', 
			'User[' . $this->session->idUsuario. 
			'], Session[' . $this->session->idSessao .
			'], IP[' . $this->input->server('REMOTE_ADDR') .
			'], Request[' . $this->input->server('REQUEST_URI') . 
			']'
		);
		
		$access = ( 
			( $this->session->has_userdata('idSessao') ) ||
			( in_array( $this->uri->segment(1), array( 'Sys', 'Login', 'Index' ) ) )
		);
		
		//	validando sessao
		if( $access ) {
			
			/* Monta quadro de permissões para teste */
			$per = array( 'all' );
			foreach ( $this->session->permissoes as $k => $v ){
				if( $v == 'S' || ( $v && $v != 'N' ) ){
					$per[] = $k;
				}
			}
			/* Verifica se tem permissão para acessar */
			if( !array_intersect( $per, $this->config->item('sys_pages')[ $this->uri->segment(1) ] ) && $access ){
				if ( $this->uri->segment(1) != '' ){
					redireciona( '/Index' );
				}
			}
			/* Se o destino for o index e já estiver com a sessao ativa, redireciona para o seu index */
			if ( $this->uri->segment(1) == '' && $this->session->has_userdata('idSessao') ){
				redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
			}
			
			return true;
		}
		$this->destroiSessao();
	}
	
	/**
	 * 	Destroi a sessão do usuário
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@param char $t = Tipo da mensagem
	 *	@param string $m = Mensagem de erro
	 *
	 *	@version 1.0 - 29 de mar de 2017 17:10:44
	 * 	@return void
	 */
	public function destroiSessao( $t = null, $m = null){
		
		$this->session->set_userdata('MSG',array($t,$m));
		$this->session->unset_userdata('menu');
		$this->session->unset_userdata('tema');
		$this->session->unset_userdata('idSessao');
		
		if(  $this->uri->segment(1) != '' ){
			redireciona( '/' );
		}
	}
	
}