# OpenWebsoccer - powered by Rolf Joseph / ErdemCan - Starten Sie Ihren eigenen Online-Fußball-Manager !

Mit dieser auf PHP und Twig basierten Web-Anwendung können sie Ihren Website-Besuchern einen virtuellen Fußball-Manager anbieten.

Sie setzen die Taktik für das nächste Spiel, erwerben oder bieten Spieler auf dem Transfermarkt, trainieren Ihre Mannschaft.
Suchen Sie nach neuen Talenten in der Jugendabteilung oder erweitern ihre Stadion.

Die Software simuliert alle Spiele automatisch und in Echtzeit. Der Spielbericht, einem Live-Ticker ähnlich, begleitet das
Live-Spiel, wo der User Live in das Spiel eingreifen kann.

Viele Optionen und viele Einstellungsmöglichkeiten runden den OpenWebsoccer ab.


## Strukturänderungen

Die neue Core-Struktur bietet eine einfache Entwicklung. Änderungen an den Orginal-Dateien bzw. Erweiterungen mittels extend
sind daher nicht mehr nötig und erhöhen damit die Stabilität. Legen Sie eine bearbeitete Kopie der Datei in die ursprünglichen
Ordnern. So können auch Fremdmodule leicht eingebunden oder getestet werden.

Aufgrund der mittlerweile vielen Änderungen, Anpassungen, Verbesserungen und Erweiterungen, sehen sie bitte den Stand bei den
Commits nach, wo der Fortschritt der Entwicklung dokumentiert ist.


## Updates ganz einfach

Zum aktualisieren, brauchen sie nur das herunter geladene Verzeichnis openwebsoccer über Ihr Verzeichnis auf ihrem Webspace
zu kopieren. Die gesetzte Konfiguration wird nicht überschrieben, da die Datei config.inc.php nicht mehr mitgeliefert wird.
Sollte es Ergänzungen zur Konfiguration geben, so werden diese automatisch mit eingebunden.

Neu: Beim Start wird nun ermittelt, ob bei einer bestehenden Installation ein Update gemacht werden muß. Nicht benötigte Dateien
und Verzeichnisse wie install oder update werden automatisch entfernt. Entsprechend wird auch der Cache neu aufgebaut.


## OpenWebsoccer.de - die Webpräsenz

Dort wird nach und nach auf verschiedene Bereiche eingegangen. Es soll eine Info-Plattform werden.


## Dieser Ableger basiert auf der Open Websoccer-Sim, die sie hier bekommen:

** (Https://github.com/ihofmann/open-websoccer/releases) **