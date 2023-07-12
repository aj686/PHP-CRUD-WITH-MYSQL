<?php

//session_start();

//require("connectdb.php");
//require("function.php");

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
                    <h3>Register an Account</h3>
                </div>
                <div class="card-body">
                    <!-- add form for access input data -->
                    <form action="sign.up" method="POST">

                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Insert a fullname">
                            <span class="error"> <?php //echo $name_error ?> </span>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Insert an email">
                            <span class="error"> <?php //echo $email_error ?> </span>
                        </div>

                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="New password">
                            <span class="error"> <?php //echo $password_error ?> </span>
                        </div>

                        <div class="form-group mb-3">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Confirm password">
                            <span class="error"> <?php //echo $password_error ?> </span>
                        </div>

                        <button class="btn btn-primary btn-block mt-4" type="submit" name="submit">Register</button>
                    </form>
                    <br>
                    <p>Already have an account ?</p>
                    <!-- <button class="btn btn-secondary"> <a href="signup.php"></a>Sign Up</button> -->
                    <a href="login.php" class="btn btn-info" role="button">Login</a>
                </div>
            </div>
        </div>
    </section>


    
    <!-- FIX ERROR HAMBURGER BUTTON-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 