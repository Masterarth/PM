<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/bereich/dashboard" method="post">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="bereich_search">
                    <label for="search">nach Bereich suchen</label>
                </div>
            </form>
            <li>
                <div class="collapsible-header">Standorte</div>
                <div class="collapsible-body">
                    <input type="checkbox" value="Das ist ein Text">    
                </div>
            </li>
            <li>
                <div class="collapsible-header">irgendwas</div>
                <div class="collapsible-body"></div>
            </li>
        </ul>
    </div>
    <div class="col s12 l9">
        {foreach from=$bereiche item=bereich}
            <div class="card horizontal hoverable valign-wrapper">
                <div class="card-image valign">
                    <img src="/pm/bin/custom/images/projekt_2.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title">{$bereich->b_name}</span>
                        <p><strong>Leiter:</strong> {$bereich->b_leiter}</p>
                    </div>
                    <div class="card-action">
                        <a href="/pm/bereich/{$bereich->id}">Öffnen</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>
