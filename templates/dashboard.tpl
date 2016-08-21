<div class="row">
    <div class="section">
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">assignment</i>
            <h5>Anzahl offener Anträge</h5>
            <h4>{$anzahl_antraege}</h4>
        </div>
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">check_circle</i>
            <h5>Anzahl genehmigter Anträge</h5>
            <h4>{$anzahl_genehmigte_antraege}</h4>
        </div>
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">block</i>
            <h5>Abgelehnte Anträge</h5>
            <h4>{$anzahl_abgelehnter_antraege}</h4>
        </div>
    </div>
</div>
<h4 class="teal-text">zu genehmigende Projekte</h4>
<div class="section">
    {if isset($zu_genehmigen)}
        <div class="collection">
            {foreach from=$zu_genehmigen item=projekt}
                <a href="/pm/antrag/{$projekt->id}" class="collection-item">
                    {$projekt->titel}
                    <span class="secondary-content"><i class="material-icons">send</i></span>
                </a>

            {/foreach}
        </div> 
    {/if}
</div>
{*<div class="row">
<div class="col s12 m4">
<h4 class="teal-text">Mitarbeiter</h4>
<div id="mitarbeiterChart"></div>
</div>
<div class="col s12 m4">
<h4 class="teal-text">Projekte</h4>
<div id="projekteChart"></div>
</div>
<div class="col s12 m4">
<h4 class="teal-text">Ressourcen    </h4>
<div id="ressourcenChart"></div>
</div>
</div>*}
<h4 class="teal-text">Meine Projekte - Ganttplan</h4>
<div class="section">
    <div id="chart_div"></div>
</div>
{if isset($meine_projekte)}
    <h4 class="teal-text">Meine Projekte</h4>
    <div class="section">
        <div class="row">
            {foreach from=$meine_projekte item=projekt}
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="/pm/bin/custom/images/projekt_2.jpg">
                            <span class="card-title">{$projekt->titel}</span>
                        </div>
                        <div class="card-content">
                            <p>{$projekt->beschreibung}</p>
                        </div>
                        <div class="card-action">
                            <a href="/pm/antrag/{$projekt->id}" class="teal-text">Öffnen</a>
                        </div>
                    </div> 
                </div>
            {/foreach}
        </div>
    </div>
{/if}
