{if isset($projekt)}
    <div class="parallax-container">
        <div class="parallax"><img src="{$projekt->getPicturePath({$projekt->getDatabaseId()})}"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="row">
                <div class="col s12 m9">
                    <h2>{$projekt->getTitle()} (#{$projekt->getDatabaseId()})</h2>
                </div>
                <div class="col s12 m3">
                    <h3 class="teal-text" style="border-left: 10px solid lightblue; padding-left: 20px;">{$projekt->getStatus()->getDescription()}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s6"><a class="teal-text" href="#basis">Basis Daten</a></li>
                        <li class="tab col s6"><a class="teal-text" href="#addon">Zusatz Daten</a></li>
                    </ul>
                </div>
                <div id="basis" class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m4">
                                    <h4 class="light">Erstelldatum</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getCreationDate()|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Startdatum</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getExpectedStartTime()|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Enddatum</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getExpectedEndTime()|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Ersteller</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/mitarbeiter/{$projekt->e_id}">{$projekt->e_vorname} {$projekt->e_nachname}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Standort</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/standort/{$projekt->s_id}">{$projekt->s_name}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Abteilung</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/abteilung/{$projekt->a_id}">{$projekt->a_name}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m6">
                                    <h4 class="light">Kosten</h4>
                                    <div class="para_content">
                                        <span>{$projekt->mon_kosten|number_format:2:",":"."} €</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Nutzen</h4>
                                    <div class="para_content">
                                        <span>{$projekt->mon_nutzen|number_format:2:",":"."} €</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m6">
                                    <h4 class="light">Auftraggeber</h4>
                                    <div class="para_content">
                                        <span>{$projekt->auftraggeber}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Projektleiter</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/mitarbeiter/{$projekt->l_id}">{$projekt->l_vorname} {$projekt->l_nachname}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Wozu?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->p_ziel1}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Was?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->p_ziel2}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Wie gut?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->p_ziel3}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Für wen?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->p_ziel4}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m6">
                                    <h4 class="light">Kurzbeschreibung</h4>
                                    <div class="para_content">
                                        <span>{$projekt->beschreibung}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Rahmenbedingungen</h4>
                                    <div class="para_content">
                                        <span>{$projekt->rahmbeding}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Kommunikation</h4>
                                    <div class="para_content">
                                        <span>{$projekt->komm_konz}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Nicht Ziele</h4>
                                    <div class="para_content">
                                        <span>{$projekt->nicht_ziel}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="light">Bemerkung</h4>
                                    <div class="para_content">
                                        <span>{$projekt->bemerkung}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="addon" class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m6">
                                    <h4 class="light">Amortisationsdauer</h4>
                                    <div class="para_content">
                                        <span>{$projekt->amorti_zeit}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Kapital Kosten</h4>
                                    <div class="para_content">
                                        <span>{$projekt->kap_kosten}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {if isset($pt)}
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="light">Projektteams</h4>
                                        <div class="para_content">
                                            <table class="responsive-table highlight">
                                                {foreach from=$pt item=team}
                                                    <tr onclick="window.document.location = '/pm/team/{$team->id}';" style="cursor: pointer;">
                                                        <td>{$team->t_name}</td>
                                                        <td>{$team->stunden|number_format:2:",":"."} h</td>
                                                    </tr>
                                                {/foreach}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                    {if isset($ms)}
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="light">Meilensteine</h4>
                                        <div class="para_content">
                                            <table class="responsive-table highlight">
                                                <thead>
                                                <th>Meilenstein</th>
                                                <th>Erfüllt</th>
                                                </thead>
                                                <tbody>
                                                    {foreach from=$ms item=meilenstein}
                                                        <tr>
                                                            <td>{$meilenstein->meilenstein}</td>
                                                            <td>{if $meilenstein->erfuellt == 1}<i class="material-icons green-text">done</i>{else}<i class="material-icons red-text">clear</i>{/if}</td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                    {if isset($kw)}
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="light">Kapitalwerte</h4>
                                        <div class="para_content">
                                            <table class="responsive-table highlight">
                                                <thead>
                                                <th>Jahr</th>
                                                <th>Zinssatz</th>
                                                <th>Einzahlung</th>
                                                <th>Auszahlung</th>
                                                </thead>
                                                <tbody>
                                                    {foreach from=$kw item=kapitalwert}
                                                        <tr>
                                                            <td>{$kapitalwert->jahr}</td>
                                                            <td>{$kapitalwert->zinssatz}</td>
                                                            <td>{$kapitalwert->einzahlung}</td>
                                                            <td>{$kapitalwert->auszahlung}</td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Das Projekt konnte nicht gefunden werden</h4>
        <span><a class="btn btn-flat" href="/pm/antrag/dashboard">Zurück zur übersicht</a></span>
    </div>
{/if}