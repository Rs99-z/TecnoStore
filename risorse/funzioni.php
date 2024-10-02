<?php
//FUNZIONI DI UTILITà GENERALE

//stabilisci un percorso per i tuoi uploads
$cartellaImg = 'risorse/img';

//crea una funzione per le operazioni CRUD sul DB

function query($sql)
{
  global $connessione; //global serve per rendere globale una variabile
  return mysqli_query($connessione, $sql);
}

//crea una funzione per la gestione degli errori di connessione

function conferma($risultato)
{
  global $connessione;
  if (!$risultato) {
    die('Richiesta fallita' . mysqli_error($connessione));
  }
}

//crea una funzione per ciclare l'array e ricavare dati dal DB
function fetch_array($risultato)
{
  return mysqli_fetch_array($risultato);
}

//crea una funzione per la gestione dei messaggi

function creaAvviso($msg)
{
  if (!empty($msg)) {
    $_SESSION['messaggio'] = $msg;
  } else {
    $msg = ' ';
  }
}

//creo una funzione per mostrare un messaggio all'interno di una pagina

function mostraAvviso()
{
  if (isset($_SESSION['messaggio'])) {
    echo $_SESSION['messaggio'];
    unset($_SESSION['messaggio']); //reset del messaggio
  }
}

//crea una funzione per ricavare e mostrare il risultato dell'ultima sessione avviata

function idUltimo()
{
  global $connessione;
  return mysqli_insert_id($connessione);
}

//crea una funzione per gestire il percorso della cartella delle immagini

function mostraImg($imgProdotto)
{
  global $cartellaImg;
  return $cartellaImg . DS . $imgProdotto;
}

//FUNZIONI DEL <FRONT-END>____________________________________________

//crea una funzione per mostrare i prodotti nell'home del sito (pagina-index.php)
//turbina eolica
function prodotti()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 13 AND 20');

  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA
    <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>

  STRINGA;
    echo $prodotti;
  }
}
//inverrter ibridi
function prodotti2()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 39 AND 47');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//wall  box
function prodotti3()
{
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 48 AND 50');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
  STRINGA;
    echo $prodotti;
  }
}
//cavi
function prodotti4()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 36 AND 38');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//pannelli solari
function prodotti5()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 21 AND 29');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//micro-inverter
function prodotti6()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 51 AND 53');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//batteria
function prodotti7()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 1 AND 12');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//kit completo
function prodotti8()
{
  //query
  $ricercaPdt = query('SELECT * FROM ricerca WHERE id_pdt BETWEEN 30 AND 35');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h4><a  class= 'title' href="prodotto.php?id={$row['id_pdt']}">{$row['nome_pdt']}</a></h4>
            <p class="card-text">{$row['descr_breve']}</p>
            <h5 class="card-title">€{$row['prezzo']}</h5>
            <a href="carrello.php?add={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Acquista</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}

function categorie()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card" style="width: 18rem;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center mb-5">{$row['nome_pdt']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="turbina.php"><button type="button" class="btn btn-primary">Corri a vedere!</button></a>
        </div>
    </div>
 
  STRINGA;
    echo $prodotti;
  }
}
//creo una fiunzione per la index cateegorie ogni card una funzione
function categorie1()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (1)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="turbina.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
        </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie2()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (2)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="inverterIB.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>

        </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie3()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (3)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
        <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
             <p class="card-text">{$row['descr_breve']}</p>
            <a href="wall-box.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>

        </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie4()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (4)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="Cavi.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
          </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie5()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (5)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem;margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="pannelli-solari.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
          </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie6()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (6)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid;">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="micro-inverter.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
          </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie7()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (7)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem; margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;" class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="batterie.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
          </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}

function categorie8()
{
  //query
  $ricercaPdt = query('SELECT * FROM categorie WHERE id_pdt IN (8)');
  conferma($ricercaPdt);

  while ($row = fetch_array($ricercaPdt)) {
    //echo $row['nome_prodotto'];

    //heredoc: per inserire html in php

    $prodotti = <<<STRINGA

  <div class="card_ecommerce  big" style="width: 18rem;margin:5% 5% 5% 0; border:1px solid">
        <img src="../risorse/img/{$row['immagine']}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 style="color:blue;"class="card-title text-center mb-5">{$row['nome_cat']}</h3>
            <p class="card-text">{$row['descr_breve']}</p>
            <a href="kit.php?id={$row['id_pdt']}"><button type="button" class="btn btn-primary btn-small">Corri vai a vedere!</button></a>
          </div>
  </div>

 
  STRINGA;
    echo $prodotti;
  }
}
//barra di ricerca 
function ricerca()
{
  if (isset($_POST['invia_ricerca'])) {
    $ricercaUtente = $_POST['ricerca'];

    $ricerca = query("SELECT * FROM ricerca WHERE nome_pdt  LIKE '%$ricercaUtente%'");
    conferma($ricerca);
  }
  $risultatoRicerca = mysqli_num_rows($ricerca);
  if ($risultatoRicerca == 0) {
    echo 'Non ci sono prodotti';
  } else {
    while ($row = fetch_array($ricerca)) {
      $mostraRicerca = <<<CARD_RICERCA
      
      <div class="card mt-4 card_ricerca_prodotto">
  <img class="card-img-top img-fluid" style="width:30rem;" src="../risorse/img/{$row['immagine']} " alt="">
  <div class="card-body">
    <h3 class="card-title text-center mb-5">{$row['nome_pdt']}</h3>
    <h4 class="mb-5">€{$row['prezzo']}</h4>
    <h5>Info</h5>
    <p class="card-text">{$row['descr_breve']}</p>
  </div>
  </div>
  <div class="card card-outline-secondary my-4 card_ricerca_prodotto ">
  <div class="card-header ">
    <h5>Descrizione dettagliata</h5>
  </div>
  <div class="card-body">
    <p>{$row['info_dettagliate']}</p>
  </div>
  <div class = "box_button_prodotto">
  <button type="button" class="btn bg-primary btn-block btn_prodotti">Acquista</button>
  <button type="button" class="btn  btn_prodotti btn-block">Aggiungi al carrello</button>
  </div>
  </div>

  
  CARD_RICERCA;

      echo $mostraRicerca;
    }
  }
}
//creo una funzione per il login
function login()
{
  if (isset($_POST['login'])) { //verifica se esiste il pulsante login
    $username = $_POST['username']; //preleva i dati scritti nei campi
    $password = $_POST['password'];

    //query
    $login = query("SELECT * FROM utenti WHERE username = '{$username}' AND password = '{$password}'");
    conferma($login);

    //estrqazione dati dal DB
    while ($row = fetch_array($login)) { //estrai tutti i dati 
      $idUtente = $row['id_utente'];
      $nomeUtente = $row['username'];
      $passUtente = $row['password'];
      //ruolo
      $ruoloUtente = $row['ruolo'];
    }

    //si apre la sessione per l'utente verificato
    if ($username === $nomeUtente && $password === $passUtente) {

      //apertura sessioni
      $_SESSION['id_utente'] = $idUtente;
      $_SESSION['username'] = $nomeUtente;
      $_SESSION['password'] = $passUtente;
      //sessioni per il ruolo
      $_SESSION['ruolo'] = $ruoloUtente;

      //reindirizzamento
      header("Location: admin/index.php?prodotti-admin"); //recirect per admin
    } else {
      header("Location: areariservata.php"); //redirecto per user
    }

    if (mysqli_num_rows($login) == 0) {
      creaAvviso('i dati di login sono errati');
      header('Location: login.php');
    }
  }
}

//FUNZIONI DEL <BACK-END>

function prodottiAdmin()
{
  $mostraPdt = query("SELECT * FROM ricerca");
  conferma($mostraPdt);

  while ($row = fetch_array($mostraPdt)) {

    $pdt_in_admin = <<<STRINGA
 

    <tr>
<td>{$row['id_pdt']}</td>
<td>{$row['nome_pdt']}</td>
 <td><img src="../../risorse/img/{$row['immagine']}" alt="" style="width:5rem;"></td>
<td style="text-align:center;">{$row['cat_pdt']}</td>
<td style="text-align:center;">€{$row['prezzo']}</td>
<td style="text-align:center;">{$row['quantita']}</td>
<td><a class="btn btn-primary" href="index.php?aggiorna-pdt&id={$row['id_pdt']}" role="button">Modifica</a>
<td><a class="btn btn-danger" href="../../risorse/templates/back/cancella-pdt.php?id={$row['id_pdt']}" role="button">Cancella</a></td>
</tr>

 
STRINGA;
    echo $pdt_in_admin;
  }
}
//crea una funzione per mostrare il titolo della categoria del prodotto selezionato
function titoloCat($nome_cat)
{
  $titoloCat = query("SELECT * FROM categorie WHERE id_cat = '{$nome_cat}' ");
  conferma($titoloCat);
  while ($row = fetch_array($titoloCat)) {
    return $row['nome_cat'];
  }
}

//crea una funzione per mostrare e selezionare la categoria del prodotto dal form (aggiungi-pdt.php)
function aggiungiPdt()
{
  if (isset($_POST['aggiungi'])) {


    $nomePdt = $_POST['nome_pdt'];
    $catPdt = $_POST['cat_pdt'];
    $dettagli = $_POST['info_dettagliate'];
    $infoBreve = $_POST['descr_breve'];
    $prezzo = $_POST['prezzo'];
    $quantitaPdt = $_POST['quantita'];
    //immagine
    $immaginePdt = $_FILES['immagine']['name']; //nome del file immagine
    $immagineTemp = $_FILES['immagine']['tmp_name']; //immagine temporanea. Prepariamo l'immagine


    //caricamento effettivo dell'immagine
    move_uploaded_file($immagineTemp, IMG_UPLOADS . DS . $immaginePdt);


    $nuovoPdt = query("INSERT INTO ricerca (nome_pdt , cat_pdt , info_dettagliate , descr_breve , prezzo , quantita , immagine) VALUES('{$nomePdt}' , '{$catPdt}' , '{$dettagli}', '{$infoBreve}' , '{$prezzo}' , '{$quantitaPdt}' , '{$immaginePdt}')");
    conferma($nuovoPdt);
    creaAvviso('Hai aggiunto correttamente un prodotto');
    header('Location:index.php?prodotti-admin');
  }
}
// crea una funzione per mostrare e selezionare la categoria del prodotto
function mostra_cat_prodotto()
{
  $query = query("SELECT * FROM categorie");
  conferma($query);


  while ($row = fetch_array($query)) {


    $cat_prodotto =
      <<<STRINGA
  <option value="{$row['id_cat']}">{$row['nome_cat']}</option>
  STRINGA;
    echo $cat_prodotto;
  }
}



//creo la funzione per aggiornare il prodotto dentro admin
function aggiornaProdotto()
{
  if (isset($_POST['aggiorna'])) {

    $nomePdt = $_POST['nome_pdt'];
    $catPdt = $_POST['cat_pdt'];
    $dettagli = $_POST['info_dettagliate'];
    $infoBreve = $_POST['descr_breve'];
    $prezzo = $_POST['prezzo'];
    $quantitaPdt = $_POST['quantita'];
    //immagine
    $immaginePdt = $_FILES['immagine']['name']; //nome del file immagine
    $immagineTemp = $_FILES['immagine']['tmp_name']; //immagine temporanea. Prepariamo l'immagine


    if (empty($immaginePdt)) {


      $cercaImg = query("SELECT immagine FROM prodotti WHERE id_pdt = {$_GET['id']}");
      conferma($cercaImg);

      while ($img = fetch_array($cercaImg)) {
        $immaginePdt = $img['immagine'];
      }
    }

    move_uploaded_file($immagineTemp, IMG_UPLOADS . DS . $immaginePdt); //caricamento effettivo dell'immagine


    $update = query("UPDATE prodotti SET nome_pdt = '{$nomePdt}' , cat_pdt = '{$catPdt}' , info_dettagliate = '{$dettagli}' , descr_breve = '{$infoBreve}' , prezzo = '{$prezzo}' , quantita = '{$quantitaPdt}' , immagine = '{$immaginePdt}' WHERE id_pdt = {$_GET['id']}");


    conferma($update);
    creaAvviso('Hai modificato correttamente un prodotto');
    header('Location:index.php?prodotti-admin');
  }
}


//creo una funzione per mostrare le categorie nel lato amministrativo (categorie-admin.php)
function categorie_admin()
{
  $catMostra = query("SELECT * FROM categorie");
  conferma($catMostra);

  while ($row = fetch_array($catMostra)) {

    $catId = $row['id_cat'];
    $catTitolo = $row['nome_cat'];
    $didascalia = $row['didascalia'];

    $cat_admin = <<<STRINGA
    <tr>
    <td>{$catId}</td>
    <td>{$catTitolo} </td>
    
    <td>{$didascalia} </td>
    
    <td><a class="btn btn-danger" href="../../risorse/templates/back/cancella-cat.php?id={$row['id_cat']}" role="button">Cancella</a> </td>
    </tr>
    STRINGA;
    echo $cat_admin;
  }
}
//crea una funzione per aggiungere una categoria (categoria-admin.php)
function aggiungi_cat_admin()
{
  if (isset($_POST['aggiungi_cat'])) {
    $nomeCat = $_POST['nome_cat'];
    //verificare
    $didascaliaCat = $_POST['descr_breve'];
    if (empty($nomeCat) || $nomeCat = " ") {
      echo 'Questo campo non puo essere vuoto';
    } else {
      $nuovoCat = query("INSERT INTO categorie (nome_cat, descr_breve) VALUES('{$nomeCat}','{$didascaliaCat}') ");
      conferma($nuovoCat);
      creaAvviso('hai aggiunto una categoria');
    }
  }
}
//creo una funzione per mostrare i rapporti
function Rapporti()
{
  $mostra_rapporti = query("SELECT * FROM rapporti");

  conferma($mostra_rapporti);

  while ($row = fetch_array($mostra_rapporti)) {

    $idRapporto = $row['id_rapporto'];
    $id_Pdt = $row['id_pdt'];
    $idOrdine = $row['id_ordine'];
    $statusOrdine = $row['status_ordine'];

    $rapportiM = <<<STRINGA
     <tr>
            <td>{$row['id_rapporto']}</td>
            <td>{$row['id_pdt']}</td>
            <td>{$row['id_ordine']}</td>
            <td>{$row['status_ordine']}<br>
                <div class="form-group">
                    <input type="submit" name="cancella-rap" class="btn btn-dark" value="Cancella">
                </div>
            </td>
        </tr>
    STRINGA;
    echo $rapportiM;
  }
}

//creo una funzione per mostrare in una tabella gli ordini 
function ordini()
{
  $mostra_ordini = query("SELECT * FROM ordini");
  conferma($mostra_ordini);
  while ($row = fetch_array($mostra_ordini)) {
    $id_ordine = $row['id_ordine'];
    $importo_Ordine = $row['importo_ordine'];
    $num_ordine = $row['num_ordine'];
    $statusOrdine = $row['status_ordine'];
    $Cur_Ordine = $row['cur_ordine'];
    $ordineM = <<<STRINGA
  <tr>
         <td>{$row['id_ordine']}</td>
         <td>{$row['importo_ordine']}</td>
         <td>{$row['num_ordine']}</td>
         <td>{$row['status_ordine']}</td>
         <td>{$row['cur_ordine']}<br>

             <div class="form-group">
                 <input type="submit" name="cancella-ord" class="btn btn-dark" value="Cancella">
             </div>
         </td>
     </tr>
 STRINGA;
    echo $ordineM;
  }
}
