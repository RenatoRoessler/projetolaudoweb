INFO - 2017-05-26 21:53:28 --> Config Class Initialized
INFO - 2017-05-26 21:53:28 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:53:28 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:53:28 --> Utf8 Class Initialized
INFO - 2017-05-26 21:53:28 --> URI Class Initialized
INFO - 2017-05-26 21:53:28 --> Router Class Initialized
INFO - 2017-05-26 21:53:28 --> Output Class Initialized
INFO - 2017-05-26 21:53:28 --> Security Class Initialized
DEBUG - 2017-05-26 21:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:53:28 --> Input Class Initialized
INFO - 2017-05-26 21:53:28 --> Language Class Initialized
INFO - 2017-05-26 21:53:28 --> Loader Class Initialized
INFO - 2017-05-26 21:53:28 --> Helper loaded: url_helper
INFO - 2017-05-26 21:53:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:53:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:53:28 --> Controller Class Initialized
DEBUG - 2017-05-26 21:53:28 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:53:28 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 21:53:28 --> Model Class Initialized
INFO - 2017-05-26 21:53:28 --> Database Driver Class Initialized
INFO - 2017-05-26 21:53:29 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 21:53:29 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 21:53:29 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 21:53:29 --> Final output sent to browser
DEBUG - 2017-05-26 21:53:29 --> Total execution time: 0.1731
INFO - 2017-05-26 21:53:35 --> Config Class Initialized
INFO - 2017-05-26 21:53:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:53:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:53:35 --> Utf8 Class Initialized
INFO - 2017-05-26 21:53:35 --> URI Class Initialized
INFO - 2017-05-26 21:53:35 --> Router Class Initialized
INFO - 2017-05-26 21:53:35 --> Output Class Initialized
INFO - 2017-05-26 21:53:35 --> Security Class Initialized
DEBUG - 2017-05-26 21:53:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:53:35 --> Input Class Initialized
INFO - 2017-05-26 21:53:35 --> Language Class Initialized
INFO - 2017-05-26 21:53:35 --> Loader Class Initialized
INFO - 2017-05-26 21:53:35 --> Helper loaded: url_helper
INFO - 2017-05-26 21:53:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:53:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:53:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:53:35 --> Controller Class Initialized
DEBUG - 2017-05-26 21:53:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:53:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 21:53:35 --> Model Class Initialized
INFO - 2017-05-26 21:53:35 --> Database Driver Class Initialized
DEBUG - 2017-05-26 21:53:35 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 21:53:35 --> Final output sent to browser
DEBUG - 2017-05-26 21:53:35 --> Total execution time: 0.0885
INFO - 2017-05-26 21:53:58 --> Config Class Initialized
INFO - 2017-05-26 21:53:58 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:53:58 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:53:58 --> Utf8 Class Initialized
INFO - 2017-05-26 21:53:58 --> URI Class Initialized
INFO - 2017-05-26 21:53:58 --> Router Class Initialized
INFO - 2017-05-26 21:53:58 --> Output Class Initialized
INFO - 2017-05-26 21:53:58 --> Security Class Initialized
DEBUG - 2017-05-26 21:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:53:58 --> Input Class Initialized
INFO - 2017-05-26 21:53:58 --> Language Class Initialized
INFO - 2017-05-26 21:53:58 --> Loader Class Initialized
INFO - 2017-05-26 21:53:58 --> Helper loaded: url_helper
INFO - 2017-05-26 21:53:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:53:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:53:58 --> Controller Class Initialized
DEBUG - 2017-05-26 21:53:58 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:53:58 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 21:53:58 --> Model Class Initialized
INFO - 2017-05-26 21:53:58 --> Database Driver Class Initialized
INFO - 2017-05-26 21:53:58 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 21:53:58 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 21:53:58 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 21:53:58 --> Final output sent to browser
DEBUG - 2017-05-26 21:53:58 --> Total execution time: 0.1989
INFO - 2017-05-26 21:53:59 --> Config Class Initialized
INFO - 2017-05-26 21:53:59 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:53:59 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:53:59 --> Utf8 Class Initialized
INFO - 2017-05-26 21:53:59 --> URI Class Initialized
INFO - 2017-05-26 21:53:59 --> Router Class Initialized
INFO - 2017-05-26 21:53:59 --> Output Class Initialized
INFO - 2017-05-26 21:53:59 --> Security Class Initialized
DEBUG - 2017-05-26 21:53:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:53:59 --> Input Class Initialized
INFO - 2017-05-26 21:53:59 --> Language Class Initialized
INFO - 2017-05-26 21:53:59 --> Loader Class Initialized
INFO - 2017-05-26 21:53:59 --> Helper loaded: url_helper
INFO - 2017-05-26 21:53:59 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:53:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:53:59 --> Controller Class Initialized
DEBUG - 2017-05-26 21:53:59 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:53:59 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 21:53:59 --> Final output sent to browser
DEBUG - 2017-05-26 21:53:59 --> Total execution time: 0.0029
INFO - 2017-05-26 21:54:56 --> Config Class Initialized
INFO - 2017-05-26 21:54:56 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:54:56 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:54:56 --> Utf8 Class Initialized
INFO - 2017-05-26 21:54:56 --> URI Class Initialized
INFO - 2017-05-26 21:54:56 --> Router Class Initialized
INFO - 2017-05-26 21:54:56 --> Output Class Initialized
INFO - 2017-05-26 21:54:56 --> Security Class Initialized
DEBUG - 2017-05-26 21:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:54:56 --> Input Class Initialized
INFO - 2017-05-26 21:54:56 --> Language Class Initialized
INFO - 2017-05-26 21:54:56 --> Loader Class Initialized
INFO - 2017-05-26 21:54:56 --> Helper loaded: url_helper
INFO - 2017-05-26 21:54:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:54:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:54:56 --> Controller Class Initialized
DEBUG - 2017-05-26 21:54:56 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:54:56 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 21:54:56 --> Model Class Initialized
INFO - 2017-05-26 21:54:56 --> Database Driver Class Initialized
INFO - 2017-05-26 21:54:56 --> Final output sent to browser
DEBUG - 2017-05-26 21:54:56 --> Total execution time: 0.0726
INFO - 2017-05-26 21:55:00 --> Config Class Initialized
INFO - 2017-05-26 21:55:00 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:55:00 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:55:00 --> Utf8 Class Initialized
INFO - 2017-05-26 21:55:00 --> URI Class Initialized
INFO - 2017-05-26 21:55:00 --> Router Class Initialized
INFO - 2017-05-26 21:55:00 --> Output Class Initialized
INFO - 2017-05-26 21:55:00 --> Security Class Initialized
DEBUG - 2017-05-26 21:55:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:55:00 --> Input Class Initialized
INFO - 2017-05-26 21:55:00 --> Language Class Initialized
INFO - 2017-05-26 21:55:00 --> Loader Class Initialized
INFO - 2017-05-26 21:55:00 --> Helper loaded: url_helper
INFO - 2017-05-26 21:55:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:55:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:55:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:55:00 --> Controller Class Initialized
DEBUG - 2017-05-26 21:55:00 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:55:00 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/2109]
INFO - 2017-05-26 21:55:00 --> Model Class Initialized
INFO - 2017-05-26 21:55:00 --> Database Driver Class Initialized
INFO - 2017-05-26 21:55:00 --> Final output sent to browser
DEBUG - 2017-05-26 21:55:00 --> Total execution time: 0.0910
INFO - 2017-05-26 21:55:07 --> Config Class Initialized
INFO - 2017-05-26 21:55:07 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:55:07 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:55:07 --> Utf8 Class Initialized
INFO - 2017-05-26 21:55:07 --> URI Class Initialized
INFO - 2017-05-26 21:55:07 --> Router Class Initialized
INFO - 2017-05-26 21:55:07 --> Output Class Initialized
INFO - 2017-05-26 21:55:07 --> Security Class Initialized
DEBUG - 2017-05-26 21:55:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:55:07 --> Input Class Initialized
INFO - 2017-05-26 21:55:07 --> Language Class Initialized
INFO - 2017-05-26 21:55:07 --> Loader Class Initialized
INFO - 2017-05-26 21:55:07 --> Helper loaded: url_helper
INFO - 2017-05-26 21:55:07 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:55:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:55:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:55:07 --> Controller Class Initialized
DEBUG - 2017-05-26 21:55:07 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:55:07 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/1132]
INFO - 2017-05-26 21:55:07 --> Model Class Initialized
INFO - 2017-05-26 21:55:07 --> Database Driver Class Initialized
INFO - 2017-05-26 21:55:09 --> Final output sent to browser
DEBUG - 2017-05-26 21:55:09 --> Total execution time: 1.9199
INFO - 2017-05-26 21:55:11 --> Config Class Initialized
INFO - 2017-05-26 21:55:11 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:55:11 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:55:11 --> Utf8 Class Initialized
INFO - 2017-05-26 21:55:11 --> URI Class Initialized
INFO - 2017-05-26 21:55:11 --> Router Class Initialized
INFO - 2017-05-26 21:55:11 --> Output Class Initialized
INFO - 2017-05-26 21:55:11 --> Security Class Initialized
DEBUG - 2017-05-26 21:55:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:55:11 --> Input Class Initialized
INFO - 2017-05-26 21:55:11 --> Language Class Initialized
INFO - 2017-05-26 21:55:11 --> Loader Class Initialized
INFO - 2017-05-26 21:55:11 --> Helper loaded: url_helper
INFO - 2017-05-26 21:55:11 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:55:11 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:55:11 --> Controller Class Initialized
DEBUG - 2017-05-26 21:55:11 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:55:11 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/2109]
INFO - 2017-05-26 21:55:11 --> Model Class Initialized
INFO - 2017-05-26 21:55:11 --> Database Driver Class Initialized
INFO - 2017-05-26 21:55:11 --> Final output sent to browser
DEBUG - 2017-05-26 21:55:11 --> Total execution time: 0.0783
INFO - 2017-05-26 21:55:27 --> Config Class Initialized
INFO - 2017-05-26 21:55:27 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:55:27 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:55:27 --> Utf8 Class Initialized
INFO - 2017-05-26 21:55:27 --> URI Class Initialized
INFO - 2017-05-26 21:55:27 --> Router Class Initialized
INFO - 2017-05-26 21:55:27 --> Output Class Initialized
INFO - 2017-05-26 21:55:27 --> Security Class Initialized
DEBUG - 2017-05-26 21:55:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:55:27 --> Input Class Initialized
INFO - 2017-05-26 21:55:27 --> Language Class Initialized
INFO - 2017-05-26 21:55:27 --> Loader Class Initialized
INFO - 2017-05-26 21:55:27 --> Helper loaded: url_helper
INFO - 2017-05-26 21:55:27 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:55:27 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:55:27 --> Controller Class Initialized
DEBUG - 2017-05-26 21:55:27 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:55:27 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/1132]
INFO - 2017-05-26 21:55:27 --> Model Class Initialized
INFO - 2017-05-26 21:55:27 --> Database Driver Class Initialized
INFO - 2017-05-26 21:55:28 --> Final output sent to browser
DEBUG - 2017-05-26 21:55:28 --> Total execution time: 1.6415
INFO - 2017-05-26 21:55:29 --> Config Class Initialized
INFO - 2017-05-26 21:55:29 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:55:29 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:55:29 --> Utf8 Class Initialized
INFO - 2017-05-26 21:55:29 --> URI Class Initialized
INFO - 2017-05-26 21:55:29 --> Router Class Initialized
INFO - 2017-05-26 21:55:29 --> Output Class Initialized
INFO - 2017-05-26 21:55:29 --> Security Class Initialized
DEBUG - 2017-05-26 21:55:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:55:29 --> Input Class Initialized
INFO - 2017-05-26 21:55:29 --> Language Class Initialized
INFO - 2017-05-26 21:55:29 --> Loader Class Initialized
INFO - 2017-05-26 21:55:29 --> Helper loaded: url_helper
INFO - 2017-05-26 21:55:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:55:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:55:29 --> Controller Class Initialized
DEBUG - 2017-05-26 21:55:29 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:55:29 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/2109]
INFO - 2017-05-26 21:55:29 --> Model Class Initialized
INFO - 2017-05-26 21:55:29 --> Database Driver Class Initialized
INFO - 2017-05-26 21:55:29 --> Final output sent to browser
DEBUG - 2017-05-26 21:55:29 --> Total execution time: 0.0760
INFO - 2017-05-26 21:57:44 --> Config Class Initialized
INFO - 2017-05-26 21:57:44 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:57:44 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:57:44 --> Utf8 Class Initialized
INFO - 2017-05-26 21:57:44 --> URI Class Initialized
INFO - 2017-05-26 21:57:44 --> Router Class Initialized
INFO - 2017-05-26 21:57:44 --> Output Class Initialized
INFO - 2017-05-26 21:57:44 --> Security Class Initialized
DEBUG - 2017-05-26 21:57:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:57:44 --> Input Class Initialized
INFO - 2017-05-26 21:57:44 --> Language Class Initialized
INFO - 2017-05-26 21:57:44 --> Loader Class Initialized
INFO - 2017-05-26 21:57:44 --> Helper loaded: url_helper
INFO - 2017-05-26 21:57:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:57:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:57:44 --> Controller Class Initialized
DEBUG - 2017-05-26 21:57:44 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:57:44 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/1132]
INFO - 2017-05-26 21:57:44 --> Model Class Initialized
INFO - 2017-05-26 21:57:44 --> Database Driver Class Initialized
INFO - 2017-05-26 21:57:45 --> Final output sent to browser
DEBUG - 2017-05-26 21:57:45 --> Total execution time: 1.5555
INFO - 2017-05-26 21:57:47 --> Config Class Initialized
INFO - 2017-05-26 21:57:47 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:57:47 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:57:47 --> Utf8 Class Initialized
INFO - 2017-05-26 21:57:47 --> URI Class Initialized
INFO - 2017-05-26 21:57:47 --> Router Class Initialized
INFO - 2017-05-26 21:57:47 --> Output Class Initialized
INFO - 2017-05-26 21:57:47 --> Security Class Initialized
DEBUG - 2017-05-26 21:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:57:47 --> Input Class Initialized
INFO - 2017-05-26 21:57:47 --> Language Class Initialized
INFO - 2017-05-26 21:57:47 --> Loader Class Initialized
INFO - 2017-05-26 21:57:47 --> Helper loaded: url_helper
INFO - 2017-05-26 21:57:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:57:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:57:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:57:47 --> Controller Class Initialized
DEBUG - 2017-05-26 21:57:47 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:57:47 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/2109]
INFO - 2017-05-26 21:57:47 --> Model Class Initialized
INFO - 2017-05-26 21:57:47 --> Database Driver Class Initialized
INFO - 2017-05-26 21:57:47 --> Final output sent to browser
DEBUG - 2017-05-26 21:57:47 --> Total execution time: 0.0996
INFO - 2017-05-26 21:58:51 --> Config Class Initialized
INFO - 2017-05-26 21:58:51 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:58:51 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:58:51 --> Utf8 Class Initialized
INFO - 2017-05-26 21:58:51 --> URI Class Initialized
INFO - 2017-05-26 21:58:51 --> Router Class Initialized
INFO - 2017-05-26 21:58:51 --> Output Class Initialized
INFO - 2017-05-26 21:58:51 --> Security Class Initialized
DEBUG - 2017-05-26 21:58:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:58:51 --> Input Class Initialized
INFO - 2017-05-26 21:58:51 --> Language Class Initialized
INFO - 2017-05-26 21:58:51 --> Loader Class Initialized
INFO - 2017-05-26 21:58:51 --> Helper loaded: url_helper
INFO - 2017-05-26 21:58:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:58:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:58:51 --> Controller Class Initialized
DEBUG - 2017-05-26 21:58:51 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:58:51 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/2109]
INFO - 2017-05-26 21:58:51 --> Model Class Initialized
INFO - 2017-05-26 21:58:51 --> Database Driver Class Initialized
DEBUG - 2017-05-26 21:58:51 --> update 	laudo
				set 		textoh = EMPTY_CLOB()  where codlau = 9 returning textoh into :temp
INFO - 2017-05-26 21:58:51 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 21:58:51 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 21:58:51 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 21:58:51 --> Final output sent to browser
DEBUG - 2017-05-26 21:58:51 --> Total execution time: 0.1423
INFO - 2017-05-26 21:58:52 --> Config Class Initialized
INFO - 2017-05-26 21:58:52 --> Hooks Class Initialized
DEBUG - 2017-05-26 21:58:52 --> UTF-8 Support Enabled
INFO - 2017-05-26 21:58:52 --> Utf8 Class Initialized
INFO - 2017-05-26 21:58:52 --> URI Class Initialized
INFO - 2017-05-26 21:58:52 --> Router Class Initialized
INFO - 2017-05-26 21:58:52 --> Output Class Initialized
INFO - 2017-05-26 21:58:52 --> Security Class Initialized
DEBUG - 2017-05-26 21:58:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 21:58:52 --> Input Class Initialized
INFO - 2017-05-26 21:58:52 --> Language Class Initialized
INFO - 2017-05-26 21:58:52 --> Loader Class Initialized
INFO - 2017-05-26 21:58:52 --> Helper loaded: url_helper
INFO - 2017-05-26 21:58:52 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 21:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 21:58:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 21:58:52 --> Controller Class Initialized
DEBUG - 2017-05-26 21:58:52 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 21:58:52 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 21:58:52 --> Final output sent to browser
DEBUG - 2017-05-26 21:58:52 --> Total execution time: 0.0030
INFO - 2017-05-26 22:00:00 --> Config Class Initialized
INFO - 2017-05-26 22:00:00 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:00 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:00 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:00 --> URI Class Initialized
INFO - 2017-05-26 22:00:00 --> Router Class Initialized
INFO - 2017-05-26 22:00:00 --> Output Class Initialized
INFO - 2017-05-26 22:00:00 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:00 --> Input Class Initialized
INFO - 2017-05-26 22:00:00 --> Language Class Initialized
INFO - 2017-05-26 22:00:00 --> Loader Class Initialized
INFO - 2017-05-26 22:00:00 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:00 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:00 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:00 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:00:00 --> Model Class Initialized
INFO - 2017-05-26 22:00:00 --> Database Driver Class Initialized
INFO - 2017-05-26 22:00:00 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:00:00 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:00:00 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:00:00 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:00 --> Total execution time: 0.1967
INFO - 2017-05-26 22:00:10 --> Config Class Initialized
INFO - 2017-05-26 22:00:10 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:10 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:10 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:10 --> URI Class Initialized
INFO - 2017-05-26 22:00:10 --> Router Class Initialized
INFO - 2017-05-26 22:00:10 --> Output Class Initialized
INFO - 2017-05-26 22:00:10 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:10 --> Input Class Initialized
INFO - 2017-05-26 22:00:10 --> Language Class Initialized
INFO - 2017-05-26 22:00:10 --> Loader Class Initialized
INFO - 2017-05-26 22:00:10 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:10 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:10 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:10 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:00:10 --> Model Class Initialized
INFO - 2017-05-26 22:00:10 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:00:11 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:00:11 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:11 --> Total execution time: 0.2712
INFO - 2017-05-26 22:00:18 --> Config Class Initialized
INFO - 2017-05-26 22:00:18 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:18 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:18 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:18 --> URI Class Initialized
INFO - 2017-05-26 22:00:18 --> Router Class Initialized
INFO - 2017-05-26 22:00:18 --> Output Class Initialized
INFO - 2017-05-26 22:00:18 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:18 --> Input Class Initialized
INFO - 2017-05-26 22:00:18 --> Language Class Initialized
INFO - 2017-05-26 22:00:18 --> Loader Class Initialized
INFO - 2017-05-26 22:00:18 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:18 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:18 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:18 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:00:18 --> Model Class Initialized
INFO - 2017-05-26 22:00:18 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:00:18 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-26 22:00:18 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:18 --> Total execution time: 0.0860
INFO - 2017-05-26 22:00:28 --> Config Class Initialized
INFO - 2017-05-26 22:00:28 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:28 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:28 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:28 --> URI Class Initialized
INFO - 2017-05-26 22:00:28 --> Router Class Initialized
INFO - 2017-05-26 22:00:28 --> Output Class Initialized
INFO - 2017-05-26 22:00:28 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:28 --> Input Class Initialized
INFO - 2017-05-26 22:00:28 --> Language Class Initialized
INFO - 2017-05-26 22:00:28 --> Loader Class Initialized
INFO - 2017-05-26 22:00:28 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:28 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:28 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:28 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:00:28 --> Model Class Initialized
INFO - 2017-05-26 22:00:28 --> Database Driver Class Initialized
INFO - 2017-05-26 22:00:28 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:00:28 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:00:28 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:00:28 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:28 --> Total execution time: 0.1811
INFO - 2017-05-26 22:00:29 --> Config Class Initialized
INFO - 2017-05-26 22:00:29 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:29 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:29 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:29 --> URI Class Initialized
INFO - 2017-05-26 22:00:29 --> Router Class Initialized
INFO - 2017-05-26 22:00:29 --> Output Class Initialized
INFO - 2017-05-26 22:00:29 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:29 --> Input Class Initialized
INFO - 2017-05-26 22:00:29 --> Language Class Initialized
INFO - 2017-05-26 22:00:29 --> Loader Class Initialized
INFO - 2017-05-26 22:00:29 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:29 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:29 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:29 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:00:29 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:29 --> Total execution time: 0.0044
INFO - 2017-05-26 22:00:34 --> Config Class Initialized
INFO - 2017-05-26 22:00:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:34 --> URI Class Initialized
INFO - 2017-05-26 22:00:34 --> Router Class Initialized
INFO - 2017-05-26 22:00:34 --> Output Class Initialized
INFO - 2017-05-26 22:00:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:34 --> Input Class Initialized
INFO - 2017-05-26 22:00:34 --> Language Class Initialized
INFO - 2017-05-26 22:00:34 --> Loader Class Initialized
INFO - 2017-05-26 22:00:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:00:34 --> Model Class Initialized
INFO - 2017-05-26 22:00:34 --> Database Driver Class Initialized
INFO - 2017-05-26 22:00:35 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:00:35 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:00:35 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:00:35 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:35 --> Total execution time: 0.2257
INFO - 2017-05-26 22:00:36 --> Config Class Initialized
INFO - 2017-05-26 22:00:36 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:36 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:36 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:36 --> URI Class Initialized
INFO - 2017-05-26 22:00:36 --> Router Class Initialized
INFO - 2017-05-26 22:00:36 --> Output Class Initialized
INFO - 2017-05-26 22:00:36 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:36 --> Input Class Initialized
INFO - 2017-05-26 22:00:36 --> Language Class Initialized
INFO - 2017-05-26 22:00:36 --> Loader Class Initialized
INFO - 2017-05-26 22:00:36 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:36 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:36 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:36 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:00:36 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:36 --> Total execution time: 0.0177
INFO - 2017-05-26 22:00:42 --> Config Class Initialized
INFO - 2017-05-26 22:00:42 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:42 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:42 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:42 --> URI Class Initialized
INFO - 2017-05-26 22:00:42 --> Router Class Initialized
INFO - 2017-05-26 22:00:42 --> Output Class Initialized
INFO - 2017-05-26 22:00:42 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:42 --> Input Class Initialized
INFO - 2017-05-26 22:00:42 --> Language Class Initialized
INFO - 2017-05-26 22:00:42 --> Loader Class Initialized
INFO - 2017-05-26 22:00:42 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:42 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:42 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:42 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:42 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:42 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:00:42 --> Model Class Initialized
INFO - 2017-05-26 22:00:42 --> Database Driver Class Initialized
INFO - 2017-05-26 22:00:42 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:00:42 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:00:42 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:00:42 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:42 --> Total execution time: 0.1550
INFO - 2017-05-26 22:00:43 --> Config Class Initialized
INFO - 2017-05-26 22:00:43 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:00:43 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:00:43 --> Utf8 Class Initialized
INFO - 2017-05-26 22:00:43 --> URI Class Initialized
INFO - 2017-05-26 22:00:43 --> Router Class Initialized
INFO - 2017-05-26 22:00:43 --> Output Class Initialized
INFO - 2017-05-26 22:00:43 --> Security Class Initialized
DEBUG - 2017-05-26 22:00:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:00:43 --> Input Class Initialized
INFO - 2017-05-26 22:00:43 --> Language Class Initialized
INFO - 2017-05-26 22:00:43 --> Loader Class Initialized
INFO - 2017-05-26 22:00:43 --> Helper loaded: url_helper
INFO - 2017-05-26 22:00:43 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:00:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:00:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:00:43 --> Controller Class Initialized
DEBUG - 2017-05-26 22:00:43 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:00:43 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:00:43 --> Final output sent to browser
DEBUG - 2017-05-26 22:00:43 --> Total execution time: 0.0026
INFO - 2017-05-26 22:01:33 --> Config Class Initialized
INFO - 2017-05-26 22:01:33 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:33 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:33 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:33 --> URI Class Initialized
INFO - 2017-05-26 22:01:33 --> Router Class Initialized
INFO - 2017-05-26 22:01:33 --> Output Class Initialized
INFO - 2017-05-26 22:01:33 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:33 --> Input Class Initialized
INFO - 2017-05-26 22:01:33 --> Language Class Initialized
INFO - 2017-05-26 22:01:33 --> Loader Class Initialized
INFO - 2017-05-26 22:01:33 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:33 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:33 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:33 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:33 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:33 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:01:33 --> Model Class Initialized
INFO - 2017-05-26 22:01:33 --> Database Driver Class Initialized
INFO - 2017-05-26 22:01:34 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:01:34 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:01:34 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:01:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:34 --> Total execution time: 0.1465
INFO - 2017-05-26 22:01:41 --> Config Class Initialized
INFO - 2017-05-26 22:01:41 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:41 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:41 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:41 --> URI Class Initialized
INFO - 2017-05-26 22:01:41 --> Router Class Initialized
INFO - 2017-05-26 22:01:41 --> Output Class Initialized
INFO - 2017-05-26 22:01:41 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:41 --> Input Class Initialized
INFO - 2017-05-26 22:01:41 --> Language Class Initialized
INFO - 2017-05-26 22:01:41 --> Loader Class Initialized
INFO - 2017-05-26 22:01:41 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:41 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:41 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:41 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:41 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:41 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:01:41 --> Model Class Initialized
INFO - 2017-05-26 22:01:41 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:01:41 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:01:41 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:41 --> Total execution time: 0.0598
INFO - 2017-05-26 22:01:43 --> Config Class Initialized
INFO - 2017-05-26 22:01:43 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:43 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:43 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:43 --> URI Class Initialized
INFO - 2017-05-26 22:01:43 --> Router Class Initialized
INFO - 2017-05-26 22:01:43 --> Output Class Initialized
INFO - 2017-05-26 22:01:43 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:43 --> Input Class Initialized
INFO - 2017-05-26 22:01:43 --> Language Class Initialized
INFO - 2017-05-26 22:01:43 --> Loader Class Initialized
INFO - 2017-05-26 22:01:43 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:43 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:43 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:43 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:43 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:01:43 --> Model Class Initialized
INFO - 2017-05-26 22:01:43 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:01:43 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-26 22:01:43 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:43 --> Total execution time: 0.0714
INFO - 2017-05-26 22:01:45 --> Config Class Initialized
INFO - 2017-05-26 22:01:45 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:45 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:45 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:45 --> URI Class Initialized
INFO - 2017-05-26 22:01:45 --> Router Class Initialized
INFO - 2017-05-26 22:01:45 --> Output Class Initialized
INFO - 2017-05-26 22:01:45 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:45 --> Input Class Initialized
INFO - 2017-05-26 22:01:45 --> Language Class Initialized
INFO - 2017-05-26 22:01:45 --> Loader Class Initialized
INFO - 2017-05-26 22:01:45 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:45 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:45 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:45 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:45 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:45 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:01:45 --> Model Class Initialized
INFO - 2017-05-26 22:01:45 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:01:45 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((3 * 10) + 1 )
						)
					WHERE r__ >= (((3-1) * 10) + 1)
INFO - 2017-05-26 22:01:45 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:45 --> Total execution time: 0.0805
INFO - 2017-05-26 22:01:47 --> Config Class Initialized
INFO - 2017-05-26 22:01:47 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:47 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:47 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:47 --> URI Class Initialized
INFO - 2017-05-26 22:01:47 --> Router Class Initialized
INFO - 2017-05-26 22:01:47 --> Output Class Initialized
INFO - 2017-05-26 22:01:47 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:47 --> Input Class Initialized
INFO - 2017-05-26 22:01:47 --> Language Class Initialized
INFO - 2017-05-26 22:01:47 --> Loader Class Initialized
INFO - 2017-05-26 22:01:47 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:47 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:47 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:47 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:01:47 --> Model Class Initialized
INFO - 2017-05-26 22:01:47 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:01:48 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((4 * 10) + 1 )
						)
					WHERE r__ >= (((4-1) * 10) + 1)
INFO - 2017-05-26 22:01:48 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:48 --> Total execution time: 0.0984
INFO - 2017-05-26 22:01:48 --> Config Class Initialized
INFO - 2017-05-26 22:01:48 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:01:48 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:01:48 --> Utf8 Class Initialized
INFO - 2017-05-26 22:01:48 --> URI Class Initialized
INFO - 2017-05-26 22:01:48 --> Router Class Initialized
INFO - 2017-05-26 22:01:48 --> Output Class Initialized
INFO - 2017-05-26 22:01:48 --> Security Class Initialized
DEBUG - 2017-05-26 22:01:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:01:48 --> Input Class Initialized
INFO - 2017-05-26 22:01:48 --> Language Class Initialized
INFO - 2017-05-26 22:01:48 --> Loader Class Initialized
INFO - 2017-05-26 22:01:48 --> Helper loaded: url_helper
INFO - 2017-05-26 22:01:48 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:01:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:01:48 --> Controller Class Initialized
DEBUG - 2017-05-26 22:01:48 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:01:48 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:01:48 --> Model Class Initialized
INFO - 2017-05-26 22:01:48 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:01:48 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM%' 
				order by	Codexa 
								) a
							WHERE rownum < ((5 * 10) + 1 )
						)
					WHERE r__ >= (((5-1) * 10) + 1)
INFO - 2017-05-26 22:01:48 --> Final output sent to browser
DEBUG - 2017-05-26 22:01:48 --> Total execution time: 0.0657
INFO - 2017-05-26 22:02:08 --> Config Class Initialized
INFO - 2017-05-26 22:02:08 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:08 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:08 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:08 --> URI Class Initialized
INFO - 2017-05-26 22:02:08 --> Router Class Initialized
INFO - 2017-05-26 22:02:08 --> Output Class Initialized
INFO - 2017-05-26 22:02:08 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:08 --> Input Class Initialized
INFO - 2017-05-26 22:02:08 --> Language Class Initialized
INFO - 2017-05-26 22:02:08 --> Loader Class Initialized
INFO - 2017-05-26 22:02:08 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:08 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:08 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:08 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:08 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:08 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:02:08 --> Model Class Initialized
INFO - 2017-05-26 22:02:08 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:08 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:02:08 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:02:08 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:02:08 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:08 --> Total execution time: 0.1305
INFO - 2017-05-26 22:02:09 --> Config Class Initialized
INFO - 2017-05-26 22:02:09 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:09 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:09 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:09 --> URI Class Initialized
INFO - 2017-05-26 22:02:09 --> Router Class Initialized
INFO - 2017-05-26 22:02:09 --> Output Class Initialized
INFO - 2017-05-26 22:02:09 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:09 --> Input Class Initialized
INFO - 2017-05-26 22:02:09 --> Language Class Initialized
INFO - 2017-05-26 22:02:09 --> Loader Class Initialized
INFO - 2017-05-26 22:02:09 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:09 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:09 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:09 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:02:09 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:09 --> Total execution time: 0.0184
INFO - 2017-05-26 22:02:20 --> Config Class Initialized
INFO - 2017-05-26 22:02:20 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:20 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:20 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:20 --> URI Class Initialized
INFO - 2017-05-26 22:02:20 --> Router Class Initialized
INFO - 2017-05-26 22:02:20 --> Output Class Initialized
INFO - 2017-05-26 22:02:20 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:20 --> Input Class Initialized
INFO - 2017-05-26 22:02:20 --> Language Class Initialized
INFO - 2017-05-26 22:02:20 --> Loader Class Initialized
INFO - 2017-05-26 22:02:20 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:20 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:20 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:20 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:20 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:02:20 --> Model Class Initialized
INFO - 2017-05-26 22:02:20 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:20 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:20 --> Total execution time: 0.0640
INFO - 2017-05-26 22:02:23 --> Config Class Initialized
INFO - 2017-05-26 22:02:23 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:23 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:23 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:23 --> URI Class Initialized
INFO - 2017-05-26 22:02:23 --> Router Class Initialized
INFO - 2017-05-26 22:02:23 --> Output Class Initialized
INFO - 2017-05-26 22:02:23 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:23 --> Input Class Initialized
INFO - 2017-05-26 22:02:23 --> Language Class Initialized
INFO - 2017-05-26 22:02:23 --> Loader Class Initialized
INFO - 2017-05-26 22:02:23 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:23 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:23 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:23 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:23 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:23 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:02:23 --> Model Class Initialized
INFO - 2017-05-26 22:02:23 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:23 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:23 --> Total execution time: 0.0620
INFO - 2017-05-26 22:02:29 --> Config Class Initialized
INFO - 2017-05-26 22:02:29 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:29 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:29 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:29 --> URI Class Initialized
INFO - 2017-05-26 22:02:29 --> Router Class Initialized
INFO - 2017-05-26 22:02:29 --> Output Class Initialized
INFO - 2017-05-26 22:02:29 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:29 --> Input Class Initialized
INFO - 2017-05-26 22:02:29 --> Language Class Initialized
INFO - 2017-05-26 22:02:29 --> Loader Class Initialized
INFO - 2017-05-26 22:02:29 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:29 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:29 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:29 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:02:29 --> Model Class Initialized
INFO - 2017-05-26 22:02:29 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:29 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:29 --> Total execution time: 0.0614
INFO - 2017-05-26 22:02:34 --> Config Class Initialized
INFO - 2017-05-26 22:02:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:34 --> URI Class Initialized
INFO - 2017-05-26 22:02:34 --> Router Class Initialized
INFO - 2017-05-26 22:02:34 --> Output Class Initialized
INFO - 2017-05-26 22:02:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:34 --> Input Class Initialized
INFO - 2017-05-26 22:02:34 --> Language Class Initialized
INFO - 2017-05-26 22:02:34 --> Loader Class Initialized
INFO - 2017-05-26 22:02:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:02:34 --> Model Class Initialized
INFO - 2017-05-26 22:02:34 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:34 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:02:34 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:02:34 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:02:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:34 --> Total execution time: 0.1305
INFO - 2017-05-26 22:02:39 --> Config Class Initialized
INFO - 2017-05-26 22:02:39 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:39 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:39 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:39 --> URI Class Initialized
INFO - 2017-05-26 22:02:39 --> Router Class Initialized
INFO - 2017-05-26 22:02:39 --> Output Class Initialized
INFO - 2017-05-26 22:02:39 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:39 --> Input Class Initialized
INFO - 2017-05-26 22:02:39 --> Language Class Initialized
INFO - 2017-05-26 22:02:39 --> Loader Class Initialized
INFO - 2017-05-26 22:02:39 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:39 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:39 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:39 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:39 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:02:39 --> Model Class Initialized
INFO - 2017-05-26 22:02:39 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:40 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:40 --> Total execution time: 0.1114
INFO - 2017-05-26 22:02:43 --> Config Class Initialized
INFO - 2017-05-26 22:02:43 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:43 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:43 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:43 --> URI Class Initialized
INFO - 2017-05-26 22:02:43 --> Router Class Initialized
INFO - 2017-05-26 22:02:43 --> Output Class Initialized
INFO - 2017-05-26 22:02:43 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:43 --> Input Class Initialized
INFO - 2017-05-26 22:02:43 --> Language Class Initialized
INFO - 2017-05-26 22:02:43 --> Loader Class Initialized
INFO - 2017-05-26 22:02:43 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:43 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:43 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:43 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:43 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/1888]
INFO - 2017-05-26 22:02:43 --> Model Class Initialized
INFO - 2017-05-26 22:02:43 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:45 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:45 --> Total execution time: 1.5948
INFO - 2017-05-26 22:02:50 --> Config Class Initialized
INFO - 2017-05-26 22:02:50 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:50 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:50 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:50 --> URI Class Initialized
INFO - 2017-05-26 22:02:50 --> Router Class Initialized
INFO - 2017-05-26 22:02:50 --> Output Class Initialized
INFO - 2017-05-26 22:02:50 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:50 --> Input Class Initialized
INFO - 2017-05-26 22:02:50 --> Language Class Initialized
INFO - 2017-05-26 22:02:50 --> Loader Class Initialized
INFO - 2017-05-26 22:02:50 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:50 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:50 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:50 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:02:50 --> Model Class Initialized
INFO - 2017-05-26 22:02:50 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:50 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:50 --> Total execution time: 0.0638
INFO - 2017-05-26 22:02:51 --> Config Class Initialized
INFO - 2017-05-26 22:02:51 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:02:51 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:02:51 --> Utf8 Class Initialized
INFO - 2017-05-26 22:02:51 --> URI Class Initialized
INFO - 2017-05-26 22:02:51 --> Router Class Initialized
INFO - 2017-05-26 22:02:51 --> Output Class Initialized
INFO - 2017-05-26 22:02:51 --> Security Class Initialized
DEBUG - 2017-05-26 22:02:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:02:51 --> Input Class Initialized
INFO - 2017-05-26 22:02:51 --> Language Class Initialized
INFO - 2017-05-26 22:02:51 --> Loader Class Initialized
INFO - 2017-05-26 22:02:51 --> Helper loaded: url_helper
INFO - 2017-05-26 22:02:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:02:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:02:51 --> Controller Class Initialized
DEBUG - 2017-05-26 22:02:51 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:02:51 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/1015]
INFO - 2017-05-26 22:02:51 --> Model Class Initialized
INFO - 2017-05-26 22:02:51 --> Database Driver Class Initialized
INFO - 2017-05-26 22:02:53 --> Final output sent to browser
DEBUG - 2017-05-26 22:02:53 --> Total execution time: 1.5359
INFO - 2017-05-26 22:03:10 --> Config Class Initialized
INFO - 2017-05-26 22:03:10 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:10 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:10 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:10 --> URI Class Initialized
INFO - 2017-05-26 22:03:10 --> Router Class Initialized
INFO - 2017-05-26 22:03:10 --> Output Class Initialized
INFO - 2017-05-26 22:03:10 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:10 --> Input Class Initialized
INFO - 2017-05-26 22:03:10 --> Language Class Initialized
INFO - 2017-05-26 22:03:10 --> Loader Class Initialized
INFO - 2017-05-26 22:03:10 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:10 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:10 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:10 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:10 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:03:10 --> Model Class Initialized
INFO - 2017-05-26 22:03:10 --> Database Driver Class Initialized
INFO - 2017-05-26 22:03:11 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:03:11 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:03:11 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:03:11 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:11 --> Total execution time: 0.1468
INFO - 2017-05-26 22:03:18 --> Config Class Initialized
INFO - 2017-05-26 22:03:18 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:18 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:18 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:18 --> URI Class Initialized
INFO - 2017-05-26 22:03:18 --> Router Class Initialized
INFO - 2017-05-26 22:03:18 --> Output Class Initialized
INFO - 2017-05-26 22:03:18 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:18 --> Input Class Initialized
INFO - 2017-05-26 22:03:18 --> Language Class Initialized
INFO - 2017-05-26 22:03:18 --> Loader Class Initialized
INFO - 2017-05-26 22:03:18 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:18 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:18 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:18 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:18 --> Model Class Initialized
INFO - 2017-05-26 22:03:18 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:18 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM COTO%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:03:18 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:18 --> Total execution time: 0.0673
INFO - 2017-05-26 22:03:18 --> Config Class Initialized
INFO - 2017-05-26 22:03:18 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:18 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:18 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:18 --> URI Class Initialized
INFO - 2017-05-26 22:03:18 --> Router Class Initialized
INFO - 2017-05-26 22:03:18 --> Output Class Initialized
INFO - 2017-05-26 22:03:18 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:18 --> Input Class Initialized
INFO - 2017-05-26 22:03:18 --> Language Class Initialized
INFO - 2017-05-26 22:03:18 --> Loader Class Initialized
INFO - 2017-05-26 22:03:18 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:18 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:18 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:18 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:03:18 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:18 --> Total execution time: 0.0092
INFO - 2017-05-26 22:03:22 --> Config Class Initialized
INFO - 2017-05-26 22:03:22 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:22 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:22 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:22 --> URI Class Initialized
INFO - 2017-05-26 22:03:22 --> Router Class Initialized
INFO - 2017-05-26 22:03:22 --> Output Class Initialized
INFO - 2017-05-26 22:03:22 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:22 --> Input Class Initialized
INFO - 2017-05-26 22:03:22 --> Language Class Initialized
INFO - 2017-05-26 22:03:22 --> Loader Class Initialized
INFO - 2017-05-26 22:03:22 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:22 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:22 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:22 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:22 --> Model Class Initialized
INFO - 2017-05-26 22:03:22 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:22 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM COT%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:03:22 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:22 --> Total execution time: 0.0678
INFO - 2017-05-26 22:03:22 --> Config Class Initialized
INFO - 2017-05-26 22:03:22 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:22 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:22 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:22 --> URI Class Initialized
INFO - 2017-05-26 22:03:22 --> Router Class Initialized
INFO - 2017-05-26 22:03:22 --> Output Class Initialized
INFO - 2017-05-26 22:03:22 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:22 --> Input Class Initialized
INFO - 2017-05-26 22:03:22 --> Language Class Initialized
INFO - 2017-05-26 22:03:22 --> Loader Class Initialized
INFO - 2017-05-26 22:03:22 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:22 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:22 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:22 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:03:22 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:22 --> Total execution time: 0.0025
INFO - 2017-05-26 22:03:30 --> Config Class Initialized
INFO - 2017-05-26 22:03:30 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:30 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:30 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:30 --> URI Class Initialized
INFO - 2017-05-26 22:03:30 --> Router Class Initialized
INFO - 2017-05-26 22:03:30 --> Output Class Initialized
INFO - 2017-05-26 22:03:30 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:30 --> Input Class Initialized
INFO - 2017-05-26 22:03:30 --> Language Class Initialized
INFO - 2017-05-26 22:03:30 --> Loader Class Initialized
INFO - 2017-05-26 22:03:30 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:30 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:30 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:30 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:30 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:30 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:30 --> Model Class Initialized
INFO - 2017-05-26 22:03:30 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:30 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM CUT%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:03:30 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:30 --> Total execution time: 0.0848
INFO - 2017-05-26 22:03:30 --> Config Class Initialized
INFO - 2017-05-26 22:03:30 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:30 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:30 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:30 --> URI Class Initialized
INFO - 2017-05-26 22:03:30 --> Router Class Initialized
INFO - 2017-05-26 22:03:30 --> Output Class Initialized
INFO - 2017-05-26 22:03:30 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:30 --> Input Class Initialized
INFO - 2017-05-26 22:03:30 --> Language Class Initialized
INFO - 2017-05-26 22:03:30 --> Loader Class Initialized
INFO - 2017-05-26 22:03:30 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:30 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:30 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:30 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:30 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:30 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:03:30 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:30 --> Total execution time: 0.0049
INFO - 2017-05-26 22:03:34 --> Config Class Initialized
INFO - 2017-05-26 22:03:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:34 --> URI Class Initialized
INFO - 2017-05-26 22:03:34 --> Router Class Initialized
INFO - 2017-05-26 22:03:34 --> Output Class Initialized
INFO - 2017-05-26 22:03:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:34 --> Input Class Initialized
INFO - 2017-05-26 22:03:34 --> Language Class Initialized
INFO - 2017-05-26 22:03:34 --> Loader Class Initialized
INFO - 2017-05-26 22:03:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:34 --> Model Class Initialized
INFO - 2017-05-26 22:03:34 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:34 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM C%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:03:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:34 --> Total execution time: 0.0569
INFO - 2017-05-26 22:03:37 --> Config Class Initialized
INFO - 2017-05-26 22:03:37 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:37 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:37 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:37 --> URI Class Initialized
INFO - 2017-05-26 22:03:37 --> Router Class Initialized
INFO - 2017-05-26 22:03:37 --> Output Class Initialized
INFO - 2017-05-26 22:03:37 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:37 --> Input Class Initialized
INFO - 2017-05-26 22:03:37 --> Language Class Initialized
INFO - 2017-05-26 22:03:37 --> Loader Class Initialized
INFO - 2017-05-26 22:03:37 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:37 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:37 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:37 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:37 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:37 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:37 --> Model Class Initialized
INFO - 2017-05-26 22:03:37 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:37 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM C%' 
				order by	Codexa 
								) a
							WHERE rownum < ((2 * 10) + 1 )
						)
					WHERE r__ >= (((2-1) * 10) + 1)
INFO - 2017-05-26 22:03:37 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:37 --> Total execution time: 0.0722
INFO - 2017-05-26 22:03:44 --> Config Class Initialized
INFO - 2017-05-26 22:03:44 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:44 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:44 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:44 --> URI Class Initialized
INFO - 2017-05-26 22:03:44 --> Router Class Initialized
INFO - 2017-05-26 22:03:44 --> Output Class Initialized
INFO - 2017-05-26 22:03:44 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:44 --> Input Class Initialized
INFO - 2017-05-26 22:03:44 --> Language Class Initialized
INFO - 2017-05-26 22:03:44 --> Loader Class Initialized
INFO - 2017-05-26 22:03:44 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:44 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:44 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:44 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 22:03:44 --> Model Class Initialized
INFO - 2017-05-26 22:03:44 --> Database Driver Class Initialized
INFO - 2017-05-26 22:03:44 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:44 --> Total execution time: 0.0559
INFO - 2017-05-26 22:03:53 --> Config Class Initialized
INFO - 2017-05-26 22:03:53 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:03:53 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:03:53 --> Utf8 Class Initialized
INFO - 2017-05-26 22:03:53 --> URI Class Initialized
INFO - 2017-05-26 22:03:53 --> Router Class Initialized
INFO - 2017-05-26 22:03:53 --> Output Class Initialized
INFO - 2017-05-26 22:03:53 --> Security Class Initialized
DEBUG - 2017-05-26 22:03:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:03:53 --> Input Class Initialized
INFO - 2017-05-26 22:03:53 --> Language Class Initialized
INFO - 2017-05-26 22:03:53 --> Loader Class Initialized
INFO - 2017-05-26 22:03:53 --> Helper loaded: url_helper
INFO - 2017-05-26 22:03:53 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:03:53 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:03:53 --> Controller Class Initialized
DEBUG - 2017-05-26 22:03:53 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:03:53 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:03:53 --> Model Class Initialized
INFO - 2017-05-26 22:03:53 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:03:53 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like 'RM DE COTO%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:03:53 --> Final output sent to browser
DEBUG - 2017-05-26 22:03:53 --> Total execution time: 0.0622
INFO - 2017-05-26 22:04:35 --> Config Class Initialized
INFO - 2017-05-26 22:04:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:04:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:04:35 --> Utf8 Class Initialized
INFO - 2017-05-26 22:04:35 --> URI Class Initialized
INFO - 2017-05-26 22:04:35 --> Router Class Initialized
INFO - 2017-05-26 22:04:35 --> Output Class Initialized
INFO - 2017-05-26 22:04:35 --> Security Class Initialized
DEBUG - 2017-05-26 22:04:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:04:35 --> Input Class Initialized
INFO - 2017-05-26 22:04:35 --> Language Class Initialized
INFO - 2017-05-26 22:04:35 --> Loader Class Initialized
INFO - 2017-05-26 22:04:35 --> Helper loaded: url_helper
INFO - 2017-05-26 22:04:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:04:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:04:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:04:35 --> Controller Class Initialized
DEBUG - 2017-05-26 22:04:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:04:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:04:35 --> Model Class Initialized
INFO - 2017-05-26 22:04:35 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:04:35 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					372,
					'RM DE COTOVELO NERO - TESTE 1',
					'.',
					'&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; RESSON&amp;Acirc;NCIA MAGN&amp;Eacute;TICA DO COTOVELO&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;T&amp;eacute;cnica: Estudo por resson&amp;acirc;ncia magn&amp;eacute;tica do cotovelo _ obtido com aquisi&amp;ccedil;&amp;otilde;es multiplanares ponderadas em DPW e T1W, com e sem satura&amp;ccedil;&amp;atilde;o do tecido adiposo respectivamente, antes e ap&amp;oacute;s a administra&amp;ccedil;&amp;atilde;o intravenosa de meio de contraste paramagn&amp;eacute;tico.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Resultado: O exame realizado e a an&amp;aacute;lise da hist&amp;oacute;ria cl&amp;iacute;nica do paciente permitem formular as seguintes considera&amp;ccedil;&amp;otilde;es diagn&amp;oacute;sticas:&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;As estruturas &amp;oacute;sseas avaliadas t&amp;ecirc;m morfologia, contornos e inter-rela&amp;ccedil;&amp;otilde;es preservadas, corticalidade &amp;iacute;ntegra e apresentando sinal da medular &amp;oacute;ssea habitual.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Revestimento condral das superf&amp;iacute;cies articulares tem espessura regular e integridade mantida.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Articula&amp;ccedil;&amp;otilde;es umeroulnorradial preservadas. Aus&amp;ecirc;ncia de derrame articular.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;otilde;es flexor e extensor comuns dos dedos t&amp;ecirc;m espessura e intensidade de sinal habituais.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;atilde;o do complexo bicepsbraquial e do tr&amp;iacute;ceps tem espessura e intensidade de sinal mantidas.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ligamentos anular e colaterais medial e lateral &amp;iacute;ntegros.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nervos ulnar e mediano t&amp;ecirc;m espessura e intensidade de sinal mantidas, n&amp;atilde;o se observando &amp;aacute;reas de realce pelo contraste endovenoso.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos miotend&amp;iacute;neos t&amp;ecirc;m espessura e intensidade de sinal habituais, n&amp;atilde;o se identificando les&amp;otilde;es s&amp;oacute;lidas ou c&amp;iacute;sticas nessas topografias.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos das bursas biciptorradial e olecraneana livres.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Gratos pelo encaminhamento, estamos &amp;agrave; disposi&amp;ccedil;&amp;atilde;o para maiores esclarecimentos.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&amp;nbsp;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;div&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;',
					'8',
					'DIGI'
				)
DEBUG - 2017-05-26 22:04:35 --> DB Transaction Failure
INFO - 2017-05-26 22:04:35 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:06:59 --> Config Class Initialized
INFO - 2017-05-26 22:06:59 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:06:59 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:06:59 --> Utf8 Class Initialized
INFO - 2017-05-26 22:06:59 --> URI Class Initialized
DEBUG - 2017-05-26 22:06:59 --> No URI present. Default controller set.
INFO - 2017-05-26 22:06:59 --> Router Class Initialized
INFO - 2017-05-26 22:06:59 --> Output Class Initialized
INFO - 2017-05-26 22:06:59 --> Security Class Initialized
DEBUG - 2017-05-26 22:06:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:06:59 --> Input Class Initialized
INFO - 2017-05-26 22:06:59 --> Language Class Initialized
INFO - 2017-05-26 22:06:59 --> Loader Class Initialized
INFO - 2017-05-26 22:06:59 --> Helper loaded: url_helper
INFO - 2017-05-26 22:06:59 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:06:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:06:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:06:59 --> Controller Class Initialized
DEBUG - 2017-05-26 22:06:59 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:06:59 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:06:59 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:06:59 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:06:59 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:06:59 --> Final output sent to browser
DEBUG - 2017-05-26 22:06:59 --> Total execution time: 0.0094
INFO - 2017-05-26 22:06:59 --> Config Class Initialized
INFO - 2017-05-26 22:06:59 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:06:59 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:06:59 --> Utf8 Class Initialized
INFO - 2017-05-26 22:06:59 --> URI Class Initialized
INFO - 2017-05-26 22:06:59 --> Router Class Initialized
INFO - 2017-05-26 22:06:59 --> Output Class Initialized
INFO - 2017-05-26 22:06:59 --> Security Class Initialized
DEBUG - 2017-05-26 22:06:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:06:59 --> Input Class Initialized
INFO - 2017-05-26 22:06:59 --> Language Class Initialized
INFO - 2017-05-26 22:06:59 --> Loader Class Initialized
INFO - 2017-05-26 22:06:59 --> Helper loaded: url_helper
INFO - 2017-05-26 22:06:59 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:06:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:06:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:06:59 --> Controller Class Initialized
DEBUG - 2017-05-26 22:06:59 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:06:59 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:06:59 --> Model Class Initialized
INFO - 2017-05-26 22:07:00 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:07:00 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:07:00 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:07:00 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:07:00 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:07:00 --> Final output sent to browser
DEBUG - 2017-05-26 22:07:00 --> Total execution time: 0.0912
INFO - 2017-05-26 22:07:03 --> Config Class Initialized
INFO - 2017-05-26 22:07:03 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:07:03 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:07:03 --> Utf8 Class Initialized
INFO - 2017-05-26 22:07:03 --> URI Class Initialized
INFO - 2017-05-26 22:07:03 --> Router Class Initialized
INFO - 2017-05-26 22:07:03 --> Output Class Initialized
INFO - 2017-05-26 22:07:03 --> Security Class Initialized
DEBUG - 2017-05-26 22:07:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:07:03 --> Input Class Initialized
INFO - 2017-05-26 22:07:03 --> Language Class Initialized
INFO - 2017-05-26 22:07:03 --> Loader Class Initialized
INFO - 2017-05-26 22:07:03 --> Helper loaded: url_helper
INFO - 2017-05-26 22:07:03 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:07:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:07:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:07:03 --> Controller Class Initialized
DEBUG - 2017-05-26 22:07:03 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:07:03 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:07:03 --> Model Class Initialized
INFO - 2017-05-26 22:07:03 --> Database Driver Class Initialized
INFO - 2017-05-26 22:07:03 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:07:03 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:07:03 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:07:03 --> Final output sent to browser
DEBUG - 2017-05-26 22:07:03 --> Total execution time: 0.1351
INFO - 2017-05-26 22:07:09 --> Config Class Initialized
INFO - 2017-05-26 22:07:09 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:07:09 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:07:09 --> Utf8 Class Initialized
INFO - 2017-05-26 22:07:09 --> URI Class Initialized
INFO - 2017-05-26 22:07:09 --> Router Class Initialized
INFO - 2017-05-26 22:07:09 --> Output Class Initialized
INFO - 2017-05-26 22:07:09 --> Security Class Initialized
DEBUG - 2017-05-26 22:07:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:07:09 --> Input Class Initialized
INFO - 2017-05-26 22:07:09 --> Language Class Initialized
INFO - 2017-05-26 22:07:09 --> Loader Class Initialized
INFO - 2017-05-26 22:07:09 --> Helper loaded: url_helper
INFO - 2017-05-26 22:07:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:07:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:07:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:07:09 --> Controller Class Initialized
DEBUG - 2017-05-26 22:07:09 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:07:09 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:07:09 --> Model Class Initialized
INFO - 2017-05-26 22:07:09 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:07:09 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:07:09 --> Final output sent to browser
DEBUG - 2017-05-26 22:07:09 --> Total execution time: 0.0764
INFO - 2017-05-26 22:07:42 --> Config Class Initialized
INFO - 2017-05-26 22:07:42 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:07:42 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:07:42 --> Utf8 Class Initialized
INFO - 2017-05-26 22:07:42 --> URI Class Initialized
INFO - 2017-05-26 22:07:42 --> Router Class Initialized
INFO - 2017-05-26 22:07:42 --> Output Class Initialized
INFO - 2017-05-26 22:07:42 --> Security Class Initialized
DEBUG - 2017-05-26 22:07:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:07:42 --> Input Class Initialized
INFO - 2017-05-26 22:07:42 --> Language Class Initialized
INFO - 2017-05-26 22:07:42 --> Loader Class Initialized
INFO - 2017-05-26 22:07:42 --> Helper loaded: url_helper
INFO - 2017-05-26 22:07:42 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:07:42 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:07:42 --> Controller Class Initialized
DEBUG - 2017-05-26 22:07:42 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:07:42 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:07:42 --> Final output sent to browser
DEBUG - 2017-05-26 22:07:42 --> Total execution time: 0.0043
INFO - 2017-05-26 22:07:52 --> Config Class Initialized
INFO - 2017-05-26 22:07:52 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:07:52 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:07:52 --> Utf8 Class Initialized
INFO - 2017-05-26 22:07:52 --> URI Class Initialized
INFO - 2017-05-26 22:07:52 --> Router Class Initialized
INFO - 2017-05-26 22:07:52 --> Output Class Initialized
INFO - 2017-05-26 22:07:52 --> Security Class Initialized
DEBUG - 2017-05-26 22:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:07:52 --> Input Class Initialized
INFO - 2017-05-26 22:07:52 --> Language Class Initialized
INFO - 2017-05-26 22:07:52 --> Loader Class Initialized
INFO - 2017-05-26 22:07:52 --> Helper loaded: url_helper
INFO - 2017-05-26 22:07:52 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:07:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:07:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:07:52 --> Controller Class Initialized
DEBUG - 2017-05-26 22:07:52 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:07:52 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:07:52 --> Model Class Initialized
INFO - 2017-05-26 22:07:52 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:07:52 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'asdfasdfasdfasdf',
					'.',
					'&lt;p&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt; RESSON&amp;Acirc;NCIA MAGN&amp;Eacute;TICA DO COTOVELO&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;T&amp;eacute;cnica: Estudo por resson&amp;acirc;ncia magn&amp;eacute;tica do cotovelo _ obtido com aquisi&amp;ccedil;&amp;otilde;es multiplanares ponderadas em DPW e T1W, com e sem satura&amp;ccedil;&amp;atilde;o do tecido adiposo respectivamente, antes e ap&amp;oacute;s a administra&amp;ccedil;&amp;atilde;o intravenosa de meio de contraste paramagn&amp;eacute;tico.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Resultado: O exame realizado e a an&amp;aacute;lise da hist&amp;oacute;ria cl&amp;iacute;nica do paciente permitem formular as seguintes considera&amp;ccedil;&amp;otilde;es diagn&amp;oacute;sticas:&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;As estruturas &amp;oacute;sseas avaliadas t&amp;ecirc;m morfologia, contornos e inter-rela&amp;ccedil;&amp;otilde;es preservadas, corticalidade &amp;iacute;ntegra e apresentando sinal da medular &amp;oacute;ssea habitual.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Revestimento condral das superf&amp;iacute;cies articulares tem espessura regular e integridade mantida.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Articula&amp;ccedil;&amp;otilde;es umeroulnorradial preservadas. Aus&amp;ecirc;ncia de derrame articular.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;otilde;es flexor e extensor comuns dos dedos t&amp;ecirc;m espessura e intensidade de sinal habituais.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;atilde;o do complexo bicepsbraquial e do tr&amp;iacute;ceps tem espessura e intensidade de sinal mantidas.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ligamentos anular e colaterais medial e lateral &amp;iacute;ntegros.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nervos ulnar e mediano t&amp;ecirc;m espessura e intensidade de sinal mantidas, n&amp;atilde;o se observando &amp;aacute;reas de realce pelo contraste endovenoso.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos miotend&amp;iacute;neos t&amp;ecirc;m espessura e intensidade de sinal habituais, n&amp;atilde;o se identificando les&amp;otilde;es s&amp;oacute;lidas ou c&amp;iacute;sticas nessas topografias.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos das bursas biciptorradial e olecraneana livres.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Gratos pelo encaminhamento, estamos &amp;agrave; disposi&amp;ccedil;&amp;atilde;o para maiores esclarecimentos.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;/p&gt;',
					'8',
					'DIGI'
				)
DEBUG - 2017-05-26 22:07:52 --> DB Transaction Failure
INFO - 2017-05-26 22:07:52 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:10:22 --> Config Class Initialized
INFO - 2017-05-26 22:10:22 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:10:22 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:10:22 --> Utf8 Class Initialized
INFO - 2017-05-26 22:10:22 --> URI Class Initialized
DEBUG - 2017-05-26 22:10:22 --> No URI present. Default controller set.
INFO - 2017-05-26 22:10:22 --> Router Class Initialized
INFO - 2017-05-26 22:10:22 --> Output Class Initialized
INFO - 2017-05-26 22:10:22 --> Security Class Initialized
DEBUG - 2017-05-26 22:10:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:10:22 --> Input Class Initialized
INFO - 2017-05-26 22:10:22 --> Language Class Initialized
INFO - 2017-05-26 22:10:22 --> Loader Class Initialized
INFO - 2017-05-26 22:10:22 --> Helper loaded: url_helper
INFO - 2017-05-26 22:10:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:10:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:10:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:10:22 --> Controller Class Initialized
DEBUG - 2017-05-26 22:10:22 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:10:22 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:10:22 --> Final output sent to browser
DEBUG - 2017-05-26 22:10:22 --> Total execution time: 0.0050
INFO - 2017-05-26 22:10:22 --> Config Class Initialized
INFO - 2017-05-26 22:10:22 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:10:22 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:10:22 --> Utf8 Class Initialized
INFO - 2017-05-26 22:10:22 --> URI Class Initialized
INFO - 2017-05-26 22:10:22 --> Router Class Initialized
INFO - 2017-05-26 22:10:22 --> Output Class Initialized
INFO - 2017-05-26 22:10:22 --> Security Class Initialized
DEBUG - 2017-05-26 22:10:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:10:22 --> Input Class Initialized
INFO - 2017-05-26 22:10:22 --> Language Class Initialized
INFO - 2017-05-26 22:10:22 --> Loader Class Initialized
INFO - 2017-05-26 22:10:22 --> Helper loaded: url_helper
INFO - 2017-05-26 22:10:22 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:10:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:10:22 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:10:22 --> Controller Class Initialized
DEBUG - 2017-05-26 22:10:22 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:10:22 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:10:22 --> Model Class Initialized
INFO - 2017-05-26 22:10:22 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:10:22 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:10:22 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:10:22 --> Final output sent to browser
DEBUG - 2017-05-26 22:10:22 --> Total execution time: 0.0769
INFO - 2017-05-26 22:10:25 --> Config Class Initialized
INFO - 2017-05-26 22:10:25 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:10:25 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:10:25 --> Utf8 Class Initialized
INFO - 2017-05-26 22:10:25 --> URI Class Initialized
INFO - 2017-05-26 22:10:25 --> Router Class Initialized
INFO - 2017-05-26 22:10:25 --> Output Class Initialized
INFO - 2017-05-26 22:10:25 --> Security Class Initialized
DEBUG - 2017-05-26 22:10:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:10:25 --> Input Class Initialized
INFO - 2017-05-26 22:10:25 --> Language Class Initialized
INFO - 2017-05-26 22:10:25 --> Loader Class Initialized
INFO - 2017-05-26 22:10:25 --> Helper loaded: url_helper
INFO - 2017-05-26 22:10:25 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:10:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:10:25 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:10:25 --> Controller Class Initialized
DEBUG - 2017-05-26 22:10:25 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:10:25 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:10:25 --> Model Class Initialized
INFO - 2017-05-26 22:10:25 --> Database Driver Class Initialized
INFO - 2017-05-26 22:10:25 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:10:25 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:10:25 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:10:25 --> Final output sent to browser
DEBUG - 2017-05-26 22:10:25 --> Total execution time: 0.1274
INFO - 2017-05-26 22:10:32 --> Config Class Initialized
INFO - 2017-05-26 22:10:32 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:10:32 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:10:32 --> Utf8 Class Initialized
INFO - 2017-05-26 22:10:32 --> URI Class Initialized
INFO - 2017-05-26 22:10:32 --> Router Class Initialized
INFO - 2017-05-26 22:10:32 --> Output Class Initialized
INFO - 2017-05-26 22:10:32 --> Security Class Initialized
DEBUG - 2017-05-26 22:10:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:10:32 --> Input Class Initialized
INFO - 2017-05-26 22:10:32 --> Language Class Initialized
INFO - 2017-05-26 22:10:32 --> Loader Class Initialized
INFO - 2017-05-26 22:10:32 --> Helper loaded: url_helper
INFO - 2017-05-26 22:10:32 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:10:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:10:32 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:10:32 --> Controller Class Initialized
DEBUG - 2017-05-26 22:10:32 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:10:32 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:10:32 --> Model Class Initialized
INFO - 2017-05-26 22:10:32 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:10:32 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:10:32 --> Final output sent to browser
DEBUG - 2017-05-26 22:10:32 --> Total execution time: 0.0713
INFO - 2017-05-26 22:11:17 --> Config Class Initialized
INFO - 2017-05-26 22:11:17 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:11:17 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:11:17 --> Utf8 Class Initialized
INFO - 2017-05-26 22:11:17 --> URI Class Initialized
INFO - 2017-05-26 22:11:17 --> Router Class Initialized
INFO - 2017-05-26 22:11:17 --> Output Class Initialized
INFO - 2017-05-26 22:11:17 --> Security Class Initialized
DEBUG - 2017-05-26 22:11:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:11:17 --> Input Class Initialized
INFO - 2017-05-26 22:11:17 --> Language Class Initialized
INFO - 2017-05-26 22:11:17 --> Loader Class Initialized
INFO - 2017-05-26 22:11:17 --> Helper loaded: url_helper
INFO - 2017-05-26 22:11:17 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:11:17 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:11:17 --> Controller Class Initialized
DEBUG - 2017-05-26 22:11:17 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:11:17 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:11:17 --> Model Class Initialized
INFO - 2017-05-26 22:11:17 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:11:17 --> Query error: ORA-00922: missing or invalid option - Invalid query: set define off
DEBUG - 2017-05-26 22:11:17 --> DB Transaction Failure
INFO - 2017-05-26 22:11:17 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:12:34 --> Config Class Initialized
INFO - 2017-05-26 22:12:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:12:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:12:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:12:34 --> URI Class Initialized
DEBUG - 2017-05-26 22:12:34 --> No URI present. Default controller set.
INFO - 2017-05-26 22:12:34 --> Router Class Initialized
INFO - 2017-05-26 22:12:34 --> Output Class Initialized
INFO - 2017-05-26 22:12:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:12:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:12:34 --> Input Class Initialized
INFO - 2017-05-26 22:12:34 --> Language Class Initialized
INFO - 2017-05-26 22:12:34 --> Loader Class Initialized
INFO - 2017-05-26 22:12:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:12:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:12:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:12:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:12:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:12:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:12:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:12:34 --> Total execution time: 0.0053
INFO - 2017-05-26 22:12:34 --> Config Class Initialized
INFO - 2017-05-26 22:12:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:12:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:12:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:12:34 --> URI Class Initialized
INFO - 2017-05-26 22:12:34 --> Router Class Initialized
INFO - 2017-05-26 22:12:34 --> Output Class Initialized
INFO - 2017-05-26 22:12:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:12:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:12:34 --> Input Class Initialized
INFO - 2017-05-26 22:12:34 --> Language Class Initialized
INFO - 2017-05-26 22:12:34 --> Loader Class Initialized
INFO - 2017-05-26 22:12:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:12:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:12:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:12:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:12:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:12:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:12:34 --> Model Class Initialized
INFO - 2017-05-26 22:12:34 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:12:34 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:12:34 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:12:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:12:34 --> Total execution time: 0.0748
INFO - 2017-05-26 22:12:36 --> Config Class Initialized
INFO - 2017-05-26 22:12:36 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:12:36 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:12:36 --> Utf8 Class Initialized
INFO - 2017-05-26 22:12:36 --> URI Class Initialized
INFO - 2017-05-26 22:12:36 --> Router Class Initialized
INFO - 2017-05-26 22:12:36 --> Output Class Initialized
INFO - 2017-05-26 22:12:36 --> Security Class Initialized
DEBUG - 2017-05-26 22:12:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:12:36 --> Input Class Initialized
INFO - 2017-05-26 22:12:36 --> Language Class Initialized
INFO - 2017-05-26 22:12:36 --> Loader Class Initialized
INFO - 2017-05-26 22:12:36 --> Helper loaded: url_helper
INFO - 2017-05-26 22:12:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:12:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:12:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:12:36 --> Controller Class Initialized
DEBUG - 2017-05-26 22:12:36 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:12:36 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:12:36 --> Model Class Initialized
INFO - 2017-05-26 22:12:36 --> Database Driver Class Initialized
INFO - 2017-05-26 22:12:37 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:12:37 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:12:37 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:12:37 --> Final output sent to browser
DEBUG - 2017-05-26 22:12:37 --> Total execution time: 0.1223
INFO - 2017-05-26 22:12:41 --> Config Class Initialized
INFO - 2017-05-26 22:12:41 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:12:41 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:12:41 --> Utf8 Class Initialized
INFO - 2017-05-26 22:12:41 --> URI Class Initialized
INFO - 2017-05-26 22:12:41 --> Router Class Initialized
INFO - 2017-05-26 22:12:41 --> Output Class Initialized
INFO - 2017-05-26 22:12:41 --> Security Class Initialized
DEBUG - 2017-05-26 22:12:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:12:41 --> Input Class Initialized
INFO - 2017-05-26 22:12:41 --> Language Class Initialized
INFO - 2017-05-26 22:12:41 --> Loader Class Initialized
INFO - 2017-05-26 22:12:41 --> Helper loaded: url_helper
INFO - 2017-05-26 22:12:41 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:12:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:12:41 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:12:41 --> Controller Class Initialized
DEBUG - 2017-05-26 22:12:41 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:12:41 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:12:41 --> Model Class Initialized
INFO - 2017-05-26 22:12:41 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:12:41 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:12:41 --> Final output sent to browser
DEBUG - 2017-05-26 22:12:41 --> Total execution time: 0.0915
INFO - 2017-05-26 22:12:58 --> Config Class Initialized
INFO - 2017-05-26 22:12:58 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:12:58 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:12:58 --> Utf8 Class Initialized
INFO - 2017-05-26 22:12:58 --> URI Class Initialized
INFO - 2017-05-26 22:12:58 --> Router Class Initialized
INFO - 2017-05-26 22:12:58 --> Output Class Initialized
INFO - 2017-05-26 22:12:58 --> Security Class Initialized
DEBUG - 2017-05-26 22:12:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:12:58 --> Input Class Initialized
INFO - 2017-05-26 22:12:58 --> Language Class Initialized
INFO - 2017-05-26 22:12:58 --> Loader Class Initialized
INFO - 2017-05-26 22:12:58 --> Helper loaded: url_helper
INFO - 2017-05-26 22:12:58 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:12:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:12:58 --> Controller Class Initialized
DEBUG - 2017-05-26 22:12:58 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:12:58 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:12:58 --> Model Class Initialized
INFO - 2017-05-26 22:12:58 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:12:58 --> Query error: ORA-00922: missing or invalid option - Invalid query: SET SCAN OFF
				insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					69,
					'asdfasdfasdf',
					'.',
					'&lt;p&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt; RESSON&amp;Acirc;NCIA MAGN&amp;Eacute;TICA DO COTOVELO&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;T&amp;eacute;cnica: Estudo por resson&amp;acirc;ncia magn&amp;eacute;tica do cotovelo _ obtido com aquisi&amp;ccedil;&amp;otilde;es multiplanares ponderadas em DPW e T1W, com e sem satura&amp;ccedil;&amp;atilde;o do tecido adiposo respectivamente, antes e ap&amp;oacute;s a administra&amp;ccedil;&amp;atilde;o intravenosa de meio de contraste paramagn&amp;eacute;tico.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Resultado: O exame realizado e a an&amp;aacute;lise da hist&amp;oacute;ria cl&amp;iacute;nica do paciente permitem formular as seguintes considera&amp;ccedil;&amp;otilde;es diagn&amp;oacute;sticas:&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;As estruturas &amp;oacute;sseas avaliadas t&amp;ecirc;m morfologia, contornos e inter-rela&amp;ccedil;&amp;otilde;es preservadas, corticalidade &amp;iacute;ntegra e apresentando sinal da medular &amp;oacute;ssea habitual.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Revestimento condral das superf&amp;iacute;cies articulares tem espessura regular e integridade mantida.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Articula&amp;ccedil;&amp;otilde;es umeroulnorradial preservadas. Aus&amp;ecirc;ncia de derrame articular.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;otilde;es flexor e extensor comuns dos dedos t&amp;ecirc;m espessura e intensidade de sinal habituais.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;atilde;o do complexo bicepsbraquial e do tr&amp;iacute;ceps tem espessura e intensidade de sinal mantidas.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ligamentos anular e colaterais medial e lateral &amp;iacute;ntegros.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nervos ulnar e mediano t&amp;ecirc;m espessura e intensidade de sinal mantidas, n&amp;atilde;o se observando &amp;aacute;reas de realce pelo contraste endovenoso.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos miotend&amp;iacute;neos t&amp;ecirc;m espessura e intensidade de sinal habituais, n&amp;atilde;o se identificando les&amp;otilde;es s&amp;oacute;lidas ou c&amp;iacute;sticas nessas topografias.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos das bursas biciptorradial e olecraneana livres.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Gratos pelo encaminhamento, estamos &amp;agrave; disposi&amp;ccedil;&amp;atilde;o para maiores esclarecimentos.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Dr. Nero Castro&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;CRM 08.460&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;/p&gt;',
					'69',
					'DIGI'
				)
DEBUG - 2017-05-26 22:12:58 --> DB Transaction Failure
INFO - 2017-05-26 22:12:58 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:19:56 --> Config Class Initialized
INFO - 2017-05-26 22:19:56 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:19:56 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:19:56 --> Utf8 Class Initialized
INFO - 2017-05-26 22:19:56 --> URI Class Initialized
DEBUG - 2017-05-26 22:19:56 --> No URI present. Default controller set.
INFO - 2017-05-26 22:19:56 --> Router Class Initialized
INFO - 2017-05-26 22:19:56 --> Output Class Initialized
INFO - 2017-05-26 22:19:56 --> Security Class Initialized
DEBUG - 2017-05-26 22:19:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:19:56 --> Input Class Initialized
INFO - 2017-05-26 22:19:56 --> Language Class Initialized
INFO - 2017-05-26 22:19:56 --> Loader Class Initialized
INFO - 2017-05-26 22:19:56 --> Helper loaded: url_helper
INFO - 2017-05-26 22:19:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:19:56 --> Controller Class Initialized
DEBUG - 2017-05-26 22:19:56 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:19:56 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:19:56 --> Final output sent to browser
DEBUG - 2017-05-26 22:19:56 --> Total execution time: 0.0091
INFO - 2017-05-26 22:19:56 --> Config Class Initialized
INFO - 2017-05-26 22:19:56 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:19:56 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:19:56 --> Utf8 Class Initialized
INFO - 2017-05-26 22:19:56 --> URI Class Initialized
INFO - 2017-05-26 22:19:56 --> Router Class Initialized
INFO - 2017-05-26 22:19:56 --> Output Class Initialized
INFO - 2017-05-26 22:19:56 --> Security Class Initialized
DEBUG - 2017-05-26 22:19:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:19:56 --> Input Class Initialized
INFO - 2017-05-26 22:19:56 --> Language Class Initialized
INFO - 2017-05-26 22:19:56 --> Loader Class Initialized
INFO - 2017-05-26 22:19:56 --> Helper loaded: url_helper
INFO - 2017-05-26 22:19:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:19:56 --> Controller Class Initialized
DEBUG - 2017-05-26 22:19:56 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:19:56 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:19:56 --> Model Class Initialized
INFO - 2017-05-26 22:19:56 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:19:56 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:19:56 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:19:56 --> Final output sent to browser
DEBUG - 2017-05-26 22:19:56 --> Total execution time: 0.0768
INFO - 2017-05-26 22:20:00 --> Config Class Initialized
INFO - 2017-05-26 22:20:00 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:20:00 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:20:00 --> Utf8 Class Initialized
INFO - 2017-05-26 22:20:00 --> URI Class Initialized
INFO - 2017-05-26 22:20:00 --> Router Class Initialized
INFO - 2017-05-26 22:20:00 --> Output Class Initialized
INFO - 2017-05-26 22:20:00 --> Security Class Initialized
DEBUG - 2017-05-26 22:20:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:20:00 --> Input Class Initialized
INFO - 2017-05-26 22:20:00 --> Language Class Initialized
INFO - 2017-05-26 22:20:00 --> Loader Class Initialized
INFO - 2017-05-26 22:20:00 --> Helper loaded: url_helper
INFO - 2017-05-26 22:20:00 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:20:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:20:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:20:00 --> Controller Class Initialized
DEBUG - 2017-05-26 22:20:00 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:20:00 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:20:00 --> Model Class Initialized
INFO - 2017-05-26 22:20:00 --> Database Driver Class Initialized
INFO - 2017-05-26 22:20:00 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:20:00 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:20:00 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:20:00 --> Final output sent to browser
DEBUG - 2017-05-26 22:20:00 --> Total execution time: 0.1459
INFO - 2017-05-26 22:20:05 --> Config Class Initialized
INFO - 2017-05-26 22:20:05 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:20:05 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:20:05 --> Utf8 Class Initialized
INFO - 2017-05-26 22:20:05 --> URI Class Initialized
INFO - 2017-05-26 22:20:05 --> Router Class Initialized
INFO - 2017-05-26 22:20:05 --> Output Class Initialized
INFO - 2017-05-26 22:20:05 --> Security Class Initialized
DEBUG - 2017-05-26 22:20:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:20:05 --> Input Class Initialized
INFO - 2017-05-26 22:20:05 --> Language Class Initialized
INFO - 2017-05-26 22:20:05 --> Loader Class Initialized
INFO - 2017-05-26 22:20:05 --> Helper loaded: url_helper
INFO - 2017-05-26 22:20:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:20:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:20:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:20:05 --> Controller Class Initialized
DEBUG - 2017-05-26 22:20:05 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:20:05 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:20:05 --> Model Class Initialized
INFO - 2017-05-26 22:20:05 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:20:05 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:20:05 --> Final output sent to browser
DEBUG - 2017-05-26 22:20:05 --> Total execution time: 0.0618
INFO - 2017-05-26 22:20:24 --> Config Class Initialized
INFO - 2017-05-26 22:20:24 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:20:24 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:20:24 --> Utf8 Class Initialized
INFO - 2017-05-26 22:20:24 --> URI Class Initialized
INFO - 2017-05-26 22:20:24 --> Router Class Initialized
INFO - 2017-05-26 22:20:24 --> Output Class Initialized
INFO - 2017-05-26 22:20:24 --> Security Class Initialized
DEBUG - 2017-05-26 22:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:20:24 --> Input Class Initialized
INFO - 2017-05-26 22:20:24 --> Language Class Initialized
INFO - 2017-05-26 22:20:24 --> Loader Class Initialized
INFO - 2017-05-26 22:20:24 --> Helper loaded: url_helper
INFO - 2017-05-26 22:20:24 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:20:24 --> Controller Class Initialized
DEBUG - 2017-05-26 22:20:24 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:20:24 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:20:24 --> Model Class Initialized
INFO - 2017-05-26 22:20:24 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:20:24 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'asdfasdfasdfsd',
					'.',
					'\&lt;p\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;\&amp;nbsp;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt; RESSON\&amp;Acirc;NCIA MAGN\&amp;Eacute;TICA DO COTOVELO\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;T\&amp;eacute;cnica: Estudo por resson\&amp;acirc;ncia magn\&amp;eacute;tica do cotovelo _ obtido com aquisi\&amp;ccedil;\&amp;otilde;es multiplanares ponderadas em DPW e T1W, com e sem satura\&amp;ccedil;\&amp;atilde;o do tecido adiposo respectivamente, antes e ap\&amp;oacute;s a administra\&amp;ccedil;\&amp;atilde;o intravenosa de meio de contraste paramagn\&amp;eacute;tico.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Resultado: O exame realizado e a an\&amp;aacute;lise da hist\&amp;oacute;ria cl\&amp;iacute;nica do paciente permitem formular as seguintes considera\&amp;ccedil;\&amp;otilde;es diagn\&amp;oacute;sticas:\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;As estruturas \&amp;oacute;sseas avaliadas t\&amp;ecirc;m morfologia, contornos e inter-rela\&amp;ccedil;\&amp;otilde;es preservadas, corticalidade \&amp;iacute;ntegra e apresentando sinal da medular \&amp;oacute;ssea habitual.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Revestimento condral das superf\&amp;iacute;cies articulares tem espessura regular e integridade mantida.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Articula\&amp;ccedil;\&amp;otilde;es umeroulnorradial preservadas. Aus\&amp;ecirc;ncia de derrame articular.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Tend\&amp;otilde;es flexor e extensor comuns dos dedos t\&amp;ecirc;m espessura e intensidade de sinal habituais.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Tend\&amp;atilde;o do complexo bicepsbraquial e do tr\&amp;iacute;ceps tem espessura e intensidade de sinal mantidas.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Ligamentos anular e colaterais medial e lateral \&amp;iacute;ntegros.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Nervos ulnar e mediano t\&amp;ecirc;m espessura e intensidade de sinal mantidas, n\&amp;atilde;o se observando \&amp;aacute;reas de realce pelo contraste endovenoso.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Planos miotend\&amp;iacute;neos t\&amp;ecirc;m espessura e intensidade de sinal habituais, n\&amp;atilde;o se identificando les\&amp;otilde;es s\&amp;oacute;lidas ou c\&amp;iacute;sticas nessas topografias.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Planos das bursas biciptorradial e olecraneana livres.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Gratos pelo encaminhamento, estamos \&amp;agrave; disposi\&amp;ccedil;\&amp;atilde;o para maiores esclarecimentos.\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;Dr. Nero Castro\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt;\&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!\&gt;\&lt;span style=!aspa!font-weight: bold;!aspa!\&gt;\&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!\&gt;CRM 08.460\&lt;/span\&gt;\&lt;/span\&gt;\&lt;/span\&gt;\&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;br /\&gt; \&lt;/p\&gt;',
					'62',
					'DIGI'
				)
DEBUG - 2017-05-26 22:20:24 --> DB Transaction Failure
INFO - 2017-05-26 22:20:24 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:22:53 --> Config Class Initialized
INFO - 2017-05-26 22:22:53 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:22:53 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:22:53 --> Utf8 Class Initialized
INFO - 2017-05-26 22:22:53 --> URI Class Initialized
DEBUG - 2017-05-26 22:22:53 --> No URI present. Default controller set.
INFO - 2017-05-26 22:22:53 --> Router Class Initialized
INFO - 2017-05-26 22:22:53 --> Output Class Initialized
INFO - 2017-05-26 22:22:53 --> Security Class Initialized
DEBUG - 2017-05-26 22:22:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:22:53 --> Input Class Initialized
INFO - 2017-05-26 22:22:53 --> Language Class Initialized
INFO - 2017-05-26 22:22:53 --> Loader Class Initialized
INFO - 2017-05-26 22:22:53 --> Helper loaded: url_helper
INFO - 2017-05-26 22:22:53 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:22:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:22:53 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:22:53 --> Controller Class Initialized
DEBUG - 2017-05-26 22:22:53 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:22:53 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:22:53 --> Final output sent to browser
DEBUG - 2017-05-26 22:22:53 --> Total execution time: 0.0045
INFO - 2017-05-26 22:22:53 --> Config Class Initialized
INFO - 2017-05-26 22:22:53 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:22:53 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:22:53 --> Utf8 Class Initialized
INFO - 2017-05-26 22:22:53 --> URI Class Initialized
INFO - 2017-05-26 22:22:53 --> Router Class Initialized
INFO - 2017-05-26 22:22:53 --> Output Class Initialized
INFO - 2017-05-26 22:22:53 --> Security Class Initialized
DEBUG - 2017-05-26 22:22:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:22:53 --> Input Class Initialized
INFO - 2017-05-26 22:22:53 --> Language Class Initialized
INFO - 2017-05-26 22:22:53 --> Loader Class Initialized
INFO - 2017-05-26 22:22:53 --> Helper loaded: url_helper
INFO - 2017-05-26 22:22:53 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:22:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:22:53 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:22:53 --> Controller Class Initialized
DEBUG - 2017-05-26 22:22:53 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:22:53 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:22:53 --> Model Class Initialized
INFO - 2017-05-26 22:22:53 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:22:53 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:22:53 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:22:53 --> Final output sent to browser
DEBUG - 2017-05-26 22:22:53 --> Total execution time: 0.0736
INFO - 2017-05-26 22:22:56 --> Config Class Initialized
INFO - 2017-05-26 22:22:56 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:22:56 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:22:56 --> Utf8 Class Initialized
INFO - 2017-05-26 22:22:56 --> URI Class Initialized
INFO - 2017-05-26 22:22:56 --> Router Class Initialized
INFO - 2017-05-26 22:22:56 --> Output Class Initialized
INFO - 2017-05-26 22:22:56 --> Security Class Initialized
DEBUG - 2017-05-26 22:22:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:22:56 --> Input Class Initialized
INFO - 2017-05-26 22:22:56 --> Language Class Initialized
INFO - 2017-05-26 22:22:56 --> Loader Class Initialized
INFO - 2017-05-26 22:22:56 --> Helper loaded: url_helper
INFO - 2017-05-26 22:22:56 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:22:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:22:56 --> Controller Class Initialized
DEBUG - 2017-05-26 22:22:56 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:22:56 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:22:56 --> Model Class Initialized
INFO - 2017-05-26 22:22:56 --> Database Driver Class Initialized
INFO - 2017-05-26 22:22:56 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:22:56 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:22:56 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:22:56 --> Final output sent to browser
DEBUG - 2017-05-26 22:22:56 --> Total execution time: 0.1452
INFO - 2017-05-26 22:23:01 --> Config Class Initialized
INFO - 2017-05-26 22:23:01 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:23:01 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:23:01 --> Utf8 Class Initialized
INFO - 2017-05-26 22:23:01 --> URI Class Initialized
INFO - 2017-05-26 22:23:01 --> Router Class Initialized
INFO - 2017-05-26 22:23:01 --> Output Class Initialized
INFO - 2017-05-26 22:23:01 --> Security Class Initialized
DEBUG - 2017-05-26 22:23:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:23:01 --> Input Class Initialized
INFO - 2017-05-26 22:23:01 --> Language Class Initialized
INFO - 2017-05-26 22:23:01 --> Loader Class Initialized
INFO - 2017-05-26 22:23:01 --> Helper loaded: url_helper
INFO - 2017-05-26 22:23:01 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:23:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:23:01 --> Controller Class Initialized
DEBUG - 2017-05-26 22:23:01 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:23:01 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:23:01 --> Model Class Initialized
INFO - 2017-05-26 22:23:01 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:23:01 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:23:01 --> Final output sent to browser
DEBUG - 2017-05-26 22:23:01 --> Total execution time: 0.0860
INFO - 2017-05-26 22:23:18 --> Config Class Initialized
INFO - 2017-05-26 22:23:18 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:23:18 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:23:18 --> Utf8 Class Initialized
INFO - 2017-05-26 22:23:18 --> URI Class Initialized
INFO - 2017-05-26 22:23:18 --> Router Class Initialized
INFO - 2017-05-26 22:23:18 --> Output Class Initialized
INFO - 2017-05-26 22:23:18 --> Security Class Initialized
DEBUG - 2017-05-26 22:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:23:18 --> Input Class Initialized
INFO - 2017-05-26 22:23:18 --> Language Class Initialized
INFO - 2017-05-26 22:23:18 --> Loader Class Initialized
INFO - 2017-05-26 22:23:18 --> Helper loaded: url_helper
INFO - 2017-05-26 22:23:18 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:23:18 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:23:18 --> Controller Class Initialized
DEBUG - 2017-05-26 22:23:18 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:23:18 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:23:18 --> Model Class Initialized
INFO - 2017-05-26 22:23:18 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:23:18 --> insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
					) values (
					SEQ_LAUDO.NEXTVAL,
					69,
					'asdfasdf',
					'.',
					'&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt; RESSON&amp;Acirc;NCIA MAGN&amp;Eacute;TICA DO COTOVELO&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;T&amp;eacute;cnica: Estudo por resson&amp;acirc;ncia magn&amp;eacute;tica do cotovelo _ obtido com aquisi&amp;ccedil;&amp;otilde;es multiplanares ponderadas em DPW e T1W, com e sem satura&amp;ccedil;&amp;atilde;o do tecido adiposo respectivamente, antes e ap&amp;oacute;s a administra&amp;ccedil;&amp;atilde;o intravenosa de meio de contraste paramagn&amp;eacute;tico.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Resultado: O exame realizado e a an&amp;aacute;lise da hist&amp;oacute;ria cl&amp;iacute;nica do paciente permitem formular as seguintes considera&amp;ccedil;&amp;otilde;es diagn&amp;oacute;sticas:&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;As estruturas &amp;oacute;sseas avaliadas t&amp;ecirc;m morfologia, contornos e inter-rela&amp;ccedil;&amp;otilde;es preservadas, corticalidade &amp;iacute;ntegra e apresentando sinal da medular &amp;oacute;ssea habitual.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Revestimento condral das superf&amp;iacute;cies articulares tem espessura regular e integridade mantida.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Articula&amp;ccedil;&amp;otilde;es umeroulnorradial preservadas. Aus&amp;ecirc;ncia de derrame articular.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;otilde;es flexor e extensor comuns dos dedos t&amp;ecirc;m espessura e intensidade de sinal habituais.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Tend&amp;atilde;o do complexo bicepsbraquial e do tr&amp;iacute;ceps tem espessura e intensidade de sinal mantidas.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ligamentos anular e colaterais medial e lateral &amp;iacute;ntegros.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nervos ulnar e mediano t&amp;ecirc;m espessura e intensidade de sinal mantidas, n&amp;atilde;o se observando &amp;aacute;reas de realce pelo contraste endovenoso.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos miotend&amp;iacute;neos t&amp;ecirc;m espessura e intensidade de sinal habituais, n&amp;atilde;o se identificando les&amp;otilde;es s&amp;oacute;lidas ou c&amp;iacute;sticas nessas topografias.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Planos das bursas biciptorradial e olecraneana livres.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Gratos pelo encaminhamento, estamos &amp;agrave; disposi&amp;ccedil;&amp;atilde;o para maiores esclarecimentos.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Dr. Nero Castro&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;CRM 08.460&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;br /&gt; &lt;/p&gt;',
					'69',
					'DIGI'
				)
INFO - 2017-05-26 22:23:18 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:23:18 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:23:18 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:23:18 --> Final output sent to browser
DEBUG - 2017-05-26 22:23:18 --> Total execution time: 0.1560
INFO - 2017-05-26 22:23:19 --> Config Class Initialized
INFO - 2017-05-26 22:23:19 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:23:19 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:23:19 --> Utf8 Class Initialized
INFO - 2017-05-26 22:23:19 --> URI Class Initialized
INFO - 2017-05-26 22:23:19 --> Router Class Initialized
INFO - 2017-05-26 22:23:19 --> Output Class Initialized
INFO - 2017-05-26 22:23:19 --> Security Class Initialized
DEBUG - 2017-05-26 22:23:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:23:19 --> Input Class Initialized
INFO - 2017-05-26 22:23:19 --> Language Class Initialized
INFO - 2017-05-26 22:23:19 --> Loader Class Initialized
INFO - 2017-05-26 22:23:19 --> Helper loaded: url_helper
INFO - 2017-05-26 22:23:19 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:23:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:23:19 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:23:19 --> Controller Class Initialized
DEBUG - 2017-05-26 22:23:19 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:23:19 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:23:19 --> Final output sent to browser
DEBUG - 2017-05-26 22:23:19 --> Total execution time: 0.0137
INFO - 2017-05-26 22:28:34 --> Config Class Initialized
INFO - 2017-05-26 22:28:34 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:28:34 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:28:34 --> Utf8 Class Initialized
INFO - 2017-05-26 22:28:34 --> URI Class Initialized
INFO - 2017-05-26 22:28:34 --> Router Class Initialized
INFO - 2017-05-26 22:28:34 --> Output Class Initialized
INFO - 2017-05-26 22:28:34 --> Security Class Initialized
DEBUG - 2017-05-26 22:28:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:28:34 --> Input Class Initialized
INFO - 2017-05-26 22:28:34 --> Language Class Initialized
INFO - 2017-05-26 22:28:34 --> Loader Class Initialized
INFO - 2017-05-26 22:28:34 --> Helper loaded: url_helper
INFO - 2017-05-26 22:28:34 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:28:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:28:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:28:34 --> Controller Class Initialized
DEBUG - 2017-05-26 22:28:34 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:28:34 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:28:34 --> Model Class Initialized
INFO - 2017-05-26 22:28:34 --> Database Driver Class Initialized
INFO - 2017-05-26 22:28:34 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:28:34 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:28:34 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:28:34 --> Final output sent to browser
DEBUG - 2017-05-26 22:28:34 --> Total execution time: 0.1561
INFO - 2017-05-26 22:29:26 --> Config Class Initialized
INFO - 2017-05-26 22:29:26 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:29:26 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:29:26 --> Utf8 Class Initialized
INFO - 2017-05-26 22:29:26 --> URI Class Initialized
INFO - 2017-05-26 22:29:26 --> Router Class Initialized
INFO - 2017-05-26 22:29:26 --> Output Class Initialized
INFO - 2017-05-26 22:29:26 --> Security Class Initialized
DEBUG - 2017-05-26 22:29:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:29:26 --> Input Class Initialized
INFO - 2017-05-26 22:29:26 --> Language Class Initialized
INFO - 2017-05-26 22:29:26 --> Loader Class Initialized
INFO - 2017-05-26 22:29:26 --> Helper loaded: url_helper
INFO - 2017-05-26 22:29:26 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:29:26 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:29:26 --> Controller Class Initialized
DEBUG - 2017-05-26 22:29:26 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:29:26 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:29:26 --> Model Class Initialized
INFO - 2017-05-26 22:29:26 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:29:26 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:29:26 --> Final output sent to browser
DEBUG - 2017-05-26 22:29:26 --> Total execution time: 0.0722
INFO - 2017-05-26 22:29:40 --> Config Class Initialized
INFO - 2017-05-26 22:29:40 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:29:40 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:29:40 --> Utf8 Class Initialized
INFO - 2017-05-26 22:29:40 --> URI Class Initialized
INFO - 2017-05-26 22:29:40 --> Router Class Initialized
INFO - 2017-05-26 22:29:40 --> Output Class Initialized
INFO - 2017-05-26 22:29:40 --> Security Class Initialized
DEBUG - 2017-05-26 22:29:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:29:40 --> Input Class Initialized
INFO - 2017-05-26 22:29:40 --> Language Class Initialized
INFO - 2017-05-26 22:29:40 --> Loader Class Initialized
INFO - 2017-05-26 22:29:40 --> Helper loaded: url_helper
INFO - 2017-05-26 22:29:40 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:29:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:29:40 --> Controller Class Initialized
DEBUG - 2017-05-26 22:29:40 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:29:40 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:29:40 --> Model Class Initialized
INFO - 2017-05-26 22:29:40 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:29:40 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'asdasdasd',
					'.',
					to_clob('&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat id mi vel consectetur. Maecenas scelerisque, orci et consequat sagittis, sapien libero mattis massa, ac feugiat ligula nisi a nisl. Pellentesque imperdiet elementum luctus. Curabitur non odio ex. Nam ut neque id nibh blandit porta. Nam et leo accumsan turpis vehicula elementum. Donec condimentum lacinia leo, vitae iaculis sapien cursus vel. Morbi gravida diam sit amet dui aliquam, vel euismod sem blandit. Proin hendrerit condimentum justo. Vivamus ut lectus a eros laoreet molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus dignissim odio ipsum, vel finibus magna condimentum ut. Donec nec urna sit amet sapien rhoncus ultricies in at dolor. Nullam a velit eget massa tincidunt luctus. Nam sagittis risus eget felis tincidunt hendrerit. Suspendisse ullamcorper faucibus scelerisque. Proin vel faucibus lorem. Fusce et odio imperdiet nulla ultrices interdum. Quisque in lorem sed ligula suscipit volutpat. Praesent eget dignissim mi. Quisque sed ipsum volutpat, fringilla elit nec, euismod urna. Aenean velit libero, tempus vitae mattis nec, egestas eu turpis. Mauris venenatis risus pharetra orci tincidunt lacinia.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed vel auctor diam. Sed ut suscipit nibh. Nunc velit velit, volutpat non ultricies sit amet, fringilla eget lacus. Sed elementum odio risus, vel vehicula quam fringilla sit amet. Etiam blandit nisl nisi, vitae feugiat neque commodo in. Donec pellentesque sagittis consectetur. Nam sit amet porttitor ipsum, ut pretium enim. Morbi efficitur sodales urna sit amet lacinia. Suspendisse condimentum nunc felis, et scelerisque purus vehicula non. Integer laoreet consectetur congue. Suspendisse in ullamcorper tellus. Nulla auctor, lectus id consequat cursus, lorem metus finibus metus, id pharetra est arcu eget diam. Mauris semper elementum felis, sed suscipit nibh vestibulum mollis.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut iaculis mattis est eget tempor. Donec erat erat, pulvinar ut tellus non, tincidunt malesuada odio. Phasellus posuere vel odio ') || to_clob('quis convallis. Pellentesque vitae dui eget nunc lacinia congue eget eget ante. Sed in nunc viverra, fringilla velit non, bibendum velit. Nam nisi lectus, commodo vitae velit ut, euismod tristique est. Nam imperdiet ac elit eget tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis est. Sed lobortis nec eros eu egestas. Sed tincidunt velit eget enim finibus faucibus. Nulla vitae laoreet nulla. Vivamus sit amet tristique leo, quis ornare lectus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed id purus gravida, venenatis velit non, commodo mauris. Mauris at convallis nisl. Aliquam erat volutpat. Vestibulum sollicitudin sem vel elementum interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In at ante quis ipsum viverra sagittis. Donec quis ligula ac dui malesuada dictum a in quam. Donec lobortis lacinia tempus. Integer a sem in nisl sagittis tincidunt ac ut odio. Curabitur semper dolor sapien, quis ultricies nisl dignissim sit amet. Aliquam sed nisi dapibus sem elementum egestas eget non nulla.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Fusce ac dui lorem. Pellentesque aliquam purus nec felis porta imperdiet. Cras convallis, tortor at feugiat lacinia, augue enim semper tellus, ac maximus ante ex ut metus. Nunc condimentum mauris odio, pretium finibus nibh efficitur ac. Donec sit amet condimentum quam, ac dictum ante. In id justo erat. Integer fermentum efficitur ultrices. Nulla sit amet ligula a dui cursus porttitor non eget ipsum. Donec nec imperdiet ligula. Nunc vestibulum cursus nisl eget dictum. Maecenas ullamcorper quam et turpis varius posuere.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Etiam magna dui, accumsan quis pulvinar quis, porta id ipsum. Maecenas mattis quam sit amet eros sodales, sed condimentum neque porta. In hendrerit molestie ex quis sagittis. Sed bibendum libero quis vehicula imperdiet. Sed eget bibendum enim. Nulla vitae tincidunt quam. Quisque at lectus ex. Curabitur maximus metus vitae augue elementum, vel convallis lectus aliquet. Cras nec scelerisque sem. Donec fermentum interdum augue. Suspendisse et faucibus diam. Pellentesque faucibus aliquam risus. Cras fringilla lorem pretium, viverra nisl sit amet, placerat nunc.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In hac habitasse platea dictumst. Nam gravida, eros et pellentesque efficitur, nunc sem volutpat nisi, id tincidunt neque neque vel est. Suspendisse ut rutrum augue. Praesent faucibus hendrerit massa, et placerat mi vulputate vel. Aliquam luctus pretium rhoncus. Pellentesque accumsan scelerisque ante et pulvinar. Quisque risus ipsum, pulvinar rhoncus vulputate et, aliquet id augue. Quisque pellentesque interdum quam a pretium. Integer vitae lorem in odio interdum suscipit ut vel leo. Integer fermentum odio et finibus vehicula. Phasellus elementum sed massa sit amet vehicula. Donec pellentesque nec purus ut vulputate. Vivamus at facilisis leo.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut efficitur nec lectus eget eleifend. Vestibulum enim nunc, sollicitudin eget sapien ac, semper laoreet nibh. Phasellus diam dolor, ornare non diam ac, venenatis dictum urna. Cras sagittis, sem sed ullamcorper sagittis, sem augue fermentum arcu, non consectetur neque nisl in dolor. Pellentesque sollicitudin condimentum lobortis. Curabitur vulputate sagittis ipsum nec scelerisque. Fusce eu ante tincidunt, laoreet lacus nec, feugiat odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aenean vulputate euismod tellus. Curabitur id varius magna, et dapibus risus. Sed luctus, est eget consectetur tincidunt, diam eros vestibulum nibh, sit amet molestie ante eros eu sem. Morbi convallis dictum elit, in fringilla ante condimentum nec. Mauris semper, nisi a hendrerit convallis, arcu lorem condimentum quam, quis varius arcu erat sed odio. Maecenas consequat nunc at dui consectetur lacinia. Aenean tincidunt quis odio quis pretium.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;'),
					'69',
					'DIGI'
				)
DEBUG - 2017-05-26 22:29:40 --> DB Transaction Failure
INFO - 2017-05-26 22:29:40 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:31:03 --> Config Class Initialized
INFO - 2017-05-26 22:31:03 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:03 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:03 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:03 --> URI Class Initialized
DEBUG - 2017-05-26 22:31:03 --> No URI present. Default controller set.
INFO - 2017-05-26 22:31:03 --> Router Class Initialized
INFO - 2017-05-26 22:31:03 --> Output Class Initialized
INFO - 2017-05-26 22:31:03 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:03 --> Input Class Initialized
INFO - 2017-05-26 22:31:03 --> Language Class Initialized
INFO - 2017-05-26 22:31:03 --> Loader Class Initialized
INFO - 2017-05-26 22:31:03 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:03 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:03 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:03 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:03 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:31:03 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:03 --> Total execution time: 0.0079
INFO - 2017-05-26 22:31:03 --> Config Class Initialized
INFO - 2017-05-26 22:31:03 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:03 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:03 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:03 --> URI Class Initialized
INFO - 2017-05-26 22:31:03 --> Router Class Initialized
INFO - 2017-05-26 22:31:03 --> Output Class Initialized
INFO - 2017-05-26 22:31:03 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:03 --> Input Class Initialized
INFO - 2017-05-26 22:31:03 --> Language Class Initialized
INFO - 2017-05-26 22:31:03 --> Loader Class Initialized
INFO - 2017-05-26 22:31:03 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:03 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:03 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:03 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:03 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:31:03 --> Model Class Initialized
INFO - 2017-05-26 22:31:03 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:31:03 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:31:03 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:31:03 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:03 --> Total execution time: 0.0887
INFO - 2017-05-26 22:31:37 --> Config Class Initialized
INFO - 2017-05-26 22:31:37 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:37 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:37 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:37 --> URI Class Initialized
INFO - 2017-05-26 22:31:37 --> Router Class Initialized
INFO - 2017-05-26 22:31:37 --> Output Class Initialized
INFO - 2017-05-26 22:31:37 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:37 --> Input Class Initialized
INFO - 2017-05-26 22:31:37 --> Language Class Initialized
INFO - 2017-05-26 22:31:37 --> Loader Class Initialized
INFO - 2017-05-26 22:31:37 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:37 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:37 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:37 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:37 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:37 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:31:37 --> Model Class Initialized
INFO - 2017-05-26 22:31:37 --> Database Driver Class Initialized
INFO - 2017-05-26 22:31:37 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:31:37 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:31:37 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:31:37 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:37 --> Total execution time: 0.1787
INFO - 2017-05-26 22:31:42 --> Config Class Initialized
INFO - 2017-05-26 22:31:42 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:42 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:42 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:42 --> URI Class Initialized
INFO - 2017-05-26 22:31:42 --> Router Class Initialized
INFO - 2017-05-26 22:31:42 --> Output Class Initialized
INFO - 2017-05-26 22:31:42 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:42 --> Input Class Initialized
INFO - 2017-05-26 22:31:42 --> Language Class Initialized
INFO - 2017-05-26 22:31:42 --> Loader Class Initialized
INFO - 2017-05-26 22:31:42 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:42 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:42 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:42 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:42 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:42 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:31:42 --> Model Class Initialized
INFO - 2017-05-26 22:31:42 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:31:42 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:31:42 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:42 --> Total execution time: 0.0650
INFO - 2017-05-26 22:31:54 --> Config Class Initialized
INFO - 2017-05-26 22:31:54 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:54 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:54 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:54 --> URI Class Initialized
INFO - 2017-05-26 22:31:54 --> Router Class Initialized
INFO - 2017-05-26 22:31:54 --> Output Class Initialized
INFO - 2017-05-26 22:31:54 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:54 --> Input Class Initialized
INFO - 2017-05-26 22:31:54 --> Language Class Initialized
INFO - 2017-05-26 22:31:54 --> Loader Class Initialized
INFO - 2017-05-26 22:31:54 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:54 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:54 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:54 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:31:54 --> Model Class Initialized
INFO - 2017-05-26 22:31:54 --> Database Driver Class Initialized
INFO - 2017-05-26 22:31:54 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:31:54 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:31:54 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:31:54 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:54 --> Total execution time: 0.1615
INFO - 2017-05-26 22:31:55 --> Config Class Initialized
INFO - 2017-05-26 22:31:55 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:31:55 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:31:55 --> Utf8 Class Initialized
INFO - 2017-05-26 22:31:55 --> URI Class Initialized
INFO - 2017-05-26 22:31:55 --> Router Class Initialized
INFO - 2017-05-26 22:31:55 --> Output Class Initialized
INFO - 2017-05-26 22:31:55 --> Security Class Initialized
DEBUG - 2017-05-26 22:31:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:31:55 --> Input Class Initialized
INFO - 2017-05-26 22:31:55 --> Language Class Initialized
INFO - 2017-05-26 22:31:55 --> Loader Class Initialized
INFO - 2017-05-26 22:31:55 --> Helper loaded: url_helper
INFO - 2017-05-26 22:31:55 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:31:55 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:31:55 --> Controller Class Initialized
DEBUG - 2017-05-26 22:31:55 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:31:55 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:31:55 --> Final output sent to browser
DEBUG - 2017-05-26 22:31:55 --> Total execution time: 0.0021
INFO - 2017-05-26 22:49:39 --> Config Class Initialized
INFO - 2017-05-26 22:49:39 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:49:39 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:49:39 --> Utf8 Class Initialized
INFO - 2017-05-26 22:49:39 --> URI Class Initialized
INFO - 2017-05-26 22:49:39 --> Router Class Initialized
INFO - 2017-05-26 22:49:39 --> Output Class Initialized
INFO - 2017-05-26 22:49:39 --> Security Class Initialized
DEBUG - 2017-05-26 22:49:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:49:39 --> Input Class Initialized
INFO - 2017-05-26 22:49:39 --> Language Class Initialized
INFO - 2017-05-26 22:49:39 --> Loader Class Initialized
INFO - 2017-05-26 22:49:39 --> Helper loaded: url_helper
INFO - 2017-05-26 22:49:39 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:49:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:49:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:49:39 --> Controller Class Initialized
DEBUG - 2017-05-26 22:49:39 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:49:39 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:49:39 --> Model Class Initialized
INFO - 2017-05-26 22:49:39 --> Database Driver Class Initialized
INFO - 2017-05-26 22:49:39 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:49:39 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:49:39 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:49:39 --> Final output sent to browser
DEBUG - 2017-05-26 22:49:39 --> Total execution time: 0.1304
INFO - 2017-05-26 22:50:09 --> Config Class Initialized
INFO - 2017-05-26 22:50:09 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:50:09 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:50:09 --> Utf8 Class Initialized
INFO - 2017-05-26 22:50:09 --> URI Class Initialized
INFO - 2017-05-26 22:50:09 --> Router Class Initialized
INFO - 2017-05-26 22:50:09 --> Output Class Initialized
INFO - 2017-05-26 22:50:09 --> Security Class Initialized
DEBUG - 2017-05-26 22:50:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:50:09 --> Input Class Initialized
INFO - 2017-05-26 22:50:09 --> Language Class Initialized
INFO - 2017-05-26 22:50:09 --> Loader Class Initialized
INFO - 2017-05-26 22:50:09 --> Helper loaded: url_helper
INFO - 2017-05-26 22:50:09 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:50:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:50:09 --> Controller Class Initialized
DEBUG - 2017-05-26 22:50:09 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:50:09 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:50:09 --> Model Class Initialized
INFO - 2017-05-26 22:50:09 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:50:09 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:50:09 --> Final output sent to browser
DEBUG - 2017-05-26 22:50:09 --> Total execution time: 0.0964
INFO - 2017-05-26 22:50:28 --> Config Class Initialized
INFO - 2017-05-26 22:50:28 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:50:28 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:50:28 --> Utf8 Class Initialized
INFO - 2017-05-26 22:50:28 --> URI Class Initialized
INFO - 2017-05-26 22:50:28 --> Router Class Initialized
INFO - 2017-05-26 22:50:28 --> Output Class Initialized
INFO - 2017-05-26 22:50:28 --> Security Class Initialized
DEBUG - 2017-05-26 22:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:50:28 --> Input Class Initialized
INFO - 2017-05-26 22:50:28 --> Language Class Initialized
INFO - 2017-05-26 22:50:28 --> Loader Class Initialized
INFO - 2017-05-26 22:50:28 --> Helper loaded: url_helper
INFO - 2017-05-26 22:50:28 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:50:28 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:50:28 --> Controller Class Initialized
DEBUG - 2017-05-26 22:50:28 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:50:28 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:50:28 --> Model Class Initialized
INFO - 2017-05-26 22:50:28 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:50:28 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'GRANDE',
					'.',
					'to_clob(&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ipsum eu arcu eleifend iaculis. Fusce dolor quam, aliquam non quam quis, maximus blandit velit. Fusce eget efficitur neque, in tempus erat. Pellentesque fringilla tincidunt lectus, at auctor dui ullamcorper nec. Vivamus est est, tempus nec vulputate et, tempus ut ex. Suspendisse a sapien ac metus tincidunt mollis. Phasellus feugiat ornare mollis. Maecenas ac lacus sed nunc finibus pretium et sed urna. Donec vel orci scelerisque, mollis risus sed, accumsan nunc. Duis eleifend nibh a ligula volutpat, sit amet tristique turpis hendrerit. Pellentesque ut dictum ex. Phasellus rhoncus lorem purus, eget sodales lectus porta eget. Pellentesque libero neque, laoreet in tellus eget, dictum molestie dolor. Maecenas odio turpis, consequat nec elit at, ultricies congue turpis. Phasellus ut eros quis nunc aliquet faucibus eu sit amet est. Sed sem lorem, suscipit ullamcorper euismod vitae, tempor eu magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi id sem nec metus pretium fringilla. Maecenas pharetra vel magna a pulvinar. Phasellus tortor eros, elementum eget ligula vehicula, facilisis aliquam metus. Ut purus odio, dignissim et dictum ac, porttitor et justo. Curabitur fringilla ut augue vitae gravida. Pellentesque porta vestibulum felis sed feugiat. Cras scelerisque commodo mollis. Morbi accumsan est ut felis euismod, vitae pharetra orci ultricies. Fusce ultricies luctus dui, eu consectetur risus condimentum quis. Sed gravida nunc pretium mi pulvinar, vitae ultricies sapien ullamcorper. Sed bibendum iaculis dolor et tempor. Pellentesque ac ipsum urna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed condimentum est mauris, ut suscipit odio venenatis in. Sed turpis est, lobortis vitae arcu in, euismod tempor leo. Donec dapibus orci sit amet est dignissim, ac consequat tortor convallis. Morbi enim magna, imperdiet molestie pretium et, faucibus quis velit. Ut eu sem a ex placerat condimentum. Aliquam dapibus lectus sed accumsan faucibus. Nam ligula odio, tincidunt a varius sit amet, congue vel odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut elementum tortor at diam blandit eleifend. Sed urna nibh, auctor ut auctor quis, iaculis ac libero. Donec fringilla egestas nibh, quis pulvinar eros volutpat id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Cras dapibus viverra congue. Aenean viverra porttitor elit, vehicula rutrum nulla malesuada eget.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut et ornare lorem. Mauris ultrices lacinia sem non ullamcorper. Mauris sit amet dui a sem porttitor ornare. Quisque vel porttitor augue. Aenean eu malesuada ipsum. Donec porta a sem gravida ornare. Nunc eget lacus commodo, varius mi ac, pellentesque diam. Nunc volutpat sem in mauris accumsan, sit amet pretium massa tempus. Maecenas sit amet enim viverra, molestie felis quis, egestas ipsum. Sed ac erat feli) ||to_clob(s. Sed nec porttitor ex, non posuere tellus. Duis nisi elit, ornare in eros in, aliquet lacinia mi. Sed sed enim nec odio facilisis consequat vitae nec lectus. Ut a mi a felis condimentum placerat. Aliquam a leo sollicitudin, tempor turpis non, euismod ligula. Phasellus consectetur non leo scelerisque ultrices.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris finibus erat ac malesuada condimentum. Cras tristique lorem vitae hendrerit ultricies. Etiam vitae purus vitae ante porttitor pulvinar id ut erat. Pellentesque imperdiet facilisis nisl, sit amet eleifend felis mollis non. Phasellus fringilla, enim at cursus convallis, erat neque ultrices lacus, non mattis mi mi tristique tortor. Sed ut ullamcorper mi. Donec dictum bibendum velit, in tempor quam pellentesque et. Cras eu viverra nisi. Duis felis ipsum, condimentum quis nunc ut, consectetur mollis lacus. Ut molestie faucibus augue, at mollis magna consequat eget. In metus nibh, consectetur iaculis felis sed, sodales finibus tellus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Etiam leo lectus, rhoncus ac enim et, euismod sagittis neque. Nam luctus elit a bibendum elementum. Donec sed placerat dui. Maecenas sagittis luctus quam posuere dapibus. Cras in imperdiet metus. Curabitur quis molestie augue. Etiam aliquet libero dictum tortor placerat cursus. Maecenas vitae ex at lacus placerat tincidunt. Praesent eu ornare justo, non consectetur sem. Integer aliquet, justo vel aliquet commodo, est urna mattis eros, quis consectetur ipsum arcu a velit. Nam euismod lectus neque, in fringilla erat commodo sed. Etiam non augue sed leo consectetur ullamcorper. Duis at quam eget sapien rhoncus tristique vel nec dui. Maecenas dapibus dictum elit, vitae tempus leo vulputate sit amet. Etiam in nibh lacus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque at odio efficitur libero bibendum dignissim nec eu felis. Sed eget vulputate lacus. Fusce quis pulvinar elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam venenatis lorem vel urna tempor, id feugiat ex egestas. Curabitur ultrices nisi vitae risus sagittis sollicitudin. Donec sit amet massa vel libero blandit dictum nec vitae ipsum.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris et sem faucibus, gravida augue ut, fringilla ex. Aenean quis sapien eget magna dapibus consequat. Morbi hendrerit pharetra enim id dictum. Proin ornare sollicitudin mauris a interdum. Ut ullamcorper enim porta nisi euismod sollicitudin. Aenean aliquet euismod ex at fermentum. In ut diam commodo, consectetur tellus vitae, malesuada magna. Maecenas vitae aliquam felis. Vivamus semper eros eget lacus finibus hendrerit. Donec eu congue mauris. Phasellus et bibendum neque.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque eu accumsan neque. Nullam id ante lorem. Nam cursus mattis felis vitae suscipit. In facilisis mi vestibulum, sagittis mi eget, congue libero. Aenean eget velit pulvinar, consequat e) ||to_clob(x sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectet) ||to_clob(ur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!asp) ||to_clob(a!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;)',
					'69',
					'DIGI'
				)
DEBUG - 2017-05-26 22:50:28 --> DB Transaction Failure
INFO - 2017-05-26 22:50:28 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:53:46 --> Config Class Initialized
INFO - 2017-05-26 22:53:46 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:53:46 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:53:46 --> Utf8 Class Initialized
INFO - 2017-05-26 22:53:46 --> URI Class Initialized
DEBUG - 2017-05-26 22:53:46 --> No URI present. Default controller set.
INFO - 2017-05-26 22:53:46 --> Router Class Initialized
INFO - 2017-05-26 22:53:46 --> Output Class Initialized
INFO - 2017-05-26 22:53:46 --> Security Class Initialized
DEBUG - 2017-05-26 22:53:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:53:46 --> Input Class Initialized
INFO - 2017-05-26 22:53:46 --> Language Class Initialized
INFO - 2017-05-26 22:53:46 --> Loader Class Initialized
INFO - 2017-05-26 22:53:46 --> Helper loaded: url_helper
INFO - 2017-05-26 22:53:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:53:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:53:46 --> Controller Class Initialized
DEBUG - 2017-05-26 22:53:46 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:53:46 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:53:46 --> Final output sent to browser
DEBUG - 2017-05-26 22:53:46 --> Total execution time: 0.0054
INFO - 2017-05-26 22:53:46 --> Config Class Initialized
INFO - 2017-05-26 22:53:46 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:53:46 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:53:46 --> Utf8 Class Initialized
INFO - 2017-05-26 22:53:46 --> URI Class Initialized
INFO - 2017-05-26 22:53:46 --> Router Class Initialized
INFO - 2017-05-26 22:53:46 --> Output Class Initialized
INFO - 2017-05-26 22:53:46 --> Security Class Initialized
DEBUG - 2017-05-26 22:53:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:53:46 --> Input Class Initialized
INFO - 2017-05-26 22:53:46 --> Language Class Initialized
INFO - 2017-05-26 22:53:46 --> Loader Class Initialized
INFO - 2017-05-26 22:53:46 --> Helper loaded: url_helper
INFO - 2017-05-26 22:53:46 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:53:46 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:53:46 --> Controller Class Initialized
DEBUG - 2017-05-26 22:53:46 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:53:46 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:53:46 --> Model Class Initialized
INFO - 2017-05-26 22:53:46 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:53:46 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:53:46 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:53:46 --> Final output sent to browser
DEBUG - 2017-05-26 22:53:46 --> Total execution time: 0.0742
INFO - 2017-05-26 22:53:50 --> Config Class Initialized
INFO - 2017-05-26 22:53:50 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:53:50 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:53:50 --> Utf8 Class Initialized
INFO - 2017-05-26 22:53:50 --> URI Class Initialized
INFO - 2017-05-26 22:53:50 --> Router Class Initialized
INFO - 2017-05-26 22:53:50 --> Output Class Initialized
INFO - 2017-05-26 22:53:50 --> Security Class Initialized
DEBUG - 2017-05-26 22:53:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:53:50 --> Input Class Initialized
INFO - 2017-05-26 22:53:50 --> Language Class Initialized
INFO - 2017-05-26 22:53:50 --> Loader Class Initialized
INFO - 2017-05-26 22:53:50 --> Helper loaded: url_helper
INFO - 2017-05-26 22:53:50 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:53:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:53:50 --> Controller Class Initialized
DEBUG - 2017-05-26 22:53:50 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:53:50 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:53:50 --> Model Class Initialized
INFO - 2017-05-26 22:53:50 --> Database Driver Class Initialized
INFO - 2017-05-26 22:53:50 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:53:50 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:53:50 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:53:50 --> Final output sent to browser
DEBUG - 2017-05-26 22:53:50 --> Total execution time: 0.1424
INFO - 2017-05-26 22:53:54 --> Config Class Initialized
INFO - 2017-05-26 22:53:54 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:53:54 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:53:54 --> Utf8 Class Initialized
INFO - 2017-05-26 22:53:54 --> URI Class Initialized
INFO - 2017-05-26 22:53:54 --> Router Class Initialized
INFO - 2017-05-26 22:53:54 --> Output Class Initialized
INFO - 2017-05-26 22:53:54 --> Security Class Initialized
DEBUG - 2017-05-26 22:53:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:53:54 --> Input Class Initialized
INFO - 2017-05-26 22:53:54 --> Language Class Initialized
INFO - 2017-05-26 22:53:54 --> Loader Class Initialized
INFO - 2017-05-26 22:53:54 --> Helper loaded: url_helper
INFO - 2017-05-26 22:53:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:53:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:53:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:53:54 --> Controller Class Initialized
DEBUG - 2017-05-26 22:53:54 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:53:54 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:53:54 --> Model Class Initialized
INFO - 2017-05-26 22:53:54 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:53:54 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:53:54 --> Final output sent to browser
DEBUG - 2017-05-26 22:53:54 --> Total execution time: 0.0820
INFO - 2017-05-26 22:54:14 --> Config Class Initialized
INFO - 2017-05-26 22:54:14 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:54:14 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:54:14 --> Utf8 Class Initialized
INFO - 2017-05-26 22:54:14 --> URI Class Initialized
INFO - 2017-05-26 22:54:14 --> Router Class Initialized
INFO - 2017-05-26 22:54:14 --> Output Class Initialized
INFO - 2017-05-26 22:54:14 --> Security Class Initialized
DEBUG - 2017-05-26 22:54:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:54:14 --> Input Class Initialized
INFO - 2017-05-26 22:54:14 --> Language Class Initialized
INFO - 2017-05-26 22:54:14 --> Loader Class Initialized
INFO - 2017-05-26 22:54:14 --> Helper loaded: url_helper
INFO - 2017-05-26 22:54:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:54:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:54:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:54:14 --> Controller Class Initialized
DEBUG - 2017-05-26 22:54:14 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:54:14 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:54:14 --> Model Class Initialized
INFO - 2017-05-26 22:54:14 --> Database Driver Class Initialized
ERROR - 2017-05-26 22:54:14 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'GRANDE',
					'.',
					'to_clob(&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ipsum eu arcu eleifend iaculis. Fusce dolor quam, aliquam non quam quis, maximus blandit velit. Fusce eget efficitur neque, in tempus erat. Pellentesque fringilla tincidunt lectus, at auctor dui ullamcorper nec. Vivamus est est, tempus nec vulputate et, tempus ut ex. Suspendisse a sapien ac metus tincidunt mollis. Phasellus feugiat ornare mollis. Maecenas ac lacus sed nunc finibus pretium et sed urna. Donec vel orci scelerisque, mollis risus sed, accumsan nunc. Duis eleifend nibh a ligula volutpat, sit amet tristique turpis hendrerit. Pellentesque ut dictum ex. Phasellus rhoncus lorem purus, eget sodales lectus porta eget. Pellentesque libero neque, laoreet in tellus eget, dictum molestie dolor. Maecenas odio turpis, consequat nec elit at, ultricies congue turpis. Phasellus ut eros quis nunc aliquet faucibus eu sit amet est. Sed sem lorem, suscipit ullamcorper euismod vitae, tempor eu magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi id sem nec metus pretium fringilla. Maecenas pharetra vel magna a pulvinar. Phasellus tortor eros, elementum eget ligula vehicula, facilisis aliquam metus. Ut purus odio, dignissim et dictum ac, porttitor et justo. Curabitur fringilla ut augue vitae gravida. Pellentesque porta vestibulum felis sed feugiat. Cras scelerisque commodo mollis. Morbi accumsan est ut felis euismod, vitae pharetra orci ultricies. Fusce ultricies luctus dui, eu consectetur risus condimentum quis. Sed gravida nunc pretium mi pulvinar, vitae ultricies sapien ullamcorper. Sed bibendum iaculis dolor et tempor. Pellentesque ac ipsum urna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed condimentum est mauris, ut suscipit odio venenatis in. Sed turpis est, lobortis vitae arcu in, euismod tempor leo. Donec dapibus orci sit amet est dignissim, ac consequat tortor convallis. Morbi enim magna, imperdiet molestie pretium et, faucibus quis velit. Ut eu sem a ex placerat condimentum. Aliquam dapibus lectus sed accumsan faucibus. Nam ligula odio, tincidunt a varius sit amet, congue vel odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut elementum tortor at diam blandit eleifend. Sed urna nibh, auctor ut auctor quis, iaculis ac libero. Donec fringilla egestas nibh, quis pulvinar eros volutpat id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Cras dapibus viverra congue. Aenean viverra porttitor elit, vehicula rutrum nulla malesuada eget.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut et ornare lorem. Mauris ultrices lacinia sem non ullamcorper. Mauris sit amet dui a sem porttitor ornare. Quisque vel porttitor augue. Aenean eu malesuada ipsum. Donec porta a sem gravida ornare. Nunc eget lacus commodo, varius mi ac, pellentesque diam. Nunc volutpat sem in mauris accumsan, sit amet pretium massa tempus. Maecenas sit amet enim viverra, molestie felis quis, egestas ipsum. Sed ac erat feli) ||to_clob(s. Sed nec porttitor ex, non posuere tellus. Duis nisi elit, ornare in eros in, aliquet lacinia mi. Sed sed enim nec odio facilisis consequat vitae nec lectus. Ut a mi a felis condimentum placerat. Aliquam a leo sollicitudin, tempor turpis non, euismod ligula. Phasellus consectetur non leo scelerisque ultrices.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris finibus erat ac malesuada condimentum. Cras tristique lorem vitae hendrerit ultricies. Etiam vitae purus vitae ante porttitor pulvinar id ut erat. Pellentesque imperdiet facilisis nisl, sit amet eleifend felis mollis non. Phasellus fringilla, enim at cursus convallis, erat neque ultrices lacus, non mattis mi mi tristique tortor. Sed ut ullamcorper mi. Donec dictum bibendum velit, in tempor quam pellentesque et. Cras eu viverra nisi. Duis felis ipsum, condimentum quis nunc ut, consectetur mollis lacus. Ut molestie faucibus augue, at mollis magna consequat eget. In metus nibh, consectetur iaculis felis sed, sodales finibus tellus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Etiam leo lectus, rhoncus ac enim et, euismod sagittis neque. Nam luctus elit a bibendum elementum. Donec sed placerat dui. Maecenas sagittis luctus quam posuere dapibus. Cras in imperdiet metus. Curabitur quis molestie augue. Etiam aliquet libero dictum tortor placerat cursus. Maecenas vitae ex at lacus placerat tincidunt. Praesent eu ornare justo, non consectetur sem. Integer aliquet, justo vel aliquet commodo, est urna mattis eros, quis consectetur ipsum arcu a velit. Nam euismod lectus neque, in fringilla erat commodo sed. Etiam non augue sed leo consectetur ullamcorper. Duis at quam eget sapien rhoncus tristique vel nec dui. Maecenas dapibus dictum elit, vitae tempus leo vulputate sit amet. Etiam in nibh lacus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque at odio efficitur libero bibendum dignissim nec eu felis. Sed eget vulputate lacus. Fusce quis pulvinar elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam venenatis lorem vel urna tempor, id feugiat ex egestas. Curabitur ultrices nisi vitae risus sagittis sollicitudin. Donec sit amet massa vel libero blandit dictum nec vitae ipsum.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris et sem faucibus, gravida augue ut, fringilla ex. Aenean quis sapien eget magna dapibus consequat. Morbi hendrerit ph&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;)',
					'69',
					'DIGI'
				)
DEBUG - 2017-05-26 22:54:14 --> DB Transaction Failure
INFO - 2017-05-26 22:54:14 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 22:56:25 --> Config Class Initialized
INFO - 2017-05-26 22:56:25 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:56:25 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:56:25 --> Utf8 Class Initialized
INFO - 2017-05-26 22:56:25 --> URI Class Initialized
DEBUG - 2017-05-26 22:56:25 --> No URI present. Default controller set.
INFO - 2017-05-26 22:56:25 --> Router Class Initialized
INFO - 2017-05-26 22:56:25 --> Output Class Initialized
INFO - 2017-05-26 22:56:25 --> Security Class Initialized
DEBUG - 2017-05-26 22:56:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:56:25 --> Input Class Initialized
INFO - 2017-05-26 22:56:25 --> Language Class Initialized
INFO - 2017-05-26 22:56:25 --> Loader Class Initialized
INFO - 2017-05-26 22:56:25 --> Helper loaded: url_helper
INFO - 2017-05-26 22:56:25 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:56:25 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:56:25 --> Controller Class Initialized
DEBUG - 2017-05-26 22:56:25 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:56:25 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:56:25 --> Final output sent to browser
DEBUG - 2017-05-26 22:56:25 --> Total execution time: 0.0046
INFO - 2017-05-26 22:56:25 --> Config Class Initialized
INFO - 2017-05-26 22:56:25 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:56:25 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:56:25 --> Utf8 Class Initialized
INFO - 2017-05-26 22:56:25 --> URI Class Initialized
INFO - 2017-05-26 22:56:25 --> Router Class Initialized
INFO - 2017-05-26 22:56:25 --> Output Class Initialized
INFO - 2017-05-26 22:56:25 --> Security Class Initialized
DEBUG - 2017-05-26 22:56:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:56:25 --> Input Class Initialized
INFO - 2017-05-26 22:56:25 --> Language Class Initialized
INFO - 2017-05-26 22:56:25 --> Loader Class Initialized
INFO - 2017-05-26 22:56:25 --> Helper loaded: url_helper
INFO - 2017-05-26 22:56:25 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:56:25 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:56:25 --> Controller Class Initialized
DEBUG - 2017-05-26 22:56:25 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:56:25 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 22:56:25 --> Model Class Initialized
INFO - 2017-05-26 22:56:25 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:56:25 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 22:56:25 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:56:25 --> Final output sent to browser
DEBUG - 2017-05-26 22:56:25 --> Total execution time: 0.0762
INFO - 2017-05-26 22:56:29 --> Config Class Initialized
INFO - 2017-05-26 22:56:29 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:56:29 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:56:29 --> Utf8 Class Initialized
INFO - 2017-05-26 22:56:29 --> URI Class Initialized
INFO - 2017-05-26 22:56:29 --> Router Class Initialized
INFO - 2017-05-26 22:56:29 --> Output Class Initialized
INFO - 2017-05-26 22:56:29 --> Security Class Initialized
DEBUG - 2017-05-26 22:56:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:56:29 --> Input Class Initialized
INFO - 2017-05-26 22:56:29 --> Language Class Initialized
INFO - 2017-05-26 22:56:29 --> Loader Class Initialized
INFO - 2017-05-26 22:56:29 --> Helper loaded: url_helper
INFO - 2017-05-26 22:56:29 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:56:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:56:29 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:56:29 --> Controller Class Initialized
DEBUG - 2017-05-26 22:56:29 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:56:29 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 22:56:29 --> Model Class Initialized
INFO - 2017-05-26 22:56:29 --> Database Driver Class Initialized
INFO - 2017-05-26 22:56:30 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 22:56:30 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 22:56:30 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 22:56:30 --> Final output sent to browser
DEBUG - 2017-05-26 22:56:30 --> Total execution time: 0.1324
INFO - 2017-05-26 22:56:35 --> Config Class Initialized
INFO - 2017-05-26 22:56:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:56:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:56:35 --> Utf8 Class Initialized
INFO - 2017-05-26 22:56:35 --> URI Class Initialized
INFO - 2017-05-26 22:56:35 --> Router Class Initialized
INFO - 2017-05-26 22:56:35 --> Output Class Initialized
INFO - 2017-05-26 22:56:35 --> Security Class Initialized
DEBUG - 2017-05-26 22:56:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:56:35 --> Input Class Initialized
INFO - 2017-05-26 22:56:35 --> Language Class Initialized
INFO - 2017-05-26 22:56:35 --> Loader Class Initialized
INFO - 2017-05-26 22:56:35 --> Helper loaded: url_helper
INFO - 2017-05-26 22:56:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:56:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:56:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:56:35 --> Controller Class Initialized
DEBUG - 2017-05-26 22:56:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:56:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 22:56:35 --> Model Class Initialized
INFO - 2017-05-26 22:56:35 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:56:35 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 22:56:35 --> Final output sent to browser
DEBUG - 2017-05-26 22:56:35 --> Total execution time: 0.0998
INFO - 2017-05-26 22:57:55 --> Config Class Initialized
INFO - 2017-05-26 22:57:55 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:57:55 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:57:55 --> Utf8 Class Initialized
INFO - 2017-05-26 22:57:55 --> URI Class Initialized
INFO - 2017-05-26 22:57:55 --> Router Class Initialized
INFO - 2017-05-26 22:57:55 --> Output Class Initialized
INFO - 2017-05-26 22:57:55 --> Security Class Initialized
DEBUG - 2017-05-26 22:57:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:57:55 --> Input Class Initialized
INFO - 2017-05-26 22:57:55 --> Language Class Initialized
INFO - 2017-05-26 22:57:55 --> Loader Class Initialized
INFO - 2017-05-26 22:57:55 --> Helper loaded: url_helper
INFO - 2017-05-26 22:57:55 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:57:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:57:55 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:57:55 --> Controller Class Initialized
DEBUG - 2017-05-26 22:57:55 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:57:55 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 22:57:55 --> Final output sent to browser
DEBUG - 2017-05-26 22:57:55 --> Total execution time: 0.0065
INFO - 2017-05-26 22:58:03 --> Config Class Initialized
INFO - 2017-05-26 22:58:03 --> Hooks Class Initialized
DEBUG - 2017-05-26 22:58:03 --> UTF-8 Support Enabled
INFO - 2017-05-26 22:58:03 --> Utf8 Class Initialized
INFO - 2017-05-26 22:58:03 --> URI Class Initialized
INFO - 2017-05-26 22:58:03 --> Router Class Initialized
INFO - 2017-05-26 22:58:03 --> Output Class Initialized
INFO - 2017-05-26 22:58:03 --> Security Class Initialized
DEBUG - 2017-05-26 22:58:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 22:58:03 --> Input Class Initialized
INFO - 2017-05-26 22:58:03 --> Language Class Initialized
INFO - 2017-05-26 22:58:03 --> Loader Class Initialized
INFO - 2017-05-26 22:58:03 --> Helper loaded: url_helper
INFO - 2017-05-26 22:58:03 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 22:58:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 22:58:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 22:58:03 --> Controller Class Initialized
DEBUG - 2017-05-26 22:58:03 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 22:58:03 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 22:58:03 --> Model Class Initialized
INFO - 2017-05-26 22:58:03 --> Database Driver Class Initialized
DEBUG - 2017-05-26 22:58:03 --> 5 3999 17991 19995
ERROR - 2017-05-26 22:58:03 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					103,
					'GRANDE',
					'.',
					'to_clob(&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ipsum eu arcu eleifend iaculis. Fusce dolor quam, aliquam non quam quis, maximus blandit velit. Fusce eget efficitur neque, in tempus erat. Pellentesque fringilla tincidunt lectus, at auctor dui ullamcorper nec. Vivamus est est, tempus nec vulputate et, tempus ut ex. Suspendisse a sapien ac metus tincidunt mollis. Phasellus feugiat ornare mollis. Maecenas ac lacus sed nunc finibus pretium et sed urna. Donec vel orci scelerisque, mollis risus sed, accumsan nunc. Duis eleifend nibh a ligula volutpat, sit amet tristique turpis hendrerit. Pellentesque ut dictum ex. Phasellus rhoncus lorem purus, eget sodales lectus porta eget. Pellentesque libero neque, laoreet in tellus eget, dictum molestie dolor. Maecenas odio turpis, consequat nec elit at, ultricies congue turpis. Phasellus ut eros quis nunc aliquet faucibus eu sit amet est. Sed sem lorem, suscipit ullamcorper euismod vitae, tempor eu magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi id sem nec metus pretium fringilla. Maecenas pharetra vel magna a pulvinar. Phasellus tortor eros, elementum eget ligula vehicula, facilisis aliquam metus. Ut purus odio, dignissim et dictum ac, porttitor et justo. Curabitur fringilla ut augue vitae gravida. Pellentesque porta vestibulum felis sed feugiat. Cras scelerisque commodo mollis. Morbi accumsan est ut felis euismod, vitae pharetra orci ultricies. Fusce ultricies luctus dui, eu consectetur risus condimentum quis. Sed gravida nunc pretium mi pulvinar, vitae ultricies sapien ullamcorper. Sed bibendum iaculis dolor et tempor. Pellentesque ac ipsum urna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed condimentum est mauris, ut suscipit odio venenatis in. Sed turpis est, lobortis vitae arcu in, euismod tempor leo. Donec dapibus orci sit amet est dignissim, ac consequat tortor convallis. Morbi enim magna, imperdiet molestie pretium et, faucibus quis velit. Ut eu sem a ex placerat condimentum. Aliquam dapibus lectus sed accumsan faucibus. Nam ligula odio, tincidunt a varius sit amet, congue vel odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut elementum tortor at diam blandit eleifend. Sed urna nibh, auctor ut auctor quis, iaculis ac libero. Donec fringilla egestas nibh, quis pulvinar eros volutpat id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Cras dapibus viverra congue. Aenean viverra porttitor elit, vehicula rutrum nulla malesuada eget.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut et ornare lorem. Mauris ultrices lacinia sem non ullamcorper. Mauris sit amet dui a sem porttitor ornare. Quisque vel porttitor augue. Aenean eu malesuada ipsum. Donec porta a sem gravida ornare. Nunc eget lacus commodo, varius mi ac, pellentesque diam. Nunc volutpat sem in mauris accumsan, sit amet pretium massa tempus. Maecenas sit amet enim viverra, molestie felis quis, egestas ipsum. Sed ac erat feli) ||to_clob(s. Sed nec porttitor ex, non posuere tellus. Duis nisi elit, ornare in eros in, aliquet lacinia mi. Sed sed enim nec odio facilisis consequat vitae nec lectus. Ut a mi a felis condimentum placerat. Aliquam a leo sollicitudin, tempor turpis non, euismod ligula. Phasellus consectetur non leo scelerisque ultrices.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris finibus erat ac malesuada condimentum. Cras tristique lorem vitae hendrerit ultricies. Etiam vitae purus vitae ante porttitor pulvinar id ut erat. Pellentesque imperdiet facilisis nisl, sit amet eleifend felis mollis non. Phasellus fringilla, enim at cursus convallis, erat neque ultrices lacus, non mattis mi mi tristique tortor. Sed ut ullamcorper mi. Donec dictum bibendum velit, in tempor quam pellentesque et. Cras eu viverra nisi. Duis felis ipsum, condimentum quis nunc ut, consectetur mollis lacus. Ut molestie faucibus augue, at mollis magna consequat eget. In metus nibh, consectetur iaculis felis sed, sodales finibus tellus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Etiam leo lectus, rhoncus ac enim et, euismod sagittis neque. Nam luctus elit a bibendum elementum. Donec sed placerat dui. Maecenas sagittis luctus quam posuere dapibus. Cras in imperdiet metus. Curabitur quis molestie augue. Etiam aliquet libero dictum tortor placerat cursus. Maecenas vitae ex at lacus placerat tincidunt. Praesent eu ornare justo, non consectetur sem. Integer aliquet, justo vel aliquet commodo, est urna mattis eros, quis consectetur ipsum arcu a velit. Nam euismod lectus neque, in fringilla erat commodo sed. Etiam non augue sed leo consectetur ullamcorper. Duis at quam eget sapien rhoncus tristique vel nec dui. Maecenas dapibus dictum elit, vitae tempus leo vulputate sit amet. Etiam in nibh lacus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque at odio efficitur libero bibendum dignissim nec eu felis. Sed eget vulputate lacus. Fusce quis pulvinar elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam venenatis lorem vel urna tempor, id feugiat ex egestas. Curabitur ultrices nisi vitae risus sagittis sollicitudin. Donec sit amet massa vel libero blandit dictum nec vitae ipsum.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris et sem faucibus, gravida augue ut, fringilla ex. Aenean quis sapien eget magna dapibus consequat. Morbi hendrerit pharetra enim id dictum. Proin ornare sollicitudin mauris a interdum. Ut ullamcorper enim porta nisi euismod sollicitudin. Aenean aliquet euismod ex at fermentum. In ut diam commodo, consectetur tellus vitae, malesuada magna. Maecenas vitae aliquam felis. Vivamus semper eros eget lacus finibus hendrerit. Donec eu congue mauris. Phasellus et bibendum neque.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque eu accumsan neque. Nullam id ante lorem. Nam cursus mattis felis vitae suscipit. In facilisis mi vestibulum, sagittis mi eget, congue libero. Aenean eget velit pulvinar, consequat ex sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectet) ||to_clob(x sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectetur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;) ||to_clob(ur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;) ||to_clob(a!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;)',
					'51',
					'DIGI'
				)
DEBUG - 2017-05-26 22:58:03 --> DB Transaction Failure
INFO - 2017-05-26 22:58:03 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 23:00:35 --> Config Class Initialized
INFO - 2017-05-26 23:00:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:00:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:00:35 --> Utf8 Class Initialized
INFO - 2017-05-26 23:00:35 --> URI Class Initialized
DEBUG - 2017-05-26 23:00:35 --> No URI present. Default controller set.
INFO - 2017-05-26 23:00:35 --> Router Class Initialized
INFO - 2017-05-26 23:00:35 --> Output Class Initialized
INFO - 2017-05-26 23:00:35 --> Security Class Initialized
DEBUG - 2017-05-26 23:00:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:00:35 --> Input Class Initialized
INFO - 2017-05-26 23:00:35 --> Language Class Initialized
INFO - 2017-05-26 23:00:35 --> Loader Class Initialized
INFO - 2017-05-26 23:00:35 --> Helper loaded: url_helper
INFO - 2017-05-26 23:00:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:00:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:00:35 --> Controller Class Initialized
DEBUG - 2017-05-26 23:00:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:00:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:00:35 --> Final output sent to browser
DEBUG - 2017-05-26 23:00:35 --> Total execution time: 0.0029
INFO - 2017-05-26 23:00:35 --> Config Class Initialized
INFO - 2017-05-26 23:00:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:00:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:00:35 --> Utf8 Class Initialized
INFO - 2017-05-26 23:00:35 --> URI Class Initialized
INFO - 2017-05-26 23:00:35 --> Router Class Initialized
INFO - 2017-05-26 23:00:35 --> Output Class Initialized
INFO - 2017-05-26 23:00:35 --> Security Class Initialized
DEBUG - 2017-05-26 23:00:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:00:35 --> Input Class Initialized
INFO - 2017-05-26 23:00:35 --> Language Class Initialized
INFO - 2017-05-26 23:00:35 --> Loader Class Initialized
INFO - 2017-05-26 23:00:35 --> Helper loaded: url_helper
INFO - 2017-05-26 23:00:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:00:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:00:35 --> Controller Class Initialized
DEBUG - 2017-05-26 23:00:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:00:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 23:00:35 --> Model Class Initialized
INFO - 2017-05-26 23:00:35 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:00:35 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 23:00:35 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:00:35 --> Final output sent to browser
DEBUG - 2017-05-26 23:00:35 --> Total execution time: 0.0870
INFO - 2017-05-26 23:00:39 --> Config Class Initialized
INFO - 2017-05-26 23:00:39 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:00:39 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:00:39 --> Utf8 Class Initialized
INFO - 2017-05-26 23:00:39 --> URI Class Initialized
INFO - 2017-05-26 23:00:39 --> Router Class Initialized
INFO - 2017-05-26 23:00:39 --> Output Class Initialized
INFO - 2017-05-26 23:00:39 --> Security Class Initialized
DEBUG - 2017-05-26 23:00:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:00:39 --> Input Class Initialized
INFO - 2017-05-26 23:00:39 --> Language Class Initialized
INFO - 2017-05-26 23:00:39 --> Loader Class Initialized
INFO - 2017-05-26 23:00:39 --> Helper loaded: url_helper
INFO - 2017-05-26 23:00:39 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:00:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:00:39 --> Controller Class Initialized
DEBUG - 2017-05-26 23:00:39 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:00:39 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 23:00:39 --> Model Class Initialized
INFO - 2017-05-26 23:00:39 --> Database Driver Class Initialized
INFO - 2017-05-26 23:00:40 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:00:40 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 23:00:40 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:00:40 --> Final output sent to browser
DEBUG - 2017-05-26 23:00:40 --> Total execution time: 0.1288
INFO - 2017-05-26 23:00:44 --> Config Class Initialized
INFO - 2017-05-26 23:00:44 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:00:44 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:00:44 --> Utf8 Class Initialized
INFO - 2017-05-26 23:00:44 --> URI Class Initialized
INFO - 2017-05-26 23:00:44 --> Router Class Initialized
INFO - 2017-05-26 23:00:44 --> Output Class Initialized
INFO - 2017-05-26 23:00:44 --> Security Class Initialized
DEBUG - 2017-05-26 23:00:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:00:44 --> Input Class Initialized
INFO - 2017-05-26 23:00:44 --> Language Class Initialized
INFO - 2017-05-26 23:00:44 --> Loader Class Initialized
INFO - 2017-05-26 23:00:44 --> Helper loaded: url_helper
INFO - 2017-05-26 23:00:44 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:00:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:00:44 --> Controller Class Initialized
DEBUG - 2017-05-26 23:00:44 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:00:44 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 23:00:44 --> Model Class Initialized
INFO - 2017-05-26 23:00:44 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:00:44 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:00:44 --> Final output sent to browser
DEBUG - 2017-05-26 23:00:44 --> Total execution time: 0.0554
INFO - 2017-05-26 23:01:14 --> Config Class Initialized
INFO - 2017-05-26 23:01:14 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:01:14 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:01:14 --> Utf8 Class Initialized
INFO - 2017-05-26 23:01:14 --> URI Class Initialized
INFO - 2017-05-26 23:01:14 --> Router Class Initialized
INFO - 2017-05-26 23:01:14 --> Output Class Initialized
INFO - 2017-05-26 23:01:14 --> Security Class Initialized
DEBUG - 2017-05-26 23:01:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:01:14 --> Input Class Initialized
INFO - 2017-05-26 23:01:14 --> Language Class Initialized
INFO - 2017-05-26 23:01:14 --> Loader Class Initialized
INFO - 2017-05-26 23:01:14 --> Helper loaded: url_helper
INFO - 2017-05-26 23:01:14 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:01:14 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:01:14 --> Controller Class Initialized
DEBUG - 2017-05-26 23:01:14 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:01:14 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 23:01:14 --> Model Class Initialized
INFO - 2017-05-26 23:01:14 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:01:14 --> 5 3999 17991 19995
ERROR - 2017-05-26 23:01:14 --> Query error: ORA-00917: missing comma - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'GRANDE',
					'.',
					'to_clob('&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ipsum eu arcu eleifend iaculis. Fusce dolor quam, aliquam non quam quis, maximus blandit velit. Fusce eget efficitur neque, in tempus erat. Pellentesque fringilla tincidunt lectus, at auctor dui ullamcorper nec. Vivamus est est, tempus nec vulputate et, tempus ut ex. Suspendisse a sapien ac metus tincidunt mollis. Phasellus feugiat ornare mollis. Maecenas ac lacus sed nunc finibus pretium et sed urna. Donec vel orci scelerisque, mollis risus sed, accumsan nunc. Duis eleifend nibh a ligula volutpat, sit amet tristique turpis hendrerit. Pellentesque ut dictum ex. Phasellus rhoncus lorem purus, eget sodales lectus porta eget. Pellentesque libero neque, laoreet in tellus eget, dictum molestie dolor. Maecenas odio turpis, consequat nec elit at, ultricies congue turpis. Phasellus ut eros quis nunc aliquet faucibus eu sit amet est. Sed sem lorem, suscipit ullamcorper euismod vitae, tempor eu magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi id sem nec metus pretium fringilla. Maecenas pharetra vel magna a pulvinar. Phasellus tortor eros, elementum eget ligula vehicula, facilisis aliquam metus. Ut purus odio, dignissim et dictum ac, porttitor et justo. Curabitur fringilla ut augue vitae gravida. Pellentesque porta vestibulum felis sed feugiat. Cras scelerisque commodo mollis. Morbi accumsan est ut felis euismod, vitae pharetra orci ultricies. Fusce ultricies luctus dui, eu consectetur risus condimentum quis. Sed gravida nunc pretium mi pulvinar, vitae ultricies sapien ullamcorper. Sed bibendum iaculis dolor et tempor. Pellentesque ac ipsum urna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed condimentum est mauris, ut suscipit odio venenatis in. Sed turpis est, lobortis vitae arcu in, euismod tempor leo. Donec dapibus orci sit amet est dignissim, ac consequat tortor convallis. Morbi enim magna, imperdiet molestie pretium et, faucibus quis velit. Ut eu sem a ex placerat condimentum. Aliquam dapibus lectus sed accumsan faucibus. Nam ligula odio, tincidunt a varius sit amet, congue vel odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut elementum tortor at diam blandit eleifend. Sed urna nibh, auctor ut auctor quis, iaculis ac libero. Donec fringilla egestas nibh, quis pulvinar eros volutpat id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Cras dapibus viverra congue. Aenean viverra porttitor elit, vehicula rutrum nulla malesuada eget.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Ut et ornare lorem. Mauris ultrices lacinia sem non ullamcorper. Mauris sit amet dui a sem porttitor ornare. Quisque vel porttitor augue. Aenean eu malesuada ipsum. Donec porta a sem gravida ornare. Nunc eget lacus commodo, varius mi ac, pellentesque diam. Nunc volutpat sem in mauris accumsan, sit amet pretium massa tempus. Maecenas sit amet enim viverra, molestie felis quis, egestas ipsum. Sed ac erat feli') || to_clob('s. Sed nec porttitor ex, non posuere tellus. Duis nisi elit, ornare in eros in, aliquet lacinia mi. Sed sed enim nec odio facilisis consequat vitae nec lectus. Ut a mi a felis condimentum placerat. Aliquam a leo sollicitudin, tempor turpis non, euismod ligula. Phasellus consectetur non leo scelerisque ultrices.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris finibus erat ac malesuada condimentum. Cras tristique lorem vitae hendrerit ultricies. Etiam vitae purus vitae ante porttitor pulvinar id ut erat. Pellentesque imperdiet facilisis nisl, sit amet eleifend felis mollis non. Phasellus fringilla, enim at cursus convallis, erat neque ultrices lacus, non mattis mi mi tristique tortor. Sed ut ullamcorper mi. Donec dictum bibendum velit, in tempor quam pellentesque et. Cras eu viverra nisi. Duis felis ipsum, condimentum quis nunc ut, consectetur mollis lacus. Ut molestie faucibus augue, at mollis magna consequat eget. In metus nibh, consectetur iaculis felis sed, sodales finibus tellus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Etiam leo lectus, rhoncus ac enim et, euismod sagittis neque. Nam luctus elit a bibendum elementum. Donec sed placerat dui. Maecenas sagittis luctus quam posuere dapibus. Cras in imperdiet metus. Curabitur quis molestie augue. Etiam aliquet libero dictum tortor placerat cursus. Maecenas vitae ex at lacus placerat tincidunt. Praesent eu ornare justo, non consectetur sem. Integer aliquet, justo vel aliquet commodo, est urna mattis eros, quis consectetur ipsum arcu a velit. Nam euismod lectus neque, in fringilla erat commodo sed. Etiam non augue sed leo consectetur ullamcorper. Duis at quam eget sapien rhoncus tristique vel nec dui. Maecenas dapibus dictum elit, vitae tempus leo vulputate sit amet. Etiam in nibh lacus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque at odio efficitur libero bibendum dignissim nec eu felis. Sed eget vulputate lacus. Fusce quis pulvinar elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam venenatis lorem vel urna tempor, id feugiat ex egestas. Curabitur ultrices nisi vitae risus sagittis sollicitudin. Donec sit amet massa vel libero blandit dictum nec vitae ipsum.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Mauris et sem faucibus, gravida augue ut, fringilla ex. Aenean quis sapien eget magna dapibus consequat. Morbi hendrerit pharetra enim id dictum. Proin ornare sollicitudin mauris a interdum. Ut ullamcorper enim porta nisi euismod sollicitudin. Aenean aliquet euismod ex at fermentum. In ut diam commodo, consectetur tellus vitae, malesuada magna. Maecenas vitae aliquam felis. Vivamus semper eros eget lacus finibus hendrerit. Donec eu congue mauris. Phasellus et bibendum neque.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Quisque eu accumsan neque. Nullam id ante lorem. Nam cursus mattis felis vitae suscipit. In facilisis mi vestibulum, sagittis mi eget, congue libero. Aenean eget velit pulvinar, consequat ex sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectet') || to_clob('x sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectetur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;') || to_clob('ur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;') || to_clob('a!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: courier new, courier, monospace;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;')',
					'51',
					'DIGI'
				)
DEBUG - 2017-05-26 23:01:14 --> DB Transaction Failure
INFO - 2017-05-26 23:01:14 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 23:02:51 --> Config Class Initialized
INFO - 2017-05-26 23:02:51 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:02:51 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:02:51 --> Utf8 Class Initialized
INFO - 2017-05-26 23:02:51 --> URI Class Initialized
DEBUG - 2017-05-26 23:02:51 --> No URI present. Default controller set.
INFO - 2017-05-26 23:02:51 --> Router Class Initialized
INFO - 2017-05-26 23:02:51 --> Output Class Initialized
INFO - 2017-05-26 23:02:51 --> Security Class Initialized
DEBUG - 2017-05-26 23:02:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:02:51 --> Input Class Initialized
INFO - 2017-05-26 23:02:51 --> Language Class Initialized
INFO - 2017-05-26 23:02:51 --> Loader Class Initialized
INFO - 2017-05-26 23:02:51 --> Helper loaded: url_helper
INFO - 2017-05-26 23:02:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:02:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:02:51 --> Controller Class Initialized
DEBUG - 2017-05-26 23:02:51 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:02:51 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:02:51 --> Final output sent to browser
DEBUG - 2017-05-26 23:02:51 --> Total execution time: 0.0089
INFO - 2017-05-26 23:02:51 --> Config Class Initialized
INFO - 2017-05-26 23:02:51 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:02:51 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:02:51 --> Utf8 Class Initialized
INFO - 2017-05-26 23:02:51 --> URI Class Initialized
INFO - 2017-05-26 23:02:51 --> Router Class Initialized
INFO - 2017-05-26 23:02:51 --> Output Class Initialized
INFO - 2017-05-26 23:02:51 --> Security Class Initialized
DEBUG - 2017-05-26 23:02:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:02:51 --> Input Class Initialized
INFO - 2017-05-26 23:02:51 --> Language Class Initialized
INFO - 2017-05-26 23:02:51 --> Loader Class Initialized
INFO - 2017-05-26 23:02:51 --> Helper loaded: url_helper
INFO - 2017-05-26 23:02:51 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:02:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:02:51 --> Controller Class Initialized
DEBUG - 2017-05-26 23:02:51 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:02:51 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 23:02:51 --> Model Class Initialized
INFO - 2017-05-26 23:02:51 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:02:51 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 23:02:51 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:02:51 --> Final output sent to browser
DEBUG - 2017-05-26 23:02:51 --> Total execution time: 0.0896
INFO - 2017-05-26 23:02:54 --> Config Class Initialized
INFO - 2017-05-26 23:02:54 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:02:54 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:02:54 --> Utf8 Class Initialized
INFO - 2017-05-26 23:02:54 --> URI Class Initialized
INFO - 2017-05-26 23:02:54 --> Router Class Initialized
INFO - 2017-05-26 23:02:54 --> Output Class Initialized
INFO - 2017-05-26 23:02:54 --> Security Class Initialized
DEBUG - 2017-05-26 23:02:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:02:54 --> Input Class Initialized
INFO - 2017-05-26 23:02:54 --> Language Class Initialized
INFO - 2017-05-26 23:02:54 --> Loader Class Initialized
INFO - 2017-05-26 23:02:54 --> Helper loaded: url_helper
INFO - 2017-05-26 23:02:54 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:02:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:02:54 --> Controller Class Initialized
DEBUG - 2017-05-26 23:02:54 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:02:54 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 23:02:54 --> Model Class Initialized
INFO - 2017-05-26 23:02:54 --> Database Driver Class Initialized
INFO - 2017-05-26 23:02:54 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:02:54 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 23:02:54 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:02:54 --> Final output sent to browser
DEBUG - 2017-05-26 23:02:54 --> Total execution time: 0.1197
INFO - 2017-05-26 23:02:59 --> Config Class Initialized
INFO - 2017-05-26 23:02:59 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:02:59 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:02:59 --> Utf8 Class Initialized
INFO - 2017-05-26 23:02:59 --> URI Class Initialized
INFO - 2017-05-26 23:02:59 --> Router Class Initialized
INFO - 2017-05-26 23:02:59 --> Output Class Initialized
INFO - 2017-05-26 23:02:59 --> Security Class Initialized
DEBUG - 2017-05-26 23:02:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:02:59 --> Input Class Initialized
INFO - 2017-05-26 23:02:59 --> Language Class Initialized
INFO - 2017-05-26 23:02:59 --> Loader Class Initialized
INFO - 2017-05-26 23:02:59 --> Helper loaded: url_helper
INFO - 2017-05-26 23:02:59 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:02:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:02:59 --> Controller Class Initialized
DEBUG - 2017-05-26 23:02:59 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:02:59 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 23:02:59 --> Model Class Initialized
INFO - 2017-05-26 23:02:59 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:02:59 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:02:59 --> Final output sent to browser
DEBUG - 2017-05-26 23:02:59 --> Total execution time: 0.0967
INFO - 2017-05-26 23:03:31 --> Config Class Initialized
INFO - 2017-05-26 23:03:31 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:03:31 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:03:31 --> Utf8 Class Initialized
INFO - 2017-05-26 23:03:31 --> URI Class Initialized
INFO - 2017-05-26 23:03:31 --> Router Class Initialized
INFO - 2017-05-26 23:03:31 --> Output Class Initialized
INFO - 2017-05-26 23:03:31 --> Security Class Initialized
DEBUG - 2017-05-26 23:03:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:03:31 --> Input Class Initialized
INFO - 2017-05-26 23:03:31 --> Language Class Initialized
INFO - 2017-05-26 23:03:31 --> Loader Class Initialized
INFO - 2017-05-26 23:03:31 --> Helper loaded: url_helper
INFO - 2017-05-26 23:03:31 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:03:31 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:03:31 --> Controller Class Initialized
DEBUG - 2017-05-26 23:03:31 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:03:31 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 23:03:31 --> Model Class Initialized
INFO - 2017-05-26 23:03:31 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:03:31 --> 5 3999 18791 19995
ERROR - 2017-05-26 23:03:31 --> Query error: ORA-01704: string literal too long - Invalid query: insert into laudo (
					codlau,
					codexa,
					titulo,
					texto,
					textoh,
					codrea,
					apeluser
				) values (
					SEQ_LAUDO.NEXTVAL,
					87,
					'GRANDE',
					'.',
					to_clob('&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque ipsum eu arcu eleifend iaculis. Fusce dolor quam, aliquam non quam quis, maximus blandit velit. Fusce eget efficitur neque, in tempus erat. Pellentesque fringilla tincidunt lectus, at auctor dui ullamcorper nec. Vivamus est est, tempus nec vulputate et, tempus ut ex. Suspendisse a sapien ac metus tincidunt mollis. Phasellus feugiat ornare mollis. Maecenas ac lacus sed nunc finibus pretium et sed urna. Donec vel orci scelerisque, mollis risus sed, accumsan nunc. Duis eleifend nibh a ligula volutpat, sit amet tristique turpis hendrerit. Pellentesque ut dictum ex. Phasellus rhoncus lorem purus, eget sodales lectus porta eget. Pellentesque libero neque, laoreet in tellus eget, dictum molestie dolor. Maecenas odio turpis, consequat nec elit at, ultricies congue turpis. Phasellus ut eros quis nunc aliquet faucibus eu sit amet est. Sed sem lorem, suscipit ullamcorper euismod vitae, tempor eu magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Morbi id sem nec metus pretium fringilla. Maecenas pharetra vel magna a pulvinar. Phasellus tortor eros, elementum eget ligula vehicula, facilisis aliquam metus. Ut purus odio, dignissim et dictum ac, porttitor et justo. Curabitur fringilla ut augue vitae gravida. Pellentesque porta vestibulum felis sed feugiat. Cras scelerisque commodo mollis. Morbi accumsan est ut felis euismod, vitae pharetra orci ultricies. Fusce ultricies luctus dui, eu consectetur risus condimentum quis. Sed gravida nunc pretium mi pulvinar, vitae ultricies sapien ullamcorper. Sed bibendum iaculis dolor et tempor. Pellentesque ac ipsum urna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Sed condimentum est mauris, ut suscipit odio venenatis in. Sed turpis est, lobortis vitae arcu in, euismod tempor leo. Donec dapibus orci sit amet est dignissim, ac consequat tortor convallis. Morbi enim magna, imperdiet molestie pretium et, faucibus quis velit. Ut eu sem a ex placerat condimentum. Aliquam dapibus lectus sed accumsan faucibus. Nam ligula odio, tincidunt a varius sit amet, congue vel odio.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Ut elementum tortor at diam blandit eleifend. Sed urna nibh, auctor ut auctor quis, iaculis ac libero. Donec fringilla egestas nibh, quis pulvinar eros volutpat id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Cras dapibus viverra congue. Aenean viverra porttitor elit, vehicula rutrum nulla malesuada eget.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Ut et ornare lorem. Mauris ultrices lacinia sem non ullamcorper. Mauris sit amet dui a sem porttitor ornare. Quisque vel porttitor augue. Aenean eu malesuada ipsum. Donec porta a sem gravida ornare. Nunc eget l') || to_clob('acus commodo, varius mi ac, pellentesque diam. Nunc volutpat sem in mauris accumsan, sit amet pretium massa tempus. Maecenas sit amet enim viverra, molestie felis quis, egestas ipsum. Sed ac erat felis. Sed nec porttitor ex, non posuere tellus. Duis nisi elit, ornare in eros in, aliquet lacinia mi. Sed sed enim nec odio facilisis consequat vitae nec lectus. Ut a mi a felis condimentum placerat. Aliquam a leo sollicitudin, tempor turpis non, euismod ligula. Phasellus consectetur non leo scelerisque ultrices.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Mauris finibus erat ac malesuada condimentum. Cras tristique lorem vitae hendrerit ultricies. Etiam vitae purus vitae ante porttitor pulvinar id ut erat. Pellentesque imperdiet facilisis nisl, sit amet eleifend felis mollis non. Phasellus fringilla, enim at cursus convallis, erat neque ultrices lacus, non mattis mi mi tristique tortor. Sed ut ullamcorper mi. Donec dictum bibendum velit, in tempor quam pellentesque et. Cras eu viverra nisi. Duis felis ipsum, condimentum quis nunc ut, consectetur mollis lacus. Ut molestie faucibus augue, at mollis magna consequat eget. In metus nibh, consectetur iaculis felis sed, sodales finibus tellus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Etiam leo lectus, rhoncus ac enim et, euismod sagittis neque. Nam luctus elit a bibendum elementum. Donec sed placerat dui. Maecenas sagittis luctus quam posuere dapibus. Cras in imperdiet metus. Curabitur quis molestie augue. Etiam aliquet libero dictum tortor placerat cursus. Maecenas vitae ex at lacus placerat tincidunt. Praesent eu ornare justo, non consectetur sem. Integer aliquet, justo vel aliquet commodo, est urna mattis eros, quis consectetur ipsum arcu a velit. Nam euismod lectus neque, in fringilla erat commodo sed. Etiam non augue sed leo consectetur ullamcorper. Duis at quam eget sapien rhoncus tristique vel nec dui. Maecenas dapibus dictum elit, vitae tempus leo vulputate sit amet. Etiam in nibh lacus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Quisque at odio efficitur libero bibendum dignissim nec eu felis. Sed eget vulputate lacus. Fusce quis pulvinar elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam venenatis lorem vel urna tempor, id feugiat ex egestas. Curabitur ultrices nisi vitae risus sagittis sollicitudin. Donec sit amet massa vel libero blandit dictum nec vitae ipsum.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Mauris et sem faucibus, gravida augue ut, fringilla ex. Aenean quis sapien eget magna dapibus consequat. Morbi hendrerit pharetra enim id dictum. Proin ornare sollicitudin mauris a interdum. Ut ullamcorper enim porta nisi euismod sollicitudin. Aenean aliquet euismod ex at fermentum. In ut diam commodo, consectetur tellus vitae, malesuada magna. Maecenas vitae aliquam felis. Vivamus semper eros eget lacus finibus hendrerit. Donec eu congue mauris. Phasellus et bibendum neque.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Quisque eu accumsan neque. Nullam id ante lorem. Nam cursus mattis felis vitae suscipit. In facilisis mi vestibulum, sagittis mi eget, congue libero. Aenean eget velit pulvinar, consequat ex sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;') || to_clob('justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Quisque eu accumsan neque. Nullam id ante lorem. Nam cursus mattis felis vitae suscipit. In facilisis mi vestibulum, sagittis mi eget, congue libero. Aenean eget velit pulvinar, consequat ex sit amet, pretium magna. Nam sodales ipsum nulla, sit amet ultrices purus pellentesque ut. Phasellus luctus euismod dui, ut congue libero suscipit non. Integer tempor sollicitudin orci, eu bibendum leo placerat quis. Aliquam id ex malesuada, maximus magna sed, sollicitudin turpis. Donec hendrerit erat ante, ac ultricies dolor dignissim vel. Curabitur vel iaculis sem, sed dignissim ante. Donec vitae viverra risus. Maecenas lacinia viverra orci, ut sagittis leo tincidunt ac. Quisque vitae interdum mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;In efficitur posuere vulputate. Nullam ut sapien molestie, pharetra tellus sit amet, vehicula ligula. Nullam pellentesque placerat dui, ac laoreet eros mattis vitae. Mauris tristique, risus quis posuere placerat, nulla nisl varius diam, at fermentum enim diam vitae nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla ipsum ipsum, ultrices condimentum pharetra sit amet, gravida nec odio. Maecenas sollicitudin sapien eu quam ullamcorper, sed tristique magna volutpat. Maecenas malesuada tortor ut diam convallis eleifend. Integer bibendum venenatis enim. Suspendisse tempor, sem eget maximus ultricies, nisi felis porta ligula, id cursus eros sapien a lacus. Sed pulvinar cursus nisl quis tempor. Integer quam risus, malesuada ac mi at, blandit gravida magna. Duis ut feugiat nisi, nec varius metus. Aliquam erat volutpat. Nulla facilisi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Morbi augue massa, bibendum sed volutpat id, porttitor eget leo. Pellentesque quis orci ac nisl posuere sodales. Aliquam ornare urna mattis ipsum vulputate pellentesque. Integer ipsum neque, tristique sed cursus vel, porta non quam. Mauris ac orci hendrerit, ullamcorper justo sit amet, condimentum risus. Suspendisse potenti. Curabitur maximus vel sem vel varius. Ut sed dolor sed diam ullamcorper pulvinar quis eget felis. In eget odio magna.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Sed vitae tellus non tellus porta auctor. Duis varius, tortor vel sagittis posuere, tortor neque pulvinar diam, pharetra aliquet sem urna eu massa. Nullam sollicitudin, velit interdum mattis ultrices, ex urna posuere mauris, vulputate lacinia lacus lorem quis mi. Nullam sit amet vehicula justo, id sodales nisl. Vivamus dui leo, vestibulum et elit in, pellentesque facilisis velit. Quisque eget consequat leo. Curabitur faucibus lacus vitae ipsum semper ultrices. Etiam vitae leo quis purus congue ornare. Integer scelerisque quis velit sollicitudin rhoncus. Vestibulum consectetur nulla interdum ex vestibulum, vitae tempor leo dignissim. Aenean elementum laoreet nibh, quis tempor nunc cursus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed aliquam mi.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectetur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;') || to_clob('span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Phasellus odio odio, porttitor vitae tellus vitae, blandit luctus tellus. Quisque vitae tincidunt tortor. Praesent ultricies augue diam, in malesuada risus malesuada sed. Nam sollicitudin augue neque, sed pellentesque ante pellentesque at. Cras posuere neque mauris, eu ornare ante facilisis at. Aenean enim urna, posuere et laoreet non, iaculis ac est. Sed sed consectetur neque. Nunc volutpat dui et nisi ullamcorper, sit amet sollicitudin nibh dignissim. Curabitur non ultrices velit. Pellentesque molestie, velit ac consectetur feugiat, tortor tellus condimentum nisi, ac varius sem purus ut arcu. Vivamus tristique efficitur augue eget accumsan. Praesent gravida euismod neque, et tempus nisl volutpat vitae.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Sed in elementum enim. Nunc quis lacinia massa. Nunc imperdiet turpis in tempus rhoncus. Donec ut felis ultricies eros molestie fermentum quis sit amet nisi. Quisque tincidunt felis vel justo tempor sollicitudin. Sed efficitur at augue id efficitur. Pellentesque tempus finibus odio vitae congue. Ut vitae magna vel est vulputate semper ut euismod lorem. Nulla vulputate, turpis id mollis tincidunt, nulla sem venenatis lectus, volutpat pellentesque ante massa id tellus. Proin interdum, dolor quis aliquet molestie, metus odio tristique lacus, non mattis sem mauris vel ante. In et nisi ex.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Suspendisse blandit hendrerit massa, ut placerat libero dignissim id. Maecenas ut tortor at quam tempus semper ut vel sem. Fusce eu neque in justo mollis porta vel ac dui. Integer venenatis turpis libero, et facilisis sapien mattis id. Aenean euismod mollis sapien, molestie pharetra metus pretium quis. Sed sit amet arcu scelerisque, imperdiet diam non, porttitor massa. Etiam pulvinar nisi ut magna dignissim, luctus viverra augue molestie.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Pellentesque turpis augue, pharetra et erat sit amet, fermentum maximus lectus. Cras sem neque, luctus sit amet interdum eu, ornare at dui. Nunc blandit sapien vitae mollis porta. Vestibulum id diam vitae tellus ullamcorper commodo. Donec porttitor sollicitudin magna eu mollis. Donec ut ornare dolor, at varius dolor. Suspendisse sed molestie nisl, eget fringilla mi. Donec condimentum eu felis vitae lacinia. Etiam et diam rutrum, congue elit et, dictum urna. Sed maximus diam sed nisi vehicula, et molestie velit pellentesque. Cras viverra iaculis risus, et posuere nulla molestie ac. Donec interdum maximus volutpat. Nulla tortor metus, faucibus et lacus quis, dictum egestas elit. In consectetur lacus enim.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Nunc nec libero orci. Curabitur tempor rutrum libero sit amet rutrum. Etiam turpis lectus, sollicitudin nec velit sed, accumsan porttitor lorem. Duis molestie risus vitae eros pretium tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;') || to_clob('tincidunt. Sed ut urna non tellus ornare condimentum nec quis neque. Aenean euismod dui ac ante molestie cursus. Suspendisse potenti. Cras ullamcorper hendrerit accumsan. Proin mattis felis nec metus sollicitudin, ac porttitor felis facilisis. Cras a magna in turpis ullamcorper vehicula. Nullam lobortis, dolor vitae tempus convallis, tellus justo tincidunt ante, ut sagittis nisl magna non dui. Morbi nec neque eget nisi interdum viverra eget vel diam. Donec sed convallis ligula. Proin commodo justo eget tellus gravida commodo. Integer ultricies tincidunt porttitor. Nam iaculis neque cursus ligula hendrerit, eget lacinia massa sodales.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Aliquam sollicitudin lacinia vehicula. Mauris ac imperdiet dui. Mauris sed ex non est cursus commodo sed quis enim. Sed in velit non sapien consectetur accumsan non at libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in sem eu velit dignissim congue. In consequat aliquet massa, id gravida mi ultricies et. Maecenas tincidunt felis laoreet, accumsan mauris ac, interdum risus. Morbi ut ante mauris. Vivamus in turpis sit amet velit tristique elementum. Suspendisse eget velit massa. In posuere in turpis a sodales. Etiam ut nisl risus. Aenean felis massa, interdum ut nisl a, mollis posuere diam. Quisque pellentesque neque id velit iaculis, eu auctor libero auctor. Etiam sit amet venenatis turpis, ut tempor purus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=!aspa!text-align: justify;!aspa!&gt;&lt;span style=!aspa!font-style: italic; font-size: 10pt;!aspa!&gt;&lt;span style=!aspa!font-weight: bold;!aspa!&gt;&lt;span style=!aspa!font-family: trebuchet ms, geneva, sans-serif;!aspa!&gt;Curabitur eget lacus elit. Donec eget nisi metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent blandit porttitor nibh. Proin placerat consequat nisl non laoreet. Donec tristique mauris in laoreet dignissim. Vivamus sit amet luctus tellus. Maecenas scelerisque, tellus vel rutrum blandit, purus urna scelerisque ante, eu molestie libero leo a odio. Curabitur ullamcorper non neque at tincidunt. Duis id malesuada diam. Nam ullamcorper eros ut leo iaculis tincidunt. Maecenas viverra neque non turpis pharetra viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris mi, eleifend non erat a, consequat rutrum arcu. Donec tortor lectus, posuere non lorem eget, semper rhoncus metus.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;'),
					'69',
					'DIGI'
				)
DEBUG - 2017-05-26 23:03:31 --> DB Transaction Failure
INFO - 2017-05-26 23:03:31 --> Language file loaded: language/english/db_lang.php
INFO - 2017-05-26 23:15:02 --> Config Class Initialized
INFO - 2017-05-26 23:15:02 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:02 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:02 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:02 --> URI Class Initialized
DEBUG - 2017-05-26 23:15:02 --> No URI present. Default controller set.
INFO - 2017-05-26 23:15:02 --> Router Class Initialized
INFO - 2017-05-26 23:15:02 --> Output Class Initialized
INFO - 2017-05-26 23:15:02 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:02 --> Input Class Initialized
INFO - 2017-05-26 23:15:02 --> Language Class Initialized
INFO - 2017-05-26 23:15:02 --> Loader Class Initialized
INFO - 2017-05-26 23:15:02 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:02 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:02 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:02 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/]
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/main/Index.php
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:15:02 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:02 --> Total execution time: 0.0037
INFO - 2017-05-26 23:15:02 --> Config Class Initialized
INFO - 2017-05-26 23:15:02 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:02 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:02 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:02 --> URI Class Initialized
INFO - 2017-05-26 23:15:02 --> Router Class Initialized
INFO - 2017-05-26 23:15:02 --> Output Class Initialized
INFO - 2017-05-26 23:15:02 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:02 --> Input Class Initialized
INFO - 2017-05-26 23:15:02 --> Language Class Initialized
INFO - 2017-05-26 23:15:02 --> Loader Class Initialized
INFO - 2017-05-26 23:15:02 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:02 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:02 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:02 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:02 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:02 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/FluxoDigitacao]
INFO - 2017-05-26 23:15:02 --> Model Class Initialized
INFO - 2017-05-26 23:15:02 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:15:02 --> SELECT * FROM
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
							and c.datahora >= to_date('26/12/2016', 'DD/MM/YYYY HH24:MI:SS') and to_date( c.datahora, 'DD/MM/YYYY' ) <= to_date('26/05/2017', 'DD/MM/YYYY')
				   order by c.datahora desc
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/laudo/FluxoDigitacaoIndex.php
INFO - 2017-05-26 23:15:02 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:15:02 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:02 --> Total execution time: 0.0811
INFO - 2017-05-26 23:15:06 --> Config Class Initialized
INFO - 2017-05-26 23:15:06 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:06 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:06 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:06 --> URI Class Initialized
INFO - 2017-05-26 23:15:06 --> Router Class Initialized
INFO - 2017-05-26 23:15:06 --> Output Class Initialized
INFO - 2017-05-26 23:15:06 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:06 --> Input Class Initialized
INFO - 2017-05-26 23:15:06 --> Language Class Initialized
INFO - 2017-05-26 23:15:06 --> Loader Class Initialized
INFO - 2017-05-26 23:15:06 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:06 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:06 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:06 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:06 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:06 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao]
INFO - 2017-05-26 23:15:06 --> Model Class Initialized
INFO - 2017-05-26 23:15:06 --> Database Driver Class Initialized
INFO - 2017-05-26 23:15:06 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:15:06 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 23:15:06 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:15:06 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:06 --> Total execution time: 0.1342
INFO - 2017-05-26 23:15:11 --> Config Class Initialized
INFO - 2017-05-26 23:15:11 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:11 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:11 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:11 --> URI Class Initialized
INFO - 2017-05-26 23:15:11 --> Router Class Initialized
INFO - 2017-05-26 23:15:11 --> Output Class Initialized
INFO - 2017-05-26 23:15:11 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:11 --> Input Class Initialized
INFO - 2017-05-26 23:15:11 --> Language Class Initialized
INFO - 2017-05-26 23:15:11 --> Loader Class Initialized
INFO - 2017-05-26 23:15:11 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:11 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:11 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:11 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:11 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:11 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/buscaMain]
INFO - 2017-05-26 23:15:11 --> Model Class Initialized
INFO - 2017-05-26 23:15:11 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:15:11 --> SELECT * FROM
						(
							SELECT a.*, rownum r__
							FROM
								(
									select 	Codexa,CBHPM,TUSS,Nome
							
				from 		Exame
				where		1=1
							 and Ativo = 'S'  and Nome like '%' 
				order by	Codexa 
								) a
							WHERE rownum < ((1 * 10) + 1 )
						)
					WHERE r__ >= (((1-1) * 10) + 1)
INFO - 2017-05-26 23:15:11 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:11 --> Total execution time: 0.0755
INFO - 2017-05-26 23:15:35 --> Config Class Initialized
INFO - 2017-05-26 23:15:35 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:35 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:35 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:35 --> URI Class Initialized
INFO - 2017-05-26 23:15:35 --> Router Class Initialized
INFO - 2017-05-26 23:15:35 --> Output Class Initialized
INFO - 2017-05-26 23:15:35 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:35 --> Input Class Initialized
INFO - 2017-05-26 23:15:35 --> Language Class Initialized
INFO - 2017-05-26 23:15:35 --> Loader Class Initialized
INFO - 2017-05-26 23:15:35 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:35 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:35 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:35 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:35 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/]
INFO - 2017-05-26 23:15:35 --> Model Class Initialized
INFO - 2017-05-26 23:15:35 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:15:36 --> 5 3999 17991 19995
INFO - 2017-05-26 23:15:36 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:15:36 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 23:15:36 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:15:36 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:36 --> Total execution time: 0.1937
INFO - 2017-05-26 23:15:36 --> Config Class Initialized
INFO - 2017-05-26 23:15:36 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:36 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:36 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:36 --> URI Class Initialized
INFO - 2017-05-26 23:15:36 --> Router Class Initialized
INFO - 2017-05-26 23:15:36 --> Output Class Initialized
INFO - 2017-05-26 23:15:36 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:36 --> Input Class Initialized
INFO - 2017-05-26 23:15:36 --> Language Class Initialized
INFO - 2017-05-26 23:15:36 --> Loader Class Initialized
INFO - 2017-05-26 23:15:36 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:36 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:36 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:36 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:36 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:36 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 23:15:36 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:36 --> Total execution time: 0.0048
INFO - 2017-05-26 23:15:47 --> Config Class Initialized
INFO - 2017-05-26 23:15:47 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:47 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:47 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:47 --> URI Class Initialized
INFO - 2017-05-26 23:15:47 --> Router Class Initialized
INFO - 2017-05-26 23:15:47 --> Output Class Initialized
INFO - 2017-05-26 23:15:47 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:47 --> Input Class Initialized
INFO - 2017-05-26 23:15:47 --> Language Class Initialized
INFO - 2017-05-26 23:15:47 --> Loader Class Initialized
INFO - 2017-05-26 23:15:47 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:47 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:47 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:47 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:47 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/listarTextoPadrao/]
INFO - 2017-05-26 23:15:47 --> Model Class Initialized
INFO - 2017-05-26 23:15:47 --> Database Driver Class Initialized
INFO - 2017-05-26 23:15:47 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:47 --> Total execution time: 0.0547
INFO - 2017-05-26 23:15:48 --> Config Class Initialized
INFO - 2017-05-26 23:15:48 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:15:48 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:15:48 --> Utf8 Class Initialized
INFO - 2017-05-26 23:15:48 --> URI Class Initialized
INFO - 2017-05-26 23:15:48 --> Router Class Initialized
INFO - 2017-05-26 23:15:48 --> Output Class Initialized
INFO - 2017-05-26 23:15:48 --> Security Class Initialized
DEBUG - 2017-05-26 23:15:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:15:48 --> Input Class Initialized
INFO - 2017-05-26 23:15:48 --> Language Class Initialized
INFO - 2017-05-26 23:15:48 --> Loader Class Initialized
INFO - 2017-05-26 23:15:48 --> Helper loaded: url_helper
INFO - 2017-05-26 23:15:48 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:15:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:15:48 --> Controller Class Initialized
DEBUG - 2017-05-26 23:15:48 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:15:48 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/TextoPadrao/textoPadrao/2116]
INFO - 2017-05-26 23:15:48 --> Model Class Initialized
INFO - 2017-05-26 23:15:48 --> Database Driver Class Initialized
INFO - 2017-05-26 23:15:48 --> Final output sent to browser
DEBUG - 2017-05-26 23:15:48 --> Total execution time: 0.0763
INFO - 2017-05-26 23:16:04 --> Config Class Initialized
INFO - 2017-05-26 23:16:04 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:16:04 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:16:04 --> Utf8 Class Initialized
INFO - 2017-05-26 23:16:04 --> URI Class Initialized
INFO - 2017-05-26 23:16:04 --> Router Class Initialized
INFO - 2017-05-26 23:16:04 --> Output Class Initialized
INFO - 2017-05-26 23:16:04 --> Security Class Initialized
DEBUG - 2017-05-26 23:16:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:16:04 --> Input Class Initialized
INFO - 2017-05-26 23:16:04 --> Language Class Initialized
INFO - 2017-05-26 23:16:04 --> Loader Class Initialized
INFO - 2017-05-26 23:16:04 --> Helper loaded: url_helper
INFO - 2017-05-26 23:16:04 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:16:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:16:04 --> Controller Class Initialized
DEBUG - 2017-05-26 23:16:04 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:16:04 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/CadastroTextoPadrao/salvar/2116]
INFO - 2017-05-26 23:16:04 --> Model Class Initialized
INFO - 2017-05-26 23:16:04 --> Database Driver Class Initialized
DEBUG - 2017-05-26 23:16:04 --> update 	laudo
				set 		textoh = EMPTY_CLOB()  where codlau = 6 returning textoh into :temp
INFO - 2017-05-26 23:16:04 --> File loaded: /var/www/html2/application/views/_includes/_header.php
INFO - 2017-05-26 23:16:04 --> File loaded: /var/www/html2/application/views/exames/CadastroTextoPadraoIndex.php
INFO - 2017-05-26 23:16:04 --> File loaded: /var/www/html2/application/views/_includes/_footer.php
INFO - 2017-05-26 23:16:04 --> Final output sent to browser
DEBUG - 2017-05-26 23:16:04 --> Total execution time: 0.1560
INFO - 2017-05-26 23:16:05 --> Config Class Initialized
INFO - 2017-05-26 23:16:05 --> Hooks Class Initialized
DEBUG - 2017-05-26 23:16:05 --> UTF-8 Support Enabled
INFO - 2017-05-26 23:16:05 --> Utf8 Class Initialized
INFO - 2017-05-26 23:16:05 --> URI Class Initialized
INFO - 2017-05-26 23:16:05 --> Router Class Initialized
INFO - 2017-05-26 23:16:05 --> Output Class Initialized
INFO - 2017-05-26 23:16:05 --> Security Class Initialized
DEBUG - 2017-05-26 23:16:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-05-26 23:16:05 --> Input Class Initialized
INFO - 2017-05-26 23:16:05 --> Language Class Initialized
INFO - 2017-05-26 23:16:05 --> Loader Class Initialized
INFO - 2017-05-26 23:16:05 --> Helper loaded: url_helper
INFO - 2017-05-26 23:16:05 --> Helper loaded: funcoes_helper
DEBUG - 2017-05-26 23:16:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2017-05-26 23:16:05 --> Session: Class initialized using 'files' driver.
INFO - 2017-05-26 23:16:05 --> Controller Class Initialized
DEBUG - 2017-05-26 23:16:05 --> Config file loaded: /var/www/html2/application/config/sys_config.php
DEBUG - 2017-05-26 23:16:05 --> User[DIGI], Session[08ab91baa04e57ba44ef2525ac39e11b], IP[192.168.1.5], Request[/Sys/mensagemClean]
INFO - 2017-05-26 23:16:05 --> Final output sent to browser
DEBUG - 2017-05-26 23:16:05 --> Total execution time: 0.0083
