<?php
// create_user.php
require_once "bootstrap.php";

date_default_timezone_set('Europe/Rome'); 

$newName      = $argv[1];
$newSurname   = $argv[2];
$newEmail     = $argv[3];
$newPassword  = $argv[4];
$newTimezone  = $argv[5];


$user = new User();
$user->setName($newName);
$user->setSurname($newSurname);
$user->setEmail($newEmail);
$user->setPassword( md5($newPassword) );
$user->setTimezone( $newTimezone );

$user->setRegisterDate( new DateTime() );
$user->setLastAccessDate( new DateTime() );


$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";