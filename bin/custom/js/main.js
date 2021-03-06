$(document).ready(function () {

    $(".dropdown-button").dropdown({
        hover: true, // Activate on hover
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });

    $('.modal-trigger').leanModal();

    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

    $('#about_slider').slider({full_width: true});
    $('#start_slider').slider({full_width: true, indicators: false});

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
        close: 'X',
        firstDay: 1,
        format: 'dddd, dd. mmmm yyyy',
        formatSubmit: 'yyyy/mm/dd',
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
    });

    $('#leiter').on('input', function () {
        var searchKeyword = $(this).val();
        if (searchKeyword.length >= 3) {
            $.post('/pm/api/mitarbeiter', {name: searchKeyword}, function (data) {
                console.log(data);
                $('.autocomplete-content').empty()
                $.each(data, function () {
                    $('.autocomplete-content').append('<li class="test-content"><span>' + this.vorname + " " + this.nachname + '</span></li>');
                });
            }, "json");
        } else {
            $('.autocomplete-content').empty()
        }
    });

    $('.autocomplete-content').on('click', 'li', function () {
        var text = $(this).text();
        $("#leiter").val(text);
        $('.autocomplete-content').empty();
    });

    $('.carousel.carousel-slider').carousel({full_width: true});
    $('.carousel').carousel();
    $('ul.tabs').tabs();

});