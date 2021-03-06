INSERT INTO users (l_name,passwort,aktiv,reg_datum) VALUES ('admin','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m2','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m3','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m4','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m5','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m6','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m7','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m8','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m9','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',1,'2016-07-01'),('m10','$2y$10$alhuk/FyMqp..sZPhJxAa.yQeZHLIuTIhoxj2MFP..PW01BAco1Ki',0,'2016-07-01');
INSERT INTO mitarbeiter (u_id,nachname,vorname,r_id) VALUES (1,'Mustermann','Max',1),(2,'Mustermann','Nicole',2),(3,'Mustermann','Heidi',3),(4,'Mustermann','Lisa',4),(5,'Mustermann','Ute',5),(6,'Mustermann','Renate',6),(7,'Mustermann','Hildegard',7),(8,'Mustermann','Sabrina',2),(9,'Mustermann','Hanelore',3),(10,'Mustermann','Ina',2);
INSERT INTO Firma (f_name,f_leitung) VALUES ('Supernova AG',1);
INSERT INTO Firbudget (f_id, betrag, sta_periode, end_periode, aktiv) VALUES (1, 800000.00,  '2015-01-01', '2015-12-31', 0), 
                                                                             (1, 1000000.00, '2016-01-01', '2016-12-31', 1);
INSERT INTO Standort (s_name, strasse, hausnummer, plz, ort, f_id,s_leitung) VALUES ('Lörrach', 'Hangstrasse', 17, 79539, 'Lörrach', 1,1), 
                                                                           ('Berlin', 'Platz der Republik', 1, 11011, 'Berlin', 1,1);
INSERT INTO Abteilung (s_id, a_name, a_leitung) VALUES (1, 'Human Resources', 1), 
                                            (2, 'Forschung', 1), 
                                            (1, 'Informationstechnik', 1);
INSERT INTO Team (a_id, t_name, t_leitung) VALUES (1, 'Personalbetreuung', 1), 
                                       (3, 'PHP', 1),
                                       (2, 'Nuklearforschung', 1),
                                       (3, 'DB', 1),
                                       (3, 'JS', 1);
INSERT INTO Projekt (titel, auftraggeber, erstell_datum, genehmigung_E1, genehmigung_E2, genehmigung_E3, p_ziel1, p_ziel2, p_ziel3, p_ziel4, nicht_ziel, rahmbeding, p_system, komm_konz, risiko,e_id,a_id,l_id,b_id, s_id, vor_sta_term, vor_end_term, tat_sta_term, tat_end_term, beschreibung, nutzen, amorti_zeit, bemerkung, mon_kosten, mon_nutzen, kap_kosten) 
                    VALUES ('PAMS', 'Herr Trefzer', '2016-07-18', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 1,1,3,1,1, '2016-07-19', '2016-09-09', '2016-07-19', null, 'Dies ist eine Beschreibung', 'Der Nutzen beläuft sich auf ordentliche Projektanträge', '5 Jahre geschätzt', 'Abschlussbemerkungen können hier eingefügt werden', 22614.16, 125000.00, 10000.00), 
                           ('Rutsche für Aufenthaltsraum', 'Herr Amrein', '2016-07-26', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 1,2,9,1,2, '2016-06-26', '2016-09-25', '2016-07-26', null, 'Dies ist eine Beschreibung', 'Wer mag Rutschen nicht?', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 75000.00, 0.00, 75000.00), 
                           ('Burgerking in Kantine', 'Herr Huse', '2015-01-20', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 1,2,3,2,1, '2016-08-09', '2016-09-19','2016-06-31', '2016-07-26', 'Dies ist eine Beschreibung', 'Verfettung der Mitarbeiter', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 15000.00, 0.00, 15000.00),
                           ('Igluheizung für Austauscheskimo', 'Herr Wickersheim', '2016-05-20', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 2,2,3,1,1, '2016-05-27', '2016-09-01', '2016-05-29', null, 'Dies ist eine Beschreibung', 'Wer mag Rutschen nicht?', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 75000.00, 0.00, 75000.00), 
                           ('Streichelzoo', 'Herr Adler', '2015-04-01', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 3,3,3,2,1, '2016-04-30', '2016-06-25', NULL, NULL, 'Dies ist eine Beschreibung', 'Verfettung der Mitarbeiter', 'Sofort', 'Abschlussbemerkungen können hier eingefügt werden', 15000.00, 0.00, 15000.00),
                           ('Arts Wunschkonzert', 'Herr Stalbaum', '2016-08-30', 0, 0, 0, 'Warum?', 'Was?', 'Für wen?', 'Wie gut?', 'Das ist kein Ziel', 'Dies sind die Rahmenbedingungen', 'Systemumgebung des Projektes', 'Das Kommunikationskonzept des Projektes', 'Welche Risiken bringt das Projekt', 1,1,3,1,1, '2016-08-30', '2016-08-31', '2016-08-30', null, 'Dies ist eine Beschreibung', 'Happy Art', '5 Jahre geschätzt', 'Abschlussbemerkungen können hier eingefügt werden', 123.00, 321.00, 100.00);
INSERT INTO Meilensteine (p_id, ms_nummer, meilenstein, erfuellt) VALUES (1, 1, 'Datenbankonzeptionierung', 0), 
                                                                         (1, 2, 'PHP-Umsetzung des Projektes', 0), 
                                                                         (2, 1, 'Aufbau der Rutsche', 1),
                                                                         (4, 1, 'Heizung bestellt', 0), 
                                                                         (4, 2, 'Iglu', 0), 
                                                                         (5, 1, 'Aufbau der Rutsche', 1),
                                                                         (6, 2, 'Pushen', 0), 
                                                                         (6, 1, 'Anlegen der Testdaten', 1);            
INSERT INTO Projteam (t_id, p_id, stunden) VALUES (2, 1, 50.00), 
                                                  (4, 1, 50.00), 
                                                  (1, 3, 1.00), 
                                                  (1, 2, 100.00),
                                                  (2, 6, 50.00), 
                                                  (4, 6, 50.00);
INSERT INTO Leistung (t_id, jahr, ist_stunden, max_stunden) VALUES (1, 2016, 1, 150), 
                                                                   (2, 2016, 2000, 30000), 
                                                                   (3, 2016, 0, 2000), 
                                                                   (4, 2016, 1500, 15000), 
                                                                   (5, 2016, 1000, 2000);
INSERT INTO Kapitalwerte (p_id, jahr, zinssatz, einzahlung, auszahlung) VALUES (1, 1, 5.45, 10000.00, 8000.00), 
                                                                               (2, 1, 5.15, 30000.00, 25000.00), 
                                                                               (1, 2, 4.00, 8000.00, 6000.00), 
                                                                               (3, 1, 5.45, 100.00, 80.00),
                                                                               (6, 2, 4.00, 30, 20), 
                                                                               (6, 1, 5.45, 40, 30);