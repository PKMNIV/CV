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



//add to the database. The values are ID, Title, Description, Creation Date and Image. The table is name is a variable.
function db_add($connection, $table, $id, $title, $description, $creation_date, $image){
    $sql = "INSERT INTO " . $table . " ";
    $sql .= "(ID, Title, Description, Creation_Date, Image) ";
    $sql .= "VALUES (";
    $sql .= "'" . $id . "',";
    $sql .= "'" . $title . "',";
    $sql .= "'" . $description . "',";
    $sql .= "'" . $creation_date . "',";
    $sql .= "'" . $image . "'";
    $sql .= ")";
    $result = mysqli_query($connection, $sql);
    confirm_result_set($result);
    return $result;
}

//update the database. The values are ID, Title, Description, Creation Date and Image. The table is name is a variable.
function db_update($connection, $table, $id, $title, $description, $creation_date, $image){
    $sql = "UPDATE " . $table . " SET ";
    $sql .= "Title='" . $title . "', ";
    $sql .= "Description='" . $description . "', ";
    $sql .= "Creation_Date='" . $creation_date . "', ";
    $sql .= "Image='" . $image . "' ";
    $sql .= "WHERE ID='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($connection, $sql);
    confirm_result_set($result);
    return $result;
}

//delete from the database. The values are ID, Title, Description, Creation Date and Image. The table is name is a variable.
function db_delete($connection, $table, $id){
    $sql = "DELETE FROM " . $table . " ";
    $sql .= "WHERE ID='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($connection, $sql);
    confirm_result_set($result);
    return $result;
}