INSERT INTO users (l_name,passwort,aktiv) VALUES ('admin','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m2','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m3','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m4','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m5','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m6','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m7','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m8','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1),('m9','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1);
INSERT INTO mitarbeiter (u_id,nachname,vorname,r_id) VALUES (1,'Mustermann','Max',1),(2,'Mustermann','Nicole',2),(3,'Mustermann','Heidi',3),(4,'Mustermann','Lisa',4),(5,'Mustermann','Ute',5),(6,'Mustermann','Renate',6),(7,'Mustermann','Hildegard',7),(8,'Mustermann','Sabrina',2),(9,'Mustermann','Hanelore',3);
INSERT INTO Firma (f_name,f_leitung) VALUES ('Supernova AG',1);
INSERT INTO Firbudget (f_id, betrag, sta_periode, end_periode, aktiv) VALUES (1, 800000.00,  '2015-01-01', '2015-12-31', 0), 
                                                                             (1, 1000000.00, '2016-01-01', '2016-12-31', 1);
INSERT INTO Standort (s_name, strasse, hausnummer, plz, ort, f_id,s_leitung) VALUES ('Lörrach', 'Hangstrasse', 17, 79539, 'Lörrach', 1,1), 
                                                                           ('Berlin', 'Platz der Republik', 1, 11011, 'Berlin', 1,1);
INSERT INTO Abteilung (s_id, a_name, a_leitung) VALUES (1, 'Human Resources', 1), 
                                            (2, 'Forschung', 1), 
                                            (1, 'Informationstechnik', 1);
INSERT INTO Team (a_id, t_name, t_leitung) VALUES (1, 'Perosnalbetreuung', 1), 
                                       (3, 'PHP', 1), 
                                       (2, 'Nuklearforschung', 1), 
                                       (3, 'DB', 1), 
                                       (3, 'JS', 1);
INSERT INTO Probudget (betrag, aktiv) VALUES (4000.00, 1), (75000.00, 1), (3200.00, 1), (15000.00, 1), (49800.00, 1);
INSERT INTO Projekt (titel, auftraggeber, erstell_datum, genehmigung_E1, genehmigung_E2, genehmigung_E3, p_ziel1, p_ziel2, p_ziel3, p_ziel4, nicht_ziel, 
                    rahmbeding, p_system, komm_konz, risiko, tat_budget_id, plan_budget_id, s_id, vor_sta_term, vor_end_term, tat_sta_term, tat_end_term, 
                    beschreibung, nutzen, amorti_zeit, bemerkung, mon_kosten, mon_nutzen, kap_kosten) 
                    VALUES ('PAMS', 'Herr Trefzer', '2016-07-18', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 3, 1, 2, '2016-07-19', '2016-09-09', '2016-07-19', NULL, 'Dies ist eine Beschreibung', 'Der Nutzen beläuft sich auf ordentliche Projektanträge', '5 Jahre geschätzt', 'Abschlussbemerkungen können hier eingefügt werden', 22614.16, 125000.00, 10000.00), 
                           ('Rutsche für Aufenthaltsraum', 'Herr Amrein', '2016-07-26', 1, 1, 1, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 5, 2, 2, '2016-07-26', '2016-09-31', '2016-07-26', NULL, 'Dies ist eine Beschreibung', 'Wer mag Rutschen nicht?', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 75000.00, 0.00, 75000.00), 
                           ('Burgerking in Kantine', 'Herr Huse', '2015-01-20', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 4, NULL, 3, NULL, NULL, NULL, NULL, 'Dies ist eine Beschreibung', 'Verfettung der Mitarbeiter', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 15000.00, 0.00, 15000.00);
INSERT INTO Meilensteine (p_id, ms_nummer, meilenstein, erfuellt) VALUES (1, 1, 'Datenbankonzeptionierung', 0), 
                                                                         (1, 2, 'PHP-Umsetzung des Projektes', 0), 
                                                                         (2, 1, 'Aufbau der Rutsche', 1);
INSERT INTO Arbeitspakete (arbeitspaket, p_id) VALUES ('Konzeptionierung des Projektes', 1), 
                                                      ('Rutsche bestellen', 2), 
                                                      ('Programmierung', 1), 
                                                      ('Burgerking anrufen', 3);
INSERT INTO Projteam (t_id, p_id, stunden) VALUES (2, 1, 50.00), 
                                                  (4, 1, 50.00), 
                                                  (1, 3, 1.00), 
                                                  (1, 2, 100.00);
INSERT INTO Leistung (t_id, jahr, ist_stunden, max_stunden) VALUES (1, 2016, 1, 150), 
                                                                   (2, 2016, 2000, 30000), 
                                                                   (3, 2016, 0, 2000), 
                                                                   (4, 2016, 1500, 15000), 
                                                                   (5, 2016, 1000, 2000);
INSERT INTO Kapitalwerte (p_id, jahr, zinssatz, einzahlung, auszahlung) VALUES (1, 1, 5, 10000.00, 8000.00), 
                                                                               (2, 1, 5, 30000.00, 25000.00), 
                                                                               (1, 2, 4, 8000.00, 6000.00), 
                                                                               (3, 1, 5, 100.00, 80.00);