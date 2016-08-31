<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <strong class="teal-text">Tabellenfilter</strong>
                
                {if isset($projekte)}
                    <table class="highlight responsive-table" id="projectTable">
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


<script type="text/javascript">
    var filtersConfig = {
        col_1: 'select',
        col_2: 'select',
        extensions:[{
            name: 'sort'
        }]
    };
    
    var tf = new TableFilter('projectTable',filtersConfig);
    tf.init();
    
    
    
</script>