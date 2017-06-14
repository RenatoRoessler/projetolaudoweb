<?php
/**	
 * 	Controller de gerenciamento de a��es do usuario
 * 		CRUD
 * 
 *	@author Douglas Comim
 *	@version 0.1 - 03/02/2016 10:12:56
 **/ 
class Usuario extends MainController{
	
	/**	Recebe nome do arquivo javascript default para ser carregado pelos views usados pelo controller
	 * 	@name $js
	 *	@access public
	 */
	public $js = array(
		'js/UsuarioScript.js',
		'plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js',
		'plugins/bootstrap-fileinput/js/fileinput.js',
		'plugins/bootstrap-fileinput/js/fileinput_locale_pt-BR.js'
	);		
	
	/**	Recebe nome do arquivo css para ser carregado pelos views usados pelo controller
	 * 	@name $css
	 *	@access public
	 */
	public $css = array(
		'css/sys-perfil.css',
		'plugins/bootstrap-fileinput/css/fileinput.min.css'
	);
	
	/**
	 * 	Metodo default de Controle Usuario
	 * 
	 *	@author Douglas Comim - 20/08/2015 14:32:09
	 *	@version 0.1
	 * 	@return void
	 */
	public function index(){
		
		//	Modelo do Usuario
		$this->modelo( 'Usuario' );
		
		$usuario = $this->Usuario->listar($_SESSION['idExterno']);
		
		$this->view->set( 'retorno', $usuario );
		$this->view->set( 'foto', $this->Usuario->foto() );
		
		$this->view->set( 'titulo', 'Usu�rio' );
		$this->view->render( 'usuario/Index' );
	}
	
	/**
	 * 	Metodo para upload de foto do perfil
	 *
	 *	@author Douglas Comim - 03/02/2016 14:32:09
	 *	@version 0.1
	 * 	@return void
	 */
	public function alteraFoto(){
	
		if( $_FILES['inputModalFoto'] ){
			if( $_FILES['inputModalFoto']['type'] == 'image/png' || $_FILES['inputModalFoto']['type'] == 'image/jpeg' ){
				$novoArquivo = SYS_LIB . 'images/usuarios/' . $_SESSION['idExterno'] . '.' . strtolower( substr($_FILES['inputModalFoto']['name'],-3) );
				$this->removeFoto( false );
				if( move_uploaded_file( $_FILES['inputModalFoto']['tmp_name'], $novoArquivo ) ){
					if( file_exists( $novoArquivo ) ){
						$this->redimensionaFoto( $novoArquivo );
						echo true;
					}else{
						echo false;
					}
				}
			}
		}
	}
	
	/**
	 * 	Metodo para alterar senha do usuario
	 *
	 *	@author Douglas Comim - 03/02/2016 14:32:09
	 *	@version 0.1
	 * 	@return void
	 */
	public function alteraSenha(){
	
		$senha = trim($_POST['Senha']);
		$senha1 = trim($_POST['Senha1']);
		$senha2 = trim($_POST['Senha2']);
		
		//	Modelo do Usuario
		$this->modelo( 'Usuario' );
		$usuario = $this->Usuario->listar( $_SESSION['idExterno'] );
		
		if( $usuario['Senha'] != md5( $senha ) ){
			$this->view->set( 'tipoMensagem', 'danger' );
			$this->view->set( 'mensagem', 'Senha atual n�o est� correta.' );
		}elseif ( $usuario['Senha'] == md5( $senha1 ) ) {
			$this->view->set( 'tipoMensagem', 'danger' );
			$this->view->set( 'mensagem', 'Senha atual e nova senha n�o podem ser iguais.' );
		}elseif ( $senha1 != $senha2 ) {
			$this->view->set( 'tipoMensagem', 'danger' );
			$this->view->set( 'mensagem', 'Nova senha e a confirma��o de senha, n�o s�o iguais.' );
		}else{
			if( $this->Usuario->alteraSenha( $senha, $senha1 ) ){
				$this->view->set( 'destruirSessao', 'true' );
				$this->view->set( 'tipoMensagem', 'success' );
				$this->view->set( 'mensagem', 'Senha alterada com sucesso.' );
			}else{
				$this->view->set( 'tipoMensagem', 'danger' );
				$this->view->set( 'mensagem', 'Erro ao redefinir a senha.' );
			}
		}
		$this->index();
	}
	
	/**
	 * 	Metodo remover foto do perfil
	 *
	 *	@author Douglas Comim - 03/02/2016 14:32:09
	 *	@version 0.1
	 *	@param	 $reload boolean - flag que define se recarrega pagina
	 *
	 * 	@return void
	 */
	public function removeFoto( $reload = true ){
		
		if( file_exists( SYS_LIB . 'images/usuarios/' . $_SESSION['idExterno'] . '.jpg' ) ){
			unlink( SYS_LIB . 'images/usuarios/' . $_SESSION['idExterno'] . '.jpg' );
		}
		if( file_exists( SYS_LIB . 'images/usuarios/' . $_SESSION['idExterno'] . '.png' ) ){
			unlink( SYS_LIB . 'images/usuarios/' . $_SESSION['idExterno'] . '.png' );
		}
		if( $reload )
			header('Location: /Usuario');
	}
	
	/**
	 * 	Metodo para redimensionar foto do perfil
	 *
	 *	@author Douglas Comim - 03/02/2016 14:32:09
	 *	@version 0.1
	 *	@param	$imagem, string - path para foto
	 *
	 * 	@return boolean
	 */
	private function redimensionaFoto( $imagem ){
		
		//	Biblioteca de resize
		include SYS_LIB . 'plugins/wideimage/WideImage.php';
		$sizeMain = 150;
		
		list($width, $height, $type, $attr) = getimagesize( $imagem );
		$novaAltura = round(($height * (round(((100*$sizeMain)/$width) /100,2))),0);
		// Carrega a imagem a ser manipulada
		$img = WideImage::load( $imagem );
		// Redimensiona a imagem
		$img = $img->resize( $sizeMain , $novaAltura);
		// Salva a imagem em um arquivo (novo ou n�o)
		$img->saveToFile( $imagem );
	}
}
?>