{if isset($standort)}
    <div class="card">
        <div class="card-content">
            <span class="card-title">{$standort->s_name}</span>
        </div>
    </div> 

    <div class="card">
        <div class="card-content">
            <span class="card-title">Leiter</span>
            <p>{$standort->s_leitung}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title">Adresse</span>
            <p>{$standort->plz} {$standort->ort}</p>
            <p>{$standort->strasse} {$standort->hausnummer}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title">Kartenansicht</span>
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?output=embed&amp;q={$standort->plz}+{$standort->ort},{$standort->strasse}+{$standort->hausnummer}&amp;ie=ISO-8859-1&amp;t=m&amp;vpsrc=0"></iframe>
        </div>
    </div>


{else}
    <div class="center">
        <h4>Der Benutzer konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/standort/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}