/**
 * Select2 Catalan translation.
 * 
 * Author: David Planella <david.planella@gmail.com>
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "No s'ha trobat cap coincidߨncia"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Introdu߯u " + n + " carߠcter" + (n == 1 ? "" : "s") + " mߩs"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Introdu߯u " + n + " carߠcter" + (n == 1? "" : "s") + "menys"; },
        formatSelectionTooBig: function (limit) { return "Nomߩs podeu seleccionar " + limit + " element" + (limit == 1 ? "" : "s"); },
        formatLoadMore: function (pageNumber) { return "S'estan carregant mߩs resultats..."; },
        formatSearching: function () { return "S'estߠ cercant..."; }
    });
})(jQuery);
