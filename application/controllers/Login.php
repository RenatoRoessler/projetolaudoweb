<?php

/**	
 * 	Controller de Login do usuario
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 27 de mar de 2017 16:05:29
 **/ 
class Login extends MY_Controller{
	
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
	 *	@author Douglas Comim - 24/07/2015 09:05:32
	 *	@version 0.1
	 * 	@return void
	 */
	public function index(){
		
		if( $this->session->idSessao ){
			$this->loadView(array(
				'view' => 'main/Index',
				'info' => array(
					'titulo' => SYS_NAME
				)
			));
		}else{
			$this->loadView(array(
				'view' => 'login/Index',
				'info' => array(
					'titulo' => SYS_NAME . ' - Login'
				)
			));
		}
	}
	
	/**
	 * 	Metodo que executa login do usuario no oracle
	 * 
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 17 de fev de 2016 14:19:24
	 *	@version 1.0
	 * 	@return void
	 */
	public function login(){
		
		//	Variavel com status da autenticação
		$aut = false;
		
		//	Implementaçãoo para usar login via usuarios cadastrados diretamente no banco de dados
		$aut = $this->loginLocal();
		
		//	Verificando status da autenticacao
		if( $aut ){
			
			/* ID sa sessão do Usuario */
			$idSessao = md5( 
				$aut[0]->APELUSER . 
				$this->input->server('HTTP_USER_AGENT') . 
				$this->input->server('REMOTE_ADDR') .
				date('dmYHis')
			);
			
			$session = array();
			$session['idSessao'] = $idSessao;
			$session['idUsuario'] = $aut[0]->APELUSER;
			$session['idExterno'] = md5( $aut[0]->APELUSER );
			$session['nomeUsuario'] = $aut[0]->NOMEUSUARIO;
			$session['login'] = $this->input->post('login');
			$session['realizante'] = $aut[0]->CODREA;
			$session['permissoes'] = array(
				'visualizar' => 'S',
				'entregar' => $aut[0]->USER_EDITARLAUDO,
				'digitar' => $aut[0]->USER_EDITARLAUDO,
				'ditar' => $aut[0]->CODREA,
				'laudar' => $aut[0]->CODREA,
				'revisar' => $aut[0]->CODREA,
				'assinar' => $aut[0]->ASSINAUSUARIO,
			);
			$session['tipoUsuario'] = ( $aut[0]->CODREA ) ? 'Medico' : 'Digitador';
			$session['menu'] = $this->perfilMenuStatic( $session );
			
			$session['tema'] = $this->config->item('sys_parameters')[ $session['tipoUsuario'] ]['Tema'];

			/* Limpamdo todos os dados da sessão */
			$this->limpaSessao();
			
			/* setando dados na sessão */
			$this->session->set_userdata( $session );

			redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
			return true;
		}else{
			
			/* Matando sessao */
			$this->session->unset_userdata('idSessao');

			$this->session->MSG = array('e','Usuário e/ou senha inválidos');
			$this->loadView(array(
				'view' => 'login/Index',
				'info' => array(
					'titulo'=>'Login - LaudosWeb'
				)
			));
		}
	}
	
	/**
	 * 	Metodo de login usando banco de dados
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 16:25:59
	 * 	@return void
	 */
	public function loginLocal(){
	
		//	Dados do formulario de login
		$login = $this->input->post('login');
		$senha = $this->input->post('senha');

		if( $login && $senha ){
			
			$this->load->model('LoginModel');
			
			//	Retornando
			if( $ret = $this->LoginModel->loginLocal( $login, $senha ) === true ){
				//	Login com sucesso
				return $this->LoginModel->dados->result();
			}else{
				$this->session->MSG = $ret;
				return false;
			}
		}else{
			$this->session->MSG = array('e','Usuário e/ou senha inválidos');
			return false;
		}
	}
	
	/**
	 * 	Metodo para montar menu do usuario
	 *
	 *	@author Douglas Comim - 24/07/2015 10:41:53
	 *	@version 0.1
	 * 	@return void
	 */
	public function perfilMenuStatic($session){
		
		//	HTML do Menu
		$menu =
			"<div id='containerMenuMain'>
				<nav id='menu' class='navbar navbar-default' role='navigation'> 
					<div class='container sys-nav'>
						<div class='navbar-header'>
							<button id='navMain' type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-navbar-collapse-1'>
								<span class='sr-only'>&nbsp;</span>
								<span class='icon-bar'></span> <span class='icon-bar'></span>
								<span class='icon-bar'></span>
							</button>
							<img src='".base_url()."assets/images/logomain.png' class='sys-logo-main' onclick=\"ir('/Index')\"/>
						</div>
						<div class='collapse navbar-collapse' id='bs-navbar-collapse-1'>
		                <ul class='nav navbar-nav'>
		                    <li class='dropdown'>
		                        <a href='#' data-toggle='dropdown' class='dropdown-toggle'>Fluxos <b class='caret'></b></a>
		                        <ul class='dropdown-menu'>";
							//	Permissões do digitador
							if( !$session['realizante'] && $session['permissoes']['digitar'] == 'S' ){
		                        $menu .= "<li><a href='#' onclick=\"ir('/FluxoDigitacao','_self')\">De Digitação</a></li>";
							}
		                    //	Permissão do realizate para fluxo médico
		                    if( $session['realizante'] ){
		                        $menu .= "<li><a href='#' onclick=\"ir('/FluxoMedico','_self')\">De Laudo Médico</a></li>";
		                    }
		                        $menu .= "</ul>
		                    </li>
		                </ul>
		                <ul class='nav navbar-nav'>
		                    <li class='dropdown'>
		                        <a href='#' data-toggle='dropdown' class='dropdown-toggle'>&Aacute;rea de Exames <b class='caret'></b></a>
		                        <ul class='dropdown-menu'>
				                    <li class='dropdown-submenu'>
				                        <a href='#' data-toggle='dropdown' class='dropdown-toggle'>Cadastro</a>
				                        <ul class='dropdown-menu'>
											<li><a href='#' onclick=\"ir('/CadastroTextoPadrao','_self')\">Texto Padr&atilde;o</a></li>
										</ul>
				                    </li>
				                </ul>
		                    </li>
		                </ul>
		                <ul class='nav navbar-nav navbar-right'>
		                    <li class='dropdown'>
		                        <a href='#' data-toggle='dropdown' class='dropdown-toggle'>
		                            <div id='thumbUser' class='thumb-user'>
		                                <img class='img-thumbnail sys-img-thumbnail' src='".base_url()."assets/images/noimage.png'>
		                            </div>
		                            <b class='caret'></b>
		                        </a>
		                        <ul class='dropdown-menu'>
									<li><a href='#'>". $session['nomeUsuario'] . "</a></li>
		                            <li><a href='#' onclick=\"ir('/Login/logout','_self')\">Sair</a></li>
		                        </ul>
		                    </li>
		                </ul>
		            </div>
				</nav>
			</div>";
		
		return $menu;
	}
	
	/**
	 * 	Metodo para encerrar sessao e sair
	 * 
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 29 de mar de 2017 17:26:52
	 * 	@return void
	 */
	public function logout(){
		$this->destroiSessao();
	}
}