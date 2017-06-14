<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2017-06-13 08:44:00 --> Config Class Initialized
INFO - 2017-06-13 08:44:00 --> Hooks Class Initialized
DEBUG - 2017-06-13 08:44:00 --> UTF-8 Support Enabled
INFO - 2017-06-13 08:44:00 --> Utf8 Class Initialized
INFO - 2017-06-13 08:44:00 --> URI Class Initialized
DEBUG - 2017-06-13 08:44:00 --> No URI present. Default controller set.
INFO - 2017-06-13 08:44:00 --> Router Class Initialized
INFO - 2017-06-13 08:44:00 --> Output Class Initialized
INFO - 2017-06-13 08:44:00 --> Security Class Initialized
DEBUG - 2017-06-13 08:44:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 08:44:00 --> Input Class Initialized
INFO - 2017-06-13 08:44:00 --> Language Class Initialized
INFO - 2017-06-13 08:44:00 --> Loader Class Initialized
INFO - 2017-06-13 08:44:00 --> Helper loaded: url_helper
INFO - 2017-06-13 08:44:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 08:44:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 08:44:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 08:44:00 --> Controller Class Initialized
DEBUG - 2017-06-13 08:44:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 08:44:00 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 08:44:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 08:44:00 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 08:44:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 08:44:00 --> Final output sent to browser
DEBUG - 2017-06-13 08:44:00 --> Total execution time: 0.2116
INFO - 2017-06-13 08:45:27 --> Config Class Initialized
INFO - 2017-06-13 08:45:27 --> Hooks Class Initialized
DEBUG - 2017-06-13 08:45:27 --> UTF-8 Support Enabled
INFO - 2017-06-13 08:45:27 --> Utf8 Class Initialized
INFO - 2017-06-13 08:45:27 --> URI Class Initialized
INFO - 2017-06-13 08:45:27 --> Router Class Initialized
INFO - 2017-06-13 08:45:27 --> Output Class Initialized
INFO - 2017-06-13 08:45:27 --> Security Class Initialized
DEBUG - 2017-06-13 08:45:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 08:45:27 --> Input Class Initialized
INFO - 2017-06-13 08:45:27 --> Language Class Initialized
INFO - 2017-06-13 08:45:27 --> Loader Class Initialized
INFO - 2017-06-13 08:45:27 --> Helper loaded: url_helper
INFO - 2017-06-13 08:45:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 08:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 08:45:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 08:45:27 --> Controller Class Initialized
DEBUG - 2017-06-13 08:45:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 08:45:27 --> User[], Session[], IP[192.168.0.17], Request[/Login/login]
INFO - 2017-06-13 08:45:27 --> Model Class Initialized
INFO - 2017-06-13 08:45:27 --> Database Driver Class Initialized
INFO - 2017-06-13 08:45:27 --> Final output sent to browser
DEBUG - 2017-06-13 08:45:27 --> Total execution time: 0.2738
INFO - 2017-06-13 08:45:27 --> Config Class Initialized
INFO - 2017-06-13 08:45:27 --> Hooks Class Initialized
DEBUG - 2017-06-13 08:45:27 --> UTF-8 Support Enabled
INFO - 2017-06-13 08:45:27 --> Utf8 Class Initialized
INFO - 2017-06-13 08:45:27 --> URI Class Initialized
INFO - 2017-06-13 08:45:27 --> Router Class Initialized
INFO - 2017-06-13 08:45:27 --> Output Class Initialized
INFO - 2017-06-13 08:45:27 --> Security Class Initialized
DEBUG - 2017-06-13 08:45:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 08:45:27 --> Input Class Initialized
INFO - 2017-06-13 08:45:27 --> Language Class Initialized
INFO - 2017-06-13 08:45:27 --> Loader Class Initialized
INFO - 2017-06-13 08:45:27 --> Helper loaded: url_helper
INFO - 2017-06-13 08:45:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 08:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 08:45:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 08:45:27 --> Controller Class Initialized
DEBUG - 2017-06-13 08:45:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 08:45:27 --> User[RENATO], Session[50194b7794d5599a55acde7ca1770552], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 08:45:27 --> Model Class Initialized
INFO - 2017-06-13 08:45:27 --> Database Driver Class Initialized
DEBUG - 2017-06-13 08:45:27 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, cst.datarea, TO_CHAR(cst.datarea, 'DD/MM/YYYY') as dataatendimento, 
			            p.nome as paciente,
			            cst.nroseq as seq,
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
				from   consulta c
				       inner join cstexame cst on ( c.codcst = cst.codcst )
				       inner join paciente p on ( c.prontuario = p.prontuario )
					   inner join atdpedexa ped on ( ped.codpedexa = cst.codpedexa )
				       inner join atd_laudo al on ( ped.codlaudo = al.codlaudo )
				       left join cm_recurso cr on ( cst.codrecurso = cr.codrecurso )
				       inner join exame e on ( cst.codexa = e.codexa )
				       left join realizante r on ( al.codrea = r.codrea )
				       inner join convenio cv on ( c.codconv = cv.codconv )
				       inner join grpexame g on ( e.codgex =  g.codgex )
				       inner join Solicitante S on ( c.codsol = S.codsol )
				       left join realizante reaAssinou on ( al.assinado = reaAssinou.codrea )
				       left join realizante rev on ( al.revisalaudo = rev.codrea )
				       inner join instituicao i on ( c.codinst = i.codinst )
				       left join Agenda A on ( cst.codage = A.codage )
				       inner join plano pl on ( c.codplano = pl.codplano )
				       
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 08:45:28 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 08:45:28 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 08:45:28 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 08:45:28 --> Final output sent to browser
DEBUG - 2017-06-13 08:45:28 --> Total execution time: 0.5511
INFO - 2017-06-13 09:51:05 --> Config Class Initialized
INFO - 2017-06-13 09:51:05 --> Hooks Class Initialized
DEBUG - 2017-06-13 09:51:05 --> UTF-8 Support Enabled
INFO - 2017-06-13 09:51:05 --> Utf8 Class Initialized
INFO - 2017-06-13 09:51:05 --> URI Class Initialized
INFO - 2017-06-13 09:51:05 --> Router Class Initialized
INFO - 2017-06-13 09:51:05 --> Output Class Initialized
INFO - 2017-06-13 09:51:05 --> Security Class Initialized
DEBUG - 2017-06-13 09:51:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 09:51:05 --> Input Class Initialized
INFO - 2017-06-13 09:51:05 --> Language Class Initialized
INFO - 2017-06-13 09:51:05 --> Loader Class Initialized
INFO - 2017-06-13 09:51:05 --> Helper loaded: url_helper
INFO - 2017-06-13 09:51:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 09:51:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 09:51:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 09:51:05 --> Controller Class Initialized
DEBUG - 2017-06-13 09:51:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 09:51:05 --> User[RENATO], Session[50194b7794d5599a55acde7ca1770552], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 09:51:05 --> Model Class Initialized
INFO - 2017-06-13 09:51:05 --> Database Driver Class Initialized
DEBUG - 2017-06-13 09:51:05 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, cst.datarea, TO_CHAR(cst.datarea, 'DD/MM/YYYY') as dataatendimento, 
			            p.nome as paciente,
			            cst.nroseq as seq,
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
				from   consulta c
				       inner join cstexame cst on ( c.codcst = cst.codcst )
				       inner join paciente p on ( c.prontuario = p.prontuario )
					   inner join atdpedexa ped on ( ped.codpedexa = cst.codpedexa )
				       inner join atd_laudo al on ( ped.codlaudo = al.codlaudo )
				       left join cm_recurso cr on ( cst.codrecurso = cr.codrecurso )
				       inner join exame e on ( cst.codexa = e.codexa )
				       left join realizante r on ( al.codrea = r.codrea )
				       inner join convenio cv on ( c.codconv = cv.codconv )
				       inner join grpexame g on ( e.codgex =  g.codgex )
				       inner join Solicitante S on ( c.codsol = S.codsol )
				       left join realizante reaAssinou on ( al.assinado = reaAssinou.codrea )
				       left join realizante rev on ( al.revisalaudo = rev.codrea )
				       inner join instituicao i on ( c.codinst = i.codinst )
				       left join Agenda A on ( cst.codage = A.codage )
				       inner join plano pl on ( c.codplano = pl.codplano )
				       
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 09:51:05 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 09:51:05 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 09:51:05 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 09:51:05 --> Final output sent to browser
DEBUG - 2017-06-13 09:51:05 --> Total execution time: 0.1431
INFO - 2017-06-13 11:17:00 --> Config Class Initialized
INFO - 2017-06-13 11:17:00 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:17:00 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:17:00 --> Utf8 Class Initialized
INFO - 2017-06-13 11:17:00 --> URI Class Initialized
INFO - 2017-06-13 11:17:00 --> Router Class Initialized
INFO - 2017-06-13 11:17:00 --> Output Class Initialized
INFO - 2017-06-13 11:17:00 --> Security Class Initialized
DEBUG - 2017-06-13 11:17:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:17:00 --> Input Class Initialized
INFO - 2017-06-13 11:17:00 --> Language Class Initialized
INFO - 2017-06-13 11:17:00 --> Loader Class Initialized
INFO - 2017-06-13 11:17:00 --> Helper loaded: url_helper
INFO - 2017-06-13 11:17:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:17:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:17:00 --> Controller Class Initialized
DEBUG - 2017-06-13 11:17:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:17:00 --> User[], Session[], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:17:00 --> Model Class Initialized
INFO - 2017-06-13 11:17:00 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:17:00 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('11/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('12/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:17:00 --> Final output sent to browser
DEBUG - 2017-06-13 11:17:00 --> Total execution time: 0.3161
INFO - 2017-06-13 11:17:00 --> Config Class Initialized
INFO - 2017-06-13 11:17:00 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:17:00 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:17:00 --> Utf8 Class Initialized
INFO - 2017-06-13 11:17:00 --> URI Class Initialized
DEBUG - 2017-06-13 11:17:00 --> No URI present. Default controller set.
INFO - 2017-06-13 11:17:00 --> Router Class Initialized
INFO - 2017-06-13 11:17:00 --> Output Class Initialized
INFO - 2017-06-13 11:17:00 --> Security Class Initialized
DEBUG - 2017-06-13 11:17:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:17:00 --> Input Class Initialized
INFO - 2017-06-13 11:17:00 --> Language Class Initialized
INFO - 2017-06-13 11:17:00 --> Loader Class Initialized
INFO - 2017-06-13 11:17:00 --> Helper loaded: url_helper
INFO - 2017-06-13 11:17:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:17:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:17:00 --> Controller Class Initialized
DEBUG - 2017-06-13 11:17:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:17:00 --> User[], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:17:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:17:00 --> Final output sent to browser
DEBUG - 2017-06-13 11:17:00 --> Total execution time: 0.0019
INFO - 2017-06-13 11:18:27 --> Config Class Initialized
INFO - 2017-06-13 11:18:27 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:27 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:27 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:27 --> URI Class Initialized
INFO - 2017-06-13 11:18:27 --> Router Class Initialized
INFO - 2017-06-13 11:18:27 --> Output Class Initialized
INFO - 2017-06-13 11:18:27 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:27 --> Input Class Initialized
INFO - 2017-06-13 11:18:27 --> Language Class Initialized
INFO - 2017-06-13 11:18:27 --> Loader Class Initialized
INFO - 2017-06-13 11:18:27 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:27 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:27 --> User[], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:18:27 --> Model Class Initialized
INFO - 2017-06-13 11:18:27 --> Database Driver Class Initialized
INFO - 2017-06-13 11:18:27 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:18:27 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:18:27 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:18:27 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:27 --> Total execution time: 0.1395
INFO - 2017-06-13 11:18:27 --> Config Class Initialized
INFO - 2017-06-13 11:18:27 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:27 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:27 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:27 --> URI Class Initialized
INFO - 2017-06-13 11:18:27 --> Router Class Initialized
INFO - 2017-06-13 11:18:27 --> Output Class Initialized
INFO - 2017-06-13 11:18:27 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:27 --> Input Class Initialized
INFO - 2017-06-13 11:18:27 --> Language Class Initialized
INFO - 2017-06-13 11:18:27 --> Loader Class Initialized
INFO - 2017-06-13 11:18:27 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:27 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:27 --> User[], Session[], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-06-13 11:18:27 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:27 --> Total execution time: 0.0017
INFO - 2017-06-13 11:18:35 --> Config Class Initialized
INFO - 2017-06-13 11:18:35 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:35 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:35 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:35 --> URI Class Initialized
INFO - 2017-06-13 11:18:35 --> Router Class Initialized
INFO - 2017-06-13 11:18:35 --> Output Class Initialized
INFO - 2017-06-13 11:18:35 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:35 --> Input Class Initialized
INFO - 2017-06-13 11:18:35 --> Language Class Initialized
INFO - 2017-06-13 11:18:35 --> Loader Class Initialized
INFO - 2017-06-13 11:18:35 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:35 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:35 --> User[], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:18:35 --> Model Class Initialized
INFO - 2017-06-13 11:18:35 --> Database Driver Class Initialized
INFO - 2017-06-13 11:18:35 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:35 --> Total execution time: 0.0965
INFO - 2017-06-13 11:18:35 --> Config Class Initialized
INFO - 2017-06-13 11:18:35 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:35 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:35 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:35 --> URI Class Initialized
INFO - 2017-06-13 11:18:35 --> Router Class Initialized
INFO - 2017-06-13 11:18:35 --> Output Class Initialized
INFO - 2017-06-13 11:18:35 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:35 --> Input Class Initialized
INFO - 2017-06-13 11:18:35 --> Language Class Initialized
INFO - 2017-06-13 11:18:35 --> Loader Class Initialized
INFO - 2017-06-13 11:18:35 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:35 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:35 --> User[CAROL], Session[9d72ec39bbc2f52f4cac2b3ccd9056ed], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:18:35 --> Model Class Initialized
INFO - 2017-06-13 11:18:35 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:18:35 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:18:36 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:18:36 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:18:36 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:18:36 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:36 --> Total execution time: 0.3294
INFO - 2017-06-13 11:18:51 --> Config Class Initialized
INFO - 2017-06-13 11:18:51 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:51 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:51 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:51 --> URI Class Initialized
INFO - 2017-06-13 11:18:51 --> Router Class Initialized
INFO - 2017-06-13 11:18:51 --> Output Class Initialized
INFO - 2017-06-13 11:18:51 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:51 --> Input Class Initialized
INFO - 2017-06-13 11:18:51 --> Language Class Initialized
INFO - 2017-06-13 11:18:51 --> Loader Class Initialized
INFO - 2017-06-13 11:18:51 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:51 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:51 --> User[CAROL], Session[9d72ec39bbc2f52f4cac2b3ccd9056ed], IP[192.168.0.101], Request[/Login/logout]
INFO - 2017-06-13 11:18:51 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:51 --> Total execution time: 0.0015
INFO - 2017-06-13 11:18:51 --> Config Class Initialized
INFO - 2017-06-13 11:18:51 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:51 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:51 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:51 --> URI Class Initialized
DEBUG - 2017-06-13 11:18:51 --> No URI present. Default controller set.
INFO - 2017-06-13 11:18:51 --> Router Class Initialized
INFO - 2017-06-13 11:18:51 --> Output Class Initialized
INFO - 2017-06-13 11:18:51 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:51 --> Input Class Initialized
INFO - 2017-06-13 11:18:51 --> Language Class Initialized
INFO - 2017-06-13 11:18:51 --> Loader Class Initialized
INFO - 2017-06-13 11:18:51 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:51 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:51 --> User[CAROL], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-06-13 11:18:51 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:18:51 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:18:51 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:18:51 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:51 --> Total execution time: 0.0015
INFO - 2017-06-13 11:18:57 --> Config Class Initialized
INFO - 2017-06-13 11:18:57 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:57 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:57 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:57 --> URI Class Initialized
INFO - 2017-06-13 11:18:57 --> Router Class Initialized
INFO - 2017-06-13 11:18:57 --> Output Class Initialized
INFO - 2017-06-13 11:18:57 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:57 --> Input Class Initialized
INFO - 2017-06-13 11:18:57 --> Language Class Initialized
INFO - 2017-06-13 11:18:57 --> Loader Class Initialized
INFO - 2017-06-13 11:18:57 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:57 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:57 --> User[CAROL], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:18:57 --> Model Class Initialized
INFO - 2017-06-13 11:18:57 --> Database Driver Class Initialized
INFO - 2017-06-13 11:18:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:18:57 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:18:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:18:57 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:57 --> Total execution time: 0.0637
INFO - 2017-06-13 11:18:57 --> Config Class Initialized
INFO - 2017-06-13 11:18:57 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:18:57 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:18:57 --> Utf8 Class Initialized
INFO - 2017-06-13 11:18:57 --> URI Class Initialized
INFO - 2017-06-13 11:18:57 --> Router Class Initialized
INFO - 2017-06-13 11:18:57 --> Output Class Initialized
INFO - 2017-06-13 11:18:57 --> Security Class Initialized
DEBUG - 2017-06-13 11:18:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:18:57 --> Input Class Initialized
INFO - 2017-06-13 11:18:57 --> Language Class Initialized
INFO - 2017-06-13 11:18:57 --> Loader Class Initialized
INFO - 2017-06-13 11:18:57 --> Helper loaded: url_helper
INFO - 2017-06-13 11:18:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:18:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:18:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:18:57 --> Controller Class Initialized
DEBUG - 2017-06-13 11:18:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:18:57 --> User[CAROL], Session[], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-06-13 11:18:57 --> Final output sent to browser
DEBUG - 2017-06-13 11:18:57 --> Total execution time: 0.0013
INFO - 2017-06-13 11:19:02 --> Config Class Initialized
INFO - 2017-06-13 11:19:02 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:02 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:02 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:02 --> URI Class Initialized
INFO - 2017-06-13 11:19:02 --> Router Class Initialized
INFO - 2017-06-13 11:19:02 --> Output Class Initialized
INFO - 2017-06-13 11:19:02 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:02 --> Input Class Initialized
INFO - 2017-06-13 11:19:02 --> Language Class Initialized
INFO - 2017-06-13 11:19:02 --> Loader Class Initialized
INFO - 2017-06-13 11:19:02 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:02 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:02 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:02 --> User[CAROL], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:19:02 --> Model Class Initialized
INFO - 2017-06-13 11:19:02 --> Database Driver Class Initialized
INFO - 2017-06-13 11:19:02 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:02 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:19:02 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:02 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:02 --> Total execution time: 0.1801
INFO - 2017-06-13 11:19:02 --> Config Class Initialized
INFO - 2017-06-13 11:19:02 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:02 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:02 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:02 --> URI Class Initialized
INFO - 2017-06-13 11:19:02 --> Router Class Initialized
INFO - 2017-06-13 11:19:02 --> Output Class Initialized
INFO - 2017-06-13 11:19:02 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:02 --> Input Class Initialized
INFO - 2017-06-13 11:19:02 --> Language Class Initialized
INFO - 2017-06-13 11:19:02 --> Loader Class Initialized
INFO - 2017-06-13 11:19:02 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:02 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:02 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:02 --> User[CAROL], Session[], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-06-13 11:19:02 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:02 --> Total execution time: 0.0011
INFO - 2017-06-13 11:19:07 --> Config Class Initialized
INFO - 2017-06-13 11:19:07 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:07 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:07 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:07 --> URI Class Initialized
INFO - 2017-06-13 11:19:07 --> Router Class Initialized
INFO - 2017-06-13 11:19:07 --> Output Class Initialized
INFO - 2017-06-13 11:19:07 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:07 --> Input Class Initialized
INFO - 2017-06-13 11:19:07 --> Language Class Initialized
INFO - 2017-06-13 11:19:07 --> Loader Class Initialized
INFO - 2017-06-13 11:19:07 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:07 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:07 --> User[CAROL], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:19:07 --> Model Class Initialized
INFO - 2017-06-13 11:19:07 --> Database Driver Class Initialized
INFO - 2017-06-13 11:19:07 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:07 --> Total execution time: 0.0485
INFO - 2017-06-13 11:19:07 --> Config Class Initialized
INFO - 2017-06-13 11:19:07 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:07 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:07 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:07 --> URI Class Initialized
INFO - 2017-06-13 11:19:07 --> Router Class Initialized
INFO - 2017-06-13 11:19:07 --> Output Class Initialized
INFO - 2017-06-13 11:19:07 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:07 --> Input Class Initialized
INFO - 2017-06-13 11:19:07 --> Language Class Initialized
INFO - 2017-06-13 11:19:07 --> Loader Class Initialized
INFO - 2017-06-13 11:19:07 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:07 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:07 --> User[MAURO], Session[b92a075866d6d5c7c81b0c7e4b31e9b5], IP[192.168.0.101], Request[/FluxoMedico]
INFO - 2017-06-13 11:19:07 --> Model Class Initialized
INFO - 2017-06-13 11:19:07 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:07 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				        left join agenda ag on (ped.codage =  Ag.codage)
				        inner  join instituicao i on ( c.codinst = i.codinst)
				       
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:07 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:07 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 11:19:07 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:07 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:07 --> Total execution time: 0.2938
INFO - 2017-06-13 11:19:11 --> Config Class Initialized
INFO - 2017-06-13 11:19:11 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:11 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:11 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:11 --> URI Class Initialized
INFO - 2017-06-13 11:19:11 --> Router Class Initialized
INFO - 2017-06-13 11:19:11 --> Output Class Initialized
INFO - 2017-06-13 11:19:11 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:11 --> Input Class Initialized
INFO - 2017-06-13 11:19:11 --> Language Class Initialized
INFO - 2017-06-13 11:19:11 --> Loader Class Initialized
INFO - 2017-06-13 11:19:11 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:11 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:11 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:11 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:11 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:11 --> User[MAURO], Session[b92a075866d6d5c7c81b0c7e4b31e9b5], IP[192.168.0.101], Request[/FluxoMedico]
INFO - 2017-06-13 11:19:11 --> Model Class Initialized
INFO - 2017-06-13 11:19:11 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:11 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				        left join agenda ag on (ped.codage =  Ag.codage)
				        inner  join instituicao i on ( c.codinst = i.codinst)
				       
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:11 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:11 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 11:19:11 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:11 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:11 --> Total execution time: 0.3032
INFO - 2017-06-13 11:19:15 --> Config Class Initialized
INFO - 2017-06-13 11:19:15 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:15 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:15 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:15 --> URI Class Initialized
INFO - 2017-06-13 11:19:15 --> Router Class Initialized
INFO - 2017-06-13 11:19:15 --> Output Class Initialized
INFO - 2017-06-13 11:19:15 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:15 --> Input Class Initialized
INFO - 2017-06-13 11:19:15 --> Language Class Initialized
INFO - 2017-06-13 11:19:15 --> Loader Class Initialized
INFO - 2017-06-13 11:19:15 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:15 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:15 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:15 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:15 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:15 --> User[MAURO], Session[b92a075866d6d5c7c81b0c7e4b31e9b5], IP[192.168.0.101], Request[/Login/logout]
INFO - 2017-06-13 11:19:15 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:15 --> Total execution time: 0.0122
INFO - 2017-06-13 11:19:15 --> Config Class Initialized
INFO - 2017-06-13 11:19:15 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:15 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:15 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:15 --> URI Class Initialized
DEBUG - 2017-06-13 11:19:15 --> No URI present. Default controller set.
INFO - 2017-06-13 11:19:15 --> Router Class Initialized
INFO - 2017-06-13 11:19:15 --> Output Class Initialized
INFO - 2017-06-13 11:19:15 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:15 --> Input Class Initialized
INFO - 2017-06-13 11:19:15 --> Language Class Initialized
INFO - 2017-06-13 11:19:15 --> Loader Class Initialized
INFO - 2017-06-13 11:19:15 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:15 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:15 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:15 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:15 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:15 --> User[MAURO], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-06-13 11:19:15 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:15 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 11:19:15 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:15 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:15 --> Total execution time: 0.0059
INFO - 2017-06-13 11:19:20 --> Config Class Initialized
INFO - 2017-06-13 11:19:20 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:20 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:20 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:20 --> URI Class Initialized
INFO - 2017-06-13 11:19:20 --> Router Class Initialized
INFO - 2017-06-13 11:19:20 --> Output Class Initialized
INFO - 2017-06-13 11:19:20 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:20 --> Input Class Initialized
INFO - 2017-06-13 11:19:20 --> Language Class Initialized
INFO - 2017-06-13 11:19:20 --> Loader Class Initialized
INFO - 2017-06-13 11:19:20 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:20 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:20 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:20 --> User[MAURO], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 11:19:20 --> Model Class Initialized
INFO - 2017-06-13 11:19:20 --> Database Driver Class Initialized
INFO - 2017-06-13 11:19:20 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:20 --> Total execution time: 0.2100
INFO - 2017-06-13 11:19:20 --> Config Class Initialized
INFO - 2017-06-13 11:19:20 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:20 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:20 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:20 --> URI Class Initialized
INFO - 2017-06-13 11:19:20 --> Router Class Initialized
INFO - 2017-06-13 11:19:20 --> Output Class Initialized
INFO - 2017-06-13 11:19:20 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:20 --> Input Class Initialized
INFO - 2017-06-13 11:19:20 --> Language Class Initialized
INFO - 2017-06-13 11:19:20 --> Loader Class Initialized
INFO - 2017-06-13 11:19:20 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:20 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:20 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:20 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:19:20 --> Model Class Initialized
INFO - 2017-06-13 11:19:20 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:20 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:20 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:20 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:19:20 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:20 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:20 --> Total execution time: 0.1410
INFO - 2017-06-13 11:19:28 --> Config Class Initialized
INFO - 2017-06-13 11:19:28 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:28 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:28 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:28 --> URI Class Initialized
INFO - 2017-06-13 11:19:28 --> Router Class Initialized
INFO - 2017-06-13 11:19:28 --> Output Class Initialized
INFO - 2017-06-13 11:19:28 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:28 --> Input Class Initialized
INFO - 2017-06-13 11:19:28 --> Language Class Initialized
INFO - 2017-06-13 11:19:28 --> Loader Class Initialized
INFO - 2017-06-13 11:19:28 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:28 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:28 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:28 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:19:28 --> Model Class Initialized
INFO - 2017-06-13 11:19:28 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:28 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY') and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) <= 12 
						and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) > 0 and al.FM_ENTREGUE = 'N' and al.FM_PRONTOPARAENTREGA = 'N'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:29 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:29 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:19:29 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:29 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:29 --> Total execution time: 0.3536
INFO - 2017-06-13 11:19:35 --> Config Class Initialized
INFO - 2017-06-13 11:19:35 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:35 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:35 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:35 --> URI Class Initialized
INFO - 2017-06-13 11:19:35 --> Router Class Initialized
INFO - 2017-06-13 11:19:35 --> Output Class Initialized
INFO - 2017-06-13 11:19:35 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:35 --> Input Class Initialized
INFO - 2017-06-13 11:19:35 --> Language Class Initialized
INFO - 2017-06-13 11:19:35 --> Loader Class Initialized
INFO - 2017-06-13 11:19:35 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:35 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:35 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:19:35 --> Model Class Initialized
INFO - 2017-06-13 11:19:35 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:35 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY') and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) <= 24 
						and ( fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) / 60 ) > 0 and al.FM_ENTREGUE = 'N' and al.FM_PRONTOPARAENTREGA = 'N'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:36 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:36 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:19:36 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:36 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:36 --> Total execution time: 0.5624
INFO - 2017-06-13 11:19:46 --> Config Class Initialized
INFO - 2017-06-13 11:19:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:46 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:46 --> URI Class Initialized
INFO - 2017-06-13 11:19:46 --> Router Class Initialized
INFO - 2017-06-13 11:19:46 --> Output Class Initialized
INFO - 2017-06-13 11:19:46 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:46 --> Input Class Initialized
INFO - 2017-06-13 11:19:46 --> Language Class Initialized
INFO - 2017-06-13 11:19:46 --> Loader Class Initialized
INFO - 2017-06-13 11:19:46 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:46 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:46 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:19:46 --> Model Class Initialized
INFO - 2017-06-13 11:19:46 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:46 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY') and fnc_calc_data_entrega2( al.DTPREVISAOENTREGA,ped.CODGEX, i.codinst ) = 0 and al.FM_ENTREGUE = 'N' and al.FM_PRONTOPARAENTREGA = 'N'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:46 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:19:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:46 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:46 --> Total execution time: 0.4017
INFO - 2017-06-13 11:19:56 --> Config Class Initialized
INFO - 2017-06-13 11:19:56 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:19:56 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:19:56 --> Utf8 Class Initialized
INFO - 2017-06-13 11:19:56 --> URI Class Initialized
INFO - 2017-06-13 11:19:56 --> Router Class Initialized
INFO - 2017-06-13 11:19:56 --> Output Class Initialized
INFO - 2017-06-13 11:19:56 --> Security Class Initialized
DEBUG - 2017-06-13 11:19:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:19:56 --> Input Class Initialized
INFO - 2017-06-13 11:19:56 --> Language Class Initialized
INFO - 2017-06-13 11:19:56 --> Loader Class Initialized
INFO - 2017-06-13 11:19:56 --> Helper loaded: url_helper
INFO - 2017-06-13 11:19:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:19:56 --> Controller Class Initialized
DEBUG - 2017-06-13 11:19:56 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:19:56 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 11:19:56 --> Model Class Initialized
INFO - 2017-06-13 11:19:56 --> Database Driver Class Initialized
DEBUG - 2017-06-13 11:19:56 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					        left join agenda ag on (ped.codage =  Ag.codage)
					        inner  join instituicao i on ( c.codinst = i.codinst)
				   where 	1=1
							and c.cbrcst is null
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 11:19:56 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:19:56 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 11:19:56 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:19:56 --> Final output sent to browser
DEBUG - 2017-06-13 11:19:56 --> Total execution time: 0.1397
INFO - 2017-06-13 11:25:57 --> Config Class Initialized
INFO - 2017-06-13 11:25:57 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:25:57 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:25:57 --> Utf8 Class Initialized
INFO - 2017-06-13 11:25:57 --> URI Class Initialized
INFO - 2017-06-13 11:25:57 --> Router Class Initialized
INFO - 2017-06-13 11:25:57 --> Output Class Initialized
INFO - 2017-06-13 11:25:57 --> Security Class Initialized
DEBUG - 2017-06-13 11:25:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:25:57 --> Input Class Initialized
INFO - 2017-06-13 11:25:57 --> Language Class Initialized
INFO - 2017-06-13 11:25:57 --> Loader Class Initialized
INFO - 2017-06-13 11:25:57 --> Helper loaded: url_helper
INFO - 2017-06-13 11:25:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:25:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:25:57 --> Controller Class Initialized
DEBUG - 2017-06-13 11:25:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:25:57 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/CadastroTextoPadrao]
INFO - 2017-06-13 11:25:57 --> Model Class Initialized
INFO - 2017-06-13 11:25:57 --> Database Driver Class Initialized
INFO - 2017-06-13 11:25:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 11:25:57 --> File loaded: /var/www/html/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-06-13 11:25:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 11:25:57 --> Final output sent to browser
DEBUG - 2017-06-13 11:25:57 --> Total execution time: 0.2242
INFO - 2017-06-13 11:26:06 --> Config Class Initialized
INFO - 2017-06-13 11:26:06 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:26:06 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:26:06 --> Utf8 Class Initialized
INFO - 2017-06-13 11:26:06 --> URI Class Initialized
INFO - 2017-06-13 11:26:06 --> Router Class Initialized
INFO - 2017-06-13 11:26:06 --> Output Class Initialized
INFO - 2017-06-13 11:26:06 --> Security Class Initialized
DEBUG - 2017-06-13 11:26:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:26:06 --> Input Class Initialized
INFO - 2017-06-13 11:26:06 --> Language Class Initialized
INFO - 2017-06-13 11:26:06 --> Loader Class Initialized
INFO - 2017-06-13 11:26:06 --> Helper loaded: url_helper
INFO - 2017-06-13 11:26:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:26:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:26:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:26:06 --> Controller Class Initialized
DEBUG - 2017-06-13 11:26:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:26:06 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-06-13 11:26:06 --> Model Class Initialized
INFO - 2017-06-13 11:26:06 --> Database Driver Class Initialized
INFO - 2017-06-13 11:26:06 --> Final output sent to browser
DEBUG - 2017-06-13 11:26:06 --> Total execution time: 0.2456
INFO - 2017-06-13 11:26:08 --> Config Class Initialized
INFO - 2017-06-13 11:26:08 --> Hooks Class Initialized
DEBUG - 2017-06-13 11:26:08 --> UTF-8 Support Enabled
INFO - 2017-06-13 11:26:08 --> Utf8 Class Initialized
INFO - 2017-06-13 11:26:08 --> URI Class Initialized
INFO - 2017-06-13 11:26:08 --> Router Class Initialized
INFO - 2017-06-13 11:26:08 --> Output Class Initialized
INFO - 2017-06-13 11:26:08 --> Security Class Initialized
DEBUG - 2017-06-13 11:26:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 11:26:08 --> Input Class Initialized
INFO - 2017-06-13 11:26:08 --> Language Class Initialized
INFO - 2017-06-13 11:26:08 --> Loader Class Initialized
INFO - 2017-06-13 11:26:08 --> Helper loaded: url_helper
INFO - 2017-06-13 11:26:08 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 11:26:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 11:26:08 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 11:26:08 --> Controller Class Initialized
DEBUG - 2017-06-13 11:26:08 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 11:26:08 --> User[CAROL], Session[7c846127422ceece4eefd3ccec5520fa], IP[192.168.0.101], Request[/TextoPadrao/textoPadrao/1007]
INFO - 2017-06-13 11:26:08 --> Model Class Initialized
INFO - 2017-06-13 11:26:08 --> Database Driver Class Initialized
INFO - 2017-06-13 11:26:16 --> Final output sent to browser
DEBUG - 2017-06-13 11:26:16 --> Total execution time: 8.4304
INFO - 2017-06-13 13:59:43 --> Config Class Initialized
INFO - 2017-06-13 13:59:43 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:43 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:43 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:43 --> URI Class Initialized
INFO - 2017-06-13 13:59:43 --> Router Class Initialized
INFO - 2017-06-13 13:59:43 --> Output Class Initialized
INFO - 2017-06-13 13:59:43 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:43 --> Input Class Initialized
INFO - 2017-06-13 13:59:43 --> Language Class Initialized
INFO - 2017-06-13 13:59:43 --> Loader Class Initialized
INFO - 2017-06-13 13:59:43 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:43 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:43 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:43 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:43 --> User[], Session[], IP[192.168.0.17], Request[/Login/logout]
INFO - 2017-06-13 13:59:43 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:43 --> Total execution time: 0.0129
INFO - 2017-06-13 13:59:43 --> Config Class Initialized
INFO - 2017-06-13 13:59:43 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:43 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:43 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:43 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:43 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:43 --> Router Class Initialized
INFO - 2017-06-13 13:59:43 --> Output Class Initialized
INFO - 2017-06-13 13:59:43 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:43 --> Input Class Initialized
INFO - 2017-06-13 13:59:43 --> Language Class Initialized
INFO - 2017-06-13 13:59:43 --> Loader Class Initialized
INFO - 2017-06-13 13:59:43 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:43 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:43 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:43 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:43 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:43 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:43 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:43 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:43 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:43 --> Total execution time: 0.0059
INFO - 2017-06-13 13:59:45 --> Config Class Initialized
INFO - 2017-06-13 13:59:45 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:45 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:45 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:45 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:45 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:45 --> Router Class Initialized
INFO - 2017-06-13 13:59:45 --> Output Class Initialized
INFO - 2017-06-13 13:59:45 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:45 --> Input Class Initialized
INFO - 2017-06-13 13:59:45 --> Language Class Initialized
INFO - 2017-06-13 13:59:45 --> Loader Class Initialized
INFO - 2017-06-13 13:59:45 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:45 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:45 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:45 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:45 --> Total execution time: 0.0057
INFO - 2017-06-13 13:59:45 --> Config Class Initialized
INFO - 2017-06-13 13:59:45 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:45 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:45 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:45 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:45 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:45 --> Router Class Initialized
INFO - 2017-06-13 13:59:45 --> Output Class Initialized
INFO - 2017-06-13 13:59:45 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:45 --> Input Class Initialized
INFO - 2017-06-13 13:59:45 --> Language Class Initialized
INFO - 2017-06-13 13:59:45 --> Loader Class Initialized
INFO - 2017-06-13 13:59:45 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:45 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:45 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:45 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:45 --> Total execution time: 0.0054
INFO - 2017-06-13 13:59:45 --> Config Class Initialized
INFO - 2017-06-13 13:59:45 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:45 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:45 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:45 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:45 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:45 --> Router Class Initialized
INFO - 2017-06-13 13:59:45 --> Output Class Initialized
INFO - 2017-06-13 13:59:45 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:45 --> Input Class Initialized
INFO - 2017-06-13 13:59:45 --> Language Class Initialized
INFO - 2017-06-13 13:59:45 --> Loader Class Initialized
INFO - 2017-06-13 13:59:45 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:45 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:45 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:45 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:45 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:45 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:45 --> Total execution time: 0.0053
INFO - 2017-06-13 13:59:46 --> Config Class Initialized
INFO - 2017-06-13 13:59:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:46 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:46 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:46 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:46 --> Router Class Initialized
INFO - 2017-06-13 13:59:46 --> Output Class Initialized
INFO - 2017-06-13 13:59:46 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:46 --> Input Class Initialized
INFO - 2017-06-13 13:59:46 --> Language Class Initialized
INFO - 2017-06-13 13:59:46 --> Loader Class Initialized
INFO - 2017-06-13 13:59:46 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:46 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:46 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:46 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:46 --> Total execution time: 0.0055
INFO - 2017-06-13 13:59:46 --> Config Class Initialized
INFO - 2017-06-13 13:59:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:46 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:46 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:46 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:46 --> Router Class Initialized
INFO - 2017-06-13 13:59:46 --> Output Class Initialized
INFO - 2017-06-13 13:59:46 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:46 --> Input Class Initialized
INFO - 2017-06-13 13:59:46 --> Language Class Initialized
INFO - 2017-06-13 13:59:46 --> Loader Class Initialized
INFO - 2017-06-13 13:59:46 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:46 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:46 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:46 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:46 --> Total execution time: 0.0053
INFO - 2017-06-13 13:59:46 --> Config Class Initialized
INFO - 2017-06-13 13:59:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:46 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:46 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:46 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:46 --> Router Class Initialized
INFO - 2017-06-13 13:59:46 --> Output Class Initialized
INFO - 2017-06-13 13:59:46 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:46 --> Input Class Initialized
INFO - 2017-06-13 13:59:46 --> Language Class Initialized
INFO - 2017-06-13 13:59:46 --> Loader Class Initialized
INFO - 2017-06-13 13:59:46 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:46 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:46 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:46 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:46 --> Total execution time: 0.0055
INFO - 2017-06-13 13:59:46 --> Config Class Initialized
INFO - 2017-06-13 13:59:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:46 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:46 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:46 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:46 --> Router Class Initialized
INFO - 2017-06-13 13:59:46 --> Output Class Initialized
INFO - 2017-06-13 13:59:46 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:46 --> Input Class Initialized
INFO - 2017-06-13 13:59:46 --> Language Class Initialized
INFO - 2017-06-13 13:59:46 --> Loader Class Initialized
INFO - 2017-06-13 13:59:46 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:46 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:46 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:46 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:46 --> Total execution time: 0.0054
INFO - 2017-06-13 13:59:46 --> Config Class Initialized
INFO - 2017-06-13 13:59:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 13:59:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 13:59:46 --> Utf8 Class Initialized
INFO - 2017-06-13 13:59:46 --> URI Class Initialized
DEBUG - 2017-06-13 13:59:46 --> No URI present. Default controller set.
INFO - 2017-06-13 13:59:46 --> Router Class Initialized
INFO - 2017-06-13 13:59:46 --> Output Class Initialized
INFO - 2017-06-13 13:59:46 --> Security Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 13:59:46 --> Input Class Initialized
INFO - 2017-06-13 13:59:46 --> Language Class Initialized
INFO - 2017-06-13 13:59:46 --> Loader Class Initialized
INFO - 2017-06-13 13:59:46 --> Helper loaded: url_helper
INFO - 2017-06-13 13:59:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 13:59:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 13:59:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 13:59:46 --> Controller Class Initialized
DEBUG - 2017-06-13 13:59:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 13:59:46 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 13:59:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 13:59:46 --> Final output sent to browser
DEBUG - 2017-06-13 13:59:46 --> Total execution time: 0.0052
INFO - 2017-06-13 14:03:56 --> Config Class Initialized
INFO - 2017-06-13 14:03:56 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:03:56 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:03:56 --> Utf8 Class Initialized
INFO - 2017-06-13 14:03:56 --> URI Class Initialized
INFO - 2017-06-13 14:03:56 --> Router Class Initialized
INFO - 2017-06-13 14:03:56 --> Output Class Initialized
INFO - 2017-06-13 14:03:56 --> Security Class Initialized
DEBUG - 2017-06-13 14:03:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:03:56 --> Input Class Initialized
INFO - 2017-06-13 14:03:56 --> Language Class Initialized
INFO - 2017-06-13 14:03:56 --> Loader Class Initialized
INFO - 2017-06-13 14:03:56 --> Helper loaded: url_helper
INFO - 2017-06-13 14:03:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:03:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:03:56 --> Controller Class Initialized
DEBUG - 2017-06-13 14:03:56 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:03:56 --> User[], Session[], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 14:03:56 --> Model Class Initialized
INFO - 2017-06-13 14:03:56 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:03:56 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:03:57 --> Final output sent to browser
DEBUG - 2017-06-13 14:03:57 --> Total execution time: 0.6433
INFO - 2017-06-13 14:03:57 --> Config Class Initialized
INFO - 2017-06-13 14:03:57 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:03:57 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:03:57 --> Utf8 Class Initialized
INFO - 2017-06-13 14:03:57 --> URI Class Initialized
DEBUG - 2017-06-13 14:03:57 --> No URI present. Default controller set.
INFO - 2017-06-13 14:03:57 --> Router Class Initialized
INFO - 2017-06-13 14:03:57 --> Output Class Initialized
INFO - 2017-06-13 14:03:57 --> Security Class Initialized
DEBUG - 2017-06-13 14:03:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:03:57 --> Input Class Initialized
INFO - 2017-06-13 14:03:57 --> Language Class Initialized
INFO - 2017-06-13 14:03:57 --> Loader Class Initialized
INFO - 2017-06-13 14:03:57 --> Helper loaded: url_helper
INFO - 2017-06-13 14:03:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:03:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:03:57 --> Controller Class Initialized
DEBUG - 2017-06-13 14:03:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:03:57 --> User[], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 14:03:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:03:57 --> Final output sent to browser
DEBUG - 2017-06-13 14:03:57 --> Total execution time: 0.0041
INFO - 2017-06-13 14:04:04 --> Config Class Initialized
INFO - 2017-06-13 14:04:04 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:04:04 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:04:04 --> Utf8 Class Initialized
INFO - 2017-06-13 14:04:04 --> URI Class Initialized
INFO - 2017-06-13 14:04:04 --> Router Class Initialized
INFO - 2017-06-13 14:04:04 --> Output Class Initialized
INFO - 2017-06-13 14:04:04 --> Security Class Initialized
DEBUG - 2017-06-13 14:04:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:04:04 --> Input Class Initialized
INFO - 2017-06-13 14:04:04 --> Language Class Initialized
INFO - 2017-06-13 14:04:04 --> Loader Class Initialized
INFO - 2017-06-13 14:04:04 --> Helper loaded: url_helper
INFO - 2017-06-13 14:04:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:04:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:04:04 --> Controller Class Initialized
DEBUG - 2017-06-13 14:04:04 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:04:04 --> User[], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-06-13 14:04:04 --> Model Class Initialized
INFO - 2017-06-13 14:04:04 --> Database Driver Class Initialized
INFO - 2017-06-13 14:04:04 --> Final output sent to browser
DEBUG - 2017-06-13 14:04:04 --> Total execution time: 0.0795
INFO - 2017-06-13 14:04:04 --> Config Class Initialized
INFO - 2017-06-13 14:04:04 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:04:04 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:04:04 --> Utf8 Class Initialized
INFO - 2017-06-13 14:04:04 --> URI Class Initialized
INFO - 2017-06-13 14:04:04 --> Router Class Initialized
INFO - 2017-06-13 14:04:04 --> Output Class Initialized
INFO - 2017-06-13 14:04:04 --> Security Class Initialized
DEBUG - 2017-06-13 14:04:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:04:04 --> Input Class Initialized
INFO - 2017-06-13 14:04:04 --> Language Class Initialized
INFO - 2017-06-13 14:04:04 --> Loader Class Initialized
INFO - 2017-06-13 14:04:04 --> Helper loaded: url_helper
INFO - 2017-06-13 14:04:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:04:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:04:04 --> Controller Class Initialized
DEBUG - 2017-06-13 14:04:04 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:04:04 --> User[CAROL], Session[63b2375d5a13ac13700764cf3e006f96], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 14:04:04 --> Model Class Initialized
INFO - 2017-06-13 14:04:04 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:04:05 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:04:05 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:04:05 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 14:04:05 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:04:05 --> Final output sent to browser
DEBUG - 2017-06-13 14:04:05 --> Total execution time: 0.0638
INFO - 2017-06-13 14:04:20 --> Config Class Initialized
INFO - 2017-06-13 14:04:20 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:04:20 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:04:20 --> Utf8 Class Initialized
INFO - 2017-06-13 14:04:20 --> URI Class Initialized
INFO - 2017-06-13 14:04:20 --> Router Class Initialized
INFO - 2017-06-13 14:04:20 --> Output Class Initialized
INFO - 2017-06-13 14:04:20 --> Security Class Initialized
DEBUG - 2017-06-13 14:04:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:04:20 --> Input Class Initialized
INFO - 2017-06-13 14:04:20 --> Language Class Initialized
INFO - 2017-06-13 14:04:20 --> Loader Class Initialized
INFO - 2017-06-13 14:04:20 --> Helper loaded: url_helper
INFO - 2017-06-13 14:04:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:04:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:04:20 --> Controller Class Initialized
DEBUG - 2017-06-13 14:04:20 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:04:20 --> User[CAROL], Session[63b2375d5a13ac13700764cf3e006f96], IP[192.168.0.101], Request[/FluxoDigitacao/info/2626]
INFO - 2017-06-13 14:04:20 --> Model Class Initialized
INFO - 2017-06-13 14:04:20 --> Database Driver Class Initialized
INFO - 2017-06-13 14:04:20 --> Final output sent to browser
DEBUG - 2017-06-13 14:04:20 --> Total execution time: 0.3440
INFO - 2017-06-13 14:04:27 --> Config Class Initialized
INFO - 2017-06-13 14:04:27 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:04:27 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:04:27 --> Utf8 Class Initialized
INFO - 2017-06-13 14:04:27 --> URI Class Initialized
INFO - 2017-06-13 14:04:27 --> Router Class Initialized
INFO - 2017-06-13 14:04:27 --> Output Class Initialized
INFO - 2017-06-13 14:04:27 --> Security Class Initialized
DEBUG - 2017-06-13 14:04:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:04:27 --> Input Class Initialized
INFO - 2017-06-13 14:04:27 --> Language Class Initialized
INFO - 2017-06-13 14:04:27 --> Loader Class Initialized
INFO - 2017-06-13 14:04:27 --> Helper loaded: url_helper
INFO - 2017-06-13 14:04:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:04:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:04:27 --> Controller Class Initialized
DEBUG - 2017-06-13 14:04:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:04:27 --> User[CAROL], Session[63b2375d5a13ac13700764cf3e006f96], IP[192.168.0.101], Request[/FluxoDigitacao/info/2625]
INFO - 2017-06-13 14:04:27 --> Model Class Initialized
INFO - 2017-06-13 14:04:27 --> Database Driver Class Initialized
INFO - 2017-06-13 14:04:27 --> Final output sent to browser
DEBUG - 2017-06-13 14:04:27 --> Total execution time: 0.1116
INFO - 2017-06-13 14:07:10 --> Config Class Initialized
INFO - 2017-06-13 14:07:10 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:07:10 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:07:10 --> Utf8 Class Initialized
INFO - 2017-06-13 14:07:10 --> URI Class Initialized
DEBUG - 2017-06-13 14:07:10 --> No URI present. Default controller set.
INFO - 2017-06-13 14:07:10 --> Router Class Initialized
INFO - 2017-06-13 14:07:10 --> Output Class Initialized
INFO - 2017-06-13 14:07:10 --> Security Class Initialized
DEBUG - 2017-06-13 14:07:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:07:10 --> Input Class Initialized
INFO - 2017-06-13 14:07:10 --> Language Class Initialized
INFO - 2017-06-13 14:07:10 --> Loader Class Initialized
INFO - 2017-06-13 14:07:10 --> Helper loaded: url_helper
INFO - 2017-06-13 14:07:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:07:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:07:10 --> Controller Class Initialized
DEBUG - 2017-06-13 14:07:10 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:07:10 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-13 14:07:10 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:07:10 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 14:07:10 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:07:10 --> Final output sent to browser
DEBUG - 2017-06-13 14:07:10 --> Total execution time: 0.0075
INFO - 2017-06-13 14:13:47 --> Config Class Initialized
INFO - 2017-06-13 14:13:47 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:13:47 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:13:47 --> Utf8 Class Initialized
INFO - 2017-06-13 14:13:47 --> URI Class Initialized
INFO - 2017-06-13 14:13:47 --> Router Class Initialized
INFO - 2017-06-13 14:13:47 --> Output Class Initialized
INFO - 2017-06-13 14:13:47 --> Security Class Initialized
DEBUG - 2017-06-13 14:13:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:13:47 --> Input Class Initialized
INFO - 2017-06-13 14:13:47 --> Language Class Initialized
INFO - 2017-06-13 14:13:47 --> Loader Class Initialized
INFO - 2017-06-13 14:13:47 --> Helper loaded: url_helper
INFO - 2017-06-13 14:13:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:13:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:13:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:13:47 --> Controller Class Initialized
DEBUG - 2017-06-13 14:13:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:13:47 --> User[], Session[], IP[192.168.0.17], Request[/Login/login]
INFO - 2017-06-13 14:13:47 --> Model Class Initialized
INFO - 2017-06-13 14:13:47 --> Database Driver Class Initialized
INFO - 2017-06-13 14:13:47 --> Final output sent to browser
DEBUG - 2017-06-13 14:13:47 --> Total execution time: 0.1036
INFO - 2017-06-13 14:13:47 --> Config Class Initialized
INFO - 2017-06-13 14:13:47 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:13:47 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:13:47 --> Utf8 Class Initialized
INFO - 2017-06-13 14:13:47 --> URI Class Initialized
INFO - 2017-06-13 14:13:47 --> Router Class Initialized
INFO - 2017-06-13 14:13:47 --> Output Class Initialized
INFO - 2017-06-13 14:13:47 --> Security Class Initialized
DEBUG - 2017-06-13 14:13:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:13:47 --> Input Class Initialized
INFO - 2017-06-13 14:13:47 --> Language Class Initialized
INFO - 2017-06-13 14:13:47 --> Loader Class Initialized
INFO - 2017-06-13 14:13:47 --> Helper loaded: url_helper
INFO - 2017-06-13 14:13:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:13:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:13:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:13:47 --> Controller Class Initialized
DEBUG - 2017-06-13 14:13:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:13:47 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:13:47 --> Model Class Initialized
INFO - 2017-06-13 14:13:47 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:13:47 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:13:47 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:13:47 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:13:47 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:13:47 --> Final output sent to browser
DEBUG - 2017-06-13 14:13:47 --> Total execution time: 0.5117
INFO - 2017-06-13 14:13:54 --> Config Class Initialized
INFO - 2017-06-13 14:13:54 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:13:54 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:13:54 --> Utf8 Class Initialized
INFO - 2017-06-13 14:13:54 --> URI Class Initialized
INFO - 2017-06-13 14:13:54 --> Router Class Initialized
INFO - 2017-06-13 14:13:54 --> Output Class Initialized
INFO - 2017-06-13 14:13:54 --> Security Class Initialized
DEBUG - 2017-06-13 14:13:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:13:54 --> Input Class Initialized
INFO - 2017-06-13 14:13:54 --> Language Class Initialized
INFO - 2017-06-13 14:13:54 --> Loader Class Initialized
INFO - 2017-06-13 14:13:54 --> Helper loaded: url_helper
INFO - 2017-06-13 14:13:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:13:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:13:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:13:54 --> Controller Class Initialized
DEBUG - 2017-06-13 14:13:54 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:13:54 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:13:54 --> Model Class Initialized
INFO - 2017-06-13 14:13:54 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:13:54 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:13:54 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:13:54 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:13:54 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:13:54 --> Final output sent to browser
DEBUG - 2017-06-13 14:13:54 --> Total execution time: 0.1517
INFO - 2017-06-13 14:13:57 --> Config Class Initialized
INFO - 2017-06-13 14:13:57 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:13:57 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:13:57 --> Utf8 Class Initialized
INFO - 2017-06-13 14:13:57 --> URI Class Initialized
INFO - 2017-06-13 14:13:57 --> Router Class Initialized
INFO - 2017-06-13 14:13:57 --> Output Class Initialized
INFO - 2017-06-13 14:13:57 --> Security Class Initialized
DEBUG - 2017-06-13 14:13:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:13:57 --> Input Class Initialized
INFO - 2017-06-13 14:13:57 --> Language Class Initialized
INFO - 2017-06-13 14:13:57 --> Loader Class Initialized
INFO - 2017-06-13 14:13:57 --> Helper loaded: url_helper
INFO - 2017-06-13 14:13:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:13:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:13:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:13:57 --> Controller Class Initialized
DEBUG - 2017-06-13 14:13:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:13:57 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:13:57 --> Model Class Initialized
INFO - 2017-06-13 14:13:57 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:13:57 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:13:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:13:57 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:13:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:13:57 --> Final output sent to browser
DEBUG - 2017-06-13 14:13:57 --> Total execution time: 0.3343
INFO - 2017-06-13 14:16:38 --> Config Class Initialized
INFO - 2017-06-13 14:16:38 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:16:38 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:16:38 --> Utf8 Class Initialized
INFO - 2017-06-13 14:16:38 --> URI Class Initialized
INFO - 2017-06-13 14:16:38 --> Router Class Initialized
INFO - 2017-06-13 14:16:38 --> Output Class Initialized
INFO - 2017-06-13 14:16:38 --> Security Class Initialized
DEBUG - 2017-06-13 14:16:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:16:38 --> Input Class Initialized
INFO - 2017-06-13 14:16:38 --> Language Class Initialized
INFO - 2017-06-13 14:16:38 --> Loader Class Initialized
INFO - 2017-06-13 14:16:38 --> Helper loaded: url_helper
INFO - 2017-06-13 14:16:38 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:16:38 --> Controller Class Initialized
DEBUG - 2017-06-13 14:16:38 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:16:38 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:16:38 --> Model Class Initialized
INFO - 2017-06-13 14:16:38 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:16:38 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:16:38 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:16:38 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:16:38 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:16:38 --> Final output sent to browser
DEBUG - 2017-06-13 14:16:38 --> Total execution time: 0.1459
INFO - 2017-06-13 14:16:42 --> Config Class Initialized
INFO - 2017-06-13 14:16:42 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:16:42 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:16:42 --> Utf8 Class Initialized
INFO - 2017-06-13 14:16:42 --> URI Class Initialized
INFO - 2017-06-13 14:16:42 --> Router Class Initialized
INFO - 2017-06-13 14:16:42 --> Output Class Initialized
INFO - 2017-06-13 14:16:42 --> Security Class Initialized
DEBUG - 2017-06-13 14:16:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:16:42 --> Input Class Initialized
INFO - 2017-06-13 14:16:42 --> Language Class Initialized
INFO - 2017-06-13 14:16:42 --> Loader Class Initialized
INFO - 2017-06-13 14:16:42 --> Helper loaded: url_helper
INFO - 2017-06-13 14:16:42 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:16:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:16:42 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:16:42 --> Controller Class Initialized
DEBUG - 2017-06-13 14:16:42 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:16:42 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:16:42 --> Model Class Initialized
INFO - 2017-06-13 14:16:42 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:16:42 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:16:42 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:16:43 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:16:43 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:16:43 --> Final output sent to browser
DEBUG - 2017-06-13 14:16:43 --> Total execution time: 0.1490
INFO - 2017-06-13 14:16:48 --> Config Class Initialized
INFO - 2017-06-13 14:16:48 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:16:48 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:16:48 --> Utf8 Class Initialized
INFO - 2017-06-13 14:16:48 --> URI Class Initialized
INFO - 2017-06-13 14:16:48 --> Router Class Initialized
INFO - 2017-06-13 14:16:48 --> Output Class Initialized
INFO - 2017-06-13 14:16:48 --> Security Class Initialized
DEBUG - 2017-06-13 14:16:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:16:48 --> Input Class Initialized
INFO - 2017-06-13 14:16:48 --> Language Class Initialized
INFO - 2017-06-13 14:16:48 --> Loader Class Initialized
INFO - 2017-06-13 14:16:48 --> Helper loaded: url_helper
INFO - 2017-06-13 14:16:48 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:16:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:16:48 --> Controller Class Initialized
DEBUG - 2017-06-13 14:16:48 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:16:48 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:16:48 --> Model Class Initialized
INFO - 2017-06-13 14:16:48 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:16:48 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:16:48 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:16:48 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:16:48 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:16:48 --> Final output sent to browser
DEBUG - 2017-06-13 14:16:48 --> Total execution time: 0.1922
INFO - 2017-06-13 14:29:02 --> Config Class Initialized
INFO - 2017-06-13 14:29:02 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:02 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:02 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:02 --> URI Class Initialized
INFO - 2017-06-13 14:29:02 --> Router Class Initialized
INFO - 2017-06-13 14:29:02 --> Output Class Initialized
INFO - 2017-06-13 14:29:02 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:02 --> Input Class Initialized
INFO - 2017-06-13 14:29:02 --> Language Class Initialized
INFO - 2017-06-13 14:29:02 --> Loader Class Initialized
INFO - 2017-06-13 14:29:02 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:02 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:02 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:02 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:29:02 --> Model Class Initialized
INFO - 2017-06-13 14:29:02 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:29:02 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:29:02 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:29:02 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:29:02 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:29:02 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:02 --> Total execution time: 0.1792
INFO - 2017-06-13 14:29:09 --> Config Class Initialized
INFO - 2017-06-13 14:29:09 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:09 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:09 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:09 --> URI Class Initialized
INFO - 2017-06-13 14:29:09 --> Router Class Initialized
INFO - 2017-06-13 14:29:09 --> Output Class Initialized
INFO - 2017-06-13 14:29:09 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:09 --> Input Class Initialized
INFO - 2017-06-13 14:29:09 --> Language Class Initialized
INFO - 2017-06-13 14:29:09 --> Loader Class Initialized
INFO - 2017-06-13 14:29:09 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:09 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:09 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:09 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:29:09 --> Model Class Initialized
INFO - 2017-06-13 14:29:09 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:29:09 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.codcst = 812783 and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:29:09 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:29:09 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:29:09 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:29:09 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:09 --> Total execution time: 0.3541
INFO - 2017-06-13 14:29:14 --> Config Class Initialized
INFO - 2017-06-13 14:29:14 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:14 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:14 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:14 --> URI Class Initialized
INFO - 2017-06-13 14:29:14 --> Router Class Initialized
INFO - 2017-06-13 14:29:14 --> Output Class Initialized
INFO - 2017-06-13 14:29:14 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:14 --> Input Class Initialized
INFO - 2017-06-13 14:29:14 --> Language Class Initialized
INFO - 2017-06-13 14:29:14 --> Loader Class Initialized
INFO - 2017-06-13 14:29:14 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:14 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:14 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:14 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/digitar/2634]
INFO - 2017-06-13 14:29:14 --> Model Class Initialized
INFO - 2017-06-13 14:29:14 --> Database Driver Class Initialized
INFO - 2017-06-13 14:29:14 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:29:14 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-13 14:29:14 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:29:14 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:14 --> Total execution time: 0.3617
INFO - 2017-06-13 14:29:14 --> Config Class Initialized
INFO - 2017-06-13 14:29:14 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:14 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:14 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:14 --> URI Class Initialized
INFO - 2017-06-13 14:29:14 --> Router Class Initialized
INFO - 2017-06-13 14:29:14 --> Output Class Initialized
INFO - 2017-06-13 14:29:14 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:14 --> Input Class Initialized
INFO - 2017-06-13 14:29:14 --> Language Class Initialized
INFO - 2017-06-13 14:29:14 --> Loader Class Initialized
INFO - 2017-06-13 14:29:14 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:14 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:14 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:14 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/verificaDitado/2634]
INFO - 2017-06-13 14:29:14 --> Model Class Initialized
INFO - 2017-06-13 14:29:14 --> Database Driver Class Initialized
INFO - 2017-06-13 14:29:23 --> Config Class Initialized
INFO - 2017-06-13 14:29:23 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:23 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:23 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:23 --> URI Class Initialized
INFO - 2017-06-13 14:29:23 --> Router Class Initialized
INFO - 2017-06-13 14:29:23 --> Output Class Initialized
INFO - 2017-06-13 14:29:23 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:23 --> Input Class Initialized
INFO - 2017-06-13 14:29:23 --> Language Class Initialized
INFO - 2017-06-13 14:29:23 --> Loader Class Initialized
INFO - 2017-06-13 14:29:23 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:23 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:23 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:23 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:23 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:23 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Sys/mensagemClean]
INFO - 2017-06-13 14:29:23 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:23 --> Total execution time: 0.0120
INFO - 2017-06-13 14:29:28 --> Config Class Initialized
INFO - 2017-06-13 14:29:28 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:28 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:28 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:28 --> URI Class Initialized
INFO - 2017-06-13 14:29:28 --> Router Class Initialized
INFO - 2017-06-13 14:29:28 --> Output Class Initialized
INFO - 2017-06-13 14:29:28 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:28 --> Input Class Initialized
INFO - 2017-06-13 14:29:28 --> Language Class Initialized
INFO - 2017-06-13 14:29:28 --> Loader Class Initialized
INFO - 2017-06-13 14:29:28 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:28 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:28 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:28 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/salvar/2634/digitar]
INFO - 2017-06-13 14:29:28 --> Model Class Initialized
INFO - 2017-06-13 14:29:28 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:29:28 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2634 returning laudoh into :temp
INFO - 2017-06-13 14:29:28 --> Config Class Initialized
INFO - 2017-06-13 14:29:28 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:28 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:28 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:28 --> URI Class Initialized
INFO - 2017-06-13 14:29:28 --> Router Class Initialized
INFO - 2017-06-13 14:29:28 --> Output Class Initialized
INFO - 2017-06-13 14:29:28 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:28 --> Input Class Initialized
INFO - 2017-06-13 14:29:28 --> Language Class Initialized
INFO - 2017-06-13 14:29:28 --> Loader Class Initialized
INFO - 2017-06-13 14:29:28 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:28 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:28 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:28 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/digitar/2634]
INFO - 2017-06-13 14:29:28 --> Model Class Initialized
INFO - 2017-06-13 14:29:28 --> Database Driver Class Initialized
INFO - 2017-06-13 14:29:29 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:29:29 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-13 14:29:29 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:29:29 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:29 --> Total execution time: 0.0848
INFO - 2017-06-13 14:29:29 --> Config Class Initialized
INFO - 2017-06-13 14:29:29 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:29 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:29 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:29 --> URI Class Initialized
INFO - 2017-06-13 14:29:29 --> Router Class Initialized
INFO - 2017-06-13 14:29:29 --> Output Class Initialized
INFO - 2017-06-13 14:29:29 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:29 --> Input Class Initialized
INFO - 2017-06-13 14:29:29 --> Language Class Initialized
INFO - 2017-06-13 14:29:29 --> Loader Class Initialized
INFO - 2017-06-13 14:29:29 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:29 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:29 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:29 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Sys/mensagemClean]
INFO - 2017-06-13 14:29:29 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:29 --> Total execution time: 0.0046
INFO - 2017-06-13 14:29:29 --> Config Class Initialized
INFO - 2017-06-13 14:29:29 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:29 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:29 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:29 --> URI Class Initialized
INFO - 2017-06-13 14:29:29 --> Router Class Initialized
INFO - 2017-06-13 14:29:29 --> Output Class Initialized
INFO - 2017-06-13 14:29:29 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:29 --> Input Class Initialized
INFO - 2017-06-13 14:29:29 --> Language Class Initialized
INFO - 2017-06-13 14:29:29 --> Loader Class Initialized
INFO - 2017-06-13 14:29:29 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:29 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:29 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:29 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/verificaDitado/2634]
INFO - 2017-06-13 14:29:29 --> Model Class Initialized
INFO - 2017-06-13 14:29:29 --> Database Driver Class Initialized
INFO - 2017-06-13 14:29:31 --> Config Class Initialized
INFO - 2017-06-13 14:29:31 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:29:31 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:29:31 --> Utf8 Class Initialized
INFO - 2017-06-13 14:29:31 --> URI Class Initialized
INFO - 2017-06-13 14:29:31 --> Router Class Initialized
INFO - 2017-06-13 14:29:31 --> Output Class Initialized
INFO - 2017-06-13 14:29:31 --> Security Class Initialized
DEBUG - 2017-06-13 14:29:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:29:31 --> Input Class Initialized
INFO - 2017-06-13 14:29:31 --> Language Class Initialized
INFO - 2017-06-13 14:29:31 --> Loader Class Initialized
INFO - 2017-06-13 14:29:31 --> Helper loaded: url_helper
INFO - 2017-06-13 14:29:31 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:29:31 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:29:31 --> Controller Class Initialized
DEBUG - 2017-06-13 14:29:31 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:29:31 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-13 14:29:31 --> Model Class Initialized
INFO - 2017-06-13 14:29:31 --> Database Driver Class Initialized
DEBUG - 2017-06-13 14:29:31 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.codcst = 812783 and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 14:29:31 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 14:29:31 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 14:29:31 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 14:29:31 --> Final output sent to browser
DEBUG - 2017-06-13 14:29:31 --> Total execution time: 0.1290
INFO - 2017-06-13 14:45:14 --> Config Class Initialized
INFO - 2017-06-13 14:45:14 --> Hooks Class Initialized
DEBUG - 2017-06-13 14:45:14 --> UTF-8 Support Enabled
INFO - 2017-06-13 14:45:14 --> Utf8 Class Initialized
INFO - 2017-06-13 14:45:14 --> URI Class Initialized
INFO - 2017-06-13 14:45:14 --> Router Class Initialized
INFO - 2017-06-13 14:45:14 --> Output Class Initialized
INFO - 2017-06-13 14:45:14 --> Security Class Initialized
DEBUG - 2017-06-13 14:45:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 14:45:14 --> Input Class Initialized
INFO - 2017-06-13 14:45:14 --> Language Class Initialized
INFO - 2017-06-13 14:45:14 --> Loader Class Initialized
INFO - 2017-06-13 14:45:14 --> Helper loaded: url_helper
INFO - 2017-06-13 14:45:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 14:45:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 14:45:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 14:45:14 --> Controller Class Initialized
DEBUG - 2017-06-13 14:45:14 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 14:45:14 --> User[RENATO], Session[9c196df6b037ddca79dbaf3e9adab94a], IP[192.168.0.17], Request[/Editor/imprimir/2634/0/imprimir]
INFO - 2017-06-13 14:45:14 --> Model Class Initialized
INFO - 2017-06-13 14:45:14 --> Database Driver Class Initialized
INFO - 2017-06-13 18:45:15 --> Final output sent to browser
DEBUG - 2017-06-13 18:45:15 --> Total execution time: 0.8614
INFO - 2017-06-13 15:25:46 --> Config Class Initialized
INFO - 2017-06-13 15:25:46 --> Hooks Class Initialized
DEBUG - 2017-06-13 15:25:46 --> UTF-8 Support Enabled
INFO - 2017-06-13 15:25:46 --> Utf8 Class Initialized
INFO - 2017-06-13 15:25:46 --> URI Class Initialized
INFO - 2017-06-13 15:25:46 --> Router Class Initialized
INFO - 2017-06-13 15:25:46 --> Output Class Initialized
INFO - 2017-06-13 15:25:46 --> Security Class Initialized
DEBUG - 2017-06-13 15:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 15:25:46 --> Input Class Initialized
INFO - 2017-06-13 15:25:46 --> Language Class Initialized
INFO - 2017-06-13 15:25:46 --> Loader Class Initialized
INFO - 2017-06-13 15:25:46 --> Helper loaded: url_helper
INFO - 2017-06-13 15:25:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 15:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 15:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 15:25:46 --> Controller Class Initialized
DEBUG - 2017-06-13 15:25:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 15:25:46 --> User[CAROL], Session[63b2375d5a13ac13700764cf3e006f96], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-06-13 15:25:46 --> Model Class Initialized
INFO - 2017-06-13 15:25:46 --> Database Driver Class Initialized
DEBUG - 2017-06-13 15:25:46 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select  	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
							and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 15:25:46 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 15:25:46 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-13 15:25:46 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 15:25:46 --> Final output sent to browser
DEBUG - 2017-06-13 15:25:46 --> Total execution time: 0.0713
INFO - 2017-06-13 15:25:51 --> Config Class Initialized
INFO - 2017-06-13 15:25:51 --> Hooks Class Initialized
DEBUG - 2017-06-13 15:25:51 --> UTF-8 Support Enabled
INFO - 2017-06-13 15:25:51 --> Utf8 Class Initialized
INFO - 2017-06-13 15:25:51 --> URI Class Initialized
INFO - 2017-06-13 15:25:51 --> Router Class Initialized
INFO - 2017-06-13 15:25:51 --> Output Class Initialized
INFO - 2017-06-13 15:25:51 --> Security Class Initialized
DEBUG - 2017-06-13 15:25:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 15:25:51 --> Input Class Initialized
INFO - 2017-06-13 15:25:51 --> Language Class Initialized
INFO - 2017-06-13 15:25:51 --> Loader Class Initialized
INFO - 2017-06-13 15:25:51 --> Helper loaded: url_helper
INFO - 2017-06-13 15:25:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 15:25:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 15:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 15:25:51 --> Controller Class Initialized
DEBUG - 2017-06-13 15:25:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 15:25:51 --> User[CAROL], Session[63b2375d5a13ac13700764cf3e006f96], IP[192.168.0.101], Request[/Editor/imprimir/2635/0/imprimir]
INFO - 2017-06-13 15:25:51 --> Model Class Initialized
INFO - 2017-06-13 15:25:51 --> Database Driver Class Initialized
INFO - 2017-06-13 19:26:00 --> Final output sent to browser
DEBUG - 2017-06-13 19:26:00 --> Total execution time: 9.3837
INFO - 2017-06-13 16:51:48 --> Config Class Initialized
INFO - 2017-06-13 16:51:48 --> Hooks Class Initialized
DEBUG - 2017-06-13 16:51:48 --> UTF-8 Support Enabled
INFO - 2017-06-13 16:51:48 --> Utf8 Class Initialized
INFO - 2017-06-13 16:51:48 --> URI Class Initialized
DEBUG - 2017-06-13 16:51:48 --> No URI present. Default controller set.
INFO - 2017-06-13 16:51:48 --> Router Class Initialized
INFO - 2017-06-13 16:51:48 --> Output Class Initialized
INFO - 2017-06-13 16:51:48 --> Security Class Initialized
DEBUG - 2017-06-13 16:51:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 16:51:48 --> Input Class Initialized
INFO - 2017-06-13 16:51:48 --> Language Class Initialized
INFO - 2017-06-13 16:51:48 --> Loader Class Initialized
INFO - 2017-06-13 16:51:48 --> Helper loaded: url_helper
INFO - 2017-06-13 16:51:48 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 16:51:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 16:51:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 16:51:48 --> Controller Class Initialized
DEBUG - 2017-06-13 16:51:48 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 16:51:48 --> User[], Session[], IP[192.168.0.19], Request[/]
INFO - 2017-06-13 16:51:48 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 16:51:48 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-13 16:51:48 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 16:51:48 --> Final output sent to browser
DEBUG - 2017-06-13 16:51:48 --> Total execution time: 0.0148
INFO - 2017-06-13 16:51:58 --> Config Class Initialized
INFO - 2017-06-13 16:51:58 --> Hooks Class Initialized
DEBUG - 2017-06-13 16:51:58 --> UTF-8 Support Enabled
INFO - 2017-06-13 16:51:58 --> Utf8 Class Initialized
INFO - 2017-06-13 16:51:58 --> URI Class Initialized
INFO - 2017-06-13 16:51:58 --> Router Class Initialized
INFO - 2017-06-13 16:51:58 --> Output Class Initialized
INFO - 2017-06-13 16:51:58 --> Security Class Initialized
DEBUG - 2017-06-13 16:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 16:51:58 --> Input Class Initialized
INFO - 2017-06-13 16:51:58 --> Language Class Initialized
INFO - 2017-06-13 16:51:58 --> Loader Class Initialized
INFO - 2017-06-13 16:51:58 --> Helper loaded: url_helper
INFO - 2017-06-13 16:51:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 16:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 16:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 16:51:58 --> Controller Class Initialized
DEBUG - 2017-06-13 16:51:58 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 16:51:58 --> User[], Session[], IP[192.168.0.19], Request[/Login/login]
INFO - 2017-06-13 16:51:58 --> Model Class Initialized
INFO - 2017-06-13 16:51:58 --> Database Driver Class Initialized
INFO - 2017-06-13 16:51:58 --> Final output sent to browser
DEBUG - 2017-06-13 16:51:58 --> Total execution time: 0.0887
INFO - 2017-06-13 16:51:58 --> Config Class Initialized
INFO - 2017-06-13 16:51:58 --> Hooks Class Initialized
DEBUG - 2017-06-13 16:51:58 --> UTF-8 Support Enabled
INFO - 2017-06-13 16:51:58 --> Utf8 Class Initialized
INFO - 2017-06-13 16:51:58 --> URI Class Initialized
INFO - 2017-06-13 16:51:58 --> Router Class Initialized
INFO - 2017-06-13 16:51:58 --> Output Class Initialized
INFO - 2017-06-13 16:51:58 --> Security Class Initialized
DEBUG - 2017-06-13 16:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-13 16:51:58 --> Input Class Initialized
INFO - 2017-06-13 16:51:58 --> Language Class Initialized
INFO - 2017-06-13 16:51:58 --> Loader Class Initialized
INFO - 2017-06-13 16:51:58 --> Helper loaded: url_helper
INFO - 2017-06-13 16:51:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-13 16:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-13 16:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-13 16:51:58 --> Controller Class Initialized
DEBUG - 2017-06-13 16:51:58 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-13 16:51:58 --> User[MLODI], Session[64d460a361f82af82ae68ef24653b358], IP[192.168.0.19], Request[/FluxoMedico]
INFO - 2017-06-13 16:51:58 --> Model Class Initialized
INFO - 2017-06-13 16:51:58 --> Database Driver Class Initialized
DEBUG - 2017-06-13 16:51:59 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 
				     	c.codcst as consulta, p.prontuario, ped.datarea, TO_CHAR(ped.datarea, 'DD/MM/YYYY') as dataatendimento, 
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
					    ped.codpedexa,
					    ped.codlaudo,
			            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, 
			            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE, al.FM_ENVELOPADO
					   
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
				 where 1=1
					   and c.cbrcst is null
					   and c.datahora >= to_date('12/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('13/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-13 16:51:59 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-13 16:51:59 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-13 16:51:59 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-13 16:51:59 --> Final output sent to browser
DEBUG - 2017-06-13 16:51:59 --> Total execution time: 0.1540
