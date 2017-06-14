<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Modelo Fatura
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:02:35
 **/ 
class EditorModel extends MY_Model {

	/**	Contrutor do model
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Metodo buscando informações da tela de digitação de laudos
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function digitar( $cod ) {
	
		try {
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select    	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
				            p.nome as paciente,
				            e.codexa,
				            e.nome as exame,
							al.codrea as codrea, 
							al.revisalaudo as codrev, 
							r.nome as realizante,
							s.nome as solicitante,
							al.titulo,
							al.laudoh as laudoh,
							al.laudor as laudor,
							al.codlaudo,
				            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
				            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
				from    	atd_laudo al
					        inner join atdpedexa ped on (al.codlaudo = ped.codlaudo)
					        inner join atdpedido pedido on (ped.codatdped = pedido.codatdped)
					        inner join atendimento a on (pedido.codatdo = a.codatdo)
					        inner join consulta c on (a.codatdo = c.codatdo)
					        inner join paciente p on (c.prontuario = p.prontuario)
					        left join cm_recurso cr on (ped.codrecurso = cr.codrecurso)
					        inner join atdsin on (ped.codatdsin = atdsin.codatdsin)
					        inner join exame e on (atdsin.codexa = e.codexa)
					        left join realizante r on (al.codrea = r.codrea)
					        inner join convenio cv on (c.codconv = cv.codconv)
					        left join realizante reaAssinou on (al.assinado = reaAssinou.codrea)
					        inner join Solicitante S on (c.codsol =  S.codsol )
					        inner join grpexame g on (e.codgex =  g.codgex )
					        left  join realizante rev on (al.revisalaudo =  rev.codrea)
					        inner join plano pl on (c.codplano = pl.codplano)
					        inner  join instituicao i on ( c.codinst = i.codinst)
					        
					where 	al.codlaudo = $cod[3] 
							and c.cbrcst is null"
			);
			
			$this->dados = $this->dados->result_array();
			
			//	Retornando dados
			if( $this->dados[0]['LAUDOH'] ){
				$this->dados[0]['LAUDOH'] = $this->dados[0]['LAUDOH']->load();
			}
			if( $this->dados[0]['LAUDOR'] ){
				$this->dados[0]['LAUDOR'] = $this->dados[0]['LAUDOR']->load();
			}
			$this->dados = $this->dados[0];
			
			if( $this->dados['CODLAUDO'] == $cod[3] ){
				return true;
			}
			return false;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo buscando informações da tela de revisão de laudos
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function revisar( $cod) {
	
		try {
			
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select    	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento,
							p.nome as paciente,
							e.codexa,
							e.nome as exame,
							al.codrea as codrea,
							al.revisalaudo as codrev,
							r.nome as realizante,
							s.nome as solicitante,
							al.titulo,
							al.laudoh as laudoh,
							al.laudor as laudor,
							al.codlaudo,
							al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO,
							al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
				from    	atd_laudo al
							inner join atdpedexa ped on (al.codlaudo = ped.codlaudo)
							inner join atdpedido pedido on (ped.codatdped = pedido.codatdped)
							inner join atendimento a on (pedido.codatdo = a.codatdo)
							inner join consulta c on (a.codatdo = c.codatdo)
							inner join paciente p on (c.prontuario = p.prontuario)
							left join cm_recurso cr on (ped.codrecurso = cr.codrecurso)
							inner join atdsin on (ped.codatdsin = atdsin.codatdsin)
							inner join exame e on (atdsin.codexa = e.codexa)
							left join realizante r on (al.codrea = r.codrea)
							inner join convenio cv on (c.codconv = cv.codconv)
							left join realizante reaAssinou on (al.assinado = reaAssinou.codrea)
							inner join Solicitante S on (c.codsol =  S.codsol )
							inner join grpexame g on (e.codgex =  g.codgex )
							left  join realizante rev on (al.revisalaudo =  rev.codrea)
							inner join plano pl on (c.codplano = pl.codplano)
							inner  join instituicao i on ( c.codinst = i.codinst)
							
				where 		al.codlaudo = $cod[3]
							and c.cbrcst is null"
			);
			
			$this->dados = $this->dados->result_array();
			
			//	Retornando dados
			if( $this->dados[0]['LAUDOH'] ){
				$this->dados[0]['LAUDOH'] = $this->dados[0]['LAUDOH']->load();
			}
			if( $this->dados[0]['LAUDOR'] ){
				$this->dados[0]['LAUDOR'] = $this->dados[0]['LAUDOR']->load();
			}
			$this->dados = $this->dados[0];
			
			if( $this->dados['CODLAUDO'] == $cod[3] ){
				return true;
			}
			return false;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Método se laudo possue ditado gravado
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 22 de mar de 2017 21:21:59
	 * 	@return void
	 */
	public function verificaDitado( $cod ){
	
		try {
			
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select    	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento,
							p.nome as paciente,
							e.codexa,
							e.nome as exame,
							al.codrea as codrea,
							al.revisalaudo as codrev,
							r.nome as realizante,
							s.nome as solicitante,
							al.titulo,
							al.laudoh as laudoh,
							al.laudor as laudor,
							al.codlaudo,
							al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO,
							al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
				from    	atd_laudo al
							inner join atdpedexa ped on (al.codlaudo = ped.codlaudo)
							inner join atdpedido pedido on (ped.codatdped = pedido.codatdped)
							inner join atendimento a on (pedido.codatdo = a.codatdo)
							inner join consulta c on (a.codatdo = c.codatdo)
							inner join paciente p on (c.prontuario = p.prontuario)
							left join cm_recurso cr on (ped.codrecurso = cr.codrecurso)
							inner join atdsin on (ped.codatdsin = atdsin.codatdsin)
							inner join exame e on (atdsin.codexa = e.codexa)
							left join realizante r on (al.codrea = r.codrea)
							inner join convenio cv on (c.codconv = cv.codconv)
							left join realizante reaAssinou on (al.assinado = reaAssinou.codrea)
							inner join Solicitante S on (c.codsol =  S.codsol )
							inner join grpexame g on (e.codgex =  g.codgex )
							left  join realizante rev on (al.revisalaudo =  rev.codrea)
							inner join plano pl on (c.codplano = pl.codplano)
							inner  join instituicao i on ( c.codinst = i.codinst)
				where 		al.codlaudo = $cod[3]
							and c.cbrcst is null"
			);
			
			$this->dados = $this->dados->result_array();
			$this->dados = $this->dados[0];
			
			if( $this->dados['CODLAUDO'] == $cod[3] ){
				return true;
			}
			return false;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Método seta não ditado
	 *
	 *	@author Douglas Comim <douglas.comim@gmail.com>
	 *	@version 1.0 - 24 de mar de 2017 21:03:41
	 * 	@return void
	 */
	public function removeDitado( $cod ){
	
		try {
			
			$this->db->trans_start();
			//	Query para pegar dados dos arquivos
			$this->db->query(
				"update		atd_laudo
				 set		fm_ditado = 'N'
				where 		codlaudo = $cod[3]"
			);
			$this->db->trans_complete();
				
			if( $this->db->trans_status() === false ){
				return false;
			}
			return true;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo salvando informação do laudo
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function salvar( $cod, $post ) {
	
		try {
			
			$this->db->trans_begin();
			/*
			//	Copiando laudo para tabela de modificação
			$this->db->query(
				"insert into reclaudo 
				       	( codcst, nroseq, codrea, laudor, datadig, datahora, digitadora, alterlaudo, apagalaudo, titulo )
				select 	ce.codcst, ce.nroseq, ce.codrea, ce.laudoh, ce.datadig, 
				       	(SELECT SYSDATE FROM DUAL), ce.digitadora, 
						'" . $this->session->idUsuario . "', null, ce.titulo
				from   	cstexame ce
				where  	ce.codcst = $cst[3]
						and ce.nroseq = $cst[4]
						and ce.codexa = $cst[5] "
			);
				
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}*/
			
			//	Update nas informações do laudo
			$param = 
				"fm_digitado = 'S',";
			
			if( $this->session->realizante ){
				$param .= "fm_laudado = 'S',";
				
				//	Verificando se estamos revisando, se sim adiciona os campos que devem ser atualizados
				if( $cod[4] == 'revisar' ){
					$param .= 
						"revisalaudo = " . $this->input->post('Revisor') . ",
						fm_revisado = 'S',
						dtrevisalaudo = ( select sysdate from dual ),";
				}
			}
			
			$this->db->query(
				"update		atd_laudo
				set			titulo = '" . $post['Titulo'] . "', 
							digitadora = coalesce(digitadora, '" . $this->session->idUsuario . "'),
							alterlaudo = '" . $this->session->idUsuario . "',
							realizado = 2,
							codrea = " . $post['Realizante'] . ",
							$param
							datadig = (SELECT SYSDATE FROM DUAL)
				where 		codlaudo = $cod[3]"
			);
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			//	Atualizando Laudo Clob
			$lob = $this->updateCLOB('atd_laudo', 'laudoh', $post['EditorHTMLContent'], array(
				array( 'codlaudo', '=', $cod[3] ),
			) );
			
			//	Erro
			if( $this->db->trans_status() === false ){
				$this->db->trans_rollback();
				return false;
			}
			$this->db->trans_commit();
			return true;
	
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo buscando laudo para impressão
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function imprimir( $cod ) {
	
		try {
			
			$this->db->query("update atd_laudo set FM_IMPRESSO = 'S', realizado = 8  where codlaudo = $cod[3]");
			
			//	Query para pegar dados dos arquivos
			$this->dados = $this->db->query(
				"select    	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
				            p.nome as paciente,
				            e.nome as exame,
							e.codexa as codexa,
							r.codrea as codrea, 
							al.revisalaudo as codrev, 
							rev.nome as nomerevisor,
					        rev.cr as registrorevisor,
					        coo.sigla as conselhorev,
							rev.assinatura as assinaturarevisor,
							r.nome as realizante,
							r.cr as registro,
          					co.sigla as conselho,
							r.assinatura,
							s.nome as solicitante,
							TO_CHAR( al.datadig, 'DD/MM/YYYY' ) as datadigitacao,	
              				con.nome as convenio,
							al.titulo,
							al.laudoh as laudoh,
							al.laudor as laudor,
							al.digitadora as digitador,
              				al.alterlaudo as alterlaudo,
							al.codlaudo,
				            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
				            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
					from   	atd_laudo al
					        inner join atdpedexa ped on (al.codlaudo = ped.codlaudo)
					        inner join atdpedido pedido on (ped.codatdped = pedido.codatdped)
					        inner join atendimento a on (pedido.codatdo = a.codatdo)
					        inner join consulta c on (a.codatdo = c.codatdo)
					        inner join paciente p on (c.prontuario = p.prontuario)
							inner join atdsin on (ped.codatdsin = atdsin.codatdsin)
				            inner join exame e on ( e.codexa = atdsin.codexa )
							inner join realizante r on ( r.codrea = al.codrea )
							inner join solicitante s on ( s.codsol = c.codsol )
							inner join convenio con on ( con.codconv = c.codconv )
							inner join conselho co on ( co.codcons = r.codcons )
							left join realizante rev on ( rev.codrea = al.revisalaudo )
          					left join conselho coo on ( coo.codcons = rev.codcons )
					where 	al.codlaudo = $cod[3]
							"
			);
			
			$this->dados = $this->dados->result_array();
			
			//	Retornando dados
			if( $this->dados[0]['LAUDOH'] ){
				$this->dados[0]['LAUDOH'] = $this->dados[0]['LAUDOH']->load();
			}
			if( $this->dados[0]['LAUDOR'] ){
				$this->dados[0]['LAUDOR'] = $this->dados[0]['LAUDOR']->load();
			}
			$this->dados = $this->dados[0];
				
		} catch (Exception $e) {
			//	Criando Log
			log_message('error', $this->db->error());
		}
	}
	
}