/**
 * Select2 Icelandic translation.
 * 
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Ekkert fannst"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Vinsamlegast skrifi߰ " + n + " staf" + (n == 1 ? "" : "i") + " ߭ vi߰b߳t"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Vinsamlegast stytti߰ texta um " + n + " staf" + (n == 1 ? "" : "i"); },
        formatSelectionTooBig: function (limit) { return "ߞߺ getur a߰eins vali߰ " + limit + " atri߰i"; },
        formatLoadMore: function (pageNumber) { return "Sߦki fleiri ni߰urst�߰ur..."; }, 
        formatSearching: function () { return "Leita..."; }
    });
})(jQuery);
