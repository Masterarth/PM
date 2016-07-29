<div class="card">
    <div class="card-content">
        <span class="card-title">Standorte</span>
    </div>
</div>

<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/standort/dashboard" method="post">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="ma_search">
                    <label for="search">nach Standort suchen</label>
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
    {if isset($standorte)}
        <div class="col s12 l9">
            {foreach from=$standorte item=standort}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="/pm/bin/custom/images/projekt_2.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">{$standort->s_name}</span>
                            <p><strong>Adresse:</strong> {$standort->strasse} {$standort->hausnummer}, {$standort->plz} {$standort->ort}</p>
                        </div>
                        <div class="card-action">
                            <a href="/pm/standort/{$standort->id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    {/if}
</div>
