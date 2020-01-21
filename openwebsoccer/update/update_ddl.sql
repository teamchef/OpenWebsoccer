--
--
-- This file is part of OpenWebSoccer-Sim.
--
-- OpenWebSoccer-Sim is free software: you can redistribute it
-- and/or modify it under the terms of the
-- GNU Lesser General Public License
-- as published by the Free Software Foundation, either version 3 of
-- the License, or any later version.
--
-- OpenWebSoccer-Sim is distributed in the hope that it will be
-- useful, but WITHOUT ANY WARRANTY; without even the implied
-- warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
-- See the GNU Lesser General Public License for more details.
--
-- You should have received a copy of the GNU Lesser General Public
-- License along with OpenWebSoccer-Sim.
-- If not, see <http://www.gnu.org/licenses/>.
--
-- Author: Ingo Hofmann
-- Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
--
-- This Version called "OpenWebsoccer" is a advanced modification
-- by Rolf Joseph / ErdemCan 2015 - 2016
--
-- For comparison of the code look at the original at
-- https://github.com/ihofmann/open-websoccer
--
--
-- zus�tzliches Statusfeld einf�gen
ALTER TABLE _stadiumbuilding ADD status enum('1','0');

-- Fremdschl�sselabfrage deaktivieren
SET FOREIGN_KEY_CHECKS = 0;
-- einf�gen der Meldungen der Stadionerweiterugen
INSERT INTO `_stadiumbuilding` (`id`, `name`, `description`, `picture`, `required_building_id`, `costs`, `premiumfee`, `construction_time_days`, `effect_training`, `effect_youthscouting`, `effect_tickets`, `effect_fanpopularity`, `effect_injury`, `effect_income`, `status`) VALUES
('', 'Parkplatz (niedrig)', 'Parkpl�tze', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Parkhaus (mittel)', 'Parkhaus', NULL, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Parkhaus (hoch)', 'Parkhaus', NULL, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Trainingsplatz (niedrig)', 'Trainingsplatz ohne Rasenheizung', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Trainingsplatz (mittel)', 'Trainingsplatz mit Rasenheizung', NULL, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Trainingsplatz (hoch', 'Trainingszentrum mit Sporthalle', NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanshopmobil (niedrig)', 'Fanshop ', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanshop (mittel)', 'Fanshop ', NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fancenter (hoch)', 'Fancenter ', NULL, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Pommesbude (niedrig)', 'Pommesbude', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fast-Food Shop (mittel)', 'Fast Food Shop', NULL, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Restaurant (hoch)', 'Restaurant', NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinshaus (niedrig)', 'Vereinshaus', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinszentrum (mittel)', 'Vereinszentrum', NULL, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinskomplex (hoch)', 'Vereinskomplex', NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Jugendhaus (niedrig)', 'Jugendhaus', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Jugendhaus (mittel)', 'Jugendhaus mit Sportplatz', NULL, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Jugendinternat (hoch)', 'Jugendinternat', NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinsmuseum (niedrig)', 'Museum', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinsmuseum (mittel)', 'Vereinsmuseum mit Unikaten', NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinsmuseum (hoch)', 'Historisches Vereinsmuseum ', NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanclubverwaltung (niedrig)', 'Fanclubverwaltung', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanclubverwaltung (mittel)', 'Fanclubverwaltung mit Poststelle', NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanclubverwaltung (hoch)', 'Fanclubverwaltung mit EDV Abteilung', NULL, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'EDV Raum (niedrig)', 'EDV Raum', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'EDV Lager (mittel)', 'EDV Lager', NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'EDV Komplex (hoch)', 'EDV Komplex', NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Scoutingraum (niedrig)', 'Scoutingraum', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Scoutinghaus (mittel)', 'Scoutinghaus ', NULL, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Scoutingkomplex (hoch)', 'Scoutingbereich mit modernster Ausstattung', NULL, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fahrradst�nder (niedrig)', 'Anreise per Fahrrad', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Busbahnhof (mittel)', 'Busbahnhof zur Anreise', NULL, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'S-Bahn (hoch)', 'Stra�enbahn zur Anreise', NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'U-Bahnhof (Luxus)', 'U-Bahn zur Anreise', NULL, 33, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Tiefgarage (Luxus)', 'Tiefgarage ', NULL, 3, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Arztraum (niedrig)', 'Arztraum zur Heilung der Spieler', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Arzthaus (mittel)', 'Arzthaus', NULL, 36, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Arztpraxis (hoch)', 'Arztpraxis', NULL, 37, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Krankenhaus (Luxus)', 'Krankenhaus', NULL, 38, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Wellnessraum (niedrig)', 'Wellnessraum ', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Wellnessoase (mittel)', 'Wellnessoase ', NULL, 40, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Wellnessbereich (hoch)', 'Wellnessbereich ', NULL, 41, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Wellnesskomplex (Luxus)', 'Wellnesskomplex', NULL, 42, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Kiosk (niedrig)', 'Kiosk ', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Kioskladen (mittel)', 'Kioskladen ', NULL, 44, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Kioskkomplex (hoch)', 'Gro�er Kiosk-Store', NULL, 45, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Dixie Klo (niedrig)', 'Dixie Klo', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Toilettenwagen (mittel)', 'Toilettenwagen', NULL, 47, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Toiletten (hoch)', 'Toiletten', NULL, 48, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Toiletten modern (Luxus)', 'Toiletten modern', NULL, 49, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Flutlichtmast (niedrig)', 'Flutlichtmast', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Flutlicht (mittel)', 'Flutlich', NULL, 51, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Flutlichtanlage (hoch)', 'Flutlichtanlage', NULL, 52, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Manufaktur (niedrig)', 'Manufaktur zur Herstellung von Merchandising ', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Werkhalle (mittel)', 'Werkhalle zur Herstellung von Merchandising ', NULL, 54, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Maschinenhalle (hoch)', 'Maschinenhalle zur Herstellung von Merchandising ', NULL, 55, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Moderne Fabrik (Luxus)', 'Automatisierte Maschinenhalle zur Herstellung von Merchandising ', NULL, 56, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Drive-In-Resturant (Luxus)', 'Restaurant', NULL, 12, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Vereinszentrale (Luxus)', 'Vereinszentrale', NULL, 15, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Kraftraum (niedrig)', 'Kraftraum', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Kraftr�ume (mittel)', 'Kraftr�ume', NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fitnessstudio (hoch)', 'Fitnessstudio', NULL, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Sportleistungszentrum (Luxus)', 'Sportleistungszentrum', NULL, 62, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanstatue', 'Fanstatue', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Parkpl�tze','Parkplatzausbau', NULL, NULL, 500000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
('', 'Fanshop', 'Alles was der Fan begehrt', NULL, 69, 50000, 0, 10, 0, 0, 5, 10, 0, 500, 0),
('', 'Aachener Printen Ecke im Fanshop', 'Gentleman l�dt zum Naschen ein', NULL, 66, 1000, 0, 2, 0, 0, 0, 1, 0, 100, 0),
('', 'Bushaltestelle', 'direkte Anbindung zum Busnetz', NULL, NULL, 20000, 0, 3, 0, 0, 2, 5, 0, 0, 0),
('', 'Stadion-Center', 'Center f�r Shopvermietung', NULL, NULL, 1000000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
('', 'Sport-Center', 'Center f�r die Spielerbetreuung', NULL, NULL, 1000000, 0, 50, 0, 0, 0, 0, 0, 0, 0),
('', 'Getr�nke-Shop', NULL, NULL, 69, 10000, 0, 20, 0, 0, 0, 10, 0, 1000, 0),
('', 'Imbiss', NULL, NULL, 69, 5000, 0, 10, 0, 0, 0, 5, 0, 500, 0),
('', 'Reha-Abteilung', 'F�rderung der Genesung', NULL, 70, 200000, 0, 20, 0, 0, 0, 0, 1, 0, 0),
('', 'Scouting Abteilung', 'Management f�r das Scouting von Jugendspielern', NULL, 70, 100000, 0, 10, 0, 10, 0, 0, 0, 0, 0),
('', 'Fitness- und Relax Bereich', 'zus�tzliche  Frische und Zufriedenheit pro Trainingseinheit', NULL, 70, 100000, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('', 'U-Bahn Anschluss', NULL, NULL, NULL, 500000, 0, 50, 0, 0, 15, 15, 0, 0, 0),
('', 'Restaurant', 'Erlebnis Essen', NULL, 69, 100000, 0, 30, 0, 0, 0, 5, 0, 5000, 0),
('', 'Parkanlage', 'Das gr�ne Erlebnis f�r die ganze Familie', NULL, NULL, 1000000, 0, 90, 0, 0, 10, 10, 0, 0, 0),
('', 'Therme', NULL, NULL, NULL, 500000, 0, 90, 1, 0, 1, 10, 0, 10000, 0),
('', 'Salinen', 'Die Lunge wird sich freuen.', NULL, NULL, 200000, 0, 30, 0, 0, 5, 5, 0, 0, 0),
('', 'Polizeiwache', 'Mehr Zuschauer, aber kostet daf�r auch Geld.', NULL, NULL, 500000, 0, 50, 0, 0, 10, 0, 0, '-10000', 0),
('', 'Fanbetreungs Punkt', 'Kostet etwas, aber bringt auch mehr Zuschauer.', NULL, NULL, 50000, 0, 30, 0, 0, 5, 0, 0, '-1000', 0);
-- Fremdschl�sselabfrage aktivieren
SET FOREIGN_KEY_CHECKS = 1;

-- zus�tzliches Statusfeld einf�gen
ALTER TABLE _randomevent ADD status enum('1','0');

-- einf�gen der Meldungen der Zufallsereignisse
INSERT INTO `_randomevent` (`id`, `message`, `effect`, `effect_money_amount`, `effect_blocked_matches`, `effect_skillchange`, `weight`, `status`) VALUES
('', 'Sie gewinnen im Lotto', 'money', 100000, 0, 0, 3),
('', 'Sie finden Geld auf der Stra�e. Sie sind ein Gl�ckspilz', 'money', 500, 0, 0, 3),
('', 'Sie bekommen Steuern erstattet!', 'money', 15000, 0, 0, 3),
('', 'Ein Sponsor �berwei�t Ihnen einen Bonus', 'money', 25000, 0, 0, 3),
('', 'Sie sind der Sieger eines Fotowettbewerbes', 'money', 1000, 0, 0, 3),
('', 'F�r eine Homestory bekommen Sie einen Bonus', 'money', 50000, 0, 0, 3),
('', '{playername} f�llt nach einer Disconacht aus.', 'player_injured', 0, 1, -1, 3),
('', '{playername} l�sst sich von seiner Frau scheiden', 'player_happiness', 0, 0, -2, 3),
('', '{playername} heiratet seine Freundin', 'player_happiness', 0, 0, 2, 3),
('', '{playername} trainiert neben dem Training im Kraftraum.', 'player_stamina', 0, 0, 2, 3),
('', '{playername} stolpert die Treppe runter und verletzt sich', 'player_injured', 0, 2, -1, 3),
('', '{playername} bekommt ein Kind', 'player_fitness', 0, 0, -2, 3),
('', '{playername} bekommt mit seiner Frau Zwillinge', 'player_happiness', 0, 0, 2, 3),
('', 'Durch eine Fanleihe gewinnen Sie Geld', 'money', 250000, 0, 0, 3),
('', 'Deine Mitarbeiter erwirtschaften ein dickes Plus in der Kasser', 'money', 75000, 0, 0, 3),
('', 'Deine Mitarbeiter streiken vorm Vereinshaus', 'money', -50000, 0, 0, 3),
('', 'Ein Angestellter des Vereins brennt mit dem Tagesgeld durch', 'money', -150000, 0, 0, 3),
('', 'Ein anonymer Fan spendet Ihrem Verein', 'money', 5000, 0, 0, 3),
('', 'Ein Hacker legt die EDV Abteilung des Vereins lahm', 'money', -15000, 0, 0, 3),
('', 'Ein Mitarbeiter telefoniert auf Vereinskosten', 'money', -1000, 0, 0, 3),
('', 'Ein Brand im Lagerraum zerst�rt die gesamte EDV Anlage', 'money', -225000, 0, 0, 3),
('', 'Wegen Hooligans wird ihr Verein zu einer Geldstrafe verdonnert', 'money', -275000, 0, 0, 3),
('', 'Renovierungen im Stadionumfeld sind von N�ten', 'money', -200000, 0, 0, 3),
('', 'Ihr Sponsor ist sehr zufrieden und zahlt dem Verein einen Bonus', 'money', 350000, 0, 0, 3),
('', 'Ihr Verein bekommt eine Spende von einem Fanclub', 'money', 100000, 0, 0, 3),
('', 'Ihr Verein steht in der Presse schlecht da. Sie starten eine Imagekapampagne', 'money', -15000, 0, 0, 3),
('', 'Ihr Verein wird f�r vorbildliche Fans ausgezeichnet', 'money', 300000, 0, 0, 3),
('', '{playername} f�llt nach einer Schiedsrichterbeleidigung aus', 'player_blocked', 0, 2, 0, 3),
('', '{playername} f�llt nach einer Trainingskeilerei aus', 'player_injured', 0, 1, 0, 3),
('', '{playername} verdreht sich das Knie beim Joggen', 'player_injured', 0, 4, 0, 3),
('', '{playername} plaudert Internas aus und wird suspendiert', 'player_blocked', 0, 5, 0, 3),
('', '{playername} trauert seiner Ex-Freundin hinterher', 'player_fitness', 0, 0, -2, 3),
('', '{playername} bekommt viel Lob von der Presse', 'player_happiness', 0, 0, 3, 3),
('', '{playername} geht nach dem Training zum Wasseraerobic', 'player_fitness', 0, 0, 2, 3),
('', '{playername} holt sich ein Hexenschuss als er sein Kind hebt', 'player_injured', 0, 0, -1, 3),
('', 'Sie gewinnen im Casino', 'money', 750000, 0, 0, 3),
('', 'Sie erhalten einen Preis eines Sportmagazines', 'money', 75000, 0, 0, 3),
('', 'Sie ver�u�ern eine Immobilie gewinnbringend', 'money', 125000, 0, 0, 3),
('', '{playername} streitet sich mit mehreren Mitspielern', 'player_happiness', 0, 0, -2, 3),
('', '{playername} l�dt seine Mannschaftskollegen zum Mannschaftsabend ein', 'player_happiness', 0, 0, 2, 3),
('', '{playername} l�dt seine Teamkollegen zum gemeinsamen Essen ein', 'player_happiness', 0, 0, 2, 3),
('', '{playername} bekommt einen neuen Ausr�stervertrag', 'player_happiness', 0, 0, 2, 3),
('', '{playername} verliert einen Ausr�stervertrag', 'player_happiness', 0, 0, -2, 3),
('', '{playername} erkrankt schwer', 'player_injured', 0, 2, 0, 3),
('', '{playername} knickt ungl�cklich um als er einen Trick ausprobiert', 'player_injured', 0, 1, 0, 3),
('', '{playername} wird beim R�ckw�rts ausparken von seinem Teamkollegen �bersehen. Sein Fu� ist danach kaputt.', 'player_injured', 0, 1, 0, 3),
('', '{playername} geht privat sehr viel Joggen,was sich auf die Kondition auswirkt.', 'player_stamina', 0, 0, 2, 3),
('', '{playername} diskutiert viel mit seinem Trainer und lernt wertvolles.', 'player_happiness', 0, 0, 2, 3),
('', '{playername} w�tet nach der Niederlage gegen seine Mitspieler. Sie suspendieren Ihn.', 'player_blocked', 0, 2, 0, 3),
('', '{playername} verbessert sein Standing im Team', 'player_happiness', 0, 0, 1, 3),
('', 'Sie verlieren eine Sportwette gegen ein alten Trainerkollegen. Und werden zur Kasse gebeten.', 'money', -1000, 0, 0, 3),
('', 'Sie laden ihre Spieler zum Bowlingabend ein und zahlen diesen.', 'money', -1250, 0, 0, 3),
('', 'Sie laden ihr Team zum Kanu-Trip ein.', 'money', -800, 0, 0, 3),
('', 'Sie kommen zu sp�t zum Training und zahlen daf�r in die Mannschaftskasse ein', 'money', 500, 0, 0, 3),
('', 'Sie beschaffen sich eine Taktik Tafel f�r zu Hause', 'money', -375, 0, 0, 3),
('', '{playername} wird viel mit Vereinen in Verbindung gebracht. Seine Vorbereitung schleift dadurch', 'player_happiness', 0, 0, -2, 3),
('', '{playername} wird mit gro�en Clubs in Verbindung gebracht. Das imponiert ihm sehr und er h�ngt sich mehr rein.', 'player_happiness', 0, 0, 3, 3),
('', '{playername} verkracht sich mit seinem besten Kumpel.', 'player_fitness', 0, 0, -2, 3),
('', '{playername} kommt versp�tet zum Training', 'player_blocked', 0, 1, 0, 3),
('', '{playername} trauert um seine Oma', 'player_happiness', 0, 0, -2, 3),
('', 'Durch eine Fehl-Bestellung entstehen erh�hte Kosten', 'money', -3500, 0, 0, 3),
('', 'Sie gewinnen einen Preis f�r die Beste Jugendabteilung', 'money', 30000, 0, 0, 3),
('', 'Sie platzieren eine Sportwette und gewinnen diese auch noch.', 'money', 1750, 0, 0, 3),
('', 'Sie finden einen Alukoffer und �ffnen diesen', 'money', 75750, 0, 0, 3),
('', 'Ein Mitarbeiter verletzt sich im B�ro. Sie kaufen Ihn eine Aufmerksamkeit.', 'money', -500, 0, 0, 3);
-- Beschr�nkung der Anzahl der Eintr�ge
ALTER TABLE `_randomevent` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;