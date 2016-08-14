{if isset($projekt)}
    <div class="parallax-container">
        <div class="parallax"><img src="/pm/bin/custom/images/projekt1.jpg"></div>
    </div>
    <div class="section white">
        <div class="row">
            <div class="container">
                <h3>{$projekt->titel} (#{$projekt->id})</h3>
            </div>
            <div class="carousel carousel-slider" data-indicators="true">
                <div class="carousel-item" href="#eins">
                    <div class="container">
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Erstelldatum</h4>
                                <div class="para_content">
                                    <p>{$projekt->erstell_datum|date_format:"%A, %B %e, %Y"}</p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Ersteller</h4>
                                <div class="para_content">
                                    {if isset($ersteller)}
                                        <p><a href="/pm/mitarbeiter/{$ersteller->id}">{$ersteller->vorname} {$ersteller->nachname}</a></p>
                                    {/if}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Standort</h4>
                                <div class="para_content">
                                    <p><a href="/pm/standort/{$projekt->s_id}">{$projekt->s_name}</a></p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Abteilung</h4>
                                <div class="para_content">
                                    <p><a href="/pm/abteilung/{$projekt->a_id}">{$projekt->a_name}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Startdatum</h4>
                                <div class="para_content">
                                    <p>{$projekt->vor_sta_term|date_format:"%A, %B %e, %Y"}</p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Enddatum</h4>
                                <div class="para_content">
                                    <p>{$projekt->vor_end_term|date_format:"%A, %B %e, %Y"}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#zwei">
                    <div class="container">
                        <h4 class="light">Kurzbeschreibung</h4>
                        <div class="para_content">
                            <p>{$projekt->beschreibung}</p>
                        </div>
                        <h4 class="light">Rahmenbedingungen</h4>
                        <div class="para_content">
                            <p>{$projekt->rahmbeding}</p>
                        </div>
                        <h4 class="light">Kommunikation</h4>
                        <div class="para_content">
                            <p>{$projekt->komm_konz}</p>
                        </div>
                        <h4 class="light">Nicht Ziele</h4>
                        <div class="para_content">
                            <p>{$projekt->nicht_ziel}</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#drei">
                    <div class="container">
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Wozu?</h4>
                                <div class="para_content">
                                    <p>{$projekt->p_ziel1}</p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Was?</h4>
                                <div class="para_content">
                                    <p>{$projekt->p_ziel2}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Wie gut?</h4>
                                <div class="para_content">
                                    <p>{$projekt->p_ziel3}</p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Für wen?</h4>
                                <div class="para_content">
                                    <p>{$projekt->p_ziel4}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h4 class="light">Kosten</h4>
                                <div class="para_content">
                                    <p>{$projekt->mon_kosten|number_format:2:",":"."} €</p>
                                </div>
                            </div>
                            <div class="col s6">
                                <h4 class="light">Nutzen</h4>
                                <div class="para_content">
                                    <p>{$projekt->mon_nutzen}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Das Projekt konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/antrag/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}