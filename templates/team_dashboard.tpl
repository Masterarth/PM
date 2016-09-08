<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/team/dashboard" method="post">
                <div class="input-field search search-margin">
                    <input id="search" class="sickblue" type="text" name="team_search">
                    <label for="search">nach Team suchen</label>
                </div>
            </form>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($teams)}
            {foreach from=$teams item=team}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="{$team->pic}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title teal-text">{$team->t_name}</span>
                        </div>
                        <div class="card-action">
                            <a class="grey-text" href="/pm/team/{$team->id}">Öffnen</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="card">
                <div class="card-content">
                    <p>Es sind keine Teams vorhanden</p>
                </div>
            </div>
        {/if}
    </div>
</div>
