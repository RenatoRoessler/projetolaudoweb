<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**	
 * 	Modelo Fatura
 * 
 *	@author Douglas Comim <douglas.comim@gmail.com>
 *	@version 0.0.1, 10 de jun de 2016 10:02:35
 **/ 
class FluxoDigitacaoModel extends MY_Model {

	/**	Contrutor do model
	 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br> 11 de fev de 2016 16:30:45
	 *	@version 0.1
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Metodo para listar faturas enviadas pelo usu�rio
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0.0 - 19 de out de 2016 10:12:26
	 * 	@return array
	 */
	public function listarTodos() {
	
		try {
	
			$filtros = array();
				
			( $this->session->filter['FilterConsulta'] ) ? $filtros[] = "and c.codcst = ".$this->session->filter['FilterConsulta'] : null;
			( $this->session->filter['FilterProntuario'] ) ? $filtros[] = "and p.prontuario = ".$this->session->filter['FilterProntuario'] : null;
			( $this->session->filter['FilterPaciente'] ) ? $filtros[] = "and p.nome like '%" . strtoupper( $this->session->filter['FilterPaciente'] ) . "%'" : null;
			( $this->session->filter['FilterExame'] ) ? $filtros[] = "and e.nome like '%" . strtoupper( $this->session->filter['FilterExame'] ) . "%'" : null;
			( $this->session->filter['FilterDataInicial'] ) ? $filtros[] = "and c.datahora >= to_date('".$this->session->filter['FilterDataInicial']."', 'DD/MM/YYYY HH24:MI:SS')" : null;
			( $this->session->filter['FilterDataFinal'] ) ? $filtros[] = "and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('".$this->session->filter['FilterDataFinal']."', 'DD/MM/YYYY')" : null;
			( $this->session->filter['FilterSetor'] ) ? $filtros[] = "and ped.codsetor = ".$this->session->filter['FilterSetor'] : null;
			( $this->session->filter['FilterInstituicao'] ) ? $filtros[] = "and i.codinst = ".$this->session->filter['FilterInstituicao'] : null;

			( $this->session->filter['FilterLaudado'] ) ? $filtros[] = "and al.fm_laudado = '".$this->session->filter['FilterLaudado'] . "'" : null;
			( $this->session->filter['FilterDitado'] ) ? $filtros[] = "and al.fm_ditado = '".$this->session->filter['FilterDitado'] . "'" : null;
			( $this->session->filter['FilterRevisado'] ) ? $filtros[] = "and al.fm_revisado = '".$this->session->filter['FilterRevisado'] . "'" : null;
			( $this->session->filter['FilterAssinado'] ) ? $filtros[] = "and al.fm_assinado = '".$this->session->filter['FilterAssinado'] . "'" : null;

			( $this->session->filter['FilterDigitado'] ) ? $filtros[] = "and al.fm_digitado = '".$this->session->filter['FilterDigitado'] . "'" : null;
			( $this->session->filter['FilterImpresso'] ) ? $filtros[] = "and al.fm_impresso = '".$this->session->filter['FilterImpresso'] . "'" : null;
			( $this->session->filter['FilterLiberado'] ) ? $filtros[] = "and al.fm_liberado = '".$this->session->filter['FilterLiberado'] . "'" : null;
			( $this->session->filter['FilterEnvelopado'] ) ? $filtros[] = "and al.fm_envelopado = '".$this->session->filter['FilterEnvelopado'] . "'" : null;
			( $this->session->filter['FilterPronto'] ) ? $filtros[] = "and al.fm_prontoparaentrega = '".$this->session->filter['FilterPronto'] . "'" : null;
			( $this->session->filter['FilterEntregue'] ) ? $filtros[] = "and al.fm_entregue = '".$this->session->filter['FilterEntregue'] . "'" : null;
			
			
			if( $this->session->filter['FilterTempo'] ){
				if( $this->session->filter['FilterTempo'] == 'A' ){
					$filtros[] = "and fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) = 0 and al.FM_ENTREGUE = 'N' and al.FM_PRONTOPARAENTREGA = 'N'";
				}else{
					$filtros[] = 
						"and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) <= ".$this->session->filter['FilterTempo'] . " 
						and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) > 0 and al.FM_ENTREGUE = 'N' and al.FM_PRONTOPARAENTREGA = 'N'";
				}
			}
			
			$param = implode( ' ', $filtros );
			
			$this->dados = $this->query(
				"select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
					        p.nome as paciente,
					        e.codexa as codexame,
					        e.nome as exame,
					        r.nome as realizante,
				            case 
				                   when al.realizado = '8' then 'Impresso' 
				                   when al.realizado = '3' then 'Por laudar'
				                   when al.realizado = '2' then 'Atendido'
				                   when al.realizado = '1' then 'Em Atendimento'
				                   when al.realizado = '0' then 'Por Atender'
				            end Realizado,
					        al.codlaudo,
					        -- fnc_calc_data_entrega2( cst.dtprevisaoentrega, e.codgex, i.codinst ) as tempo,
					        case when al.dataentrega is not null then 25 
					             WHEN al.FM_PRONTOPARAENTREGA = 'S' THEN 29
					             WHEN TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) >= 24 and 
					                  TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) <= 47 THEN 26
					             WHEN TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) >= 48 and 
					                  TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) <= 71 THEN 27
					             WHEN TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) >= 72 THEN 28
					          ELSE TRUNC(fnc_calc_data_entrega2(al.DTPREVISAOENTREGA,ped.CODGEX,c.codinst)/60) end as tempo,
					        to_char( al.dtprevisaoentrega , 'DD/MM/YYYY HH24:MI') dtprevisaoentrega,
					        al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, al.Fm_Envelopado, al.Fm_Prontoparaentrega,
					        al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
						   	{{}}
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
				   where 	1=1
							and c.cbrcst is null
							$param
				   order by c.datahora desc"
			);
			$this->dados = $this->dados->result_array();
				
		} catch (Exception $e) {
			//	Criando Log
			$this->session->set_userdata('MSG', [ 'f', 'Falha [' . $this->db->error() . ']' ]);
			log_message('error', $this->db->error());
		}
	}
	
	/**
	 * 	Metodo para atualizar as flags
	 *
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 14 de mar de 2017 22:42:47
	 * 	@return array
	 */
	public function atualizar( $cod, $valores ) {
	
		try {
			
			$p = "";
			foreach ( $valores as $k => $v ){
				$p .= "$k = $v,";
			}
			$p = substr( $p , 0, -1 );
			
			$this->db->trans_start();
			
			//	Query para pegar dados dos arquivos
			$this->db->query(
				"update		atd_laudo
				set			$p
				where 		codlaudo = $cod[3]"
			);
			$this->db->trans_complete();
			
			if( $this->db->trans_status() === false ){
				$this->session->set_userdata('MSG', array( 'e', 'Falha ao atualizar registro.<br/>[ ' . $this->db->error() . ' ]'));
				return false;
			}
			$this->session->set_userdata('MSG', array( 's', 'Registro atualizado com sucesso'));
	
		} catch (Exception $e) {
			log_message('error', $this->db->error());
		}
	}
}