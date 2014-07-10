<?php
/**
 * @file(//src/actions/crossreference/list.php)
 * @author: Luciano Murruni //2014-07-10
 */

require_once "bootstrap.php";

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$headers = apache_request_headers();


if (array_key_exists('Authorization', $headers)) {

  $user_id = $headers['Authorization'];
  
  $crossRepository = $entityManager->getRepository('CrossReference');
  $crosses = $crossRepository->findBy( array('user_id'=>$user_id) );

  if( count($crosses > 0) )
  {
    foreach ($crosses as $cross) {
      
      //print_r($cross);
      $jsonContent = $serializer->serialize($cross, 'json');
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