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
  $newCrossReference = $request->cross_reference;
  $newTimeframe = $request->timeframe;
  $newTechnicalPattern = $request->technical_pattern;
  $newOperationType = $request->operation_type;
  $newVolume = $request->volume;
  $newCapitalRisk = $request->capital_risk;
  $newEntryPrice = $request->entry_price;
  $newStopLoss = $request->stop_loss;

  //create new entity
  $trade = new Trade();

  //set entity data for create new record
  $trade->setName($newTradeName);
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

  echo "Created Product with ID " . $trade->getId() . "\n";
  
}