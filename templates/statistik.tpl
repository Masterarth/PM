
<ul class="tabs">
    <li class="tab col s6"><a class="teal-text" href="#projekt">Projektinformationen</a></li>
    <li class="tab col s6"><a class="teal-text" href="#mitarbeiter">Mitarbeiterinformationen</a></li>
</ul>
<div id="projekt">
    <div class="section">
        <div class="row">
            <div class="col s12 m6 center">
                <i class="material-icons bigger teal-text">assignment</i>
                <h5>Anzahl der Projektanträge</h5>
                <h4>{$statistik->getI_numberProjects()}</h4>
            </div>
            <div class="col s12 m6 center">
                <i class="material-icons bigger teal-text">schedule</i>
                <h5>Durchschnittliche Zeit für ein Projekt</h5>
                <h4>{$statistik->getD_avgTimeProject()|number_format:2:",":"."} Tage</h4>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col s12 m6 center hoverable">
                <i class="material-icons bigger teal-text">attach_money</i>
                <h5>Durchschnittlicher Gewinn pro Projekt</h5>
                <h4 class="green-text">{$statistik->getD_avgEarningsProject()|number_format:2:",":"."} €</h4>
            </div>
            <div class="col s12 m6 center hoverable">
                <i class="material-icons bigger teal-text">money_off</i>
                <h5>Durchschnittliche Kosten pro Projekt</h5>
                <h4 class="red-text">{$statistik->getD_avgCostsProject()|number_format:2:",":"."} €</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 center hoverable">
                <i class="material-icons bigger teal-text">local_atm</i>
                <h5>Erwirtschafteter Gesamterlös durch Projekte</h5>
                <h4 class="green-text">{$statistik->getD_earningsSumProject()|number_format:2:",":"."} €</h4>
            </div>
            <div class="col s12 m6 center hoverable">
                <i class="material-icons bigger teal-text">shopping_cart</i>
                <h5>Gesamtkosten durch Projekte</h5>
                <h4 class="red-text">{$statistik->getD_costSumProject()|number_format:2:",":"."} €</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h4 class="teal-text">Projektstatus verteilung</h4>
            <div class="section">
                <div id="projektchart" style="height: 500px;"></div>
            </div>
        </div>
    </div>
</div>
<div id="mitarbeiter">
    <div class="section">
        <div class="row">
            <div class="col s12 m6 center">
                <i class="material-icons bigger teal-text">assignment</i>
                <h5>Anzahl Benutzer</h5>
                <h4>{$statistik->getI_numberEmployees()}</h4>
            </div>
            <div class="col s12 m6">
                <h4 class="teal-text">Benutzerrollen Verteilung</h4>
                <div class="section">
                    <div id="rollenchart" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    {literal}
        google.charts.load('current', {'packages': ['corechart']});
    {/literal}
        google.charts.setOnLoadCallback(rollenChart);
        function rollenChart() {

            var jsonData = $.ajax({
                url: "/pm/api/stats_rollen",
                dataType: "json",
                async: false
            }).responseJSON;

            var options = {
            };

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Rolle');
            data.addColumn('number', 'Anzahl');

            $.each(jsonData, function (i, jsonData)
            {
                var rolle = jsonData.rolle;
                var anzahl = jsonData.anzahl;
                data.addRows([[rolle, anzahl]]);
            });

            var chart = new google.visualization.PieChart(document.getElementById('rollenchart'));

            chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(projektchart);
        function projektchart() {

            var jsonData = $.ajax({
                url: "/pm/api/stats_projekte",
                dataType: "json",
                async: false
            }).responseJSON;

            var options = {
            };

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Status');
            data.addColumn('number', 'Anzahl');

            $.each(jsonData, function (i, jsonData)
            {
                var status = jsonData.status;
                var anzahl = jsonData.anzahl;
                data.addRows([[status, anzahl]]);
            });

            var chart = new google.visualization.PieChart(document.getElementById('projektchart'));

            chart.draw(data, options);
        }

        $(window).resize(function () {
            rollenChart();
            projektchart();
        });
</script>
