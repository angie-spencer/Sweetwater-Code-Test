<?php

require_once('db_credentials.php');

function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect(){
    $connection = mysquli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}



function confirm_db_connect(){
    if(mysqli_connect_errno()){
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_result_set($result_set){
    if(!result_set){
        exit("Database query failed.");
    }
}

function confirm_result_set_success($result_set){
    if(result_set){
        exit("Database query successful.");
    }
}

function db_escape($connection, $string){
    return mysqli_real_escape_string($connection, $string);
}

?>