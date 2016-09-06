[]Wenn ein String in einem Feld eingegeben wird, in dem eine Zahl erwartet wird, wird dies nicht abgefangen. fetchAll()-Fehlermeldung

*****************DASHBOARD*****************
[]Direktauswahl eines Projektes über die zu genehmigenden Projekte funktioniert nicht
[]"Zu" in Zu genehmigende Projekte muss groß geschrieben werden 


***************PROJEKTANTRAG***************
[]Bei geöffnetem Antrag wird der Button unten rechts nicht angezeigt
[]Daten des Antrages werden nicht angezeigt


*****************STAMMDATEN*****************

#BUDGET
[]Wird nach ID sortiert und nicht nach Datum. Ist das richtig so?
[]Funktion des Löschen-Buttons? Er macht bei mir nichts.
[]Kein Zurück-Button bei Budget-Erstellung

#STANDORT
[]Button Löschen nutzlos
[]Standortleiter kann nicht ausgewählt werden
[]Wenn Adresse nicht gefunden wird, wird alles mit Fehlermeldungen zugespammt, aber nicht gespeichert.
    Auszug:
            Notice: Undefined offset: 3 in D:\Xampp\htdocs\PM\controller\standort.php on line 25
            Notice: Undefined variable: request in D:\Xampp\htdocs\PM\controller\standort_bearbeiten.php on line 30
            <br /><b>Notice</b>:  Undefined index: standort in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>D:\Xampp\htdocs\PM\bin\smarty\templates_c\990af5aca8b8d07048c0c410c4b18a99961fdd54_0.file.standort_bearbeiten.tpl.php</b> on line <b>31</b><br />
            Standortname


#ABTEILUNG
[]Wird ein Abteilungsleiter eingegeben, der nicht existiert, so existiert die ganze Abteilung nicht mehr (a_leitung wird NULL gesetzt und Abteilung nicht mehr angezeigt
[]Unterscheidung verschiedener Personen mit gleichem Namen?

#TEAM
[]Leistung ist nur einmalig zu erfassen. Keine Leistung 2016 und 2017 möglich?
[]Löschen nicht möglich

#MITARBEITER
[]Ändern der Rolle nicht möglich "Der Benutzer konnte nicht gefunden werden"