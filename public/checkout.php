<?php
require_once("../risorse/config.php");
require_once('carrello.php'); //contiene le funzioni per la gestione del carrello
include(FRONT_END . DS . 'header.php');

?>




<!-- Page Content -->
<div class="container">
    <!-- /.row -->
    <h1 class="text-center my-5">Il tuo ordine</h1>
    <h5 class="bg-warning text-center text-white">

        <!-- mostra avviso funzione -->

        <?php mostraAvviso(); ?>
    </h5>

    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 m-auto">
            <!-- campi di paypal -->
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="simo.tocci-facilitator@gmail.com">
                <input type="hidden" name="charset" value="utf-8">
                <input type="hidden" NAME="currency_code" value="EUR">
                <!-- campi di paypal/ -->
                <table class="table table-striped">
                    <thead>
                        <style>
                            @media(max-width:1000px) {
                                .prodotto {
                                    border: 1px solid;
                                }
                            }
                        </style>
                        <tr style="text-align:center;">
                            <th>Prodotto</th>
                            <th>Descrizione</th>

                            <th>Modifica</th>
                            <a href="index.php"></a>
                            <a href="index.php" type="button" class="btn btn-success" style="margin: 2%;">Continua ad acquistare</a>
                            
                        </tr>

                    <tbody>

                        <?php carrello(); ?>
                    </tbody>
                </table>

            </form>

            </form>
        </div>
    </div>


    <div class="row mt-5 text-center">
        <div class="col-5 ">
            <h2>Riepilogo ordine</h2>

            <table class="table table-bordered" cellspacing="0">

                <tr class="cart-subtotal">
                    <th>Articoli:</th>
                    <td>
                        <span class="amount">

                            <!-- quantità articoli -->
                            <?php
                            echo isset($_SESSION['quantita_art']) ?  $_SESSION['quantita_art']  : $_SESSION['quantita_art'] = '0'; //verifica se è stata aperta una sessione per la quantità dell'articolo, se si invoca la sessione sulla quantità altrimenti è uguale a zero
                            ?>
                        </span>
                    </td>
                </tr>
                <tr class="shipping">
                    <th>Spedizione</th>
                    <td>Gratuita</td>
                </tr>

                <tr class="order-total">
                    <th>Totale ordine</th>
                    <td><strong>
                            <span class="amount">€
                                <!-- importo tot. articoli -->
                                <?php
                                echo isset($_SESSION['totale']) ?  $_SESSION['totale']  : $_SESSION['totale'] = '0';
                                ?>
                            </span>
                        </strong>
                    </td>
                </tr>
                <!-- </tbody>-->

            </table>
            <!-- PULSANTE PAYPAL fornito da paypal -->
            <div>
                <input type="hidden" name="upload">
                <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" name="submit" alt="paga subito">
                <img alt="" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
            </div>
        </div>
    </div>
</div>
</div>

<?php include(FRONT_END . DS . 'footer.php'); ?>