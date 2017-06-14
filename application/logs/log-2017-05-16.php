<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2017-05-16 09:50:49 --> Config Class Initialized
INFO - 2017-05-16 09:50:49 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:50:49 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:50:49 --> Utf8 Class Initialized
INFO - 2017-05-16 09:50:49 --> URI Class Initialized
INFO - 2017-05-16 09:50:49 --> Router Class Initialized
INFO - 2017-05-16 09:50:49 --> Output Class Initialized
INFO - 2017-05-16 09:50:49 --> Security Class Initialized
DEBUG - 2017-05-16 09:50:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:50:49 --> Input Class Initialized
INFO - 2017-05-16 09:50:49 --> Language Class Initialized
INFO - 2017-05-16 09:50:49 --> Loader Class Initialized
INFO - 2017-05-16 09:50:49 --> Helper loaded: url_helper
INFO - 2017-05-16 09:50:49 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:50:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:50:49 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:50:49 --> Controller Class Initialized
DEBUG - 2017-05-16 09:50:49 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:50:49 --> User[], Session[], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:50:49 --> Model Class Initialized
INFO - 2017-05-16 09:50:49 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:50:50 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:50:50 --> Final output sent to browser
DEBUG - 2017-05-16 09:50:50 --> Total execution time: 0.7513
INFO - 2017-05-16 09:50:50 --> Config Class Initialized
INFO - 2017-05-16 09:50:50 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:50:50 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:50:50 --> Utf8 Class Initialized
INFO - 2017-05-16 09:50:50 --> URI Class Initialized
DEBUG - 2017-05-16 09:50:50 --> No URI present. Default controller set.
INFO - 2017-05-16 09:50:50 --> Router Class Initialized
INFO - 2017-05-16 09:50:50 --> Output Class Initialized
INFO - 2017-05-16 09:50:50 --> Security Class Initialized
DEBUG - 2017-05-16 09:50:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:50:50 --> Input Class Initialized
INFO - 2017-05-16 09:50:50 --> Language Class Initialized
INFO - 2017-05-16 09:50:50 --> Loader Class Initialized
INFO - 2017-05-16 09:50:50 --> Helper loaded: url_helper
INFO - 2017-05-16 09:50:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:50:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:50:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:50:50 --> Controller Class Initialized
DEBUG - 2017-05-16 09:50:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:50:50 --> User[], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-05-16 09:50:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:50:50 --> Final output sent to browser
DEBUG - 2017-05-16 09:50:50 --> Total execution time: 0.0035
INFO - 2017-05-16 09:50:57 --> Config Class Initialized
INFO - 2017-05-16 09:50:57 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:50:57 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:50:57 --> Utf8 Class Initialized
INFO - 2017-05-16 09:50:57 --> URI Class Initialized
INFO - 2017-05-16 09:50:57 --> Router Class Initialized
INFO - 2017-05-16 09:50:57 --> Output Class Initialized
INFO - 2017-05-16 09:50:57 --> Security Class Initialized
DEBUG - 2017-05-16 09:50:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:50:57 --> Input Class Initialized
INFO - 2017-05-16 09:50:57 --> Language Class Initialized
INFO - 2017-05-16 09:50:57 --> Loader Class Initialized
INFO - 2017-05-16 09:50:57 --> Helper loaded: url_helper
INFO - 2017-05-16 09:50:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:50:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:50:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:50:57 --> Controller Class Initialized
DEBUG - 2017-05-16 09:50:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:50:57 --> User[], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-05-16 09:50:57 --> Model Class Initialized
INFO - 2017-05-16 09:50:57 --> Database Driver Class Initialized
INFO - 2017-05-16 09:50:57 --> Final output sent to browser
DEBUG - 2017-05-16 09:50:57 --> Total execution time: 0.2342
INFO - 2017-05-16 09:50:57 --> Config Class Initialized
INFO - 2017-05-16 09:50:57 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:50:57 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:50:57 --> Utf8 Class Initialized
INFO - 2017-05-16 09:50:57 --> URI Class Initialized
INFO - 2017-05-16 09:50:57 --> Router Class Initialized
INFO - 2017-05-16 09:50:57 --> Output Class Initialized
INFO - 2017-05-16 09:50:57 --> Security Class Initialized
DEBUG - 2017-05-16 09:50:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:50:57 --> Input Class Initialized
INFO - 2017-05-16 09:50:57 --> Language Class Initialized
INFO - 2017-05-16 09:50:57 --> Loader Class Initialized
INFO - 2017-05-16 09:50:57 --> Helper loaded: url_helper
INFO - 2017-05-16 09:50:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:50:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:50:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:50:57 --> Controller Class Initialized
DEBUG - 2017-05-16 09:50:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:50:57 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:50:57 --> Model Class Initialized
INFO - 2017-05-16 09:50:57 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:50:57 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:50:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:50:57 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:50:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:50:57 --> Final output sent to browser
DEBUG - 2017-05-16 09:50:57 --> Total execution time: 0.0447
INFO - 2017-05-16 09:51:28 --> Config Class Initialized
INFO - 2017-05-16 09:51:28 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:51:28 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:51:28 --> Utf8 Class Initialized
INFO - 2017-05-16 09:51:28 --> URI Class Initialized
INFO - 2017-05-16 09:51:28 --> Router Class Initialized
INFO - 2017-05-16 09:51:28 --> Output Class Initialized
INFO - 2017-05-16 09:51:28 --> Security Class Initialized
DEBUG - 2017-05-16 09:51:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:51:28 --> Input Class Initialized
INFO - 2017-05-16 09:51:28 --> Language Class Initialized
INFO - 2017-05-16 09:51:28 --> Loader Class Initialized
INFO - 2017-05-16 09:51:28 --> Helper loaded: url_helper
INFO - 2017-05-16 09:51:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:51:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:51:28 --> Controller Class Initialized
DEBUG - 2017-05-16 09:51:28 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:51:28 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2179]
INFO - 2017-05-16 09:51:28 --> Model Class Initialized
INFO - 2017-05-16 09:51:28 --> Database Driver Class Initialized
INFO - 2017-05-16 09:51:29 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:51:29 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 09:51:29 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:51:29 --> Final output sent to browser
DEBUG - 2017-05-16 09:51:29 --> Total execution time: 0.3548
INFO - 2017-05-16 09:51:29 --> Config Class Initialized
INFO - 2017-05-16 09:51:29 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:51:29 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:51:29 --> Utf8 Class Initialized
INFO - 2017-05-16 09:51:29 --> URI Class Initialized
INFO - 2017-05-16 09:51:29 --> Router Class Initialized
INFO - 2017-05-16 09:51:29 --> Output Class Initialized
INFO - 2017-05-16 09:51:29 --> Security Class Initialized
DEBUG - 2017-05-16 09:51:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:51:29 --> Input Class Initialized
INFO - 2017-05-16 09:51:29 --> Language Class Initialized
INFO - 2017-05-16 09:51:29 --> Loader Class Initialized
INFO - 2017-05-16 09:51:29 --> Helper loaded: url_helper
INFO - 2017-05-16 09:51:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:51:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:51:29 --> Controller Class Initialized
DEBUG - 2017-05-16 09:51:29 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:51:29 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2179]
INFO - 2017-05-16 09:51:29 --> Model Class Initialized
INFO - 2017-05-16 09:51:29 --> Database Driver Class Initialized
INFO - 2017-05-16 09:54:04 --> Config Class Initialized
INFO - 2017-05-16 09:54:04 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:54:04 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:54:04 --> Utf8 Class Initialized
INFO - 2017-05-16 09:54:04 --> URI Class Initialized
INFO - 2017-05-16 09:54:04 --> Router Class Initialized
INFO - 2017-05-16 09:54:04 --> Output Class Initialized
INFO - 2017-05-16 09:54:04 --> Security Class Initialized
DEBUG - 2017-05-16 09:54:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:54:04 --> Input Class Initialized
INFO - 2017-05-16 09:54:04 --> Language Class Initialized
INFO - 2017-05-16 09:54:04 --> Loader Class Initialized
INFO - 2017-05-16 09:54:04 --> Helper loaded: url_helper
INFO - 2017-05-16 09:54:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:54:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:54:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:54:04 --> Controller Class Initialized
DEBUG - 2017-05-16 09:54:04 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:54:04 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/salvar/2179/digitar]
INFO - 2017-05-16 09:54:04 --> Model Class Initialized
INFO - 2017-05-16 09:54:04 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:54:05 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2179 returning laudoh into :temp
INFO - 2017-05-16 09:54:05 --> Final output sent to browser
DEBUG - 2017-05-16 09:54:05 --> Total execution time: 0.5820
INFO - 2017-05-16 09:54:05 --> Config Class Initialized
INFO - 2017-05-16 09:54:05 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:54:05 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:54:05 --> Utf8 Class Initialized
INFO - 2017-05-16 09:54:05 --> URI Class Initialized
INFO - 2017-05-16 09:54:05 --> Router Class Initialized
INFO - 2017-05-16 09:54:05 --> Output Class Initialized
INFO - 2017-05-16 09:54:05 --> Security Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:54:05 --> Input Class Initialized
INFO - 2017-05-16 09:54:05 --> Language Class Initialized
INFO - 2017-05-16 09:54:05 --> Loader Class Initialized
INFO - 2017-05-16 09:54:05 --> Helper loaded: url_helper
INFO - 2017-05-16 09:54:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:54:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:54:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:54:05 --> Controller Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:54:05 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2179]
INFO - 2017-05-16 09:54:05 --> Model Class Initialized
INFO - 2017-05-16 09:54:05 --> Database Driver Class Initialized
INFO - 2017-05-16 09:54:05 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:54:05 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 09:54:05 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:54:05 --> Final output sent to browser
DEBUG - 2017-05-16 09:54:05 --> Total execution time: 0.0598
INFO - 2017-05-16 09:54:05 --> Config Class Initialized
INFO - 2017-05-16 09:54:05 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:54:05 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:54:05 --> Utf8 Class Initialized
INFO - 2017-05-16 09:54:05 --> URI Class Initialized
INFO - 2017-05-16 09:54:05 --> Router Class Initialized
INFO - 2017-05-16 09:54:05 --> Output Class Initialized
INFO - 2017-05-16 09:54:05 --> Security Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:54:05 --> Input Class Initialized
INFO - 2017-05-16 09:54:05 --> Language Class Initialized
INFO - 2017-05-16 09:54:05 --> Loader Class Initialized
INFO - 2017-05-16 09:54:05 --> Helper loaded: url_helper
INFO - 2017-05-16 09:54:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:54:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:54:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:54:05 --> Controller Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:54:05 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 09:54:05 --> Final output sent to browser
DEBUG - 2017-05-16 09:54:05 --> Total execution time: 0.0016
INFO - 2017-05-16 09:54:05 --> Config Class Initialized
INFO - 2017-05-16 09:54:05 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:54:05 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:54:05 --> Utf8 Class Initialized
INFO - 2017-05-16 09:54:05 --> URI Class Initialized
INFO - 2017-05-16 09:54:05 --> Router Class Initialized
INFO - 2017-05-16 09:54:05 --> Output Class Initialized
INFO - 2017-05-16 09:54:05 --> Security Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:54:05 --> Input Class Initialized
INFO - 2017-05-16 09:54:05 --> Language Class Initialized
INFO - 2017-05-16 09:54:05 --> Loader Class Initialized
INFO - 2017-05-16 09:54:05 --> Helper loaded: url_helper
INFO - 2017-05-16 09:54:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:54:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:54:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:54:05 --> Controller Class Initialized
DEBUG - 2017-05-16 09:54:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:54:05 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2179]
INFO - 2017-05-16 09:54:05 --> Model Class Initialized
INFO - 2017-05-16 09:54:05 --> Database Driver Class Initialized
INFO - 2017-05-16 09:54:16 --> Config Class Initialized
INFO - 2017-05-16 09:54:16 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:54:16 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:54:16 --> Utf8 Class Initialized
INFO - 2017-05-16 09:54:16 --> URI Class Initialized
INFO - 2017-05-16 09:54:16 --> Router Class Initialized
INFO - 2017-05-16 09:54:16 --> Output Class Initialized
INFO - 2017-05-16 09:54:16 --> Security Class Initialized
DEBUG - 2017-05-16 09:54:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:54:16 --> Input Class Initialized
INFO - 2017-05-16 09:54:16 --> Language Class Initialized
INFO - 2017-05-16 09:54:16 --> Loader Class Initialized
INFO - 2017-05-16 09:54:16 --> Helper loaded: url_helper
INFO - 2017-05-16 09:54:16 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:54:16 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:54:16 --> Controller Class Initialized
DEBUG - 2017-05-16 09:54:16 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:54:16 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:54:16 --> Model Class Initialized
INFO - 2017-05-16 09:54:16 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:54:16 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:54:16 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:54:16 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:54:16 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:54:16 --> Final output sent to browser
DEBUG - 2017-05-16 09:54:16 --> Total execution time: 0.2965
INFO - 2017-05-16 09:55:50 --> Config Class Initialized
INFO - 2017-05-16 09:55:50 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:55:50 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:55:50 --> Utf8 Class Initialized
INFO - 2017-05-16 09:55:50 --> URI Class Initialized
INFO - 2017-05-16 09:55:50 --> Router Class Initialized
INFO - 2017-05-16 09:55:50 --> Output Class Initialized
INFO - 2017-05-16 09:55:50 --> Security Class Initialized
DEBUG - 2017-05-16 09:55:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:55:50 --> Input Class Initialized
INFO - 2017-05-16 09:55:50 --> Language Class Initialized
INFO - 2017-05-16 09:55:50 --> Loader Class Initialized
INFO - 2017-05-16 09:55:50 --> Helper loaded: url_helper
INFO - 2017-05-16 09:55:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:55:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:55:50 --> Controller Class Initialized
DEBUG - 2017-05-16 09:55:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:55:50 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:55:50 --> Model Class Initialized
INFO - 2017-05-16 09:55:50 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:55:50 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:55:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:55:50 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:55:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:55:50 --> Final output sent to browser
DEBUG - 2017-05-16 09:55:50 --> Total execution time: 0.3385
INFO - 2017-05-16 09:55:51 --> Config Class Initialized
INFO - 2017-05-16 09:55:51 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:55:51 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:55:51 --> Utf8 Class Initialized
INFO - 2017-05-16 09:55:51 --> URI Class Initialized
INFO - 2017-05-16 09:55:51 --> Router Class Initialized
INFO - 2017-05-16 09:55:51 --> Output Class Initialized
INFO - 2017-05-16 09:55:51 --> Security Class Initialized
DEBUG - 2017-05-16 09:55:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:55:51 --> Input Class Initialized
INFO - 2017-05-16 09:55:51 --> Language Class Initialized
INFO - 2017-05-16 09:55:51 --> Loader Class Initialized
INFO - 2017-05-16 09:55:51 --> Helper loaded: url_helper
INFO - 2017-05-16 09:55:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:55:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:55:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:55:51 --> Controller Class Initialized
DEBUG - 2017-05-16 09:55:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:55:51 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:55:51 --> Model Class Initialized
INFO - 2017-05-16 09:55:51 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:55:51 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:55:51 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:55:51 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:55:51 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:55:51 --> Final output sent to browser
DEBUG - 2017-05-16 09:55:51 --> Total execution time: 0.2368
INFO - 2017-05-16 09:56:16 --> Config Class Initialized
INFO - 2017-05-16 09:56:16 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:56:16 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:56:16 --> Utf8 Class Initialized
INFO - 2017-05-16 09:56:16 --> URI Class Initialized
INFO - 2017-05-16 09:56:16 --> Router Class Initialized
INFO - 2017-05-16 09:56:16 --> Output Class Initialized
INFO - 2017-05-16 09:56:16 --> Security Class Initialized
DEBUG - 2017-05-16 09:56:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:56:16 --> Input Class Initialized
INFO - 2017-05-16 09:56:16 --> Language Class Initialized
INFO - 2017-05-16 09:56:16 --> Loader Class Initialized
INFO - 2017-05-16 09:56:16 --> Helper loaded: url_helper
INFO - 2017-05-16 09:56:16 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:56:16 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:56:16 --> Controller Class Initialized
DEBUG - 2017-05-16 09:56:16 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:56:16 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/visualizar/2182]
INFO - 2017-05-16 09:56:16 --> Model Class Initialized
INFO - 2017-05-16 09:56:16 --> Database Driver Class Initialized
INFO - 2017-05-16 09:56:16 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:56:16 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 09:56:16 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:56:16 --> Final output sent to browser
DEBUG - 2017-05-16 09:56:16 --> Total execution time: 0.2977
INFO - 2017-05-16 09:56:17 --> Config Class Initialized
INFO - 2017-05-16 09:56:17 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:56:17 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:56:17 --> Utf8 Class Initialized
INFO - 2017-05-16 09:56:17 --> URI Class Initialized
INFO - 2017-05-16 09:56:17 --> Router Class Initialized
INFO - 2017-05-16 09:56:17 --> Output Class Initialized
INFO - 2017-05-16 09:56:17 --> Security Class Initialized
DEBUG - 2017-05-16 09:56:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:56:17 --> Input Class Initialized
INFO - 2017-05-16 09:56:17 --> Language Class Initialized
INFO - 2017-05-16 09:56:17 --> Loader Class Initialized
INFO - 2017-05-16 09:56:17 --> Helper loaded: url_helper
INFO - 2017-05-16 09:56:17 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:56:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:56:17 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:56:17 --> Controller Class Initialized
DEBUG - 2017-05-16 09:56:17 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:56:17 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2182]
INFO - 2017-05-16 09:56:17 --> Model Class Initialized
INFO - 2017-05-16 09:56:17 --> Database Driver Class Initialized
INFO - 2017-05-16 09:56:58 --> Config Class Initialized
INFO - 2017-05-16 09:56:58 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:56:58 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:56:58 --> Utf8 Class Initialized
INFO - 2017-05-16 09:56:58 --> URI Class Initialized
INFO - 2017-05-16 09:56:58 --> Router Class Initialized
INFO - 2017-05-16 09:56:58 --> Output Class Initialized
INFO - 2017-05-16 09:56:58 --> Security Class Initialized
DEBUG - 2017-05-16 09:56:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:56:58 --> Input Class Initialized
INFO - 2017-05-16 09:56:58 --> Language Class Initialized
INFO - 2017-05-16 09:56:58 --> Loader Class Initialized
INFO - 2017-05-16 09:56:58 --> Helper loaded: url_helper
INFO - 2017-05-16 09:56:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:56:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:56:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:56:58 --> Controller Class Initialized
DEBUG - 2017-05-16 09:56:58 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:56:58 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 09:56:58 --> Model Class Initialized
INFO - 2017-05-16 09:56:58 --> Database Driver Class Initialized
DEBUG - 2017-05-16 09:56:58 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 09:56:58 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:56:58 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 09:56:58 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:56:58 --> Final output sent to browser
DEBUG - 2017-05-16 09:56:58 --> Total execution time: 0.2759
INFO - 2017-05-16 09:57:09 --> Config Class Initialized
INFO - 2017-05-16 09:57:09 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:57:09 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:57:09 --> Utf8 Class Initialized
INFO - 2017-05-16 09:57:09 --> URI Class Initialized
INFO - 2017-05-16 09:57:09 --> Router Class Initialized
INFO - 2017-05-16 09:57:09 --> Output Class Initialized
INFO - 2017-05-16 09:57:09 --> Security Class Initialized
DEBUG - 2017-05-16 09:57:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:57:09 --> Input Class Initialized
INFO - 2017-05-16 09:57:09 --> Language Class Initialized
INFO - 2017-05-16 09:57:09 --> Loader Class Initialized
INFO - 2017-05-16 09:57:09 --> Helper loaded: url_helper
INFO - 2017-05-16 09:57:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:57:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:57:09 --> Controller Class Initialized
DEBUG - 2017-05-16 09:57:09 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:57:09 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2182]
INFO - 2017-05-16 09:57:09 --> Model Class Initialized
INFO - 2017-05-16 09:57:09 --> Database Driver Class Initialized
INFO - 2017-05-16 09:57:09 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 09:57:09 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 09:57:09 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 09:57:09 --> Final output sent to browser
DEBUG - 2017-05-16 09:57:09 --> Total execution time: 0.3919
INFO - 2017-05-16 09:57:09 --> Config Class Initialized
INFO - 2017-05-16 09:57:09 --> Hooks Class Initialized
DEBUG - 2017-05-16 09:57:09 --> UTF-8 Support Enabled
INFO - 2017-05-16 09:57:09 --> Utf8 Class Initialized
INFO - 2017-05-16 09:57:09 --> URI Class Initialized
INFO - 2017-05-16 09:57:09 --> Router Class Initialized
INFO - 2017-05-16 09:57:09 --> Output Class Initialized
INFO - 2017-05-16 09:57:09 --> Security Class Initialized
DEBUG - 2017-05-16 09:57:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 09:57:09 --> Input Class Initialized
INFO - 2017-05-16 09:57:09 --> Language Class Initialized
INFO - 2017-05-16 09:57:09 --> Loader Class Initialized
INFO - 2017-05-16 09:57:09 --> Helper loaded: url_helper
INFO - 2017-05-16 09:57:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 09:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 09:57:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 09:57:09 --> Controller Class Initialized
DEBUG - 2017-05-16 09:57:09 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 09:57:09 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2182]
INFO - 2017-05-16 09:57:09 --> Model Class Initialized
INFO - 2017-05-16 09:57:09 --> Database Driver Class Initialized
INFO - 2017-05-16 10:10:52 --> Config Class Initialized
INFO - 2017-05-16 10:10:52 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:10:52 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:10:52 --> Utf8 Class Initialized
INFO - 2017-05-16 10:10:52 --> URI Class Initialized
INFO - 2017-05-16 10:10:52 --> Router Class Initialized
INFO - 2017-05-16 10:10:52 --> Output Class Initialized
INFO - 2017-05-16 10:10:52 --> Security Class Initialized
DEBUG - 2017-05-16 10:10:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:10:52 --> Input Class Initialized
INFO - 2017-05-16 10:10:52 --> Language Class Initialized
INFO - 2017-05-16 10:10:52 --> Loader Class Initialized
INFO - 2017-05-16 10:10:52 --> Helper loaded: url_helper
INFO - 2017-05-16 10:10:52 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:10:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:10:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:10:52 --> Controller Class Initialized
DEBUG - 2017-05-16 10:10:52 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:10:52 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/listarTextoPadrao/2182/digitar]
INFO - 2017-05-16 10:10:52 --> Model Class Initialized
INFO - 2017-05-16 10:10:52 --> Database Driver Class Initialized
INFO - 2017-05-16 10:10:52 --> Final output sent to browser
DEBUG - 2017-05-16 10:10:52 --> Total execution time: 0.0681
INFO - 2017-05-16 10:10:54 --> Config Class Initialized
INFO - 2017-05-16 10:10:54 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:10:54 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:10:54 --> Utf8 Class Initialized
INFO - 2017-05-16 10:10:54 --> URI Class Initialized
INFO - 2017-05-16 10:10:54 --> Router Class Initialized
INFO - 2017-05-16 10:10:54 --> Output Class Initialized
INFO - 2017-05-16 10:10:54 --> Security Class Initialized
DEBUG - 2017-05-16 10:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:10:54 --> Input Class Initialized
INFO - 2017-05-16 10:10:54 --> Language Class Initialized
INFO - 2017-05-16 10:10:54 --> Loader Class Initialized
INFO - 2017-05-16 10:10:54 --> Helper loaded: url_helper
INFO - 2017-05-16 10:10:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:10:54 --> Controller Class Initialized
DEBUG - 2017-05-16 10:10:54 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:10:54 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/textoPadrao/1097]
INFO - 2017-05-16 10:10:54 --> Model Class Initialized
INFO - 2017-05-16 10:10:54 --> Database Driver Class Initialized
ERROR - 2017-05-16 10:10:56 --> /usr/local/bin/unoconv.sh xhtml /var/www/html/temp/trash/9c5006b1b4ce44325f1638e5c615471e.html /var/www/html/temp/trash/9c5006b1b4ce44325f1638e5c615471e.rtf
INFO - 2017-05-16 10:10:56 --> Final output sent to browser
DEBUG - 2017-05-16 10:10:56 --> Total execution time: 2.5384
INFO - 2017-05-16 10:11:20 --> Config Class Initialized
INFO - 2017-05-16 10:11:20 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:11:20 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:11:20 --> Utf8 Class Initialized
INFO - 2017-05-16 10:11:20 --> URI Class Initialized
INFO - 2017-05-16 10:11:20 --> Router Class Initialized
INFO - 2017-05-16 10:11:20 --> Output Class Initialized
INFO - 2017-05-16 10:11:20 --> Security Class Initialized
DEBUG - 2017-05-16 10:11:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:11:20 --> Input Class Initialized
INFO - 2017-05-16 10:11:20 --> Language Class Initialized
INFO - 2017-05-16 10:11:20 --> Loader Class Initialized
INFO - 2017-05-16 10:11:20 --> Helper loaded: url_helper
INFO - 2017-05-16 10:11:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:11:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:11:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:11:20 --> Controller Class Initialized
DEBUG - 2017-05-16 10:11:20 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:11:20 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 10:11:20 --> Final output sent to browser
DEBUG - 2017-05-16 10:11:20 --> Total execution time: 0.0036
INFO - 2017-05-16 10:11:45 --> Config Class Initialized
INFO - 2017-05-16 10:11:45 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:11:45 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:11:45 --> Utf8 Class Initialized
INFO - 2017-05-16 10:11:45 --> URI Class Initialized
INFO - 2017-05-16 10:11:45 --> Router Class Initialized
INFO - 2017-05-16 10:11:45 --> Output Class Initialized
INFO - 2017-05-16 10:11:45 --> Security Class Initialized
DEBUG - 2017-05-16 10:11:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:11:45 --> Input Class Initialized
INFO - 2017-05-16 10:11:45 --> Language Class Initialized
INFO - 2017-05-16 10:11:45 --> Loader Class Initialized
INFO - 2017-05-16 10:11:45 --> Helper loaded: url_helper
INFO - 2017-05-16 10:11:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:11:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:11:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:11:45 --> Controller Class Initialized
DEBUG - 2017-05-16 10:11:45 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:11:45 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/salvar/2182/digitar]
INFO - 2017-05-16 10:11:45 --> Model Class Initialized
INFO - 2017-05-16 10:11:45 --> Database Driver Class Initialized
DEBUG - 2017-05-16 10:11:45 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2182 returning laudoh into :temp
INFO - 2017-05-16 10:11:45 --> Final output sent to browser
DEBUG - 2017-05-16 10:11:45 --> Total execution time: 0.6582
INFO - 2017-05-16 10:11:45 --> Config Class Initialized
INFO - 2017-05-16 10:11:45 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:11:45 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:11:45 --> Utf8 Class Initialized
INFO - 2017-05-16 10:11:45 --> URI Class Initialized
INFO - 2017-05-16 10:11:45 --> Router Class Initialized
INFO - 2017-05-16 10:11:45 --> Output Class Initialized
INFO - 2017-05-16 10:11:45 --> Security Class Initialized
DEBUG - 2017-05-16 10:11:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:11:45 --> Input Class Initialized
INFO - 2017-05-16 10:11:45 --> Language Class Initialized
INFO - 2017-05-16 10:11:45 --> Loader Class Initialized
INFO - 2017-05-16 10:11:45 --> Helper loaded: url_helper
INFO - 2017-05-16 10:11:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:11:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:11:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:11:45 --> Controller Class Initialized
DEBUG - 2017-05-16 10:11:45 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:11:45 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2182]
INFO - 2017-05-16 10:11:45 --> Model Class Initialized
INFO - 2017-05-16 10:11:45 --> Database Driver Class Initialized
INFO - 2017-05-16 10:11:45 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 10:11:45 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 10:11:45 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 10:11:45 --> Final output sent to browser
DEBUG - 2017-05-16 10:11:45 --> Total execution time: 0.0677
INFO - 2017-05-16 10:11:46 --> Config Class Initialized
INFO - 2017-05-16 10:11:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:11:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:11:46 --> Utf8 Class Initialized
INFO - 2017-05-16 10:11:46 --> URI Class Initialized
INFO - 2017-05-16 10:11:46 --> Router Class Initialized
INFO - 2017-05-16 10:11:46 --> Output Class Initialized
INFO - 2017-05-16 10:11:46 --> Security Class Initialized
DEBUG - 2017-05-16 10:11:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:11:46 --> Input Class Initialized
INFO - 2017-05-16 10:11:46 --> Language Class Initialized
INFO - 2017-05-16 10:11:46 --> Loader Class Initialized
INFO - 2017-05-16 10:11:46 --> Helper loaded: url_helper
INFO - 2017-05-16 10:11:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:11:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:11:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:11:46 --> Controller Class Initialized
DEBUG - 2017-05-16 10:11:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:11:46 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 10:11:46 --> Final output sent to browser
DEBUG - 2017-05-16 10:11:46 --> Total execution time: 0.0015
INFO - 2017-05-16 10:11:46 --> Config Class Initialized
INFO - 2017-05-16 10:11:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:11:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:11:46 --> Utf8 Class Initialized
INFO - 2017-05-16 10:11:46 --> URI Class Initialized
INFO - 2017-05-16 10:11:46 --> Router Class Initialized
INFO - 2017-05-16 10:11:46 --> Output Class Initialized
INFO - 2017-05-16 10:11:46 --> Security Class Initialized
DEBUG - 2017-05-16 10:11:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:11:46 --> Input Class Initialized
INFO - 2017-05-16 10:11:46 --> Language Class Initialized
INFO - 2017-05-16 10:11:46 --> Loader Class Initialized
INFO - 2017-05-16 10:11:46 --> Helper loaded: url_helper
INFO - 2017-05-16 10:11:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:11:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:11:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:11:46 --> Controller Class Initialized
DEBUG - 2017-05-16 10:11:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:11:46 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2182]
INFO - 2017-05-16 10:11:46 --> Model Class Initialized
INFO - 2017-05-16 10:11:46 --> Database Driver Class Initialized
INFO - 2017-05-16 10:14:32 --> Config Class Initialized
INFO - 2017-05-16 10:14:32 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:14:32 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:14:32 --> Utf8 Class Initialized
INFO - 2017-05-16 10:14:32 --> URI Class Initialized
INFO - 2017-05-16 10:14:32 --> Router Class Initialized
INFO - 2017-05-16 10:14:32 --> Output Class Initialized
INFO - 2017-05-16 10:14:32 --> Security Class Initialized
DEBUG - 2017-05-16 10:14:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:14:32 --> Input Class Initialized
INFO - 2017-05-16 10:14:32 --> Language Class Initialized
INFO - 2017-05-16 10:14:32 --> Loader Class Initialized
INFO - 2017-05-16 10:14:32 --> Helper loaded: url_helper
INFO - 2017-05-16 10:14:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:14:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:14:32 --> Controller Class Initialized
DEBUG - 2017-05-16 10:14:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:14:32 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 10:14:32 --> Model Class Initialized
INFO - 2017-05-16 10:14:32 --> Database Driver Class Initialized
DEBUG - 2017-05-16 10:14:32 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 10:14:32 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 10:14:32 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 10:14:32 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 10:14:32 --> Final output sent to browser
DEBUG - 2017-05-16 10:14:32 --> Total execution time: 0.0397
INFO - 2017-05-16 10:30:04 --> Config Class Initialized
INFO - 2017-05-16 10:30:04 --> Hooks Class Initialized
DEBUG - 2017-05-16 10:30:04 --> UTF-8 Support Enabled
INFO - 2017-05-16 10:30:04 --> Utf8 Class Initialized
INFO - 2017-05-16 10:30:04 --> URI Class Initialized
INFO - 2017-05-16 10:30:04 --> Router Class Initialized
INFO - 2017-05-16 10:30:04 --> Output Class Initialized
INFO - 2017-05-16 10:30:04 --> Security Class Initialized
DEBUG - 2017-05-16 10:30:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 10:30:04 --> Input Class Initialized
INFO - 2017-05-16 10:30:04 --> Language Class Initialized
INFO - 2017-05-16 10:30:04 --> Loader Class Initialized
INFO - 2017-05-16 10:30:04 --> Helper loaded: url_helper
INFO - 2017-05-16 10:30:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 10:30:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 10:30:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 10:30:04 --> Controller Class Initialized
DEBUG - 2017-05-16 10:30:04 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 10:30:04 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao/]
INFO - 2017-05-16 10:30:04 --> Model Class Initialized
INFO - 2017-05-16 10:30:04 --> Database Driver Class Initialized
DEBUG - 2017-05-16 10:30:04 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-16 10:30:04 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 10:30:04 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 10:30:04 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 10:30:04 --> Final output sent to browser
DEBUG - 2017-05-16 10:30:04 --> Total execution time: 0.3774
INFO - 2017-05-16 11:23:47 --> Config Class Initialized
INFO - 2017-05-16 11:23:47 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:23:47 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:23:47 --> Utf8 Class Initialized
INFO - 2017-05-16 11:23:47 --> URI Class Initialized
INFO - 2017-05-16 11:23:47 --> Router Class Initialized
INFO - 2017-05-16 11:23:47 --> Output Class Initialized
INFO - 2017-05-16 11:23:47 --> Security Class Initialized
DEBUG - 2017-05-16 11:23:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:23:47 --> Input Class Initialized
INFO - 2017-05-16 11:23:47 --> Language Class Initialized
INFO - 2017-05-16 11:23:47 --> Loader Class Initialized
INFO - 2017-05-16 11:23:47 --> Helper loaded: url_helper
INFO - 2017-05-16 11:23:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:23:47 --> Controller Class Initialized
DEBUG - 2017-05-16 11:23:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:23:47 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 11:23:47 --> Model Class Initialized
INFO - 2017-05-16 11:23:47 --> Database Driver Class Initialized
DEBUG - 2017-05-16 11:23:48 --> SELECT * FROM
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
							and c.datahora >= to_date('16/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-16 11:23:48 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:23:48 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 11:23:48 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:23:48 --> Final output sent to browser
DEBUG - 2017-05-16 11:23:48 --> Total execution time: 0.7851
INFO - 2017-05-16 11:24:00 --> Config Class Initialized
INFO - 2017-05-16 11:24:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:24:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:24:00 --> Utf8 Class Initialized
INFO - 2017-05-16 11:24:00 --> URI Class Initialized
INFO - 2017-05-16 11:24:00 --> Router Class Initialized
INFO - 2017-05-16 11:24:00 --> Output Class Initialized
INFO - 2017-05-16 11:24:00 --> Security Class Initialized
DEBUG - 2017-05-16 11:24:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:24:00 --> Input Class Initialized
INFO - 2017-05-16 11:24:00 --> Language Class Initialized
INFO - 2017-05-16 11:24:00 --> Loader Class Initialized
INFO - 2017-05-16 11:24:00 --> Helper loaded: url_helper
INFO - 2017-05-16 11:24:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:24:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:24:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:24:00 --> Controller Class Initialized
DEBUG - 2017-05-16 11:24:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:24:00 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 11:24:00 --> Model Class Initialized
INFO - 2017-05-16 11:24:00 --> Database Driver Class Initialized
DEBUG - 2017-05-16 11:24:01 --> SELECT * FROM
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
							and c.datahora >= to_date('01/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-16 11:24:01 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:24:01 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 11:24:01 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:24:01 --> Final output sent to browser
DEBUG - 2017-05-16 11:24:01 --> Total execution time: 0.7634
INFO - 2017-05-16 11:33:29 --> Config Class Initialized
INFO - 2017-05-16 11:33:29 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:33:29 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:33:29 --> Utf8 Class Initialized
INFO - 2017-05-16 11:33:29 --> URI Class Initialized
INFO - 2017-05-16 11:33:29 --> Router Class Initialized
INFO - 2017-05-16 11:33:29 --> Output Class Initialized
INFO - 2017-05-16 11:33:29 --> Security Class Initialized
DEBUG - 2017-05-16 11:33:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:33:29 --> Input Class Initialized
INFO - 2017-05-16 11:33:29 --> Language Class Initialized
INFO - 2017-05-16 11:33:29 --> Loader Class Initialized
INFO - 2017-05-16 11:33:29 --> Helper loaded: url_helper
INFO - 2017-05-16 11:33:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:33:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:33:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:33:29 --> Controller Class Initialized
DEBUG - 2017-05-16 11:33:29 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:33:29 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 11:33:29 --> Model Class Initialized
INFO - 2017-05-16 11:33:29 --> Database Driver Class Initialized
INFO - 2017-05-16 11:33:30 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:33:30 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 11:33:30 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:33:30 --> Final output sent to browser
DEBUG - 2017-05-16 11:33:30 --> Total execution time: 0.2719
INFO - 2017-05-16 11:33:30 --> Config Class Initialized
INFO - 2017-05-16 11:33:30 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:33:30 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:33:30 --> Utf8 Class Initialized
INFO - 2017-05-16 11:33:30 --> URI Class Initialized
INFO - 2017-05-16 11:33:30 --> Router Class Initialized
INFO - 2017-05-16 11:33:30 --> Output Class Initialized
INFO - 2017-05-16 11:33:30 --> Security Class Initialized
DEBUG - 2017-05-16 11:33:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:33:30 --> Input Class Initialized
INFO - 2017-05-16 11:33:30 --> Language Class Initialized
INFO - 2017-05-16 11:33:30 --> Loader Class Initialized
INFO - 2017-05-16 11:33:30 --> Helper loaded: url_helper
INFO - 2017-05-16 11:33:30 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:33:30 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:33:30 --> Controller Class Initialized
DEBUG - 2017-05-16 11:33:30 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:33:30 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2170]
INFO - 2017-05-16 11:33:30 --> Model Class Initialized
INFO - 2017-05-16 11:33:30 --> Database Driver Class Initialized
INFO - 2017-05-16 11:33:43 --> Config Class Initialized
INFO - 2017-05-16 11:33:43 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:33:43 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:33:43 --> Utf8 Class Initialized
INFO - 2017-05-16 11:33:43 --> URI Class Initialized
INFO - 2017-05-16 11:33:43 --> Router Class Initialized
INFO - 2017-05-16 11:33:43 --> Output Class Initialized
INFO - 2017-05-16 11:33:44 --> Security Class Initialized
DEBUG - 2017-05-16 11:33:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:33:44 --> Input Class Initialized
INFO - 2017-05-16 11:33:44 --> Language Class Initialized
INFO - 2017-05-16 11:33:44 --> Loader Class Initialized
INFO - 2017-05-16 11:33:44 --> Helper loaded: url_helper
INFO - 2017-05-16 11:33:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:33:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:33:44 --> Controller Class Initialized
DEBUG - 2017-05-16 11:33:44 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:33:44 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/listarTextoPadrao/2170/digitar]
INFO - 2017-05-16 11:33:44 --> Model Class Initialized
INFO - 2017-05-16 11:33:44 --> Database Driver Class Initialized
INFO - 2017-05-16 11:33:44 --> Final output sent to browser
DEBUG - 2017-05-16 11:33:44 --> Total execution time: 0.4183
INFO - 2017-05-16 11:33:48 --> Config Class Initialized
INFO - 2017-05-16 11:33:48 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:33:48 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:33:48 --> Utf8 Class Initialized
INFO - 2017-05-16 11:33:48 --> URI Class Initialized
INFO - 2017-05-16 11:33:48 --> Router Class Initialized
INFO - 2017-05-16 11:33:48 --> Output Class Initialized
INFO - 2017-05-16 11:33:48 --> Security Class Initialized
DEBUG - 2017-05-16 11:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:33:48 --> Input Class Initialized
INFO - 2017-05-16 11:33:48 --> Language Class Initialized
INFO - 2017-05-16 11:33:48 --> Loader Class Initialized
INFO - 2017-05-16 11:33:48 --> Helper loaded: url_helper
INFO - 2017-05-16 11:33:48 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:33:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:33:48 --> Controller Class Initialized
DEBUG - 2017-05-16 11:33:48 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:33:48 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/textoPadrao/1057]
INFO - 2017-05-16 11:33:48 --> Model Class Initialized
INFO - 2017-05-16 11:33:48 --> Database Driver Class Initialized
ERROR - 2017-05-16 11:33:50 --> /usr/local/bin/unoconv.sh xhtml /var/www/html/temp/trash/9c5006b1b4ce44325f1638e5c615471e.html /var/www/html/temp/trash/9c5006b1b4ce44325f1638e5c615471e.rtf
INFO - 2017-05-16 11:33:50 --> Final output sent to browser
DEBUG - 2017-05-16 11:33:50 --> Total execution time: 1.4484
INFO - 2017-05-16 11:34:18 --> Config Class Initialized
INFO - 2017-05-16 11:34:18 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:18 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:18 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:18 --> URI Class Initialized
INFO - 2017-05-16 11:34:18 --> Router Class Initialized
INFO - 2017-05-16 11:34:18 --> Output Class Initialized
INFO - 2017-05-16 11:34:18 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:18 --> Input Class Initialized
INFO - 2017-05-16 11:34:18 --> Language Class Initialized
INFO - 2017-05-16 11:34:18 --> Loader Class Initialized
INFO - 2017-05-16 11:34:18 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:18 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:18 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:18 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/salvar/2170/digitar]
INFO - 2017-05-16 11:34:18 --> Model Class Initialized
INFO - 2017-05-16 11:34:18 --> Database Driver Class Initialized
DEBUG - 2017-05-16 11:34:19 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2170 returning laudoh into :temp
INFO - 2017-05-16 11:34:19 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:19 --> Total execution time: 0.3488
INFO - 2017-05-16 11:34:19 --> Config Class Initialized
INFO - 2017-05-16 11:34:19 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:19 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:19 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:19 --> URI Class Initialized
INFO - 2017-05-16 11:34:19 --> Router Class Initialized
INFO - 2017-05-16 11:34:19 --> Output Class Initialized
INFO - 2017-05-16 11:34:19 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:19 --> Input Class Initialized
INFO - 2017-05-16 11:34:19 --> Language Class Initialized
INFO - 2017-05-16 11:34:19 --> Loader Class Initialized
INFO - 2017-05-16 11:34:19 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:19 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:19 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:19 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:19 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 11:34:19 --> Model Class Initialized
INFO - 2017-05-16 11:34:19 --> Database Driver Class Initialized
INFO - 2017-05-16 11:34:19 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:34:19 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 11:34:19 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:34:19 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:19 --> Total execution time: 0.3289
INFO - 2017-05-16 11:34:19 --> Config Class Initialized
INFO - 2017-05-16 11:34:19 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:19 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:19 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:19 --> URI Class Initialized
INFO - 2017-05-16 11:34:19 --> Router Class Initialized
INFO - 2017-05-16 11:34:19 --> Output Class Initialized
INFO - 2017-05-16 11:34:19 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:19 --> Input Class Initialized
INFO - 2017-05-16 11:34:19 --> Language Class Initialized
INFO - 2017-05-16 11:34:19 --> Loader Class Initialized
INFO - 2017-05-16 11:34:19 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:19 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:19 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:19 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:19 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 11:34:19 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:19 --> Total execution time: 0.0012
INFO - 2017-05-16 11:34:19 --> Config Class Initialized
INFO - 2017-05-16 11:34:19 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:19 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:19 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:19 --> URI Class Initialized
INFO - 2017-05-16 11:34:19 --> Router Class Initialized
INFO - 2017-05-16 11:34:19 --> Output Class Initialized
INFO - 2017-05-16 11:34:19 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:19 --> Input Class Initialized
INFO - 2017-05-16 11:34:19 --> Language Class Initialized
INFO - 2017-05-16 11:34:19 --> Loader Class Initialized
INFO - 2017-05-16 11:34:19 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:19 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:19 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:19 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:19 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:19 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2170]
INFO - 2017-05-16 11:34:19 --> Model Class Initialized
INFO - 2017-05-16 11:34:19 --> Database Driver Class Initialized
INFO - 2017-05-16 11:34:24 --> Config Class Initialized
INFO - 2017-05-16 11:34:24 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:24 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:24 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:24 --> URI Class Initialized
INFO - 2017-05-16 11:34:24 --> Router Class Initialized
INFO - 2017-05-16 11:34:24 --> Output Class Initialized
INFO - 2017-05-16 11:34:24 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:24 --> Input Class Initialized
INFO - 2017-05-16 11:34:24 --> Language Class Initialized
INFO - 2017-05-16 11:34:24 --> Loader Class Initialized
INFO - 2017-05-16 11:34:24 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:24 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:24 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:24 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:24 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:24 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 11:34:24 --> Model Class Initialized
INFO - 2017-05-16 11:34:24 --> Database Driver Class Initialized
DEBUG - 2017-05-16 11:34:25 --> SELECT * FROM
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
							and c.datahora >= to_date('01/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-16 11:34:25 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:34:25 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 11:34:25 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:34:25 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:25 --> Total execution time: 0.3674
INFO - 2017-05-16 11:34:39 --> Config Class Initialized
INFO - 2017-05-16 11:34:39 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:39 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:39 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:39 --> URI Class Initialized
INFO - 2017-05-16 11:34:39 --> Router Class Initialized
INFO - 2017-05-16 11:34:39 --> Output Class Initialized
INFO - 2017-05-16 11:34:39 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:39 --> Input Class Initialized
INFO - 2017-05-16 11:34:39 --> Language Class Initialized
INFO - 2017-05-16 11:34:39 --> Loader Class Initialized
INFO - 2017-05-16 11:34:39 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:39 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:39 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:39 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:39 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 11:34:39 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:39 --> Total execution time: 0.0054
INFO - 2017-05-16 11:34:46 --> Config Class Initialized
INFO - 2017-05-16 11:34:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:34:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:34:46 --> Utf8 Class Initialized
INFO - 2017-05-16 11:34:46 --> URI Class Initialized
INFO - 2017-05-16 11:34:46 --> Router Class Initialized
INFO - 2017-05-16 11:34:46 --> Output Class Initialized
INFO - 2017-05-16 11:34:46 --> Security Class Initialized
DEBUG - 2017-05-16 11:34:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:34:46 --> Input Class Initialized
INFO - 2017-05-16 11:34:46 --> Language Class Initialized
INFO - 2017-05-16 11:34:46 --> Loader Class Initialized
INFO - 2017-05-16 11:34:46 --> Helper loaded: url_helper
INFO - 2017-05-16 11:34:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:34:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:34:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:34:46 --> Controller Class Initialized
DEBUG - 2017-05-16 11:34:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:34:46 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Sys/mensagemClean]
INFO - 2017-05-16 11:34:46 --> Final output sent to browser
DEBUG - 2017-05-16 11:34:46 --> Total execution time: 0.0053
INFO - 2017-05-16 11:35:06 --> Config Class Initialized
INFO - 2017-05-16 11:35:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:35:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:35:06 --> Utf8 Class Initialized
INFO - 2017-05-16 11:35:06 --> URI Class Initialized
INFO - 2017-05-16 11:35:06 --> Router Class Initialized
INFO - 2017-05-16 11:35:06 --> Output Class Initialized
INFO - 2017-05-16 11:35:06 --> Security Class Initialized
DEBUG - 2017-05-16 11:35:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:35:06 --> Input Class Initialized
INFO - 2017-05-16 11:35:06 --> Language Class Initialized
INFO - 2017-05-16 11:35:06 --> Loader Class Initialized
INFO - 2017-05-16 11:35:06 --> Helper loaded: url_helper
INFO - 2017-05-16 11:35:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:35:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:35:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:35:06 --> Controller Class Initialized
DEBUG - 2017-05-16 11:35:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:35:06 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 11:35:06 --> Model Class Initialized
INFO - 2017-05-16 11:35:06 --> Database Driver Class Initialized
INFO - 2017-05-16 11:35:07 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:35:07 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 11:35:07 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:35:07 --> Final output sent to browser
DEBUG - 2017-05-16 11:35:07 --> Total execution time: 0.3529
INFO - 2017-05-16 11:35:07 --> Config Class Initialized
INFO - 2017-05-16 11:35:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:35:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:35:07 --> Utf8 Class Initialized
INFO - 2017-05-16 11:35:07 --> URI Class Initialized
INFO - 2017-05-16 11:35:07 --> Router Class Initialized
INFO - 2017-05-16 11:35:07 --> Output Class Initialized
INFO - 2017-05-16 11:35:07 --> Security Class Initialized
DEBUG - 2017-05-16 11:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:35:07 --> Input Class Initialized
INFO - 2017-05-16 11:35:07 --> Language Class Initialized
INFO - 2017-05-16 11:35:07 --> Loader Class Initialized
INFO - 2017-05-16 11:35:07 --> Helper loaded: url_helper
INFO - 2017-05-16 11:35:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:35:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:35:07 --> Controller Class Initialized
DEBUG - 2017-05-16 11:35:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:35:07 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/Editor/verificaDitado/2170]
INFO - 2017-05-16 11:35:07 --> Model Class Initialized
INFO - 2017-05-16 11:35:07 --> Database Driver Class Initialized
INFO - 2017-05-16 11:35:15 --> Config Class Initialized
INFO - 2017-05-16 11:35:15 --> Hooks Class Initialized
DEBUG - 2017-05-16 11:35:15 --> UTF-8 Support Enabled
INFO - 2017-05-16 11:35:15 --> Utf8 Class Initialized
INFO - 2017-05-16 11:35:15 --> URI Class Initialized
INFO - 2017-05-16 11:35:15 --> Router Class Initialized
INFO - 2017-05-16 11:35:15 --> Output Class Initialized
INFO - 2017-05-16 11:35:15 --> Security Class Initialized
DEBUG - 2017-05-16 11:35:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 11:35:15 --> Input Class Initialized
INFO - 2017-05-16 11:35:15 --> Language Class Initialized
INFO - 2017-05-16 11:35:15 --> Loader Class Initialized
INFO - 2017-05-16 11:35:15 --> Helper loaded: url_helper
INFO - 2017-05-16 11:35:15 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 11:35:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 11:35:15 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 11:35:15 --> Controller Class Initialized
DEBUG - 2017-05-16 11:35:15 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 11:35:15 --> User[CAROL], Session[9c5006b1b4ce44325f1638e5c615471e], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 11:35:15 --> Model Class Initialized
INFO - 2017-05-16 11:35:15 --> Database Driver Class Initialized
DEBUG - 2017-05-16 11:35:15 --> SELECT * FROM
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
							and c.datahora >= to_date('01/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-16 11:35:15 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 11:35:15 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 11:35:15 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 11:35:15 --> Final output sent to browser
DEBUG - 2017-05-16 11:35:15 --> Total execution time: 0.4459
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:00 --> Config Class Initialized
INFO - 2017-05-16 13:56:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:00 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:00 --> URI Class Initialized
INFO - 2017-05-16 13:56:00 --> Router Class Initialized
INFO - 2017-05-16 13:56:00 --> Output Class Initialized
INFO - 2017-05-16 13:56:00 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:00 --> Input Class Initialized
INFO - 2017-05-16 13:56:00 --> Language Class Initialized
INFO - 2017-05-16 13:56:00 --> Loader Class Initialized
INFO - 2017-05-16 13:56:00 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:00 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:00 --> User[], Session[], IP[192.168.0.101], Request[/Editor/digitar/2170]
INFO - 2017-05-16 13:56:03 --> Config Class Initialized
INFO - 2017-05-16 13:56:03 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:03 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:03 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:03 --> URI Class Initialized
INFO - 2017-05-16 13:56:03 --> Router Class Initialized
INFO - 2017-05-16 13:56:03 --> Output Class Initialized
INFO - 2017-05-16 13:56:03 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:03 --> Input Class Initialized
INFO - 2017-05-16 13:56:03 --> Language Class Initialized
INFO - 2017-05-16 13:56:03 --> Loader Class Initialized
INFO - 2017-05-16 13:56:03 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:03 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:03 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:03 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:03 --> User[], Session[], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 13:56:03 --> Model Class Initialized
INFO - 2017-05-16 13:56:03 --> Database Driver Class Initialized
DEBUG - 2017-05-16 13:56:04 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 13:56:04 --> Final output sent to browser
DEBUG - 2017-05-16 13:56:04 --> Total execution time: 0.1500
INFO - 2017-05-16 13:56:04 --> Config Class Initialized
INFO - 2017-05-16 13:56:04 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:04 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:04 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:04 --> URI Class Initialized
DEBUG - 2017-05-16 13:56:04 --> No URI present. Default controller set.
INFO - 2017-05-16 13:56:04 --> Router Class Initialized
INFO - 2017-05-16 13:56:04 --> Output Class Initialized
INFO - 2017-05-16 13:56:04 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:04 --> Input Class Initialized
INFO - 2017-05-16 13:56:04 --> Language Class Initialized
INFO - 2017-05-16 13:56:04 --> Loader Class Initialized
INFO - 2017-05-16 13:56:04 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:04 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:04 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:04 --> User[], Session[], IP[192.168.0.101], Request[/]
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-05-16 13:56:04 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 13:56:04 --> Final output sent to browser
DEBUG - 2017-05-16 13:56:04 --> Total execution time: 0.0016
INFO - 2017-05-16 13:56:09 --> Config Class Initialized
INFO - 2017-05-16 13:56:09 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:09 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:09 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:09 --> URI Class Initialized
INFO - 2017-05-16 13:56:09 --> Router Class Initialized
INFO - 2017-05-16 13:56:09 --> Output Class Initialized
INFO - 2017-05-16 13:56:09 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:09 --> Input Class Initialized
INFO - 2017-05-16 13:56:09 --> Language Class Initialized
INFO - 2017-05-16 13:56:09 --> Loader Class Initialized
INFO - 2017-05-16 13:56:09 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:09 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:09 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:09 --> User[], Session[], IP[192.168.0.101], Request[/Login/login]
INFO - 2017-05-16 13:56:09 --> Model Class Initialized
INFO - 2017-05-16 13:56:09 --> Database Driver Class Initialized
INFO - 2017-05-16 13:56:09 --> Final output sent to browser
DEBUG - 2017-05-16 13:56:09 --> Total execution time: 0.1044
INFO - 2017-05-16 13:56:10 --> Config Class Initialized
INFO - 2017-05-16 13:56:10 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:56:10 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:56:10 --> Utf8 Class Initialized
INFO - 2017-05-16 13:56:10 --> URI Class Initialized
INFO - 2017-05-16 13:56:10 --> Router Class Initialized
INFO - 2017-05-16 13:56:10 --> Output Class Initialized
INFO - 2017-05-16 13:56:10 --> Security Class Initialized
DEBUG - 2017-05-16 13:56:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:56:10 --> Input Class Initialized
INFO - 2017-05-16 13:56:10 --> Language Class Initialized
INFO - 2017-05-16 13:56:10 --> Loader Class Initialized
INFO - 2017-05-16 13:56:10 --> Helper loaded: url_helper
INFO - 2017-05-16 13:56:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:56:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:56:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:56:10 --> Controller Class Initialized
DEBUG - 2017-05-16 13:56:10 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:56:10 --> User[CAROL], Session[f5ef440fcb1f0086fe856d928a935985], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 13:56:10 --> Model Class Initialized
INFO - 2017-05-16 13:56:10 --> Database Driver Class Initialized
DEBUG - 2017-05-16 13:56:10 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 13:56:10 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 13:56:10 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 13:56:10 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 13:56:10 --> Final output sent to browser
DEBUG - 2017-05-16 13:56:10 --> Total execution time: 0.0950
INFO - 2017-05-16 13:58:32 --> Config Class Initialized
INFO - 2017-05-16 13:58:32 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:58:32 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:58:32 --> Utf8 Class Initialized
INFO - 2017-05-16 13:58:32 --> URI Class Initialized
INFO - 2017-05-16 13:58:32 --> Router Class Initialized
INFO - 2017-05-16 13:58:32 --> Output Class Initialized
INFO - 2017-05-16 13:58:32 --> Security Class Initialized
DEBUG - 2017-05-16 13:58:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:58:32 --> Input Class Initialized
INFO - 2017-05-16 13:58:32 --> Language Class Initialized
INFO - 2017-05-16 13:58:32 --> Loader Class Initialized
INFO - 2017-05-16 13:58:32 --> Helper loaded: url_helper
INFO - 2017-05-16 13:58:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:58:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:58:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:58:32 --> Controller Class Initialized
DEBUG - 2017-05-16 13:58:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:58:32 --> User[CAROL], Session[f5ef440fcb1f0086fe856d928a935985], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 13:58:32 --> Model Class Initialized
INFO - 2017-05-16 13:58:32 --> Database Driver Class Initialized
DEBUG - 2017-05-16 13:58:32 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 13:58:32 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 13:58:32 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 13:58:32 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 13:58:32 --> Final output sent to browser
DEBUG - 2017-05-16 13:58:32 --> Total execution time: 0.1834
INFO - 2017-05-16 13:58:52 --> Config Class Initialized
INFO - 2017-05-16 13:58:52 --> Hooks Class Initialized
DEBUG - 2017-05-16 13:58:52 --> UTF-8 Support Enabled
INFO - 2017-05-16 13:58:52 --> Utf8 Class Initialized
INFO - 2017-05-16 13:58:52 --> URI Class Initialized
INFO - 2017-05-16 13:58:52 --> Router Class Initialized
INFO - 2017-05-16 13:58:52 --> Output Class Initialized
INFO - 2017-05-16 13:58:52 --> Security Class Initialized
DEBUG - 2017-05-16 13:58:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 13:58:52 --> Input Class Initialized
INFO - 2017-05-16 13:58:52 --> Language Class Initialized
INFO - 2017-05-16 13:58:52 --> Loader Class Initialized
INFO - 2017-05-16 13:58:52 --> Helper loaded: url_helper
INFO - 2017-05-16 13:58:52 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 13:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 13:58:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 13:58:52 --> Controller Class Initialized
DEBUG - 2017-05-16 13:58:52 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 13:58:52 --> User[CAROL], Session[f5ef440fcb1f0086fe856d928a935985], IP[192.168.0.101], Request[/FluxoDigitacao]
INFO - 2017-05-16 13:58:52 --> Model Class Initialized
INFO - 2017-05-16 13:58:52 --> Database Driver Class Initialized
DEBUG - 2017-05-16 13:58:53 --> SELECT * FROM
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
							and c.datahora >= to_date('01/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 13:58:53 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 13:58:53 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 13:58:53 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 13:58:53 --> Final output sent to browser
DEBUG - 2017-05-16 13:58:53 --> Total execution time: 0.6534
INFO - 2017-05-16 14:52:05 --> Config Class Initialized
INFO - 2017-05-16 14:52:05 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:05 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:05 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:05 --> URI Class Initialized
DEBUG - 2017-05-16 14:52:05 --> No URI present. Default controller set.
INFO - 2017-05-16 14:52:05 --> Router Class Initialized
INFO - 2017-05-16 14:52:05 --> Output Class Initialized
INFO - 2017-05-16 14:52:05 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:05 --> Input Class Initialized
INFO - 2017-05-16 14:52:05 --> Language Class Initialized
INFO - 2017-05-16 14:52:05 --> Loader Class Initialized
INFO - 2017-05-16 14:52:05 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:05 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:05 --> User[], Session[], IP[192.168.0.19], Request[/]
INFO - 2017-05-16 14:52:05 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:52:05 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-05-16 14:52:05 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:52:05 --> Final output sent to browser
DEBUG - 2017-05-16 14:52:05 --> Total execution time: 0.0084
INFO - 2017-05-16 14:52:14 --> Config Class Initialized
INFO - 2017-05-16 14:52:14 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:14 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:14 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:14 --> URI Class Initialized
INFO - 2017-05-16 14:52:14 --> Router Class Initialized
INFO - 2017-05-16 14:52:14 --> Output Class Initialized
INFO - 2017-05-16 14:52:14 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:14 --> Input Class Initialized
INFO - 2017-05-16 14:52:14 --> Language Class Initialized
INFO - 2017-05-16 14:52:14 --> Loader Class Initialized
INFO - 2017-05-16 14:52:14 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:14 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:14 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:14 --> User[], Session[], IP[192.168.0.19], Request[/Login/login]
INFO - 2017-05-16 14:52:14 --> Model Class Initialized
INFO - 2017-05-16 14:52:14 --> Database Driver Class Initialized
INFO - 2017-05-16 14:52:14 --> Final output sent to browser
DEBUG - 2017-05-16 14:52:14 --> Total execution time: 0.0691
INFO - 2017-05-16 14:52:14 --> Config Class Initialized
INFO - 2017-05-16 14:52:14 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:14 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:14 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:14 --> URI Class Initialized
INFO - 2017-05-16 14:52:14 --> Router Class Initialized
INFO - 2017-05-16 14:52:14 --> Output Class Initialized
INFO - 2017-05-16 14:52:14 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:14 --> Input Class Initialized
INFO - 2017-05-16 14:52:14 --> Language Class Initialized
INFO - 2017-05-16 14:52:14 --> Loader Class Initialized
INFO - 2017-05-16 14:52:14 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:14 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:14 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:14 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/FluxoDigitacao]
INFO - 2017-05-16 14:52:14 --> Model Class Initialized
INFO - 2017-05-16 14:52:14 --> Database Driver Class Initialized
DEBUG - 2017-05-16 14:52:14 --> SELECT * FROM
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
							and c.datahora >= to_date('16/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 14:52:14 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:52:14 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 14:52:14 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:52:14 --> Final output sent to browser
DEBUG - 2017-05-16 14:52:14 --> Total execution time: 0.0996
INFO - 2017-05-16 14:52:36 --> Config Class Initialized
INFO - 2017-05-16 14:52:36 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:36 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:36 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:36 --> URI Class Initialized
INFO - 2017-05-16 14:52:36 --> Router Class Initialized
INFO - 2017-05-16 14:52:36 --> Output Class Initialized
INFO - 2017-05-16 14:52:36 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:36 --> Input Class Initialized
INFO - 2017-05-16 14:52:36 --> Language Class Initialized
INFO - 2017-05-16 14:52:36 --> Loader Class Initialized
INFO - 2017-05-16 14:52:36 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:36 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:36 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:36 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/FluxoDigitacao]
INFO - 2017-05-16 14:52:36 --> Model Class Initialized
INFO - 2017-05-16 14:52:36 --> Database Driver Class Initialized
DEBUG - 2017-05-16 14:52:36 --> SELECT * FROM
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
							and c.datahora >= to_date('16/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 14:52:37 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:52:37 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 14:52:37 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:52:37 --> Final output sent to browser
DEBUG - 2017-05-16 14:52:37 --> Total execution time: 0.4085
INFO - 2017-05-16 14:52:49 --> Config Class Initialized
INFO - 2017-05-16 14:52:49 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:49 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:49 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:49 --> URI Class Initialized
INFO - 2017-05-16 14:52:49 --> Router Class Initialized
INFO - 2017-05-16 14:52:49 --> Output Class Initialized
INFO - 2017-05-16 14:52:49 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:49 --> Input Class Initialized
INFO - 2017-05-16 14:52:49 --> Language Class Initialized
INFO - 2017-05-16 14:52:49 --> Loader Class Initialized
INFO - 2017-05-16 14:52:49 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:49 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:50 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:50 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 14:52:50 --> Model Class Initialized
INFO - 2017-05-16 14:52:50 --> Database Driver Class Initialized
INFO - 2017-05-16 14:52:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:52:50 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 14:52:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:52:50 --> Final output sent to browser
DEBUG - 2017-05-16 14:52:50 --> Total execution time: 0.3673
INFO - 2017-05-16 14:52:50 --> Config Class Initialized
INFO - 2017-05-16 14:52:50 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:52:50 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:52:50 --> Utf8 Class Initialized
INFO - 2017-05-16 14:52:50 --> URI Class Initialized
INFO - 2017-05-16 14:52:50 --> Router Class Initialized
INFO - 2017-05-16 14:52:50 --> Output Class Initialized
INFO - 2017-05-16 14:52:50 --> Security Class Initialized
DEBUG - 2017-05-16 14:52:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:52:50 --> Input Class Initialized
INFO - 2017-05-16 14:52:50 --> Language Class Initialized
INFO - 2017-05-16 14:52:50 --> Loader Class Initialized
INFO - 2017-05-16 14:52:50 --> Helper loaded: url_helper
INFO - 2017-05-16 14:52:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:52:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:52:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:52:50 --> Controller Class Initialized
DEBUG - 2017-05-16 14:52:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:52:50 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/verificaDitado/2186]
INFO - 2017-05-16 14:52:50 --> Model Class Initialized
INFO - 2017-05-16 14:52:50 --> Database Driver Class Initialized
INFO - 2017-05-16 14:53:07 --> Config Class Initialized
INFO - 2017-05-16 14:53:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:07 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:07 --> URI Class Initialized
INFO - 2017-05-16 14:53:07 --> Router Class Initialized
INFO - 2017-05-16 14:53:07 --> Output Class Initialized
INFO - 2017-05-16 14:53:07 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:07 --> Input Class Initialized
INFO - 2017-05-16 14:53:07 --> Language Class Initialized
INFO - 2017-05-16 14:53:07 --> Loader Class Initialized
INFO - 2017-05-16 14:53:07 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:07 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:07 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/salvar/2186/digitar]
INFO - 2017-05-16 14:53:07 --> Model Class Initialized
INFO - 2017-05-16 14:53:07 --> Database Driver Class Initialized
DEBUG - 2017-05-16 14:53:07 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2186 returning laudoh into :temp
INFO - 2017-05-16 14:53:07 --> Final output sent to browser
DEBUG - 2017-05-16 14:53:07 --> Total execution time: 0.1049
INFO - 2017-05-16 14:53:07 --> Config Class Initialized
INFO - 2017-05-16 14:53:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:07 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:07 --> URI Class Initialized
INFO - 2017-05-16 14:53:07 --> Router Class Initialized
INFO - 2017-05-16 14:53:07 --> Output Class Initialized
INFO - 2017-05-16 14:53:07 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:07 --> Input Class Initialized
INFO - 2017-05-16 14:53:07 --> Language Class Initialized
INFO - 2017-05-16 14:53:07 --> Loader Class Initialized
INFO - 2017-05-16 14:53:07 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:07 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:07 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 14:53:07 --> Model Class Initialized
INFO - 2017-05-16 14:53:07 --> Database Driver Class Initialized
INFO - 2017-05-16 14:53:07 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:53:07 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 14:53:07 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:53:07 --> Final output sent to browser
DEBUG - 2017-05-16 14:53:07 --> Total execution time: 0.0902
INFO - 2017-05-16 14:53:07 --> Config Class Initialized
INFO - 2017-05-16 14:53:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:07 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:07 --> URI Class Initialized
INFO - 2017-05-16 14:53:07 --> Router Class Initialized
INFO - 2017-05-16 14:53:07 --> Output Class Initialized
INFO - 2017-05-16 14:53:07 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:07 --> Input Class Initialized
INFO - 2017-05-16 14:53:07 --> Language Class Initialized
INFO - 2017-05-16 14:53:07 --> Loader Class Initialized
INFO - 2017-05-16 14:53:07 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:07 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:07 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Sys/mensagemClean]
INFO - 2017-05-16 14:53:07 --> Final output sent to browser
DEBUG - 2017-05-16 14:53:07 --> Total execution time: 0.0047
INFO - 2017-05-16 14:53:07 --> Config Class Initialized
INFO - 2017-05-16 14:53:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:07 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:07 --> URI Class Initialized
INFO - 2017-05-16 14:53:07 --> Router Class Initialized
INFO - 2017-05-16 14:53:07 --> Output Class Initialized
INFO - 2017-05-16 14:53:07 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:07 --> Input Class Initialized
INFO - 2017-05-16 14:53:07 --> Language Class Initialized
INFO - 2017-05-16 14:53:07 --> Loader Class Initialized
INFO - 2017-05-16 14:53:07 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:07 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:07 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/verificaDitado/2186]
INFO - 2017-05-16 14:53:07 --> Model Class Initialized
INFO - 2017-05-16 14:53:07 --> Database Driver Class Initialized
INFO - 2017-05-16 14:53:10 --> Config Class Initialized
INFO - 2017-05-16 14:53:10 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:10 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:10 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:10 --> URI Class Initialized
INFO - 2017-05-16 14:53:10 --> Router Class Initialized
INFO - 2017-05-16 14:53:10 --> Output Class Initialized
INFO - 2017-05-16 14:53:10 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:10 --> Input Class Initialized
INFO - 2017-05-16 14:53:10 --> Language Class Initialized
INFO - 2017-05-16 14:53:10 --> Loader Class Initialized
INFO - 2017-05-16 14:53:10 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:10 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:10 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:10 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/FluxoDigitacao]
INFO - 2017-05-16 14:53:10 --> Model Class Initialized
INFO - 2017-05-16 14:53:10 --> Database Driver Class Initialized
DEBUG - 2017-05-16 14:53:10 --> SELECT * FROM
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
							and c.datahora >= to_date('16/05/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('16/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-16 14:53:10 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:53:10 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-16 14:53:10 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:53:10 --> Final output sent to browser
DEBUG - 2017-05-16 14:53:10 --> Total execution time: 0.0741
INFO - 2017-05-16 14:53:22 --> Config Class Initialized
INFO - 2017-05-16 14:53:22 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:22 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:22 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:22 --> URI Class Initialized
INFO - 2017-05-16 14:53:22 --> Router Class Initialized
INFO - 2017-05-16 14:53:22 --> Output Class Initialized
INFO - 2017-05-16 14:53:22 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:22 --> Input Class Initialized
INFO - 2017-05-16 14:53:22 --> Language Class Initialized
INFO - 2017-05-16 14:53:22 --> Loader Class Initialized
INFO - 2017-05-16 14:53:22 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:22 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:22 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:22 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 14:53:22 --> Model Class Initialized
INFO - 2017-05-16 14:53:22 --> Database Driver Class Initialized
INFO - 2017-05-16 14:53:22 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-05-16 14:53:22 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-05-16 14:53:22 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-05-16 14:53:22 --> Final output sent to browser
DEBUG - 2017-05-16 14:53:22 --> Total execution time: 0.0776
INFO - 2017-05-16 14:53:22 --> Config Class Initialized
INFO - 2017-05-16 14:53:22 --> Hooks Class Initialized
DEBUG - 2017-05-16 14:53:22 --> UTF-8 Support Enabled
INFO - 2017-05-16 14:53:22 --> Utf8 Class Initialized
INFO - 2017-05-16 14:53:22 --> URI Class Initialized
INFO - 2017-05-16 14:53:22 --> Router Class Initialized
INFO - 2017-05-16 14:53:22 --> Output Class Initialized
INFO - 2017-05-16 14:53:22 --> Security Class Initialized
DEBUG - 2017-05-16 14:53:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 14:53:22 --> Input Class Initialized
INFO - 2017-05-16 14:53:22 --> Language Class Initialized
INFO - 2017-05-16 14:53:22 --> Loader Class Initialized
INFO - 2017-05-16 14:53:22 --> Helper loaded: url_helper
INFO - 2017-05-16 14:53:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 14:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 14:53:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 14:53:22 --> Controller Class Initialized
DEBUG - 2017-05-16 14:53:22 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 14:53:22 --> User[CAROL], Session[7da0304c63719276d8ccd5fc62b9275e], IP[192.168.0.19], Request[/Editor/verificaDitado/2186]
INFO - 2017-05-16 14:53:22 --> Model Class Initialized
INFO - 2017-05-16 14:53:22 --> Database Driver Class Initialized
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:06 --> Config Class Initialized
INFO - 2017-05-16 15:25:06 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:06 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:06 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:06 --> URI Class Initialized
INFO - 2017-05-16 15:25:06 --> Router Class Initialized
INFO - 2017-05-16 15:25:06 --> Output Class Initialized
INFO - 2017-05-16 15:25:06 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:06 --> Input Class Initialized
INFO - 2017-05-16 15:25:06 --> Language Class Initialized
INFO - 2017-05-16 15:25:06 --> Loader Class Initialized
INFO - 2017-05-16 15:25:06 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:06 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:06 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:06 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:25:07 --> Config Class Initialized
INFO - 2017-05-16 15:25:07 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:25:07 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:25:07 --> Utf8 Class Initialized
INFO - 2017-05-16 15:25:07 --> URI Class Initialized
INFO - 2017-05-16 15:25:07 --> Router Class Initialized
INFO - 2017-05-16 15:25:07 --> Output Class Initialized
INFO - 2017-05-16 15:25:07 --> Security Class Initialized
DEBUG - 2017-05-16 15:25:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:25:07 --> Input Class Initialized
INFO - 2017-05-16 15:25:07 --> Language Class Initialized
INFO - 2017-05-16 15:25:07 --> Loader Class Initialized
INFO - 2017-05-16 15:25:07 --> Helper loaded: url_helper
INFO - 2017-05-16 15:25:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:25:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:25:07 --> Controller Class Initialized
DEBUG - 2017-05-16 15:25:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:25:07 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:46 --> Config Class Initialized
INFO - 2017-05-16 15:27:46 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:46 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:46 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:46 --> URI Class Initialized
INFO - 2017-05-16 15:27:46 --> Router Class Initialized
INFO - 2017-05-16 15:27:46 --> Output Class Initialized
INFO - 2017-05-16 15:27:46 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:46 --> Input Class Initialized
INFO - 2017-05-16 15:27:46 --> Language Class Initialized
INFO - 2017-05-16 15:27:46 --> Loader Class Initialized
INFO - 2017-05-16 15:27:46 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:46 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:46 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:47 --> Config Class Initialized
INFO - 2017-05-16 15:27:47 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:47 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:47 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:47 --> URI Class Initialized
INFO - 2017-05-16 15:27:47 --> Router Class Initialized
INFO - 2017-05-16 15:27:47 --> Output Class Initialized
INFO - 2017-05-16 15:27:47 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:47 --> Input Class Initialized
INFO - 2017-05-16 15:27:47 --> Language Class Initialized
INFO - 2017-05-16 15:27:47 --> Loader Class Initialized
INFO - 2017-05-16 15:27:47 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:47 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:47 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:27:47 --> Config Class Initialized
INFO - 2017-05-16 15:27:47 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:27:47 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:27:47 --> Utf8 Class Initialized
INFO - 2017-05-16 15:27:47 --> URI Class Initialized
INFO - 2017-05-16 15:27:47 --> Router Class Initialized
INFO - 2017-05-16 15:27:47 --> Output Class Initialized
INFO - 2017-05-16 15:27:47 --> Security Class Initialized
DEBUG - 2017-05-16 15:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:27:47 --> Input Class Initialized
INFO - 2017-05-16 15:27:47 --> Language Class Initialized
INFO - 2017-05-16 15:27:47 --> Loader Class Initialized
INFO - 2017-05-16 15:27:47 --> Helper loaded: url_helper
INFO - 2017-05-16 15:27:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:27:47 --> Controller Class Initialized
DEBUG - 2017-05-16 15:27:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:27:47 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:00 --> Config Class Initialized
INFO - 2017-05-16 15:49:00 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:00 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:00 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:00 --> URI Class Initialized
INFO - 2017-05-16 15:49:00 --> Router Class Initialized
INFO - 2017-05-16 15:49:00 --> Output Class Initialized
INFO - 2017-05-16 15:49:00 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:00 --> Input Class Initialized
INFO - 2017-05-16 15:49:00 --> Language Class Initialized
INFO - 2017-05-16 15:49:00 --> Loader Class Initialized
INFO - 2017-05-16 15:49:00 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:00 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:00 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
INFO - 2017-05-16 15:49:01 --> Config Class Initialized
INFO - 2017-05-16 15:49:01 --> Hooks Class Initialized
DEBUG - 2017-05-16 15:49:01 --> UTF-8 Support Enabled
INFO - 2017-05-16 15:49:01 --> Utf8 Class Initialized
INFO - 2017-05-16 15:49:01 --> URI Class Initialized
INFO - 2017-05-16 15:49:01 --> Router Class Initialized
INFO - 2017-05-16 15:49:01 --> Output Class Initialized
INFO - 2017-05-16 15:49:01 --> Security Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-16 15:49:01 --> Input Class Initialized
INFO - 2017-05-16 15:49:01 --> Language Class Initialized
INFO - 2017-05-16 15:49:01 --> Loader Class Initialized
INFO - 2017-05-16 15:49:01 --> Helper loaded: url_helper
INFO - 2017-05-16 15:49:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-16 15:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-16 15:49:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-16 15:49:01 --> Controller Class Initialized
DEBUG - 2017-05-16 15:49:01 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-05-16 15:49:01 --> User[], Session[], IP[192.168.0.19], Request[/Editor/digitar/2186]
