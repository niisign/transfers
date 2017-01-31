<?php
    $method     =   $_SERVER[ 'REQUEST_METHOD' ];
    $userID     =   $_SERVER[ 'PHP_AUTH_USER' ];
    $password   =   $_SERVER[ 'PHP_AUTH_PW' ];
    $body       =   json_decode( file_get_contents( 'php://input' ), true );

    #Check HTTP verb used in request
    require_once( "handler.php" );
    $transaction    =   new Transaction( );
    

    echo json_encode([ "api_key" => $userID, "secret" => $password, "request_method" => $method ]);
