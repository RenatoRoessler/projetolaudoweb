<?php
/**	
 * 	Classe Arquivo
 * 
 *	@author Douglas Comim
 *	@version 0.1 - 09/09/2015 09:24:54
 **/ 
class Arquivo{

	/** Link do arquivo
	 * @name $link
	 * @access private
	 * */
	private $link;
	
	/** Path para o arquivo
	 * @name $path
	 * @access private
	 * */
	private $path;
	
	/** Parametro para abertura do arquivo
	 * @name $tipo
	 * @access public
	 * */
	public $tipo = "w+";
	
	/* getters and setters */
	
	public function setPath( $p ){
		$this->path = $p;
	}
	public function getPath(){
		return $this->path;
	}
	
	public function getLink(){
		return $this->link;
	}
	
	/**
	 * 	M�todo para manipulacao de arquivos
	 * 
	 *	@author Douglas Comim - 09/09/2015 15:54:15
	 *	@version 0.1
	 * 	@return void
	 */
	public function abre(){
		//	Tentando abrir arquivo
		try {
			//	Tentando abrir arquivo
			$this->link = fopen( $this->path, $this->tipo );
		} catch (Exception $e) {
			log_message('error', 'FILE: Erro ao tentar abrir arquivo.' );
		}
	}
	
	/**
	 * 	M�todo para fechar arquivo
	 *
	 *	@author Douglas Comim - 09/09/2015 15:54:15
	 *	@version 0.1
	 * 	@return void
	 */
	public function fecha(){
	
		//	Verificando arquivo
		if( $this->link ){
			try {
				//	Tentando abrir arquivo
				fclose( $this->link );
			} catch (Exception $e) {
				log_message('error', 'FILE: Erro ao tentar fechar arquivo.' );
			}
		}else{
			log_message('error', 'FILE: Link para arquivo inválido.' );
		}
	}
	
	/**
	 * 	M�todo para escrita no arquivo
	 *
	 *	@author Douglas Comim - 09/09/2015 15:54:15
	 *	@version 0.1
	 * 	@return void
	 */
	public function escreve( $valor ){
	
		//	Verificando arquivo
		try {
			//	Escrita simplificada no arquivo
			fwrite( $this->link, utf8_encode( $valor ) );
		} catch (Exception $e) {
			log_message('error', 'FILE: Erro ao tentar escrever arquivo.' );
		}
	}
	
	/**
	 * 	Método para upload de arquivo
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 21 de mar de 2017 23:05:30
	 * 	@return void
	 */
	public function upload( &$file, $destino ){
	
		try {
			/* Movendo arquivo */
			if( !move_uploaded_file( $file['tmp_name'], $destino ) ) {
				return false;
			}
			return true;
			
		} catch (Exception $e) {
			log_message('error', 'FILE: Erro ao tentar mover arquivo.' );
		}
	}
	
	/**
	 * 	Método contar arquivos usando nome do niretorio
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 21 de mar de 2017 23:05:30
	 * 	@return void
	 */
	public function contaArquivoDiretorio( $filtro, $diretorio ){
		
		if( !$filtro || !$diretorio ){
			return false;
		}
		return (int) shell_exec( 'find ' . $diretorio . ' -name "' . $filtro . '" | wc -l' );
		
	}
	
	/**
	 * 	Método contar arquivos usando nome do niretorio
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 21 de mar de 2017 23:05:30
	 * 	@return void
	 */
	public function parteNomeArquivoDiretorio( $filtro, $diretorio, $separador, $posicao ){
		
		if( !$filtro || !$diretorio || !$separador || !$posicao ){
			return false;
		}
		//return shell_exec( 'find ' . $diretorio . ' -name "' . $filtro . '" | tail -n 1 | cut -d' . $separador . ' -f' . $posicao );
		return shell_exec( 'ls ' . $diretorio . ' -A1 |grep -e "' . $filtro . '" | tail -n 1 | cut -d' . $separador . ' -f' . $posicao );
		
	}
	
	/**
	 * 	Varre pastas pegando arquivos que nelas estao
	 *
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br>
	 *	@version 0.1.0 - 16 de ago de 2016 11:22:24
	 *	
	 *	@param String $folder
	 *	@param Array $files
	 * 	@return Array
	 */
	public function searchFile( $folder, &$files, $extensions = null, $recursivo = false ){
	
		//	Varrendo nova pasta para pegar todos os arquivos
		$dir = opendir( $folder );
		if ( $dir ) {
			while ( $list = readdir ( $dir ) ) {
				if( ! in_array ( $list, array ( ".", "..", ".htaccess" ) ) ) {
					if( is_dir( $folder . "/" . $list ) ){
						if( $recursivo ){
							$this->searchFile( $folder . "/" . $list, $files, $extensions, $recursivo );
						}
					}else{
						//	Verifica se o arquivo tem a extensao desejada ou se nao foram informados parametros de extensao
						$extension = substr( $list, -3 );
						if( in_array( $extension, $extensions ) || !$extensions ){
							$novoArquivo = md5( $_SESSION["idExterno"] . $list . rand( 1, 1000 ) . rand( 1, 1000 ) ) . "." .$extension ;
							rename( $folder . "/" . $list , $folder . "/" . $novoArquivo );
							$files[] = array(
								"ID" => crc32( $novoArquivo ),
								"Name" => $list,
								"NameReal" => $novoArquivo,
								"Path" => pegaCaminho( $folder ),
								"Size" => filesize( $folder . "/" . $novoArquivo ),
								"Mime" => mime_content_type( $folder . "/" . $novoArquivo )
							);
						}
					}
				}
			}
			closedir($dir);
			return true;
		}
		closedir($dir);
		return false;
	}
	
	/**
	 * 	M�todo para descompatar um arquivo 
	 *
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br>
	 *	@version 0.1.0 - 16 de ago de 2016 10:52:52
	 *	
	 *	@param String $path
	 * 	@return Json
	 */
	public function unzip( $path, $file ){
	
		$json = array(
			"Status" => false,
			"Message" => "Erro fatality"
		);
		//	Tentando abrir arquivo zip
		try {
			if( file_exists( $path . $file ) ){
				$zip = new ZipArchive ();
				
				if ($zip->open ( $path . $file ) === TRUE) {
					
					//	Nova pasta onde ficarao os arquivos
					$folder = $path . substr( $file, 0, -4 );
					
					$zip->extractTo ( $folder );
					$zip->close();

					$json['Status'] = true;
					$json['Message'] = utf8_encode( "Arquivo descompactado com sucesso." );
					$json['Content'] = $folder;
					
					return $json;
				}else{
					return $json['Message'] = utf8_encode( "FILE: Não foi possível abrir o arquivo $file." );
				}
			}else{
				return $json['Message'] = utf8_encode( "FILE: Arquivo $file não foi encontrado." );
			}
			
		} catch ( Exception $e ) {
			criaLog( "FILE: Erro ao tentar descompactar arquivo.", $e, $this );
		}
	}
	
}
?>