var eurExchangeRates;

var usdExchangeRate = 0;
var gbpExchangeRate = 0;
var chfExchangeRate = 0;

var apiToken = 'NwaholOJI3Jh0H0896iWzSdXx4jcIOyeeHJHzi2hqtm6LQGdSUMU4KSs1fK5';

var StockCertificate = function() {
    this.name = "";
    this.symbol = "";
    this.actualValue = 0;
    this.changePct = 0;
};

var stockCertificates = [];

$(document).ready(function() {
    getMainExchangeRates();
});

function getMainExchangeRates() {
    $.getJSON('https://api.exchangeratesapi.io/latest', function(data) {
        eurExchangeRates = JSON.parse(JSON.stringify(data));
        usdExchangeRate = eurExchangeRates.rates.USD;
        gbpExchangeRate = eurExchangeRates.rates.GBP;
        chfExchangeRate = eurExchangeRates.rates.CHF;
        $('#home-usd').html( String("<h4>" + usdExchangeRate.toLocaleString() + "</h4>"));
        $('#home-gbp').html( String("<h4>" + gbpExchangeRate.toLocaleString() + "</h4>"));
        $('#home-chf').html( String("<h4>" + chfExchangeRate.toLocaleString() + "</h4>"));
    });
}
