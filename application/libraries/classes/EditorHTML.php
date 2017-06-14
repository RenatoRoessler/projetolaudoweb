<?php
/**	
 * 	Classe do Editor de laudos
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 12 de fev de 2017 17:10:55
 **/ 

class EditorHTML{
	
	/**	ID
	 * 	@name $id
	 *	@access private
	 */
	private $id;

	/**	Path usado para converções
	 * 	@name $path
	 *	@access private
	 */
	private $path = SYS_TRASH ;
	
	/**	Armazena conteudo raw
	 * 	@name $content
	 *	@access private
	 */
	private $content;
	
	/**	Tagsa permitidas
	 * 	@name $tags
	 *	@access private
	 */
	private $tags = '<h1><h2><h3><p><span><div><font><strong><i><b><em>';
	
	/**	Armazena cabeçalho
	 * 	@name $head
	 *	@access private
	 */
	private $head;
	
	/**	Armazena corpo
	 * 	@name $body
	 *	@access private
	 */
	private $body;
	
	/**	Parâmetros de formatacao
	 * 	@name $formats
	 *	@access private
	 */
	private $formats = array(
		'HTML' => array(
			'EXT' => 'html', // extenção
			'FMT' => 'xhtml', // formato para conversao
		),
		'RTF' => array(
			'EXT' => 'rtf', // extenção
			'FMT' => 'rtf', 
		),
	);
	
	/**	Contrutor 
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct( $id ) {
		$this->id = $id[0];
	}
	
	/*
	 * 	GETTERS AND SETTERS
	 * */
	public function getBody(){
		return $this->body;
	}
	public function getHead(){
		return $this->head;
	}
	public function getContent(){
		return $this->content;
	}
	
	/**
	 * 	Metodo para converter de RTF para HTML
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 12 de fev de 2017 17:25:02
	 * 	@param	$string string
	 * 		- string que sofrera conversão
	 */
	public function rtfToHtml( $string ){
	
		if( !$string ){
			return false;
		}
		//	Setando path
		$this->path .= $this->id;
		
		if( !$path = $this->conversor( $string, 'RTF', 'HTML' ) ){
			return false;
		}
		
		$this->content = file_get_contents( $path );
		
	}
	
	/**
	 * 	Metodo para converter de HTML para RTF
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 13 de fev de 2017 21:54:29
	 * 	@param	$string string
	 * 		- string que sofrera conversão
	 */
	public function htmlToRtf( $string ){
	
		if( !$string ){
			return false;
		}
		//	Setando path
		$this->path .= $this->id;
		
		$string = str_replace( 'data-mce-style=', '', $string );
		$string = str_replace( 'style=', 'style="', $string );
		$string = str_replace( ';>', ';">', $string );
		
		$string = "<html><head><style></style><body>" . $string . "</body></html>";
		
		if( !$path = $this->conversor( $string, 'HTML', 'RTF' ) ){
			return false;
		}
		
		$this->content = file_get_contents( $path );
		
	}
	
	/**
	 * 	Metodo de conversão
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 12 de fev de 2017 17:25:02
	 * 	@param	$string string
	 * 		- string que sofrera conversão
	 * 	@param	$formatIn string
	 * 		- formato de entrada, original da string
	 * 	@param	$formatOut string
	 * 		- formato de saida da string
	 * 	@param	$string string
	 */
	private function conversor( $string, $formatIn, $formatOut ){
	
		if( !$string || !$formatIn || !$formatOut ){
			return false;
		}
		
		//	Salvando conteudo do arquivo para conversão
		file_put_contents( $this->path . '.' . $this->formats[ strtoupper( $formatIn ) ]['EXT'] , $string );
		
		//	Comando para converter RTF para HTML
		//	Parametros: formato de saida | arquivo de saida | arquivo de entrada
		//criaLogMsg($this, 'sudo /usr/local/bin/unoconv.sh ' . $this->formats[ strtoupper( $formatOut ) ]['FMT'] . ' ' . $this->path . '.' . $this->formats[ strtoupper( $formatOut ) ]['EXT'] .  ' ' . $this->path . '.' . $this->formats[ strtoupper( $formatIn ) ]['EXT']);
		shell_exec( 'sudo /usr/local/bin/unoconv.sh ' . $this->formats[ strtoupper( $formatOut ) ]['FMT'] . ' ' . $this->path . '.' . $this->formats[ strtoupper( $formatOut ) ]['EXT'] .  ' ' . $this->path . '.' . $this->formats[ strtoupper( $formatIn ) ]['EXT'] );
		
		//	Retornado path da conversao
		return $this->path . '.' . $this->formats[ strtoupper( $formatOut ) ]['EXT'];
	}
	
	/**
	 * 	Metodo de ajuste da string html para ser exibida no editor
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 12 de fev de 2017 17:25:02
	 * 	@param	$string string
	 * 		- string que sofrera ajustes
	 */
	public function ajustaHTML( $string ){
	
		$string = ( $string == null ) ? $this->content: null; 
		
		if( !$string ){
			return false;
		}
		
		//	Iniciando DOM
		$dom = new DOMDocument ();
		$dom->loadHTML ( $string );
		$body = $style = "";
		
		//	Separando styles e body
		foreach ( $dom->getElementsByTagName ( "style" )->item ( 0 )->childNodes as $child ) {
			$style .= $dom->saveHTML ( $child );
		}
		foreach ( $dom->getElementsByTagName ( "body" )->item ( 0 )->childNodes as $child ) {
			$body .= $dom->saveHTML ( $child );
		}
		
		//	Justes
		$style = str_replace( 'font-size:12pt; font-family:DejaVu Serif;', '', $style );
		$style = str_replace( 'courier new', "Courier New", $style );

		$css_temp = $this->cssToArray( $style );
		
		foreach ( $css_temp as $k => $v ) {
			if( preg_match( '/^\./', $k ) ){
				$style_tmp = 'style="';
				foreach ( $v  as $kk => $vv) {
					$vv = str_replace( '!important', '', $vv );
					$style_tmp .= "$kk:$vv;";
				}
				$body = str_replace( 'class="'.substr( $k, 1 ), $style_tmp, $body );
			}
		}
		$this->head = $style;
		//$this->body = $body;
		$this->body = strip_tags( $body, $this->tags );
		
	}
	
	/**
	 * 	Ajusta html para impressão usando mpdf
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de fev de 2017 21:18:51
	 * 	@param	$css string
	 * 		- String CSS
	 */
	public function ajustaHTMLPrintOut( $string ){
		
		/*$string = str_replace( 
			'writing-mode: page; margin-left: 0.75in; margin-right: 0in; text-align: justify ! important; text-indent: -0.75in;', 
			'writing-mode: page; margin-left: 0in; margin-right: 0in; text-align: justify ! important; text-indent: -0.75in;', $string );
			//writing-mode: page; margin-left: 0.7866in; margin-right: 0in; text-align: justify ! important; text-indent: -0.7756in;*/
		/*$string = preg_replace(
			'/writing-mode: page; margin-left: 0\.[0-9]+in; margin-right: 0in; text-align: justify ! important; text-indent: -0/', 
			'writing-mode: page; margin-left: 0in; margin-right: 0in; text-align: justify ! important; text-indent: -0', 
			$string
		);*/
		
		//	Ajuste necessário para laudos e textos padrões que possuem indentação, convertidos do rtf para html
		//preg_match("/[\S.]*<[(p|div)].*text-indent: -0\.[0-9]+in;.*margin(-|left|right|):.* 0\.[0-9]+.*[(p|div)]>[\S.]*/", $string, $part1, PREG_OFFSET_CAPTURE );
		//preg_match("/[\S.]*<[(p|div)].*margin(-|left|right|):.* 0\.[0-9]+.*text-indent: -0\.[0-9]+in;.*[(p|div)]>[\S.]*/", $string, $part2, PREG_OFFSET_CAPTURE );
		
		//	Polegadas
		preg_match_all("/[\S.]*<(p|div).*margin(-left|):(\s|)(0in ){0,3}(\s|)0\.[1-9]+in{1,1};.*text-indent:(\s|)-0\.[1-9]+in;.*(p|div)>[\S.]*/", $string, $part1, PREG_OFFSET_CAPTURE );
		preg_match_all("/[\S.]*<(p|div).*text-indent:(\s|)-0\.[1-9]+in;.*margin(-left|):(\s|)(0in ){0,3}(\s|)0\.[1-9]+in{1,1};.*(p|div)>[\S.]*/", $string, $part2, PREG_OFFSET_CAPTURE );
		
		$part = array_merge( $part1[0], $part2[0] );
		
		//	Vendo se encontrou o item
		if( count( $part )){
			foreach ( $part as $k => $v ){
				preg_match( "/margin(-left|):((\s|)[0-9]+in){0,3}(\s|)0\.[0-9]+in;/i", $v[0], $preg, PREG_OFFSET_CAPTURE );
				foreach ( $preg as $kk => $vv ){
					//	Isso que temos que substituir
					if( preg_match( '/^margin.*;$/i' , $vv[0] ) ){
						$preg[$kk][0] = preg_replace( '/[1-9]/', '0', $vv[0] );
						$len = strlen( $vv[0] );
						$part[$k][0] = substr( $part[$k][0], 0, $vv[1] ) . $preg[$kk][0] . substr( $part[$k][0], $vv[1] + $len );
					}else{
						unset( $preg[$kk] );
					}
				}
				$len = strlen( $v[0] );
				$string = substr( $string, 0, $v[1] ) . $part[$k][0] . substr( $string, $v[1] + $len );
			}
		}
		return html_entity_decode( $string );
	}
	
	/**
	 * 	Ajusta html chars
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de fev de 2017 21:18:51
	 * 	@param	$css string
	 * 		- String CSS
	 */
	public function ajustaHTMLOut( $string ){
		
		$string = str_replace( '!aspa!', '"', $string );
		$string = str_replace( '&amp;quot;', "'", $string );
		//$string = str_replace( '&lt;class=', '&lt;table class=', $string );
		//$string = str_replace( '&lt;style=', '&lt;table style=', $string );
		//$string = str_replace( '&lt;width=', '&lt;table width=', $string );
		
		//$string = str_replace( '&amp;quot;', "'", $string );
		//$string = str_replace( '&amp;quotyy;', '"', $string );
		return html_entity_decode( $string );
	}
	
	/**
	 * 	Ajusta html chars
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de fev de 2017 21:18:51
	 * 	@param	$css string
	 * 		- String CSS
	 */
	public function ajustaHTMLTextoPadrao( $string ){
		
		$string = str_replace( '<p ', '<div ', $string );
		$string = str_replace( '</p>', '</div>', $string );
		return $string;
	}
	
	/**
	 * 	Ajusta html chars para inserir no banco
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de fev de 2017 21:18:51
	 * 	@param	$css string
	 * 		- String CSS
	 */
	public function ajustaHTMLIn( $string ){
		
		$string = str_replace( '&lt;style=', '&lt;table style=', $string );
		$string = str_replace( '&lt;width=&amp;quotyy;', '&lt;table width=&amp;quotyy;', $string );
		$string = str_replace( '&lt;div&gt;&lt;class=&amp;quotyy;mce-item-table&amp;quotyy;', ';&lt;table ', $string );
		return $string;
		
	}
	
	/**
	 * 	Retorna em array CSS 
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 12 de fev de 2017 17:25:02
	 * 	@param	$css string
	 * 		- String CSS
	 */
	private function cssToArray( $css ){
	
		if( !$css ){
			return false;
		}
		
		$cssArray = array ();
		
		preg_match_all ( '/(.+?)\s?\{\s?(.+?)\s?\}/', $css, $matches );
		foreach ( $matches [0] as $i => $original ){
			foreach ( explode ( ';', $matches [2] [$i] ) as $attr ){
				if (strlen ( trim ( $attr ) ) > 0) {
					list ( $name, $value ) = explode ( ':', $attr );
					$cssArray [trim ( $matches [1] [$i] )] [trim ( $name )] = trim ( $value );
				}
			}
		}
		return $cssArray;
	}
}
?>