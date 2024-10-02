<?php
require_once("../../risorse/config.php");
include(BACK_END . DS . "header.php");

//richiamo della sessione per utente diverso da Admin
if ($_SESSION['ruolo'] !== 'admin') {
    header('Location: ../../public/areariservata.php');
}
?>


<!-- INIZIO INDEX -->


<!-- /.row -->

<!-- RIEPILOGO -->
<?php
//definizione delle directories per homepage (URI) e sottopagine
if ($_SERVER['REQUEST_URI'] == "/PROGETTO/public/admin/" || $_SERVER['REQUEST_URI'] == "/PROGETTO/public/admin/index.php") {
    include(BACK_END . DS . "content_admin.php");
}

if (isset($_GET['ordini'])) {
    include(BACK_END . DS . "ordini.php");
}

if (isset($_GET['prodotti-admin'])) {
    include(BACK_END . DS . "prodotti-admin.php");
}

if (isset($_GET['aggiungi-pdt'])) {
    include(BACK_END . DS . "aggiungi-pdt.php");
}

if (isset($_GET['aggiorna-pdt'])) {
    include(BACK_END . DS . "aggiorna-pdt.php");
}

if (isset($_GET['categorie-admin'])) {
    include(BACK_END . DS . "categorie-admin.php");
}
if (isset($_GET['rapporti'])) {
    include(BACK_END . DS . "rapporti.php");
}

?>
<div class="row">

    <!-- RIEPILOGO ORDINI -->
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    </tbody>
            </table>
        </div>
        <div class="text-xs-right">
            <!-- <a href="javascript:;">Vedi tutti i movimenti </a> -->
        </div>
    </div>
</div>
</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


<?php include(BACK_END . DS . "footer.php"); ?>