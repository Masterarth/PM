
{if isset($user)}
    <div class="card">
        <div class="card-content">
            <span class="card-title">{$user->getVorname()} {$user->getNachname()} ({$user->getL_name()})</span>
            <p><strong>Mitglied seid:</strong> {$user->getReg_datum()}</p>
        </div>
    </div> 

    <div class="card">
        <div class="card-content">
            <form action="/pm/mitarbeiter/update/aktiv" method="post">
                <p> 
                    <input type="hidden" name="id" value="{$user->getU_id()}"/>
                    <input onchange="this.form.submit()" name="aktiv" type="checkbox" id="aktiv" {$user->getAktiv()|checked}/>
                    <label for="aktiv">Aktiv</label>
                </p>
            </form>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Der Benutzer konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/mitarbeiter/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}