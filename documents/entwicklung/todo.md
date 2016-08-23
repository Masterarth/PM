#TODO´s 

[ ] Filter bei allen dashboards...
    - sollen wir die wirklich einbauen ? 
    - und wenn ja wie ? fertige statements ? 
    - BITTE hierzu mal gedanken machen ...
        @Lukas => Mach ich

        //Möglichkeit
        if ($stationFilter) {
            $sql[] = " STATION_NETWORK = '$stationFilter' ";
        }
        if ($verticalFilter) {
            $sql[] = " VERTICAL = '$verticalFilter' ";
        }

        $query = "SELECT * FROM $tableName";

        if (!empty($sql)) {
            $query .= ' WHERE ' . implode(' AND ', $sql);
        }

        echo $query;

[ ] Anträge
    [ ] dashboard
        - Der PM Typ will ja ne alternative:
            - bitte herrausfinden was er genau will wie soll die tabelle aufgebaut sein?
            - und was soll die Tabelle alles können ? welche absprungmöglichkeiten, sortiermöglichkeiten etc. 
            - ACHTUNG! bitte versuchen das so hin zu drehen das es keine Aktionsmöglichkeiten auser einen absprung gibt!!!
        [ ] suche
            - wie soll die Suche genau funktionieren?
                @Artur => Sollen wir hier überhautp suchen
    [ ] anlegen
        [ ] Amortisationsdauer
        [ ] Geplantes Budget
        [ ] Tatsächliches Budget
        [ ] Projektteams
        [ ] Arbeitspakete
        [ ] Meilensteine
        [x] Kapitalwerte
            - nur noch zinssatz fehlt! Der rest geht...            
        [ ] Bemerkung
    [ ] bearbeiten
    [ ] Antrag genehmigen / ablehnen
    [ ] Auftraggeber
.
-> Zum einen Fehlen die Felder auf der Maske zum Teil 
-> Zum anderen müssen dann die Felder im Backend noch richtig abgefangen werden bsp. aber vorhanden
-> Könnte bitte jmd diese Felder in die anlege maske mit aufnehmen?! 
    @Artur => Welche Felder?

 [X] ! ich bräuchte hilfe bei der Logik also nicht beim programmieren sondern wirklich nur theoretisch:
    - wie ich jetzt die genehmigunskacke handeln soll ... 
    - sprich:
        - wie wähle ich am intelligentesten die zu genehmigenden Projekte?
        - wie mache ich das am besten mit den kack stufen? 
        - denn die bisherige auswahl auf dem Dashboard stimmt nicht!!!
        @Artur = Lösung liegt in Document/Projectmanagement/Planung ==> Genehmigungsumsetzung_Artur
     

[ ] stammdaten
    [ ] Prioritäten -> Bemerkung LA: Prioritäten sind glaube ich einfach nur hoch, mittel, niedrig?
        [ ] anzeigen
        [ ] für ein projekt vergeben
        - frage: warum ist das prio zeug in den stammdaten ? @Artur => Macht keinen Sinn mehr und kann raus
    [X] Statistiken
        - kann jmd nur mal definieren (BITTE GENAU!) was wir hier für Diagramme bzw. Statistiken anzeigen wollen?
        - bitte in ein seperates doc und dann bescheid geben
            @Nico => Diagramme ausdenken und hochladen

[X] @NICO       bitte den Text für die Statistik Kachel in den Stammdaten schreiben!!! danke :) gerne :)
[X] @KARSTEN    bitte mal die ganzen Testfälle wie besprochen fertig machen!!! danke :)
[X] @KARSTEN        TESTEN TESTEN TESTEN und Bugs in ein bug.md file hier im ordner schreiben danke :)
