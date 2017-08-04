<?php


function escape($string) {

    global $connection;

    return mysqli_real_escape_string($connection, trim($string));


}


function confirmQuery($result) {
    
    global $connection;

    if(!$result ) {
          
          die("QUERY FAILED ." . mysqli_error($connection));
   
          
      }
    

}


function item_exists($item_id){

    global $connection;


    $query = "SELECT item_id FROM items WHERE item_id = '$item_id'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }



}

?>