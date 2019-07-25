var eurExchangeRates;

var usdExchangeRate = 0;
var gbpExchangeRate = 0;
var chfExchangeRate = 0;

$(document).ready(function() {
    $.getJSON('https://api.exchangeratesapi.io/latest', function(data) {
        eurExchangeRates = JSON.parse(JSON.stringify(data));
        usdExchangeRate = eurExchangeRates.rates.USD;
        gbpExchangeRate = eurExchangeRates.rates.GBP;
        chfExchangeRate = eurExchangeRates.rates.CHF;
        $('#home-usd').html( String("<h4>" + usdExchangeRate.toLocaleString() + "</h4>"));
        $('#home-gbp').html( String("<h4>" + gbpExchangeRate.toLocaleString() + "</h4>"));
        $('#home-chf').html( String("<h4>" + chfExchangeRate.toLocaleString() + "</h4>"));
    });

    
});
