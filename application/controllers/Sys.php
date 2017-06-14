<?php
/**	
 * 	Controller do sistema geral
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 27 de mar de 2017 21:08:00
 **/ 
class Sys extends MY_Controller{
	
	/**	Controles que podem executar Sys
	 * 	@name $controle
	 *	@access private
	 */
	protected $controle = array( 'FluxoMedico', 'FluxoMedico' );
	
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
	 * 	Busca principal
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de mai de 2017 19:58:12
	 * 	@return void
	 */
	public function buscaMain(){
		
		//	Verificando de ID passado existe
		if( isVal( $this->input->post()) ){
			
			$entidade = cript($this->input->post('E'),'D'); // Entidade
			$atributo = $this->input->post('A'); // Atributo
			$colunas = $this->input->post('C'); // Colunas
			$order = $this->input->post('O'); // Order by
			$this->session->set_userdata('pagina', $this->input->post('P')); // Página
			
			//	Carregando Modelo
			$this->load->model( 'SysModel' );
			
			$this->SysModel->paginar = array();
			
			//	Passando parametros para busca
			if( $dados = $this->SysModel->buscaMain( $entidade, $atributo, $colunas, $order ) ){
				jsonValores($dados);
				$obj = array(
					'status' => 1,
					'mensagem' => '',
					'conteudo' => $dados,
					'paginacao' => $this->paginar ( $this->SysModel )
				);
			}else{
				$obj = array(
					'status' => !!$dados,
					'mensagem' => '',
					'conteudo' => ''
				);
			}
		}
		echo json_encode( $obj );
	}
	
	/**
	 * 	Donwload de arquivos de reports
	 *
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 16 de fev de 2016 15:58:10
	 *	@version 0.1
	 * 	@return void
	 */
	public function download(){
		
		if( isVal( $this->uri->segment(3) ) && $this->session->has_userdata('idSessao') ){
			
			//	Download com nome do arquivo encriptado
			if( $this->uri->segment(3) == "E" ){

				//	/caminhoParaOArquivo/:nomeDoArquivoNoServidor[:nomeDesejadoDoArquivo]
				$tf = explode( ':', cript( $this->uri->segment(4), 'D' ) );
				$file = SYS_PATH . $tf[0] . '/' . $tf[1];
				$nameFile = returnVariable( $tf[2], $tf[1] );
				
			}else if( $this->uri->segment(3) == "N" ){
				
				//	/CONST/:nomeDoArquivoNoServidor[:nomeDesejadoDoArquivo]
				$file = constant( 'SYS_' . $this->uri->segment(4) ) . $this->uri->segment(5);
				$nameFile = returnVariable( $this->uri->segment(6), $this->uri->segment(5) );
				
			}elseif( $this->uri->segment(3) == "B" ){
				
				log_message('error', base64_decode(urldecode( $this->uri->segment(4) ) ));
				$tf = explode( ':', base64_decode(urldecode( $this->uri->segment(4) ) ));
				$file = FCPATH . $tf[0] . '/' . $tf[1];
				$nameFile = returnVariable( $tf[2], $tf[1] );
				
			}else{
				
				$file = SYS_REPORTS . $this->uri->segment(3);
				$nameFile = $this->uri->segment(3);
				
			}
			
			//	For�ando download
			header( 'Content-type: application/octet-stream' );
			header( 'Content-disposition: attachment; filename=' . $nameFile );
			header( 'Content-Transfer-Encoding: binary' );
			header( 'Content-Length: ' . filesize( $file ) );
			header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
			header( 'Pragma: public' );
			readfile( $file );
			exit();
		}else{
			header( "Location: /Index" );
		}
	}
	
	/**
	 * 	Metodo que reseta valor de $_SESSION['Mensagem']
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 14 de fev de 2017 16:46:56
	 * 	@return void
	 */
	public function mensagemClean(){
		$this->session->unset_userdata('MSG');
		$this->session->unset_userdata('MSGB');
		$this->session->unset_userdata('MSGC');
	}
}
?>