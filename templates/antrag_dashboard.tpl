{*
<table class="responsive-table highlight">
<thead>
<th>Titel</th>
<th>Standort</th>
<th>Abteilung</th>
<th>Aktion</th>
</thead>
<tbody>
{if isset($projekte)}
{foreach from=$projekte item=projekt}
<tr>
<td>{$projekt->titel}</td>
<td>{$projekt->s_name}</td>
<td>{$projekt->a_name}</td>
<td>
<a href="/pm/antrag/{$projekt->id}" class="btn-flat"><i class="material-icons">open_in_new</i></a>
</td>
</tr>
{/foreach}
{/if}
</tbody>
</table>
*}
<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/antrag/uebersicht" method="post">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="search" value="" name="antrag_search">
                    <label for="search" >Suche</label>
                </div>
                <li>
                    <div class="collapsible-header">Abteilungen</div>
                    <div class="collapsible-body">
                        <input type="checkbox" value="Das ist ein Text">    
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Standort</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header">Zeitraum</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </form>
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
