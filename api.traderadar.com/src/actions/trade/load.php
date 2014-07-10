<?php
// show_trade.php <id>
require_once "bootstrap.php";
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

$trade = $entityManager->find('Trade', $idTrade);

if ($trade === null) {
    echo "{msg: 'No trade found.'}\n";
    exit(1);
}

$jsonContent = $serializer->serialize($trade, 'json');
echo $jsonContent;
/*echo sprintf("{id: %d, name: '%s', user_id: %d, image: '%s'}\n", 
      $trade->getId(),
      $trade->getName(),
      $trade->getUserId(),
      $trade->getImage()
      );*/