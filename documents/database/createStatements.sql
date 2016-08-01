CREATE TABLE IF NOT EXISTS Users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  l_name VARCHAR(30) NOT NULL UNIQUE,
  passwort VARCHAR(60) NOT NULL,
  aktiv BOOLEAN NOT NULL DEFAULT 0,
  reg_datum DATE
);
CREATE TABLE IF NOT EXISTS Berechtigung(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  berechtigung VARCHAR(30) UNIQUE
);
CREATE TABLE IF NOT EXISTS Budget(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  betrag DOUBLE,
  sta_periode DATE,
  end_periode DATE,
  aktiv BOOLEAN DEFAULT 0
);
CREATE TABLE IF NOT EXISTS Mitarbeiter(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  u_id INT(6) UNSIGNED,
  FOREIGN KEY(u_id) REFERENCES Users(id),
  nachname VARCHAR(30) NOT NULL,
  vorname VARCHAR(30) NOT NULL,
  b_id INT(6) UNSIGNED,
  FOREIGN KEY(b_id) REFERENCES Berechtigung(id)
);
CREATE TABLE IF NOT EXISTS Firma(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  f_name VARCHAR(50) NOT NULL,
  f_leitung INT(6) UNSIGNED ,
  FOREIGN KEY(f_leitung) REFERENCES Mitarbeiter(id),
  budget_id INT(6) UNSIGNED,
  FOREIGN KEY(budget_id) REFERENCES Budget(id)
);
CREATE TABLE IF NOT EXISTS Standort(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  s_name VARCHAR(30) NOT NULL,
  strasse VARCHAR(30) NOT NULL,
  hausnummer VARCHAR(6) NOT NULL,
  plz INT(10) NOT NULL,
  ort VARCHAR(30) NOT NULL,
  s_leitung INT(6) UNSIGNED,
  FOREIGN KEY(s_leitung) REFERENCES Mitarbeiter(id),
  f_id INT(6) UNSIGNED,
  FOREIGN KEY(f_id) REFERENCES Firma(id)
);
CREATE TABLE IF NOT EXISTS Abteilung(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  s_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(s_id) REFERENCES Standort(id),
  a_name VARCHAR(30) NOT NULL,
  a_leitung INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(a_leitung) REFERENCES Mitarbeiter(id)
);
CREATE TABLE IF NOT EXISTS Team(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  a_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(a_id) REFERENCES Abteilung(id),
  t_name VARCHAR(30) NOT NULL,
  t_leitung INT(6) UNSIGNED,
  FOREIGN KEY(t_leitung) REFERENCES Mitarbeiter(id)
);
CREATE TABLE IF NOT EXISTS ProjStatus(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  status VARCHAR(20) NOT NULL
);
CREATE TABLE IF NOT EXISTS Projekt(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titel VARCHAR(40) NOT NULL,
  erstell_datum DATE,
  genehmigung_E1 BOOLEAN NOT NULL DEFAULT 0,
  genehmigung_E2 BOOLEAN NOT NULL DEFAULT 0,
  genehmigung_E3 BOOLEAN NOT NULL DEFAULT 0,
  e_id INT(6) UNSIGNED,
  FOREIGN KEY(e_id) REFERENCES Mitarbeiter(id),
  a_id INT(6) UNSIGNED,
  FOREIGN KEY(a_id) REFERENCES Abteilung(id),
  l_id INT(6) UNSIGNED,
  FOREIGN KEY(l_id) REFERENCES Mitarbeiter(id),
  tat_budget_id INT(6) UNSIGNED,
  FOREIGN KEY(tat_budget_id) REFERENCES Budget(id),
  plan_budget_id INT(6) UNSIGNED,
  FOREIGN KEY(plan_budget_id) REFERENCES Budget(id),
  vor_sta_term DATE,
  vor_end_term DATE,
  tat_sta_term DATE,
  tat_end_term DATE,
  beschreibung TEXT,
  nutzen VARCHAR(255),
  amorti_zeit VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS ProjTeam(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  t_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(t_id) REFERENCES Team(id),
  p_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(p_id) REFERENCES Projekt(id),
  stunden INT(20) UNSIGNED
);
CREATE TABLE IF NOT EXISTS Leistung(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  t_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(t_id) REFERENCES Team(id),
  jahr Date NOT NULL,
  ist_stunden INT(20) UNSIGNED,
  max_stunden INT(20) UNSIGNED
);
CREATE TABLE IF NOT EXISTS Kapitalwerte(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  p_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(p_id) REFERENCES Projekt(id),
  jahr Date NOT NULL,
  zinssatz INT(10),
  einzahlung DOUBLE,
  auszahlung DOUBLE
);
ALTER TABLE Mitarbeiter ADD t_id INT(6) UNSIGNED;
ALTER TABLE Mitarbeiter ADD FOREIGN KEY(t_id) REFERENCES Team(id);
