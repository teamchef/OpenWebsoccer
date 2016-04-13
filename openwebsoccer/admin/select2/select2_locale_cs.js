/**
 * Select2 Czech translation.
 * 
 * Author: Michal Marek <ahoj@michal-marek.cz>
 * Author - sklonovani: David Vallner <david@vallner.net>
 */
(function ($) {
    "use strict";
    // use text for the numbers 2 through 4
    var smallNumbers = {
        2: function(masc) { return (masc ? "dva" : "dvě"); },
        3: function() { return "tři"; },
        4: function() { return "čtyři"; }
    }
    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Nenalezeny žߡdnߩ položky"; },
        formatInputTooShort: function (input, min) {
            var n = min - input.length;
            if (n == 1) {
                return "Pros߭m zadejte ještě jeden znak";
            } else if (n <= 4) {
                return "Pros߭m zadejte ještě dalš߭ "+smallNumbers[n](true)+" znaky";
            } else {
                return "Pros߭m zadejte ještě dalš߭ch "+n+" znaků";
            }
        },
        formatInputTooLong: function (input, max) {
            var n = input.length - max;
            if (n == 1) {
                return "Pros߭m zadejte o jeden znak mߩně";
            } else if (n <= 4) {
                return "Pros߭m zadejte o "+smallNumbers[n](true)+" znaky mߩně";
            } else {
                return "Pros߭m zadejte o "+n+" znaků mߩně";
            }
        },
        formatSelectionTooBig: function (limit) {
            if (limit == 1) {
                return "Můžete zvolit jen jednu položku";
            } else if (limit <= 4) {
                return "Můžete zvolit maximߡlně "+smallNumbers[limit](false)+" položky";
            } else {
                return "Můžete zvolit maximߡlně "+limit+" položek";
            }
        },
        formatLoadMore: function (pageNumber) { return "Nač߭tavaj߭ se dalš߭ v߽sledky..."; },
        formatSearching: function () { return "Vyhledߡvߡn߭..."; }
    });
})(jQuery);
