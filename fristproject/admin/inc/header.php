

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Home Page</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BUA ?>"> <img src="<?php echo BU.'assets/images/logo.png'; ?>" width="70" alt="LOGO"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BUA ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo BUA.'doctors/' ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    doctors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BUA.'doctors/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BUA.'doctors/' ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo BUA.'services/index.php' ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BUA.'services/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BUA.'services/index.php' ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo BUA.'offers/index.php' ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   offers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BUA.'offers/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BUA.'offers/index.php' ?>">View All</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo BUA.'department/index.php' ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   department
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BUA.'department/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BUA.'department/index.php' ?>">View All</a>
                    </div>
                </li>




                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BU.'index.php'; ?>" target="_blank">View booking</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo BUA.'logout.php'; ?>">Logout</a>
                </li>

            </ul>

            
        </div>
    </nav>


    <div class="container-fluid mt-5 mb-5">
        <div class="row"> 


        