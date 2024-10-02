<?php
if (isset($_GET['id'])) {
    //selezione dei dati della tabella
    $query = query("SELECT * FROM prodotti WHERE id_pdt= {$_GET['id']} ");

    while ($row = fetch_array($query)) {

        $nomePdt = $row['nome_pdt'];
        $cat_prodotto =  $row['cat_pdt'];
        $dettagli = $row['info_dettagliate'];
        $infoBreve = $row['descr_breve'];
        $prezzo =  $row['prezzo'];
        $quantitaPdt = $row['quantita'];
        $immaginePdt = $row['immagine'];

        $immaginePdt = mostraImg($row['immagine']);
    }
    aggiornaProdotto();
}
?>

<div class="container">
    <div>
        <h3 class="page-header">Modifica un prodotto</h3>
    </div>
    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nome">Nome </label>

                    <!-- mostra nome del prodotto -->
                    <input type="text" name="nome_pdt" class="form-control" value="
                    <?php echo $nomePdt; ?>
                    ">
                </div>
                <div class="form-group">
                    <label for="info_dettagliate">Descrizione dettagliata</label>
                    <textarea name="info_dettagliate" cols="30" rows="8" class="form-control" id="editor1">

                        <!-- mostra dettagli -->
        <?php echo $dettagli; ?>
    </textarea>
                    <!-- editor  -->
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>

                <div class="form-group">
                    <label for="info">descrizione breve</label>
                    <textarea name="descr_breve" cols="30" rows="3" class="form-control" type="text" id="editor2">
<!-- mostra info breve -->
    <?php echo $infoBreve; ?>
</textarea>
                    <!-- editor  -->

                    <script>
                        CKEDITOR.replace('editor2');
                    </script>
                </div>
            </div><!--fine col-8-->

            <div class="col-md-4">

                <div class="form-group">
                    <label for="prezzo">Prezzo</label>

                    <!-- mostra prezzo -->
                    <input type="number" name="prezzo" class="form-control" step=".01" min="0" value="
                    <?php echo $prezzo; ?>
                    ">
                </div>
                <div class="form-group">
                    <label for="categoria">Categorie</label>
                    <select name="cat_pdt" class="form-control">

                        <option value=""><?php $catpdt ?></option>
                        <option value="">

                            <!-- titolo categoria (testo mostrato) -->
                            <?php echo titoloCat($catPdt); ?>
                        </option>

                        <?php mostra_cat_prodotto(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantita">Quantità</label>

                    <!-- mostra quantità -->
                    <input type="number" name="quantita" class="form-control" min="0" value="<?php echo $quantitaPdt; ?>">

                </div>

                <div class="form-group">
                    <label for="immagine">Immagine</label>
                    <input type="file" name="immagine">

                    <!-- mostra immagine -->
                    <img width="100" src="../../risorse/
                    <?php echo $immaginePdt; ?>"  alt="">
                </div>

                <div class="form-group">
                    <input type="submit" name="aggiorna" class="btn btn-success btn-lg" value="Aggiorna">

                </div>

            </div>
        </div>
        <!--fine col-4-->

    </form>
</div><!--contenuto-->