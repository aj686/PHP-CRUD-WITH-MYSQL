<?php

//session_start();
    require("connectdb.php");
    require("function.php");

$name = $course = $email = $phone = $address = $gender = "";
$name_error = $course_error = $email_error = $phone_error = $address_error = $gender_error = "";


if (isset($_POST['submit'])) {

    //user input store in each variable category after click button submit 
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    //if have input from user
    if (!empty($name) && !empty($course) && !empty($email) && !empty($phone) && !empty($address) && !empty($gender) ) {

        //auto create student id
        $student_id = random_num(20);

        //sql statement INSERT data into database
        $query = "INSERT INTO students (student_id, student_name, student_course, student_email, student_phone, student_address, student_gender) 
                      VALUES ('$student_id','$name','$course','$email','$phone','$address','$gender')";

        //perform query or sql statement on the database
        $result = mysqli_query($con, $query);

        //if data success submit into database
        if ($result) {
            echo "Registered Done";
        // if not submitted
        } else {
            echo "Failed to register";
        }
        //after successful insert data go to index.php instantly
        //header("Location: index.php");
        //die;
    }

    //if no input from user
     else {
        echo "Please enter some valid information!";
     }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    

    <title>Unikl</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark py-3 fixed-top">
            <div class="container">
                <a class="navbar-brand abs" href="index.php">Unikl Students</a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapseNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register as Lecture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Add new student<a href="index.php" class="btn btn-danger float-end">Back</a></h3>
                </div>
                <div class="card-body">
                    <!-- add form for access input data -->
                    <form action="create.php" method="POST">

                        <div class="form-group mb-3">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Insert a fullname">
                            <span class="error"> <?php //echo $name_error ?> </span>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Student Course</label>
                            <input type="text" class="form-control" name="course" placeholder="Insert a course">
                            <span class="error"> <?php //echo $course_error ?> </span>
                        </div>

                        <div class="form-group mb-3">
                            <label>Student Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Insert an email">
                            <span class="error"> <?php //echo $email_error ?> </span>
                        </div>

                        <div class="form-group mb-3">
                            <label>Student Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Insert a phone number">
                            <span class="error"> <?php //echo $phone_error ?> </span>
                        </div>

                        <div class="form-group mb-3">
                            <label>Student Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Insert address">
                            <span class="error"> <?php //echo $address_error ?> </span>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Female">
                                <label class="form-check-label" for="inlineRadio1">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Others">
                                <label class="form-check-label" for="inlineRadio1">Others</label>
                            </div>
                            <br>
                            <span class="error"> <?php //echo $gender_error ?> </span>
                        </div>
                        
                        <button class="btn btn-primary mt-4" type="submit" name="submit">Save Student</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    
    <!-- FIX ERROR HAMBURGER BUTTON-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 