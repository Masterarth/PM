<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/mitarbeiter/dashboard" method="post">
                <div class="input-field search search-margin">
                    <input id="search" class="sickblue" type="text" name="ma_search">
                    <label for="search">nach Mitarbeiter suchen</label>
                </div>
            </form>
            <li>
                <div class="collapsible-header">Standorte</div>
                <div class="collapsible-body">
                    <input type="checkbox" value="Das ist ein Text">    
                </div>
            </li>
            <li>
                <div class="collapsible-header">Abteilungen</div>
                <div class="collapsible-body"><p>hier sind abteilungen aufgelistet</p></div>
            </li>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($users)}
            {foreach from=$users item=user}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="{$user->pic}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title teal-text">{$user->vorname} {$user->nachname}</span>
                            <p><strong class="teal-text">Accountname:</strong> {$user->l_name}</p>
                            <p><strong class="teal-text">Mitglied seit:</strong> {$user->reg_datum}</p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text" href="/pm/mitarbeiter/{$user->u_id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Mitarbeiter vorhanden</p>
                </div>
            </div>
        {/if}
    </div>
</div>
