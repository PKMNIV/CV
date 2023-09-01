<?php
require_once("private/db_credentials.php");
//make a connection with the db
function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

//disconnect from the db
function db_disconnect($connection){
    if(isset($connection)){
        mysqli_close($connection);
    }
}

//confirm the connection to the db
function confirm_db_connect(){
    if(mysqli_connect_errno()){
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

//query the db
function db_query($connection, $sql){
    $result = mysqli_query($connection, $sql);
    confirm_result_set($result);
    return $result;
}

//confirm the result set
function confirm_result_set($result_set){
    if(!$result_set){
        exit("Database query failed.");
    }
}


