<div class="row">
    <div class="col s3">
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
    <div class="col s9">
        {foreach from=$projekte item=projekt}
            <div class="card">
                <div class="row">
                    <div class="col s3">
                        <div class="card-image">
                            <img src="img/placeholder.jpg" />
                        </div>
                    </div>
                    <div class="col s8">
                        <h5 class="text-light-blue">{$projekt->getTitle()}</h5>
                        <div class="previewInfo">
                            <div class="discription"><strong>Funktionsbereich:</strong> ist noch nicht verfügbar</div>
                            <div class="discription"><strong>Standort:</strong> ist noch nicht verfügbar</div>
                            <div class="section"></div>
                            <div class="discription"><strong>Mitarbeiteranzahl:</strong> {$projekt->getMitarbeiteranzahl()}</div>
                            <div class="discription"><strong>Starttermin:</strong> {$projekt->getStarttermin()|date_format:"%A, %B %e, %Y"}</div>
                            <div class="discription"><strong>Endtermin:</strong> {$projekt->getEndtermin()|date_format:"%A, %B %e, %Y"}</div>
                            <div class="discription"><strong>Budget:</strong> {$projekt->getBudget()|number_format:2:",":"."}€</div>
                            <div class="section"></div>
                            <div class="discription"><strong>Kurzbeschreibung:</strong></div>
                            <div class="discription">{$projekt->getBeschreibung()}</div>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>