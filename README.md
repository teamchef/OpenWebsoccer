# OpenWebsoccer 2016 ( PHP 7 )
# powered by Rolf Joseph / ErdemCan

- Starten Sie Ihren eigenen Online-Fu�ball-Manager !

Mit dieser auf PHP und Twig basierten Web-Anwendung k�nnen sie Ihren Website-Besuchern einen virtuellen Fu�ball-Manager anbieten.

Sie setzen die Taktik f�r das n�chste Spiel, erwerben oder bieten Spieler auf dem Transfermarkt, trainieren Ihre Mannschaft.
Suchen Sie nach neuen Talenten in der Jugendabteilung oder erweitern ihre Stadion.

Die Software simuliert alle Spiele automatisch und in Echtzeit. Der Spielbericht, einem Live-Ticker �hnlich, begleitet das
Live-Spiel, wo der User Live in das Spiel eingreifen kann.

Viele Optionen und viele Einstellungsm�glichkeiten runden den OpenWebsoccer ab.


## PHP 7 - neue M�glichkeiten

In PHP 7 sind Neuerungen enthalten, welche nicht in PHP 5 mehr unterst�tzt werden. Einige Funktionen aus PHP 5 werden zudem nicht in PHP 7 unterst�tzt. Die Folge ist, das durch die Entwicklung der OpenWebsoccer nicht mehr auf PHP 5 l�uft, ohne Anpassungen vorzunehmen. Um den Code nicht mit der Kompatibilit�t zu PHP 5 zu �berfrachten, wird auf die PHP 5 Unterst�tzung verzichtet.

Einer der wichtigen Neuerungen ist z.B. die Nutzung von Konstanten. In PHP 7 sind nun auch Konstanten-Array�s einfach zu definieren. Hierdurch wurde es erst m�glich die starre Struktur f�r die Verzeichnisssuche bei Definitionen aufzubrechen. Der Code f�r die Suche nach den Templates ist nun deutlich kleiner und einfacher. Genau diese Ver�nderung f�hrt unter PHP 5 zu folgender Fehlermeldung:
Warning: Constants may only evaluate to scalar values.


## Unterst�tzung von nativen PHP Funktionen

Nun hat mann zus�tzlich die M�glichkeit mittels PHP Funktionen direkt in Twig einsetzen zu k�nnen.


## Struktur�nderungen

Die neue Core-Struktur bietet eine einfache Entwicklung. �nderungen an den Orginal-Dateien bzw. Erweiterungen mittels extend
sind daher nicht mehr n�tig und erh�hen damit die Stabilit�t. Legen Sie eine bearbeitete Kopie der Datei in die urspr�nglichen
Ordnern. So k�nnen auch Fremdmodule leicht eingebunden oder getestet werden.

Aufgrund der mittlerweile vielen �nderungen, Anpassungen, Verbesserungen und Erweiterungen, sehen sie bitte den Stand bei den
Commits nach, wo der Fortschritt der Entwicklung dokumentiert ist.


## Updates ganz einfach

Zum aktualisieren, brauchen sie nur das herunter geladene Verzeichnis openwebsoccer �ber Ihr Verzeichnis auf ihrem Webspace
zu kopieren. Die gesetzte Konfiguration wird nicht �berschrieben, da die Datei config.inc.php nicht mehr mitgeliefert wird.
Sollte es Erg�nzungen zur Konfiguration geben, so werden diese automatisch mit eingebunden.

Neu: Beim Start wird nun ermittelt, ob bei einer bestehenden Installation ein Update gemacht werden mu�. Nicht ben�tigte Dateien
und Verzeichnisse wie install oder update werden automatisch entfernt. Entsprechend wird auch der Cache neu aufgebaut.


## OpenWebsoccer.de - die Webpr�senz

Dort wird nach und nach auf verschiedene Bereiche eingegangen. Es soll eine Info-Plattform werden.


## Dieser Ableger basiert auf der Open Websoccer-Sim, die sie hier bekommen:

** (Https://github.com/ihofmann/open-websoccer/releases) **