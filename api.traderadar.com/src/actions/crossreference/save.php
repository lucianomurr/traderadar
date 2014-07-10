<?php
// create_product.php
require_once "bootstrap.php";

$headers = apache_request_headers();
if ($headers['Authorization']){

  $user_id = $headers['Authorization'];

  //set user id
  $newTradeUserId = $user_id;

  //get data from request
  $newTradeName = $request->name;
  $newDescription = $request->description;

  //create new entity
  $cross = new CrossReference();

  //set entity data for create new record
  $cross->setName($newTradeName);
  $cross->setDescription($newDescription);
  $cross->setUserId($newTradeUserId);
  $cross->setLastUpdate( new DateTime("now") );

  //add new record to database
  $entityManager->persist($cross);
  $entityManager->flush();

  echo "{cross_reference_id: ".$cross->getId().", msg: 'element created'}"; 

  
}