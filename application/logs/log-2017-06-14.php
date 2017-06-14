<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2017-06-14 08:34:13 --> Config Class Initialized
INFO - 2017-06-14 08:34:13 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:34:13 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:34:13 --> Utf8 Class Initialized
INFO - 2017-06-14 08:34:13 --> URI Class Initialized
DEBUG - 2017-06-14 08:34:13 --> No URI present. Default controller set.
INFO - 2017-06-14 08:34:13 --> Router Class Initialized
INFO - 2017-06-14 08:34:13 --> Output Class Initialized
INFO - 2017-06-14 08:34:13 --> Security Class Initialized
DEBUG - 2017-06-14 08:34:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:34:13 --> Input Class Initialized
INFO - 2017-06-14 08:34:13 --> Language Class Initialized
INFO - 2017-06-14 08:34:13 --> Loader Class Initialized
INFO - 2017-06-14 08:34:13 --> Helper loaded: url_helper
INFO - 2017-06-14 08:34:13 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:34:13 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:34:13 --> Controller Class Initialized
DEBUG - 2017-06-14 08:34:13 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:34:13 --> User[], Session[], IP[192.168.0.17], Request[/]
INFO - 2017-06-14 08:34:13 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:34:13 --> File loaded: /var/www/html/application/views/login/Index.php
INFO - 2017-06-14 08:34:13 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:34:13 --> Final output sent to browser
DEBUG - 2017-06-14 08:34:13 --> Total execution time: 0.0625
INFO - 2017-06-14 08:34:46 --> Config Class Initialized
INFO - 2017-06-14 08:34:46 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:34:46 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:34:46 --> Utf8 Class Initialized
INFO - 2017-06-14 08:34:46 --> URI Class Initialized
INFO - 2017-06-14 08:34:46 --> Router Class Initialized
INFO - 2017-06-14 08:34:46 --> Output Class Initialized
INFO - 2017-06-14 08:34:46 --> Security Class Initialized
DEBUG - 2017-06-14 08:34:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:34:46 --> Input Class Initialized
INFO - 2017-06-14 08:34:46 --> Language Class Initialized
INFO - 2017-06-14 08:34:46 --> Loader Class Initialized
INFO - 2017-06-14 08:34:46 --> Helper loaded: url_helper
INFO - 2017-06-14 08:34:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:34:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:34:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:34:46 --> Controller Class Initialized
DEBUG - 2017-06-14 08:34:46 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:34:46 --> User[], Session[], IP[192.168.0.17], Request[/Login/login]
INFO - 2017-06-14 08:34:46 --> Model Class Initialized
INFO - 2017-06-14 08:34:46 --> Database Driver Class Initialized
INFO - 2017-06-14 08:34:46 --> Final output sent to browser
DEBUG - 2017-06-14 08:34:46 --> Total execution time: 0.1724
INFO - 2017-06-14 08:34:46 --> Config Class Initialized
INFO - 2017-06-14 08:34:46 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:34:46 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:34:46 --> Utf8 Class Initialized
INFO - 2017-06-14 08:34:46 --> URI Class Initialized
INFO - 2017-06-14 08:34:46 --> Router Class Initialized
INFO - 2017-06-14 08:34:46 --> Output Class Initialized
INFO - 2017-06-14 08:34:46 --> Security Class Initialized
DEBUG - 2017-06-14 08:34:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:34:46 --> Input Class Initialized
INFO - 2017-06-14 08:34:46 --> Language Class Initialized
INFO - 2017-06-14 08:34:47 --> Loader Class Initialized
INFO - 2017-06-14 08:34:47 --> Helper loaded: url_helper
INFO - 2017-06-14 08:34:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:34:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:34:47 --> Controller Class Initialized
DEBUG - 2017-06-14 08:34:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:34:47 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:34:47 --> Model Class Initialized
INFO - 2017-06-14 08:34:47 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:34:47 --> SELECT * FROM
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
					   and c.datahora >= to_date('13/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:34:47 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:34:47 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:34:47 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:34:47 --> Final output sent to browser
DEBUG - 2017-06-14 08:34:47 --> Total execution time: 0.7889
INFO - 2017-06-14 08:45:47 --> Config Class Initialized
INFO - 2017-06-14 08:45:47 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:45:47 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:45:47 --> Utf8 Class Initialized
INFO - 2017-06-14 08:45:47 --> URI Class Initialized
INFO - 2017-06-14 08:45:47 --> Router Class Initialized
INFO - 2017-06-14 08:45:47 --> Output Class Initialized
INFO - 2017-06-14 08:45:47 --> Security Class Initialized
DEBUG - 2017-06-14 08:45:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:45:47 --> Input Class Initialized
INFO - 2017-06-14 08:45:47 --> Language Class Initialized
INFO - 2017-06-14 08:45:47 --> Loader Class Initialized
INFO - 2017-06-14 08:45:47 --> Helper loaded: url_helper
INFO - 2017-06-14 08:45:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:45:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:45:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:45:47 --> Controller Class Initialized
DEBUG - 2017-06-14 08:45:47 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:45:47 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:45:47 --> Model Class Initialized
INFO - 2017-06-14 08:45:47 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:45:47 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:45:47 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:45:47 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:45:47 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:45:47 --> Final output sent to browser
DEBUG - 2017-06-14 08:45:47 --> Total execution time: 0.3819
INFO - 2017-06-14 08:45:49 --> Config Class Initialized
INFO - 2017-06-14 08:45:49 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:45:49 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:45:49 --> Utf8 Class Initialized
INFO - 2017-06-14 08:45:49 --> URI Class Initialized
INFO - 2017-06-14 08:45:49 --> Router Class Initialized
INFO - 2017-06-14 08:45:49 --> Output Class Initialized
INFO - 2017-06-14 08:45:49 --> Security Class Initialized
DEBUG - 2017-06-14 08:45:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:45:49 --> Input Class Initialized
INFO - 2017-06-14 08:45:49 --> Language Class Initialized
INFO - 2017-06-14 08:45:49 --> Loader Class Initialized
INFO - 2017-06-14 08:45:49 --> Helper loaded: url_helper
INFO - 2017-06-14 08:45:49 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:45:49 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:45:49 --> Controller Class Initialized
DEBUG - 2017-06-14 08:45:49 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:45:49 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:45:49 --> Model Class Initialized
INFO - 2017-06-14 08:45:49 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:45:49 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:45:49 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:45:49 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:45:49 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:45:49 --> Final output sent to browser
DEBUG - 2017-06-14 08:45:49 --> Total execution time: 0.1541
INFO - 2017-06-14 08:45:50 --> Config Class Initialized
INFO - 2017-06-14 08:45:50 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:45:50 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:45:50 --> Utf8 Class Initialized
INFO - 2017-06-14 08:45:50 --> URI Class Initialized
INFO - 2017-06-14 08:45:50 --> Router Class Initialized
INFO - 2017-06-14 08:45:50 --> Output Class Initialized
INFO - 2017-06-14 08:45:50 --> Security Class Initialized
DEBUG - 2017-06-14 08:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:45:50 --> Input Class Initialized
INFO - 2017-06-14 08:45:50 --> Language Class Initialized
INFO - 2017-06-14 08:45:50 --> Loader Class Initialized
INFO - 2017-06-14 08:45:50 --> Helper loaded: url_helper
INFO - 2017-06-14 08:45:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:45:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:45:50 --> Controller Class Initialized
DEBUG - 2017-06-14 08:45:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:45:50 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:45:50 --> Model Class Initialized
INFO - 2017-06-14 08:45:50 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:45:50 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:45:50 --> Final output sent to browser
DEBUG - 2017-06-14 08:45:50 --> Total execution time: 0.1299
INFO - 2017-06-14 08:45:50 --> Config Class Initialized
INFO - 2017-06-14 08:45:50 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:45:50 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:45:50 --> Utf8 Class Initialized
INFO - 2017-06-14 08:45:50 --> URI Class Initialized
INFO - 2017-06-14 08:45:50 --> Router Class Initialized
INFO - 2017-06-14 08:45:50 --> Output Class Initialized
INFO - 2017-06-14 08:45:50 --> Security Class Initialized
DEBUG - 2017-06-14 08:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:45:50 --> Input Class Initialized
INFO - 2017-06-14 08:45:50 --> Language Class Initialized
INFO - 2017-06-14 08:45:50 --> Loader Class Initialized
INFO - 2017-06-14 08:45:50 --> Helper loaded: url_helper
INFO - 2017-06-14 08:45:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:45:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:45:50 --> Controller Class Initialized
DEBUG - 2017-06-14 08:45:50 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:45:50 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:45:50 --> Model Class Initialized
INFO - 2017-06-14 08:45:50 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:45:50 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:45:50 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:45:50 --> Final output sent to browser
DEBUG - 2017-06-14 08:45:50 --> Total execution time: 0.1270
INFO - 2017-06-14 08:45:51 --> Config Class Initialized
INFO - 2017-06-14 08:45:51 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:45:51 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:45:51 --> Utf8 Class Initialized
INFO - 2017-06-14 08:45:51 --> URI Class Initialized
INFO - 2017-06-14 08:45:51 --> Router Class Initialized
INFO - 2017-06-14 08:45:51 --> Output Class Initialized
INFO - 2017-06-14 08:45:51 --> Security Class Initialized
DEBUG - 2017-06-14 08:45:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:45:51 --> Input Class Initialized
INFO - 2017-06-14 08:45:51 --> Language Class Initialized
INFO - 2017-06-14 08:45:51 --> Loader Class Initialized
INFO - 2017-06-14 08:45:51 --> Helper loaded: url_helper
INFO - 2017-06-14 08:45:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:45:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:45:51 --> Controller Class Initialized
DEBUG - 2017-06-14 08:45:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:45:51 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:45:51 --> Model Class Initialized
INFO - 2017-06-14 08:45:51 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:45:51 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:45:51 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:45:51 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:45:51 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:45:51 --> Final output sent to browser
DEBUG - 2017-06-14 08:45:51 --> Total execution time: 0.1284
INFO - 2017-06-14 08:48:57 --> Config Class Initialized
INFO - 2017-06-14 08:48:57 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:48:57 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:48:57 --> Utf8 Class Initialized
INFO - 2017-06-14 08:48:57 --> URI Class Initialized
INFO - 2017-06-14 08:48:57 --> Router Class Initialized
INFO - 2017-06-14 08:48:57 --> Output Class Initialized
INFO - 2017-06-14 08:48:57 --> Security Class Initialized
DEBUG - 2017-06-14 08:48:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:48:57 --> Input Class Initialized
INFO - 2017-06-14 08:48:57 --> Language Class Initialized
INFO - 2017-06-14 08:48:57 --> Loader Class Initialized
INFO - 2017-06-14 08:48:57 --> Helper loaded: url_helper
INFO - 2017-06-14 08:48:57 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:48:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:48:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:48:57 --> Controller Class Initialized
DEBUG - 2017-06-14 08:48:57 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:48:57 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/digitar/2636]
INFO - 2017-06-14 08:48:57 --> Model Class Initialized
INFO - 2017-06-14 08:48:57 --> Database Driver Class Initialized
INFO - 2017-06-14 08:48:58 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:48:58 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-14 08:48:58 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:48:58 --> Final output sent to browser
DEBUG - 2017-06-14 08:48:58 --> Total execution time: 0.3459
INFO - 2017-06-14 08:48:58 --> Config Class Initialized
INFO - 2017-06-14 08:48:58 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:48:58 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:48:58 --> Utf8 Class Initialized
INFO - 2017-06-14 08:48:58 --> URI Class Initialized
INFO - 2017-06-14 08:48:58 --> Router Class Initialized
INFO - 2017-06-14 08:48:58 --> Output Class Initialized
INFO - 2017-06-14 08:48:58 --> Security Class Initialized
DEBUG - 2017-06-14 08:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:48:58 --> Input Class Initialized
INFO - 2017-06-14 08:48:58 --> Language Class Initialized
INFO - 2017-06-14 08:48:58 --> Loader Class Initialized
INFO - 2017-06-14 08:48:58 --> Helper loaded: url_helper
INFO - 2017-06-14 08:48:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:48:58 --> Controller Class Initialized
DEBUG - 2017-06-14 08:48:58 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:48:58 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/verificaDitado/2636]
INFO - 2017-06-14 08:48:58 --> Model Class Initialized
INFO - 2017-06-14 08:48:58 --> Database Driver Class Initialized
INFO - 2017-06-14 08:49:09 --> Config Class Initialized
INFO - 2017-06-14 08:49:09 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:09 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:09 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:09 --> URI Class Initialized
INFO - 2017-06-14 08:49:09 --> Router Class Initialized
INFO - 2017-06-14 08:49:09 --> Output Class Initialized
INFO - 2017-06-14 08:49:09 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:09 --> Input Class Initialized
INFO - 2017-06-14 08:49:09 --> Language Class Initialized
INFO - 2017-06-14 08:49:09 --> Loader Class Initialized
INFO - 2017-06-14 08:49:09 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:09 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:09 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:09 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-06-14 08:49:09 --> Model Class Initialized
INFO - 2017-06-14 08:49:09 --> Database Driver Class Initialized
INFO - 2017-06-14 08:49:09 --> Final output sent to browser
DEBUG - 2017-06-14 08:49:09 --> Total execution time: 0.0772
INFO - 2017-06-14 08:49:10 --> Config Class Initialized
INFO - 2017-06-14 08:49:10 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:10 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:10 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:10 --> URI Class Initialized
INFO - 2017-06-14 08:49:10 --> Router Class Initialized
INFO - 2017-06-14 08:49:10 --> Output Class Initialized
INFO - 2017-06-14 08:49:10 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:10 --> Input Class Initialized
INFO - 2017-06-14 08:49:10 --> Language Class Initialized
INFO - 2017-06-14 08:49:10 --> Loader Class Initialized
INFO - 2017-06-14 08:49:10 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:10 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:10 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:10 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/TextoPadrao/textoPadrao/1091]
INFO - 2017-06-14 08:49:10 --> Model Class Initialized
INFO - 2017-06-14 08:49:10 --> Database Driver Class Initialized
INFO - 2017-06-14 08:49:15 --> Final output sent to browser
DEBUG - 2017-06-14 08:49:15 --> Total execution time: 5.3700
INFO - 2017-06-14 08:49:31 --> Config Class Initialized
INFO - 2017-06-14 08:49:31 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:31 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:31 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:31 --> URI Class Initialized
INFO - 2017-06-14 08:49:31 --> Router Class Initialized
INFO - 2017-06-14 08:49:31 --> Output Class Initialized
INFO - 2017-06-14 08:49:31 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:31 --> Input Class Initialized
INFO - 2017-06-14 08:49:31 --> Language Class Initialized
INFO - 2017-06-14 08:49:31 --> Loader Class Initialized
INFO - 2017-06-14 08:49:31 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:31 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:31 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:31 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:31 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:31 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/salvar/2636/digitar]
INFO - 2017-06-14 08:49:31 --> Model Class Initialized
INFO - 2017-06-14 08:49:31 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:49:32 --> update 	atd_laudo
				set 		laudoh = EMPTY_CLOB()  where codlaudo = 2636 returning laudoh into :temp
INFO - 2017-06-14 08:49:32 --> Config Class Initialized
INFO - 2017-06-14 08:49:32 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:32 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:32 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:32 --> URI Class Initialized
INFO - 2017-06-14 08:49:32 --> Router Class Initialized
INFO - 2017-06-14 08:49:32 --> Output Class Initialized
INFO - 2017-06-14 08:49:32 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:32 --> Input Class Initialized
INFO - 2017-06-14 08:49:32 --> Language Class Initialized
INFO - 2017-06-14 08:49:32 --> Loader Class Initialized
INFO - 2017-06-14 08:49:32 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:32 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:32 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/digitar/2636]
INFO - 2017-06-14 08:49:32 --> Model Class Initialized
INFO - 2017-06-14 08:49:32 --> Database Driver Class Initialized
INFO - 2017-06-14 08:49:32 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:49:32 --> File loaded: /var/www/html/application/views/laudo/EditorIndex.php
INFO - 2017-06-14 08:49:32 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:49:32 --> Final output sent to browser
DEBUG - 2017-06-14 08:49:32 --> Total execution time: 0.0917
INFO - 2017-06-14 08:49:32 --> Config Class Initialized
INFO - 2017-06-14 08:49:32 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:32 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:32 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:32 --> URI Class Initialized
INFO - 2017-06-14 08:49:32 --> Router Class Initialized
INFO - 2017-06-14 08:49:32 --> Output Class Initialized
INFO - 2017-06-14 08:49:32 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:32 --> Input Class Initialized
INFO - 2017-06-14 08:49:32 --> Language Class Initialized
INFO - 2017-06-14 08:49:32 --> Loader Class Initialized
INFO - 2017-06-14 08:49:32 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:32 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:32 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Sys/mensagemClean]
INFO - 2017-06-14 08:49:32 --> Final output sent to browser
DEBUG - 2017-06-14 08:49:32 --> Total execution time: 0.0101
INFO - 2017-06-14 08:49:32 --> Config Class Initialized
INFO - 2017-06-14 08:49:32 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:32 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:32 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:32 --> URI Class Initialized
INFO - 2017-06-14 08:49:32 --> Router Class Initialized
INFO - 2017-06-14 08:49:32 --> Output Class Initialized
INFO - 2017-06-14 08:49:32 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:32 --> Input Class Initialized
INFO - 2017-06-14 08:49:32 --> Language Class Initialized
INFO - 2017-06-14 08:49:32 --> Loader Class Initialized
INFO - 2017-06-14 08:49:32 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:32 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:32 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:32 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/verificaDitado/2636]
INFO - 2017-06-14 08:49:32 --> Model Class Initialized
INFO - 2017-06-14 08:49:32 --> Database Driver Class Initialized
INFO - 2017-06-14 08:49:35 --> Config Class Initialized
INFO - 2017-06-14 08:49:35 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:35 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:35 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:35 --> URI Class Initialized
INFO - 2017-06-14 08:49:35 --> Router Class Initialized
INFO - 2017-06-14 08:49:35 --> Output Class Initialized
INFO - 2017-06-14 08:49:35 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:35 --> Input Class Initialized
INFO - 2017-06-14 08:49:35 --> Language Class Initialized
INFO - 2017-06-14 08:49:35 --> Loader Class Initialized
INFO - 2017-06-14 08:49:35 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:35 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:35 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:35 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 08:49:35 --> Model Class Initialized
INFO - 2017-06-14 08:49:35 --> Database Driver Class Initialized
DEBUG - 2017-06-14 08:49:35 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 08:49:35 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 08:49:35 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 08:49:35 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 08:49:35 --> Final output sent to browser
DEBUG - 2017-06-14 08:49:35 --> Total execution time: 0.1371
INFO - 2017-06-14 08:49:51 --> Config Class Initialized
INFO - 2017-06-14 08:49:51 --> Hooks Class Initialized
DEBUG - 2017-06-14 08:49:51 --> UTF-8 Support Enabled
INFO - 2017-06-14 08:49:51 --> Utf8 Class Initialized
INFO - 2017-06-14 08:49:51 --> URI Class Initialized
INFO - 2017-06-14 08:49:51 --> Router Class Initialized
INFO - 2017-06-14 08:49:51 --> Output Class Initialized
INFO - 2017-06-14 08:49:51 --> Security Class Initialized
DEBUG - 2017-06-14 08:49:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 08:49:51 --> Input Class Initialized
INFO - 2017-06-14 08:49:51 --> Language Class Initialized
INFO - 2017-06-14 08:49:51 --> Loader Class Initialized
INFO - 2017-06-14 08:49:51 --> Helper loaded: url_helper
INFO - 2017-06-14 08:49:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 08:49:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 08:49:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 08:49:51 --> Controller Class Initialized
DEBUG - 2017-06-14 08:49:51 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 08:49:51 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/Editor/imprimir/2636/0/imprimir]
INFO - 2017-06-14 08:49:51 --> Model Class Initialized
INFO - 2017-06-14 08:49:51 --> Database Driver Class Initialized
INFO - 2017-06-14 12:49:51 --> Final output sent to browser
DEBUG - 2017-06-14 12:49:51 --> Total execution time: 0.6585
INFO - 2017-06-14 09:15:08 --> Config Class Initialized
INFO - 2017-06-14 09:15:08 --> Hooks Class Initialized
DEBUG - 2017-06-14 09:15:08 --> UTF-8 Support Enabled
INFO - 2017-06-14 09:15:08 --> Utf8 Class Initialized
INFO - 2017-06-14 09:15:08 --> URI Class Initialized
DEBUG - 2017-06-14 09:15:08 --> No URI present. Default controller set.
INFO - 2017-06-14 09:15:08 --> Router Class Initialized
INFO - 2017-06-14 09:15:08 --> Output Class Initialized
INFO - 2017-06-14 09:15:08 --> Security Class Initialized
DEBUG - 2017-06-14 09:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 09:15:08 --> Input Class Initialized
INFO - 2017-06-14 09:15:08 --> Language Class Initialized
INFO - 2017-06-14 09:15:08 --> Loader Class Initialized
INFO - 2017-06-14 09:15:08 --> Helper loaded: url_helper
INFO - 2017-06-14 09:15:08 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 09:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 09:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 09:15:08 --> Controller Class Initialized
DEBUG - 2017-06-14 09:15:08 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 09:15:08 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/]
INFO - 2017-06-14 09:15:08 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 09:15:08 --> File loaded: /var/www/html/application/views/main/Index.php
INFO - 2017-06-14 09:15:08 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 09:15:08 --> Final output sent to browser
DEBUG - 2017-06-14 09:15:08 --> Total execution time: 0.0093
INFO - 2017-06-14 09:15:08 --> Config Class Initialized
INFO - 2017-06-14 09:15:08 --> Hooks Class Initialized
DEBUG - 2017-06-14 09:15:08 --> UTF-8 Support Enabled
INFO - 2017-06-14 09:15:08 --> Utf8 Class Initialized
INFO - 2017-06-14 09:15:08 --> URI Class Initialized
INFO - 2017-06-14 09:15:08 --> Router Class Initialized
INFO - 2017-06-14 09:15:08 --> Output Class Initialized
INFO - 2017-06-14 09:15:08 --> Security Class Initialized
DEBUG - 2017-06-14 09:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-06-14 09:15:08 --> Input Class Initialized
INFO - 2017-06-14 09:15:08 --> Language Class Initialized
INFO - 2017-06-14 09:15:08 --> Loader Class Initialized
INFO - 2017-06-14 09:15:08 --> Helper loaded: url_helper
INFO - 2017-06-14 09:15:08 --> Helper loaded: funcoes_helper
DEBUG - 2017-06-14 09:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-06-14 09:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2017-06-14 09:15:08 --> Controller Class Initialized
DEBUG - 2017-06-14 09:15:08 --> Config file loaded: /var/www/html/application/config/sys_config.php
DEBUG - 2017-06-14 09:15:08 --> User[RENATO], Session[316dd942c2dcd1547c8e28cacb19284f], IP[192.168.0.17], Request[/FluxoMedico]
INFO - 2017-06-14 09:15:08 --> Model Class Initialized
INFO - 2017-06-14 09:15:08 --> Database Driver Class Initialized
DEBUG - 2017-06-14 09:15:09 --> SELECT * FROM
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
					   and c.datahora >= to_date('14/06/2017', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('14/06/2017', 'DD/MM/YYYY')
				order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-06-14 09:15:09 --> File loaded: /var/www/html/application/views/_includes/_header.php
INFO - 2017-06-14 09:15:09 --> File loaded: /var/www/html/application/views/laudo/FluxoMedicoIndex.php
INFO - 2017-06-14 09:15:09 --> File loaded: /var/www/html/application/views/_includes/_footer.php
INFO - 2017-06-14 09:15:09 --> Final output sent to browser
DEBUG - 2017-06-14 09:15:09 --> Total execution time: 0.1659
