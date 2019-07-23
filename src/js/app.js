// $(document).ready(function() {
//     var $chooseValueInit = $('#currency-init');
//     var $chooseValueFinal = $('#currency-final');
//
//     $.ajax({
//         url: 'valute.json',
//         dataType: 'json',
//         type: 'get',
//         cache: false,
//         success: function(data) {
//             var chooseValueStr1 = '<select class="currSelector" id="currency-selector">';
//             var chooseValueStr2 = '<select class="currSelector" id="currency-selector-final">';
//             $(data.valute).each(function(index, value) {
//                 chooseValueStr1 += '<option value=' + value.abbreviazione + '>' + value.nome + ' (' + value.abbreviazione + ')' + '</option>';
//                 chooseValueStr2 += '<option value=' + value.abbreviazione + '>' + value.nome + ' (' + value.abbreviazione + ')' + '</option>';
//             })
//             $chooseValueInit.html(chooseValueStr1);
//             $chooseValueFinal.html(chooseValueStr2);
//         }
//     });
//
//     $.getJSON('https://api.exchangeratesapi.io/latest', function(data) {
//         var conversion = JSON.parse(JSON.stringify(data));
//         $('#home-usd').html("<h4>" + conversion.rates.USD.toLocaleString() + " Dollari</h4>");
//         $('#home-gbp').html("<h4>" + conversion.rates.GBP.toLocaleString() + " Sterline</h4>");
//         $('#home-chf').html("<h4>" + conversion.rates.CHF.toLocaleString() + " Franchi svizzeri</h4>");
//     });
//
//     $('#converti-button').on('click', function() {
//         let valoreIniziale = $('#valore-iniziale').val();
//         let selettoreValuta = document.getElementById('currency-selector');
//         let selettoreValutaFinale = document.getElementById('currency-selector-final');
//         let valutaIniziale = selettoreValuta.options[selettoreValuta.selectedIndex].value;
//         let valutaFinale = selettoreValutaFinale.options[selettoreValutaFinale.selectedIndex].value;
//
//         let queryString = 'https://api.exchangeratesapi.io/latest?base=' + valutaIniziale;
//
//         if (valoreIniziale < 0) {
//             document.getElementById('modal-alert').style.display = "block";
//             $('#modal-alert-content').html('<p>Il valore da convertire non può essere negativo.</p>');
//         }
//         else if (valutaIniziale == valutaFinale) {
//             document.getElementById('modal-alert').style.display = "block";
//             $('#modal-alert-content').html('<p>Le due valute devono essere diverse tra loro.</p>');
//         }
//         else {
//             $.getJSON(queryString, function(data) {
//                 var conversion = JSON.parse(JSON.stringify(data));
//                 var number = 0;
//                 switch (valutaFinale) {
//                     case "EUR":
//                         number = conversion.rates.EUR * valoreIniziale;
//                         break;
//                     case "CAD":
//                         number = conversion.rates.CAD * valoreIniziale;
//                         break;
//                     case "HKD":
//                         number = conversion.rates.HKD * valoreIniziale;
//                         break;
//                     case "ISK":
//                         number = conversion.rates.ISK * valoreIniziale;
//                         break;
//                     case "PHP":
//                         number = conversion.rates.PHP * valoreIniziale;
//                         break;
//                     case "DKK":
//                         number = conversion.rates.DKK * valoreIniziale;
//                         break;
//                     case "HUF":
//                         number = conversion.rates.HUF * valoreIniziale;
//                         break;
//                     case "CZK":
//                         number = conversion.rates.CZK * valoreIniziale;
//                         break;
//                     case "AUD":
//                         number = conversion.rates.AUD * valoreIniziale;
//                         break;
//                     case "RON":
//                         number = conversion.rates.RON * valoreIniziale;
//                         break;
//                     case "SEK":
//                         number = conversion.rates.SEK * valoreIniziale;
//                         break;
//                     case "IDR":
//                         number = conversion.rates.IDR * valoreIniziale;
//                         break;
//                     case "INR":
//                         number = conversion.rates.INR * valoreIniziale;
//                         break;
//                     case "BRL":
//                         number = conversion.rates.BRL * valoreIniziale;
//                         break;
//                     case "RUB":
//                         number = conversion.rates.RUB * valoreIniziale;
//                         break;
//                     case "HRK":
//                         number = conversion.rates.HRK * valoreIniziale;
//                         break;
//                     case "JPY":
//                         number = conversion.rates.JPY * valoreIniziale;
//                         break;
//                     case "THB":
//                         number = conversion.rates.THB * valoreIniziale;
//                         break;
//                     case "CHF":
//                         number = conversion.rates.CHF * valoreIniziale;
//                         break;
//                     case "SGD":
//                         number = conversion.rates.SGD * valoreIniziale;
//                         break;
//                     case "PLN":
//                         number = conversion.rates.PLN * valoreIniziale;
//                         break;
//                     case "BGN":
//                         number = conversion.rates.BGN * valoreIniziale;
//                         break;
//                     case "TRY":
//                         number = conversion.rates.TRY * valoreIniziale;
//                         break;
//                     case "CNY":
//                         number = conversion.rates.CNY * valoreIniziale;
//                         break;
//                     case "NOK":
//                         number = conversion.rates.NOK * valoreIniziale;
//                         break;
//                     case "NZD":
//                         number = conversion.rates.NZD * valoreIniziale;
//                         break;
//                     case "ZAR":
//                         number = conversion.rates.ZAR * valoreIniziale;
//                         break;
//                     case "USD":
//                         number = conversion.rates.USD * valoreIniziale;
//                         break;
//                     case "MXN":
//                         number = conversion.rates.MXN * valoreIniziale;
//                         break;
//                     case "GBP":
//                         number = conversion.rates.GBP * valoreIniziale;
//                         break;
//                     case "KRW":
//                         number = conversion.rates.KRW * valoreIniziale;
//                         break;
//                     case "MYR":
//                         number = conversion.rates.MYR * valoreIniziale;
//                         break;
//                 }
//                 $('#valore-finale').val(number);
//             });
//         }
//     });
//
//
// });

var mySidebar = $("#mySidebar");
var overlayBg = $("#myOverlay");

// Close the sidebar with the close button
overlayBg.on('click', function() {
    mySidebar.hide();
    overlayBg.hide();
});

$('#open-menu-mobile').on('click', function() {
    if (mySidebar.style.display === 'block') {
        mySidebar.hide();
        overlayBg.hide();
    }
    else {
        mySidebar.show();
        overlayBg.show();
    }
});
