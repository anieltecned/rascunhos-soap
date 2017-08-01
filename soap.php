<?php
$client = new SoapClient('http://lmsapi.webaula.com.br/v3/student.svc?wsdl');
$function  = 'GetAll';
$arguments = array('GetAll' => array(
                        'passport'  => '21d1d067d9b9498a9926b7a6bb4a7950',
                        'page'      => 1,
                        'pageSize'  => 10,
                        'active'    => true
                ));

// $options = array('location' => 'http://tempuri.org/ICourse/GetAll');
$result = $client->__soapCall($function, $arguments);
// echo 'Response: ';
// print_r($result);

$xml = new SimpleXMLElement($result);

print_r($xml);







?>