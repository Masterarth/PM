{if isset($projekt)}
    <div class="parallax-container">
        <div class="parallax"><img src="/pm/bin/custom/images/projekte.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2>{$projekt->titel} (#{$projekt->id})</h2>
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
                                        <span>{$projekt->erstell_datum|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Startdatum</h4>
                                    <div class="para_content">
                                        <span>{$projekt->vor_sta_term|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Enddatum</h4>
                                    <div class="para_content">
                                        <span>{$projekt->vor_end_term|date_format:"%A, %B %e, %Y"}</span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Ersteller</h4>
                                    <div class="para_content">
                                        {if isset($ersteller)}
                                            <span><a href="/am/mitarbeiter/{$ersteller->id}">{$ersteller->vorname} {$ersteller->nachname}</a></span>
                                        {/if}
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Standort</h4>
                                    <div class="para_content">
                                        <span><a href="/am/standort/{$projekt->s_id}">{$projekt->s_name}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Abteilung</h4>
                                    <div class="para_content">
                                        <span><a href="/am/abteilung/{$projekt->a_id}">{$projekt->a_name}</a></span>
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
                </div>
                <div id="addon" class="col s12">

                </div>
            </div>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Das Projekt konnte nicht gefunden werden</h4>
        <span><span class="btn btn-flat" href="/am/antrag/dashboard">Zurück zur übersicht</a></a>
                </div>
            {/if}