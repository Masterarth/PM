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
        <div class="card">
            <div class="card-content">
                {if isset($projekte)}
                    <table class="highlight responsive-table">
                        <thead>
                            <tr>
                                <th><strong class="teal-text">Titel</strong></th>
                                <th><strong class="teal-text">Standort</strong></th>
                                <th><strong class="teal-text">Abteilung</strong></th>
                                <th><strong class="teal-text">Nutzen</strong></th>
                                <th><strong class="teal-text">Kosten</strong></th>
                                <th><strong class="teal-text">Öffnen</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$projekte item=projekt}
                                <tr>
                                    <td>{$projekt->titel}</td>
                                    <td>{$projekt->s_name}</td>
                                    <td>{$projekt->a_name}</td>
                                    <td>{$projekt->mon_nutzen}</td>
                                    <td>{$projekt->mon_kosten}</td>
                                    <td>
                                        <a href="/pm/antrag/{$projekt->id}" class="btn-flat"><i class="material-icons">open_in_new</i></a>
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                {else}
                    <div class="card">
                        <div class="card-content">
                            <p>Es sind keine Projekte angelegt</p>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
    </div>
</div>