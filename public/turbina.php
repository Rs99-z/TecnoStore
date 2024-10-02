<?php
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>
<hr>
<h1 style="color: red; justify-content: center; display: flex; margin-top: 15px;">Turbine eoliche</h1>
<hr>
<div class="contenitore" style="display: flex; flex-wrap:wrap; justify-content:center">
    <?php prodotti(); ?>
</div>
<hr>
<?php
include(FRONT_END . DS . "footer.php");
?>