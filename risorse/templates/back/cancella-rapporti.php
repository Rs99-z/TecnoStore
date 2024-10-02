<?php require_once("../../config.php"); 

if (isset($_GET['id'])) {

    $cancellaRapporti = query("DELETE FROM rapporti WHERE id_ordine = $_GET[id] ");
    conferma($cancellaRapporti);

    creaAvviso('Hai cancellato correttamente un Rapporto');
    header("Location: ../../../public/admin/index.php?prodotti-admin");
} else {
    header("Location: ../../../public/admin/index.php?prodotti-admin");
}
