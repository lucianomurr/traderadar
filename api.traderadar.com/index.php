<?php
require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    
    //list api function
    include("src/actions/generic/list_api.php");

});

$klein->respond('GET', '/dashboard', function () {
    
    //dashboard JSON
    include("src/actions/generic/dashboard.php");

});


$klein->respond('GET', '/login', function () {
    
    //inserire qui la chiamata al metodo


});


$klein->with('/trades', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) {
        // list of trade
        //return 'elenco dei trade: '. $request->idTrade;
        include("src/actions/trade/list_trade.php");
        return;
    });
    
    $klein->respond('POST', '/?', function ($request, $response) {
        // list of trade
        include("src/actions/trade/create_trade.php");
        return;
    });

    $klein->respond('GET', '/[:idTrade]', function ($request, $response, $service, $app) {
        // Show a single trade
        $idTrade = (int)$request->idTrade;
        if ( is_int($idTrade) )
        {
          include("src/actions/trade/get_trade.php");  
        }
        
        return;
    });

    $klein->respond('POST', '/[:idTrade]', function ($request, $response) {
        // Show a single trade
        include("src/actions/trade/create_trade.php");
    });

    $klein->respond('DELETE', '/[:idTrade]', function ($request, $response) {
        // Show a single trade
        return 'Elimina il trade: '. $request->idTrade;
    });

});

$klein->dispatch();