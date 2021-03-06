<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/abteilung/dashboard" method="post">
                <div class="input-field search search-margin">
                    <input id="search" class="sickblue" type="text" name="abteilung_search">
                    <label for="search">nach Abteilung suchen</label>
                </div>
            </form>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($abteilungen)}
            {foreach from=$abteilungen item=abteilung}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="{$abteilung->pic}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title teal-text">{$abteilung->a_name}</span>
                            <p><strong class="teal-text">Leiter:</strong> {$abteilung->vorname} {$abteilung->nachname}</p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text" href="/pm/abteilung/{$abteilung->id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Abteilungen angelegt</p>
                </div>
            </div>
        {/if} 
    </div>
</div>
