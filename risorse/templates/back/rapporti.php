<h3 class="mt-5" style="text-align: center; color:red; font-size:40px; margin:3%;">Tabella dei Rapporti</h3>
  
  <?php mostraAvviso();  ?>
<table class="table table-borderedv">
    <thead>
      <tr>
           <th>id_rapporto</th>
           <th>id_pdt</th>
           <th>id_ordine</th>
           <th>status_ordine</th>
            
 
     </tr>
    </thead>
     <tbody>
    
    <?php $mostra_rapporti(); 
    ?>

  </tbody>
</table>