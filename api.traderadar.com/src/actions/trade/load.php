<?php
// show_trade.php <id>
require_once "bootstrap.php";
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

$trade = $entityManager->find('Trade', $idTrade);

if ($trade === null) {
    //set new header status
    header('HTTP/1.0 204 No Content');
    echo '{"success": false,"payload": {},"error": {"code": 204,"message": "No data found!"}}';  
}

//set new header status
$response->sendHeaders('HTTP/1.0 200 ok');
$jsonContent = $serializer->serialize($trade, 'json');
echo '{"success": true, "payload": '.$jsonContent.'}';