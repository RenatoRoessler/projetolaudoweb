<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe do Exportador
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 29 de mar de 2017 22:23:44
 **/ 

class Exportador{

	/**	ID
	 * 	@name $id
	 *	@access private
	 */
	private $id;
	
	/** Recebe dados
	 * @name $dados
	 * @access private
	 * */
	private $dados;
	
	/** Orientacao do documento de export
	 * @name $orientacao
	 * @access private
	 * L Landscape, P portrait
	 * */
	private $orientacao = "P";
	
	/** Tipo do export
	 * @name $tipo
	 * @access private
	 * */
	private $tipo = "PDF";
	
	/** Data execucao relat�rio
	 * @name $dataExecucao
	 * @access private
	 * */
	private $dataExecucao;
	
	/** Include com header do report
	 * @name $header
	 * @access private
	 * */
	private $header;
	
	/** Include com footer do report
	 * @name $footer
	 * @access private
	 * */
	private $footer;
	
	/** AutoPrint
	 * @name $autoprint
	 * @access public
	 * */
	public $autoPrint = false;
	
	/** JustContent
	 * @name $justContent
	 * @access public
	 * */
	public $justContent = false;
	
	/** CSS Default
	 * @name $CSS
	 * @access private
	 * */
	private $CSS;
	
	/** Download automatico ?
	 * 	Setado como verdadeiro, for�a download autom�tico do arquivo
	 * 	Setado como falso, emite dialogo com link para download	
	 * 
	 * @name $download
	 * @access public
	 * */
	public $download = 1;
	
	/**	Contrutor
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct( $id ) {
		$this->id = $id[0];
	}
	
	/**
	 * 	Metodo para setar CSS Usado
	 *
	 *	@author Douglas Comim - 02/10/2015 09:01:00
	 *	@version 0.1
	 */
	private function CSS( $css ){
	
		//	Parametrizando Header,Footer do PDF
		$this->CSS = file_get_contents( FCPATH . "assets/css/" . $css );
	}
	
	/**
	 * 	Metodo para montar Header dos laudos
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 1 de mar de 2017 23:07:04
	 */
	private function headerLAUDO( $dados ){
		
		//	Parametrizando Header,Footer do PDF
		$this->header = file_get_contents( VIEWPATH . "_includes/export/headerLAUDO.php" );
		
		$this->header = str_replace("{PRONTUARIO}", $dados['PRONTUARIO'], $this->header );
		$this->header = str_replace("{DATA}", $dados['DATAATENDIMENTO'], $this->header );
		$this->header = str_replace("{PACIENTE}", htmlentities($dados['PACIENTE']), $this->header );
		$this->header = str_replace("{EXAME}", htmlentities($dados['EXAME']), $this->header );
		$this->header = str_replace("{SOLICITANTE}", htmlentities($dados['SOLICITANTE']), $this->header );
		$this->header = str_replace("{CONVENIO}", htmlentities($dados['CONVENIO']), $this->header );
		$this->header = str_replace("{DATADIGITACAO}", htmlentities($dados['DATADIGITACAO']), $this->header );
		$this->header = str_replace("{EXECUTANTE}", htmlentities($dados['REALIZANTE']), $this->header );
		$this->header = str_replace("{TITULO}", htmlentities($dados['TITULO']), $this->header );
		
	}
	
	/**
	 * 	Metodo para montar footer dos laudos
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 1 de mar de 2017 23:07:48
	 */
	private function footerLAUDO( $dados ){
		
		//	Parametrizando Header,Footer do PDF
		//	Caso laudo esteja revisado o nome do revisor deve aparecer
		if( $dados['FM_REVISADO'] == 'S' && $dados['CODREA'] != $dados['CODREV'] ){
			$this->footer = file_get_contents( VIEWPATH . '_includes/export/footerLAUDO2.php' );
			$this->footer = str_replace('{REVISOR}', htmlentities( $dados['NOMEREVISOR'] ), $this->footer );
			$this->footer = str_replace('{CRMREVISOR}', $dados['CONSELHOREV'] . ' - ' . $dados['REGISTROREVISOR'], $this->footer );
		}else{
			$this->footer = file_get_contents( VIEWPATH . '_includes/export/footerLAUDO.php' );
		}
		
		$this->footer = str_replace('{DIGITADOR}', $dados['DIGITADOR'], $this->footer );
		$this->footer = str_replace('{ALTERLAUDO}', $dados['ALTERLAUDO'], $this->footer );
		$this->footer = str_replace('{DATADIGITACAO}', $dados['DATADIGITACAO'], $this->footer );
		$this->footer = str_replace('{MEDICO}', htmlentities( $dados['REALIZANTE'] ), $this->footer );
		$this->footer = str_replace('{CRM}', $dados['CONSELHO'] . ' - ' . $dados['REGISTRO'], $this->footer );
		
		// Cuidando das assinaturas
		if( !$dados['ASSINATURA_IMAGEM'] ){
			$this->footer = str_replace('{ASSINATURA}', '', $this->footer );
			$this->footer = str_replace('{REVISORASSIN}', '', $this->footer );
			return true;
		}
		
		// Verificando assinatura do realizante
		if( $dados['ASSINATURA'] && $dados['FM_ASSINADO'] ){
			$imgAssRea = $this->getAssinaturaFromBlob( $dados['ASSINATURA']->load(), $dados['CODREA'] );
			$this->footer = str_replace('{ASSINATURA}', $imgAssRea, $this->footer );
		}else{
			$this->footer = str_replace('{ASSINATURA}', '', $this->footer );
		}

		if( $dados['ASSINATURAREVISOR'] && $dados['FM_REVISADO'] ){
			$imgAssRev = $this->getAssinaturaFromBlob( $dados['ASSINATURAREVISOR']->load(), $dados['CODREV'] );
			$this->footer = str_replace('{REVISORASSIN}', $imgAssRev, $this->footer );
		}else{
			$this->footer = str_replace('{REVISORASSIN}', '', $this->footer );
		}
		
	}
	
	/**
	 * 	Metodo para exportar relat�rios em PDF
	 *
	 *	@author Douglas Comim - 02/10/2015 09:01:00
	 *	@version 0.1
	 */
	public function PDFLaudo( $dados ){

		$this->dataExecucao = date( "d/m/Y H:i:s" );
		
		$this->headerLaudo( $dados );
		$this->footerLaudo( $dados );
		
		//require_once ( SYS_LIB . "php/mpdf60/mpdf.php" );
		require_once ( FCPATH . "assets/php/mpdf61/autoload.php" );
		
		$mpdf = new mPDF();
		$mpdf->setAutoTopMargin = 'stretch';
		$mpdf->showImageErrors = true;
		
		$mpdf->SetHTMLHeader( utf8_encode( $this->header ) );
		$mpdf->SetHTMLFooter( utf8_encode( $this->footer ) );
		
		//	Definição da Página
		$mpdf->AddPage($this->orientacao, '', '', '', '', 40, 20, 50, 50, 35, 15);
		
		$this->CSS( "sys-laudo-export.css" );
		$mpdf->WriteHTML( $this->CSS, 1 );
		
		$mpdf->WriteHTML( $dados['LAUDO'], 2 );
		
		//	Cuspindo arquivo
		$mpdf->Output();
	}
	
	/**
	 * 	Metodo para converter assinatura e retornar valor
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 7 de mar de 2017 22:55:14
	 */
	public function getAssinaturaFromBlob( $assinatura, $partNome = null, $ext = 'jpg', $tag = true ){
	
		if( !$assinatura || $assinatura == '' ){
			log_message('error', 'Assinatura inválida');
			return '';
		}
				
		$image = new Imagick();
		$image->readimageblob( $assinatura );
		
		$name = md5( $partNome . $this->id ) . '.' . 'jpg';
		
		file_put_contents( SYS_TRASH . $name , $image->getimageblob() );
		
		//	TAG HTML IMG
		if( $tag ){
			return "<img src='" . pegaCaminho( SYS_TRASH ) . "$name' class='tbl-signature' />";
		}
		return SYS_SITE . "/" . pegaCaminho( SYS_TRASH ) . "$name";
	}
}
