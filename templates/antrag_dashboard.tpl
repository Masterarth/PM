<div class="row">
    <div class="col hide-on-med-and-down l3">
        <form action="/pm/antrag/dashboard" method="post">
            <div class="card">
                <div class="card-content">
                    <div class="input-field">
                        <select name="view" onchange="this.form.submit();">
                            <option value="" disabled selected>Wählen sie ihre Darstellung</option>
                            <option {if $view == 'cards'}selected{/if} value="cards">Dashboard</option>
                            <option {if $view == 'table'}selected{/if} value="table">Tabelle</option>
                        </select>
                        <label>Ansicht auswählen</label>
                    </div>
                </div>
            </div>
        </form>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="input-field search radioRow">
                    <input id="search" type="text" name="search" name="antrag_search">
                    <label for="search" >Suche</label>
                </div>
            </li>
            <li>
                <div class="collapsible-header">Abteilungen</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header">Standort</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                <div class="collapsible-header">Zeitraum</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($projekte)}
            {foreach from=$projekte item=projekt}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="/pm/bin/custom/images/projekt_2.jpg">
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
