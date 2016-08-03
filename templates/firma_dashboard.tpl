<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/firma/dashboard" method="post">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="firma_search">
                    <label for="search">nach Firma suchen</label>
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
        {if $firmen|count > 0}
            {foreach from=$firmen item=firma}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="/pm/bin/custom/images/projekt_2.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">{$firma->f_name}</span>
                        </div>
                        <div class="card-action">
                            <a href="/pm/firma/{$firma->id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Firmen vorhanden</p>
                </div>
            </div>
        {/if}
    </div>
</div>
