<?php
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>

<?php
// Recupera l'ID del prodotto dalla query string
$id_pdt = $_GET['id'];

// Query per selezionare i dettagli del prodotto
$singlePdt = query("SELECT * FROM ricerca WHERE id_pdt  = {$id_pdt}");
conferma($singlePdt);

// Estrazione delle righe della tabella
while ($row = fetch_array($singlePdt)) :
?>

  <!-- struttura del prodotto -->
  <div class="box_prodotto" style="margin-top: 6%;">
    <div class="card_prodotto" style="text-align:left; display:flex; justify-content:space-evenly;">
      <img style="width:20rem;" class="card-img-top" src="../risorse/img/<?php echo $row['immagine']; ?>" alt="">
      <div class="card-body-prodotto">
        <h3 class="card-title text-center"><?php echo $row['nome_pdt']; ?></h3>
        <hr>
        <p class="card-text-prodotto"><?php echo $row['info_dettagliate']; ?></p>
        <hr>
        <h4>€ <?php echo $row['prezzo']; ?></h4>
        <a href="carrello.php?add=<?php echo $row['id_pdt']; ?>">
          <button type="button" class="btn bg-primary btn-small btn-block">Acquista</button>
        </a>
        <a href="carrello.php?add=<?php echo $row['id_pdt']; ?>">
          <button type="button" class="btn btn-small btn-block">Aggiungi al carrello</button>
        </a>
      </div>
    </div>
    <div class="card_prodotto card-outline-secondary my-4">
      <div class="descrizione_sotto_prodotto">
        <p><?php echo $row['']; ?></p>
      </div>
    </div>
  </div>
  <!-- /.card -->
   
  <!-- /.col-lg-9 -->
<?php endwhile ?>

<?php
include(FRONT_END . DS . "footer.php");
?>