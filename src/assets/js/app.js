$(document).ready(function() {
    $.getJSON('https://api.exchangeratesapi.io/latest', function(data) {
        var conversion = JSON.parse(JSON.stringify(data));
        $('#home-usd').html("<h4>" + conversion.rates.USD.toLocaleString() + "</h4>");
        $('#home-gbp').html("<h4>" + conversion.rates.GBP.toLocaleString() + "</h4>");
        $('#home-chf').html("<h4>" + conversion.rates.CHF.toLocaleString() + "</h4>");
    });
});
