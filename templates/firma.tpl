
{if isset($firma)}
    <div class="parallax-container">
        <div class="parallax">
            <img class="backgroundImage" src="/pm/bin/custom/images/unternehmen_lang.jpg" style="display: block; transform: translate3d(-50%, 328px, 0px);">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$firma->f_name}</h2>
            {if isset($budgets)}
                <h4 class="light">Budget</h4>
                <table class="responsive-table highlight centered">
                    <thead>
                        <tr>
                            <th>Betrag</th>
                            <th>Start Datum</th>
                            <th>End Datum</th>
                            <th>Status</th>
                            <th>Löschen</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$budgets item=budget key=key}
                            <tr>
                                <td>{$budget->betrag}€</td>
                                <td>{$budget->sta_periode}</td>
                                <td>{$budget->end_periode}</td>
                                <td>
                                    <form action="/pm/firma/budget/update" method="post">
                                        <input type="hidden" value="{$budget->id}" name="reg[id]" />
                                        <input type="hidden" value="{$budget->f_id}" name="reg[f_id]" />
                                        <input type="checkbox" id="aktiv{$key}" name="reg[aktiv]" {$budget->aktiv|checked} onchange="this.form.submit()"/>
                                        <label for="aktiv{$key}">Aktiv</label>
                                    </form>
                                </td>
                                <td>
                                    <form action="/pm/firma/budget/loeschen" method="post">
                                        <input type="hidden" value="{$budget->id}" name="reg[id]" />
                                        <input type="hidden" value="{$budget->f_id}" name="reg[f_id]" />
                                        <input type="submit" class="red btn" value="Löschen"/>
                                    </form>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            {/if}
        </div>
    </div>
{else}
    <div class="center">
        <h4>Die Firma konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/firma/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}