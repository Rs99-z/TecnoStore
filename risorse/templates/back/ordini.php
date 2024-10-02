<h3 class="mt-5" style="text-align: center; color:red; font-size:40px;margin:3%;">Tabella degli Ordini</h3>

 <?php mostraAvviso();?>

<table class="table table-borderedv">
    <thead>
      <tr>
           <th>Id_ordine</the=>
           <th>importo_ordine</the=>
           <th>numero_ordine</th>
           <th>status_ordine</th>
           <th>cur_ordine</th>
     </tr>
    </thead>
    <tbody>
    
    <?php $mostra_ordini(); 
    ?>
</tbody>
</table>