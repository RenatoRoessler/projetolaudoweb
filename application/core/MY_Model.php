<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Classe do Main para Models
 * 
 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
 *	@version 1.0 - 27 de mar de 2017 12:42:54
 **/ 
class MY_Model extends CI_Model{
	
	/**	Utilizado para paginação
	 * 	@name $paginar
	 *	@access	public
	 */
	public $paginar = null;

	/**	Página atual
	 * 	@name $pagina
	 *	@access	public
	 */
	public $pagina = 0;

	/**	Total de páginas
	 * 	@name $total
	 *	@access	public
	 */
	public $total = 0;
	
	/**	Define limite de registros para paginação
	 * 	@name $limite
	 *	@access	public
	 */
	public $limite = 10;
	
	/**	Numero de links para paginacao
	 * 	@name $links
	 *	@access public
	 */
	public $links = 4;
	
	/**	Recebe dados resultantes da pesquisa
	 * 	@name $dados
	 *	@access	public
	 */
	public $dados;
	
	
	/**	Contrutor do model
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 17:43:57
	 **/
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * 	Metodo que prepara query para execução
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 28 de mar de 2017 17:07:08
	 *	@param String $query - Stringo com a query	
	 *
	 * 	@return void
	 */
	public function query( $query ){
		
		if( isVal( $this->paginar ) && preg_match( "/select/i", $query ) ){
				
			$qtmp = explode('{{}}', $query );
			$queryCount = "select count(*) as QTE_LINHAS_SQLDEV " . $qtmp[1] ;
				
			/* executando query que retorna quantidade de itens */
			$resultado = $this->db->query( $queryCount );
				
			//	Verificando se deu erro
			if( !$resultado ){
				// Gerando Log
				log_message('error', $this->db->error());
				return false;
			}else{
				//	Resetando n�mero da p�gina se controle � diferente
				$ctrl = $this->uri->segment(1);
				if( $this->session->controle != $ctrl ){
					$this->session->set_userdata('controle',$ctrl);
					$this->session->set_userdata('pagina',0);
				}
				//	Adicionando limite
				//	Verificando se p�gina foi passada
				$this->pagina = returnVariable( $this->input->post('pagina'), $this->session->pagina, 1 );
				//	Query para paginar corretamente
				$query =
					"SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									$query
								) a
							WHERE rownum < (($this->pagina * $this->limite) + 1 )
						)
					WHERE r__ >= ((($this->pagina-1) * $this->limite) + 1)";
				$row = $resultado->row();
				$this->total = returnVariable( $row->QTE_LINHAS_SQLDEV, 0 );
			}
				
			//	Excluido marcacoes da páginação
			$query = str_replace( '{{}}', '', $query );
		}
		
		//	Verificando se paginacao existe e se a query eh um select
		if( isVal( $this->paginar ) && preg_match( "/select/i", $query ) ){
			$this->session->set_userdata('pagina', $this->pagina);
		}
		
		log_message('debug', $query);
		
		/* Executando a query */
		return $this->db->query( $query );
	}
	
	/**
	 * 	Metodo para listar usuarios e instituições relacionadas
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 13 de fev de 2017 20:04:49
	 * 	
	 * 	@param	$inst
	 * 		- Código da instituíção
	 * 	@param	$usuario
	 * 		- Código do usuario
	 * 
	 *	@return void
	 */
	public function listarUsuarioInstituicao( $inst = null, $usuario = null ){
		
		if( !$inst && !$usuario ){
			return false;
		}
		try {
			$usuario = ( $usuario ) ? " and u.apeluser = '$usuario' " : "" ;
			$inst = ( $inst ) ? " and i.codinst = $inst " : "" ;
			
			//	Query para pegar dados
			$dados = $this->db->query(
				"select		*
				from		Usuario u 
							inner join Userinst ui on ( ui.apeluser = u.apeluser $usuario )
							inner join Instituicao i on ( i.codinst = ui.codinst $inst )
				order by	i.fantasia" 
			);
			$this->dados = $dados->result_array();
		} catch (Exception $e) {
			log_message('error', $this->db->error() );
		}
	}
	
	/**
	 * 	Metodo para listar entidade
	 *
	 *	@author Douglas Comim - 01.07.2016 14:34
	 *	@version 0.1
	 *
	 * 	@param	$tabela		String	Nome da Tabela
	 * 	@param	$param		Array 	Array com parametros diversos
	 * 	@param	$orderby	String	Order by por
	 * 	@param	$field		Array	Campos desejados
	 *
	 * 	@return array com dados do grupo
	 */
	public function listarEntidade( $tabela, $where = null, $orderby = null ){
	
		try {
			
			$w = '';
			foreach ( $where as $k => $v ){
				$w .= ' and ' . $this->db->escape_str( implode( ' ', $v ) );
			}
			$order = ( $orderby ) ? 'order by ' . $orderby : null;
			
			$dados = $this->db->query(
				"select		*
				from		$tabela
				where		1=1
							$w 
				$order "
			);
			//	Retornando dados
			$this->dados = $dados->result_array();
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error() );
		}
	}
	
	/**
	 * 	Metodo para listar setores
	 *
	 *	@author Douglas Comim - 01.07.2016 14:34
	 *	@version 0.1
	 *
	 * 	@return array com dados do setores
	 */
	public function listarSetor( $cod = null ){
		
		try {
			
			$cod = ( $cod ) ? " and s.codsetor = $cod " : "";
			
			$dados = $this->db->query(
				"select s.codsetor, s.descricao
				 from 	setor s
				where 	s.codsetor in (
							select 	e.codsetor
					        from 	planogrp p,  exame e
					        where  	p.codgex   = e.codgex
						)
						$cod
				order by s.descricao"
			);
			//	Retornando dados
			$this->dados = $dados->result_array();
			
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error() );
		}
		
	}
	
	/**
	 * 	Metodo para listar entidade
	 *
	 *	@author Douglas Comim - 01.07.2016 14:34
	 *	@version 0.1
	 *
	 * 	@param	$tabela		String	Nome da Tabela
	 * 	@param	$param		Array 	Array com parametros diversos
	 * 	@param	$orderby	String	Order by por
	 * 	@param	$field		Array	Campos desejados
	 * 
	 * 	@return array com dados do grupo
	 */
	public function listarInfoFooter( $cod){
	
		try {
	
			/* Pega info */
			$this->dados = $this->db->query(
				"select  	conv.nome as INFOCONVENIO, ge.descricao as INFOGRUPO,
					        so.nome as INFOSOLICITANTE,
					        al.digitadora as INFODIGITADOR, to_char( al.datadig, 'DD/MM/YYYY HH24:MI' ) as INFODIGITADOEM, 
					        al.alterlaudo as INFOALTERADOPOR,
					        al.userenvelop as INFOENVELOPADOPOR, to_char( al.dtenvelope, 'DD/MM/YYYY HH24:MI' ) as INFOENVELOPADOEM,
					        al.apeldigitar as INFORECEBEUPARADIGITAR, to_char( al.dtdigitar, 'DD/MM/YYYY HH24:MI' ) as INFORECEBEUPARADIGITAREM,
					        al.entregue as INFOENTREGUEPOR, to_char( al.dataentrega, 'DD/MM/YYYY HH24:MI' ) as INFOENTREGUEEM,
					        con.atendente as INFOATENDIDOPOR,
					        al.user_prontoparaentrega as INFOPRONTOPARAENTREGARPOR,
					        e.nome as INFOEXAME,
					        rea.nome as INFOREALIZADOPOR,
					        al.user_liberou as INFOLIBERADOPOR,
					        ag.descricao as INFOAGENDA, p.nome as INFOPACIENTE, 
					        con.codcst as INFOCONSULTA,
					        ass.nome as INFOASSINADOPOR,  to_char( al.dtassinado, 'DD/MM/YYYY HH24:MI' ) as INFOASSINADOEM,
					        rev.nome as INFOREVISADOPOR,  to_char( al.dtrevisalaudo, 'DD/MM/YYYY HH24:MI' ) as INFOREVISADOEM,
					        al.obs as observacao
				from 		atd_laudo al
					        inner join atdpedexa ped on (al.codlaudo = ped.codlaudo
								and al.codlaudo = $cod[3]
							)
					        inner join atdpedido pedido on (ped.codatdped = pedido.codatdped)
					        inner join atendimento a on (pedido.codatdo = a.codatdo)
					        inner join consulta con    on (a.codatdo = con.codatdo
								and con.cbrcst is null
							)
					        inner join convenio conv on (con.codconv = conv.codconv)
					        inner join atdsin        on (al.codatdsin = atdsin.codatdsin)
					        inner join exame e       on (atdsin.codexa = e.codexa)
					        inner join grpexame ge   on ( ge.codgex = e.codgex )
					        inner join solicitante so on ( so.codsol = con.codsol )
					        inner join paciente p on ( p.prontuario = con.prontuario )
					        left join realizante rea on ( rea.codrea = al.codrea )
					        left join setor ag on ( ag.codsetor = ped.codsetor )
					        left join realizante ass on ( ass.codrea = al.assinado )
					        left join realizante rev on ( rev.codrea = al.revisalaudo )"
			);
	
			$this->dados = $this->dados->result_array();
	
		} catch (Exception $e) {
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Update em registros de uma talea
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 29 de mar de 2017 22:43:40
	 * 	@param	$tabela	String
	 * 			- Nome da Tabela para ipdate
	 * 	@param 	$dados	array
	 * 			- Dados Ex.: array( 'campo' => 'dado' );
	 * 	@param 	$where	array
	 * 			- Parametros ex.: array( array( "campo", "=", "dado" ) );
	 * 	@param	$admin Boolean
	 * 			- Flag que diz se teste de permiss�o sobre usu�rio admin deve ser realizada
	 * 	@return void
	 */
	public function updateCLOB( $tabela, $campo, $valor, $where ){
	
		//	Tentando execu��o
		try {
			//	Formando query sql de inser��o
			$sql =
				"update 	$tabela
				set 		$campo = EMPTY_CLOB() ";
			$sql2 = " returning $campo into :temp";
				
			$w = " where";
			// La�o para montar Update
			foreach ( $where as $k => $v ){
				//$w .= " $v[0] $v[1] " . isNull( $v[2] ) ." and";
				if( strtolower($v[1]) == "in" ){
					$w .= " {$v[0]} {$v[1]} ". $v[2] ." and";
				}else{
					$w .= " {$v[0]} {$v[1]} ". $v[2] ." and";
				}
			}
			$w = substr( $w, 0, -4 );
	
			//	SQL de update completo
			$sql = $sql . $w . $sql2;
				
			$query = oci_parse( $this->db->conn_id, $sql );
				
			$lob = oci_new_descriptor( $this->db->conn_id, OCI_D_LOB );
			oci_bind_by_name( $query, ':temp', $lob, -1, OCI_B_CLOB);
				
			oci_execute( $query, OCI_DEFAULT );
			$lob->save( $valor );
			
			log_message('debug', $sql);
			return $lob;
	
		} catch ( Exception $e ) {
			//	Criando log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Divide a que string clob caso necessário
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 26 de mai de 2017 22:33:25
	 * 	
	 * 	@param	$string	String - String para ser validada
	 * 	
	 * 	@return String
	 */
	public function prepareCLOB( $string ){
		
		$tam = 3999;
		$len = strlen($string);
		
		if( $len > $tam ){
			$parts = ceil( $len / $tam );
			
			$ctrl = 0;
			$tstring = '';
			for( $i=0; $i < $parts; $i++ ){
				$tstring .= "to_clob('" . substr($string, $ctrl, $tam )."') || ";
				$ctrl += $tam;
			}
			log_message('debug', "$parts $tam $len $ctrl" );
			$string = substr( $tstring, 0, -4 );
		}else{
			$string = "'$string'";
		}
		return "$string";
	}
}