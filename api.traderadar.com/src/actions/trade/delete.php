<?php
/**
 * @file(//src/actions/trade/delete.php)
 * @author: Luciano Murruni //2014-03-27
 */
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$trade = $entityManager->find('Trade', $id);

if ($trade === null) {
    echo "Trade $id does not exist.\n";
    exit(1);
}

/**
 * Remove trade code here
 */

$entityManager->flush();