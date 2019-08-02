<header class="w3-container" style="padding-top:22px">
    <h5>Converti una valuta:</h5>
</header>
<div class="w3-container">
    <input type="number" id="valore iniziale" placeholder="1" required>
    <select class="w3-select currency-selector" id="select-currency-first"></select>
</div>

<script type="text/javascript">
    var xmlhttp = new XMLHttpRequest();
    var url = "../../data/valute.json";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var jsonResponseData = JSON.parse(this.responseText);
            // Codice operativo...
            console.log(jsonResponseData);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();


</script>
