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
    [x] dashboard
        - Der PM Typ will ja ne alternative:
            - bitte herrausfinden was er genau will wie soll die tabelle aufgebaut sein?
            - und was soll die Tabelle alles können ? welche absprungmöglichkeiten, sortiermöglichkeiten etc. 
            - ACHTUNG! bitte versuchen das so hin zu drehen das es keine Aktionsmöglichkeiten auser einen absprung gibt!!!
        [ ] suche
            - wie soll die Suche genau funktionieren?
                @Artur => Sollen wir hier überhautp suchen
    [ ] anlegen
        [X] Amortisationsdauer --> Aber [] Verknüpfung fehlt
        [X] Bemerkung -> Aber [] Verknüpfung fehlt
        [X] Projektteams
        [X] Arbeitspakete
        [X] Meilensteine
        [x] Kapitalwerte
            - nur noch zinssatz fehlt! Der rest geht...            
    [ ] bearbeiten
        [ ] update in die DB fehlt --> @Art Auschecken der Klasse + Bug fixes falls vorhanden 
        [X] Ansicht ist ok
    [x] Antrag genehmigen / ablehnen
    [x] Auftraggeber
.
-> Zum einen Fehlen die Felder auf der Maske zum Teil 
    @Artur Felder sind angelegt
-> Zum anderen müssen dann die Felder im Backend noch richtig abgefangen werden bsp. aber vorhanden
    @Artur Doing
-> Könnte bitte jmd diese Felder in die anlege maske mit aufnehmen?! 
    @Artur => Welche Felder?
    @Artur => Felder sind eingefügt --> Logik verknüpfen --> Greeetz Luki

 [X] ! ich bräuchte hilfe bei der Logik also nicht beim programmieren sondern wirklich nur theoretisch:
    - wie ich jetzt die genehmigunskacke handeln soll ... 
    - sprich:
        - wie wähle ich am intelligentesten die zu genehmigenden Projekte?
        - wie mache ich das am besten mit den kack stufen? 
        - denn die bisherige auswahl auf dem Dashboard stimmt nicht!!!
        @Artur = Lösung liegt in Document/Projectmanagement/Planung ==> Genehmigungsumsetzung_Artur
        

        FROM L = Statement für die Genehmigung
        SELECT * 
FROM projekt,team,abteilung,mitarbeiter, standort, projstatus
WHERE (projekt.genehmigung_E1 = 0 AND projekt.a_id = abteilung.id AND abteilung.id = team.a_id AND team.t_leitung = 1 AND projekt.s_id = 1)
OR ( projekt.genehmigung_E2 = 0 AND projekt.a_id = abteilung.id AND abteilung.a_leitung = 1 AND projekt.s_id =1)
OR ( projekt.genehmigung_E3 = 0 AND projekt.a_id = abteilung.id AND abteilung.s_id = standort.id AND standort.s_leitung = 1 AND projekt.s_id = 1)

[x] stammdaten
    [x] Prioritäten -> Bemerkung LA: Prioritäten sind glaube ich einfach nur hoch, mittel, niedrig?
        [x] anzeigen
        [x] für ein projekt vergeben
        - frage: warum ist das prio zeug in den stammdaten ? @Artur => Macht keinen Sinn mehr und kann raus

-----

[ ] team ist_stunden aus projekt leistungsshit berechnen ? 
    -> alles ok
    -> aber der wert ist ja immer berechnet wenn das irgendwo verwenden möchten müssen wir den immer berechnen ? 
[x] @k @n   -> random algo für bilder überall tryen zu coden -> ist unabhänig von allem !?
[X] @L      -> wenn du projektklasse fertig hast können wir update von anträgen darüber machen weil ich habe das updaten noch nicht programmiert es wird nur richtig angezeigt felder müssen noch in die db geupdated werden
[X] @L      -> wenn du willst kannst du bitte nur die felder im antrag platzieren die noch fehlen siehe oben die noch nicht abgehackt sind. (Amortisationsdauer,Geplantes Budget etc.)
            -> falls die felder fürn arsch sind aus der db werfen! können vllt. ausmissten!
[x] Statistik seite ist eigentlich auch nicht schwer vllt. können das die anderen 3 (k,n,t) machen ? 
    -> ist schon viel vorbereitet -> somit nur viel copy paste
    -> außerdem unabhängig von allem wichtigem
    -> @A  = Vorbereiten der Klasse, damit sie wissen wo gecodet werden muss! + DB Zugriff exemplarisch anlegen
[ ] @all    -> sowie es aussieht kann man das googlecharts dings nicht offline verwenden sprich das google charts js / google loader.js nicht herrrunterladen und einbinden man brauch immer ne inet verbindung
            -> wir sollten hierzu mal abklären ob das ok ist ? oder der freddy bzw. der pm typ was dagegen haben... 
            -> denn wenn die das offline testen sollten gehen alle charts nicht!

[x] @L --> PHPUnit anfangen
        > Klassen:
            1. Projekt
            2. Kapitalwertmethode
            3. Userhandler


----------------------------

## Antrag

Folgende Felder werden nicht benutzt:
    - Risiko
    - p_stem
    - tat_sta_term
    - tat_end_term
    - nutzen (string!)