<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home - Finance Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/w3.css">
        <link rel="stylesheet" href="../css/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../js/app.js"></script>
    </head>
    <body>

        <section id="andamento-generale" class="w3-container">
            <h2 class="w3-container">Andamento generale</h2>
            <div class="w3-container">
                <h4>1 Euro corrisponde a:</h4>
                <div id="home-usd" class="w3-panel w3-pale-green">
                    <h4>n Dollari</h4>
                </div>
                <div id="home-gbp" class="w3-panel w3-pale-blue">
                    <h4>n Sterline</h4>
                </div>
                <div id="home-chf" class="w3-panel w3-pale-green">
                    <h4>n Franchi svizzeri</h4>
                </div>
            </div>
        </section>

        <section id="effettua-conversione" class="w3-container">
            <h2 class="w3-container">Effettua una conversione</h2>
            <div id="modal-alert" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-red">
                        <span onclick="document.getElementById('modal-alert').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <h2>Attenzione!</h2>
                    </header>
                    <div id="modal-alert-content" class="w3-container"></div>
                </div>
            </div>
            <form class="w3-container">
                <div class="w3-row">
                    <div class="w3-col s4 w3-left">
                        <input type="number" id="valore-iniziale" data-valore-iniziale value="1">
                    </div>
                    <div class="w3-col s4 w3-left" id="currency-init"></div>
                    <div class="w3-col s4 w3-left">
                        <input type="button" id="converti-button" value="Converti">
                    </div>
                </div>
                <br>
                <div class="w3-row">
                    <div class="w3-col s4 w3-left">
                        <input type="number" id="valore-finale" data-valore-finale readonly value="">
                    </div>
                    <div class="w3-col s4 w3-left">
                        <div class="w3-col s4 w3-left" id="currency-final"></div>
                    </div>
                </div>
            </form>
        </section>

        <footer class="w3-container w3-black footer">
            <p class="footer-text">
                <a href="#">Home</a>&nbsp·
                <a href="../my-wallet/index.php">Il mio portafoglio</a>&nbsp·
                Powered by Matteo Figini
            </p>
        </footer>
    </body>
</html>
