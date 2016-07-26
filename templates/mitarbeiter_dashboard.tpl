
<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/mitarbeiter/dashboard" method="post">
                <div class="input-field search white">
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
        {foreach from=$users item=user}
            <div class="card horizontal hoverable valign-wrapper">
                <div class="card-image valign">
                    <img src="/pm/bin/custom/images/projekt_2.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title">{$user->vorname} {$user->nachname}</span>
                        <p><strong>Accountname:</strong> {$user->reg_datum}</p>
                        <p><strong>Registriert seit:</strong> {$user->l_name}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Öffnen</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>
