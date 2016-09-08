<div class="row">
    <div class="col hide-on-med-and-down l3">
        <form method="post" action="/pm/antrag/dashboard" >
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="input-field search radioRow">
                        <input id="search" type="text" name="antrag_search" value="{$smarty.session.antrag_search}">
                        <label for="search" >Suche</label>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header active">Projekte filtern</div>
                    <div class="collapsible-body">
                        <p>
                            <input class="with-gap" name="projectFilter" type="radio" id="ownProjects" value="ownProjects" onchange="this.form.submit();" {if $smarty.session.antragFilter == "ownProjects"}checked{/if} />
                            <label for="ownProjects">Eigene Projekte</label>
                        </p>
                        <p>
                            <input class="with-gap" name="projectFilter" type="radio" id="allProjects" value="allProjects" onchange="this.form.submit();" {if $smarty.session.antragFilter == "allProjects"}checked{/if} />
                            <label for="allProjects">Alle Projekte</label>
                        </p>
                    </div>
                </li>
            </ul> 
        </form>
    </div>
    <div class="col s12 l9">
        {if isset($projekte)}
            {foreach from=$projekte item=projekt}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="{$projekt->pic}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title teal-text">{$projekt->titel}</span>
                            <p><strong class="teal-text">Standort:</strong> {$projekt->s_name}</p>
                            <p><strong class="teal-text">Abteilung:</strong> {$projekt->a_name}</p>
                        </div>
                        <div class="card-action">
                            <a class="grey-text" href="/pm/antrag/{$projekt->id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Projekte angelegt</p>
                </div>
            </div>
        {/if}
    </div>
</div>
