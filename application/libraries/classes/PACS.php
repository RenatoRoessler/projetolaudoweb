<?php
/**	
 * 	Classe PACS
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 20 de fev de 2017 21:50:48
 **/ 
class PACS{
	
	/**	Configuração do Pacs
	 * 	@name $config
	 *	@access	private
	 */
	protected $config = array();
	
	/**	Status PACS, salva tentativa de acesso ao PACS
	 * 	@name $pacs
	 *	@access	public
	 */
	public $pacs = true;
	
	/*  GETTERS AND SETTERS */
	public function getServer(){
		return $this->config['host'];
	}
	public function getProtocol(){
		return $this->config['protocol'];
	}
	public function getPort(){
		return $this->config['port'];
	}
	public function getTimeout(){
		return $this->config['timeout'];
	}
	public function getServerURI(){
		return 
			$this->config['protocol'] . '://' . 
			$this->config['host'] . ':' . 
			$this->config['port'];
	}
}