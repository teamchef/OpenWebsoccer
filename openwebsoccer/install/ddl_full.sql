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
-- Tabellen anlegen
CREATE TABLE _admin (
  id SMALLINT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(40) NULL,
  passwort VARCHAR(64) NULL,
  passwort_neu VARCHAR(64) NULL,
  passwort_neu_angefordert INT(11) NOT NULL DEFAULT 0,
  passwort_salt VARCHAR(5) NULL,
  email VARCHAR(100) NULL,
  lang VARCHAR(2) NULL,
  r_admin ENUM('1','0') NOT NULL DEFAULT '0',
  r_adminuser ENUM('1','0') NOT NULL DEFAULT '0',
  r_user ENUM('1','0') NOT NULL DEFAULT '0',
  r_daten ENUM('1','0') NOT NULL DEFAULT '0',
  r_staerken ENUM('1','0') NOT NULL DEFAULT '0',
  r_spiele ENUM('1','0') NOT NULL DEFAULT '0',
  r_news ENUM('1','0') NOT NULL DEFAULT '0',
  r_faq ENUM('1','0') NOT NULL DEFAULT '0',
  r_umfrage ENUM('1','0') NOT NULL DEFAULT '0',
  r_kalender ENUM('1','0') NOT NULL DEFAULT '0',
  r_seiten ENUM('1','0') NOT NULL DEFAULT '0',
  r_design ENUM('1','0') NOT NULL DEFAULT '0',
  r_demo ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _user (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nick VARCHAR(50) NULL,
  passwort VARCHAR(64) NULL,
  passwort_neu VARCHAR(64) NULL,
  passwort_neu_angefordert INT(11) NOT NULL DEFAULT 0,
  passwort_salt VARCHAR(5) NULL,
  tokenid VARCHAR(255) NULL,
  lang VARCHAR(2) DEFAULT 'de',
  email VARCHAR(150) NULL,
  datum_anmeldung INT(11) NOT NULL DEFAULT 0,
  schluessel VARCHAR(10) NULL,
  wunschverein VARCHAR(250) NULL,
  name VARCHAR(80) NULL,
  wohnort VARCHAR(50) NULL,
  land VARCHAR(40) NULL,
  geburtstag DATE NULL,
  beruf VARCHAR(50) NULL,
  interessen VARCHAR(250) NULL,
  lieblingsverein VARCHAR(100) NULL,
  homepage VARCHAR(250) NULL,
  icq VARCHAR(20) NULL,
  aim VARCHAR(30) NULL,
  yim VARCHAR(30) NULL,
  msn VARCHAR(30) NULL,
  lastonline INT(11) NOT NULL DEFAULT 0,
  lastaction VARCHAR(150) NULL,
  highscore INT(10) NOT NULL DEFAULT 0,
  fanbeliebtheit TINYINT(3) NOT NULL DEFAULT '50',
  c_showemail ENUM('1','0') NOT NULL DEFAULT '0',
  email_transfers ENUM('1','0') NOT NULL DEFAULT '0',
  email_pn ENUM('1','0') NOT NULL DEFAULT '0',
  history TEXT NULL,
  ip VARCHAR(25) NULL,
  ip_time INT(11) NOT NULL DEFAULT 0,
  c_hideinonlinelist ENUM('1','0') NOT NULL DEFAULT '0',
  premium_balance INT(6) NOT NULL DEFAULT 0,
  picture VARCHAR(255) NULL,
  status ENUM('1','2','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _user_inactivity (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  login TINYINT(3) NOT NULL DEFAULT '0',
  login_last INT(11) NOT NULL,
  login_check INT(11) NOT NULL,
  aufstellung TINYINT(3) NOT NULL DEFAULT '0',
  transfer TINYINT(3) NOT NULL DEFAULT '0',
  transfer_check INT(11) NOT NULL,
  vertragsauslauf TINYINT(3) NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _briefe (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  empfaenger_id INT(10) NOT NULL,
  absender_id INT(10) NOT NULL,
  absender_name VARCHAR(50) NULL,
  datum INT(10) NOT NULL,
  betreff VARCHAR(50) NULL,
  nachricht TEXT NULL,
  gelesen ENUM('1','0') NOT NULL DEFAULT '0',
  typ ENUM('eingang','ausgang') NOT NULL DEFAULT 'eingang'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _news (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  datum INT(10) NOT NULL,
  autor_id SMALLINT(5) NOT NULL,
  bild_id INT(10) NOT NULL,
  titel VARCHAR(100) NULL,
  nachricht TEXT NULL,
  linktext1 VARCHAR(100) NULL,
  linkurl1 VARCHAR(250) NULL,
  linktext2 VARCHAR(100) NULL,
  linkurl2 VARCHAR(250) NULL,
  linktext3 VARCHAR(100) NULL,
  linkurl3 VARCHAR(250) NULL,
  c_br ENUM('1','0') NOT NULL DEFAULT '0',
  c_links ENUM('1','0') NOT NULL DEFAULT '0',
  c_smilies ENUM('1','0') NOT NULL DEFAULT '0',
  status ENUM('1','2','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _liga (
  id SMALLINT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NULL,
  kurz VARCHAR(5) NULL,
  land VARCHAR(25) NULL,
  p_steh TINYINT(3) NOT NULL,
  p_sitz TINYINT(3) NOT NULL,
  p_haupt_steh TINYINT(3) NOT NULL,
  p_haupt_sitz TINYINT(3) NOT NULL,
  p_vip TINYINT(3) NOT NULL,
  preis_steh SMALLINT(5) NOT NULL,
  preis_sitz SMALLINT(5) NOT NULL,
  preis_vip SMALLINT(5) NOT NULL,
  admin_id SMALLINT(5) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _tabelle_markierung (
  id SMALLINT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  liga_id SMALLINT(5) NOT NULL,
  bezeichnung VARCHAR(50) NULL,
  farbe VARCHAR(10) NULL,
  platz_von SMALLINT(5) NOT NULL,
  platz_bis SMALLINT(5) NOT NULL,
  target_league_id INT(10) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _saison (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NULL,
  liga_id SMALLINT(5) NOT NULL,
  platz_1_id INT(10) NOT NULL,
  platz_2_id INT(10) NOT NULL,
  platz_3_id INT(10) NOT NULL,
  platz_4_id INT(10) NOT NULL,
  platz_5_id INT(10) NOT NULL,
  beendet ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _verein (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NULL,
  kurz VARCHAR(5) NULL,
  bild VARCHAR(100) NULL,
  liga_id SMALLINT(5) NULL,
  user_id INT(10) NULL,
  stadion_id INT(10) NULL,
  sponsor_id INT(10) NULL,
  training_id INT(5) NULL,
  platz TINYINT(2) NULL,
  sponsor_spiele SMALLINT(5) NOT NULL DEFAULT 0,
  finanz_budget INT(11) NOT NULL,
  preis_stehen SMALLINT(4) NOT NULL,
  preis_sitz SMALLINT(4) NOT NULL,
  preis_haupt_stehen SMALLINT(4) NOT NULL,
  preis_haupt_sitze SMALLINT(4) NOT NULL,
  preis_vip SMALLINT(4) NOT NULL,
  last_steh INT(6) NOT NULL DEFAULT 0,
  last_sitz INT(6) NOT NULL DEFAULT 0,
  last_haupt_steh INT(6) NOT NULL DEFAULT 0,
  last_haupt_sitz INT(6) NOT NULL DEFAULT 0,
  last_vip INT(6) NOT NULL DEFAULT 0,
  meisterschaften SMALLINT(4) NOT NULL DEFAULT 0,
  st_tore INT(6) NOT NULL DEFAULT 0,
  st_gegentore INT(6) NOT NULL DEFAULT 0,
  st_spiele SMALLINT(5) NOT NULL DEFAULT 0,
  st_siege SMALLINT(5) NOT NULL DEFAULT 0,
  st_niederlagen SMALLINT(5) NOT NULL DEFAULT 0,
  st_unentschieden SMALLINT(5) NOT NULL DEFAULT 0,
  st_punkte INT(6) NOT NULL DEFAULT 0,
  sa_tore INT(6) NOT NULL DEFAULT 0,
  sa_gegentore INT(6) NOT NULL DEFAULT 0,
  sa_spiele SMALLINT(5) NOT NULL DEFAULT 0,
  sa_siege SMALLINT(5) NOT NULL DEFAULT 0,
  sa_niederlagen SMALLINT(5) NOT NULL DEFAULT 0,
  sa_unentschieden SMALLINT(5) NOT NULL DEFAULT 0,
  sa_punkte INT(6) NOT NULL DEFAULT 0,
  min_target_rank SMALLINT(3) NOT NULL DEFAULT 0,
  history TEXT NULL,
  scouting_last_execution INT(11) NOT NULL DEFAULT 0,
  nationalteam ENUM('1', '0') NOT NULL DEFAULT '0',
  captain_id INT(10) NULL,
  strength TINYINT(3) NOT NULL DEFAULT 0,
  user_id_actual INT(10) NULL,
  interimmanager ENUM('1', '0') NOT NULL DEFAULT '0',
  status ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _spieler (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  vorname VARCHAR(30) NULL,
  nachname VARCHAR(30) NULL,
  kunstname VARCHAR(30) NULL,
  geburtstag DATE NOT NULL,
  verein_id INT(10) NULL,
  position ENUM('Torwart','Abwehr','Mittelfeld','Sturm') NOT NULL DEFAULT 'Mittelfeld',
  position_main ENUM('T','LV','IV', 'RV', 'LM', 'DM', 'ZM', 'OM', 'RM', 'LS', 'MS', 'RS') NULL,
  position_second ENUM('T','LV','IV', 'RV', 'LM', 'DM', 'ZM', 'OM', 'RM', 'LS', 'MS', 'RS') NULL,
  nation VARCHAR(30) NULL,
  picture VARCHAR(128) NULL,
  verletzt TINYINT(3) NOT NULL DEFAULT 0,
  gesperrt TINYINT(3) NOT NULL DEFAULT 0,
  gesperrt_cups TINYINT(3) NOT NULL DEFAULT 0,
  gesperrt_nationalteam TINYINT(3) NOT NULL DEFAULT 0,
  transfermarkt ENUM('1','0') NOT NULL DEFAULT '0',
  transfer_start INT(11) NOT NULL DEFAULT 0,
  transfer_ende INT(11) NOT NULL DEFAULT 0,
  transfer_mindestgebot INT(11) NOT NULL DEFAULT 0,
  w_staerke TINYINT(3) NOT NULL,
  w_technik TINYINT(3) NOT NULL,
  w_kondition TINYINT(3) NOT NULL,
  w_frische TINYINT(3) NOT NULL,
  w_zufriedenheit TINYINT(3) NOT NULL,
  einzeltraining ENUM('1','0') NOT NULL DEFAULT '0',
  note_last REAL(4,2) NOT NULL DEFAULT 0,
  note_schnitt REAL(4,2) NOT NULL DEFAULT 0,
  vertrag_gehalt INT(10) NOT NULL,
  vertrag_spiele SMALLINT(5) NOT NULL,
  vertrag_torpraemie INT(10) NOT NULL,
  marktwert INT(10) NOT NULL DEFAULT 0,
  st_tore INT(6) NOT NULL DEFAULT 0,
  st_assists INT(6) NOT NULL DEFAULT 0,
  st_spiele SMALLINT(5) NOT NULL DEFAULT 0,
  st_karten_gelb SMALLINT(5) NOT NULL DEFAULT 0,
  st_karten_gelb_rot SMALLINT(5) NOT NULL DEFAULT 0,
  st_karten_rot SMALLINT(5) NOT NULL DEFAULT 0,
  sa_tore INT(6) NOT NULL DEFAULT 0,
  sa_assists INT(6) NOT NULL DEFAULT 0,
  sa_spiele SMALLINT(5) NOT NULL DEFAULT 0,
  sa_karten_gelb SMALLINT(5) NOT NULL DEFAULT 0,
  sa_karten_gelb_rot SMALLINT(5) NOT NULL DEFAULT 0,
  sa_karten_rot SMALLINT(5) NOT NULL DEFAULT 0,
  history TEXT NULL,
  unsellable ENUM('1','0') NOT NULL DEFAULT '0',
  lending_fee INT(6) NOT NULL DEFAULT 0,
  lending_matches TINYINT NOT NULL DEFAULT 0,
  lending_owner_id INT(10) NULL,
  age TINYINT(3) NULL,
  status ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _transfer_angebot (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  spieler_id INT(10) NOT NULL,
  verein_id INT(10) NULL,
  user_id INT(10) NOT NULL,
  datum INT(11) NOT NULL,
  abloese INT(11) NOT NULL,
  handgeld INT(11) NOT NULL DEFAULT 0,
  vertrag_spiele SMALLINT(5) NOT NULL,
  vertrag_gehalt INT(7) NOT NULL,
  vertrag_torpraemie SMALLINT(5) NOT NULL DEFAULT 0,
  ishighest ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _stadion (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NULL,
  stadt VARCHAR(30) NULL,
  land VARCHAR(20) NULL,
  p_steh INT(6) NOT NULL,
  p_sitz INT(6) NOT NULL,
  p_haupt_steh INT(6) NOT NULL,
  p_haupt_sitz INT(6) NOT NULL,
  p_vip INT(6) NOT NULL,
  level_pitch TINYINT(2) NOT NULL DEFAULT 3,
  level_videowall TINYINT(2) NOT NULL DEFAULT 1,
  level_seatsquality TINYINT(2) NOT NULL DEFAULT 5,
  level_vipquality TINYINT(2) NOT NULL DEFAULT 5,
  maintenance_pitch TINYINT(2) NOT NULL DEFAULT 1,
  maintenance_videowall TINYINT(2) NOT NULL DEFAULT 1,
  maintenance_seatsquality TINYINT(2) NOT NULL DEFAULT 1,
  maintenance_vipquality TINYINT(2) NOT NULL DEFAULT 1,
  picture VARCHAR(128) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _konto (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  verein_id INT(10) NOT NULL,
  absender VARCHAR(150) NULL,
  betrag INT(10) NOT NULL,
  datum INT(11) NOT NULL,
  verwendung VARCHAR(200) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _sponsor (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NULL,
  bild VARCHAR(100) NULL,
  liga_id SMALLINT(5) NOT NULL,
  b_spiel INT(10) NOT NULL,
  b_heimzuschlag INT(10) NOT NULL,
  b_sieg INT(10) NOT NULL,
  b_meisterschaft INT(10) NOT NULL,
  max_teams SMALLINT(5) NOT NULL,
  min_platz TINYINT(3) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _training (
  id SMALLINT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NULL,
  w_staerke TINYINT(3) NOT NULL,
  w_technik TINYINT(3) NOT NULL,
  w_kondition TINYINT(3) NOT NULL,
  w_frische TINYINT(3) NOT NULL,
  w_zufriedenheit TINYINT(3) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _trainingslager (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NULL,
  land VARCHAR(30) NULL,
  bild VARCHAR(100) NULL,
  preis_spieler_tag INT(10) NOT NULL,
  p_staerke TINYINT(3) NOT NULL,
  p_technik TINYINT(3) NOT NULL,
  p_kondition TINYINT(3) NOT NULL,
  p_frische TINYINT(3) NOT NULL,
  p_zufriedenheit TINYINT(3) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _trainingslager_belegung (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  verein_id INT(10) NOT NULL,
  lager_id INT(10) NOT NULL,
  datum_start INT(10) NOT NULL,
  datum_ende INT(10) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _aufstellung (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  verein_id INT(10) NOT NULL,
  datum INT(11) NOT NULL,
  offensive TINYINT(3) NULL DEFAULT 50,
  spieler1 INT(10) NOT NULL,
  spieler2 INT(10) NOT NULL,
  spieler3 INT(10) NOT NULL,
  spieler4 INT(10) NOT NULL,
  spieler5 INT(10) NOT NULL,
  spieler6 INT(10) NOT NULL,
  spieler7 INT(10) NOT NULL,
  spieler8 INT(10) NOT NULL,
  spieler9 INT(10) NOT NULL,
  spieler10 INT(10) NOT NULL,
  spieler11 INT(10) NOT NULL,
  ersatz1 INT(10) NULL,
  ersatz2 INT(10) NULL,
  ersatz3 INT(10) NULL,
  ersatz4 INT(10) NULL,
  ersatz5 INT(10) NULL,
  w1_raus INT(10) NULL,
  w1_rein INT(10) NULL,
  w1_minute TINYINT(2) NULL,
  w2_raus INT(10) NULL,
  w2_rein INT(10) NULL,
  w2_minute TINYINT(2) NULL,
  w3_raus INT(10) NULL,
  w3_rein INT(10) NULL,
  w3_minute TINYINT(2) NULL,
  setup VARCHAR(16) NULL,
  w1_condition VARCHAR(16) NULL,
  w2_condition VARCHAR(16) NULL,
  w3_condition VARCHAR(16) NULL,
  longpasses ENUM('1', '0') NOT NULL DEFAULT '0',
  counterattacks ENUM('1', '0') NOT NULL DEFAULT '0',
  freekickplayer INT(10) NULL,
  w1_position VARCHAR(4) NULL,
  w2_position VARCHAR(4) NULL,
  w3_position VARCHAR(4) NULL,
  spieler1_position VARCHAR(4) NOT NULL,
  spieler2_position VARCHAR(4) NOT NULL,
  spieler3_position VARCHAR(4) NOT NULL,
  spieler4_position VARCHAR(4) NOT NULL,
  spieler5_position VARCHAR(4) NOT NULL,
  spieler6_position VARCHAR(4) NOT NULL,
  spieler7_position VARCHAR(4) NOT NULL,
  spieler8_position VARCHAR(4) NOT NULL,
  spieler9_position VARCHAR(4) NOT NULL,
  spieler10_position VARCHAR(4) NOT NULL,
  spieler11_position VARCHAR(4) NOT NULL,
  match_id INT(10) NULL REFERENCES _spiel(id) ON DELETE CASCADE,
  templatename VARCHAR(24) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _spiel (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  spieltyp ENUM('Ligaspiel','Pokalspiel','Freundschaft') NOT NULL DEFAULT 'Ligaspiel',
  elfmeter ENUM('1','0') NOT NULL DEFAULT '0',
  pokalname VARCHAR(30) NULL,
  pokalrunde VARCHAR(30) NULL,
  pokalgruppe VARCHAR(64) NULL,
  liga_id SMALLINT(5) NULL,
  saison_id INT(10) NULL,
  spieltag TINYINT(3) NULL,
  datum INT(10) NOT NULL,
  stadion_id INT(10) NULL,
  minutes TINYINT(3) NULL,
  player_with_ball INT(10) NULL,
  prev_player_with_ball INT(10) NULL,
  home_verein INT(10) NOT NULL,
  home_noformation ENUM('1','0') DEFAULT '0',
  home_offensive TINYINT(3) NULL,
  home_offensive_changed TINYINT(2) NOT NULL DEFAULT 0,
  home_tore TINYINT(2) NULL,
  home_spieler1 INT(10) NULL,
  home_spieler2 INT(10) NULL,
  home_spieler3 INT(10) NULL,
  home_spieler4 INT(10) NULL,
  home_spieler5 INT(10) NULL,
  home_spieler6 INT(10) NULL,
  home_spieler7 INT(10) NULL,
  home_spieler8 INT(10) NULL,
  home_spieler9 INT(10) NULL,
  home_spieler10 INT(10) NULL,
  home_spieler11 INT(10) NULL,
  home_ersatz1 INT(10) NULL,
  home_ersatz2 INT(10) NULL,
  home_ersatz3 INT(10) NULL,
  home_ersatz4 INT(10) NULL,
  home_ersatz5 INT(10) NULL,
  home_w1_raus INT(10) NULL,
  home_w1_rein INT(10) NULL,
  home_w1_minute TINYINT(2) NULL,
  home_w2_raus INT(10) NULL,
  home_w2_rein INT(10) NULL,
  home_w2_minute TINYINT(2) NULL,
  home_w3_raus INT(10) NULL,
  home_w3_rein INT(10) NULL,
  home_w3_minute TINYINT(2) NULL,
  gast_verein INT(10) NOT NULL,
  gast_tore TINYINT(2) NULL,
  guest_noformation ENUM('1','0') DEFAULT '0',
  gast_offensive TINYINT(3) NULL,
  gast_offensive_changed TINYINT(2) NOT NULL DEFAULT 0,
  gast_spieler1 INT(10) NULL,
  gast_spieler2 INT(10) NULL,
  gast_spieler3 INT(10) NULL,
  gast_spieler4 INT(10) NULL,
  gast_spieler5 INT(10) NULL,
  gast_spieler6 INT(10) NULL,
  gast_spieler7 INT(10) NULL,
  gast_spieler8 INT(10) NULL,
  gast_spieler9 INT(10) NULL,
  gast_spieler10 INT(10) NULL,
  gast_spieler11 INT(10) NULL,
  gast_ersatz1 INT(10) NULL,
  gast_ersatz2 INT(10) NULL,
  gast_ersatz3 INT(10) NULL,
  gast_ersatz4 INT(10) NULL,
  gast_ersatz5 INT(10) NULL,
  gast_w1_raus INT(10) NULL,
  gast_w1_rein INT(10) NULL,
  gast_w1_minute TINYINT(2) NULL,
  gast_w2_raus INT(10) NULL,
  gast_w2_rein INT(10) NULL,
  gast_w2_minute TINYINT(2) NULL,
  gast_w3_raus INT(10) NULL,
  gast_w3_rein INT(10) NULL,
  gast_w3_minute TINYINT(2) NULL,
  bericht TEXT NULL,
  zuschauer INT(6) NULL,
  berechnet ENUM('1','0') NOT NULL DEFAULT '0',
  soldout ENUM('1','0') NOT NULL DEFAULT '0',
  home_setup VARCHAR(16) NULL,
  home_w1_condition VARCHAR(16) NULL,
  home_w2_condition VARCHAR(16) NULL,
  home_w3_condition VARCHAR(16) NULL,
  gast_setup VARCHAR(16) NULL,
  gast_w1_condition VARCHAR(16) NULL,
  gast_w2_condition VARCHAR(16) NULL,
  gast_w3_condition VARCHAR(16) NULL,
  home_longpasses ENUM('1', '0') NOT NULL DEFAULT '0',
  home_counterattacks ENUM('1', '0') NOT NULL DEFAULT '0',
  gast_longpasses ENUM('1', '0') NOT NULL DEFAULT '0',
  gast_counterattacks ENUM('1', '0') NOT NULL DEFAULT '0',
  home_morale TINYINT(3) NOT NULL DEFAULT 0,
  gast_morale TINYINT(3) NOT NULL DEFAULT 0,
  home_user_id INT(10) NULL,
  gast_user_id INT(10) NULL,
  home_freekickplayer INT(10) NULL,
  home_w1_position VARCHAR(4) NULL,
  home_w2_position VARCHAR(4) NULL,
  home_w3_position VARCHAR(4) NULL,
  gast_freekickplayer INT(10) NULL,
  gast_w1_position VARCHAR(4) NULL,
  gast_w2_position VARCHAR(4) NULL,
  gast_w3_position VARCHAR(4) NULL,
  blocked ENUM('1', '0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _spiel_berechnung (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  spiel_id INT(10) NOT NULL,
  spieler_id INT(10) NOT NULL,
  team_id INT(10) NOT NULL,
  position VARCHAR(20) NULL,
  note REAL(4,2) NOT NULL,
  minuten_gespielt TINYINT(2) NOT NULL DEFAULT 0,
  karte_gelb TINYINT(1) NOT NULL DEFAULT 0,
  karte_rot TINYINT(1) NOT NULL DEFAULT 0,
  verletzt TINYINT(2) NOT NULL DEFAULT 0,
  gesperrt TINYINT(2) NOT NULL DEFAULT 0,
  tore TINYINT(2) NOT NULL DEFAULT 0,
  feld ENUM('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  position_main VARCHAR(5) NULL,
  age TINYINT(2) NULL,
  w_staerke TINYINT(3) NULL,
  w_technik TINYINT(3) NULL,
  w_kondition TINYINT(3) NULL,
  w_frische TINYINT(3) NULL,
  w_zufriedenheit TINYINT(3) NULL,
  ballcontacts TINYINT(3) NULL,
  wontackles TINYINT(3) NULL,
  shoots TINYINT(3) NULL,
  passes_successed TINYINT(3) NULL,
  passes_failed TINYINT(3) NULL,
  assists TINYINT(3) NULL,
  name VARCHAR(128) NULL,
  losttackles TINYINT(3) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _spiel_text (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  aktion ENUM(  'Tor',  'Auswechslung',  'Zweikampf_gewonnen',  'Zweikampf_verloren',  'Pass_daneben',  'Torschuss_daneben',  'Torschuss_auf_Tor',  'Karte_gelb',  'Karte_rot',  'Karte_gelb_rot',  'Verletzung', 'Elfmeter_erfolg',  'Elfmeter_verschossen', 'Taktikaenderung', 'Ecke', 'Freistoss_daneben', 'Freistoss_treffer', 'Tor_mit_vorlage' ),
  nachricht VARCHAR(250) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _transfer (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  spieler_id INT(10) NOT NULL,
  seller_user_id INT(10) NULL,
  seller_club_id INT(10) NULL,
  buyer_user_id INT(10) NULL,
  buyer_club_id INT(10) NOT NULL,
  datum INT(11) NOT NULL,
  bid_id INT(11) NOT NULL DEFAULT 0,
  directtransfer_amount INT(10) NOT NULL,
  directtransfer_player1 INT(10) NOT NULL DEFAULT 0,
  directtransfer_player2 INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _session (
  session_id CHAR(32) NOT NULL PRIMARY KEY,
  session_data TEXT NOT NULL,
  expires INT(11) NOT NULL
)  DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _matchreport (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  match_id INT(10) NOT NULL,
  message_id INT(10) NOT NULL,
  minute TINYINT(3) NOT NULL,
  goals VARCHAR(8) NULL,
  playernames VARCHAR(128) NULL,
  active_home TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _trainer (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(64) NOT NULL,
  salary INT(10) NOT NULL,
  p_technique TINYINT(3) NOT NULL DEFAULT '0',
  p_stamina TINYINT(3) NOT NULL DEFAULT '0',
  premiumfee INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _training_unit (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  team_id INT(10) NOT NULL,
  trainer_id INT(10) NOT NULL,
  focus ENUM('TE','STA','MOT','FR') NOT NULL DEFAULT 'TE',
  intensity TINYINT(3) NOT NULL DEFAULT '50',
  date_executed INT(10) NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _cup (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(64) NOT NULL UNIQUE,
  winner_id INT(10) NULL,
  logo VARCHAR(128) NULL,
  winner_award INT(10) NOT NULL DEFAULT 0,
  second_award INT(10) NOT NULL DEFAULT 0,
  perround_award INT(10) NOT NULL DEFAULT 0,
  archived ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _cup_round (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cup_id INT(10) NOT NULL,
  name VARCHAR(64) NOT NULL,
  from_winners_round_id INT(10) NULL,
  from_loosers_round_id INT(10) NULL,
  firstround_date INT(11) NOT NULL,
  secondround_date INT(11) NULL,
  finalround ENUM('1','0') NOT NULL DEFAULT '0',
  groupmatches ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _cup_round_pending (
  team_id INT(10) NOT NULL,
  cup_round_id INT(10) NOT NULL,
  PRIMARY KEY(team_id, cup_round_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _cup_round_group (
  cup_round_id INT(10) NOT NULL,
  team_id INT(10) NOT NULL,
  name VARCHAR(64) NOT NULL,
  tab_points INT(4) NOT NULL DEFAULT 0,
  tab_goals INT(4) NOT NULL DEFAULT 0,
  tab_goalsreceived INT(4) NOT NULL DEFAULT 0,
  tab_wins INT(4) NOT NULL DEFAULT 0,
  tab_draws INT(4) NOT NULL DEFAULT 0,
  tab_losses INT(4) NOT NULL DEFAULT 0,
  PRIMARY KEY(cup_round_id, team_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _cup_round_group_next (
  cup_round_id INT(10) NOT NULL,
  groupname VARCHAR(64) NOT NULL,
  rank INT(4) NOT NULL DEFAULT 0,
  target_cup_round_id INT(10) NOT NULL,
  PRIMARY KEY(cup_round_id, groupname, rank)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _team_league_statistics (
  team_id INT(10) NOT NULL,
  season_id INT(10) NOT NULL,
  total_points INT(6) NOT NULL DEFAULT 0,
  total_goals INT(6) NOT NULL DEFAULT 0,
  total_goalsreceived INT(6) NOT NULL DEFAULT 0,
  total_goalsdiff INT(6) NOT NULL DEFAULT 0,
  total_wins INT(6) NOT NULL DEFAULT 0,
  total_draws INT(6) NOT NULL DEFAULT 0,
  total_losses INT(6) NOT NULL DEFAULT 0,
  home_points INT(6) NOT NULL DEFAULT 0,
  home_goals INT(6) NOT NULL DEFAULT 0,
  home_goalsreceived INT(6) NOT NULL DEFAULT 0,
  home_goalsdiff INT(6) NOT NULL DEFAULT 0,
  home_wins INT(6) NOT NULL DEFAULT 0,
  home_draws INT(6) NOT NULL DEFAULT 0,
  home_losses INT(6) NOT NULL DEFAULT 0,
  guest_points INT(6) NOT NULL DEFAULT 0,
  guest_goals INT(6) NOT NULL DEFAULT 0,
  guest_goalsreceived INT(6) NOT NULL DEFAULT 0,
  guest_goalsdiff INT(6) NOT NULL DEFAULT 0,
  guest_wins INT(6) NOT NULL DEFAULT 0,
  guest_draws INT(6) NOT NULL DEFAULT 0,
  guest_losses INT(6) NOT NULL DEFAULT 0,
  PRIMARY KEY(team_id, season_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _transfer_offer (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  player_id INT(10) NOT NULL,
  sender_user_id INT(10) NOT NULL,
  sender_club_id INT(10) NOT NULL,
  receiver_club_id INT(10) NOT NULL,
  submitted_date INT(11) NOT NULL,
  offer_amount INT(10) NOT NULL,
  offer_message VARCHAR(255) NULL,
  offer_player1 INT(10) NOT NULL DEFAULT 0,
  offer_player2 INT(10) NOT NULL DEFAULT 0,
  rejected_date INT(11) NOT NULL DEFAULT 0,
  rejected_message VARCHAR(255) NULL,
  rejected_allow_alternative ENUM('1','0') NOT NULL DEFAULT '0',
  admin_approval_pending ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _notification (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  eventdate INT(11) NOT NULL,
  eventtype VARCHAR(128) NULL,
  message_key VARCHAR(255) NULL,
  message_data VARCHAR(255) NULL,
  target_pageid VARCHAR(128) NULL,
  target_querystr VARCHAR(255) NULL,
  seen ENUM('1','0') NOT NULL DEFAULT '0',
  team_id INT(10) NULL REFERENCES _verein(id) ON DELETE CASCADE
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthplayer (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  team_id INT(10) NOT NULL,
  firstname VARCHAR(32) NOT NULL,
  lastname VARCHAR(32) NOT NULL,
  age TINYINT NOT NULL,
  position ENUM('Torwart','Abwehr','Mittelfeld','Sturm') NOT NULL,
  nation VARCHAR(32) NULL,
  strength TINYINT(3) NOT NULL,
  strength_last_change TINYINT(3) NOT NULL DEFAULT 0,
  st_goals SMALLINT(5) NOT NULL DEFAULT 0,
  st_matches SMALLINT(5) NOT NULL DEFAULT 0,
  st_assists SMALLINT(5) NOT NULL DEFAULT 0,
  st_cards_yellow SMALLINT(5) NOT NULL DEFAULT 0,
  st_cards_yellow_red SMALLINT(5) NOT NULL DEFAULT 0,
  st_cards_red SMALLINT(5) NOT NULL DEFAULT 0,
  transfer_fee INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthscout (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(32) NOT NULL,
  expertise TINYINT(3) NOT NULL,
  fee INT(10) NOT NULL,
  speciality ENUM('Torwart','Abwehr','Mittelfeld','Sturm') NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthmatch_request (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  team_id INT(10) NOT NULL,
  matchdate INT(11) NOT NULL,
  reward INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthmatch (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  matchdate INT(11) NOT NULL,
  home_team_id INT(10) NOT NULL,
  home_noformation ENUM('1','0') DEFAULT '0',
  home_s1_out INT(10) NULL,
  home_s1_in INT(10) NULL,
  home_s1_minute TINYINT(3) NULL,
  home_s1_condition VARCHAR(16) NULL,
  home_s1_position VARCHAR(4) NULL,
  home_s2_out INT(10) NULL,
  home_s2_in INT(10) NULL,
  home_s2_minute TINYINT(3) NULL,
  home_s2_condition VARCHAR(16) NULL,
  home_s2_position VARCHAR(4) NULL,
  home_s3_out INT(10) NULL,
  home_s3_in INT(10) NULL,
  home_s3_minute TINYINT(3) NULL,
  home_s3_condition VARCHAR(16) NULL,
  home_s3_position VARCHAR(4) NULL,
  guest_team_id INT(10) NOT NULL,
  guest_noformation ENUM('1','0') DEFAULT '0',
  guest_s1_out INT(10) NULL,
  guest_s1_in INT(10) NULL,
  guest_s1_minute TINYINT(3) NULL,
  guest_s1_condition VARCHAR(16) NULL,
  guest_s1_position VARCHAR(4) NULL,
  guest_s2_out INT(10) NULL,
  guest_s2_in INT(10) NULL,
  guest_s2_minute TINYINT(3) NULL,
  guest_s2_condition VARCHAR(16) NULL,
  guest_s2_position VARCHAR(4) NULL,
  guest_s3_out INT(10) NULL,
  guest_s3_in INT(10) NULL,
  guest_s3_minute TINYINT(3) NULL,
  guest_s3_condition VARCHAR(16) NULL,
  guest_s3_position VARCHAR(4) NULL,
  home_goals TINYINT(2) NULL,
  guest_goals TINYINT(2) NULL,
  simulated ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthmatch_player (
  match_id INT(10) NOT NULL,
  team_id INT(10) NOT NULL,
  player_id INT(10) NOT NULL,
  playernumber TINYINT(2) NOT NULL,
  position VARCHAR(24) NOT NULL,
  position_main VARCHAR(8) NOT NULL,
  grade REAL(4,2) NOT NULL DEFAULT 3.0,
  minutes_played TINYINT(2) NOT NULL DEFAULT 0,
  card_yellow TINYINT(1) NOT NULL DEFAULT 0,
  card_red TINYINT(1) NOT NULL DEFAULT 0,
  goals TINYINT(2) NOT NULL DEFAULT 0,
  state ENUM('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  strength TINYINT(3) NOT NULL,
  ballcontacts TINYINT(3) NOT NULL DEFAULT 0,
  wontackles TINYINT(3) NOT NULL DEFAULT 0,
  shoots TINYINT(3) NOT NULL DEFAULT 0,
  passes_successed TINYINT(3) NOT NULL DEFAULT 0,
  passes_failed TINYINT(3) NOT NULL DEFAULT 0,
  assists TINYINT(3) NOT NULL DEFAULT 0,
  name VARCHAR(128) NOT NULL,
  FOREIGN KEY (match_id) REFERENCES _youthmatch(id) ON DELETE CASCADE,
  PRIMARY KEY (match_id, player_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _youthmatch_reportitem (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  match_id INT(10) NOT NULL,
  minute TINYINT(3) NOT NULL,
  message_key VARCHAR(32) NOT NULL,
  message_data VARCHAR(255) NULL,
  home_on_ball ENUM('1','0') NOT NULL DEFAULT '0',
  FOREIGN KEY (match_id) REFERENCES _youthmatch(id) ON DELETE CASCADE
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _stadium_builder (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(32) NOT NULL,
  picture VARCHAR(128) NULL,
  fixedcosts INT(10) NOT NULL DEFAULT 0,
  cost_per_seat INT(10) NOT NULL DEFAULT 0,
  construction_time_days TINYINT(3) NOT NULL DEFAULT 0,
  construction_time_days_min TINYINT(3) NOT NULL DEFAULT 0,
  min_stadium_size INT(10) NOT NULL DEFAULT 0,
  max_stadium_size INT(10) NOT NULL DEFAULT 0,
  reliability TINYINT(3) NOT NULL DEFAULT 100,
  premiumfee INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _stadium_construction (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  team_id INT(10) NOT NULL,
  builder_id INT(10) NOT NULL,
  started INT(11) NOT NULL,
  deadline INT(11) NOT NULL,
  p_steh INT(6) NOT NULL DEFAULT 0,
  p_sitz INT(6) NOT NULL DEFAULT 0,
  p_haupt_steh INT(6) NOT NULL DEFAULT 0,
  p_haupt_sitz INT(6) NOT NULL DEFAULT 0,
  p_vip INT(6) NOT NULL DEFAULT 0,
  FOREIGN KEY (builder_id) REFERENCES _stadium_builder(id) ON DELETE RESTRICT
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _teamoftheday (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  season_id INT(10) NOT NULL,
  matchday TINYINT(3) NOT NULL,
  statistic_id INT(10) NOT NULL,
  player_id INT(10) NOT NULL,
  position_main VARCHAR(20) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _nationalplayer (
  team_id INT(10) NOT NULL,
  player_id INT(10) NOT NULL,
  PRIMARY KEY (team_id, player_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _premiumstatement (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  action_id VARCHAR(255) NULL,
  amount INT(10) NOT NULL,
  created_date INT(11) NOT NULL,
  subject_data VARCHAR(255) NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _premiumpayment (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  amount INT(10) NOT NULL,
  created_date INT(11) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _useractionlog (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  action_id VARCHAR(255) NULL,
  created_date INT(11) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _shoutmessage (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  message VARCHAR(255) NOT NULL,
  created_date INT(11) NOT NULL,
  match_id INT(10) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE,
  FOREIGN KEY (match_id) REFERENCES _spiel(id) ON DELETE CASCADE
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _userabsence (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL,
  deputy_id INT(10) NULL,
  from_date INT(11) NOT NULL,
  to_date INT(11) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE,
  FOREIGN KEY (deputy_id) REFERENCES _user(id) ON DELETE SET NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _leaguehistory (
  team_id INT(10) NOT NULL,
  season_id INT(10) NOT NULL,
  user_id INT(10) NULL,
  matchday TINYINT(3) NULL,
  rank TINYINT(3) NULL,
  FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE,
  FOREIGN KEY (season_id) REFERENCES _saison(id) ON DELETE CASCADE,
  FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE SET NULL,
  PRIMARY KEY(team_id, season_id, matchday)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _randomevent (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  message VARCHAR(255) NULL,
  effect ENUM('money', 'player_injured', 'player_blocked', 'player_happiness', 'player_fitness', 'player_stamina') NOT NULL,
  effect_money_amount INT(10) NOT NULL DEFAULT 0,
  effect_blocked_matches INT(10) NOT NULL DEFAULT 0,
  effect_skillchange TINYINT(3) NOT NULL DEFAULT 0,
  weight TINYINT(3) NOT NULL DEFAULT 1,
  status ENUM('1','0') NOT NULL DEFAULT '0'
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _randomevent_occurrence (
  user_id INT(10) NOT NULL,
  team_id INT(10) NOT NULL,
  event_id INT(10) NOT NULL,
  occurrence_date INT(10) NOT NULL,
  FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE,
  FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE,
  FOREIGN KEY (event_id) REFERENCES _randomevent(id) ON DELETE CASCADE,
  PRIMARY KEY(user_id, team_id, occurrence_date)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _badge (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(128) NOT NULL,
  description VARCHAR(255) NULL,
  level ENUM('bronze', 'silver', 'gold') NOT NULL DEFAULT 'bronze',
  event ENUM('membership_since_x_days', 'win_with_x_goals_difference', 'completed_season_at_x', 'x_trades', 'cupwinner', 'stadium_construction_by_x') NOT NULL,
  event_benchmark INT(10) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _badge_user (
  user_id INT(10) NOT NULL REFERENCES _user(id) ON DELETE CASCADE,
  badge_id INT(10) NOT NULL REFERENCES _badge(id) ON DELETE CASCADE,
  date_rewarded INT(10) NOT NULL,
  PRIMARY KEY(user_id, badge_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _achievement (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT(10) NOT NULL REFERENCES _user(id) ON DELETE CASCADE,
  team_id INT(10) NOT NULL REFERENCES _verein(id) ON DELETE CASCADE,
  season_id INT(10) NULL REFERENCES _saison(id) ON DELETE CASCADE,
  cup_round_id INT(10) NULL REFERENCES _cup_round(id) ON DELETE CASCADE,
  rank TINYINT(3) NULL,
  date_recorded INT(10) NOT NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _stadiumbuilding (
  id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description VARCHAR(255) NULL,
  picture VARCHAR(255) NULL,
  required_building_id INT(10) NULL,
  costs INT(10) NOT NULL,
  premiumfee INT(10) NOT NULL DEFAULT 0,
  construction_time_days TINYINT(3) NOT NULL DEFAULT 0,
  effect_training TINYINT(3) NOT NULL DEFAULT 0,
  effect_youthscouting TINYINT(3) NOT NULL DEFAULT 0,
  effect_tickets TINYINT(3) NOT NULL DEFAULT 0,
  effect_fanpopularity TINYINT(3) NOT NULL DEFAULT 0,
  effect_injury TINYINT(3) NOT NULL DEFAULT 0,
  effect_income INT(10) NOT NULL DEFAULT 0,
  status ENUM('1','0') NOT NULL DEFAULT '0',
  FOREIGN KEY (required_building_id) REFERENCES _stadiumbuilding(id) ON DELETE SET NULL
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

CREATE TABLE _buildings_of_team (
  building_id INT(10) NOT NULL,
  team_id INT(10) NOT NULL,
  construction_deadline INT(11) NULL,
  FOREIGN KEY (building_id) REFERENCES _stadiumbuilding(id) ON DELETE CASCADE,
  FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE,
  PRIMARY KEY (building_id, team_id)
) DEFAULT CHARSET=utf8, ENGINE=InnoDB;

-- einf�gen der Spielmeldungen
INSERT INTO `_spiel_text` (`aktion`, `nachricht`) VALUES
( 'Tor', '<b>{ma1} : </b>Tor von {sp1} !'),
( 'Tor', '<b>{ma1} : </b>{sp1} schießt..... TOR !'),
( 'Tor', '<b>{ma1} : </b>TOR - wunderschön gemacht von {sp1}'),
( 'Tor', '<b>{ma1} : </b>{sp1} schießt auf das Tor... und der Ball ist drin !'),
( 'Auswechslung', '<b>{ma1} : </b><i>{sp1} kommt für {sp2}.</i>'),
( 'Zweikampf_gewonnen', '{sp1} geht auf seinen Gegenspieler zu und gewinnt den Zweikampf!'),
(  'Zweikampf_gewonnen', '{sp1} in einem Zweikampf.... gewonnen!'),
( 'Zweikampf_gewonnen', '{sp1} läuft mit dem Ball am Fuß auf seinen Gegenspieler zu... und gewinnt den Zweikampf.'),
( 'Zweikampf_gewonnen', '{sp1} nimmt seinem Gegenspieler gekonnt den Ball von den Füßen.'),
( 'Zweikampf_verloren', '{sp1} geht auf {sp2} zu... und verliert den Zweikampf.'),
( 'Zweikampf_verloren', '{sp1} in einem Zweikampf.... und verliert ihn.'),
( 'Zweikampf_verloren', '{sp1} geht mit dem Ball am Fuß auf seinen Gegenspieler zu... und verliert ihn.'),
( 'Zweikampf_verloren', '{sp1} sieht seinen Gegenspieler gegenüber und lässt sich den Ball abnehmen.'),
( 'Pass_daneben', 'Flanke von {sp1}... in die Wolken!'),
( 'Pass_daneben', '{sp1} passt den Ball in die Mitte... genau auf die Füße des Gegners.'),
( 'Pass_daneben', '{sp1} passt den Ball steil nach vorne... Abschlag!'),
( 'Pass_daneben', 'Pass von {sp1}... ins Seitenaus.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} hat freie Bahn und schießt... weit über das Tor.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt..... daneben.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt auf das Tor... aber genau auf den Torwart.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Kopfball {sp1}... daneben.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} haut mit aller Kraft auf den Ball... Abschlag.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt..... in die Wolken.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} schießt..... Glanzparade des Torwarts!'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} schießt auf das Tor... aber der Torwart macht einen Hechtsprung und hat den Ball.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} hat freie Bahn und schießt... aber der Torwart kann den Ball gerade noch so um den Pfosten drehen.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} kommt zum Kopfball... ganz knapp daneben.'),
( 'Tor', '<b>{ma1} : </b>{sp1} kommt zum Kopfball... und da flattert der Ball im Netz !'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} bekommt nach einem Foul die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} sieht die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} haut seinen Gegenspieler um und bekommt dafür die gelbe Karte.'),
( 'Karte_rot', '<b>{ma1} : </b><i>{sp1} springt von hinten in die Beine seinen Gegenspielers und sieht sofort die Rote Karte.</i>'),
( 'Karte_rot', '<b>{ma1} : </b><i>{sp1} haut seinen Gegenspieler um und sieht dafür die Rote Karte.</i>'),
( 'Karte_rot', '<b>{ma1} : </b><i>{sp1} bekommt die Rote Karte wegen Tätlichkeit.</i>'),
( 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} sieht die Gelb-Rote Karte und muss vom Platz.</i>'),
( 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} haut seinen Gegenspieler um und bekommt dafür die Gelb-Rote Karte.</i>'),
( 'Karte_rot', '<b>{ma1} : </b><i>{sp1} sieht nach einem bösen Foul die Rote Karte und muss vom Platz.</i>'),
( 'Verletzung', '<b>{ma1} : </b><i>{sp1} ist verletzt und muss vom Spielfeld getragen werden.</i>'),
( 'Verletzung', '<b>{ma1} : </b><i>{sp1} hat sich verletzt und kann nicht mehr weiterspielen.</i>'),
( 'Elfmeter_erfolg', ' <b>{ma1} : </b>{sp1} tritt an: Und trifft !'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} tritt an: Aber {sp2} hält den Ball !!'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} legt sich den Ball zurecht. Etwas unsicherer Anlauf... und haut den Ball über das Tor.'),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} macht eine Taktikänderung !'),
( 'Ecke', '<b>{ma1} : </b>Ecke ! {sp1} spielt auf {sp2}...'),
( 'Freistoss_daneben', '<b>{ma1} : </b>Freistoß ! {sp1} schießt, aber zu ungenau.'),
( 'Freistoss_treffer', '<b>{ma1} : </b>{sp1} tritt den direkten Freistoß und trifft  für {ma1} !'),
( 'Tor_mit_vorlage', ' <b>{ma1} : </b>Tooor für {ma1} ! {sp2} legt auf {sp1} ab, der nur noch einschieben muss.'),
( 'Zweikampf_verloren', '{sp1} begibt sich ins Laufduell mit {sp2}, kann aber nicht vorbeiziehen.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} wird von {sp2} bedient, zieht im Volltempo in den Strafraum und ab - rechts vorbei.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein weiter Schlag soll bei {sp1} landen, finden allerdings nur die offenen Arme von Keeper {sp2}.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} mit einem weiteren Foul, dieses Mal hagelt es die Gelbe Karte.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} Ist {sp1} vielleicht der Matchwinner?'),
( 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} {sp1} soll den Druck verstärken.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} der womöglich ausgelaugt ist.'),
( 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach der Vorlage von {sp2} nimmt {sp1} den Ball in einer Bewegung und donnert den Ball rein.'),
( 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach einem Steilpass von {sp2} braucht {sp1} nur noch rein zuschieben.'),
( 'Tor_mit_vorlage', ' <b>{ma1} : </b>{sp1} nimmt die Flanke von {sp2} direkt ab, so das der Torhüter keine Chance hat.'),
( 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach einem Kurzpass von {sp2} wird {sp1} in Szene gesetzt, der eiskalt verwandelt.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp2} hatte alles versucht und wird nun von {sp1} ersetzt.'),
( 'Auswechslung', '<b>{ma1} : </b>Warum {sp2} ausgewechselt wird weiß nur der Trainer, der nun {sp1} bringt'),
( 'Auswechslung', '<b>{ma1} : </b>{sp1} kommt ins Spiel, ob er Belebung ins Spiel bringen kann ? Dafür muss {sp2} weichen.'),
( 'Auswechslung', '<b>{ma1} : </b>Unter Protest verlässt {sp2} den Platz, der dem eingewechselten {sp1} weichen muss.'),
( 'Auswechslung', '<b>{ma1} : </b>Oh Mann, warum kommt den nun {sp1} für {sp2} auf den Platz.'),
( 'Auswechslung', '<b>{ma1} : </b>Jetzt kommt {sp1} für {sp2} rein, der Gegner muss sich warm anziehen.'),
( 'Tor', '<b>{ma1} : </b>Dumm gelaufen für den Torwart den {sp1} macht seinen Treffer.'),
( 'Tor', '<b>{ma1} : </b>Knallhart setzte {sp1} den Ball unter der Latte ins Tor.'),
( 'Tor', '<b>{ma1} : </b>Manchmal braucht man nur den Fuß hin zuhalten und drin war er für {sp2}.'),
( 'Tor', '<b>{ma1} : </b>Nach einer Ball-Stafette machte {sp1} das Tor.'),
( 'Tor', '<b>{ma1} : </b>Tolle Sache, mit dem Heber konnte {sp1} sein Torkonto bereichern.'),
( 'Verletzung', '<b>{ma1} : </b><i>Da hat der Gegenspieler voll zugelangt, so das {sp1} vom Platz muss.</i>'),
( 'Verletzung', '<b>{ma1} : </b><i>{sp1} war schon die ganze Zeit angeschlagen und darf nun vom Platz.</i>'),
( 'Verletzung', '<b>{ma1} : </b><i>Vorsorglich wird {sp1} vom Platz genommen.</i>'),
( 'Karte_gelb_rot', '<b>{ma1} : </b><i>Das Foul musste nicht sein, dafür kassiert {sp1} nun Gelb/Rot.</i>'),
( 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} hatte nun ein taktisches Foul zu viel und muss nach der zweiten groben Aktion nun vom Platz.</i>'),
( 'Karte_gelb_rot', '<b>{ma1} : </b><i>Jetzt reicht es dem Schiedsrichter, {sp1} sieht nun endlich Gelb/Rot.</i>'),
( 'Karte_gelb', '<b>{ma1} : </b>Ein verstecktes Foul bringt {sp1} nun die gelbe Karte ein.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} wollte die Hand nicht vom Trikot des Gegners lassen und sieht Gelb.'),
( 'Karte_gelb', '<b>{ma1} : </b>Für diese Schauspieleinlage bekommt {sp1} zurecht die Gelbe.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} glaubt es nicht, er bekommt die gelbe Karte zu Unrecht.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} drischt den Ball einfach weg, obwohl der Schiedsrichter das Spiel schon unterbrochen hatte.'),
( 'Karte_gelb', '<b>{ma1} : </b>Konsequenter Weise bekommt {sp1} Gelb für diese Unsportlichkeit. '),
( 'Taktikaenderung', '<b>{ma1} : </b>Ob dieser Schachzug vom {sp1} zum Erfolg führt ?'),
( 'Taktikaenderung', '<b>{ma1} : </b>Auch wenn {sp1} nun handelt, muss das Spiel nicht unbedingt besser werden.'),
( 'Taktikaenderung', '<b>{ma1} : </b>Das wurde aber auch Zeit, ob die Änderung von {sp1} zum jetzigen Zeitpunkt noch greift ?'),
( 'Taktikaenderung', '<b>{ma1} : </b>Die Taktikumstellung von {sp1} hatte keiner vorhersehen können.'),
( 'Pass_daneben', 'Wieder lässt sich {sp1} unnötig den Ball abnehmen.'),
( 'Pass_daneben', '{sp1} macht einen Querpass, der aber nicht ankommt.'),
( 'Pass_daneben', '{sp1} versuchte mit einem weiten Pass das Spiel zu öffnen, der aber nicht ankommt. '),
( 'Pass_daneben', '{sp1} überzeugte mit seinem Passspiel wenig.'),
( 'Pass_daneben', '{sp1}´s Direktabnahme hatte nicht die gewünschte Wirkung. '),
( 'Pass_daneben', '{sp1}´s Pass klebt am Fuß des Gegners.'),
( 'Zweikampf_gewonnen', '{sp1} steigt energisch ein und nimmt {sp2} den Ball von den Füßen. '),
( 'Zweikampf_gewonnen', '{sp2} hatte das Nachsehen, als {sp1} ihm gekonnt den Ball weg lupfte.'),
( 'Zweikampf_gewonnen', '{sp1} ließ {sp2} einfach stehen, der einfach nicht nachkommen konnte.'),
( 'Zweikampf_gewonnen', 'Den Ball von Rechts auf Links gelegt und schon war {sp1} am {sp2} vorbei.'),
( 'Zweikampf_gewonnen', 'Immer wieder schön zu sehen, wenn {sp1} den Ball gekonnt mitnimmt.'),
( 'Zweikampf_gewonnen', '{sp1} darf man nicht aus den Augen lassen, denn so hat man keine Chance ihn aufzuhalten.'),
( 'Zweikampf_verloren', '{sp1} macht einfach gar nichts und verliert den Ball.'),
( 'Zweikampf_verloren', '{sp1} macht einfach gar nichts und verliert den Ball.'),
( 'Zweikampf_verloren', '{sp2} spielt Katz und Maus mit {sp1}.'),
( 'Zweikampf_verloren', 'Da sieht man, das {sp2} mehr kann als er sonst zeigt. denn {sp1} kann ihm nicht den Ball nehmen.'),
( 'Zweikampf_verloren', '{sp1} geht problemlos an {sp2} vorbei.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein Heberversuch von {sp1}, doch der Torhüter bekommt noch den Ball.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Kein Tor für {ma1} der Torhüter war auf den Posten.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Das wäre es fast gewesen für {ma1}, doch der Ball geht vorbei.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Man was für ein Lattenknaller, so bleibt es für {ma1} beim Spielstand.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Auch wenn {ma1} noch so drängt, der Pfosten hilft  {ma2} im Spiel zu bleiben.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Glück für {ma2} Unterkante Latte und doch nicht im Tor für  {ma1}.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} versucht es mit einem Fallrückzieher, aber doch daneben.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>War es eine Flanke oder ein Torschuss ? Der Ball nahm den Weg neben das Tor.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Volleyschuss aufs Tor, doch knapp drüber.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Knapp vorbei, weil {sp1} zu genau gezielt hat.'),
( 'Zweikampf_verloren', '{sp1} versucht mit einem Übersteiger an {sp2} vorbei zu kommen, doch er verliert den Ball.'),
( 'Zweikampf_verloren', '{sp1} dribbelt sich da durch zwei gegnerische Spieler gleichzeitig durch, will auch noch durch {sp2}, aber das geht nicht!'),
( 'Zweikampf_verloren', ' Entweder ist man sich schon zu sicher oder zu lustlos, jedenfalls verliert {sp1} schon wieder den Ball an {sp2}.'),
( 'Zweikampf_verloren', '{sp1} läuft und läuft und scheint {sp2} gar nicht zu sehen, jedenfalls laufen die beiden genau gegeneinander und der Ballbesitz wechselt die Seiten.'),
( 'Zweikampf_verloren', 'Toller Pass aus der Bedrängnis in die Spitze zu {sp1}. Der bekommt den Ball aber nicht wirklich unter Kontrolle und vertändelt ihn gegen {sp2}. '),
( 'Zweikampf_verloren', '{sp1} läuft sich in dieser Situation fest, {sp2} gewinnt den Zweikampf. '),
( 'Zweikampf_verloren', 'Die schnelle Ballverarbeitung ist noch nie seine Stärke gewesen, aber die letzte Szene war einfach nur peinlich. {sp1} schaut {sp2} noch immer verdutzt hinterher, denn der führt den Ball jetzt am Fuß. '),
( 'Zweikampf_gewonnen', '{sp1} legt den Ball rechts an {sp2} vorbei und sprintet links an ihm vorbei. Damit hat {sp2} überhaupt nicht gerechnet.'),
( 'Zweikampf_gewonnen', '{sp1} tanzt da elegant durch das Mittelfeld und kann sogar einer Grätsche von {sp2} entkommen.'),
( 'Zweikampf_gewonnen', '{sp1} läuft alleine Richtung gegnerischem Strafraum und direkt auf {sp2} zu, kann diesem jedoch mit Hilfe einer schönen Pirouette ausweichen.'),
( 'Zweikampf_gewonnen', '{sp1} kämpft sich durch die Reihen, tritt und stolpert vor sich her und kann irgendwie noch dem Bein von {sp2} entgleiten.'),
( 'Zweikampf_gewonnen', 'Geschickter Ballgewinn von {sp1}. Routiniert spitzelt er dem verdutzt dreinblickenden {sp2} den Ball von den Füßen. '),
( 'Zweikampf_gewonnen', 'Gut aufgepasst von {sp1}, der im richtigen Moment die Tür zumacht. {sp2} wäre sonst durchgestartet.'),
( 'Zweikampf_gewonnen', 'Nachdem der erste Zweikampf schon gewonnen wurde, blockt {sp1} jetzt auch noch den Passversuch von {sp2}. '),
( 'Zweikampf_gewonnen', 'Das ist einfach klasse. {sp1} macht das in dieser Szene ganz clever, indem er seinem Gegner einfach den Ball abläuft. '),
( 'Zweikampf_gewonnen', '{sp2} setzt zum Tempodribbling an und umkurvt den ersten Gegenspieler. Doch {sp1} geht da mit der richtigen Härte rein und gewinnt den Zweikampf.'),
( 'Zweikampf_gewonnen', 'Nasse Bodenverhältnisse auf den ein Dribbling schwer ist. {sp2} kommt angerutscht und nimmt {sp1} den Ball ab.'),
( 'Zweikampf_gewonnen', 'Mit dieser präzisen Grätsche gegen {sp2} unterbindet {sp1} den schnellen Konter von {ma2}.'),
( 'Zweikampf_gewonnen', '{sp1} erobert mit einem beherzten Einsteigen den Ball. {sp2} wirkt danach etwas angeschlagen, aber da lief alles fair ab.'),
( 'Verletzung', '<b>{ma1} : </b>Bittere Pille für {ma1}. {sp1} setzt zum Volley an, aber {sp2} haut ihn voll um. {sp1} welzt sich am Boden und wird jetzt vom Platz getragen.'),
( 'Verletzung', ' <b>{ma1} : </b>Das ist Bitter für {sp1}, der nach einem rüden Foul von {sp2} vom Platz getragen werden muss.'),
( 'Verletzung', '<b>{ma1} : </b>{sp1} verfehlt den Ball und knallt mit dem Kopf gegen den Pfosten !'),
( 'Verletzung', '<b>{ma1} : </b>Mitten im Sprint knickt {sp1} weg. Er hat sich das Bein so verdreht, dass er mit schmerzverzerrtem Gesicht in die Umkleide humpelt.'),
( 'Verletzung', '<b>{ma1} : </b>{sp1} bekommt den Ellbogen von seinem Gegenspieler gegen die Nase und muss blutüberströmt vom Feld. Er wird heute nicht wieder kommen können.'),
( 'Verletzung', '<b>{ma1} : </b>Nach diesem unglücklichen Tritt in den Rasen ist für {sp1} die Partie vorzeitig beendet. '),
( 'Verletzung', '<b>{ma1} : </b>Der Trainer wird zum Wechsel gezwungen. Eine Muskelverhärtung im Oberschenkel zwingt {sp1} zur Aufgabe.'),
( 'Verletzung', '<b>{ma1} : </b>Was für eine unschöne Szene. {sp1} erhält von einem gegnerischen Spieler einen Schubser, der zu einem Zusammenprall mit einem Mannschaftskollegen führt. Mit blutender Nase wird {sp1} vom Platz geführt.'),
( 'Verletzung', '<b>{ma1} : </b>Eine unfaire Attacke dort am Seitenrand. Der Gegenspieler steigt {sp1} hier mit übermäßigem Einsatz auf den Fuß, was letztlich darin endet, dass für {sp1} das Spiel an dieser Stelle zu Ende ist.'),
( 'Verletzung', '<b>{ma1} : </b>Das sieht nicht gut aus. {sp1} wird da unglücklich im Gesicht getroffen und muss das Spielfeld, mit einer stark blutenden Wunde am Mund, verlassen. '),
( 'Verletzung', '<b>{ma1} : </b>{sp1} bleibt nach diesem Zweikampf am Boden liegen. Nach einer kurzen Behandlungspause ist es Gewissheit, dass er nicht mehr weitermachen kann.'),
( 'Verletzung', '<b>{ma1} : </b>Mit schmerzverzerrtem Gesicht wird {sp1} mit der Trage vom Platz getragen. Hoffen wir, dass es nichts Schlimmes ist.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Wie Slalomstangen umkurvt {sp1} dort seine Gegenspieler und hat auch noch das Auge um zu sehen, dass {sp2} viel zu weit vor seinem Kasten steht – die Idee es mit einem Schlenzer zu probieren ist gut, aber {sp1} setzt den Ball drüber.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Und wieder pennt das Team. Diesmal verliert {sp2} völlig unnötig den Ball gegen den heranstürmenden {sp1}, der den Ball aber völlig überhastet am Pfosten vorbeischiebt.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Seinen Optimismus in allen Ehren, aber dieser Schuss von {sp1} ging wirklich meilenweit daneben.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} wird schön freigespielt, rutscht in den Ball, der am heraus eilenden {sp2} vorbei auf das Tor zurollt, aber auf der falschen Seite des Pfostens landet.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} nimmt sich ein Herz und geht mit schnellen Schritten quer zum Strafraum an zwei Gegenspielern vorbei. Sein Abschluss geht haarscharf über das Gebälk. '),
( 'Torschuss_daneben', '<b>{ma1} : </b>Das Team ist jetzt an der Torauslinie und probiert es mit einer Flanke, die {sp2} versucht abzufangen. Er kann den Ball jedoch nur ablenken, {sp1} ist in guter Einschussposition - befördert den Ball aber in Rücklage über den Kasten.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Da hat die Abwehr von {ma2} nicht aufgepasst und {sp1} nun mit der Chance. Schuss... ohjeee.. Hoffentlich bleiben die Scheinwerfer ganz, das Ding hat nen Pilotenschein verdient.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} ist auf halbrechts durch. {sp2} kommt aus seinem Tor und stürmt auf {sp1} zu, der sich von dem Auftreten so nervös machen lässt, dass er zu früh den Abschluss sucht und meilenweit daneben schießt.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Riesenchance für {ma1}. Da jagt ein Mannschaftskamerad von {sp1} einem Gegenspieler den Ball ab, könnte selbst schießen, aber spielt uneigennützig weiter zu {sp1}, der mit seinem Schuss nur knapp scheitert.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Ein Verzweiflungsschuß aus gut 38 Metern von {sp1} der in die Wolken fliegt'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Diese Ecke von {sp1} dreht sich direkt ins Tor aus.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schaut sich um und sieht keine andere Möglichkeit, als selber abzuschließen. Doch dieser Schuss bleibt ungefährlich. Der Ball segelt über die Tribünen.'),
( 'Torschuss_daneben', '<b>{ma1} : </b>Zwei Spieler von {ma1} behindern sich da gegenseitig im Strafraum, weswegen eine schöne Chance zunichte ist. '),
( 'Torschuss_daneben', '<b>{ma1} : </b>Jetzt geben Sie mächtig Gas und sind gleich gefährlich - der platzierte Heber von {sp1} segelt nur knapp über die Latte. '),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Was für eine gute Torchance. Aus spitzem Winkel versucht {sp1} den Ball im Tor unterzubringen, doch {sp2} wirft sich waghalsig dazwischen und bewahrt seine Mannschaft vor einem Gegentreffer.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Was für ein Bock von {sp2} im eigenen Strafraum. Vertändelt er den Ball gegen {sp1}, der es sofort mit einem Torschuss probiert, aber mindestens genauso alles falsch macht, was man in einer solchen Situation falsch machen kann.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp2} steht jetzt unter Dauerbeschuss - den platzierten Schuss von {sp2} kann er gerade noch so aus dem bedrohten Eck fischen.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Am zweiten Pfosten kommt {sp1} jetzt an den Ball, doch wieder ist {sp2} Herr der Lage und bekommt noch die Finger dazwischen.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Jetzt wird mit mehr Finesse nach vorn gespielt. Einen langen Ball kann {sp1} am zweiten Pfosten auf das Tor köpfen, aber {sp2} kann ihn noch mit den Fingerspitzen über das Tor manövrieren.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Auch in dieser Szene ist {ma1} das bessere Team. Über die linke Seite findet der Ball den Weg auf den kurzen Pfosten, {sp1} mit dem Schuss aus kürzester Distanz, aber genau auf {sp2}. Das hätte das Tor sein müssen!'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Fantastischer Pass auf {sp1} und {ma1} nun mit der Chance. {sp1} schießt einfach mal drauf und ... Ja, mit dem Ball kann er {sp2} nicht in Bedrängnis bringen.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} will das Ding in den rechten Winkel zirkeln, doch {sp2} rettet den Ball ohne Probleme und puscht seine Hinterleute gleich darauf auf.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp2} spielt super mit! Der Hintermann von {ma2} sieht {sp1} kommen, läuft raus und macht den Winkel zu kurz für einen guten Abschluss.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} setzt mit diesem Weitschuss eine erste Duftmarke, doch {sp2} steht sicher und fängt den Ball ohne Probleme aus der Luft. '),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Nach der gegnerischen Ecke geht es jetzt ganz schnell. {ma1} kombiniert sich durch das verwaiste Mittelfeld, doch der finale Pass wird von {sp1} verstolpert, so dass {sp2} in höchster Not klären kann.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein Flankenball aus dem Halbfeld. Der Ball wird länger und länger, bis {sp1} sich in die Höhe schraubt und den Ball gegen die Laufrichtung von {sp2} knapp neben das Tor befördert'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Wieder legt {ma1} los ! {sp1} bombardiert das Tor von {sp2}. Beim ersten Schuss wehrt {sp2} ab, den Nachschuss setzt {sp1} an den Pfosten und dann hat der Keeper den Ball sicher !'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Blitzschneller Konter der {ma1}. {sp1} schaltet schnell, schickt sich selbst und kann dann nur ein harmloses Schüsschen abgeben.'),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} behauptet sich gegen {sp2} und kommt schließlich zum Abschluss. Der platzierte Schuss prallt jedoch vom Pfosten ins Toraus. '),
( 'Torschuss_auf_Tor', '<b>{ma1} : </b>Das ist die Chance für {sp1}. Schuss. Der Trainer von {ma1} reißt schon die Arme hoch, doch {sp2} fischt den Ball noch aus dem Winkel. Unglaubliche Aktion.'),
( 'Tor_mit_vorlage', '<b>{ma1} : </b>{sp1} läuft sich frei und bekommt den Ball, er zieht an den Verteidigern vorbei und schießt aus gut 25 Metern auf´s Gehäuse - TOOOR für {ma1} - der war unhaltbar !'),
( 'Tor_mit_vorlage', '<b>{ma1} : </b>{sp1} lauert am Elfmeterpunkt und erhält tatsächlich das Zuspiel. Der Gegnerische Torwart versucht sich lang zu machen, aber der Schuss ist zu platziert, um ihn noch abwehren zu können.'),
( 'Tor', '<b>{ma1} : </b>Nach einem schnellen Einwurf und nach zwei weiteren Stationen kommt der Ball schließlich bei {sp1} an, der sich die Ecke praktisch aussuchen kann und in bester Torjägermanier vollendet.'),
( 'Tor', '<b>{ma1} : </b>Was für ein Knaller ! In der Abwehr von {ma2} fehlt die Zuordnung, so dass {sp1} letztlich die freigewordene Lücke nutzt und den Ball aus vollem Lauf in den Winkel ballert. {sp2} war absolut chancenlos.'),
( 'Tor', '<b>{ma1} : </b>Das verdiente Tor für. Zu zweit wird dort die komplette Abwehr ausgehebelt. Letztlich versucht {sp2} zu retten, was zu retten ist, doch das kluge Rückspiel zu {sp1} kommt im richtigen Moment und er weiß dieses zu verwerten – Tor !'),
( 'Tor', '<b>{ma1} : </b>Die Verteidigung des Gegners ist nicht sattelfest. Der erste Patzer bleibt noch ohne Folgen, der nächste Fehlpass wird aber bestraft. {sp1} spritzt dazwischen, marschiert durch, lässt {sp2} ins Leere grätschen und vollendet gekonnt.'),
( 'Tor', '<b>{ma1} : </b>Da ist es passiert. Ein Pressschlag im Strafraumzentrum landet direkt bei {sp1}, der direkt abnimmt und {sp2} keine Chance zur Reaktion lässt.'),
( 'Tor', '<b>{ma1} : </b>Über dieses Tor wird noch zu reden sein! Da wird {sp2} möglicherweise im Duell mit einem weiteren Gegenspieler von {ma1} behindert, weswegen er den Ball nur abklatschen kann. {sp1} bekommt den Ball auf den Schlappen und trifft.'),
( 'Tor', '<b>{ma1} : </b>Unfassbar ! {ma1} dringt in den Strafraum ein, der Ball wird von einem Mittelfeldspieler flach hereingebracht, {sp2} verlässt sein Tor und will sich auf den Ball werfen, verfehlt ihn aber, so dass {sp1} in das verwaiste Tor trifft.'),
( 'Tor', '<b>{ma1} : </b>Doppelpass am Strafraumrand, {sp1} geht durch und kommt rechts im Strafraum zum Schuss aus spitzem Winkel. Ein eigentlich dankbarer Ball für den Keeper rollt aber dennoch durch die Beine von {sp2} hinein ins Tor.'),
( 'Tor', '<b>{ma1} : </b>Die Flanke aus dem Halbfeld landet bei {sp1}, der gegen den vor seinem Strafraum zu zaghaft vorgehenden {sp2} an den Ball kommt und vom Strafraumrand nur noch in das verlassene Tor einschieben muss.'),
( 'Tor', '<b>{ma1} : </b>Was war das denn für ein Kunstschuss ? {sp1} lässt aus 20 Metern einen Flatterball mit dem rechten Fuß ab. {sp2} ist unterwegs ins linke Eck, doch die Kugel schlägt im rechten ein. Unglaublich !'),
( 'Tor', '<b>{ma1} : </b>Wirrwarr im Strafraum von {ma2}! Nach einer Ecke kann {sp2} den Ball zunächst zweimal klären, bis letztlich {sp1} mit dem dritten Versuch doch noch erfolgreich ist.'),
( 'Tor', '<b>{ma1} : </b>Wenn er rauskommt, muss er ihn auch haben! {sp2} irrt durch den Strafraum und kann nur noch zusehen, wie {sp1} den Ball mühelos ins Tor nickt.'),
( 'Tor', '<b>{ma1} : </b>Blitzsauberer Angriff von {ma1}. Über rechts wird das Spiel schnell gemacht, schließlich erfolgt der Pass in den Rücken der Abwehr und {sp1} muss nur noch seinen Fuß hinhalten, um das Tor zu erzielen.'),
( 'Tor', '<b>{ma1} : </b>Da wird der Ball aus zentraler Position schön halblinks zu {sp1} in den Strafraum durchgesteckt, dessen Knaller aus elf Metern im Winkel einschlägt.'),
( 'Tor', '<b>{ma1} : </b>Mit Tempo kommt der Ball in die Mitte, wo {sp1} den Ball annehmen kann, in den Sechzehner eindringt und aus kurzer Distanz {sp2} keine Abwehrchance lässt.'),
( 'Tor', '<b>{ma1} : </b>So postiert man sich richtig im gegnerischen Strafraum. Die Flanke wird vom Mannschaftskollegen noch verfehlt, dahinter steht jedoch bereits {sp1} bereit und verwandelt trocken ins kurze Eck.'),
( 'Tor', '<b>{ma1} : </b>Den Lupfer stoppt {sp1} gekonnt mit der Fußspitze und jagt ihn dann per Seitfallzieher unhaltbar auf das Tor – ein fantastisches Tor !'),
( 'Tor', '<b>{ma1} : </b>Da wehrt {ma2} den Ball nach einer Ecke zu kurz ab, wo {sp1} sich nicht lange bitten lässt und den Ball durch die Beine von {sp2} im Tor unter bringt.'),
( 'Tor', '<b>{ma1} : </b>Das war einfach ! Völlig frei nutzt {sp1} seine Chance und dreht nach seinem Schuss aus 12 Metern zum Jubel ab.'),
( 'Tor', '<b>{ma1} : </b>Noch leicht abgefälscht landet der Ball vor den Füßen von {sp1}, der aus kurzer Distanz eiskalt verwandelt.'),
( 'Tor', '<b>{ma1} : </b>{ma2} bekommt den Ball einfach nicht weg. {sp1} bedankt sich für die Einladung und setzt den Ball neben den linken Pfosten. Unhaltbar war er aber dennoch nicht.'),
( 'Tor', '<b>{ma1} : </b>Was für eine Kombination! {ma1} zeigt hier ihr ganzes Können und spielt wie im Training. {sp1} setzt dem Ganzen mit diesem Drehschuss aus knapp 15 Metern noch die Krone auf.'),
( 'Tor', '<b>{ma1} : </b>Das ist wirklich bitter. Ein eigentlich harmloser Schuss von {sp1} erhält durch eine kleine Unebenheit im Boden die entscheidende Richtungsänderung und trudelt am geschlagenen {sp2} ins Tor.'),
( 'Tor', '<b>{ma1} : </b>Mit den schnellen Gegenstößen ist {ma2} heute einfach überfordert. Zwar kann {sp2} den ersten Schuss noch parieren, doch gegen die Nachschusschance von {sp1} ist auch er schließlich machtlos.'),
( 'Tor', '<b>{ma1} : </b>Ein wirklich unglückliches Gegentor für {ma2}. Die Faustabwehr von {sp2} prallt gegen den Kopf von {sp1} und von da direkt ins Tor.'),
( 'Tor', '<b>{ma1} : </b>Ein klasse Konter, souverän ausgespielt. {ma1} mit Überzahlspiel, der Pass genau im richtigen Moment gespielt und {sp1} lässt {sp2} keine Chance.'),
( 'Tor', '<b>{ma1} : </b>Ein Flankenball aus dem Halbfeld. Der Ball wird länger und länger, bis {sp1} sich in die Höhe schraubt und den Ball gegen die Laufrichtung von {sp2} ins Tor befördert.'),
( 'Tor', '<b>{ma1} : </b>Da stiehlt sich {sp1} an der Strafraumgrenze eiskalt den Ball und verwandelt ihn nach einer herrlichen Drehung wunderbar ins untere linke Eck.'),
( 'Tor', '<b>{ma1} : </b>{sp1} nimmt sich einfach mal den Mut und drescht das Ding unhaltbar für {sp2} mit voller Wucht in die Mitte des Tores. Der {ma1} wirkt nun sichtlich engagierter.'),
( 'Tor', '<b>{ma1} : </b>Die Überlegenheit von {ma1} zahlt sich aus! {sp1} nutzt endlich seine Chance zum Tor und wirft {ma2} mitsamt {sp2} in die Verzweiflung. Was ist hier noch drin ?'),
( 'Tor', '<b>{ma1} : </b>{sp1} schafft es {sp2} auszuribbeln und braucht den Ball nur noch einzuschieben...TOR !'),
( 'Tor', '<b>{ma1} : </b>Katastrophaler Fehler,der sofort bestraft wird, {sp1} mit einem klasse Solo, dass durch ein TOR belohnt wird.'),
( 'Tor', '<b>{ma1} : </b>{sp1} traut sich was, er zieht aus 26 Metern ab, der Ball wird unhaltbar für {sp2} abgefälscht.'),
( 'Tor', '<b>{ma1} : </b>Da wurde der Gegner gnadenlos ausgekontert ! Es ist {sp1} der eiskalt zuschlägt und {sp2} mit einem Lupfer überrascht.'),
( 'Tor', '<b>{ma1} : </b>TOOOOOR von {sp1} dribbelt sich durch die Abwehr von {ma2} und probierte es einfach.'),
( 'Tor', '<b>{ma1} : </b>{ma2} mit einem Stellungsfehler in der Abwehr - {sp1} nutzt den Schnitzer und schiebt den Ball ins Gehäuse.'),
( 'Tor', '<b>{ma1} : </b>Nach einer guten Kombination steckt er den Ball durch und {sp1} verwandelt alleine vorm Keeper sicher in der 1-1 Situation.'),
( 'Taktikaenderung', '<b>{ma1} : </b>Der Manager {sp1} ist stocksauer auf sein Team und greift deshalb ins Spielgeschehen ein.'),
( 'Taktikaenderung', '<b>{ma1} : </b>Der Trainer {sp1} gestikuliert wild an der Seitenlinie, er scheint Taktisch umstellen zu wollen.'),
( 'Pass_daneben', 'Ein schlimmer Fehlpass von {sp1} vernichtet den Angriff schon in der eigenen Hälfte.'),
( 'Pass_daneben', '{sp1} kommt, schaut sich um und ... spielt den Ball ins Aus! Das kann {ma1} nun wirklich nicht gebrauchen.'),
( 'Pass_daneben', 'Ja was macht der denn da? {sp1} kann den Ball hervorragend halten doch dieser Passversuch über das halbe Spielfeld scheitert schon an der eigenen Unfähigkeit.'),
( 'Karte_gelb', '<b>{ma1} : </b>Das Team darf sich um eine weitere Karte in ihrer Sammlung freuen. {sp1} war der Sündenbock.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} war in dieser Szene etwas zu wild.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} zettelt einen Streit an und kassiert folglich die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} ist nicht einverstanden mit der Auslegung der Situation und bekommt fürs Meckern die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>Der Gegenspieler krümmt sich vor Schmerzen am Boden, und {sp1} hat großes Glück, dass er für diese Aktion nur gelb bekommen hat.'),
( 'Karte_gelb', '<b>{ma1} : </b>Oh ja die Karte hat {sp1} jetzt auch heraufbeschwört, er sollte jetzt besser etwas runter fahren ...'),
( 'Karte_gelb', '<b>{ma1} : </b>Dieses taktische Foul von {sp1} zieht nun doch die Karte nach sich.'),
( 'Karte_gelb', '<b>{ma1} : </b>Für dieses klare Zeitspiel erhält {sp1} die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} hat das Timing für die Grätsche kräftig verpasst und knüppelt seinen Gegenspieler um. Das tut weh und wird mit Gelb bestraft. '),
( 'Karte_gelb', '<b>{ma1} : </b>Passend zur aufkommenden Hektik auf dem Rasen kommt es zur gelben Karte für {sp1}, der nicht etwa das Spiel in geordnete Bahnen lenkt, sondern einfach das Bein stehen lässt und seinen Gegner zu Fall bringt. '),
( 'Karte_gelb', '<b>{ma1} : </b>{sp1} will den Ball nach vorne schlagen, doch der Gegner hält einfach den Fuß drauf – dafür gibt’s die gelbe Karte.'),
( 'Karte_gelb', '<b>{ma1} : </b>Derzeit hat das Team deutliche Feldvorteile - symptomatisch deshalb das wiederholt unfaire Einsteigen von {sp1}, das diesmal mit einer gelben Karte bestraft wird.'),
( 'Karte_gelb', '<b>{ma1} : </b>Das ist einfach dumm. {sp1} löst sich zu früh aus der Mauer und kassiert dafür zu Recht den gelben Karton.'),
( 'Karte_gelb_rot', '<b>{ma1} : </b>Eine wirklich dumme Aktion: Mit Anlauf versucht {sp1} gegen seinen Gegner zu retten, springt diesem aber übermotiviert von hinten in die Beine. Jede Diskussion erübrigt sich hier. Sein 2 hartes Foul'),
( 'Karte_gelb_rot', '<b>{ma1} : </b>Das sah nach Absicht hat aus. Mit einem Ellbogencheck entledigt sich {sp1} seinem Verfolger, was dem Schiedsrichter allerdings nicht verborgen bleibt. Er hatte schon Gelb'),
( 'Karte_gelb_rot', '<b>{ma1} : </b>Kurz vor dem Strafraum verschätzt sich {sp1} bei einem aufspringenden Ball und hält den durcheilenden Stürmer. Als letzter Mann verhindert er damit eine klare Torchance und kassiert die Gelb-Rote Karte.'),
( 'Karte_rot', '<b>{ma1} : </b>Klare Notbremse ! {sp1} ist alleine unterwegs und kann einfach nur noch seinen Gegenspieler mit unfairen Mitteln das Tor verhindern, zur Folge die Rote Karte !'),
( 'Karte_rot', '<b>{ma1} : </b>Und nun wird es hitzig hier. {sp1} und sein Gegenspieler geraten aneinander. Bei {sp1} reißen die Nerven durch und er schlägt ihm ins Gesicht. Der Schiedsrichter sieht das und zeigt absolut gerechtfertigt die Rote Karte.'),
( 'Karte_rot', '<b>{ma1} : </b>{sp1} läuft alleine aufs Tor. {sp2} kann ihn nicht mehr aufhalten und begeht eine Notbremse. Die Fans auf den Tribünen toben. Der Schiri zeigt {sp2} folgerichtig die rote Karte.'),
( 'Karte_rot', '<b>{ma1} : </b>{sp1} springt da hoch und scheint seinen Gegenspieler ganz zu übersehen, der dessen Stollen gefährlich ins Gesicht bekommt.'),
( 'Karte_rot', '<b>{ma1} : </b>{sp1} springt seinem Gegenüber von hinten in die Beine, sodass er mehrere Minuten behandelt werden muss. Für diese Aktion fliegt der Übeltäter vom Platz - und das zurecht.'),
( 'Karte_rot', '<b>{ma1} : </b>{sp1} steigt zum Kopfball hoch. Doch was war das !? Ein klarer Ellbogencheck gegen seinen Gegenspieler.  Dem Schiedsrichter bleibt nichts anderes übrig als ihn zum Duschen zu schicken.'),
( 'Karte_rot', '<b>{ma1} : </b>{sp1} lässt {sp2} im Strafraum gekonnt aussteigen. {sp2} greift daraufhin das Trikot von {sp1} und lässt sich meterweit mitschleppen. Der Schiedsrichter entscheidet zu Recht auf Notbremse und folgerichtig rote Karte.'),
( 'Karte_rot', '<b>{ma1} : </b>Jetzt wird es hitzig. Nach einem intensiven Zweikampf scheinen sich die beiden Kontrahenten noch ein paar wichtige Dinge zu sagen zu haben. {sp1} wird wohl zu bunt, weswegen er seinem Diskussionspartner umstößt – klare Sache: Rot! '),
( 'Karte_rot', '<b>{ma1} : </b>Laufduell auf der linken Außenbahn. Bevor dieses läuferisch entschieden wird, stoppt {sp1} den Ball einfach per Hand und kassiert dafür eine klare rote Karte. Dafür wird er nach dem Spiel sicherlich einiges zu hören bekommen. '),
( 'Karte_rot', '<b>{ma1} : </b>Nach einem Gerangel mit dem gegnerischen Spieler tritt {sp1} unsportlich nach und erhält dafür umgehend eine Freikarte für die Dusche.'),
( 'Freistoss_treffer', '<b>{ma1} : </b>{sp1} </b>legt sich die Kugel bereit und nimmt Anlauuuuuf… TOR! Da sieht die schlecht postierte Mauer samt Torwart nicht gut aus, das Gegentor war für {ma2} vermeidbar !'),
( 'Freistoss_treffer', '<b>{ma1} : </b>{ma1} : </b>{sp2} stoppt den quer gelegten Ball, {sp1} kommt angerauscht und hämmert das Leder in Richtung Giebel, wo der Ball wie eine Bombe einschlägt! Der geschlagene Keeper sah nur einen Strich !'),
( 'Freistoss_treffer', '<b>{ma1} : </b>Was ein Hammer ! {sp1} haut den Freistoß aus rund 25 Metern ins rechte Eck. Wie ein Strich zieht der Ball über die Mauer hinweg ins Tor.'),
( 'Freistoss_treffer', '<b>{ma1} : </b>{ma1} : </b>Ein Tor, das das Prädikat „Traumtor“ wirklich verdient hat. Der Freistoß von {sp1} aus halbrechter Position wird immer länger, touchiert die Unterkante der Latte und landet schließlich im langen Eck.'),
( 'Freistoss_treffer', '<b>{ma1} : </b>Ein Freistoß von rechts führt letztlich zum Erfolg. {sp1} entledigt sich erst seinem Bewacher, um dann noch einen gezielten Kopfball abzugeben. {sp2} kann nur noch zuschauen, wie der Ball im kurzen Eck einschlägt.'),
( 'Freistoss_daneben', '<b>{ma1} : </b>„Ready for Takeoff“, denkt sich {sp1} und zündet die Rakete in den weiten Stadion-Orbit hinein! Der arme Lurch erfindet die Definition des Begriffs „Rückenlage“ damit komplett neu!'),
( 'Freistoss_daneben', '<b>{ma1} : </b>{sp1} streichelt den Ball nochmal, bevor er ihn gleich böse treten wird… Oha! Field Goal! Field Goal! Wir haben hier Jemanden, der die Sportart verwechselt hat!'),
( 'Freistoss_daneben', '<b>{ma1} : </b>{sp1} schlenzt den Freistoß aus halbrechter Position auf das Tor – der Ball prallt von der Querlatte zurück ins Spielfeld.'),
( 'Freistoss_daneben', '<b>{ma1} : </b>Da klingelt es fast im Tor. Nach diesem Freistoß aus dem Halbfeld kommt {sp1} im Luftkampf mit der Stirn an den Ball und drückt ihn knapp an der Torlinie vorbei – {sp2} sah dabei alles andere als gut aus.'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>{sp1} schreitet an den Punkt, wirkt aber sehr nervös… Schwacher Ball… Das gibt es doch nicht! Dieser einfache Ball rutscht dem Torwart durch die Hosenträger durch !'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>Ball hinlegen. Anlauf nehmen. Schuss. Tor! So einfach kann man einen Elfmeter verwandeln. {sp1} hat hier alles richtig gemacht !'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>Ruhig legt sich {sp1} den Ball hin. Guckt sich eine Ecke aus und schickt den Torwart in die andere Ecke, klasse Elfmeter !'),
( 'Elfmeter_erfolg', '<b>Laute Pfiffe doch {sp1} macht das souverän, wie er den Ball unten in die Ecke schiebt.</b>'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>Ein riesen Druck lastet jetzt auf ihm, denn es geht um den Sieg ! {sp1} trifft den Pfosten, doch im Nachschuss trifft er, und der am Boden liegende Torwart schaut nur machtlos hinterher.'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>Kurioser Elfmeter. {sp1} rutscht beim Anlauf weg, doch der Ball trudelt langsam unten rechts ins Tor.'),
( 'Elfmeter_erfolg', '<b>{ma1} : </b>{sp1} schießt mit voller Gewalt an die Latte. Der Torwart feiert schon aber bekommt den Ball unglücklich an den Rücken und von dort geht der Ball ins Tor.'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} versucht lässig den Ball in die Mitte zu lupfen. Der Keeper riecht den Braten und hält den schlechten Elfmeter'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und schießt den Ball 5m über den Gegnerischen Kasten. Ganz schlechter Elfmeter'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den rechten Pfosten'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den linken Pfosten'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an die Querlatte'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und rutscht unglücklich mit dem Standbein weg. Chance vertan !'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter also für {ma1}, {sp1} tritt an… Gehalten! Das war einfach zu wenig, der Torhüter kann den Ball zur Ecke abwehren !'),
( 'Elfmeter_verschossen', 'Elfmeter für {ma1}. Ein präziser Schuss von {sp1}, doch der Keeper bekommt seine Finger doch noch an den eigentlich unhaltbaren Ball und wehrt ihn zur Ecke ab! Was für eine Heldentat!'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und schießt den Ball 5m über den Gegnerischen Kasten. Ganz schlechter Elfmeter'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den rechten Pfosten'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den linken Pfosten'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an die Querlatte'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und rutscht unglücklich mit dem Standbein weg. Chance vertan !'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter also für {ma1}, {sp1} tritt an… Gehalten! Das war einfach zu wenig, der Torhüter kann den Ball zur Ecke abwehren !'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter für {ma1}. Ein präziser Schuss von {sp1}, doch der Keeper bekommt seine Finger doch noch an den eigentlich unhaltbaren Ball und wehrt ihn zur Ecke ab! Was für eine Heldentat !'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>Einmal zweiter Stock bitte, dieser Elfmeter von {sp1} verfehlte sein Ziel um mehrere Meter.'),
( 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} lässt sich viel Zeit bei der Ausführung dieses Elfmeters. Verzögerter Anlauf, und ein ganz ganz schwacher Schuss in die Mitte des Tores. {sp2} hält den Ball und wird gefeiert.'),
( 'Ecke', '<b>{ma1} : </b>{sp1} schlägt die Ecke zentral in den Strafraum, wo aber weit und breit kein Mitspieler steht.'),
( 'Ecke', '<b>{ma1} : </b>Die Flanke von {sp1} ist dann doch etwas zu hoch, um vom gestarteten Mitspieler noch irgendwie erreicht zu werden.'),
( 'Ecke', '<b>{ma1} : </b>Die Flanke von {sp1} segelt über den Strafraum und geht ins Seitenaus.'),
( 'Ecke', '<b>{ma1} : </b>Kurze Ecke von {sp1}, doch der Gegner hat den Braten gerochen und unterbindet den Angriff.'),
( 'Auswechslung', '<b>{ma1} : </b>Wechsel ! {sp2} verlässt unter tosendem Applaus das Feld, für ihn kommt {sp1}.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp2} verlässt unter Pfiffen das Feld. Der Trainer hofft das {sp1} seine Sache besser macht.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp2} verlässt den Platz, ohne seinen Trainer abzuklatschen geht er duschen. {sp1} ersetzt ihn.'),
( 'Auswechslung', '<b>{ma1} : </b>will hier noch eins drauflegen und schickt {sp1} für {sp2} in den Kampf.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp2} hat sein bestes gegeben, doch wirkt er so langsam etwas außer Atem. {sp1} wird nun seine Chance bekommen.'),
( 'Auswechslung', '<b>{ma1} : </b>Nachdem sich {sp1} im Training hervorgehoben hat, gibt ihm der Trainer auch hier und jetzt für {sp2} die Möglichkeit sich zu präsentieren.'),
( 'Auswechslung', '<b>{ma1} : </b>Damit ist die Partie für {sp2} beendet. Viel gelang ihm in diesem Spiel nicht, weswegen {sp1} an seiner Stelle nun sein Glück versuchen darf.'),
( 'Auswechslung', '<b>{ma1} : </b>Der Trainer gibt letzte Instruktionen an {sp1}, der nun für {sp2} in die Partie kommt und die nötigen Impulse setzen soll.'),
( 'Auswechslung', '<b>{ma1} : </b>Mit viel Applaus für seine heutige Leistung wird {sp2} von den Fans verabschiedet, {sp1} will es sicherlich genauso gut machen. '),
( 'Auswechslung', '<b>{ma1} : </b>Die Magen-Darm-Probleme waren dann doch schlimmer als gedacht. Für {sp2} kommt der frische {sp1} in die Partie.'),
( 'Auswechslung', '<b>{ma1} : </b> Wechsel ! Für {sp2} kommt jetzt eine frische Kraft. {sp1} wird jetzt die benötigte Verstärkung darstellen.'),
( 'Auswechslung', '<b>{ma1} : </b>{sp2} macht kein schlechtes Spiel, muss aber trotzdem für {sp1} das Feld räumen, so die Entscheidung des Trainers.'),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} wischt die Hände über den Kopf und handelt jetzt.'),
( 'Taktikaenderung', '<b>{ma1} : </b> Das Team ist nicht auf der Spur, so muss {sp1} die Weichen stellen.'),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} macht große Augen, dreht sich kurz zur Bank, um dann dem Käpten auf dem Feld neue Anweisungen zu geben.'),
( 'Taktikaenderung', '<b>{ma1} : </b>Nun ist Schluß mit dem zähen Spiel. {sp1} will neue Akzente setzen. '),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} schaut auf die Uhr, zieht die Hände aus der Tasche und gibt neue Anweisungen aus.'),
( 'Taktikaenderung', '<b>{ma1} : </b>Mit dieser Änderung von {sp1} sollte das Spiel mehr Pep bekommen.'),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} ist der Geduldsfaden gerissen. Neue Laufwege sollen dem Gegner Schwierigkeiten bereiten.'),
( 'Taktikaenderung', '<b>{ma1} : </b>{sp1} gibt die Anweisung, das mehr Druck aufgebaut werden soll.');

-- Fremdschl�sselabfrage deaktivieren
SET foreign_key_checks = 0;
-- einf�gen der Meldungen der Stadionerweiterugen
INSERT INTO `_stadiumbuilding` (`id`, `name`, `description`, `picture`, `required_building_id`, `costs`, `premiumfee`, `construction_time_days`, `effect_training`, `effect_youthscouting`, `effect_tickets`, `effect_fanpopularity`, `effect_injury`, `effect_income`, `status`) VALUES
('', 'Parkplatz (niedrig)', 'Parkplätze', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
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
('', 'Fahrradständer (niedrig)', 'Anreise per Fahrrad', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Busbahnhof (mittel)', 'Busbahnhof zur Anreise', NULL, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'S-Bahn (hoch)', 'Straßenbahn zur Anreise', NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
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
('', 'Kioskkomplex (hoch)', 'Großer Kiosk-Store', NULL, 45, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
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
('', 'Krafträume (mittel)', 'Krafträume', NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fitnessstudio (hoch)', 'Fitnessstudio', NULL, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Sportleistungszentrum (Luxus)', 'Sportleistungszentrum', NULL, 62, 1, 10, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Fanstatue', 'Fanstatue', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 'Parkplätze','Parkplatzausbau', NULL, NULL, 500000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
('', 'Fanshop', 'Alles was der Fan begehrt', NULL, 69, 50000, 0, 10, 0, 0, 5, 10, 0, 500, 0),
('', 'Aachener Printen Ecke im Fanshop', 'Gentleman lädt zum Naschen ein', NULL, 66, 1000, 0, 2, 0, 0, 0, 1, 0, 100, 0),
('', 'Bushaltestelle', 'direkte Anbindung zum Busnetz', NULL, NULL, 20000, 0, 3, 0, 0, 2, 5, 0, 0, 0),
('', 'Stadion-Center', 'Center für Shopvermietung', NULL, NULL, 1000000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
('', 'Sport-Center', 'Center für die Spielerbetreuung', NULL, NULL, 1000000, 0, 50, 0, 0, 0, 0, 0, 0, 0),
('', 'Getränke-Shop', NULL, NULL, 69, 10000, 0, 20, 0, 0, 0, 10, 0, 1000, 0),
('', 'Imbiss', NULL, NULL, 69, 5000, 0, 10, 0, 0, 0, 5, 0, 500, 0),
('', 'Reha-Abteilung', 'Förderung der Genesung', NULL, 70, 200000, 0, 20, 0, 0, 0, 0, 1, 0, 0),
('', 'Scouting Abteilung', 'Management für das Scouting von Jugendspielern', NULL, 70, 100000, 0, 10, 0, 10, 0, 0, 0, 0, 0),
('', 'Fitness- und Relax Bereich', 'zusätzliche  Frische und Zufriedenheit pro Trainingseinheit', NULL, 70, 100000, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('', 'U-Bahn Anschluss', NULL, NULL, NULL, 500000, 0, 50, 0, 0, 15, 15, 0, 0, 0),
('', 'Restaurant', 'Erlebnis Essen', NULL, 69, 100000, 0, 30, 0, 0, 0, 5, 0, 5000, 0),
('', 'Parkanlage', 'Das grüne Erlebnis für die ganze Familie', NULL, NULL, 1000000, 0, 90, 0, 0, 10, 10, 0, 0, 0),
('', 'Therme', NULL, NULL, NULL, 500000, 0, 90, 1, 0, 1, 10, 0, 10000, 0),
('', 'Salinen', 'Die Lunge wird sich freuen.', NULL, NULL, 200000, 0, 30, 0, 0, 5, 5, 0, 0, 0),
('', 'Polizeiwache', 'Mehr Zuschauer, aber kostet dafür auch Geld.', NULL, NULL, 500000, 0, 50, 0, 0, 10, 0, 0, '-10000', 0),
('', 'Fanbetreungs Punkt', 'Kostet etwas, aber bringt auch mehr Zuschauer.', NULL, NULL, 50000, 0, 30, 0, 0, 5, 0, 0, '-1000', 0);
-- Fremdschl�sselabfrage aktivieren
SET foreign_key_checks = 1;
-- einf�gen der Meldungen der Zufallsereignisse
INSERT INTO `_randomevent` (`id`, `message`, `effect`, `effect_money_amount`, `effect_blocked_matches`, `effect_skillchange`, `weight`, `status`) VALUES
('', 'Sie gewinnen im Lotto', 'money', 100000, 0, 0, 3, 0),
('', 'Sie finden Geld auf der Straße. Sie sind ein Glückspilz', 'money', 500, 0, 0, 3, 0),
('', 'Sie bekommen Steuern erstattet!', 'money', 15000, 0, 0, 3, 0),
('', 'Ein Sponsor überweißt Ihnen einen Bonus', 'money', 25000, 0, 0, 3, 0),
('', 'Sie sind der Sieger eines Fotowettbewerbes', 'money', 1000, 0, 0, 3, 0),
('', 'Für eine Homestory bekommen Sie einen Bonus', 'money', 50000, 0, 0, 3, 0),
('', '{playername} fällt nach einer Disconacht aus.', 'player_injured', 0, 1, -1, 3, 0),
('', '{playername} lässt sich von seiner Frau scheiden', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} heiratet seine Freundin', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} trainiert neben dem Training im Kraftraum.', 'player_stamina', 0, 0, 2, 3, 0),
('', '{playername} stolpert die Treppe runter und verletzt sich', 'player_injured', 0, 2, -1, 3, 0),
('', '{playername} bekommt ein Kind', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} bekommt mit seiner Frau Zwillinge', 'player_happiness', 0, 0, 2, 3, 0),
('', 'Durch eine Fanleihe gewinnen Sie Geld', 'money', 250000, 0, 0, 3, 0),
('', 'Deine Mitarbeiter erwirtschaften ein dickes Plus in der Kasser', 'money', 75000, 0, 0, 3, 0),
('', 'Deine Mitarbeiter streiken vorm Vereinshaus', 'money', -50000, 0, 0, 3, 0),
('', 'Ein Angestellter des Vereins brennt mit dem Tagesgeld durch', 'money', -150000, 0, 0, 3, 0),
('', 'Ein anonymer Fan spendet Ihrem Verein', 'money', 5000, 0, 0, 3, 0),
('', 'Ein Hacker legt die EDV Abteilung des Vereins lahm', 'money', -15000, 0, 0, 3, 0),
('', 'Ein Mitarbeiter telefoniert auf Vereinskosten', 'money', -1000, 0, 0, 3, 0),
('', 'Ein Brand im Lagerraum zerstört die gesamte EDV Anlage', 'money', -225000, 0, 0, 3, 0),
('', 'Wegen Hooligans wird ihr Verein zu einer Geldstrafe verdonnert', 'money', -275000, 0, 0, 3, 0),
('', 'Renovierungen im Stadionumfeld sind von Nöten', 'money', -200000, 0, 0, 3, 0),
('', 'Ihr Sponsor ist sehr zufrieden und zahlt dem Verein einen Bonus', 'money', 350000, 0, 0, 3, 0),
('', 'Ihr Verein bekommt eine Spende von einem Fanclub', 'money', 100000, 0, 0, 3, 0),
('', 'Ihr Verein steht in der Presse schlecht da. Sie starten eine Imagekapampagne', 'money', -15000, 0, 0, 3, 0),
('', 'Ihr Verein wird für vorbildliche Fans ausgezeichnet', 'money', 300000, 0, 0, 3, 0),
('', '{playername} fällt nach einer Schiedsrichterbeleidigung aus', 'player_blocked', 0, 2, 0, 3, 0),
('', '{playername} fällt nach einer Trainingskeilerei aus', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} verdreht sich das Knie beim Joggen', 'player_injured', 0, 4, 0, 3, 0),
('', '{playername} plaudert Internas aus und wird suspendiert', 'player_blocked', 0, 5, 0, 3, 0),
('', '{playername} trauert seiner Ex-Freundin hinterher', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} bekommt viel Lob von der Presse', 'player_happiness', 0, 0, 3, 3, 0),
('', '{playername} geht nach dem Training zum Wasseraerobic', 'player_fitness', 0, 0, 2, 3, 0),
('', '{playername} holt sich ein Hexenschuss als er sein Kind hebt', 'player_injured', 0, 0, -1, 3, 0),
('', 'Sie gewinnen im Casino', 'money', 750000, 0, 0, 3, 0),
('', 'Sie erhalten einen Preis eines Sportmagazines', 'money', 75000, 0, 0, 3, 0),
('', 'Sie veräußern eine Immobilie gewinnbringend', 'money', 125000, 0, 0, 3, 0),
('', '{playername} streitet sich mit mehreren Mitspielern', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} lädt seine Mannschaftskollegen zum Mannschaftsabend ein', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} lädt seine Teamkollegen zum gemeinsamen Essen ein', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} bekommt einen neuen Ausrüstervertrag', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} verliert einen Ausrüstervertrag', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} erkrankt schwer', 'player_injured', 0, 2, 0, 3, 0),
('', '{playername} knickt unglücklich um als er einen Trick ausprobiert', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} wird beim Rückwärts ausparken von seinem Teamkollegen übersehen. Sein Fuß ist danach kaputt.', 'player_injured', 0, 1, 0, 3, 0),
('', '{playername} geht privat sehr viel Joggen,was sich auf die Kondition auswirkt.', 'player_stamina', 0, 0, 2, 3, 0),
('', '{playername} diskutiert viel mit seinem Trainer und lernt wertvolles.', 'player_happiness', 0, 0, 2, 3, 0),
('', '{playername} wütet nach der Niederlage gegen seine Mitspieler. Sie suspendieren Ihn.', 'player_blocked', 0, 2, 0, 3, 0),
('', '{playername} verbessert sein Standing im Team', 'player_happiness', 0, 0, 1, 3, 0),
('', 'Sie verlieren eine Sportwette gegen ein alten Trainerkollegen. Und werden zur Kasse gebeten.', 'money', -1000, 0, 0, 3, 0),
('', 'Sie laden ihre Spieler zum Bowlingabend ein und zahlen diesen.', 'money', -1250, 0, 0, 3, 0),
('', 'Sie laden ihr Team zum Kanu-Trip ein.', 'money', -800, 0, 0, 3, 0),
('', 'Sie kommen zu spät zum Training und zahlen dafür in die Mannschaftskasse ein', 'money', 500, 0, 0, 3, 0),
('', 'Sie beschaffen sich eine Taktik Tafel für zu Hause', 'money', -375, 0, 0, 3, 0),
('', '{playername} wird viel mit Vereinen in Verbindung gebracht. Seine Vorbereitung schleift dadurch', 'player_happiness', 0, 0, -2, 3, 0),
('', '{playername} wird mit großen Clubs in Verbindung gebracht. Das imponiert ihm sehr und er hängt sich mehr rein.', 'player_happiness', 0, 0, 3, 3, 0),
('', '{playername} verkracht sich mit seinem besten Kumpel.', 'player_fitness', 0, 0, -2, 3, 0),
('', '{playername} kommt verspätet zum Training', 'player_blocked', 0, 1, 0, 3, 0),
('', '{playername} trauert um seine Oma', 'player_happiness', 0, 0, -2, 3, 0),
('', 'Durch eine Fehl-Bestellung entstehen erhöhte Kosten', 'money', -3500, 0, 0, 3, 0),
('', 'Sie gewinnen einen Preis für die Beste Jugendabteilung', 'money', 30000, 0, 0, 3, 0),
('', 'Sie platzieren eine Sportwette und gewinnen diese auch noch.', 'money', 1750, 0, 0, 3, 0),
('', 'Sie finden einen Alukoffer und öffnen diesen', 'money', 75750, 0, 0, 3, 0),
('', 'Ein Mitarbeiter verletzt sich im Büro. Sie kaufen Ihn eine Aufmerksamkeit.', 'money', -500, 0, 0, 3, 0);
-- Beschr�nkung der Anzahl der Eintr�ge
ALTER TABLE `_randomevent` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
-- Tabelle f�r TV-Vertr�ge
CREATE TABLE `_tv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL,
  `b_spiel` int(10) NOT NULL,
  `b_heimzuschlag` int(10) NOT NULL,
  `b_sieg` int(10) NOT NULL,
  `b_meisterschaft` int(10) NOT NULL,
  `max_teams` smallint(5) NOT NULL,
  `min_platz` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Fremdschl�sselabh�ngigkeiten der einzkenen Tabellen
ALTER TABLE _user_inactivity ADD CONSTRAINT _user_inactivity_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _briefe ADD CONSTRAINT _briefe_user_id_fk FOREIGN KEY (absender_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _verein ADD CONSTRAINT _verein_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE SET NULL;
ALTER TABLE _verein ADD CONSTRAINT _verein_stadion_id_fk FOREIGN KEY (stadion_id) REFERENCES _stadion(id) ON DELETE SET NULL;
ALTER TABLE _verein ADD CONSTRAINT _verein_sponsor_id_fk FOREIGN KEY (sponsor_id) REFERENCES _sponsor(id) ON DELETE SET NULL;
ALTER TABLE _verein ADD CONSTRAINT _verein_liga_id_fk FOREIGN KEY (liga_id) REFERENCES _liga(id) ON DELETE CASCADE;
ALTER TABLE _spieler ADD CONSTRAINT _spieler_verein_id_fk FOREIGN KEY (verein_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _konto ADD CONSTRAINT _konto_verein_id_fk FOREIGN KEY (verein_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _transfer_angebot ADD CONSTRAINT _transfer_angebot_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _trainingslager_belegung ADD CONSTRAINT _trainingslager_belegung_fk FOREIGN KEY (lager_id) REFERENCES _trainingslager(id) ON DELETE CASCADE;
ALTER TABLE _trainingslager_belegung ADD CONSTRAINT _trainingslager_verein_fk FOREIGN KEY (verein_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _aufstellung ADD CONSTRAINT _aufstellung_verein_id_fk FOREIGN KEY (verein_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _spiel ADD CONSTRAINT _spiel_saison_id_fk FOREIGN KEY (saison_id) REFERENCES _saison(id) ON DELETE CASCADE;
ALTER TABLE _spiel ADD CONSTRAINT _spiel_home_id_fk FOREIGN KEY (home_verein) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _spiel ADD CONSTRAINT _spiel_gast_id_fk FOREIGN KEY (gast_verein) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _spiel_berechnung ADD CONSTRAINT _berechnung_spiel_id_fk FOREIGN KEY (spiel_id) REFERENCES _spiel(id) ON DELETE CASCADE;
ALTER TABLE _spiel_berechnung ADD CONSTRAINT _berechnung_spieler_id_fk FOREIGN KEY (spieler_id) REFERENCES _spieler(id) ON DELETE CASCADE;
ALTER TABLE _transfer ADD CONSTRAINT _transfer_spieler_id_fk FOREIGN KEY (spieler_id) REFERENCES _spieler(id) ON DELETE CASCADE;
ALTER TABLE _transfer ADD CONSTRAINT _transfer_selleruser_fk FOREIGN KEY (seller_user_id) REFERENCES _user(id) ON DELETE SET NULL;
ALTER TABLE _transfer ADD CONSTRAINT _transfer_sellerclub_fk FOREIGN KEY (seller_club_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _transfer ADD CONSTRAINT _transfer_buyeruser_fk FOREIGN KEY (buyer_user_id) REFERENCES _user(id) ON DELETE SET NULL;
ALTER TABLE _transfer ADD CONSTRAINT _transfer_buyerclub_fk FOREIGN KEY (buyer_club_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _matchreport ADD CONSTRAINT _matchreport_spiel_id_fk FOREIGN KEY (match_id) REFERENCES _spiel(id) ON DELETE CASCADE;
ALTER TABLE _matchreport ADD CONSTRAINT _matchreport_message_id_fk FOREIGN KEY (message_id) REFERENCES _spiel_text(id) ON DELETE CASCADE;
ALTER TABLE _training_unit ADD CONSTRAINT _training_verein_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _cup ADD CONSTRAINT _cup_winner_id_fk FOREIGN KEY (winner_id) REFERENCES _verein(id) ON DELETE SET NULL;
ALTER TABLE _cup_round ADD CONSTRAINT _cupround_cup_id_fk FOREIGN KEY (cup_id) REFERENCES _cup(id) ON DELETE CASCADE;
ALTER TABLE _cup_round ADD CONSTRAINT _cupround_fromwinners_id_fk FOREIGN KEY (from_winners_round_id) REFERENCES _cup_round(id) ON DELETE CASCADE;
ALTER TABLE _cup_round ADD CONSTRAINT _cupround_fromloosers_id_fk FOREIGN KEY (from_loosers_round_id) REFERENCES _cup_round(id) ON DELETE CASCADE;
ALTER TABLE _cup_round_pending ADD CONSTRAINT _cuproundpending_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _cup_round_pending ADD CONSTRAINT _cuproundpending_round_fk FOREIGN KEY (cup_round_id) REFERENCES _cup_round(id) ON DELETE CASCADE;
ALTER TABLE _cup_round_group ADD CONSTRAINT _cupgroup_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _cup_round_group_next ADD CONSTRAINT _groupnext_round_fk FOREIGN KEY (cup_round_id) REFERENCES _cup_round(id) ON DELETE CASCADE;
ALTER TABLE _cup_round_group_next ADD CONSTRAINT _groupnext_tagetround_fk FOREIGN KEY (target_cup_round_id) REFERENCES _cup_round(id) ON DELETE CASCADE;
ALTER TABLE _team_league_statistics ADD CONSTRAINT _statistics_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _team_league_statistics ADD CONSTRAINT _statistics_season_id_fk FOREIGN KEY (season_id) REFERENCES _saison(id) ON DELETE CASCADE;
ALTER TABLE _transfer_offer ADD CONSTRAINT _toffer_spieler_id_fk FOREIGN KEY (player_id) REFERENCES _spieler(id) ON DELETE CASCADE;
ALTER TABLE _transfer_offer ADD CONSTRAINT _toffer_selleruser_fk FOREIGN KEY (sender_user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _transfer_offer ADD CONSTRAINT _toffer_sellerclub_fk FOREIGN KEY (sender_club_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _transfer_offer ADD CONSTRAINT _toffer_buyerclub_fk FOREIGN KEY (receiver_club_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _notification ADD CONSTRAINT _notification_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _youthplayer ADD CONSTRAINT _youthplayer_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch_request ADD CONSTRAINT _youthrequest_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch ADD CONSTRAINT _youthmatch_home_id_fk FOREIGN KEY (home_team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch ADD CONSTRAINT _youthmatch_guest_id_fk FOREIGN KEY (guest_team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch_player ADD CONSTRAINT _ymatchplayer_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch_player ADD CONSTRAINT _ymatchplayer_player_id_fk FOREIGN KEY (player_id) REFERENCES _youthplayer(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch_player ADD CONSTRAINT _ymatchplayer_match_id_fk FOREIGN KEY (match_id) REFERENCES _youthmatch(id) ON DELETE CASCADE;
ALTER TABLE _youthmatch_reportitem ADD CONSTRAINT _ymatchreport_match_id_fk FOREIGN KEY (match_id) REFERENCES _youthmatch(id) ON DELETE CASCADE;
ALTER TABLE _stadium_construction ADD CONSTRAINT _construction_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _stadium_construction ADD CONSTRAINT _construction_builder_id_fk FOREIGN KEY (builder_id) REFERENCES _stadium_builder(id) ON DELETE CASCADE;
ALTER TABLE _teamoftheday ADD CONSTRAINT _teamofday_season_id_fk FOREIGN KEY (season_id) REFERENCES _saison(id) ON DELETE CASCADE;
ALTER TABLE _teamoftheday ADD CONSTRAINT _teamofday_player_id_fk FOREIGN KEY (player_id) REFERENCES _spieler(id) ON DELETE CASCADE;
ALTER TABLE _nationalplayer ADD CONSTRAINT _nationalp_player_id_fk FOREIGN KEY (player_id) REFERENCES _spieler(id) ON DELETE CASCADE;
ALTER TABLE _nationalplayer ADD CONSTRAINT _nationalp_team_id_fk FOREIGN KEY (team_id) REFERENCES _verein(id) ON DELETE CASCADE;
ALTER TABLE _premiumstatement ADD CONSTRAINT _premium_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _premiumpayment ADD CONSTRAINT _premiumpayment_user_id_fk FOREIGN KEY (user_id) REFERENCES _user(id) ON DELETE CASCADE;
ALTER TABLE _verein ADD CONSTRAINT _verein_original_user_id_fk FOREIGN KEY (user_id_actual) REFERENCES _user(id) ON DELETE SET NULL;
ALTER TABLE _spiel ADD CONSTRAINT _match_home_user_id_fk FOREIGN KEY (home_user_id) REFERENCES _user(id) ON DELETE SET NULL;
ALTER TABLE _spiel ADD CONSTRAINT _match_guest_user_id_fk FOREIGN KEY (gast_user_id) REFERENCES _user(id) ON DELETE SET NULL;
