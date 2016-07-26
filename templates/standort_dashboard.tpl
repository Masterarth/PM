<div class="card">
    <div class="card-content">
        <span class="card-title">Standorte</span>
    </div>
</div> 

<nav>
    <div class="nav-wrapper">
        <form action="/pm/standort/dashboard" method="post">
            <div class="input-field">
                <input id="search" name="standort_search" type="search" placeholder="Geben sie teile des Standortes an" required>
                <label for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>


{if isset($standorte)}
    <div class="col s12 l9">
        {foreach from=$standorte item=standort}
            <div class="card horizontal hoverable valign-wrapper">
                <div class="card-image valign">
                    <img src="/pm/bin/custom/images/projekt_2.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title">{$standort->s_name}</span>
                        <p><strong>Adresse:</strong> {$standort->strasse} {$standort->hausnummer}, {$standort->plz} {$standort->ort}</p>
                    </div>
                    <div class="card-action">
                        <a href="/pm/standort/{$standort->id}">Öffnen</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}
