<?php
/**
 * @file(//src/actions/trade/list.php)
 * @author: Luciano Murruni //2014-03-27
 */

require_once "bootstrap.php";

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$headers = apache_request_headers();
header('Content-Type: text/plain');
header('HTTP/1.0 401 Unauthorized');

//if (array_key_exists('Authorization', $headers)) {

  $user_id = 1001;
  
  $tradeRepository = $entityManager->getRepository('Trade');
  $trades = $tradeRepository->findBy( array('user_id'=>$user_id) );

  if( count($trades) > 0 )
  {
    $jsonContent = Array();
    foreach ($trades as $trade) {
      $jsonContent[]= $trade;
    }
    $restContent = $serializer->serialize($jsonContent, 'json');
    echo '{"success": true,"payload": '.$restContent.'}';
  }
  else
  {
    http_response_code(204); //'No Content';
    header('HTTP/1.0 204 No Content');
    echo '{"success": false,"payload": {},"error": {"code": 204,"message": "No data found!"}}';  
  }

/*} else {
  http_response_code(401); //'Unauthorized';
  header('HTTP/1.0 401 Unauthorized');
  echo '{"success": false,"payload": {},"error": {"code": 401,"message": "User not allowed!"}}';  
}*/