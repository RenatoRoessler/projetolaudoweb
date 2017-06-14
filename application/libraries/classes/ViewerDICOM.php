<?php
/**	
 * 	Classe VIEWER DICOM
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 20 de fev de 2017 21:50:48
 **/ 
class ViewerDICOM extends PACS{
	
	/**	URL do Viewer
	 * 	@name $viewerURI
	 *	@access	private
	 */
	private $viewerURI = 'osimis-viewer/app/plugin-entrypoint.html' ;
	
	/**	Query para buscar estudos
	 * 	@name $studyQuery
	 *	@access	private
	 */
	private $studyQuery = [
		'Level' => 'Study',
		'Query' => null
	];
	
	/**	Curl usado para comunicação com o PACS 
	 * 	@name $this->curl
	 *	@access	private
	 */
	private $curl;
	
	/**
	 * 	Construct
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 20 de fev de 2017 21:56:01
	 *	@param array @config - Configurações do PACS
	 *
	 * 	@return void
	 */
	public function __construct( array $config ){
		//	Query CURL
		$this->curl = curl_init();
		$this->config = $config;
	}
	
	/* GETTERS AND SETTERS */
	public function setConfig( $config ){
		$this->config = $config;
	}
	
	/**
	 * 	Formata dados de entrada para filtro do pacs
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.1 - 20 de fev de 2017 21:56:01
	 *	@param	array $input - Array com dados do filtro
	 *
	 * 	@return array
	 */
	public function formatInput( array $input ){
		
		if( !is_array( $input ) ){
			return $input;
		}
		foreach ( $input as $k => $v ){
			switch ( $this->config['formatFilter'][$k]['type'] ){
				case 'int':
					$input[$k] = str_replace( '{VALUE}', $v, $this->config['formatFilter'][$k]['mask'] );
				break;
				case 'date':
					$input[$k] = formatDate( $v, $this->config['formatFilter'][$k]['mask'] );
				break;
			}
		}
		return $input;
	}
	
	/**
	 * 	Método para recuperar estudos DICOM em link para visualização
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.1 - 20 de fev de 2017 21:56:01
	 *
	 *	@param	$param Array
	 *			- Array com filtros para filtro buscar studo
	 *	@param 	$format Boolean
	 *			- Indica se $param vai ser formatado ou não
	 *
	 * 	@return String
	 */
	public function getLinkStudies( $param, $format = false ){
		
		//	Verificando se PACS está ativo pelas configurações
		if( !$this->config['status'] ){
			return false;
		}
		//	Verificando se PACS está ativo devido tentativas
		if( !$this->pacs ){
			return false;
		}
		//	Formatando entradas
		if( $format ){
			$this->studyQuery['Query'] = $this->formatInput( $param );
		}else{
			$this->studyQuery['Query'] = $param;
		}
		
		log_message( 'info', $this->studyQuery['Query'] );
		
		//	Buscando Estudo
		$study = $this->getStudies( json_encode( $this->studyQuery ) );
		
		//	Retornou array vazio
		if( !$study[0] ){
			return false;
		}
		//	Retornando link
		return $this->getProtocol() . '://' . $this->getServer() . ':' . $this->getPort() . '/' . $this->viewerURI . '?study=' . $study[0];
	}
	
	/**
	 * 	Método para recuperar estudos DICOM
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@param  $query - Query para consulta  no pacs
	 *
	 *	@version 1.0 - 20 de fev de 2017 21:56:01
	 * 	@return array
	 */
	private function getStudies( string $query ){
		
		curl_setopt( $this->curl, CURLOPT_URL, $this->getServerURI() . '/tools/find' );
		curl_setopt( $this->curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $this->curl, CURLOPT_POST, 1 );
		curl_setopt( $this->curl, CURLOPT_POSTFIELDS, $query );
		curl_setopt( $this->curl, CURLOPT_TIMEOUT, $this->getTimeout() );
		
		if( $resp = curl_exec( $this->curl ) === false ){
			//	Setando PACS DOWN
			$this->pacs = false;
			$_SESSION['MSGB'] = array( 'd', 'PACS Inacessível! N&atilde;o foi poss&iacute;vel recuperar estudos. [' . htmlentities( curl_error( $this->curl ) ) .']' ) ;
		}
		return json_decode( $resp, true );
		
	}
	
	/**
	 * 	Destruct
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 20 de fev de 2017 21:56:01
	 * 	@return void
	 */
	public function __destruct(){
		//	Query CURL
		curl_close( $this->curl );
	}
	
}