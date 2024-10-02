<?php 
require_once("../risorse/config.php"); 
include(FRONT_END . DS . 'header.php'); ?>

<div class="container my-5">
    <h4 class="bg-warning text-center">
        <?php mostraAvviso(); ?>
    </h4>
    <form class="form-horizontal" role="form" method="post" action="">

    <!-- funzione di  login -->
        <?php login(); ?>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="color: blue; text-align: center;">Accedi</h2>
                <hr>
            </div>
        </div>

        <!-- username -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="email">Nome utente</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 9.6rem; color:red; font-size:25px;"><i class="material-icons">email</i></div>
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
            </div>

        </div>

        <!-- password -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 9.6rem; color:red; font-size: 25px;"><i class="material-icons">password</i>
                        </div>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">

                    </span>
                </div>
            </div>
        </div>

        <!-- pulsante -->
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" name="login" class="btn btn-success btn-block">Login</button>

            </div>
        </div>
    </form>
</div>
<hr>
<!-- Footer -->
<?php include(FRONT_END . DS . 'footer.php'); ?>