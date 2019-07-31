var apiToken = 'NwaholOJI3Jh0H0896iWzSdXx4jcIOyeeHJHzi2hqtm6LQGdSUMU4KSs1fK5';

$(document).ready(function() {
    getMainExchangeRates();
    getStockCertificatesData();
});

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
