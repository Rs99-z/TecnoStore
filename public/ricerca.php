<?php
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>

<div class="prodotti_ricercati">
            <?php ricerca(); ?>
            </div>

</div>

<?php
include(FRONT_END . DS . "footer.php");
?>