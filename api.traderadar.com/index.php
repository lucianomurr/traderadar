<?php
require_once __DIR__ . '/vendor/autoload.php';

//inizializza la classe Klein per la gestione delle API rest
$klein = new \Klein\Klein();

//get request without specific function
//return a list of API
$klein->respond('GET', '/', function () {    
    include("src/actions/generic/list_api.php");
});

//get request with dashboard function
//return information about traderadar user
$klein->respond('GET', '/dashboard', function () {    
    include("src/actions/generic/dashboard.php");
});

//post login data
//return user information if is a valid user
$klein->respond('POST', '/login', function () {
    //inserire qui la chiamata al metodo
});

//trades "directory" API (a valid tocken required for all)
$klein->with('/trades', function () use ($klein) {

    //get list trade
    $klein->respond('GET', '/?', function ($request, $response) {
        // list of trade
        //return 'elenco dei trade: '. $request->idTrade;
        include("src/actions/trade/list_trade.php");
        return;
    });
    
    //get single trade to view or edit
    $klein->respond('GET', '/[:idTrade]', function ($request, $response, $service, $app) {
        // Show a single trade
        $idTrade = (int)$request->idTrade;
        if ( is_int($idTrade) )
        {
          include("src/actions/trade/get_trade.php");  
        }
        return;
    });

    //post add trade 
    $klein->respond('POST', '/?', function ($request, $response) {
        // list of trade
        include("src/actions/trade/create_trade.php");
        return;
    });

    //save trade after update
    $klein->respond('POST', '/[:idTrade]', function ($request, $response) {
        include("src/actions/trade/create_trade.php");
    });

    //delete trade
    $klein->respond('DELETE', '/[:idTrade]', function ($request, $response) {
        return 'Elimina il trade: '. $request->idTrade;
    });

});

$klein->with('/crossreference', function () use ($klein) {

});

$klein->with('/timeframe', function () use ($klein) {

});

$klein->with('/operationtype', function () use ($klein) {

});


$klein->dispatch();