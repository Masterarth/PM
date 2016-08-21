google.charts.load('current', {'packages': ['gantt', 'corechart']});

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

    var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

    chart.draw(data, options);
}

//google.charts.setOnLoadCallback(mitarbeiterChart);
//function mitarbeiterChart() {
//
//    var jsonData = $.ajax({
//        url: "/pm/api/stats_mitarbeiter",
//        dataType: "json",
//        async: false
//    }).responseJSON;
//
//    var options = {
//        is3D: true,
//    };
//
//    var data = new google.visualization.DataTable();
//    data.addColumn('string', 'Rolle');
//    data.addColumn('number', 'Anzahl');
//
//    $.each(jsonData, function (i, jsonData)
//    {
//        var rolle = jsonData.rolle;
//        var anzahl = jsonData.anzahl;
//        data.addRows([[rolle, anzahl]]);
//    });
//
//    var chart = new google.visualization.PieChart(document.getElementById('mitarbeiterChart'));
//
//    chart.draw(data, options);
//}
//
//google.charts.setOnLoadCallback(projekteChart);
//function projekteChart() {
//
//    var jsonData = $.ajax({
//        url: "/pm/api/stats_mitarbeiter",
//        dataType: "json",
//        async: false
//    }).responseJSON;
//
//    var options = {
//        pieHole: 0.4,
//        legend: 'none'
//    };
//
//    var data = new google.visualization.DataTable();
//    data.addColumn('string', 'Rolle');
//    data.addColumn('number', 'Anzahl');
//
//    $.each(jsonData, function (i, jsonData)
//    {
//        var rolle = jsonData.rolle;
//        var anzahl = jsonData.anzahl;
//        data.addRows([[rolle, anzahl]]);
//    });
//
//    var chart = new google.visualization.PieChart(document.getElementById('projekteChart'));
//
//    chart.draw(data, options);
//}
//
//google.charts.setOnLoadCallback(ressourcenChart);
//function ressourcenChart() {
//
//    var jsonData = $.ajax({
//        url: "/pm/api/stats_ressourcen",
//        dataType: "json",
//        async: false
//    }).responseJSON;
//
//    var options = {
//        pieStartAngle: 100,
//        sliceVisibilityThreshold: 0
//    };
//
//    var data = new google.visualization.DataTable();
//    data.addColumn('string', 'Name');
//    data.addColumn('number', 'Anzahl');
//
//    $.each(jsonData, function (i, jsonData)
//    {
//        var name = jsonData.name;
//        var anzahl = jsonData.anzahl;
//        data.addRows([[name, anzahl]]);
//    });
//
//    var chart = new google.visualization.PieChart(document.getElementById('ressourcenChart'));
//
//    chart.draw(data, options);
//}

$(window).resize(function () {
    ganttChart();
//    mitarbeiterChart();
//    projekteChart();
//    ressourcenChart();
});