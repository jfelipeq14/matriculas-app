<!-- db -->
<?php
session_set_cookie_params(60 * 60 * 24 * 15); //determinamos el tiempo de la sesion iniciada
//iniciamos la sesion
session_start();
$id = $_SESSION['id'];
include('db.php'); 
?>
<!-- fin db -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G1STAR</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./img/icon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./style.css">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body class="text-center">
    <!-- navbar -->
    <div class="row">
        <div class="col-sm-12">
            <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-sm-6 col-md-3 col-lg-2 me-0 px-3" href="#">Institucion Educativa Santa Catalina de Siena</a>
            </header>
        </div>
    </div>
    <!-- fin navbar -->