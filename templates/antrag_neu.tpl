<form method="post" action="/pm/antrag/neu">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active teal-text" href="#basis">Basis</a></li>
                <li class="tab col s3"><a class="teal-text" href="#zusatz">Zusatz</a></li>
                <li class="tab col s3"><a class="teal-text" href="#kennzahl">Kennzahl</a></li>
                    {*<li class="tab col s3 disabled"><a class="grey-text" href="#IstZahl">Ist-Werte</a></li>*}
            </ul>
        </div>
    </div>
    <div class="card">
        <div id="basis" class="col s12">
            <div class="card-content">
                <div class="section">
                    <span class="card-title teal-text">Basisinformationen</span>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="projektname" name="reg[projectname]" type="text" required="" class="validate" placeholder="Projektname">
                        <label for="projektname">Projektname</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input id="projektname" name="reg[auftraggeber]" type="text" class="validate" placeholder="Auftraggeber">
                        <label for="auftraggeber">Auftraggeber</label>
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
                        <i class="material-icons prefix">layers_clear</i>
                        <textarea id="NichtZiele" name="reg[nichtZiele]" required="" class="materialize-textarea validate" length="255" placeholder="Bitte geben Sie an welche Dinge nicht realisiert werden solle..."></textarea>
                        <label for="NichtZiele">Nicht Ziele</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="zusatz" class="col s12">
            <div class="card-content">
                <div class="section">
                    <span class="card-title teal-text">Zusatzinformationen</span>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="reg[abteilung]" required="" class="validate">
                            <option value="" disabled selected>Auswählen</option>
                            {foreach from=$places item=standort}
                                <optgroup label="{$standort.standort->s_name}">
                                    {foreach from=$standort.abteilungen item=abteilung}
                                        <option value="{$abteilung->id}">{$abteilung->a_name}</option>
                                    {/foreach}
                                </optgroup>
                            {/foreach}
                        </select>
                        <label>Wählen Sie eine Abteilung aus, für welches das Projekt durchgeführt wird...</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="reg[leiter]" required="" class="validate">
                            <option disabled selected>Auswählen</option>
                            {foreach from=$mitarbeiter item=arbeiter key=key}
                                <option value="{$arbeiter->id}">{$arbeiter->vorname} {$arbeiter->nachname}</option>
                            {/foreach}
                        </select>
                        <label>Wählen Sie einen zuständigen Projektleiter aus...</label>
                    </div>
                </div>
                <span class="card-title teal-text">Zielkreuzmethode</span>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s6">
                        <div class="card-panel teal white-text">
                            <h6>Wozu?</h6>
                            <div class="divider"></div>
                            <div class="section">
                                <input type="text" name="reg[kreuzwozu]" class="validate" placeholder="Welchem Zweck dient das Ziel?" />
                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal white-text">
                            <h6>Was?</h6>
                            <div class="divider"></div>
                            <div class="section">
                                <input type="text" name="reg[kreuzwas]" class="validate" placeholder="Welche Leistungen sind zu erbringen?" />
                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal white-text">
                            <h6>Wie gut?</h6>
                            <div class="divider"></div>
                            <div class="section">
                                <input type="text" name="reg[kreuzwiegut]" class="validate" placeholder="Was sind die Abnahmekriterien?" />
                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card-panel teal white-text">
                            <h6>Für wen?</h6>
                            <div class="divider"></div>
                            <div class="section">
                                <input type="text" name="reg[kreuzfuerwen]" class="validate" placeholder="Wer ist die Nutzergruppe?" />
                            </div>
                        </div>
                    </div>
                </div>
                <span class="card-title teal-text">Bemerkung</span>
                <div class="divider"></div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="bemerkung" name="reg[bemerkung]" class="materialize-textarea" placeholder="Bemerkung"  class="validate"></textarea>
                    </div>
                </div>
                <span class="card-title teal-text">Amortisationsdauer</span>
                <div class="divider"></div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="amortisation" name="reg[amortisation]" type="text" class="validate" placeholder="Amortisationsdauer">
                    </div>
                </div>
            </div>
        </div>
        <div id="kennzahl" class="col s12">
            <div class="card-content">
                <div class="section">
                    <span class="card-title teal-text">Kennzahlen</span>
                    <div class="divider"></div>
                </div>
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

                <div class="row">
                    <div class="col s10 teal-text valign-wrapper">
                        <p class="valign">Kapitalwertmethode</p>
                    </div>
                    <div class="col s1 teal-text right">
                        <a id="btnKapitalwert" class="btn-floating teal tooltipped" data-position="left" data-delay="50" data-tooltip="Datensatz hinzufügen"><i class="material-icons">add</i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="kostenKapitalwert" name="reg[kapitalwert][kosten]" type="number" placeholder="-I (Kosten)"/>
                        <label for="kostenKapitalwert">Kosten (I)</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="kapitalwertZins" name="reg[kapitalwert][zins]" type="number" placeholder="Zinssatz Kapitalwert"/>
                        <label for="kapitalwertZins">Zins(Risikolos + untern. Risiko)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <table class="highlight" id="tblKapitalwert" name="reg[kapitalwertfelder]">
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 teal-text valign-wrapper">
                        <p class="valign">Leistungsverrechnung</p>
                    </div>
                    <div class="col s1 teal-text right">
                        <a id="btnLeistungsverrechnung" class="btn-floating teal tooltipped" data-position="left" data-delay="50" data-tooltip="Leistung hinzufügen"><i class="material-icons">add</i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <table class="highlight" id="tblLeistungsverrechnung" name="reg[leistungsverrechnung]">
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col s10 teal-text valign-wrapper">
                        <p class="valign">Meilensteine</p>
                    </div>
                    <div class="col s1 teal-text right">
                        <a id="btnMeilensteine" class="btn-floating teal tooltipped" data-position="left" data-delay="50" data-tooltip="Meilenstein hinzufügen"><i class="material-icons">add</i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <table class="highlight" id="tblMeilensteine" name="reg[meilensteine]">
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {*<div id="IstZahl" class="col s12">
        <div class="card-content">
        <span class="card-title teal-text">Nachkalkulation</span>
        <div class="divider"></div>
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
        </div>*}
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
        var structure = "<tr><td>" + tableKapitalwertVal + "<input type='hidden' name='reg[kapitalwert][data][" + tableKapitalwertVal + "][jahr]' value='" + tableKapitalwertVal + "'/></td><td><input type='number' placeholder='Ausgaben' name='reg[kapitalwert][data][" + tableKapitalwertVal + "][aus]'/></td><td><input type='number' placeholder='Einnahmen' name='reg[kapitalwert][data][" + tableKapitalwertVal + "][ein]'</td></tr>"
        $('#tblKapitalwert').append(structure);
        tableKapitalwertVal++;
    });

    var tableLeistungsverrechnungVal = 1;

    //Adds Dynamic Content to the Table
    $('#btnLeistungsverrechnung').click(function ()
    {
        if (tableLeistungsverrechnungVal == 1)
        {
            var structureHeader = "<thead><tr><th>Nr</th><th>Abteilung</th><th>Stunden</th></tr></thead>";
            $('#tblLeistungsverrechnung').append(structureHeader);
        }
        var structure = "<tr><td>" + tableLeistungsverrechnungVal + "</td><td><select name='reg[leistung][" + tableLeistungsverrechnungVal + "][abteilung]'><option disabled selected>Auswählen</option>{foreach from=$teams item=value}<option value='{$value->id}'>{$value->t_name}</option>{/foreach}</select></td><td><input type='number' min=0 name='reg[leistung][" + tableLeistungsverrechnungVal + "][wert]' /></td></tr>"
        $('#tblLeistungsverrechnung').append(structure);
        $('select').material_select();
        tableLeistungsverrechnungVal++;
    });

    var tableMeilensteine = 1;

    //Adds Dynamic Content to the Table
    $('#btnMeilensteine').click(function ()
    {
        if (tableMeilensteine == 1)
        {
            var structureHeader = "<thead><tr><th>Nr</th><th>Meilenstein</th><th>Erledigt</th></tr></thead>";
            $('#tblMeilensteine').append(structureHeader);
        }
        var structure = "<tr><td>" + tableMeilensteine + "<input type='hidden' name='reg[meilensteine][" + tableMeilensteine + "][nr]' value='" + tableMeilensteine + "'/></td><td><input type='text' placeholder='Meilensteinname' name='reg[meilensteine][" + tableMeilensteine + "][beschreibung]'/></td><td><input type='checkbox' id='checkbox" + tableMeilensteine + "' name='reg[meilensteine][" + tableMeilensteine + "][checked]' /><label for='checkbox" + tableMeilensteine + "'></label></td></tr>"
        $('#tblMeilensteine').append(structure);
        tableMeilensteine++;

    });

</script>
