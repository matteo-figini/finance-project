var apiToken = 'NwaholOJI3Jh0H0896iWzSdXx4jcIOyeeHJHzi2hqtm6LQGdSUMU4KSs1fK5';

function loadHomeElements() {
    getMainExchangeRates();
    getStockCertificatesData();
}

function getMainExchangeRates() {
    $.getJSON('https://api.exchangeratesapi.io/latest', function(data) {
        let eurExchangeRates = JSON.parse(JSON.stringify(data));
        $('#home-usd').html( String("<h4>" + eurExchangeRates.rates.USD.toLocaleString() + "</h4>"));
        $('#home-gbp').html( String("<h4>" + eurExchangeRates.rates.GBP.toLocaleString() + "</h4>"));
        $('#home-chf').html( String("<h4>" + eurExchangeRates.rates.CHF.toLocaleString() + "</h4>"));
    })
}

function getStockCertificatesData() {
    let queryString = 'https://api.worldtradingdata.com/api/v1/stock?symbol=';
    queryString += '^FTSEMIB,^DJI,^NDX';
    queryString += '&api_token=';
    queryString += apiToken;
    $.getJSON(queryString, function(data) {
        let quotationFile = JSON.parse(JSON.stringify(data));
        for (let i = 0; i < quotationFile.data.length; i++) {
            if (quotationFile.data[i].symbol == '^FTSEMIB') {
                $('#home-ftse').html('<h4>' + quotationFile.data[i].price + ' (' + quotationFile.data[i].change_pct +')' + '</h4>');
            }
            else if (quotationFile.data[i].symbol == '^DJI') {
                $('#home-dowj').html('<h4>' + quotationFile.data[i].price + ' (' + quotationFile.data[i].change_pct +')' + '</h4>');
            }
            else if (quotationFile.data[i].symbol == '^NDX') {
                $('#home-nas').html('<h4>' + quotationFile.data[i].price + ' (' + quotationFile.data[i].change_pct +')' + '</h4>');
            }
        }
    })
}

function convertiValuta() {
    let queryString = 'https://api.exchangeratesapi.io/latest?base=';
    let valueToConvert = $('#valore-iniziale').val();
    let exchangeRate = 0;
    let convertedValue = 0;
    let initialCurrency = $('#select-currency-first').val();
    let finalCurrency = $('#select-currency-last').val();

    if (initialCurrency == finalCurrency) {
        alert("Le due valute non possono essere uguali!");
    }
    else if (valueToConvert == '') {
        alert("E' necessario inserire un valore da convertire!");
    }
    else {
        queryString += initialCurrency;
        $.getJSON(queryString, function(data) {
            let exchangeRates = JSON.parse(JSON.stringify(data));
            switch (finalCurrency) {
                case 'EUR':
                    exchangeRate = exchangeRates.rates.EUR;
                    break;
                case 'CAD':
                    exchangeRate = exchangeRates.rates.CAD;
                    break;
                case 'HKD':
                    exchangeRate = exchangeRates.rates.HKD;
                    break;
                case 'ISK':
                    exchangeRate = exchangeRates.rates.ISK;
                    break;
                case 'PHP':
                    exchangeRate = exchangeRates.rates.PHP;
                    break;
                case 'DKK':
                    exchangeRate = exchangeRates.rates.DKK;
                    break;
                case 'HUF':
                    exchangeRate = exchangeRates.rates.HUF;
                    break;
                case 'CZK':
                    exchangeRate = exchangeRates.rates.CZK;
                    break;
                case 'AUD':
                    exchangeRate = exchangeRates.rates.AUD;
                    break;
                case 'RON':
                    exchangeRate = exchangeRates.rates.RON;
                    break;
                case 'SEK':
                    exchangeRate = exchangeRates.rates.SEK;
                    break;
                case 'IDR':
                    exchangeRate = exchangeRates.rates.IDR;
                    break;
                case 'INR':
                    exchangeRate = exchangeRates.rates.INR;
                    break;
                case 'BRL':
                    exchangeRate = exchangeRates.rates.BRL;
                    break;
                case 'RUB':
                    exchangeRate = exchangeRates.rates.RUB;
                    break;
                case 'HRK':
                    exchangeRate = exchangeRates.rates.HRK;
                    break;
                case 'JPY':
                    exchangeRate = exchangeRates.rates.JPY;
                    break;
                case 'THB':
                    exchangeRate = exchangeRates.rates.THB;
                    break;
                case 'CHF':
                    exchangeRate = exchangeRates.rates.CHF;
                    break;
                case 'SGD':
                    exchangeRate = exchangeRates.rates.SGD;
                    break;
                case 'PLN':
                    exchangeRate = exchangeRates.rates.PLN;
                    break;
                case 'BGN':
                    exchangeRate = exchangeRates.rates.BGN;
                    break;
                case 'TRY':
                    exchangeRate = exchangeRates.rates.TRY;
                    break;
                case 'CNY':
                    exchangeRate = exchangeRates.rates.CNY;
                    break;
                case 'NOK':
                    exchangeRate = exchangeRates.rates.NOK;
                    break;
                case 'NZD':
                    exchangeRate = exchangeRates.rates.NZD;
                    break;
                case 'ZAR':
                    exchangeRate = exchangeRates.rates.ZAR;
                    break;
                case 'USD':
                    exchangeRate = exchangeRates.rates.USD;
                    break;
                case 'MXN':
                    exchangeRate = exchangeRates.rates.MXN;
                    break;
                case 'GBP':
                    exchangeRate = exchangeRates.rates.GBP;
                    break;
                case 'KRW':
                    exchangeRate = exchangeRates.rates.KRW;
                    break;
                case 'MYR':
                    exchangeRate = exchangeRates.rates.MYR;
                    break;
                default:
                    alert("Non è stato possibile portare a termine la conversione");
            }
            convertedValue = valueToConvert * exchangeRate;
            convertedValue = convertedValue.toLocaleString();
            $('#valore-finale').val(convertedValue);
        })
    }
}

function addStockToDatabase(stockName, stockSymbol, stockCurrency, stockPrice) {
    var xhttp = new XMLHttpRequest();
    var url = '../../assets/backend/add-stock.php?name=' + stockName + '&symbol=' +
    stockSymbol + '&currency=' + stockCurrency;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
