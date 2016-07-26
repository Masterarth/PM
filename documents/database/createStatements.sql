CREATE TABLE IF NOT EXISTS Users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  l_name VARCHAR(30) NOT NULL UNIQUE,
  passwort VARCHAR(60) NOT NULL,
  aktiv BOOLEAN NOT NULL DEFAULT 0,
  reg_datum TIMESTAMP
);
CREATE TABLE IF NOT EXISTS Berechtigung(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  berechtigung VARCHAR(30) UNIQUE
);
CREATE TABLE IF NOT EXISTS Budget(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  betrag DOUBLE,
  sta_periode date,
  end_periode date,
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
  f_leitung INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(f_leitung) REFERENCES Mitarbeiter(id)
);
CREATE TABLE IF NOT EXISTS Standort(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  s_name VARCHAR(30) NOT NULL,
  strasse VARCHAR(30) NOT NULL,
  hausnummer VARCHAR(6) NOT NULL,
  plz INT(10) NOT NULL,
  ort VARCHAR(30) NOT NULL,
  s_leitung INT(6) UNSIGNED,
  FOREIGN KEY(s_leitung) REFERENCES Mitarbeiter(id)
);
CREATE TABLE IF NOT EXISTS Bereich(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  s_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(s_id) REFERENCES Standort(id),
  b_name VARCHAR(30) NOT NULL,
  b_leitung INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(b_leitung) REFERENCES Mitarbeiter(id),
  budget_id INT(6) UNSIGNED,
  FOREIGN KEY(budget_id) REFERENCES Budget(id)
);
CREATE TABLE IF NOT EXISTS Abteilung(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  b_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(b_id) REFERENCES Bereich(id),
  a_name VARCHAR(30) NOT NULL,
  a_leitung INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(a_leitung) REFERENCES Mitarbeiter(id),
  budget_id INT(6) UNSIGNED,
  FOREIGN KEY(budget_id) REFERENCES Budget(id)
);
CREATE TABLE IF NOT EXISTS ProjStatus(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  status VARCHAR(20) NOT NULL
);
CREATE TABLE IF NOT EXISTS Projekt(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titel VARCHAR(40) NOT NULL,
  erstell_datum TIMESTAMP,
  genehmigung_E1 BOOLEAN NOT NULL DEFAULT 0,
  genehmigung_E2 BOOLEAN NOT NULL DEFAULT 0,
  genehmigung_E3 BOOLEAN NOT NULL DEFAULT 0,
  e_id INT(6) UNSIGNED,
  FOREIGN KEY(e_id) REFERENCES Mitarbeiter(id),
  b_id INT(6) UNSIGNED,
  FOREIGN KEY(b_id) REFERENCES Bereich(id),
  l_id INT(6) UNSIGNED,
  FOREIGN KEY(l_id) REFERENCES Mitarbeiter(id),
  budget_id INT(6) UNSIGNED,
  FOREIGN KEY(budget_id) REFERENCES Budget(id),
  vor_sta_term DATE,
  vor_end_term DATE,
  tat_sta_term DATE,
  tat_end_term DATE,
  beschreibung TEXT,
  nutzen VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS ProjMitarb(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  m_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(m_id) REFERENCES Mitarbeiter(id),
  p_id INT(6) UNSIGNED NOT NULL,
  FOREIGN KEY(p_id) REFERENCES Projekt(id)
);
ALTER TABLE Mitarbeiter ADD abteil INT(6) UNSIGNED;
ALTER TABLE Mitarbeiter ADD FOREIGN KEY(abteil) REFERENCES Abteilung(id);
