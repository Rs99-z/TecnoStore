<?php aggiungi_cat_admin(); ?>
<hr>
<div class="container">
    <h1 style="color: red; text-align:center;">Aggiungi una nuova categoria di prodotti</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" style="margin-top:40px; margin-left:60px; margin-right:60px;">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nome">Nome della nuova categoria</label>
                    <input type="text" name="nome_cat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dettagli">Dettagli della categoria</label>
                    <textarea name="descr_breve" cols="30" rows="8" class="form-control" id="editor1"></textarea>
                    <!-- editor 1 -->
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <div class="form-group" style="display: flex; justify-content:right;">
                    <label for="immagine">Immagine</label>
                    <input type="file" name="immagine">
                </div>
                <div class="form-group">
                    <input type="submit" name="aggiungi_cat" class="btn btn-success btn-lg" value="Aggiungi Categoria">
                </div>
            </div>
        </div>
    </form>
</div> 