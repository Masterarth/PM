
{if isset($user)}
    <div class="parallax-container">
        <div class="parallax">
            <img class="backgroundImage" src="/pm/bin/custom/images/mitarbeiter_lang.jpg" style="display: block; transform: translate3d(-50%, 328px, 0px);">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$user->getVorname()} {$user->getNachname()} ({$user->getL_name()})</h2>
            <h4 class="light">Mitglied seit</h4>
            <p>{$user->getReg_datum()}</p>
            <h4 class="light">Status</h4>
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