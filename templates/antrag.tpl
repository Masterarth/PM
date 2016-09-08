{if isset($projekt)}
    <div class="parallax-container">
        <div class="parallax"><img src="{$projekt->getPicturePath({$projekt->getDatabaseId()})}"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="row">
                <div class="col s12 m8">
                    <h2>{$projekt->getTitle()} (#{$projekt->getDatabaseId()})</h2>
                </div>
                <div class="col s12 m4">
                    <h3 class="teal-text" style="border-left: 10px solid lightblue; padding-left: 20px;">{$projekt->getStatus()->getDescription()}</h3>
                </div>
            </div>
            {if $zuGenehmigen == true}
                <div class="row">
                    <div class="col s12 m6"><a href="/pm/antrag/genehmigen/{$projekt->getDatabaseId()}" class="btn btn-block green">Genehmigen</a></div>
                    <div class="col s12 m6"><a href="/pm/antrag/ablehnen/{$projekt->getDatabaseId()}" class="btn btn-block red">Ablehnen</a></div>
                </div>
            {/if}
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
                                        <span><a href="/pm/mitarbeiter/{$projekt->getProjectCreator()->getId()}">{$projekt->getProjectCreator()->getVorname()} {$projekt->getProjectCreator()->getNachname()}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Standort</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/standort/{$projekt->getDepartment()->getLocation()->getId()}">{$projekt->getDepartment()->getLocation()->getName()}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <h4 class="light">Abteilung</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/abteilung/{$projekt->getDepartment()->getId()}">{$projekt->getDepartment()->getName()}</a></span>
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
                                        <span>{$projekt->getMoneyCosts()|number_format:2:",":"."} €</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Nutzen</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getMonesEarnings()|number_format:2:",":"."} €</span>
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
                                        <span>{$projekt->getCreator()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Projektleiter</h4>
                                    <div class="para_content">
                                        <span><a href="/pm/mitarbeiter/{$projekt->getProjectLeader()->getId()}">{$projekt->getProjectLeader()->getVorname()} {$projekt->getProjectLeader()->getNachname()}</a></span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Wozu?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getTargetCross1()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Was?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getTargetCross2()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Wie gut?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getTargetCross3()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Für wen?</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getTargetCross4()}</span>
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
                                        <span>{$projekt->getDescription()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Rahmenbedingungen</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getGeneralConditions()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Kommunikation</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getCommunicationConcept()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Nicht Ziele</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getNoTargets()}</span>
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
                                        <span>{$projekt->getRemark()}</span>
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
                                        <span>{$projekt->getAmortizationRate()}</span>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <h4 class="light">Kapital Kosten</h4>
                                    <div class="para_content">
                                        <span>{$projekt->getCapitalCosts()}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {if count($projekt->getInvolvedTeams()) > 0}
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="light">Projektteams</h4>
                                        <div class="para_content">
                                            <table class="responsive-table highlight">
                                                {foreach from=$projekt->getInvolvedTeams() item=team}
                                                    <tr onclick="window.document.location = '/pm/team/{$team->id}';" style="cursor: pointer;">
                                                        <td>{$team->getTeamName()}</td>
                                                        <td>{$team->getHours()|number_format:2:",":"."} h</td>
                                                    </tr>
                                                {/foreach}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/if}
                    {if count($projekt->getMilestones()) > 0 }
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
                                                    {foreach from=$projekt->getMilestones() item=meilenstein}
                                                        <tr>
                                                            <td>{$meilenstein->getMilestoneName()}</td>
                                                            <td>{if $meilenstein->getFinished() == 1}<i class="material-icons green-text">done</i>{else}<i class="material-icons red-text">clear</i>{/if}</td>
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
                    {if count($projekt->getCapitalflow()) > 0}
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
                                                    {foreach from=$projekt->getCapitalflow() item=kapitalwert}
                                                        <tr>
                                                            <td>{$kapitalwert->getYear()}</td>
                                                            <td>{$kapitalwert->getRent()}</td>
                                                            <td>{$kapitalwert->getInputMoneyVal()}</td>
                                                            <td>{$kapitalwert->getOutputMoneyVal()}</td>
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