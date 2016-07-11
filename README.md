# OpenWebsoccer 2016 ( PHP 7 )
# powered by Rolf Joseph / ErdemCan

- Starten Sie Ihren eigenen Online-Fußball-Manager !

Mit dieser auf PHP und Twig basierten Web-Anwendung können sie Ihren Website-Besuchern einen virtuellen Fußball-Manager anbieten.

Sie setzen die Taktik für das nächste Spiel, erwerben oder bieten Spieler auf dem Transfermarkt, trainieren Ihre Mannschaft.
Suchen Sie nach neuen Talenten in der Jugendabteilung oder erweitern ihre Stadion.

Die Software simuliert alle Spiele automatisch und in Echtzeit. Der Spielbericht, einem Live-Ticker ähnlich, begleitet das
Live-Spiel, wo der User Live in das Spiel eingreifen kann.

Viele Optionen und viele Einstellungsmöglichkeiten runden den OpenWebsoccer ab.


## PHP 7 - neue Möglichkeiten

In PHP 7 sind Neuerungen enthalten, welche nicht in PHP 5 mehr unterstützt werden. Einige Funktionen aus PHP 5 werden zudem nicht in PHP 7 unterstützt. Die Folge ist, das durch die Entwicklung der OpenWebsoccer nicht mehr auf PHP 5 läuft, ohne Anpassungen vorzunehmen. Um den Code nicht mit der Kompatibilität zu PHP 5 zu überfrachten, wird auf die PHP 5 Unterstützung verzichtet.

Einer der wichtigen Neuerungen ist z.B. die Nutzung von Konstanten. In PHP 7 sind nun auch Konstanten-Array´s einfach zu definieren. Hierdurch wurde es erst möglich die starre Struktur für die Verzeichnisssuche bei Definitionen aufzubrechen. Der Code für die Suche nach den Templates ist nun deutlich kleiner und einfacher. Genau diese Veränderung führt unter PHP 5 zu folgender Fehlermeldung:
Warning: Constants may only evaluate to scalar values.


## Unterstützung von nativen PHP Funktionen

Nun hat mann zusätzlich die Möglichkeit mittels PHP Funktionen direkt in Twig einsetzen zu können.


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