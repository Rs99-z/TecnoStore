<?php
require_once("../risorse/config.php");


//blocco di codice per aggiungere prodotti al carrello
if (isset($_GET['add'])) {

    $controllaQuantita = query("SELECT * FROM ricerca WHERE id_pdt= {$_GET['add']}");
    conferma($controllaQuantita);

    while ($row = fetch_array($controllaQuantita)) {

        //controlla la quantità del prodotto (se disponibile)
        if ($row['quantita'] != $_SESSION['prodotto_' . $_GET['add']]) {

            //apro una sessione per il prodotto che si va ad aggiungere al carrello
            $_SESSION['prodotto_' . $_GET['add']] += 1;
            header('Location: checkout.php');
        }else {
            creaAvviso("Spiacenti, avevamo solo " .  $row['quantita'] . " " .  $row['nome_pdt'] . " ancora disponibili");
            header('Location: checkout.php');
        }
    }
}

//funzione per rimuovbere i prodotti dal carrello
if (isset($_GET['remove'])) {
    //invoco la sessione del prodotto a cui applico il decremento
    $_SESSION['prodotto_' . $_GET['remove']] -= 1;

    //unset resetta i valori della sessione
    //unset vanno ad aggiornare la quantà del prodotto e il prezzo finale
    unset($_SESSION['totale']); //tot. importo prezzo carrello
    unset($_SESSION['quantita_art']); //tot. nr. articoli del carrello
    header('Location: checkout.php');
}

//funzione per eliminare prodotti dal carrello
if (isset($_GET['delete'])) {
    $_SESSION['prodotto_' . $_GET['delete']] = 0;
    unset($_SESSION['totale']); //tot importo prezzo carrello
    unset($_SESSION['quantita_art']); //tot nr articoli del carrello
    header('Location: checkout.php');
}


function carrello()
{
    //il carrello inizia da zero
    $totaleOrdine = 0; //importo iniziale dell'ordine
    $totArticoli = 0; //quantià to. iniziale degli articoli nel carrello

    //variabili fornite da paypal
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    /*uso un foreach per isolare parti dell'elemento che voglio
     utilizzare per estrapolare il value dal name, ossia per prendere
      il numero di prodotto escludendo la parola prodotto */
    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {
            //substring estrae un valore compreso nell'intervallo
            if (substr($name, 0, 9) == 'prodotto_') { //prodotto_2. é il nome del prodotto dopo underscore c'è il numero del prodotto dinamico
                //misura la lunghezza della stringa
                $lungStringa = strlen($name);

                //estrazione della sotto stringa
                $id = substr($name, 9, $lungStringa);

                $prodotti = query("SELECT * FROM ricerca WHERE id_pdt = {$id}");
                conferma($prodotti);

                while ($row = fetch_array($prodotti)) {
                    $importo = $row['prezzo'] * $value; //prezzo unit. * quantità pdt
                    $totArticoli += $value;

                    $prodottoCarrello = <<<STRINGA
                    <style>
                    .block { text-align:center;
                    display:block;
                    
                    }
                    
                    </style>
                    <tr style="text-align:center; background-color: white;">
    <td style="width:10rem;"><img class="card-img-top img-card" src="../risorse/img/{$row['immagine']}" alt=""></td>
    <td>{$row['nome_pdt']}</td>
    
    
    <div>
        <td class='block'><a class="btn btn-success" href="carrello.php?add={$row['id_pdt']}" role="button">Aggiungi</td>
        <td class='block'><a class="btn btn-warning" href="carrello.php?remove={$row['id_pdt']}" role="button">Rimuovi</a></td>
        <td class='block'><a class="btn btn-danger" href="carrello.php?delete={$row['id_pdt']}" role="button">Cancella</a> </td>
    </div>

    </tr>
    <div>
    <th>Quantità prodotto: $value</th>
    <th style="font-size:25px;">Importo Totale:$importo</th>
    </div>
    
    
    


STRINGA;

                    echo $prodottoCarrello;
                    //incremento delle variabili di paypal
                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }
                //apro una sessione per il totale degli ordini
                $_SESSION['totale'] = $totaleOrdine += $importo;

                //apro una sessione per il totale quantità articoli
                $_SESSION['quantita_art'] = $totArticoli;
            }
        }
    }
}