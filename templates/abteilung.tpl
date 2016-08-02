{if isset($abteilung)}
    <div class="parallax-container">
        <div class="parallax">
            <img class="backgroundImage" src="/pm/bin/custom/images/abteilung.jpg" style="display: block; transform: translate3d(-50%, 328px, 0px);">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$abteilung->a_name}</h2>
            <h4 class="light">Leitung</h4>
            <p>{$abteilung->vorname} {$abteilung->nachname}</p>
            <h4 class="light">Standort</h4>
            <p><a href="/pm/standort/{$abteilung->s_id}">{$abteilung->s_name}</a></p>
        </div>
    </div> 
{else}
    <div class="center">
        <h4>Die Abteilung konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/abteilung/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}