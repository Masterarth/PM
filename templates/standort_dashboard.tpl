<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/standort/dashboard" method="post">
                <div class="input-field search search-margin">
                    <input id="search" class="sickblue" type="text" name="standort_search">
                    <label for="search">nach Standort suchen</label>
                </div>
            </form>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($standorte)}
            {foreach from=$standorte item=standort}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="{$standort->pic}">
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
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Standorte vorhanden</p>
                </div>
            </div>
        {/if}
    </div>
</div>
