<?php

//session_start();
    require("connectdb.php");
    require("function.php");

    //$user_data = check_login($con);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>UniKL</title>
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
            <h3>Good morning, <span class="text-warning"><?php //who registered not student// echo $user_data['user_name']; ?></span></h3>
            <p></p>
            <br>
            <a href="create.php" class="btn btn-info" role="button">Add Student</a>
            <a href="update.php" class="btn btn-warning" role="button">Update Student</a>
            <a href="delete.php" class="btn btn-primary" role="button">Delete Student</a>
            <a href="view.php" class="btn btn-info" role="button">View Student</a>
            <a href="training.php" class="btn btn-info" role="button">Training PHP</a>
        </div>
    </section>

    <section>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Students Detail</h3>
                </div>
                <div class="card-body">
                    <!--table-->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="table-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                include "connectdb.php";

                                    $query = "SELECT * FROM students";
                                    $result = mysqli_query($con, $query);
                                    while($row = mysqli_fetch_assoc($result)) { 
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['student_name'] ?></td>
                                                <td><?php echo $row['student_course'] ?></td>
                                                <td><?php echo $row['student_email'] ?></td> 
                                                <td><?php echo $row['student_phone'] ?></td>
                                                <td><?php echo $row['student_address'] ?></td>
                                                <td><?php echo $row['student_gender'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" class="far fa-eye">Edit</a>
                                                    <a href="edit.php?id=<?php echo  $row['id'] ?>" class="btn btn-success" class="far fa-edit">View</a>
                                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" class="far fa-trash-alt">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- FIX ERROR HAMBURGER BUTTON-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 