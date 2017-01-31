<?php
    $method     =   $_SERVER[ 'REQUEST_METHOD' ];
    $userID     =   $_SERVER[ 'PHP_AUTH_USER' ];
    $password   =   $_SERVER[ 'PHP_AUTH_PW' ];
    $body       =   json_decode( file_get_contents( 'php://input' ), true );
    $context    =   'WEB';

    #Check HTTP verb used in request
    require_once( "handler.php" );
    $transaction    =   new Transaction( $userID, $password, $context, $method );
    header( 'Content-Type: application/json' );
    echo $transaction->response();
