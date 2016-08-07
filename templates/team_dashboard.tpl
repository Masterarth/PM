<ul id="slide-out" class="side-nav">
    <li>
        <div class="userView">
            <img class="background" src="/pm/bin/custom/images/projekt_1.jpg">
            <div class="section"></div>
            <div class="section"></div>
            <div class="section"></div>
            <span class="white-text name valign" style="font-size: 24px;">Suche</span>
            <div class="section"></div>
            <div class="section"></div>
        </div>
    </li>
    <li class="container">
        <form action="/pm/team/dashboard" method="post">
            <div class="input-field search">
                <input id="search" class="sickblue" type="text" name="team_search">
                <label for="search">nach Team suchen</label>
            </div>
        </form>
    </li>
    <li>
        <div class="collapsible-header">Standorte</div>
        <div class="collapsible-body">
            <input type="checkbox" value="Das ist ein Text">    
        </div>
    </li>
    <li>
        <div class="collapsible-header">Abteilungen</div>
        <div class="collapsible-body"><p>hier sind abteilungen aufgelistet</p></div>
    </li>
</ul>
<div class="row">
    <div class="col hide-on-med-and-down l3">
        <ul class="collapsible" data-collapsible="accordion">
            <form action="/pm/team/dashboard" method="post">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="team_search">
                    <label for="search">nach Team suchen</label>
                </div>
            </form>
            <li>
                <div class="collapsible-header">Standorte</div>
                <div class="collapsible-body">
                    <input type="checkbox" value="Das ist ein Text">    
                </div>
            </li>
            <li>
                <div class="collapsible-header">Abteilungen</div>
                <div class="collapsible-body"><p>hier sind abteilungen aufgelistet</p></div>
            </li>
        </ul>
    </div>
    <div class="col s12 l9">
        {if isset($teams)}
            {foreach from=$teams item=team}
                <div class="card horizontal hoverable valign-wrapper">
                    <div class="card-image valign">
                        <img src="/pm/bin/custom/images/team.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">{$team->t_name}</span>
                        </div>
                        <div class="card-action">
                            <a href="/pm/team/{$team->id}">Öffnen</a>
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
