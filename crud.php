<?php 
require("connectdb.php");
require("function.php");

$name = $course = $email = $phone = $address = $gender = "";
$name_error = $course_error = $email_error = $phone_error = $address_error = $gender_error = "";


if (isset($_POST['submit-update'])) {

    $id = mysqli_real_escape_string($con, $_GET['id']);

    //user input store in each variable category after click button submit 
    //later - add mysqli_real_escape_String 
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    //$gender = $_POST['gender'];

    $query = " UPDATE students SET 
    student_name = '$name',
    student_course = '$course',
    student_email = '$email',
    student_phone = '$phone',
    student_address = '$address'
    WHERE id = '$id' ";

    $result = mysqli_query($con, $query);

    if($result) {
        //echo "Student update successful";
        header("Location: index.php");
    } else {
        echo "Failed to update student";
    }

}
?>