<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$trade = $entityManager->find('Trade', $id);

if ($trade === null) {
    echo "Trade $id does not exist.\n";
    exit(1);
}

$trade->setName($newName);

$entityManager->flush();