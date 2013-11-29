<?php
	include_once('restmco.class.php');

$mco = new restmco('http://localhost:4567');

$ret = $mco->call_agent('rpcutil', 'ping');

echo print_r('ret :'.$ret, true);
echo print_r('result :'.$mco->result, true);
echo print_r('error :'.$mco->error_message, true);
echo print_r('error_code :'.$mco->error_code, true);


?>