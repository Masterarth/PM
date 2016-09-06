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
    <div id="gantt_chart"></div>
</div>

<script type="text/javascript">
    {literal}
        google.charts.load('current', {'packages': ['gantt']});
    {/literal}
        google.charts.setOnLoadCallback(ganttChart);
        function ganttChart() {

            var jsonData = $.ajax({
                url: "/pm/api/gantt_projekte",
                dataType: "json",
                async: false
            }).responseJSON;

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Task ID');
            data.addColumn('string', 'Task Name');
            data.addColumn('string', 'Resource');
            data.addColumn('date', 'Start Date');
            data.addColumn('date', 'End Date');
            data.addColumn('number', 'Duration');
            data.addColumn('number', 'Percent Complete');
            data.addColumn('string', 'Dependencies');


            $.each(jsonData, function (i, jsonData)
            {
                data.addRows([[jsonData.taskId, jsonData.taskName, jsonData.resource, new Date(jsonData.startDate), new Date(jsonData.endDate), null, jsonData.complete, null]]);
            });

            var options = {
                gantt: {
                    trackHeight: 35
                }
            };

            var chart = new google.visualization.Gantt(document.getElementById('gantt_chart'));

            chart.draw(data, options);
        }

        $(window).resize(function () {
            ganttChart();
        });
</script>