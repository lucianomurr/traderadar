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

    //GET list trade
    $klein->respond('GET', '/?', function ($request, $response) {
        include("src/actions/trade/list.php");
        return;
    });
    
    //GET single trade to view or edit
    $klein->respond('GET', '/[:idTrade]', function ($request, $response, $service, $app) {
        $idTrade = (int)$request->idTrade;
        if ( is_int($idTrade) )
        {
          include("src/actions/trade/load.php");  
        }
        return;
    });

    //POST: add new trade 
    $klein->respond('POST', '/?', function ($request, $response) {
        include("src/actions/trade/save.php");
        return;
    });

    //POST: save single trade after update (idTrade is required)
    $klein->respond('POST', '/[:idTrade]', function ($request, $response) {
        include("src/actions/trade/save.php");
    });

    //DELETE: delete trade (idTrade is required)
    $klein->respond('DELETE', '/[:idTrade]', function ($request, $response) {
        include("src/actions/trade/delete.php");
    });

});

$klein->with('/crossreference', function () use ($klein) {
    //GET list crossreference
    $klein->respond('GET', '/?', function ($request, $response) {
        include("src/actions/crossreference/list.php");
        return;
    });

    //POST: add new trade 
    $klein->respond('POST', '/?', function ($request, $response) {
        include("src/actions/crossreference/save.php");
        return;
    });
});

$klein->with('/timeframe', function () use ($klein) {
    //GET list crossreference
    $klein->respond('GET', '/?', function ($request, $response) {
        include("src/actions/timeframe/list.php");
        return;
    });

    //POST: add new trade 
    $klein->respond('POST', '/?', function ($request, $response) {
        include("src/actions/timeframe/save.php");
        return;
    });
});

$klein->with('/operationtype', function () use ($klein) {

});


$klein->dispatch();