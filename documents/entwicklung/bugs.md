[ ] Wenn ein String in einem Feld eingegeben wird, in dem eine Zahl erwartet wird, wird dies nicht abgefangen. fetchAll()-Fehlermeldung

# DASHBOARD
[x] Direktauswahl eines Projektes über die zu genehmigenden Projekte funktioniert nicht
[x] "Zu" in Zu genehmigende Projekte muss groß geschrieben werden 


# PROJEKTANTRAG
[x] Bei geöffnetem Antrag wird der Button unten rechts nicht angezeigt
[x] Daten des Antrages werden nicht angezeigt
[] Wenn ich in vorhandenem Projektantrag etwas bearbeite, dann verschwindet der Button unten rechts wenn der Antrag aufgerufen wird. Zusätzlich werden nicht alle Daten angezeigt.

# STAMMDATEN

## BUDGET
[ ] Wird nach ID sortiert und nicht nach Datum. Ist das richtig so?
    -> arth: muss lukas entscheiden und dann entsprechend im sql select statement abändern
[x] Funktion des Löschen-Buttons? Er macht bei mir nichts.
    -> arth: foreign key... siehe standort oder team löschung beschreibung
[x] Kein Zurück-Button bei Budget-Erstellung

## STANDORT
[ ] Standortleiter kann nicht ausgewählt werden
[x] Button Löschen nutzlos
    -> arth: weil team noch in einer anderen tabelle verwendet wird ... foreignkey prüfung!
    -> arth: siehe team lösung erklärung!
[ ] Wenn Adresse nicht gefunden wird, wird alles mit Fehlermeldungen zugespammt, aber nicht gespeichert.
    Auszug:
            Notice: Undefined offset: 3 in D:\Xampp\htdocs\PM\controller\standort.php on line 25
            Notice: Undefined variable: request in D:\Xampp\htdocs\PM\controller\standort_bearbeiten.php on line 30
            <br /><b>Notice</b>:  Undefined index: standort in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br />
            Standortname
    -> arth: bitte mir mal genau zeigen was ihr da eingebt
    -> karh: Die Strasse auf sapufnwiuefbpwf ändern und versuchen zu speichern.


## ABTEILUNG
[x] Wird ein Abteilungsleiter eingegeben, der nicht existiert, so existiert die ganze Abteilung nicht mehr (a_leitung wird NULL gesetzt und Abteilung nicht mehr angezeigt
[x] Unterscheidung verschiedener Personen mit gleichem Namen?
    -> arth: wurde schon bedacht aber da keine richtig lösung möglich ist nehmen wir das in kauf!

## TEAM
[x] Leistung ist nur einmalig zu erfassen. Keine Leistung 2016 und 2017 möglich?
    -> arth: man update die leistung
    -> arth: sprich wenn man das 2 mal auf den button leistung klickt können die daten geändert werden.
    -> arth: ist so weil das im db model nicht anders möglich ist
    -> karh: erkläre mir das bitte, es gibt eine Leistungstabelle welche per 1:n Beziehung verknüpft werden kann inklusive Jahr. Wieso ist es im DB-Model nicht anders möglich?
[x] Löschen nicht möglich 
    -> arth: weil team noch in einer anderen tabelle verwendet wird ... foreignkey prüfung!
          wenn team nirgends verwendet wird kann team gelöscht werden..
          falls das trotzdem gewollt ist muss man das am db model ändern wie bei projekt kann man veranlassen das alle verbindungen zum team mit gelöscht werden
          also ist eine lösung falls gewünscht schon vorhanden.
    SQL-Befehl:
    DELETE from team WHERE id = 1
    MySQL meldet: Dokumentation
    #1451 - Cannot delete or update a parent row: a foreign key constraint fails (`pams`.`leistung`, CONSTRAINT `leistung_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `team` (`id`))


## MITARBEITER
[x] Ändern der Rolle nicht möglich "Der Benutzer konnte nicht gefunden werden"
[] Neu erstellter Mitarbeiter kann nicht gelöscht werden. Dürfte kein Zuordnungsproblem sein? Connection time out after 30 sec
