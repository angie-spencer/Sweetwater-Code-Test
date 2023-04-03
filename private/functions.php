<?php

//Creates an array of results
function resultToArray($result){
    $rows = array();
    while ($row = $result->fetch_assoc()){
        $rows[] = $row;
    } 

    return $rows;
}

//Get all comments 
function comments(){
   global $db;
    $sql = "SELECT comments FROM sweetwater_test";

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $comments = resultToArray($result);
    mysqli_free_result($result);
    return $comments;
}



?>