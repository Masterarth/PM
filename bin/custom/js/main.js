$(document).ready(function () {

    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

    $('.parallax').parallax();

    $(".button-collapse").sideNav();

    $('ul.tabs').tabs();
    $('select').material_select();
    $('.datepicker').pickadate({
        monthsFull: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
        monthsShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
        weekdaysFull: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
        weekdaysShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
        today: 'Heute',
        clear: 'Löschen',
        close: 'Schließen',
        firstDay: 1,
        format: 'dddd, dd. mmmm yyyy',
        formatSubmit: 'yyyy/mm/dd',
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
    });


    $('#autocomplete').on('input', function () {
        var searchKeyword = $(this).val();
        if (searchKeyword.length >= 3) {
            $.post('/pm/test/data', {name: searchKeyword}, function (data) {
                $('ul#content').empty()
                console.log(data);
                $.each(data, function () {
                    $('ul#content').append('<li><p>' + this.vorname + " " + this.nachname + '</p></li>');
                });
            }, "json");
        } else {
            $('ul#content').empty()
        }
    });


});

