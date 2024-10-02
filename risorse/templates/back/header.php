<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../../../public/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/admin/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700i" rel="stylesheet">
    <!--  material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CKEditor, serve per avere la schemata di modifica in admin -->
    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body>
    <!-- Top Menu Items -->
    <ul class="nav navbar-nav top-nav navbar-right pull-xs-right" style="text-align: center;background-color:greenyellow">
        <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons ">account_circle</i>
                <!-- SESSIONE LOGIN -->
                <?php
                if (isset($_SESSION['username'])) {
                    echo 'Ciao, ' . $_SESSION['username'];
                } else {
                    echo "utente non riconosciuto";
                }
                ?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <!-- pulsante logout -->
                <a href="logout.php"><i class="material-icons">power_settings_new</i> Log Out</a>
            </ul>
        </li>

    </ul>


    <!-- titolo sito -->
     <div style="background-color:gold;margin-top: 1%;">
     <h1 class="titolo1" style="text-align: center; margin-top:0; color:red;"> TecnoStore</h1>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header" style="color: blue;text-align:center;margin-top: 2%;">
                Pannello di amministrazione
            </h1>
            <h1 style="color: red; text-align:center;margin-top:3%;">BENVENUTO ADMIN</h1>
     </div>
   
            <!-- INVOCAZIONE SESSIONE UTENTE -->
            <?php
            // echo $_SESSION['username'];
            ?>


        </div>
    </div>
    <!-- /.row -->
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-dark navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler hidden-md-up pull-md-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="material-icons">menu</i>
                </button>
                <a class="navbar-brand" href="index.html?prodotti-admin">My Shop Admin</a>
                <a class="navbar-brand" href="../index.html">Visita il sito</a>
            </div>

        </nav>
        <?php include("sidebar.php"); ?>
    </div>