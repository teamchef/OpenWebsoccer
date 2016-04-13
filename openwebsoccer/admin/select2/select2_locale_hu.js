/**
 * Select2 Hungarian translation
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Nincs talߡlat."; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Tߺl r�vid. Mߩg " + n + " karakter hiߡnyzik."; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Tߺl hosszߺ. " + n + " kerekterrel t�bb mint kellene."; },
        formatSelectionTooBig: function (limit) { return "Csak " + limit + " elemet lehet kivߡlasztani."; },
        formatLoadMore: function (pageNumber) { return "T�ltߩs..."; },
        formatSearching: function () { return "Keresߩs..."; }
    });
})(jQuery);
