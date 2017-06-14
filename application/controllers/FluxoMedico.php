<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller principal do m�dulo Fatura Enviados
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:00:49
 **/ 
class FluxoMedico extends MY_Controller{

	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array(
		'js/FluxoMedico.js',
		'js/Main.js',
		'plugins/contextMenu/dist/jquery.contextMenu.js',
		'plugins/contextMenu/dist/jquery.ui.position.js',
		'plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
		'plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js'
	);
	
	/**	Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 	@name $css
	 *	@access public
	 */
	public $css = array(
		'css/sys-laudo.css',
		'css/sys-radio-check.css',
		'plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'
	);
	
	/**	Estilo dos status dos arquivos
	 * 	@name $csslabel
	 *	@access public
	 */
	private $csslabel = array(
		'N' => 'btn-smooth glyphicon glyphicon-remove sys-info-round', 	//	Nao
		'S' => 'btn-success glyphicon glyphicon-ok sys-info-round', 	//	Sim
		'PIC' => 'btn-success glyphicon glyphicon-folder-open sys-info-round', 	//	Imagem
	); 
	
	/*
	 * Construct
	 * */
	public function __construct(){
		parent::__construct();		
		$this->css [] = 'plugins/contextMenu/dist/jquery.contextMenu' . $this->session->tema . '.css';
	}
	
	/**
	 * 	Metodo Index, tela inicial do m�dulo Fatura Envio
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 * 	@return void
	 */
	public function index(){
		
		$info = array();
		
		//	Carregando Modelo
		$this->load->model('FluxoMedicoModel');
		
		//	Buscando realizante
		$this->FluxoMedicoModel->listarUsuarioInstituicao( null, $this->session->idUsuario );
		$info['instituicao'] = $this->FluxoMedicoModel->dados;
		
		//	Buscando agendas
		$this->FluxoMedicoModel->listarSetor();
		$info['setor']= $this->FluxoMedicoModel->dados;
		
		//	Definindo paginacao
		$this->FluxoMedicoModel->paginar = array();
		
		//	Juntado filtros
		$filter = $this->session->filter;
		foreach ( $this->input->post() as $k => $v ){
			if( substr( $k, 0, 6 ) == 'Filter' ){
				$filter[ $k ] = $v;
			}
		}
		if (! $filter ['FilterConsulta'] && ! $filter ['FilterProntuario']) {
			// Definindo valores padrao
			$filter ['FilterDataInicial'] = returnVariable ( $filter ['FilterDataInicial'], date ( 'd/m/Y', strtotime ( '-1 day' ) ) );
			$filter ['FilterDataFinal'] = returnVariable ( $filter ['FilterDataFinal'], date ( 'd/m/Y' ) );
		}
		$this->session->set_userdata('filter', $filter );
		
		//	Executando pesquisa
		$this->FluxoMedicoModel->listarTodos();
		
		$this->load->library ( 'classes/PACS' );
		$this->load->library ( 'classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS] );
		
		// Varrendo resultados para buscar link DICOM
		$ii = 0;
		foreach ( $this->FluxoMedicoModel->dados as $k => $v ) {
			// Buscando imagens DICOM para criar link
			$this->FluxoDigitacaoModel->dados[$k]['DICOM'] = $this->viewerdicom->getLinkStudies ( array (
				'PatientID' => $v ['CONSULTA'],
				'StudyDate' => $v ['DATAATENDIMENTO']
			), true );
			$ii = 1;
		}
			
		$info ['retorno'] = $this->FluxoMedicoModel->dados;
		$info ['csslabel'] = $this->csslabel;
		$info ['paginacao'] = $this->paginar ( $this->FluxoMedicoModel );
		
		$info ['titulo'] = SYS_NAME . ' - Fluxo de Laudos Médico';
		
		$this->loadView ( array (
			'view' => 'laudo/FluxoMedicoIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método para assinar dos laudos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 * 	@return void
	 */
	public function assinar(){
		
		//	Carregando Modelo
		$this->load->model('FluxoMedicoModel');
	
		// Permissao
		$this->validaPermissao( array( 'assinar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoMedicoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		)));
		
		$checks = array(
			'digitado' => array( 'FM_DIGITADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode assinar este laudo, pois ele ainda n&atilde;o foi digitado.' ),
			'assinado' => array( 'FM_ASSINADO', 'S', 'i', 'Laudo j&aacute; est&aacute; assinado.' ),
			'liberado' => array( 'FM_LIBERADO', 'S', 'i', 'Laudo j&aacute; foi liberado.' ),
			'envelopado' => array( 'FM_ENVELOPADO', 'S', 'i', 'Laudo j&aacute; foi envelopado.' ),
			'entregue' => array( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' ),
		);
		if( !validChecksStats($this->FluxoMedicoModel->dados[0], $checks) ){
			redireciona( '/FluxoMedico' );
			exit();
		}
	
		//	Executando assinatura
		$this->FluxoMedicoModel->assinar( $this->uri->segment_array() );
		redireciona( '/FluxoMedico' );
	}
	
	/**
	 * Método para cancelar assinatura dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function cancelarAssinar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoMedicoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'assinar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoMedicoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
			array( 'assinado =', $this->session->realizante ), /* Médicao só pode cancelar o que ele assinou */
		)), null, 'Falha ao cancelar assinatura!<br/>Tem certeza que foi voc&ecirc; quem assinou esse laudo ?');
		
		$checks = array (
			'liberado' => array ( 'FM_LIBERADO', 'S', 'i', 'Laudo j&aacute; est&aacute; liberado.' ),
			'envelopado' => array ( 'FM_ENVELOPADO', 'S', 'i', 'Laudo j&aacute; est&aacute; envelopado.' ),
			'pronto' => array ( 'FM_PRONTOPARAENTREGA', 'S', 'i', 'Laudo j&aacute; est&aacute; pronto para entrega.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' )
		);
		if (! validChecksStats ( $this->FluxoMedicoModel->dados[0], $checks )) {
			redireciona ( '/FluxoMedico' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_assinado' => "'N'",
			'assinado' => 'null',
			'dtassinado' => 'null'
		);
		$this->FluxoMedicoModel->atualizar( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoMedico' );
		exit();
	}
	
	/**
	 * Método para cancelar revisão dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function cancelarRevisar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoMedicoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'assinar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoMedicoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
			array( 'revisalaudo =', $this->session->realizante ), /* Médicao só pode cancelar o que ele revisou */
		)), null, 'Falha ao cancelar revis&atilde;o!<br/>Tem certeza que foi voc&ecirc; quem revisou esse laudo ?' );
		
		$checks = array (
			'assinado' => array ( 'FM_ASSINADO', 'S', 'i', 'Laudo j&aacute; est&aacute; assinado.' ),
			'liberado' => array ( 'FM_LIBERADO', 'S', 'i', 'Laudo j&aacute; est&aacute; liberado.' ),
			'envelopado' => array ( 'FM_ENVELOPADO', 'S', 'i', 'Laudo j&aacute; est&aacute; envelopado.' ),
			'pronto' => array ( 'FM_PRONTOPARAENTREGA', 'S', 'i', 'Laudo j&aacute; est&aacute; pronto para entrega.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' )
		);
		if (! validChecksStats ( $this->FluxoMedicoModel->dados[0], $checks )) {
			redireciona ( '/FluxoMedico' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_revisado' => "'N'",
			'revisalaudo' => 'null',
			'dtrevisalaudo' => 'null'
		);
		$this->FluxoMedicoModel->atualizar( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoMedico' );
		exit();
	}
	
}