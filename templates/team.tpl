{if isset($team)}
    <div class="parallax-container">
        <div class="parallax">
            <img src="{$pic}">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$team->t_name}</h2>
            <div class="col s4">
                <h4 class="light">Standort</h4>
                <div class="para_content">
                    <p><a href="/pm/standort/{$team->s_id}">{$team->s_name}</a></p>
                </div>
            </div>
            <div class="col s4">
                <h4 class="light">Abteilung</h4>
                <div class="para_content">
                    <p><a href="/pm/abteilung/{$team->a_id}">{$team->a_name}</a></p>
                </div>
            </div>
            <div class="col s4">
                <h4 class="light">Leiter</h4>
                <div class="para_content">
                    <p><a href="/pm/mitarbeiter/{$team->t_leitung}">{$team->vorname} {$team->nachname}</a></p>
                </div>
            </div>
        </div>
        <div class="row container">
            <div class="col s4">
                <h4 class="light">Jahr</h4>
                <div class="para_content">
                    <p>{if $team->jahr != null}{$team->jahr}{else}nicht verfügbar{/if}</p>
                </div>
            </div>
            <div class="col s4">
                <h4 class="light">Ist Stunden</h4>
                <div class="para_content">
                    <p>{if $team->jahr != null}{$leistung}{else}nicht verfügbar{/if}</p>
                </div>
            </div>
            <div class="col s4">
                <h4 class="light">Max Stunden</h4>
                <div class="para_content">
                    <p>{if $team->jahr != null}{$team->max_stunden}{else}nicht verfügbar{/if}</p>
                </div>
            </div>
        </div>
    </div> 
{else}
    <div class="center">
        <h4>Der Benutzer konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/mitarbeiter/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}