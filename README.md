finance-project
===============
Un semplice e pratico portfolio per ottenere i tassi dei cambiavalute e controllare i titoli di borsa, sempre aggiornati!

Descrizione
-----------
Finance Project nasce con l'idea di creare un progetto semplice ed immediato di un proprio portafoglio personale, dove sia possibile tenere traccia dei tassi di cambio per una valuta estera o per controllare gli andamenti dei principali titoli azionari in Borsa.

Interfaccia
-----------

API
---
Per ottenere i dati dei tassi di cambio Finance Project si appoggia allo strumento gratuito ["Exchange Rates API"](https://exchangeratesapi.io/), ideato da Madis Väin.
Le richieste vengono formulate tramite una stringa URL spedita in metodo "GET": la risposta è un file JSON che può essere poi letto o interpretato dal browser: la facilità della comunicazione è dovuta anche al fatto che, essendo uno strumento gratuito, non è necessario possedere un'API Key per utilizzarlo e non ci sono limiti nel numero di richieste.

Lo strumento per ottenere i valori dei titoli finanziari si chiama ["World Trading Data"](https://www.worldtradingdata.com/). Tramite la creazione di un account gratuito è possibile ottenere un'API Key e formulare richieste in metodo "GET" per ottenere i tassi di cambio; qui, però, l'account gratuito offre un limite di 250 richieste al giorno e la possibilità di ricerca di massimo 5 titoli di borsa.
Richieste vengono fatte ad ogni ricarica della pagina (questo dovrà essere eliminato a breve, per ridurre il numero di richieste massimo) e ad ogni ricerca di titoli finanziari.
Per avere maggiori dettagli è possibile consultare il [sito](https://www.worldtradingdata.com/documentation#introduction) dedicato alle API di World Trading Data.

Framework esterni
-----------------
La parte grafica del front-end è stata realizzata mediante l'utilizzo del framework W3.CSS, liberamente scaricabile ed utilizzabile dal sito [W3School](https://www.w3schools.com/w3css/default.asp), il quale offre anche una serie di tutorials, demo ed esempi di utilizzo.

Per quanto riguarda JavaScript talvolta viene utilizzato JQuery nei casi in cui può facilitare l'esecuzione di alcuni comandi, alternato a casi in cui si preferisce utilizzare comunque JavaScript.
