<?php
/**	
 * 	Modelo Index
 * 
 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br>
 *	@version 0.1 - 23/07/2015 11:41:03
 **/ 
class IndexModel extends MainModel {
	
	/**
	 * 	Busca mensagens do mural para exibir ao usu�rio
	 * 
	 *	@author Douglas Comim - 24/05/2016
	 *	@version 0.1
	 * 	@return array com mensagens
	 */
	public function messages(){
		
		//	Instanciando DB
		$db = new DB();
		$db->conecta();
		
		$db->query(
			"select 	m.* 
			from 		Mural m 
						inner join MuralEntidade me on ( me.Mural = m.ID
							and me.Usuario = ".$_SESSION['idUsuario']."
							and m.DataInicial <= now() and m.DataFinal >= now()
						)
			union
			select 		m.* 
			from 		Mural m 
						inner join MuralEntidade me on ( me.Mural = m.ID
							and me.Grupo in (
								select Grupo from UsuarioGrupo where Usuario = ".$_SESSION['idUsuario']."
							)
							and m.DataInicial <= now() and m.DataFinal >= now()
						)
			order by 	1 Desc;");
		$db->desconecta();
		//	Retornando dados 
		$this->dados = $db->dados;
		
	}
}