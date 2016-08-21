{if isset($user)}
    <div class="parallax-container">
        <div class="parallax">
            <div class="parallax"><img src="/pm/bin/custom/images/mitarbeiter_lang.jpg" style="display: block; transform: translate3d(-50%, 328px, 0px);"></div>
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$user->getVorname()} {$user->getNachname()} ({$user->getL_name()})</h2>
            <h4 class="light">Mitglied seit</h4>
            <div class="para_content">
                <p>{$user->getReg_datum()}</p>
            </div>
            {*if $smarty.session.user->getR_id() == 1*}
            <div class="row">
                <div class="col s6">
                    <h4 class="light">Status</h4>
                    <div class="para_content">
                        <form action="/pm/mitarbeiter/update/aktiv" method="post">
                            <p> 
                                <input type="hidden" name="id" value="{$user->getU_id()}"/>
                                <input onchange="this.form.submit()" name="aktiv" type="checkbox" id="aktiv" {$user->isAktiv()|checked}/>
                                <label for="aktiv">Aktiv</label>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col s6">
                    <h4 class="light">Rolle</h4>
                    <div class="para_content">
                        <form action="/pm/mitarbeiter/update/rolle" method="post">
                            <p> 
                                <input type="hidden" name="id" value="{$user->getU_id()}"/>
                                <select onchange="this.form.submit()" name="rolle">
                                    <option value="" disabled selected>Wählen sie die Rolle der Benutzers</option>
                                    {foreach from=$rollen item=rolle}
                                        <option value="{$rolle->id}" {if $rolle->id == $user->getR_id()}selected{/if}>{$rolle->rolle}</option>
                                    {/foreach}
                                </select>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            {*/if*}
        </div>
    </div> 
{else}
    <div class="center">
        <h4>Der Benutzer konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/mitarbeiter/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}