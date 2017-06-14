<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 	
 * 	Configurações das páginas
 *  */
$config['sys_pages'] = array(
	'' => array( 'all' ),
	'#' => array( 'all' ),
	'Sys' => array( 'all' ),
	'Index' => array( 'all' ),
	'Login' => array( 'all' ),
	'FluxoMedico' => array( 'laudar', 'revisar', 'assinar' ),
	'FluxoDigitacao' => array( 'laudar', 'revisar', 'digitar' ),
	'Gravador' => array( 'laudar', 'assinar' ),
	'Editor' => array( 'laudar', 'revisar', 'assinar', 'digitar' ),
	'TextoPadrao' => array( 'laudar', 'revisar', 'assinar', 'digitar' ),
	'CadastroTextoPadrao' => array( 'laudar', 'revisar', 'assinar', 'digitar' ),
);
/* Paraâmetros dos perfis */
$config['sys_parameters'] = array(
	'Digitador' => array(
		'Index' => '/FluxoDigitacao',
		'Tema' => ''	
	),
	'Medico' => array(
		'Index' => '/FluxoMedico',
		'Tema' => 'black'
	)
);

$config['sys_pacs'] = array(
	'ORTHANC' => array(
		'nome'		=>	'Orthanc',
		'status'	=> 	false,
		'host'		=>	'201.47.232.7',
		'protocol'	=>	'http',
		'port'		=>	'8042',
		'timeout'	=>	1 , /* Em segundos */
		'formatFilter' => array(
			'PatientID' => array(  
				'type' => 'int',
				'mask' => '000_{VALUE}'
			),
			'StudyDate' => array(  
				'type' => 'date',
				'mask' => 'Ymd'
			),
		)
	)
);