<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2017-05-19 17:00:44 --> Config Class Initialized
INFO - 2017-05-19 17:00:44 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:00:44 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:00:44 --> Utf8 Class Initialized
INFO - 2017-05-19 17:00:44 --> URI Class Initialized
DEBUG - 2017-05-19 17:00:44 --> No URI present. Default controller set.
INFO - 2017-05-19 17:00:44 --> Router Class Initialized
INFO - 2017-05-19 17:00:44 --> Output Class Initialized
INFO - 2017-05-19 17:00:44 --> Security Class Initialized
DEBUG - 2017-05-19 17:00:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:00:44 --> Input Class Initialized
INFO - 2017-05-19 17:00:44 --> Language Class Initialized
INFO - 2017-05-19 17:00:44 --> Loader Class Initialized
INFO - 2017-05-19 17:00:44 --> Helper loaded: url_helper
INFO - 2017-05-19 17:00:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:00:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:00:44 --> Controller Class Initialized
DEBUG - 2017-05-19 17:00:44 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:00:44 --> User[], Session[], IP[192.168.0.19], Request[/]
INFO - 2017-05-19 17:00:44 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-19 17:00:44 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-05-19 17:00:44 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-19 17:00:44 --> Final output sent to browser
DEBUG - 2017-05-19 17:00:44 --> Total execution time: 0.1226
INFO - 2017-05-19 17:00:51 --> Config Class Initialized
INFO - 2017-05-19 17:00:51 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:00:51 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:00:51 --> Utf8 Class Initialized
INFO - 2017-05-19 17:00:51 --> URI Class Initialized
INFO - 2017-05-19 17:00:51 --> Router Class Initialized
INFO - 2017-05-19 17:00:51 --> Output Class Initialized
INFO - 2017-05-19 17:00:51 --> Security Class Initialized
DEBUG - 2017-05-19 17:00:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:00:51 --> Input Class Initialized
INFO - 2017-05-19 17:00:51 --> Language Class Initialized
INFO - 2017-05-19 17:00:51 --> Loader Class Initialized
INFO - 2017-05-19 17:00:51 --> Helper loaded: url_helper
INFO - 2017-05-19 17:00:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:00:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:00:51 --> Controller Class Initialized
DEBUG - 2017-05-19 17:00:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:00:51 --> User[], Session[], IP[192.168.0.19], Request[/Login/login]
INFO - 2017-05-19 17:00:51 --> Model Class Initialized
INFO - 2017-05-19 17:00:51 --> Database Driver Class Initialized
INFO - 2017-05-19 17:00:51 --> Final output sent to browser
DEBUG - 2017-05-19 17:00:51 --> Total execution time: 0.1811
INFO - 2017-05-19 17:00:52 --> Config Class Initialized
INFO - 2017-05-19 17:00:52 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:00:52 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:00:52 --> Utf8 Class Initialized
INFO - 2017-05-19 17:00:52 --> URI Class Initialized
INFO - 2017-05-19 17:00:52 --> Router Class Initialized
INFO - 2017-05-19 17:00:52 --> Output Class Initialized
INFO - 2017-05-19 17:00:52 --> Security Class Initialized
DEBUG - 2017-05-19 17:00:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:00:52 --> Input Class Initialized
INFO - 2017-05-19 17:00:52 --> Language Class Initialized
INFO - 2017-05-19 17:00:52 --> Loader Class Initialized
INFO - 2017-05-19 17:00:52 --> Helper loaded: url_helper
INFO - 2017-05-19 17:00:52 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:00:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:00:52 --> Controller Class Initialized
DEBUG - 2017-05-19 17:00:52 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:00:52 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/FluxoDigitacao]
INFO - 2017-05-19 17:00:52 --> Model Class Initialized
INFO - 2017-05-19 17:00:52 --> Database Driver Class Initialized
DEBUG - 2017-05-19 17:00:52 --> SELECT * FROM
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
							al.codlaudo,
							-- fnc_calc_data_entrega2( cst.dtprevisaoentrega, e.codgex, i.codinst ) as tempo,
							case when al.dataentrega is not null then 25 
						       WHEN CST.FM_PRONTOPARAENTREGA = 'S' THEN 29
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 24 and 
						            TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) <= 47 THEN 26
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 48 and 
						            TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) <= 71 THEN 27
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 72 THEN 28
						    ELSE TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) end as tempo,
							to_char( cst.dtprevisaoentrega , 'DD/MM/YYYY HH24:MI') dtprevisaoentrega,
				            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, al.Fm_Envelopado, al.Fm_Prontoparaentrega,
				            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
						   
				 from  	   consulta c
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
					       
				   where 	1=1
							and c.datahora >= to_date('19/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('19/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-19 17:00:52 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-19 17:00:52 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-19 17:00:52 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-19 17:00:52 --> Final output sent to browser
DEBUG - 2017-05-19 17:00:52 --> Total execution time: 0.6332
INFO - 2017-05-19 17:01:12 --> Config Class Initialized
INFO - 2017-05-19 17:01:12 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:12 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:12 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:12 --> URI Class Initialized
INFO - 2017-05-19 17:01:12 --> Router Class Initialized
INFO - 2017-05-19 17:01:12 --> Output Class Initialized
INFO - 2017-05-19 17:01:12 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:12 --> Input Class Initialized
INFO - 2017-05-19 17:01:12 --> Language Class Initialized
INFO - 2017-05-19 17:01:12 --> Loader Class Initialized
INFO - 2017-05-19 17:01:12 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:12 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:12 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:12 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:12 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:12 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/FluxoDigitacao]
INFO - 2017-05-19 17:01:12 --> Model Class Initialized
INFO - 2017-05-19 17:01:12 --> Database Driver Class Initialized
DEBUG - 2017-05-19 17:01:13 --> SELECT * FROM
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
							al.codlaudo,
							-- fnc_calc_data_entrega2( cst.dtprevisaoentrega, e.codgex, i.codinst ) as tempo,
							case when al.dataentrega is not null then 25 
						       WHEN CST.FM_PRONTOPARAENTREGA = 'S' THEN 29
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 24 and 
						            TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) <= 47 THEN 26
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 48 and 
						            TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) <= 71 THEN 27
						       WHEN TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) >= 72 THEN 28
						    ELSE TRUNC(fnc_calc_data_entrega2(CST.DTPREVISAOENTREGA,CST.CODGEX,c.codinst)/60) end as tempo,
							to_char( cst.dtprevisaoentrega , 'DD/MM/YYYY HH24:MI') dtprevisaoentrega,
				            al.FM_LAUDADO, al.FM_DIGITADO, al.FM_DITADO, al.FM_REVISADO, al.Fm_Envelopado, al.Fm_Prontoparaentrega,
				            al.FM_ASSINADO, al.FM_IMPRESSO, al.FM_LIBERADO, al.FM_ENTREGUE,al.FM_PENDENTE
						   
				 from  	   consulta c
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
					       
				   where 	1=1
							and c.datahora >= to_date('19/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('19/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-19 17:01:13 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-19 17:01:13 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-19 17:01:13 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-19 17:01:13 --> Final output sent to browser
DEBUG - 2017-05-19 17:01:13 --> Total execution time: 0.4720
INFO - 2017-05-19 17:01:18 --> Config Class Initialized
INFO - 2017-05-19 17:01:18 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:18 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:18 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:18 --> URI Class Initialized
INFO - 2017-05-19 17:01:18 --> Router Class Initialized
INFO - 2017-05-19 17:01:18 --> Output Class Initialized
INFO - 2017-05-19 17:01:18 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:18 --> Input Class Initialized
INFO - 2017-05-19 17:01:18 --> Language Class Initialized
INFO - 2017-05-19 17:01:18 --> Loader Class Initialized
INFO - 2017-05-19 17:01:18 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:18 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:18 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:18 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Editor/digitar/2213]
INFO - 2017-05-19 17:01:18 --> Model Class Initialized
INFO - 2017-05-19 17:01:18 --> Database Driver Class Initialized
ERROR - 2017-05-19 17:01:26 --> /usr/local/bin/unoconv.sh xhtml /var/www/html/temp/trash/.html /var/www/html/temp/trash/.rtf
INFO - 2017-05-19 17:01:26 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-19 17:01:26 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-19 17:01:26 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-19 17:01:26 --> Final output sent to browser
DEBUG - 2017-05-19 17:01:26 --> Total execution time: 7.8283
INFO - 2017-05-19 17:01:27 --> Config Class Initialized
INFO - 2017-05-19 17:01:27 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:27 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:27 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:27 --> URI Class Initialized
INFO - 2017-05-19 17:01:27 --> Router Class Initialized
INFO - 2017-05-19 17:01:27 --> Output Class Initialized
INFO - 2017-05-19 17:01:27 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:27 --> Input Class Initialized
INFO - 2017-05-19 17:01:27 --> Language Class Initialized
INFO - 2017-05-19 17:01:27 --> Loader Class Initialized
INFO - 2017-05-19 17:01:27 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:27 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:27 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:27 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Editor/verificaDitado/2213]
INFO - 2017-05-19 17:01:27 --> Model Class Initialized
INFO - 2017-05-19 17:01:27 --> Database Driver Class Initialized
INFO - 2017-05-19 17:01:35 --> Config Class Initialized
INFO - 2017-05-19 17:01:35 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:35 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:35 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:35 --> URI Class Initialized
INFO - 2017-05-19 17:01:35 --> Router Class Initialized
INFO - 2017-05-19 17:01:35 --> Output Class Initialized
INFO - 2017-05-19 17:01:35 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:35 --> Input Class Initialized
INFO - 2017-05-19 17:01:35 --> Language Class Initialized
INFO - 2017-05-19 17:01:35 --> Loader Class Initialized
INFO - 2017-05-19 17:01:35 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:35 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:35 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Editor/salvar/2213/digitar]
INFO - 2017-05-19 17:01:35 --> Model Class Initialized
INFO - 2017-05-19 17:01:35 --> Database Driver Class Initialized
DEBUG - 2017-05-19 17:01:35 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2213 returning laudoh into :temp
INFO - 2017-05-19 17:01:35 --> Final output sent to browser
DEBUG - 2017-05-19 17:01:35 --> Total execution time: 0.0817
INFO - 2017-05-19 17:01:35 --> Config Class Initialized
INFO - 2017-05-19 17:01:35 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:35 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:35 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:35 --> URI Class Initialized
INFO - 2017-05-19 17:01:35 --> Router Class Initialized
INFO - 2017-05-19 17:01:35 --> Output Class Initialized
INFO - 2017-05-19 17:01:35 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:35 --> Input Class Initialized
INFO - 2017-05-19 17:01:35 --> Language Class Initialized
INFO - 2017-05-19 17:01:35 --> Loader Class Initialized
INFO - 2017-05-19 17:01:35 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:35 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:35 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Editor/digitar/2213]
INFO - 2017-05-19 17:01:35 --> Model Class Initialized
INFO - 2017-05-19 17:01:35 --> Database Driver Class Initialized
INFO - 2017-05-19 17:01:35 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-19 17:01:35 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-19 17:01:35 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-19 17:01:35 --> Final output sent to browser
DEBUG - 2017-05-19 17:01:35 --> Total execution time: 0.0654
INFO - 2017-05-19 17:01:35 --> Config Class Initialized
INFO - 2017-05-19 17:01:35 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:35 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:35 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:35 --> URI Class Initialized
INFO - 2017-05-19 17:01:35 --> Router Class Initialized
INFO - 2017-05-19 17:01:35 --> Output Class Initialized
INFO - 2017-05-19 17:01:35 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:35 --> Input Class Initialized
INFO - 2017-05-19 17:01:35 --> Language Class Initialized
INFO - 2017-05-19 17:01:35 --> Loader Class Initialized
INFO - 2017-05-19 17:01:35 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:35 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:35 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Sys/mensagemClean]
INFO - 2017-05-19 17:01:35 --> Final output sent to browser
DEBUG - 2017-05-19 17:01:35 --> Total execution time: 0.0055
INFO - 2017-05-19 17:01:35 --> Config Class Initialized
INFO - 2017-05-19 17:01:35 --> Hooks Class Initialized
DEBUG - 2017-05-19 17:01:35 --> UTF-8 Support Enabled
INFO - 2017-05-19 17:01:35 --> Utf8 Class Initialized
INFO - 2017-05-19 17:01:35 --> URI Class Initialized
INFO - 2017-05-19 17:01:35 --> Router Class Initialized
INFO - 2017-05-19 17:01:35 --> Output Class Initialized
INFO - 2017-05-19 17:01:35 --> Security Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-19 17:01:35 --> Input Class Initialized
INFO - 2017-05-19 17:01:35 --> Language Class Initialized
INFO - 2017-05-19 17:01:35 --> Loader Class Initialized
INFO - 2017-05-19 17:01:35 --> Helper loaded: url_helper
INFO - 2017-05-19 17:01:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-19 17:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-19 17:01:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-19 17:01:35 --> Controller Class Initialized
DEBUG - 2017-05-19 17:01:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-19 17:01:35 --> User[CAROL], Session[7ac9ff885791db05ee3fa724f6910a1e], IP[192.168.0.19], Request[/Editor/verificaDitado/2213]
INFO - 2017-05-19 17:01:35 --> Model Class Initialized
INFO - 2017-05-19 17:01:35 --> Database Driver Class Initialized
