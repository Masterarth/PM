
<div class="row">
    <div class="col s12 m9 l10">
        <div class="row">
            {foreach from=$projekte item=projekt}
                <div class="col s6">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="/pm/bin/custom/images/projekt_2.jpg">
                            <span class="card-title">{$projekt->getTitle()}</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                            <p>{$projekt->getBeschreibung()}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Öffnen</a>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projekt Informationen<i class="material-icons right">close</i></span>
                            <div class="section"></div>
                            <div class="discription"><strong>Funktionsbereich:</strong> ist noch nicht verfügbar</div>
                            <div class="discription"><strong>Standort:</strong> ist noch nicht verfügbar</div>
                            <div class="discription"><strong>Mitarbeiteranzahl:</strong> {$projekt->getMitarbeiteranzahl()}</div>
                            <div class="discription"><strong>Starttermin:</strong> {$projekt->getStarttermin()|date_format:"%A, %B %e, %Y"}</div>
                            <div class="discription"><strong>Endtermin:</strong> {$projekt->getEndtermin()|date_format:"%A, %B %e, %Y"}</div>
                            <div class="discription"><strong>Budget:</strong> {$projekt->getBudget()|number_format:2:",":"."}€</div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
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