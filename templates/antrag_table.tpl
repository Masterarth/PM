<div class="row">



    <div class="card horizontal hoverable valign-wrapper">

        <div class="card-stacked">
            <div class="card-content">

                <span class="card-title teal-text"></span>

                <table>
                    <thead>
                        <tr>
                            <td><strong class="teal-text">Titel</strong></td>
                            <td><strong class="teal-text">Standort</strong></td>
                            <td><strong class="teal-text">Abteilung</strong></td>
                            <td><strong class="teal-text">Nutzen</strong></td>
                            <td><strong class="teal-text">Kosten</strong></td>
                            <td><strong class="teal-text">Öffnen</strong></td>
                        </tr>
                    </thead>
                    {if isset($projekte)}
                        {foreach from=$projekte item=projekt}
                            <tr>
                                <td>{$projekt->titel}</td>
                                <td>{$projekt->s_name}</td>
                                <td>{$projekt->a_name}</td>
                                <td>{$projekt->mon_nutzen}</td>
                                <td>{$projekt->mon_kosten}</td>
                                <td><a class="grey-text" href="/pm/antrag/{$projekt->id}">Öffnen</a>yy</td>
                            </tr>

                        {/foreach}
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
