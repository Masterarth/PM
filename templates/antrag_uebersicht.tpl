
<div class="row">
    <div class="col s12 m9 l10">
        {foreach from=$projekte item=projekt}
            <div class="card horizontal hoverable valign-wrapper">
                <div class="card-image valign">
                    <img src="/pm/bin/custom/images/projekt_2.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title">{$projekt->getTitle()}</span>
                        <p>{$projekt->getBeschreibung()}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Öffnen</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    <div class="col hide-on-small-only m3 l2">
        <div class="tabs-wrapper">
            <ul class="collapsible" data-collapsible="accordion">
                <div class="input-field search white">
                    <input id="search" class="sickblue" type="text" name="search" value="">
                    <label for="search" >Suche</label>
                </div>
                <li>
                    <div class="collapsible-header">Abteilungen</div>
                    <div class="collapsible-body">
                        <input type="checkbox" value="Das ist ein Text">    
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Second</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                    <div class="collapsible-header">Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
        </div>
    </div>
</div>
