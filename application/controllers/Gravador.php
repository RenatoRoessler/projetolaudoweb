<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe Controller para gravacao dos ditados medicos
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 1.0 - 21 de mar de 2017 19:12:55
 **/ 
class Gravador extends MY_Controller{

	/**	Array com controles que podem executar metodos
	 * 	@name $controle
	 *	@access protected
	 */
	protected $controle = array( 'FluxoMedico', 'FluxoDigitacao' );
	
	/**	Contrutor
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Método para salvar ditado em intervalos
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 21 de mar de 2017 19:14:25
	 * 	@return void
	 */
	public function salvaDitadoIntervalo(){

		/* Testando parametros */
		if( !$this->input->post('codlaudo') || $_FILES['audio']['error'] != 0 ){
			echo json_encode( array( 'status' => false, 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		/* Path para salvar os arquivos */
		$path = SYS_VOICE . $this->input->post('codlaudo');
		$nomeGravacao = padl( $this->input->post('num'), 4, '0' ) . '_tmp_' . $this->session->login . '_' . $this->session->idSessao . $this->input->post('ext'); 
		
		/* Verifica se diretorio do cst/nroseq/exame existe */
		if( !file_exists( $path ) ){
			if( !mkdir( $path, SYS_CHMOD, true ) ){
				echo json_encode( array( 'status' => false, 'message' => "Falha ao criar diretório [ $_POST[codlaudo] ]"  ), JSON_UNESCAPED_UNICODE );
				exit();
			}
			chmod( $path, SYS_CHMOD );
		}
		
		$this->load->library('classes/Arquivo');
		
		echo var_dump($_FILES);
		
		if( !$this->arquivo->upload( $_FILES['audio'] , $path . '/' . $nomeGravacao ) ){
			echo json_encode( array( 'status' => false, 'message' => "Falha ao salvar arquivo no diretório [ ". $this->input->post('codlaudo') ." ]"  ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		chmod( $path . '/' . $nomeGravacao , SYS_CHMOD );
		
		/* Sucesso total */
		echo json_encode( array( 'status' => true, 'message' => "Ok"  ), JSON_UNESCAPED_UNICODE );
		exit();
		
	}
	
	/**
	 * 	Método para salvar ditado final
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 14:37:57
	 * 	@return void
	 */
	public function salvaDitado(){

		/* Testando parametros */
		if( !$this->input->post('codlaudo') || $_FILES['audio']['error'] != 0 ){
			echo json_encode( array( 'status' => false, 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		$this->load->library('classes/Arquivo');
		
		/* Pega sequencia mais alta de arquivos ditados */
		$count = 1 + (int) $this->arquivo->parteNomeArquivoDiretorio('^ditado_*', SYS_VOICE . $this->input->post('codlaudo'), '_', 2 );
		$salt = md5( $this->session->idSessao . date('dmYHis') );
		
		/* Path para salvar os arquivos */
		$path = SYS_VOICE . $this->input->post('codlaudo');
		$nomeGravacao = 'ditado_' . padl( $count, 4, '0' ) . '_' . preg_replace( '/[^0-9]/', '', $this->input->post('codlaudo') ) . '_' . strtolower( $this->session->login ) . '_' . $salt . '_' . $this->input->post('ext') ;
		
		/* Verifica se diretorio existe */
		if( !file_exists( $path ) ){
			if( !mkdir( $path, SYS_CHMOD, true ) ){
				echo json_encode( array( 'status' => false, 'message' => "Falha ao criar diretório [ ". $this->input->post('codlaudo') ." ]"  ), JSON_UNESCAPED_UNICODE );
				exit();
			}
			chmod( $path, SYS_CHMOD );
		}
		
		if( !$this->arquivo->upload( $_FILES['audio'] , $path . '/' . $nomeGravacao ) ){
			echo json_encode( array( 'status' => false, 'message' => "Falha ao salvar arquivo no diretório [ ". $this->input->post('codlaudo') ." ]"  ), JSON_UNESCAPED_UNICODE );
			exit();
		}

		// Aplicando permissões na pasta
		chmod( $path . '/' . $nomeGravacao , SYS_CHMOD );
		
		/* Persistindo info sobre ditado no banco */
		$this->load->model('GravadorModel');
		
		if( $this->GravadorModel->salvaDitado( $this->input->post('codlaudo') ) ){
			/* Se tudo até aqui deu certo, vamos apagar arquivos temporários no servidor */
			$this->removeDitadoIntervalo( $this->input->post('codlaudo') );
		}
		
		/* Sucesso total */
		echo json_encode( array( 'status' => true, 'message' => "Gravação salva com sucesso"  ), JSON_UNESCAPED_UNICODE );
		exit();
		
	}
	
	/**
	 * 	Método para recuperar ditado final
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 14:37:57
	 * 	@return void
	 */
	public function recuperaDitadoIntervalo(){

		/* Testando parametros */
		if( !$this->session->pathDitadoRecuperar ){
			echo json_encode( array( 'status' => false, 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		$this->load->library('classes/Arquivo');
		
		/* Pega sequencia mais alta de arquivos ditados */
		$count = 1 + (int) $this->arquivo->parteNomeArquivoDiretorio('^ditado_*', SYS_VOICE . $this->session->pathDitadoRecuperar, '_', 2 );
		$salt = md5( $this->session->idSessao . date('dmYHis') );
		
		/* Path para salvar os arquivos */
		$path = SYS_VOICE . $this->session->pathDitadoRecuperar;
		$nomeGravacao = 'ditado_' . padl( $count, 4, '0' ) . '_' . preg_replace( '/[^0-9]/', '', $this->session->pathDitadoRecuperar ) . '_' . strtolower( $this->session->login ) . '_' . $salt . '_' . returnVariable($this->input->post('ext'),'.ogg') ;
		
		/* Verifica se diretorio do cst/nroseq/exame existe */
		if( !file_exists( $path ) ){
			if( !mkdir( $path, SYS_CHMOD, true ) ){
				echo json_encode( array( 'status' => false, 'message' => "Falha ao criar diretório [ ".$this->session->pathDitadoRecuperar." ]"  ), JSON_UNESCAPED_UNICODE );
				exit();
			}
			chmod( $path, SYS_CHMOD );
		}
		
		if( !rename( $path . '/' . $this->uri->segment(3) , $path . '/' . $nomeGravacao ) ){
			echo json_encode( array( 'status' => false, 'message' => "Falha ao salvar arquivo no diretório [ ".$this->session->pathDitadoRecuperar." ]"  ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		chmod( $path . '/' . $nomeGravacao , SYS_CHMOD );
		
		/* Persistindo info sobre ditado no banco */
		$this->load->model('GravadorModel');
		
		$cod = explode( '/', $this->session->pathDitadoRecuperar );
		if( $this->GravadorModel->salvaDitado( $this->session->pathDitadoRecuperar)){
			/* Se tudo até aqui deu certo, vamos apagar arquivos temporários no servidor */
			$this->removeDitadoIntervalo( $this->session->pathDitadoRecuperar );
		}
		
		$this->session->unset_userdata('pathDitadoRecuperar');
		
		/* Sucesso total */
		echo json_encode( array( 'status' => true, 'message' => "Gravação salva com sucesso"  ), JSON_UNESCAPED_UNICODE );
		exit();
		
	}
	
	/**
	 * 	Método para descartar ditados listados como tentativa de recuperacao
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de mar de 2017 16:59:11
	 * 	@return void
	 */
	public function descartaDitadoIntervalo(){
		
		/* Testando parametros */
		if( !$this->session->pathDitadoRecuperar ){
			echo json_encode( array( 'status' => false, 'message' => 'Parâmetros incorretos' ), JSON_UNESCAPED_UNICODE );
			exit();
		}
		
		if( SYS_VOICE != '' ){
			$path = $this->session->pathDitadoRecuperar;
			//	Removendo os arquivos
			shell_exec( 'rm -f ' . SYS_VOICE . $path . '/*tmp_*.ogg' );
			//shell_exec( 'rm -f ' . SYS_VOICE . $path . '/' . $this->uri->segment(3) );
		}
		$this->session->unset_userdata('pathDitadoRecuperar');
	}
	
	/**
	 * 	Método para remover arquivos de ditados temporários
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 14:37:57
	 * 	@return void
	 */
	public function removeDitadoIntervalo( $path ){
		if( SYS_VOICE != '' ){
			//	Removendo os arquivos
			log_message('info', shell_exec( 'rm -f ' . SYS_VOICE . $path . '/*tmp_*.ogg' ) );
		}
	}
}