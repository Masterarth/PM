{if isset($standort)}
    <div class="parallax-container">
        <div class="parallax"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?output=embed&amp;q={$standort->plz}+{$standort->ort},{$standort->strasse}+{$standort->hausnummer}&amp;ie=ISO-8859-1&amp;t=m&amp;vpsrc=0"></iframe></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$standort->s_name}</h2>
            <h4 class="light">Leiter</h4>
            <div class="para_content"><p><a href="/pm/mitarbeiter/{$standort->s_leitung}">{$standort->vorname} {$standort->nachname}</a></p></div>
            <h4 class="light">Adresse</h4>
            <div class="para_content">
                <p>{$standort->plz} {$standort->ort}</p>
                <p>{$standort->strasse} {$standort->hausnummer}</p>      
            </div>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Der Benutzer konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/standort/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}