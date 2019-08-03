<header class="w3-container" style="padding-top:22px">
    <h5>Converti una valuta:</h5>
</header>
<div class="w3-container">
    <input type="number" id="valore-iniziale" placeholder="1" required>
    <select class="w3-select currency-selector" id="select-currency-first"></select>
    <p>corrispondono a:</p>
    <input type="number" id="valore-finale" readonly>
    <select class="w3-select currency-selector" id="select-currency-last"></select>
    <br>
    <input type="button" class="w3-btn w3-light-gray" id="button-converti" value="Converti">
</div>

<script type="text/javascript">
    var xmlhttp = new XMLHttpRequest();
    var url = "../../data/valute.json";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var jsonResponseData = JSON.parse(this.responseText).valute;
            console.log(jsonResponseData.length);
            for (i = 0; i < jsonResponseData.length; i++) {
                $('#select-currency-first').html(
                    $('#select-currency-first').html() +
                    '<option value="' + jsonResponseData[i].abbreviazione + '">' + jsonResponseData[i].nome + ' (' + jsonResponseData[i].abbreviazione + ')' + '</option>'
                );
                $('#select-currency-last').html(
                    $('#select-currency-last').html() +
                    '<option value="' + jsonResponseData[i].abbreviazione + '">' + jsonResponseData[i].nome + ' (' + jsonResponseData[i].abbreviazione + ')' + '</option>'
                );
            }
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
</script>
