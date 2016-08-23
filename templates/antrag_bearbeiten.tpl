<form method="post" action="/pm/antrag/neu">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active teal-text" href="#basis">Basis</a></li>
                <li class="tab col s3"><a class="teal-text" href="#zusatz">Zusatz</a></li>
                <li class="tab col s3"><a class="teal-text" href="#kennzahl">Kennzahl</a></li>
                <li class="tab col s3 disabled"><a class="grey-text" href="#IstZahl">Ist-Werte</a></li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div id="basis" class="col s12">
            <div class="card-content">
                <span class="card-title teal-text">Basisinformationen{*neue Projektnummer aus db holen und anzeigen*}</span>
                <hr>
                <br/>
                <br/>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="projektname" name="reg[projectname]" type="text" required="" class="validate" placeholder="Projektname">
                        <label for="projektname">Projektname</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="sollstartdatum" name="reg[sollstartdatum]" type="date" required="" class="datepicker" placeholder="TT.MM.YYYY">
                        <label for="sollstartdatum">Startdatum</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="sollenddatum" name="reg[sollenddatum]" type="date" required="" class="datepicker" placeholder="TT.MM.YYYY">
                        <label for="sollenddatum">Enddatum</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">chat</i>
                        <textarea id="kurzbeschreibung" name="reg[kurzbeschreibung]" required="" type="text"  class="materialize-textarea validate" length="320" placeholder="Bitte geben Sie eine Kurzbeschreibung ein..."></textarea>
                        <label for="kurzbeschreibung">Kurzbeschreibung</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <textarea id="rahmenbedingungen" name="reg[rahmenbedingungen]" required="" class="materialize-textarea validate" type="text" length="255" placeholder="Bitte geben Sie die Rahmenbedingungen an..."></textarea>
                        <label for="rahmenbedingungen">Rahmenbedingungen</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">ring_volume</i>
                        <textarea id="Kommunikation" name="reg[kommunikation]" required="" class="materialize-textarea validate" length="255" placeholder="Bitte geben Sie das Kommunikationskonzept an..."></textarea>
                        <label for="Kommunikation">Kommunikation</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix"></i>
                        <textarea id="NichtZiele" name="reg[nichtZiele]" required="" class="materialize-textarea validate" length="255" placeholder="Bitte geben Sie an welche Dinge nicht realisiert werden solle..."></textarea>
                        <label for="NichtZiele">Nicht Ziele</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="zusatz" class="col s12">
            <div class="card-content">
                <span class="card-title teal-text">Zusatzinformationen</span>
                <hr>
                <br/>
                <br/>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="reg[abteilung]">
                            <option value="" disabled selected>Auswählen</option>
                            {foreach from=$abteilungen item=abteilung key=key}
                                <option value="{$abteilung->id}">{$abteilung->s_name} | {$abteilung->a_name}</option>
                            {/foreach}
                        </select>
                        <label>Wählen Sie eine Abteilung aus, für welches das Projekt durchgeführt wird...</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="reg[leiter]">
                            <option value="" disabled selected>Auswählen</option>
                            {foreach from=$mitarbeiter item=arbeiter key=key}
                                <option value="{$arbeiter->id}">{$arbeiter->vorname} {$arbeiter->nachname}</option>
                            {/foreach}
                            {if isset($mitarbeiters)}
                                {foreach from=$mitarbeiters item=mitarbeiter}
                                    <option value="{$mitarbeiters->id}">{$mitarbeiters->nachname} . {$mitarbeiters->vorname}</option>
                                {/foreach}
                            {/if}
                        </select>
                        <label>Wählen Sie einen zuständigen Projektleiter aus...</label>
                    </div>
                </div>
                <span class="card-title teal-text">Zielkreuzmethode</span>
                <hr>
                <br/>
                <br/>
                <div class="row">
                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">Wozu?<hr>
                                <input type="text" name="reg[kreuzwozu]" class="validate materialize-textarea" placeholder="Welchem Zweck dient das Ziel?">
                            </span>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">Was?<hr>
                                <input type="text" name="reg[kreuzwas]" class="validate materialize-textarea" placeholder="Welche Leistungen sind zu erbringen?">
                            </span>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">Wie gut?<hr>
                                <input type="text" name="reg[kreuzwiegut]" class="validate materialize-textarea" placeholder="Was sind die Abnahmekriterien?">
                            </span>

                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">Für wen?<hr>
                                <input type="text" name="reg[kreuzfuerwen]" class="validate" placeholder="Wer ist die Nutzergruppe?">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kennzahl" class="col s12">
            <div class="card-content">
                <span class="card-title teal-text">Kennzahlen</span>
                <hr class="teal">
                <br/>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="kosten" type="number" name="reg[sollkosten]" placeholder="Kosten"/>
                        <label for="kosten">Kosten</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nutzen" type="number" name="reg[sollnutzen]" placeholder="Nutzen"/>
                        <label for="nutzen">Nutzen</label>
                    </div>
                </div>
                <br/>
                <span class="teal-text"><a id="btnKapitalwert" class="btn-floating btn-small waves-effect waves-light teal"><i class="material-icons">add</i></a>  Kapitalwertmethode</span>
                <hr class="teal">
                <br/>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="kostenKapitalwert" name="reg[kostenKapitalwert]" type="number" placeholder="-I (Kosten)"/>
                        <label for="kostenKapitalwert">Kosten (I)</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="kapitalwertZins" name="reg[zinsKapitalwert]" type="number" placeholder="Zinssatz Kapitalwert"/>
                        <label for="kapitalwertZins">Zins(Risikolos + untern. Risiko)</label>
                    </div>
                    <table class="highlight" id="tblKapitalwert" name="reg[kapitalwertfelder]">

                    </table>
                </div>
                <br/>

                <span class="teal-text"><a id="btnLeistungsverrechnung" class="btn-floating btn-small waves-effect waves-light teal"><i class="material-icons">add</i></a>  Leistungsverrechnung</span>
                <hr class="teal">
                <br/>
                <div class="row">
                    <table class="highlight" id="tblLeistungsverrechnung" name="reg[leistungsverrechnung]" contenteditable="true">

                    </table>
                </div>

                <span class="teal-text"><a id="btnMeilensteine" class="btn-floating btn-small waves-effect waves-light teal"><i class="material-icons">add</i></a> Meilensteine</span>
                <hr class="teal">
                <br/>
                <div class="row">
                    <table class="highlight" id="tblMeilensteine" name="reg[meilensteine]" contenteditable="true">

                    </table>
                </div>

            </div>
        </div>
        <div id="IstZahl" class="col s12">
            <div class="card-content">
                <span class="card-title teal-text">Nachkalkulation</span>
                <hr>
                <br/>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="iststartdatum" name="reg[iststartdatum]" type="date" required="" class="datepicker validate" placeholder="TT.MM.YYYY">
                        <label for="iststartdatum">Ist - Startdatum</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">query_builder</i>
                        <input id="istenddatum" name="reg[istenddatum]" type="date" required="" class="datepicker validate" placeholder="TT.MM.YYYY">
                        <label for="istenddatum">Ist - Enddatum</label>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal'>Anlegen</button>
        </div>
    </div>
</form>


<script type="text/javascript">
    var tableKapitalwertVal = 0;


    //Adds Dynamic Content to the Table
    $('#btnKapitalwert').click(function ()
    {
        if (tableKapitalwertVal == 0)
        {
            var structureHeader = "<thead><tr><th>Jahr</th><th>Ausgaben</th><th>Einnahmen</th></tr></thead>";
            $('#tblKapitalwert').append(structureHeader);
        }
        var structure = "<tr><td><input disabled name='reg[kapitalwert][kwJahr" + tableKapitalwertVal + "]' value='" + tableKapitalwertVal + "' /></td><td><input type='number' placeholder='Ausgaben' name='reg[kapitalwert][kwAusg" + tableKapitalwertVal + "]'/></td><td><input type='number' placeholder='Einnahmen' name='reg[kapitalwert][kwEin" + tableKapitalwertVal + "]'</td></tr>"
        $('#tblKapitalwert').append(structure);
        tableKapitalwertVal++;
    });

    var tableLeistungsverrechnungVal = 0;


    //Adds Dynamic Content to the Table
    $('#btnLeistungsverrechnung').click(function ()
    {
        if (tableLeistungsverrechnungVal == 0)
        {
            var structureHeader = "<thead><tr><th>Nr</th><th>Abteilung</th><th>Wert</th></tr></thead>";
            $('#tblLeistungsverrechnung').append(structureHeader);
        }
        var structure = "<tr><td>" + tableLeistungsverrechnungVal + "</td><td></td><td></td></tr>"
        $('#tblLeistungsverrechnung').append(structure);
        tableLeistungsverrechnungVal++;
    });

    var tableMeilensteine = 0;


    //Adds Dynamic Content to the Table
    $('#btnMeilensteine').click(function ()
    {
        if (tableMeilensteine == 0)
        {
            var structureHeader = "<thead><tr><th>Nr</th><th>Meilenstein</th><th>Erledigt</th></tr></thead>";
            $('#tblMeilensteine').append(structureHeader);
        }
        var structure = "<tr><td><input disabled type='number' name='reg[meilensteine][msNr" + tableMeilensteine + "]' value='" + tableMeilensteine + "'/></td><td><input type='text' placeholder='Meilensteinname' name='reg[meilensteine][msBezeichner" + tableMeilensteine + "]'/></td><td><p><input type='checkbox' class='filled-in' name='reg[meilensteine][chkBx" + tableMeilensteine + "]' checked='checked'  /></p></td></tr>"
        $('#tblMeilensteine').append(structure);
        tableMeilensteine++;

    });

</script>
