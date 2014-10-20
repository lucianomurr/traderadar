<?php
// create_product.php
require_once "bootstrap.php";

$headers = apache_request_headers();
//if ($headers['Authorization']){
  $user_id = 1001;

  //set user id
  $newTradeUserId = $user_id;

  $data = json_decode($request->data);

  print_r($data);
  
  //get data from request
  $newCrossReference = $data->CrossReference;
  $newTimeframe = $data->TimeFrame;
  $newTechnicalPattern = $data->TechnicalPatterns;
  $newOperationType = $data->OperationType;
  $newVolume = $data->Volume;
  $newCapitalRisk = $data->CapitalRisk;
  $newEntryPrice = $data->EntryPrice;
  $newStopLoss = $data->StopLoss;

  //create new entity
  $trade = new Trade();

  //set entity data for create new record
  $trade->setUserId($newTradeUserId);
  $trade->setCrossReference($newCrossReference);
  $trade->setTimeframe($newTimeframe);
  $trade->setTechnicalPattern($newTechnicalPattern);
  $trade->setOperationType($newOperationType);
  $trade->setVolume($newVolume);
  $trade->setCapitalRisk($newCapitalRisk);
  $trade->setEntryPrice($newEntryPrice);
  $trade->setStopLoss($newStopLoss);
  $trade->setStatus('open');
  $trade->setDateOpen( new DateTime("now") );
  $trade->setLastUpdate( new DateTime("now") );

  //add new record to database
  $entityManager->persist($trade);
  $entityManager->flush();

  if ($newTrade = $trade->getId()){
    $response->sendHeaders('HTTP/1.0 200 ok');
    echo '{"success": true,"payload": {"tradeId": '.$trade->getId().'}}';
    
  }else{
    $response->sendHeaders('HTTP/1.0 204 ok');
    echo '{"success": false,"payload": {},"error": {"code": 204,"message": "Error during data save!"}}';
  }
  
  
//}