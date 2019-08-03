<header class="w3-container" style="padding-top:22px">
    <h5>Cerca un titolo di borsa per simbolo o per nome:</h5>
</header>
<div class="w3-container">
    <input type="text" id="searchStock" placeholder="Es. FTSE MIB, DAX..." required>
    <input type="button" id="searchStockButton" value="Cerca">
    <div class="result-container"><br>
        <div id="number-limit-result"></div>
        <table class="w3-table w3-striped">
            <thead>
                <th>Nome</th>
                <th>Simbolo</th>
                <th>Valuta</th>
                <th>Prezzo</th>
                <th></th>
            </thead>
            <tbody id="stock-table-body">
            </tbody>
        </table>
        <br><hr>
        <div id="stock-title-link-details"></div>
    </div>
</div>

<script type="text/javascript">
    $('#searchStockButton').on('click', function() {
        let $table = document.getElementById('stock-table-body');
        let queryString = 'https://api.worldtradingdata.com/api/v1/stock_search?search_term=';
        queryString += document.getElementById('searchStock').value;
        queryString += '&search_by=symbol,name&limit=50&page=1&api_token=NwaholOJI3Jh0H0896iWzSdXx4jcIOyeeHJHzi2hqtm6LQGdSUMU4KSs1fK5';
        $.getJSON(queryString, function(data) {
            let searchResults = JSON.parse(JSON.stringify(data));
            $('#number-limit-result').html('Numero di risultati: '+ searchResults.total_returned + '.<br>' + searchResults.message);
            $table.innerHTML = '';
            for(var i = 0; i < searchResults.total_returned; i++) {
                $table.innerHTML += '<tr><td>' + searchResults.data[i].name + '</td><td>' + searchResults.data[i].symbol +
                '</td><td>' + searchResults.data[i].currency + '</td><td>' + searchResults.data[i].price + '</td><td>' +
                '</td><td><input type="button" class="expand-value" value="+" onclick="openExternalLink(this.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML)"></td></tr>';
            }
        })
    })
</script>
