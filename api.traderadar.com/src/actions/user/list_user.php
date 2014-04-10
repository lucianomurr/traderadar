<?php
// list_user.php
require_once "bootstrap.php";

$userRepository = $entityManager->getRepository('User');

if ($argv[1] != ''){
  $parametro = $argv[1];
  $users = $userRepository->findBy(array('name' => $parametro));  
}
else{
  $users = $userRepository->findAll();  
}


foreach ($users as $user) {
    echo sprintf("{id: %d, name: '%s', email:'%s'}\n", 
      $user->getId(),
      $user->getName(),
      $user->getEmail() );
    //print_r( $user );
}