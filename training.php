<?php

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
    

    <title>PHP</title>
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

    <div class="container mb-4">
        <h1 class="text-light text-center">PHP TRAINING</h1>
        <hr>
    </div>

    <div class="container">
        <h4 class="text-light pb-2">1. Array</h4>
        <ul>
            <li>Indexed Array</li>
            <li>Associative Array</li>
            <li>Multidimensional Array</li>
        </ul>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 border rounded m-3">
                <h6>Indexed Array</h6>

                <?php 

                $senaraiDaerah = array( 
                    'Tumpat', 
                    'Kota Bharu', 
                    'Gua Musang', 
                    'Kuala Krai', 
                    'Machang'
                );
                ?>

                <span class="text-warning">Display value in format of variable</span>
                <br>

                <?php
                //var_dump($senaraiDaerah);
                print_r( $senaraiDaerah );
                echo "<br>";
                ?>

                <br>
                <span class="text-warning">Display all data using foreach</span>
                <br>

                <?php
                if( true ) {
                    foreach( $senaraiDaerah as $daerah ) {
                        echo $daerah;
                        echo "<br>";
                    }
                }
                ?>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 border rounded m-3">
                <h6>Associative Array</h6>

                <?php 

                $pelajarSatu = array( 
                    'id' => 1,
                    'nama' => 'Ronaldo', 
                    'status' => 'bujang', 
                    'umur' => 19, 
                    'negeri' => 'Terengganu'
                );
                ?>

                <span class="text-warning">Display value in format of variable</span>
                <br>

                <?php
                //var_dump($senaraiDaerah);
                print_r( $pelajarSatu );
                echo "<br>";
                ?>

                <br>
                <span class="text-warning">Display all data using foreach</span>
                <br>

        
                <?php 

                foreach( $pelajarSatu as $pelajar => $val ) {

                    echo $pelajar . "=>" . $val;
                    echo "<br>";
                }
                 ?>
                
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 border rounded m-3">
                <h6>Multidimensional Array</h6>

                <?php 

                $semuaPelajar = array( 
                    
                    //pelajar 1
                    array(
                        'AQIL AKMAL',
                        27,
                        'ENGINEER'
                    ),

                    //pelajar 2
                    array(
                        'AIMAN',
                        29,
                        'MEDICAL ASSISSTANT'
                    ),

                    //pelajar 3
                    array(
                        'SITI',
                        19,
                        'PELAJAR'
                    )
                );
                ?>

                <span class="text-warning">Display value in format of variable</span>
                <br>

                <?php
                //var_dump($senaraiDaerah);
                print_r( $semuaPelajar );
                echo "<br>";
                ?>

                <br>
                <span class="text-warning">Display all data using forloop</span>
                <br>

        
                <?php 

                for( $row = 0; $row < 3; $row++ ) {
                    echo "Pelajar " . $row;
                    echo "<br>";
                    
                    for ( $col = 0; $col < 3; $col++) {
                        echo $semuaPelajar[$row][$col];
                        echo "<br>";
                    }
                }
                
                 ?>
            </div>
        </div>

        
    </div>

    
    <!-- FIX ERROR HAMBURGER BUTTON-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 