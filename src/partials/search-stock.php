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
        </table><hr>
        <div id="stock-title-link-details"></div>
    </div>
</div>

<script type="text/javascript">
    $('#searchStockButton').on('click', function() {
        let $table = document.getElementById('stock-table-body');
        let queryString = 'https://api.worldtradingdata.com/api/v1/stock_search?search_term=';
        var externalLink = '';
        var editedLink = '';
        var stockTitle = {
            name: "",
            symbol: "",
            currency: "",
            price: 0
        }
        queryString += document.getElementById('searchStock').value;
        queryString += '&search_by=symbol,name&limit=50&page=1&api_token=NwaholOJI3Jh0H0896iWzSdXx4jcIOyeeHJHzi2hqtm6LQGdSUMU4KSs1fK5';

        $.getJSON(queryString, function(data) {
            let searchResults = JSON.parse(JSON.stringify(data));
            $('#number-limit-result').html('Numero di risultati: '+ searchResults.total_returned + '.<br>' + searchResults.message);
            $table.innerHTML = '';

            for(var i = 0; i < searchResults.total_returned; i++) {
                externalLink = 'https://www.worldtradingdata.com/stock/';
                stockTitle.name = searchResults.data[i].name;
                stockTitle.symbol = searchResults.data[i].symbol;
                stockTitle.currency = searchResults.data[i].currency;
                stockTitle.price = searchResults.data[i].price;

                if(stockTitle.symbol.charAt(0) === '^') {
                    externalLink += "%5E";
                    editedLink = stockTitle.symbol.substring(1);
                }
                else {
                    editedLink = stockTitle.symbol;
                }
                externalLink += editedLink;
                $table.innerHTML += '<tr><td>' + stockTitle.name + '</td><td>' + stockTitle.symbol +
                '</td><td>' + stockTitle.currency + '</td><td>' + stockTitle.price + '</td><td>' +
                '<i class="fas fa-plus-circle" onclick="addStockToDatabase(this.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML,' +
                'this.parentNode.previousSibling.previousSibling.previousSibling.innerHTML,' +
                'this.parentNode.previousSibling.previousSibling.innerHTML)"></i>&nbsp&nbsp' +
                '<a href="' + externalLink + '" target="_blank"><i class="fas fa-angle-double-right"></i></a> </td></tr>';
            }
        })
    })
</script>
