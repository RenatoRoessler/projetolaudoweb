<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller principal do modulo de edição de Laudos
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:00:49
 **/ 
class Editor extends MY_Controller{

	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array(
		'js/Editor.js',
		'js/form/TextoPadrao.js',
		'js/EditorHTML.js',
		'js/Gravador.js',
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
	public function digitar(){
		
		$info = array();
		
		//	Permissoes
		$this->validaPermissao( array( 'digitar' ) );
		
		//	Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Carregando Modelo
		$this->load->model( 'EditorModel' );
		
		$this->validaEntidade( $this->EditorModel, array( 'atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		) ) );
		
		$checks = array(
			'revisado' => array( 'FM_REVISADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; foi revisado.' ),
			'assinado' => array( 'FM_ASSINADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; foi assinado.' ),
			'liberado' => array( 'FM_LIBERADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode digitar este laudo, pois ele j&aacute; foi liberado.' ),
		);
		if( !validChecksStats($this->EditorModel->dados[0],$checks) ){
			redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
		}
		
		//	Pegando realizantes e revisores disponiveis
		$this->EditorModel->listarEntidade( 'realizante', null, 'nome' );
		$realizante = $this->EditorModel->dados;
		
		//	Executando pesquisa
		if( $this->EditorModel->digitar( $this->uri->segment_array() ) ){
			
			$this->load->library('classes/EditorHTML', $this->session->idSessao );
			
			//	Verificando se lauto HTML ja existe
			if( $this->EditorModel->dados['LAUDOH'] ){
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLOut( $this->EditorModel->dados['LAUDOH'] );
			}else{
				$this->editorhtml->rtfToHtml( $this->EditorModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
				
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->getBody();
			}
			/* Verifica se usuario é médico */
			if( $this->session->realizante ){
				$this->load->library('classes/PACS');
				$this->load->library('classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS]);
				//	Tratando retorno do laudo
				$info['dicom'] = $this->EditorModel->dados['DICOM'] = $this->viewerdicom->getLinkStudies( array(
					'PatientID' => $this->EditorModel->dados['CONSULTA'],
					'StudyDate' => $this->EditorModel->dados['DATAATENDIMENTO']
				));
			}
			$info['codlaudo'] = $this->uri->segment(3);
			$info['retorno'] = $this->EditorModel->dados;
			$info['realizante'] = $realizante;
		}else{
			$this->session->set_userdata('MSG', array( 'e', 'Falha ao recuperar laudo para edição' ) );
		}
		$info['voltarPage'] = $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'];
		$info['titulo'] = SYS_NAME . ' - Editor';
		
		$this->loadView ( array (
			'view' => 'laudo/EditorIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método para ditado dos laudos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 * 	@return void
	 */
	public function ditar(){
		
		$info = array();
		
		//	Permissoes
		$this->validaPermissao( array( 'digitar' ) );
		
		//	Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Carregando Modelo
		$this->load->model( 'EditorModel' );
		
		$this->validaEntidade( $this->EditorModel, array( 'atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		) ) );
		
		$checks = array(
			'revisado' => array( 'FM_REVISADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; foi revisado.' ),
			'assinado' => array( 'FM_ASSINADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; foi assinado.' ),
			'liberado' => array( 'FM_LIBERADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode ditar este laudo, pois ele j&aacute; foi liberado.' ),
		);
		if( !validChecksStats($this->EditorModel->dados[0],$checks) ){
			redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
		}
		
		//	Pegando realizantes e revisores disponiveis
		$this->EditorModel->listarEntidade( 'realizante', null, 'nome' );
		$realizante = $this->EditorModel->dados;
		
		//	Executando pesquisa
		if( $this->EditorModel->digitar( $this->uri->segment_array() ) ){
			
			$this->load->library('classes/PACS');
			$this->load->library('classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS]);
			$this->load->library('classes/EditorHTML', $this->session->idSessao );
			
			//	Verificando se lauto HTML ja existe
			if( $this->EditorModel->dados['LAUDOH'] ){
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLOut( $this->EditorModel->dados['LAUDOH'] );
			}else{
				$this->editorhtml->rtfToHtml( $this->EditorModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
				
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->getBody();
			}
			
			//	Tratando retorno do laudo
			$info['dicom'] = $this->EditorModel->dados['DICOM'] = $this->viewerdicom->getLinkStudies( array(
				'PatientID' => $this->EditorModel->dados['CONSULTA'],
				'StudyDate' => $this->EditorModel->dados['DATAATENDIMENTO']
			));
			
			$info['codlaudo'] = $this->uri->segment(3);
			$info['retorno'] = $this->EditorModel->dados;
			$info['realizante'] = $realizante;
		}else{
			$this->session->set_userdata('MSG', array( 'e', 'Falha ao recuperar laudo para edição' ) );
		}
		
		$info['voltarPage'] = $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'];
		$info['titulo'] = SYS_NAME . ' - Editor';
		
		$this->loadView ( array (
			'view' => 'laudo/EditorIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método para revisar dos laudos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 0.0.1, 10 de jun de 2016 10:01:14
	 * 	@return void
	 */
	public function revisar(){
		
		$info = array();
		
		//	Permissoes
		$this->validaPermissao( array( 'revisar' ) );
		
		//	Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Carregando Modelo
		$this->load->model( 'EditorModel' );
		
		$this->validaEntidade( $this->EditorModel, array( 'atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		) ) );
		
		$checks = array(
			'digitado' => array( 'FM_DIGITADO', 'N', 'i', 'Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele n&atilde;o foi digitado.' ),
			//'revisado' => array( 'FM_REVISADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele j&aacute; foi revisado.' ),
			'assinado' => array( 'FM_ASSINADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele j&aacute; foi assinado.' ),
			'liberado' => array( 'FM_LIBERADO', 'S', 'i', 'Voc&ecirc; n&atilde;o pode revisar este laudo, pois ele j&aacute; foi liberado.' ),
		);
		if( !validChecksStats($this->EditorModel->dados[0],$checks) ){
			redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
		}
		
		//	Pegando realizantes e revisores disponiveis
		$this->EditorModel->listarEntidade( 'realizante', null, 'nome' );
		$info['realizante'] = $this->EditorModel->dados;
		
		$this->EditorModel->listarEntidade( 'realizante', array(array( 'codrea =', $this->session->realizante)), 'nome' );
		$info['revisor'] = $this->EditorModel->dados;
		
		//	Executando pesquisa
		if( $this->EditorModel->revisar( $this->uri->segment_array() ) ){
			
			$this->load->library('classes/PACS');
			$this->load->library('classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS]);
			$this->load->library('classes/EditorHTML', $this->session->idSessao );
			
			//	Verificando se lauto HTML ja existe
			if( $this->EditorModel->dados['LAUDOH'] ){
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLOut( $this->EditorModel->dados['LAUDOH'] );
			}else{
				$this->editorhtml->rtfToHtml( $this->EditorModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
				
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->getBody();
			}
			
			//	Tratando retorno do laudo
			$info['dicom'] = $this->EditorModel->dados['DICOM'] = $this->viewerdicom->getLinkStudies( array(
				'PatientID' => $this->EditorModel->dados['CONSULTA'],
				'StudyDate' => $this->EditorModel->dados['DATAATENDIMENTO']
			));
			
			$info['codlaudo'] = $this->uri->segment(3);
			$info['retorno'] = $this->EditorModel->dados;
		}else{
			$this->session->set_userdata('MSG', array( 'e', 'Falha ao recuperar laudo para revisão' ) );
		}
		
		$info['voltarPage'] = $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'];
		$info['titulo'] = SYS_NAME . ' - Editor';
		
		$this->loadView ( array (
			'view' => 'laudo/EditorIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método para visualização dos laudos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 14 de fev de 2017 20:38:46
	 * 	@return void
	 */
	public function visualizar(){
		
		$info = array();
		
		//	Permissoes
		$this->validaPermissao( array( 'visualizar' ) );
		
		//	Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	//	Carregando Modelo
		$this->load->model( 'EditorModel' );
		
		$this->validaEntidade( $this->EditorModel, array( 'atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		) ) );
		
		//	Executando pesquisa
		if( $this->EditorModel->digitar( $this->uri->segment_array() ) ){
			
			$this->load->library('classes/PACS');
			$this->load->library('classes/ViewerDICOM', $this->config->item('sys_pacs')[SYS_PACS]);
			$this->load->library('classes/EditorHTML', $this->session->idSessao );
			
			//	Verificando se lauto HTML ja existe
			if( $this->EditorModel->dados['LAUDOH'] ){
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLOut( $this->EditorModel->dados['LAUDOH'] );
			}else{
				$this->editorhtml->rtfToHtml( $this->EditorModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
				
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->getBody();
			}
			
			//	Tratando retorno do laudo
			$info['dicom'] = $this->EditorModel->dados['DICOM'] = $this->viewerdicom->getLinkStudies( array(
				'PatientID' => $this->EditorModel->dados['CONSULTA'],
				'StudyDate' => $this->EditorModel->dados['DATAATENDIMENTO']
			));
			
			$codrea = $this->EditorModel->dados['CODREA'];
			$codrev = $this->EditorModel->dados['CODREV'];
			
			$info['retorno'] = $this->EditorModel->dados;
			
			//	Pegando realizantes e revisores disponiveis
			if( $codrea ){
				$this->EditorModel->listarEntidade( 'realizante', array(array('codrea =', $codrea)), 'nome' );
				$info['realizante'] = returnVariable( $this->EditorModel->dados, '' );
			}
			
			if( $codrev ){
				$this->EditorModel->listarEntidade( 'realizante', array(array('codrea =', $codrev)), 'nome' );
				$info['revisor'] = returnVariable( $this->EditorModel->dados, '' );
			}
			
		}else{
			$this->session->set_userdata('MSG', array( 'e', 'Falha ao recuperar laudo para visualiza&ccedil;&atilde;o' ) );
		}
		
		$info['voltarPage'] = $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'];
		$info['titulo'] = SYS_NAME . ' - Editor';
		
		$this->loadView ( array (
			'view' => 'laudo/EditorIndex',
			'info' => $info
		) );
	}
	
	/**
	 * 	Método se laudo possue ditado gravado
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 21:21:59
	 * 	@return void
	 */
	public function verificaDitado(){
	
		/* Testando parametros */
		if( !$this->uri->segment_array() ){
			echo json_encode( array( 'status' => false, 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		//	Carregando Modelo
		$this->load->model( 'EditorModel' );

		$this->EditorModel->verificaDitado( $this->uri->segment_array() );
		$dados = $this->EditorModel->dados;
		
		/* Path para arquivos */
		$path = SYS_VOICE . $this->uri->segment(3);
		$filesInFolder = array_diff( scandir( $path ), array('..', '.') );
		
		$files = array();
		$tmp = $ditado = false;
		foreach ( $filesInFolder as $k => $v ){
			if( substr( $v , 0, 6 ) == 'ditado' ){
				$ditado = $v;
				$temp = explode( '_', $v );
				$files[] = array(
					'p' => pegaCaminho( $path ) . '/' . $v,
					'pp' => urlencode(base64_encode( pegaCaminho( $path ) . ':' . $v . ':' . "$temp[1]_ditado_".$this->uri->segment(3)."$temp[5]" )),
					'f' => $v,
					'i' => array(
						's' => $temp[1],
						'u' => $temp[3],
						'e' => $temp[5],
						'c' => date( 'd/m/Y H:i', filemtime( $path . '/' . $v ) ) 
					)
				);
			}else if ( substr( $v, 0, 3 ) != 'del' && $v != '' && $v ){
				$tmp = $v;
			}
		}
		
		/* Verificando se flag no banco esta marcada como ditado e se o arquivo foi encontrado */
		if( $dados['FM_DITADO'] == 'S' && $ditado && !$tmp ){
			echo json_encode( $files, JSON_UNESCAPED_UNICODE );
			exit();
		}

		/* Não está ditado e nenhum arquivo no diretorio */
		if( in_array( $dados['FM_DITADO'], array( null, 'N' ) ) && !$ditado && !$tmp ){
			echo json_encode( $files , JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		/* Está ditado e nenhum arquivo no diretorio */
		if( $dados['FM_DITADO'] == 'S' && !$ditado && !$tmp ){
			echo json_encode( $files , JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		/* Flag no banco não existe, arquivo existe */
		if( in_array( $dados['FM_DITADO'], array( null, 'N' ) ) && $ditado && !$tmp ){
			$tmp = $ditado;
		}
		
		$temp = explode( '_', $tmp );
		$file = array(
			'n' => $tmp,
			's' => $temp[0],
			'u' => $temp[2],
			'f' => pegaCaminho( $path ) . '/' . $tmp,
			'd' => date( 'd/m/Y H:i', filemtime( $path . '/' . $tmp ))
		);
		
		$this->session->set_userdata('pathDitadoRecuperar', $this->uri->segment(3) );
		
		echo json_encode( array( 'status' => 999, 'file' => $file ), JSON_UNESCAPED_UNICODE );	
	}
	
	/**
	 * 	Método para excluir ditado
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 21:21:59
	 * 	@return void
	 */
	public function excluirDitado(){
	
		/* Testando parametros */
		if( !$this->uri->segment_array() ){
			echo json_encode( array( 'status' => false, 'tipo' => 'e', 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		$path = SYS_VOICE . $this->uri->segment(3);
		$file = $this->uri->segment(4);
		
		$this->load->library('classes/Arquivo');
		
		if( $this->arquivo->contaArquivoDiretorio( 'ditado_*', $path ) === 1 ){
			
			//	Carregando Modelo
			$this->load->model( 'EditorModel' );
			
			if( !$this->EditorModel->removeDitado( $this->uri->segment_array() ) ){
				echo json_encode( array( 'status' => false, 'tipo' => 'e', 'message' => 'Falha ao atuaizar registro.' ), JSON_UNESCAPED_UNICODE );
				exit();
			}
		}
		
		if( !file_exists( $path . '/' . $file ) ){
			echo json_encode( array( 'status' => false, 'tipo' => 'e', 'message' => 'Arquivo não encontrado no diretório.' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		if( !rename( $path . '/' . $file, $path . "/del_" . $this->session->login . "_" . date('dmYHi') . '_' . $file ) ){
			echo json_encode( array( 'status' => false, 'tipo' => 'e', 'message' => 'Erro ao excluir arquivo.' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		echo json_encode( array( 'status' => true, 'tipo' => 's', 'message' => 'Arquivo excluído com sucesso.' ), JSON_UNESCAPED_UNICODE );
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
		$this->load->model( 'EditorModel' );
		
		// Permissao
		$this->validaPermissao( array( 'digitar', 'laudar' ), null, 1 );
		
		// Parametros
		$this->validaParametro( $this->uri->segment_array() );
		
		//	Entidade
		$this->validaEntidade( $this->EditorModel, array('atd_laudo', array(
			array( 'codlaudo =', $this->uri->segment(3))
		)));
		
		$checks = array (
			'revisado' => array ( 'FM_REVISADO', 'S', 'i', 'Laudo j&aacute; est&aacute; revisado.' ),
			'assinado' => array ( 'FM_ASSINADO', 'S', 'i', 'Laudo j&aacute; est&aacute; assinado.' ),
			'liberado' => array ( 'FM_LIBERADO', 'S', 'i', 'Laudo j&aacute; foi liberado.' ),
		);
		if (! validChecksStats ( $this->EditorModel->dados[0], $checks )) {
			redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
			exit ();
		}
			
		if( $this->uri->segment_array() && $this->input->post() ){
			
			//	Executando pesquisa
			if( !$this->EditorModel->salvar( $this->uri->segment_array(), $this->input->post() ) ){
				$this->session->set_userdata('MSG', array( 'e', 'Falha ao salvar laudo. <br/>[' . $this->EditorModel->db->error() . ']' ));
			}else{
				$this->session->set_userdata('MSG', array( 's', 'Laudo salvo com sucesso' ));
			}
		}
		if( $this->uri->segment(4) == 'revisar' ){
			
			$this->session->set_userdata('MSGC', 'setTimeout(function(){controle.assinarLaudo('. $this->uri->segment(3) .')},500)');
			//redireciona( $this->config->item('sys_parameters')[ $this->session->tipoUsuario ]['Index'] );
			//exit();
		}
		
		redireciona( '/Editor/' . $this->uri->segment(4) . '/' . $this->uri->segment(3));
		exit();
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
		$this->load->model( 'EditorModel' );
			
			//	Buscando laudos a partir dos filtros usados
			$this->EditorModel->imprimir( $this->uri->segment_array() );
			
			$this->load->library('classes/EditorHTML', array( $this->session->idSessao ) );
				
			//	Verificando se lauto HTML ja existe
			if( $this->EditorModel->dados['LAUDOH'] ){
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLPrintOut( $this->editorhtml->ajustaHTMLOut( $this->EditorModel->dados['LAUDOH'] ) );
			}else{
				$this->editorhtml->rtfToHtml( $this->EditorModel->dados['LAUDOR'] );
				$this->editorhtml->ajustaHTML();
					
				$this->EditorModel->dados['LAUDO'] = $this->editorhtml->ajustaHTMLPrintOut( $this->editorhtml->getBody() );
			}
			
			$this->load->library('classes/Exportador', array( $this->session->idSessao ) );
			$this->EditorModel->dados['ASSINATURA_IMAGEM'] = (int) $this->uri->segment(4);
			
			//	Fechando buffer, pegando dados e iniciando relatorio
			$this->exportador->PDFLaudo( $this->EditorModel->dados );
		}	
	}
	
}