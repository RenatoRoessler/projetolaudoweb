<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller principal do m�dulo Fatura Enviados
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:00:49
 **/
class FluxoDigitacao extends MY_Controller {
	
	/**
	 * Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 
	 * @name $js
	 * @access public
	 */
	public $js = array (
		'js/FluxoDigitacao.js',
		'plugins/contextMenu/dist/jquery.contextMenu.js',
		'plugins/contextMenu/dist/jquery.ui.position.js',
		'plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
		'plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js' 
	);
	
	/**
	 * Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 
	 * @name $css
	 * @access public
	 */
	public $css = array (
		'css/sys-laudo.css',
		'css/sys-radio-check.css',
		'plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css' 
	);
	
	/**	Array com controles que sao permitidos para todos
	 * 	@name $controlePermitido
	 *	@access protected
	 */
	protected $controlePermitido = array( "FluxoDigitacao" );
	
	/**	Array com metodos que sao permitidos a todos
	 * 	@name $metodoPermitido
	 *	@access protected
	 */
	protected $metodoPermitido;
	
	/*
	 * Construct
	 */
	public function __construct() {
		parent::__construct ();
		$this->css [] = 'plugins/contextMenu/dist/jquery.contextMenu' . $this->session->tema . '.css';
	}
	
	/**
	 * Estilo dos status dos arquivos
	 * 
	 * @name $csslabel
	 * @access public
	 */
	private $csslabel = array (
		'' => 'btn-smooth glyphicon glyphicon-remove sys-info-round', // Nao
		'N' => 'btn-smooth glyphicon glyphicon-remove sys-info-round', // Nao
		'S' => 'btn-success glyphicon glyphicon-ok sys-info-round', // Sim
		'T' => 'btn-green-circle sys-info-round sys-info-round-label', // Sim
		'A' => 'btn-danger glyphicon glyphicon-thumbs-down sys-info-round', // Atrasado
		'P' => 'btn-success glyphicon glyphicon-ok sys-info-round', // Pronto para entrega
		'E' => 'btn-primary glyphicon glyphicon-thumbs-up sys-info-round' 
	) // Entregue
;
	
	/**
	 * Metodo Index, tela inicial do m�dulo Fatura Envio
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function index() {
		
		$info = array ();
		
		// Carregando Modelo
		$this->load->model ( 'FluxoDigitacaoModel' );
		
		// Buscando realizante
		$this->FluxoDigitacaoModel->listarUsuarioInstituicao( null, $this->session->idUsuario );
		$info['instituicao'] = $this->FluxoDigitacaoModel->dados;
		
		// Buscando agendas
		$this->FluxoDigitacaoModel->listarSetor();
		$info['setor']= $this->FluxoDigitacaoModel->dados;
		
		// Definindo paginacao
		$this->FluxoDigitacaoModel->paginar = array ();
		
		// Juntado filtros
		$filter = $this->session->filter;
		foreach ( $this->input->post () as $k => $v ) {
			if (substr ( $k, 0, 6 ) == 'Filter') {
				$filter [$k] = $v;
			}
		}
		if (! $filter ['FilterConsulta'] && ! $filter ['FilterProntuario']) {
			$filter ['FilterDataInicial'] = returnVariable ( $filter ['FilterDataInicial'], date ( 'd/m/Y', strtotime ( '-1 day' ) ) );
			$filter ['FilterDataFinal'] = returnVariable ( $filter ['FilterDataFinal'], date ( 'd/m/Y' ) );
		}
		$this->session->set_userdata ( 'filter', $filter );
		
		// Executando pesquisa
		$this->FluxoDigitacaoModel->listarTodos ();
		$this->FluxoDigitacaoModel->dados;
		
		/*$this->load->library ( 'classes/PACS' );
		$this->load->library ( 'classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS] );
		
		// Varrendo resultados para buscar link DICOM
		$ii = 0;
		foreach ( $this->FluxoDigitacaoModel->dados as $k => $v ) {
			// Buscando imagens DICOM para criar link
			$this->FluxoDigitacaoModel->dados[$k]['DICOM'] = $this->viewerdicom->getLinkStudies ( array (
				'PatientID' => $v ['CONSULTA'],
				'StudyDate' => $v ['DATAATENDIMENTO'] 
			), true );
			$ii = 1;
		}*/
		
		$info ['retorno'] = $this->FluxoDigitacaoModel->dados;
		$info ['filter'] = $filter;
		$info ['csslabel'] = $this->csslabel;
		$info ['paginacao'] = $this->paginar ( $this->FluxoDigitacaoModel );
		
		$info ['titulo'] = SYS_NAME . ' - Fluxo de Laudos da Digitação';
		
		$this->loadView ( array (
			'view' => 'laudo/FluxoDigitacaoIndex',
			'info' => $info 
		) );
	}
	
	/**
	 * Método para buscar informações do registros
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function info() {
		
		$this->load->model( 'FluxoDigitacaoModel' );
		/* Buscando informacao */
		$this->FluxoDigitacaoModel->listarInfoFooter( $this->uri->segment_array () );
		
		echo json_encode ( $this->FluxoDigitacaoModel->dados [0], JSON_UNESCAPED_UNICODE );
	}
	
	/**
	 * Método para liberar dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function liberar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'digitado' => array ( 'FM_DIGITADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele ainda n&atilde;o foi digitado.' ),
			'assinado' => array ( 'FM_ASSINADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele ainda n&atilde;o foi assinado.' ),
			'impresso' => array ( 'FM_IMPRESSO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele ainda n&atilde;o foi impresso.' ),
			'liberado' => array ( 'FM_LIBERADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele j&aacute; foi liberado.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Voc&ecirc; n&atilde;o pode liberar este laudo, pois ele j&aacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados[0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_liberado' => "'S'",
			'user_liberou' => "'$_SESSION[idUsuario]'" 
		);
		$this->FluxoDigitacaoModel->atualizar( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
	}
	
	/**
	 * Método para cancelar liberar dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function cancelarLiberar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'envelopado' => array ( 'FM_ENVELOPADO', 'S', 'i', 'Laudo j&aacute; est&aacute; envelopado.' ),
			'pronto' => array ( 'FM_PRONTOPARAENTREGA', 'S', 'i', 'Laudo j&aacute; est&aacute; pronto para entrega.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados[0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_liberado' => "'N'" 
		);
		$this->FluxoDigitacaoModel->atualizar( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
	}
	
	/**
	 * Método para envelopar dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function envelopar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'digitado' => array ( 'FM_DIGITADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele ainda n&atilde;o foi digitado.' ),
			'assinado' => array ( 'FM_ASSINADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele ainda n&atilde;o foi assinado.' ),
			'impresso' => array ( 'FM_IMPRESSO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele ainda n&atilde;o foi impresso.' ),
			'liberado' => array ( 'FM_LIBERADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele ainda n&atilde;o foi liberado.' ),
			'envelopado' => array ( 'FM_ENVELOPADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele j&aacute; foi envelopado.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Voc&ecirc; n&atilde;o pode envelopar este laudo, pois ele j&aacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados[0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_envelopado' => "'S'",
			'userenvelop' => "'". $this->session->idUsuario ."'",
			'dtenvelope' => "(select sysdate from dual)" 
		);
		$this->FluxoDigitacaoModel->atualizar ( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
		exit();
	}
	
	/**
	 * Método para cancelar envelopar dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function cancelarEnvelopar() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'pronto' => array ( 'FM_PRONTOPARAENTREGA', 'S', 'i', 'Laudo j&aaacute; est&aacute; pronto para entrega.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aaacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados[0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_envelopado' => "'N'" 
		);
		$this->FluxoDigitacaoModel->atualizar ( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
	}
	
	/**
	 * Método para pronto dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function pronto() {
		
		// Carregando Modelo
		$this->load->model( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'digitado' => array ( 'FM_DIGITADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele ainda n&atilde;o foi digitado.' ),
			'assinado' => array ( 'FM_ASSINADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele ainda n&atilde;o foi assinado.' ),
			'liberado' => array ( 'FM_LIBERADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele ainda n&atilde;o foi liberado.' ),
			'envelopado' => array ( 'FM_ENVELOPADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode colocar pronto este laudo, pois ele aind n&atilde;o foi envelopado.' ),
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados [0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
			exit ();
		}
		
		// Atualizando registro
		$registro = array (
			'fm_prontoparaentrega' => "'S'",
			'user_prontoparaentrega' => "'". $this->session->idUsuario ."'",
			'dtprentrega' => "(select sysdate from dual)" 
		);
		$this->FluxoDigitacaoModel->atualizar ( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
	}
	
	/**
	 * Método para cancelar pronto para entregar dos laudos
	 *
	 * @author Douglas Comim <douglas.comim@gmail.com>
	 * @version 0.0.1, 10 de jun de 2016 10:01:14
	 * @return void
	 */
	public function cancelarPronto() {
		
		// Carregando Modelo
		$this->load->model ( 'FluxoDigitacaoModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar' ) );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->FluxoDigitacaoModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3)),
		)));
		
		$checks = array (
			'entregue' => array ( 'FM_ENTREGUE', 'S', 'i', 'Laudo j&aacute; foi entregue.' ) 
		);
		if (! validChecksStats ( $this->FluxoDigitacaoModel->dados [0], $checks )) {
			redireciona ( '/FluxoDigitacao' );
		}
		
		// Atualizando registro
		$registro = array (
			'fm_prontoparaentrega' => "'N'" 
		);
		$this->FluxoDigitacaoModel->atualizar ( $this->uri->segment_array(), $registro );
		redireciona ( '/FluxoDigitacao' );
	}
}