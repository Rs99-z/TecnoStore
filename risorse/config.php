<?php
ob_start();
//La ob_start()funzione crea un buffer di output. È possibile passare una funzione di callback per eseguire l'elaborazione del contenuto del buffer prima che venga scaricato dal buffer. I flag possono essere utilizzati per consentire o limitare ciò che il buffer è in grado di fare.

//BUFFER: area di memoria temporanea (letteralmente «tampone»,) utilizzata generalmente per l'input/output dei dati. In un b. si memorizzano dati che verranno successivamente trasmessi a unità di elaborazione o dati che devono essere scambiati con un dispositivo esterno.

session_start();
//session_destroy();

//DEFINIRE COSTANTI
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR); //nomeCartella/nomeSttoCartella/nomeFile.xxx

defined('FRONT_END') ? null : define('FRONT_END', __DIR__ . DS . 'templates/front'); //risorse/template/front. __DIR__ significa directory, è una costante che mi da il percorso del file
defined('BACK_END') ? null : define('BACK_END', __DIR__ . DS . 'templates/back'); //risorse/template/back  DIR  serve per richiamare la cartella principale
defined('IMG_UPLOADS') ? null : define('IMG_UPLOADS', __DIR__ . DS . 'img'); //risorse/immagini
//echo IMG_UPLOADS;

//configurare database

define('DB_HOST', 'localhost'); //in locale è localhost, in remoto viene dato dal hosting
define('DB_UTENTE', 'root');//user
define('DB_PASSWORD', 'root');
define('DB_NOME', 'db_esame'); //define('DB_NOME, 'ecommerce')


//connessione al db
$connessione = mysqli_connect(DB_HOST, DB_UTENTE, DB_PASSWORD, DB_NOME);
//$connessione = new mysqli(DB_HOST, DB_UTENTE, DB_PASSWORD, DB_NOME); //posso decidere quale usare

//verifica della connessione
if(!$connessione){
    echo 'Non sei connesso';
} 


require_once('funzioni.php');



//$connessione -> close();