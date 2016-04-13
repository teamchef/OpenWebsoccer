/**
 * Select2 Turkish translation.
 * 
 * Author: Salim KAYABAŞI <salim.kayabasi@gmail.com>
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "Sonuߧ bulunamadı"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "En az " + n + " karakter daha girmelisiniz"; },
        formatInputTooLong: function (input, max) { var n = input.length - max; return n + " karakter azaltmalısınız"; },
        formatSelectionTooBig: function (limit) { return "Sadece " + limit + " seߧim yapabilirsiniz"; },
        formatLoadMore: function (pageNumber) { return "Daha fazla..."; },
        formatSearching: function () { return "Aranıyor..."; }
    });
})(jQuery);
