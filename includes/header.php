<?php ob_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>Service Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Πελάτες</a>
                        <ul class="dropdown-menu">
                            <li><a href="add_cust.php">Προσθήκη Πελάτη</a></li>
                            <li><a href="view_cust.php">Λίστα Πελατών</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Μηχανήματα</a>
                        <ul class="dropdown-menu">
                            <li><a href="add_item.php">Προσθήκη Μηχανήματος</a></li>
                            <li><a href="view_items.php">Λίστα Μηχανημάτων</a></li>
                        </ul>
                    </li>                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Επισκευές</a>
                        <ul class="dropdown-menu">
                            <li><a href="add_serv.php">Νέο Επισκευή</a></li>
                            <li><a href="view_open_serv.php">Εκκρεμείς Επισκευές</a></li>
                            <li><a href="view_compl_serv.php">Ολοκληρωμένες Επισκευές</a></li>
                        </ul>
                    </li>   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Παράμετροι</a>
                        <ul class="dropdown-menu">
                            <li><a href="view_cat.php">Τύποι Μηχανημάτων</a></li>
                            <li><a href="view_status.php">Status</a></li>
                            <li><a href="view_cust.php">Χρήστες</a></li>
                        </ul>                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>