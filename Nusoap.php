<?php

	require_once('lib/nusoap.php');
	


	$client =  new nusoap_client('http://www.novinpayamak.com/services/SMSBox/wsdl', 'wsdl'); 
	$client->soap_defencoding = 'UTF-8';

	$res = $client->call('Send', array(
													array(
															'Auth' 	=> array('number' => $number, 'pass' => $pass),
															'Recipients' 		=> array($Recipients),
															'Message' 	=> array($Message),
															'Flash' 		=> $Flash
														)
													)
	);
	