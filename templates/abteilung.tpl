{if isset($abteilung)}
    <div class="parallax-container">
        <div class="parallax">
            <img src="{$pic}">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$abteilung->a_name}</h2>
            <h4 class="light">Leitung</h4>
            <div class="para_content">
                <p>{$abteilung->vorname} {$abteilung->nachname}</p>
            </div>
            <h4 class="light">Standort</h4>
            <div class="para_content">
                <p><a href="/pm/standort/{$abteilung->s_id}">{$abteilung->s_name}</a></p>
            </div>
        </div>
    </div> 
{else}
    <div class="center">
        <h4>Die Abteilung konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/abteilung/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}