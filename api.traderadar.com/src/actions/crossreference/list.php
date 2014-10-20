<?php
/**
 * @file(//src/actions/crossreference/list.php)
 * @author: Luciano Murruni //2014-07-10
 */

require_once "bootstrap.php";

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$headers = apache_request_headers();


//if (array_key_exists('Authorization', $headers)) {

  $user_id = 1;//$headers['Authorization'];
  
  $crossRepository = $entityManager->getRepository('CrossReference');
  $crosses = $crossRepository->findBy( array('user_id'=>$user_id) );

  if( count($crosses > 0) )
  {
      //set new header status
      $response->sendHeaders('HTTP/1.0 200 ok');
      $restContent = $serializer->serialize($crosses, 'json');
      echo '{"success": true, "payload": '.$restContent.'}';
  }
  else
  {
    http_response_code(204); //'No Content';
    //set new header status
    $response->sendHeaders('HTTP/1.0 204 No Content');
    echo '{"success": false,"payload": {},"error": {"code": 204,"message": "No data found!"}}';
  }

/*} else {
  echo "{err: 201, msg: 'invalid request'}";
}*/