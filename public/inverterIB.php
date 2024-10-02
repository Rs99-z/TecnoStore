<?php
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>
    <hr>
    <h1 style="display: flex;justify-content: center; color: red;">I nostri Inverter Ibridi</h1>
    <hr>

    <div class="contenitore" style="display: flex; flex-wrap:wrap; justify-content:center">
    <?php prodotti2(); ?>
    </div>
<hr>

    <?php
include(FRONT_END . DS . "footer.php");
?>