<h3 class="mt-5" style="text-align: center; color:red; font-size:40px;">Tabella prodotti</h3>

  
  
  <?php mostraAvviso();  ?>
<table class="table table-borderedv">
    <thead>
      <tr>
           <th>Id</th>
           <th>Titolo</th>
           <th>Immagine</th>
           <th>Categoria</th>
           <th>Prezzo</th>
           <th>Magazzino</th>
     
      </tr>
    </thead>
    <tbody>
    
    <?php prodottiAdmin(); 
    ?>
      
          <!--  <td>20</td>
             <td>Nikon 234  

              <img src="http://placehold.it/62x62" alt="">
            </td>
            <td>Categoria</td>
            <td>€123</td>
            <td>4</td>
        </tr>  -->
  </tbody>
</table>