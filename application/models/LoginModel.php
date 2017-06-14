<?php

/**	
 * 	Modelo com classes do usuario
 * 
 *	@author Douglas Comim <douglas.pinheiro@unimedpf.com.br>
 *	@version 0.1 - 23/07/2015 11:41:03
 **/ 
class LoginModel extends MY_Model {
	
	/**	Contrutor do model
	 *	@author Douglas Comim Pinheiro <douglas.comim@gmail.com>
	 *	@version 1.0 - 27 de mar de 2017 17:43:57
	 **/
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 	Metodo para fazer login do usu�rio usando banco local 
	 * 
	 *	@author Douglas Comim - 28/07/2015 07:59:26
	 *	@version 0.1
	 * 	@param	$login String - Login do usuário
	 * 	@param	$senha String - Senha do usuário
	 * 	@return boolean or array
	 */
	public function loginLocal( $login, $senha ){
		
		//	Validando parametros
		if( isVal( $login ) && isval( $senha ) ){
			
			$this->dados = $this->db->query(
				"select 	u.apeluser, u.nome as nomeusuario, u.status as statususer, u.user_editarlaudo,
							r.codrea, r.nome as nomerealizante, r.status as statusrea, r.assinausuario
				from		Usuario u
							left join Realizante r on ( r.assinausuario = u.apeluser )
				where		u.apeluser = '" . strtoupper( $login ) . "'
							and u.senha = '" . strtoupper( $senha ) . "'
							and ( r.status = 'A' or r.status is null )"
			);
			
			foreach ( $this->dados->result() as $row ){
				if( !$row->APELUSER ){
					return array( 'e', 'Usuário e/ou senha inválidos' );
				}
				if( !$row->STATUSUSER ){
					return array( 'e', 'Usuário e/ou inativo' );
				}
				return true;
			}
		}else{
			return array( 'e', 'Usuário e/ou senha não informados' );
		}
		
	}
	
}