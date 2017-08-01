<?php
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 900);
ini_set('default_socket_timeout', 15);


$passwordParam = '21d1d067d9b9498a9926b7a6bb4a7950';
$pageParam = 1;
$pageSizeParam = 10;

$params = array('password'=>$passwordParam, 'page'=>$pageParam, 'pageSize' => $pageSizeParam);


$wsdl = 'http://lmsapi.webaula.com.br/v3/Department.svc?wsdl';

$options = array(
		'uri'=>'http://schemas.xmlsoap.org/wsdl/',
		'style'=>SOAP_RPC,
		'use'=>SOAP_ENCODED,
		'soap_version'=>SOAP_1_1,
		'cache_wsdl'=>WSDL_CACHE_NONE,
		'connection_timeout'=>15,
		'trace'=>true,
		'encoding'=>'UTF-8',
		'exceptions'=>true,
	);
try {
	$soap = new SoapClient($wsdl, $options);
	$data = $soap->getLastResponse($params);
}
catch(Exception $e) {
	die($e->getMessage());
}
  
var_dump($data);
die;
?>