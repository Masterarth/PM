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
    {else}
        <p><strong>Es sind keine zu genehmigenden Anträge vorhanden</strong></p>
    {/if}
</div>
<h4 class="teal-text">Meine Projekte - Ganttplan</h4>
<div class="section">
    <div id="chart_div"></div>
</div>
