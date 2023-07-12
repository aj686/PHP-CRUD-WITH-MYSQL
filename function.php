<?php

//check if user login available
/*
function check_login($con) {

    if(isset($_SESSION['user_id'])) {
        
        //$user_id store in $id
        $id = $_SESSION['user_id'];

        //READ FROM DATABASE 
        //query to db, select all from table name users where user_id only
        $query = "select * from users where user_id = '$id' limit 1";

        //return the user_id
        $result = mysqli_query($con,$query);

        //check the user_id in row and positive 
        if($result && mysqli_num_rows($result) > 0 ) {
            
            //fetch_assoc means convert to associative array as result
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}
*/

//auto create user_id number with refer called 20
function random_num($length) {

    $text = "";
    if($length < 5) {
        $length = 5;
    }   

    //generate random number with min 4 and max ect 12, 20 is $length and assign in $len
    $len = rand(4,$length);

    //looping in $len, to create different length of user 
    for($i=0 ; $i < $len; $i++) {

        //concatenation assignment //random number assign to $text var
        $text .= rand(0,9);

    }

    return $text;
    

}