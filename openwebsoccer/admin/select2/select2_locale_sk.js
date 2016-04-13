/**
 * Select2 Slovak translation.
 *
 * Author: David Vallner <david@vallner.net>
 */
(function ($) {
    "use strict";
    // use text for the numbers 2 through 4
    var smallNumbers = {
        2: function(masc) { return (masc ? "dva" : "dve"); },
        3: function() { return "tri"; },
        4: function() { return "štyri"; }
    }
    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Nenašli sa žiadne položky"; },
        formatInputTooShort: function (input, min) {
            var n = min - input.length;
            if (n == 1) {
                return "Pros߭m zadajte ešte jeden znak";
            } else if (n <= 4) {
                return "Pros߭m zadajte ešte ďalšie "+smallNumbers[n](true)+" znaky";
            } else {
                return "Pros߭m zadajte ešte ďalš߭ch "+n+" znakov";
            }
        },
        formatInputTooLong: function (input, max) {
            var n = input.length - max;
            if (n == 1) {
                return "Pros߭m zadajte o jeden znak menej";
            } else if (n <= 4) {
                return "Pros߭m zadajte o "+smallNumbers[n](true)+" znaky menej";
            } else {
                return "Pros߭m zadajte o "+n+" znakov menej";
            }
        },
        formatSelectionTooBig: function (limit) {
            if (limit == 1) {
                return "Mߴžete zvoliť len jednu položku";
            } else if (limit <= 4) {
                return "Mߴžete zvoliť najviac "+smallNumbers[limit](false)+" položky";
            } else {
                return "Mߴžete zvoliť najviac "+limit+" položiek";
            }
        },
        formatLoadMore: function (pageNumber) { return "Nač߭tavajߺ sa ďalšie v߽sledky..."; },
        formatSearching: function () { return "Vyhľadߡvanie..."; }
    });
})(jQuery);
