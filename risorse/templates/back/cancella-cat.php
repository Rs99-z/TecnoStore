<?php require_once("../../config.php"); 

if (isset($_GET['id'])) {

    $cancellaPdt = query("DELETE FROM categorie WHERE id_pdt = $_GET[id] ");
    conferma($cancellaOrdine);

    creaAvviso('Hai cancellato correttamente una categoria');
    header("Location: ../../../public/admin/index.php?prodotti-admin");
} else {
    header("Location: ../../../public/admin/index.php?prodotti-admin");
}