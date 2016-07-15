---
title: 'OpenWebsoccer 2016 ( PHP 7 )'
published: true
process:
    markdown: true
    twig: true
child_type: default
routable: true
cache_enable: true
visible: true
external_links:
    process: true
    title: false
    no_follow: true
    target: _blank
    mode: active
---

Der Focus liegt weiterhin im Unterbau des OpenWebsoccers. PHP 7 bietet neue Möglichkeiten der Programmierung. PHP 5 wird nicht mehr unterstützt, da der Code clean sein soll, also ohne Overhead für die alte PHP Version, wo die Entwicklung im August 2016 eingestellt werden soll.

Es gibt Funktionen die schon in PHP 5 als deprecated gekennzeichnet wurden und in PHP 7 fehlen. Andere  Funktionen verhalten sich nun anders als in der anderen PHP Version. Daher generiert Twig für die jeweils eingesetzte PHP Version einen entsprechenden Code.

Im OpenWebsoccer ist die Logik in den PHP-Dateien und somit sind diese auf PHP 7 ausgelegt. Inwieweit durch die Integrierung von nativen PHP-Funktionen es auch Twig-Datein für die Logik geben wird muss man sehen. Auf jedenfall hat man nun die Möglichkeit native PHP-Funktionen wie folgt aufzurufen:

{{ phpinfo() }}

Die Einbettung in einer Twig page oder box wird dort die Anzeige der PHP-Informationen anzeigen. So kann man mit {{ PHP-Funktions-Aufruf }} viele PHP-Funktionen in Twig einbinden, welche sonst als Übergabe erst über eine Controll-Class oder Model-Class für Twig bereit gestellt werden müssten.