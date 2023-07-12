<?php
require("connectdb.php");

//getting id from url 
if(isset($_GET['id'])) {
    //avoid sql injection and store id into $id
    $id = mysqli_real_escape_string($con, $_GET['id']);

    //delete data in database within id 
    $delete_query = "DELETE FROM students WHERE id = $id";
    $result = mysqli_query($con, $delete_query);

    if($result) {
        header("Location: index.php");
    }
}
?>