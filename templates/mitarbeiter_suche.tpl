<div class="card">
    <div class="card-content">
        <span class="card-title">Mitarbeiter suchen</span>
    </div>
</div> 

<nav>
    <div class="nav-wrapper">
        <form action="/pm/mitarbeiter/suche" method="post">
            <div class="input-field">
                <input id="search" name="ma_search" type="search" placeholder="Geben sie einen Namen oder die id des Mitarbeiters an" required>
                <label for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>

<div class="section"></div>

{if isset($users)}
    <div class="card">
        <div class="card-content">
            <div class="collection">
                {foreach from=$users item=user}
                    <a href="/pm/mitarbeiter/{$user->u_id}" class="collection-item">{$user->vorname} {$user->nachname}<span class="secondary-content"><i class="material-icons">send</i></span></a>
                {/foreach}
            </div>
        </div>
    </div> 
{/if}
