<?php
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>
<div class="immagine_sfondo_ecommerce">
    <h2 class="card-title1">TecnoStore</h2>
    <p class="card-text1">Siamo una azienda che offre una vasta scelta di componenti per il tuo impanto fotovltaico
        off-grid. <br> Leader nel settore dal 1980</p>
</div>
<!-- card 1 -->

<style>
    .immagine_sfondo_ecommerce {
    background-image: url(../risorse/img/pannelli-solari.webp);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    padding: 8%;
    text-align: center;
    margin-top: 10px;
}
</style>
<div class="card-box" style="display: flex;justify-content: center; background-color:gold; ">

    <div class="card" style="width: 18rem;">
        <img src="../risorse/img/pagamento_s.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"></p>Pagamenti in totale sicurezza e autonomia
        </div>
    </div>
    <!-- card 2 -->
    <div class="card" style="width: 18em;">
        <img src="../risorse/img/306a4cf3901449f7eb25d684970ff3d3.jpg" class="" alt="...">
        <div class="card-body">
            <p class="card-text">I nostri punti vendita sono attivi in tutta Italia</p>
        </div>
    </div>
    <!-- card 3 -->
    <div class="card" style="width: 18em;">
        <img src="../risorse/img/immagine-corriere.jpg" class="" alt="...">
        <div class="card-body">
            <p class="card-text">Le nostre spedizioni sono molto attive in tutta Italia </p>
        </div>
    </div>
    <!-- card 4 -->
    <div class="card" style="width: 18em;">
        <img src="../risorse/img/da-balcone.jpg" class="" alt="...">
        <div class="card-body">
            <p class="card-text">Abbiamo anche a disposizione gli impianti da balcone</p>
        </div>
    </div>
</div>

<hr>

<div class="alert alert-secondary" role="alert">
    <p style="justify-content: center; font-size: 30px; display: flex; flex-wrap: wrap;">
        Per ordini superiori a 100€ la spedizione è gratuita su tutti i prodotti
    </p>
</div>
<hr>
<!-- lista prodotti -->
<div class="cat-pdt">
    <h3>I NOSTRI PRODOTTI</h3>
</div>
<br>
<hr>
<!-- prodotto 1 -->
<div id="Card-P" class="Card1">
<?php categorie1() ?>
<?php categorie2() ?>
<?php categorie3() ?>
<?php categorie4() ?>
<?php categorie5() ?>
<?php categorie6() ?>
<?php categorie7() ?>
<?php categorie8() ?>
</div>

<?php
include(FRONT_END . DS . "footer.php");

?>