INFO - 2017-06-05 19:44:05 --> Config Class Initialized
INFO - 2017-06-05 19:44:05 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:44:05 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:44:05 --> Utf8 Class Initialized
INFO - 2017-06-05 19:44:05 --> URI Class Initialized
INFO - 2017-06-05 19:44:05 --> Router Class Initialized
INFO - 2017-06-05 19:44:05 --> Output Class Initialized
INFO - 2017-06-05 19:44:05 --> Security Class Initialized
DEBUG - 2017-06-05 19:44:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:44:05 --> Input Class Initialized
INFO - 2017-06-05 19:44:05 --> Language Class Initialized
INFO - 2017-06-05 19:44:05 --> Loader Class Initialized
INFO - 2017-06-05 19:44:05 --> Helper loaded: url_helper
INFO - 2017-06-05 19:44:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:44:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:44:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:44:05 --> Controller Class Initialized
DEBUG - 2017-06-05 19:44:05 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:44:05 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:44:05 --> Model Class Initialized
INFO - 2017-06-05 19:44:05 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:44:05 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:44:05 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:44:05 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:44:05 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:44:05 --> Final output sent to browser
DEBUG - 2017-06-05 19:44:05 --> Total execution time: 0.1349
INFO - 2017-06-05 19:52:00 --> Config Class Initialized
INFO - 2017-06-05 19:52:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:52:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:52:00 --> Utf8 Class Initialized
INFO - 2017-06-05 19:52:00 --> URI Class Initialized
INFO - 2017-06-05 19:52:00 --> Router Class Initialized
INFO - 2017-06-05 19:52:00 --> Output Class Initialized
INFO - 2017-06-05 19:52:00 --> Security Class Initialized
DEBUG - 2017-06-05 19:52:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:52:00 --> Input Class Initialized
INFO - 2017-06-05 19:52:00 --> Language Class Initialized
INFO - 2017-06-05 19:52:00 --> Loader Class Initialized
INFO - 2017-06-05 19:52:00 --> Helper loaded: url_helper
INFO - 2017-06-05 19:52:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:52:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:52:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:52:00 --> Controller Class Initialized
DEBUG - 2017-06-05 19:52:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:52:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:52:00 --> Model Class Initialized
INFO - 2017-06-05 19:52:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:52:00 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:52:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:52:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:52:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:52:00 --> Final output sent to browser
DEBUG - 2017-06-05 19:52:00 --> Total execution time: 0.1088
INFO - 2017-06-05 19:55:24 --> Config Class Initialized
INFO - 2017-06-05 19:55:24 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:55:24 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:55:24 --> Utf8 Class Initialized
INFO - 2017-06-05 19:55:24 --> URI Class Initialized
INFO - 2017-06-05 19:55:24 --> Router Class Initialized
INFO - 2017-06-05 19:55:24 --> Output Class Initialized
INFO - 2017-06-05 19:55:24 --> Security Class Initialized
DEBUG - 2017-06-05 19:55:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:55:24 --> Input Class Initialized
INFO - 2017-06-05 19:55:24 --> Language Class Initialized
INFO - 2017-06-05 19:55:24 --> Loader Class Initialized
INFO - 2017-06-05 19:55:24 --> Helper loaded: url_helper
INFO - 2017-06-05 19:55:24 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:55:24 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:55:24 --> Controller Class Initialized
DEBUG - 2017-06-05 19:55:24 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:55:24 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:55:24 --> Model Class Initialized
INFO - 2017-06-05 19:55:24 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:55:24 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:55:24 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:55:24 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:55:24 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:55:24 --> Final output sent to browser
DEBUG - 2017-06-05 19:55:24 --> Total execution time: 0.0964
INFO - 2017-06-05 19:55:29 --> Config Class Initialized
INFO - 2017-06-05 19:55:29 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:55:29 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:55:29 --> Utf8 Class Initialized
INFO - 2017-06-05 19:55:29 --> URI Class Initialized
INFO - 2017-06-05 19:55:29 --> Router Class Initialized
INFO - 2017-06-05 19:55:29 --> Output Class Initialized
INFO - 2017-06-05 19:55:29 --> Security Class Initialized
DEBUG - 2017-06-05 19:55:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:55:29 --> Input Class Initialized
INFO - 2017-06-05 19:55:29 --> Language Class Initialized
INFO - 2017-06-05 19:55:29 --> Loader Class Initialized
INFO - 2017-06-05 19:55:29 --> Helper loaded: url_helper
INFO - 2017-06-05 19:55:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:55:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:55:29 --> Controller Class Initialized
DEBUG - 2017-06-05 19:55:29 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:55:29 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:55:29 --> Model Class Initialized
INFO - 2017-06-05 19:55:29 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:55:29 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:55:29 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:55:29 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:55:29 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:55:29 --> Final output sent to browser
DEBUG - 2017-06-05 19:55:29 --> Total execution time: 0.1012
INFO - 2017-06-05 19:56:23 --> Config Class Initialized
INFO - 2017-06-05 19:56:23 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:56:23 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:56:23 --> Utf8 Class Initialized
INFO - 2017-06-05 19:56:23 --> URI Class Initialized
INFO - 2017-06-05 19:56:23 --> Router Class Initialized
INFO - 2017-06-05 19:56:23 --> Output Class Initialized
INFO - 2017-06-05 19:56:23 --> Security Class Initialized
DEBUG - 2017-06-05 19:56:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:56:23 --> Input Class Initialized
INFO - 2017-06-05 19:56:23 --> Language Class Initialized
INFO - 2017-06-05 19:56:23 --> Loader Class Initialized
INFO - 2017-06-05 19:56:23 --> Helper loaded: url_helper
INFO - 2017-06-05 19:56:23 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:56:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:56:23 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:56:23 --> Controller Class Initialized
DEBUG - 2017-06-05 19:56:23 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:56:23 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:56:23 --> Model Class Initialized
INFO - 2017-06-05 19:56:23 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:56:24 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:56:24 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:56:24 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:56:24 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:56:24 --> Final output sent to browser
DEBUG - 2017-06-05 19:56:24 --> Total execution time: 0.1326
INFO - 2017-06-05 19:57:40 --> Config Class Initialized
INFO - 2017-06-05 19:57:40 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:57:40 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:57:40 --> Utf8 Class Initialized
INFO - 2017-06-05 19:57:40 --> URI Class Initialized
INFO - 2017-06-05 19:57:40 --> Router Class Initialized
INFO - 2017-06-05 19:57:40 --> Output Class Initialized
INFO - 2017-06-05 19:57:40 --> Security Class Initialized
DEBUG - 2017-06-05 19:57:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:57:40 --> Input Class Initialized
INFO - 2017-06-05 19:57:40 --> Language Class Initialized
INFO - 2017-06-05 19:57:40 --> Loader Class Initialized
INFO - 2017-06-05 19:57:40 --> Helper loaded: url_helper
INFO - 2017-06-05 19:57:40 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:57:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:57:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:57:40 --> Controller Class Initialized
DEBUG - 2017-06-05 19:57:40 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:57:40 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:57:40 --> Model Class Initialized
INFO - 2017-06-05 19:57:40 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:57:40 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:57:40 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:57:40 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:57:40 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:57:40 --> Final output sent to browser
DEBUG - 2017-06-05 19:57:40 --> Total execution time: 0.1790
INFO - 2017-06-05 19:58:00 --> Config Class Initialized
INFO - 2017-06-05 19:58:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 19:58:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 19:58:00 --> Utf8 Class Initialized
INFO - 2017-06-05 19:58:00 --> URI Class Initialized
INFO - 2017-06-05 19:58:00 --> Router Class Initialized
INFO - 2017-06-05 19:58:00 --> Output Class Initialized
INFO - 2017-06-05 19:58:00 --> Security Class Initialized
DEBUG - 2017-06-05 19:58:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 19:58:00 --> Input Class Initialized
INFO - 2017-06-05 19:58:00 --> Language Class Initialized
INFO - 2017-06-05 19:58:00 --> Loader Class Initialized
INFO - 2017-06-05 19:58:00 --> Helper loaded: url_helper
INFO - 2017-06-05 19:58:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 19:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 19:58:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 19:58:00 --> Controller Class Initialized
DEBUG - 2017-06-05 19:58:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 19:58:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 19:58:00 --> Model Class Initialized
INFO - 2017-06-05 19:58:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 19:58:00 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 19:58:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 19:58:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 19:58:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 19:58:00 --> Final output sent to browser
DEBUG - 2017-06-05 19:58:00 --> Total execution time: 0.1609
INFO - 2017-06-05 20:02:19 --> Config Class Initialized
INFO - 2017-06-05 20:02:19 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:02:19 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:02:19 --> Utf8 Class Initialized
INFO - 2017-06-05 20:02:19 --> URI Class Initialized
INFO - 2017-06-05 20:02:19 --> Router Class Initialized
INFO - 2017-06-05 20:02:19 --> Output Class Initialized
INFO - 2017-06-05 20:02:19 --> Security Class Initialized
DEBUG - 2017-06-05 20:02:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:02:19 --> Input Class Initialized
INFO - 2017-06-05 20:02:19 --> Language Class Initialized
INFO - 2017-06-05 20:02:19 --> Loader Class Initialized
INFO - 2017-06-05 20:02:19 --> Helper loaded: url_helper
INFO - 2017-06-05 20:02:19 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:02:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:02:19 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:02:19 --> Controller Class Initialized
DEBUG - 2017-06-05 20:02:19 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:02:19 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:02:19 --> Model Class Initialized
INFO - 2017-06-05 20:02:19 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:02:19 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:02:19 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:02:19 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:02:19 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:02:19 --> Final output sent to browser
DEBUG - 2017-06-05 20:02:19 --> Total execution time: 0.1222
INFO - 2017-06-05 20:03:28 --> Config Class Initialized
INFO - 2017-06-05 20:03:28 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:03:28 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:03:28 --> Utf8 Class Initialized
INFO - 2017-06-05 20:03:28 --> URI Class Initialized
INFO - 2017-06-05 20:03:28 --> Router Class Initialized
INFO - 2017-06-05 20:03:28 --> Output Class Initialized
INFO - 2017-06-05 20:03:28 --> Security Class Initialized
DEBUG - 2017-06-05 20:03:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:03:28 --> Input Class Initialized
INFO - 2017-06-05 20:03:28 --> Language Class Initialized
INFO - 2017-06-05 20:03:28 --> Loader Class Initialized
INFO - 2017-06-05 20:03:28 --> Helper loaded: url_helper
INFO - 2017-06-05 20:03:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:03:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:03:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:03:28 --> Controller Class Initialized
DEBUG - 2017-06-05 20:03:28 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:03:28 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:03:28 --> Model Class Initialized
INFO - 2017-06-05 20:03:28 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:03:28 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:03:28 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:03:28 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:03:28 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:03:28 --> Final output sent to browser
DEBUG - 2017-06-05 20:03:28 --> Total execution time: 0.1186
INFO - 2017-06-05 20:07:00 --> Config Class Initialized
INFO - 2017-06-05 20:07:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:00 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:00 --> URI Class Initialized
INFO - 2017-06-05 20:07:00 --> Router Class Initialized
INFO - 2017-06-05 20:07:00 --> Output Class Initialized
INFO - 2017-06-05 20:07:00 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:00 --> Input Class Initialized
INFO - 2017-06-05 20:07:00 --> Language Class Initialized
INFO - 2017-06-05 20:07:00 --> Loader Class Initialized
INFO - 2017-06-05 20:07:00 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:00 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:00 --> Model Class Initialized
INFO - 2017-06-05 20:07:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:01 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:01 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:01 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:01 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:01 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:01 --> Total execution time: 0.1263
INFO - 2017-06-05 20:07:10 --> Config Class Initialized
INFO - 2017-06-05 20:07:10 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:10 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:10 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:10 --> URI Class Initialized
INFO - 2017-06-05 20:07:10 --> Router Class Initialized
INFO - 2017-06-05 20:07:10 --> Output Class Initialized
INFO - 2017-06-05 20:07:10 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:10 --> Input Class Initialized
INFO - 2017-06-05 20:07:10 --> Language Class Initialized
INFO - 2017-06-05 20:07:10 --> Loader Class Initialized
INFO - 2017-06-05 20:07:10 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:10 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:10 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:10 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:10 --> Model Class Initialized
INFO - 2017-06-05 20:07:10 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:10 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:10 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:10 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:10 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:10 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:10 --> Total execution time: 0.1243
INFO - 2017-06-05 20:07:32 --> Config Class Initialized
INFO - 2017-06-05 20:07:32 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:32 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:32 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:32 --> URI Class Initialized
INFO - 2017-06-05 20:07:32 --> Router Class Initialized
INFO - 2017-06-05 20:07:32 --> Output Class Initialized
INFO - 2017-06-05 20:07:32 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:32 --> Input Class Initialized
INFO - 2017-06-05 20:07:32 --> Language Class Initialized
INFO - 2017-06-05 20:07:32 --> Loader Class Initialized
INFO - 2017-06-05 20:07:32 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:32 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:32 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:32 --> Model Class Initialized
INFO - 2017-06-05 20:07:32 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:32 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:32 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:32 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:32 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:32 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:32 --> Total execution time: 0.0957
INFO - 2017-06-05 20:07:36 --> Config Class Initialized
INFO - 2017-06-05 20:07:36 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:36 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:36 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:36 --> URI Class Initialized
INFO - 2017-06-05 20:07:36 --> Router Class Initialized
INFO - 2017-06-05 20:07:36 --> Output Class Initialized
INFO - 2017-06-05 20:07:36 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:36 --> Input Class Initialized
INFO - 2017-06-05 20:07:36 --> Language Class Initialized
INFO - 2017-06-05 20:07:36 --> Loader Class Initialized
INFO - 2017-06-05 20:07:36 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:36 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:36 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:36 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:36 --> Model Class Initialized
INFO - 2017-06-05 20:07:36 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:36 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:36 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:36 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:36 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:36 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:36 --> Total execution time: 0.1343
INFO - 2017-06-05 20:07:50 --> Config Class Initialized
INFO - 2017-06-05 20:07:50 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:50 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:50 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:50 --> URI Class Initialized
INFO - 2017-06-05 20:07:50 --> Router Class Initialized
INFO - 2017-06-05 20:07:50 --> Output Class Initialized
INFO - 2017-06-05 20:07:50 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:50 --> Input Class Initialized
INFO - 2017-06-05 20:07:50 --> Language Class Initialized
INFO - 2017-06-05 20:07:50 --> Loader Class Initialized
INFO - 2017-06-05 20:07:50 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:50 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:50 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:50 --> Model Class Initialized
INFO - 2017-06-05 20:07:50 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:50 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:50 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:50 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:50 --> Total execution time: 0.0923
INFO - 2017-06-05 20:07:55 --> Config Class Initialized
INFO - 2017-06-05 20:07:55 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:07:55 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:07:55 --> Utf8 Class Initialized
INFO - 2017-06-05 20:07:55 --> URI Class Initialized
INFO - 2017-06-05 20:07:55 --> Router Class Initialized
INFO - 2017-06-05 20:07:55 --> Output Class Initialized
INFO - 2017-06-05 20:07:55 --> Security Class Initialized
DEBUG - 2017-06-05 20:07:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:07:55 --> Input Class Initialized
INFO - 2017-06-05 20:07:55 --> Language Class Initialized
INFO - 2017-06-05 20:07:55 --> Loader Class Initialized
INFO - 2017-06-05 20:07:55 --> Helper loaded: url_helper
INFO - 2017-06-05 20:07:55 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:07:55 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:07:55 --> Controller Class Initialized
DEBUG - 2017-06-05 20:07:55 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:07:55 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:07:55 --> Model Class Initialized
INFO - 2017-06-05 20:07:55 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:07:55 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:07:55 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:07:55 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:07:55 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:07:55 --> Final output sent to browser
DEBUG - 2017-06-05 20:07:55 --> Total execution time: 0.0953
INFO - 2017-06-05 20:08:00 --> Config Class Initialized
INFO - 2017-06-05 20:08:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:08:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:08:00 --> Utf8 Class Initialized
INFO - 2017-06-05 20:08:00 --> URI Class Initialized
INFO - 2017-06-05 20:08:00 --> Router Class Initialized
INFO - 2017-06-05 20:08:00 --> Output Class Initialized
INFO - 2017-06-05 20:08:00 --> Security Class Initialized
DEBUG - 2017-06-05 20:08:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:08:00 --> Input Class Initialized
INFO - 2017-06-05 20:08:00 --> Language Class Initialized
INFO - 2017-06-05 20:08:00 --> Loader Class Initialized
INFO - 2017-06-05 20:08:00 --> Helper loaded: url_helper
INFO - 2017-06-05 20:08:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:08:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:08:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:08:00 --> Controller Class Initialized
DEBUG - 2017-06-05 20:08:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:08:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:08:00 --> Model Class Initialized
INFO - 2017-06-05 20:08:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:08:00 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:08:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:08:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:08:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:08:00 --> Final output sent to browser
DEBUG - 2017-06-05 20:08:00 --> Total execution time: 0.1045
INFO - 2017-06-05 20:09:57 --> Config Class Initialized
INFO - 2017-06-05 20:09:57 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:09:57 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:09:57 --> Utf8 Class Initialized
INFO - 2017-06-05 20:09:57 --> URI Class Initialized
INFO - 2017-06-05 20:09:57 --> Router Class Initialized
INFO - 2017-06-05 20:09:57 --> Output Class Initialized
INFO - 2017-06-05 20:09:57 --> Security Class Initialized
DEBUG - 2017-06-05 20:09:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:09:57 --> Input Class Initialized
INFO - 2017-06-05 20:09:57 --> Language Class Initialized
INFO - 2017-06-05 20:09:57 --> Loader Class Initialized
INFO - 2017-06-05 20:09:57 --> Helper loaded: url_helper
INFO - 2017-06-05 20:09:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:09:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:09:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:09:57 --> Controller Class Initialized
DEBUG - 2017-06-05 20:09:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:09:57 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:09:57 --> Model Class Initialized
INFO - 2017-06-05 20:09:57 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:09:57 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:09:57 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:09:57 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:09:57 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:09:57 --> Final output sent to browser
DEBUG - 2017-06-05 20:09:57 --> Total execution time: 0.1325
INFO - 2017-06-05 20:10:02 --> Config Class Initialized
INFO - 2017-06-05 20:10:02 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:10:02 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:10:02 --> Utf8 Class Initialized
INFO - 2017-06-05 20:10:02 --> URI Class Initialized
INFO - 2017-06-05 20:10:02 --> Router Class Initialized
INFO - 2017-06-05 20:10:02 --> Output Class Initialized
INFO - 2017-06-05 20:10:02 --> Security Class Initialized
DEBUG - 2017-06-05 20:10:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:10:02 --> Input Class Initialized
INFO - 2017-06-05 20:10:02 --> Language Class Initialized
INFO - 2017-06-05 20:10:02 --> Loader Class Initialized
INFO - 2017-06-05 20:10:02 --> Helper loaded: url_helper
INFO - 2017-06-05 20:10:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:10:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:10:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:10:02 --> Controller Class Initialized
DEBUG - 2017-06-05 20:10:02 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:10:02 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:10:02 --> Model Class Initialized
INFO - 2017-06-05 20:10:02 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:10:02 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:10:02 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:10:02 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:10:02 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:10:02 --> Final output sent to browser
DEBUG - 2017-06-05 20:10:02 --> Total execution time: 0.1077
INFO - 2017-06-05 20:12:44 --> Config Class Initialized
INFO - 2017-06-05 20:12:44 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:12:44 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:12:44 --> Utf8 Class Initialized
INFO - 2017-06-05 20:12:44 --> URI Class Initialized
INFO - 2017-06-05 20:12:44 --> Router Class Initialized
INFO - 2017-06-05 20:12:44 --> Output Class Initialized
INFO - 2017-06-05 20:12:44 --> Security Class Initialized
DEBUG - 2017-06-05 20:12:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:12:44 --> Input Class Initialized
INFO - 2017-06-05 20:12:44 --> Language Class Initialized
INFO - 2017-06-05 20:12:44 --> Loader Class Initialized
INFO - 2017-06-05 20:12:44 --> Helper loaded: url_helper
INFO - 2017-06-05 20:12:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:12:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:12:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:12:44 --> Controller Class Initialized
DEBUG - 2017-06-05 20:12:44 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:12:44 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Sys/mensagemClean]
INFO - 2017-06-05 20:12:44 --> Final output sent to browser
DEBUG - 2017-06-05 20:12:44 --> Total execution time: 0.0135
INFO - 2017-06-05 20:22:36 --> Config Class Initialized
INFO - 2017-06-05 20:22:36 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:22:36 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:22:36 --> Utf8 Class Initialized
INFO - 2017-06-05 20:22:36 --> URI Class Initialized
INFO - 2017-06-05 20:22:36 --> Router Class Initialized
INFO - 2017-06-05 20:22:36 --> Output Class Initialized
INFO - 2017-06-05 20:22:36 --> Security Class Initialized
DEBUG - 2017-06-05 20:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:22:36 --> Input Class Initialized
INFO - 2017-06-05 20:22:36 --> Language Class Initialized
INFO - 2017-06-05 20:22:36 --> Loader Class Initialized
INFO - 2017-06-05 20:22:36 --> Helper loaded: url_helper
INFO - 2017-06-05 20:22:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:22:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:22:36 --> Controller Class Initialized
DEBUG - 2017-06-05 20:22:36 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:22:36 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/digitar/2603]
INFO - 2017-06-05 20:22:36 --> Model Class Initialized
INFO - 2017-06-05 20:22:36 --> Database Driver Class Initialized
INFO - 2017-06-05 20:22:37 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:22:37 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-05 20:22:37 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:22:37 --> Final output sent to browser
DEBUG - 2017-06-05 20:22:37 --> Total execution time: 1.2031
INFO - 2017-06-05 20:22:38 --> Config Class Initialized
INFO - 2017-06-05 20:22:38 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:22:38 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:22:38 --> Utf8 Class Initialized
INFO - 2017-06-05 20:22:38 --> URI Class Initialized
INFO - 2017-06-05 20:22:38 --> Router Class Initialized
INFO - 2017-06-05 20:22:38 --> Output Class Initialized
INFO - 2017-06-05 20:22:38 --> Security Class Initialized
DEBUG - 2017-06-05 20:22:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:22:38 --> Input Class Initialized
INFO - 2017-06-05 20:22:38 --> Language Class Initialized
INFO - 2017-06-05 20:22:38 --> Loader Class Initialized
INFO - 2017-06-05 20:22:38 --> Helper loaded: url_helper
INFO - 2017-06-05 20:22:38 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:22:38 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:22:38 --> Controller Class Initialized
DEBUG - 2017-06-05 20:22:38 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:22:38 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/digitar/2603]
INFO - 2017-06-05 20:22:38 --> Model Class Initialized
INFO - 2017-06-05 20:22:38 --> Database Driver Class Initialized
INFO - 2017-06-05 20:22:39 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:22:39 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-05 20:22:39 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:22:39 --> Final output sent to browser
DEBUG - 2017-06-05 20:22:39 --> Total execution time: 1.3038
INFO - 2017-06-05 20:22:39 --> Config Class Initialized
INFO - 2017-06-05 20:22:39 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:22:39 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:22:39 --> Utf8 Class Initialized
INFO - 2017-06-05 20:22:39 --> URI Class Initialized
INFO - 2017-06-05 20:22:39 --> Router Class Initialized
INFO - 2017-06-05 20:22:39 --> Output Class Initialized
INFO - 2017-06-05 20:22:39 --> Security Class Initialized
DEBUG - 2017-06-05 20:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:22:39 --> Input Class Initialized
INFO - 2017-06-05 20:22:39 --> Language Class Initialized
INFO - 2017-06-05 20:22:39 --> Loader Class Initialized
INFO - 2017-06-05 20:22:39 --> Helper loaded: url_helper
INFO - 2017-06-05 20:22:39 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:22:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:22:40 --> Controller Class Initialized
DEBUG - 2017-06-05 20:22:40 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:22:40 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/verificaDitado/2603]
INFO - 2017-06-05 20:22:40 --> Model Class Initialized
INFO - 2017-06-05 20:22:40 --> Database Driver Class Initialized
INFO - 2017-06-05 20:23:54 --> Config Class Initialized
INFO - 2017-06-05 20:23:54 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:23:54 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:23:54 --> Utf8 Class Initialized
INFO - 2017-06-05 20:23:54 --> URI Class Initialized
DEBUG - 2017-06-05 20:23:54 --> No URI present. Default controller set.
INFO - 2017-06-05 20:23:54 --> Router Class Initialized
INFO - 2017-06-05 20:23:54 --> Output Class Initialized
INFO - 2017-06-05 20:23:54 --> Security Class Initialized
DEBUG - 2017-06-05 20:23:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:23:54 --> Input Class Initialized
INFO - 2017-06-05 20:23:54 --> Language Class Initialized
INFO - 2017-06-05 20:23:54 --> Loader Class Initialized
INFO - 2017-06-05 20:23:54 --> Helper loaded: url_helper
INFO - 2017-06-05 20:23:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:23:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:23:54 --> Controller Class Initialized
DEBUG - 2017-06-05 20:23:54 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:23:54 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/]
INFO - 2017-06-05 20:23:54 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:23:54 --> File loaded: /var/www/html/application/views/main/Index.php
INFO - 2017-06-05 20:23:54 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:23:54 --> Final output sent to browser
DEBUG - 2017-06-05 20:23:54 --> Total execution time: 0.0292
INFO - 2017-06-05 20:23:55 --> Config Class Initialized
INFO - 2017-06-05 20:23:55 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:23:55 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:23:55 --> Utf8 Class Initialized
INFO - 2017-06-05 20:23:55 --> URI Class Initialized
INFO - 2017-06-05 20:23:55 --> Router Class Initialized
INFO - 2017-06-05 20:23:55 --> Output Class Initialized
INFO - 2017-06-05 20:23:55 --> Security Class Initialized
DEBUG - 2017-06-05 20:23:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:23:55 --> Input Class Initialized
INFO - 2017-06-05 20:23:55 --> Language Class Initialized
INFO - 2017-06-05 20:23:55 --> Loader Class Initialized
INFO - 2017-06-05 20:23:55 --> Helper loaded: url_helper
INFO - 2017-06-05 20:23:55 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:23:55 --> Controller Class Initialized
DEBUG - 2017-06-05 20:23:55 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:23:55 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:23:55 --> Model Class Initialized
INFO - 2017-06-05 20:23:55 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:23:55 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:23:55 --> Final output sent to browser
DEBUG - 2017-06-05 20:23:55 --> Total execution time: 0.1475
INFO - 2017-06-05 20:23:55 --> Config Class Initialized
INFO - 2017-06-05 20:23:55 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:23:55 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:23:55 --> Utf8 Class Initialized
INFO - 2017-06-05 20:23:55 --> URI Class Initialized
INFO - 2017-06-05 20:23:55 --> Router Class Initialized
INFO - 2017-06-05 20:23:55 --> Output Class Initialized
INFO - 2017-06-05 20:23:55 --> Security Class Initialized
DEBUG - 2017-06-05 20:23:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:23:55 --> Input Class Initialized
INFO - 2017-06-05 20:23:55 --> Language Class Initialized
INFO - 2017-06-05 20:23:55 --> Loader Class Initialized
INFO - 2017-06-05 20:23:55 --> Helper loaded: url_helper
INFO - 2017-06-05 20:23:55 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:23:55 --> Controller Class Initialized
DEBUG - 2017-06-05 20:23:55 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:23:55 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:23:55 --> Model Class Initialized
INFO - 2017-06-05 20:23:55 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:23:55 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:23:55 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:23:55 --> Final output sent to browser
DEBUG - 2017-06-05 20:23:55 --> Total execution time: 0.0976
INFO - 2017-06-05 20:24:00 --> Config Class Initialized
INFO - 2017-06-05 20:24:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:24:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:24:00 --> Utf8 Class Initialized
INFO - 2017-06-05 20:24:00 --> URI Class Initialized
DEBUG - 2017-06-05 20:24:00 --> No URI present. Default controller set.
INFO - 2017-06-05 20:24:00 --> Router Class Initialized
INFO - 2017-06-05 20:24:00 --> Output Class Initialized
INFO - 2017-06-05 20:24:00 --> Security Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:24:00 --> Input Class Initialized
INFO - 2017-06-05 20:24:00 --> Language Class Initialized
INFO - 2017-06-05 20:24:00 --> Loader Class Initialized
INFO - 2017-06-05 20:24:00 --> Helper loaded: url_helper
INFO - 2017-06-05 20:24:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:24:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:24:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:24:00 --> Controller Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:24:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/]
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/main/Index.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:24:00 --> Final output sent to browser
DEBUG - 2017-06-05 20:24:00 --> Total execution time: 0.0228
INFO - 2017-06-05 20:24:00 --> Config Class Initialized
INFO - 2017-06-05 20:24:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:24:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:24:00 --> Utf8 Class Initialized
INFO - 2017-06-05 20:24:00 --> URI Class Initialized
INFO - 2017-06-05 20:24:00 --> Router Class Initialized
INFO - 2017-06-05 20:24:00 --> Output Class Initialized
INFO - 2017-06-05 20:24:00 --> Security Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:24:00 --> Input Class Initialized
INFO - 2017-06-05 20:24:00 --> Language Class Initialized
INFO - 2017-06-05 20:24:00 --> Loader Class Initialized
INFO - 2017-06-05 20:24:00 --> Helper loaded: url_helper
INFO - 2017-06-05 20:24:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:24:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:24:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:24:00 --> Controller Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:24:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:24:00 --> Model Class Initialized
INFO - 2017-06-05 20:24:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:24:00 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:24:00 --> Final output sent to browser
DEBUG - 2017-06-05 20:24:00 --> Total execution time: 0.1114
INFO - 2017-06-05 20:24:00 --> Config Class Initialized
INFO - 2017-06-05 20:24:00 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:24:00 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:24:00 --> Utf8 Class Initialized
INFO - 2017-06-05 20:24:00 --> URI Class Initialized
INFO - 2017-06-05 20:24:00 --> Router Class Initialized
INFO - 2017-06-05 20:24:00 --> Output Class Initialized
INFO - 2017-06-05 20:24:00 --> Security Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:24:00 --> Input Class Initialized
INFO - 2017-06-05 20:24:00 --> Language Class Initialized
INFO - 2017-06-05 20:24:00 --> Loader Class Initialized
INFO - 2017-06-05 20:24:00 --> Helper loaded: url_helper
INFO - 2017-06-05 20:24:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:24:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:24:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:24:00 --> Controller Class Initialized
DEBUG - 2017-06-05 20:24:00 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:24:00 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:24:00 --> Model Class Initialized
INFO - 2017-06-05 20:24:00 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:24:00 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:24:00 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:24:00 --> Final output sent to browser
DEBUG - 2017-06-05 20:24:00 --> Total execution time: 0.0991
INFO - 2017-06-05 20:26:20 --> Config Class Initialized
INFO - 2017-06-05 20:26:20 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:26:20 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:26:20 --> Utf8 Class Initialized
INFO - 2017-06-05 20:26:20 --> URI Class Initialized
INFO - 2017-06-05 20:26:20 --> Router Class Initialized
INFO - 2017-06-05 20:26:20 --> Output Class Initialized
INFO - 2017-06-05 20:26:20 --> Security Class Initialized
DEBUG - 2017-06-05 20:26:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:26:20 --> Input Class Initialized
INFO - 2017-06-05 20:26:20 --> Language Class Initialized
INFO - 2017-06-05 20:26:20 --> Loader Class Initialized
INFO - 2017-06-05 20:26:20 --> Helper loaded: url_helper
INFO - 2017-06-05 20:26:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:26:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:26:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:26:20 --> Controller Class Initialized
DEBUG - 2017-06-05 20:26:20 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:26:20 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/digitar/2603]
INFO - 2017-06-05 20:26:20 --> Model Class Initialized
INFO - 2017-06-05 20:26:20 --> Database Driver Class Initialized
INFO - 2017-06-05 20:26:21 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:26:21 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-05 20:26:21 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:26:21 --> Final output sent to browser
DEBUG - 2017-06-05 20:26:21 --> Total execution time: 1.2495
INFO - 2017-06-05 20:26:21 --> Config Class Initialized
INFO - 2017-06-05 20:26:21 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:26:21 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:26:21 --> Utf8 Class Initialized
INFO - 2017-06-05 20:26:21 --> URI Class Initialized
INFO - 2017-06-05 20:26:21 --> Router Class Initialized
INFO - 2017-06-05 20:26:21 --> Output Class Initialized
INFO - 2017-06-05 20:26:21 --> Security Class Initialized
DEBUG - 2017-06-05 20:26:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:26:21 --> Input Class Initialized
INFO - 2017-06-05 20:26:21 --> Language Class Initialized
INFO - 2017-06-05 20:26:21 --> Loader Class Initialized
INFO - 2017-06-05 20:26:21 --> Helper loaded: url_helper
INFO - 2017-06-05 20:26:21 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:26:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:26:21 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:26:21 --> Controller Class Initialized
DEBUG - 2017-06-05 20:26:21 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:26:21 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/digitar/2603]
INFO - 2017-06-05 20:26:21 --> Model Class Initialized
INFO - 2017-06-05 20:26:21 --> Database Driver Class Initialized
INFO - 2017-06-05 20:26:22 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:26:22 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-05 20:26:22 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:26:22 --> Final output sent to browser
DEBUG - 2017-06-05 20:26:22 --> Total execution time: 1.1437
INFO - 2017-06-05 20:26:23 --> Config Class Initialized
INFO - 2017-06-05 20:26:23 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:26:23 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:26:23 --> Utf8 Class Initialized
INFO - 2017-06-05 20:26:23 --> URI Class Initialized
INFO - 2017-06-05 20:26:23 --> Router Class Initialized
INFO - 2017-06-05 20:26:23 --> Output Class Initialized
INFO - 2017-06-05 20:26:23 --> Security Class Initialized
DEBUG - 2017-06-05 20:26:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:26:23 --> Input Class Initialized
INFO - 2017-06-05 20:26:23 --> Language Class Initialized
INFO - 2017-06-05 20:26:23 --> Loader Class Initialized
INFO - 2017-06-05 20:26:23 --> Helper loaded: url_helper
INFO - 2017-06-05 20:26:23 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:26:23 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:26:23 --> Controller Class Initialized
DEBUG - 2017-06-05 20:26:23 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:26:23 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/verificaDitado/2603]
INFO - 2017-06-05 20:26:23 --> Model Class Initialized
INFO - 2017-06-05 20:26:23 --> Database Driver Class Initialized
INFO - 2017-06-05 20:27:06 --> Config Class Initialized
INFO - 2017-06-05 20:27:06 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:27:07 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:27:07 --> Utf8 Class Initialized
INFO - 2017-06-05 20:27:07 --> URI Class Initialized
INFO - 2017-06-05 20:27:07 --> Router Class Initialized
INFO - 2017-06-05 20:27:07 --> Output Class Initialized
INFO - 2017-06-05 20:27:07 --> Security Class Initialized
DEBUG - 2017-06-05 20:27:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:27:07 --> Input Class Initialized
INFO - 2017-06-05 20:27:07 --> Language Class Initialized
INFO - 2017-06-05 20:27:07 --> Loader Class Initialized
INFO - 2017-06-05 20:27:07 --> Helper loaded: url_helper
INFO - 2017-06-05 20:27:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:27:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:27:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:27:07 --> Controller Class Initialized
DEBUG - 2017-06-05 20:27:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:27:07 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:27:07 --> Model Class Initialized
INFO - 2017-06-05 20:27:07 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:27:07 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:27:07 --> Final output sent to browser
DEBUG - 2017-06-05 20:27:07 --> Total execution time: 0.1004
INFO - 2017-06-05 20:27:07 --> Config Class Initialized
INFO - 2017-06-05 20:27:07 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:27:07 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:27:07 --> Utf8 Class Initialized
INFO - 2017-06-05 20:27:07 --> URI Class Initialized
INFO - 2017-06-05 20:27:07 --> Router Class Initialized
INFO - 2017-06-05 20:27:07 --> Output Class Initialized
INFO - 2017-06-05 20:27:07 --> Security Class Initialized
DEBUG - 2017-06-05 20:27:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:27:07 --> Input Class Initialized
INFO - 2017-06-05 20:27:07 --> Language Class Initialized
INFO - 2017-06-05 20:27:07 --> Loader Class Initialized
INFO - 2017-06-05 20:27:07 --> Helper loaded: url_helper
INFO - 2017-06-05 20:27:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:27:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:27:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:27:07 --> Controller Class Initialized
DEBUG - 2017-06-05 20:27:07 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:27:07 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/FluxoDigitacao]
INFO - 2017-06-05 20:27:07 --> Model Class Initialized
INFO - 2017-06-05 20:27:07 --> Database Driver Class Initialized
DEBUG - 2017-06-05 20:27:07 --> SELECT * FROM
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
							and c.datahora >= to_date('05/01/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('05/06/2017', 'DD/MM/YYYY') and al.fm_laudado = 'S'
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-06-05 20:27:07 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-05 20:27:07 --> Final output sent to browser
DEBUG - 2017-06-05 20:27:07 --> Total execution time: 0.1101
INFO - 2017-06-05 20:27:11 --> Config Class Initialized
INFO - 2017-06-05 20:27:11 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:27:11 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:27:11 --> Utf8 Class Initialized
INFO - 2017-06-05 20:27:11 --> URI Class Initialized
INFO - 2017-06-05 20:27:11 --> Router Class Initialized
INFO - 2017-06-05 20:27:11 --> Output Class Initialized
INFO - 2017-06-05 20:27:11 --> Security Class Initialized
DEBUG - 2017-06-05 20:27:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:27:11 --> Input Class Initialized
INFO - 2017-06-05 20:27:11 --> Language Class Initialized
INFO - 2017-06-05 20:27:11 --> Loader Class Initialized
INFO - 2017-06-05 20:27:11 --> Helper loaded: url_helper
INFO - 2017-06-05 20:27:11 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:27:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:27:11 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:27:11 --> Controller Class Initialized
DEBUG - 2017-06-05 20:27:11 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:27:11 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/imprimir/2568/0/imprimir]
INFO - 2017-06-05 20:27:11 --> Model Class Initialized
INFO - 2017-06-05 20:27:11 --> Database Driver Class Initialized
INFO - 2017-06-05 20:28:32 --> Config Class Initialized
INFO - 2017-06-05 20:28:32 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:28:32 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:28:32 --> Utf8 Class Initialized
INFO - 2017-06-05 20:28:32 --> URI Class Initialized
INFO - 2017-06-05 20:28:32 --> Router Class Initialized
INFO - 2017-06-05 20:28:32 --> Output Class Initialized
INFO - 2017-06-05 20:28:32 --> Security Class Initialized
DEBUG - 2017-06-05 20:28:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:28:32 --> Input Class Initialized
INFO - 2017-06-05 20:28:32 --> Language Class Initialized
INFO - 2017-06-05 20:28:32 --> Loader Class Initialized
INFO - 2017-06-05 20:28:32 --> Helper loaded: url_helper
INFO - 2017-06-05 20:28:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:28:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:28:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:28:32 --> Controller Class Initialized
DEBUG - 2017-06-05 20:28:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:28:32 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/imprimir/2565/1/imprimir]
INFO - 2017-06-05 20:28:32 --> Model Class Initialized
INFO - 2017-06-05 20:28:32 --> Database Driver Class Initialized
INFO - 2017-06-05 20:32:50 --> Config Class Initialized
INFO - 2017-06-05 20:32:50 --> Hooks Class Initialized
DEBUG - 2017-06-05 20:32:50 --> UTF-8 Support Enabled
INFO - 2017-06-05 20:32:50 --> Utf8 Class Initialized
INFO - 2017-06-05 20:32:50 --> URI Class Initialized
INFO - 2017-06-05 20:32:50 --> Router Class Initialized
INFO - 2017-06-05 20:32:50 --> Output Class Initialized
INFO - 2017-06-05 20:32:50 --> Security Class Initialized
DEBUG - 2017-06-05 20:32:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-05 20:32:50 --> Input Class Initialized
INFO - 2017-06-05 20:32:50 --> Language Class Initialized
INFO - 2017-06-05 20:32:50 --> Loader Class Initialized
INFO - 2017-06-05 20:32:50 --> Helper loaded: url_helper
INFO - 2017-06-05 20:32:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-05 20:32:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-05 20:32:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-05 20:32:50 --> Controller Class Initialized
DEBUG - 2017-06-05 20:32:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-05 20:32:50 --> User[TESTE], Session[57f34218c25ef85113672e1c0f5deb49], IP[192.168.0.15], Request[/Editor/imprimir/2565/0/imprimir]
INFO - 2017-06-05 20:32:50 --> Model Class Initialized
INFO - 2017-06-05 20:32:50 --> Database Driver Class Initialized
