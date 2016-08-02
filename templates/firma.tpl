
{if isset($firma)}
    <div class="parallax-container">
        <div class="parallax">
            <img class="backgroundImage" src="/pm/bin/custom/images/unternehmen_lang.jpg" style="display: block; transform: translate3d(-50%, 328px, 0px);">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">{$firma->f_name}</h2>
        </div>
    </div>
{else}
    <div class="center">
        <h4>Die Firma konnte nicht gefunden werden</h4>
        <p><a class="btn btn-flat" href="/pm/firma/dashboard">Zurück zur übersicht</a></p>
    </div>
{/if}