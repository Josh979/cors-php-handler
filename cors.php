<?php
// Allow Restricted CORS
if (isset($_SERVER['HTTP_ORIGIN'])) {
    $allowedOrigins = [];
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    $domains = [
        'example.com',
        'test-domain.com',
    ];
    foreach ($domains as $domain){
        array_push($allowedOrigins,'https://'.$domain);
        array_push($allowedOrigins,'http://'.$domain);
        array_push($allowedOrigins,'https://www.'.$domain);
        array_push($allowedOrigins,'http://www.'.$domain);
    }
    if (in_array($http_origin, $allowedOrigins))
    {
        header("Access-Control-Allow-Origin: $http_origin");
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    }
}
//End CORS
