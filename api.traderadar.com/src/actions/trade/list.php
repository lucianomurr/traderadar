<?php
/**
 * @file(//src/actions/trade/list.php)
 * @author: Luciano Murruni //2014-03-27
 */

require_once "bootstrap.php";

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$headers = apache_request_headers();


if (array_key_exists('Authorization', $headers)) {

  $user_id = $headers['Authorization'];
  
  $tradeRepository = $entityManager->getRepository('Trade');
  $trades = $tradeRepository->findBy( array('user_id'=>$user_id) );

  if( count($trades) > 0 )
  {
    foreach ($trades as $trade) {
        
      $jsonContent = $serializer->serialize($trade, 'json');
      echo $jsonContent;
        
    }
  }
  else
  {
    echo "{err: 101, msg: 'no result found'}";  
  }

} else {
  echo "{err: 201, msg: 'invalid request'}";
}