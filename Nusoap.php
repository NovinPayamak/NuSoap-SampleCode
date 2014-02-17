<?php

	require_once('lib/nusoap.php');
	


	$client =  new nusoap_client('http://www.novinpayamak.com/services/SMSBox/wsdl', 'wsdl'); 
	$client->soap_defencoding = 'UTF-8';

		$res = $client->call('Send', array(
			array(
					'Auth' 	=> array('number' => '1000XXX', 'pass' => 'yourpass'),
					'Recipients'=> array('string' => array('09XXXXXXX')),
					'Message' 	=> array('string' => array('تست')),
					'Flash' 	=> false
				)
		));
print_r($res);
?>
	
