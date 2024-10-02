<?php 
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');

// sessione differenziata per ruolo
if ($_SESSION['ruolo'] == 'admin') {
    //redirect
    // header('Location: areariservata.php');
    header('Location: admin/index.php?prodotti-admin');
}
?>


<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark text-white">
    <span class="h1" class="navbar-brand mb-0 ">AREA RISERVATA</span>
    <span>

        <!-- Top Menu Items -->
        <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">

            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons ">account_circle</i>

                    <!-- SESSIONE LOGIN -->
                    
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo 'Ciao, ' . $_SESSION['username'] . " benvenuto/a nella tua AREA RISERVATA";
                    } else {
                        echo "utente non riconosciuto";
                    }
                    ?>
                    <!-- Button trigger modal -->

                    <a href=" logout.php"><button type="button" class="btn btn-danger">
                            Logout
                        </button></a>
    </span>
</nav>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-6">
        <ol class="breadcrumb">
            <li class="active">
                <i class="material-icons">dashboard</i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<?php include(FRONT_END . DS . "footer.php"); ?>