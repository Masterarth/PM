<div class="carousel carousel-slider"   > 
    <a class="carousel-item" href="#one!">A</a>
    <a class="carousel-item" href="#two!">B</a>
    <a class="carousel-item" href="#three!">C</a>
    <a class="carousel-item" href="#four!">D</a>
</div>

<div class="carousel center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>




<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#basis">Basis</a></li>
            <li class="tab col s3"><a  href="#zusatz">Zusatz</a></li>
            <li class="tab col s3"><a href="#kennzahl">Kennzahl</a></li>
            <li class="tab col s3 disabled"><a href="#IstZahl">Ist-Werte</a></li>
        </ul>
    </div>
</div>
<div class="card">
    <div id="basis" class="col s12">
        <div class="card-content">
            <span class="card-title">Basisinformationen{*neue Projektnummer aus db holen und anzeigen*}</span>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <input id="projektname" type="text" class="validate">
                    <label for="projektname">Projektname</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="sollstartdatum" type="text" class="datepicker">
                    <label for="sollstartdatum">Startdatum</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="sollenddatum" type="text" class="datepicker">
                    <label for="sollenddatum">Enddatum</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">chat</i>
                    <textarea id="kurzbeschreibung" class="materialize-textarea" length="320"></textarea>
                    <label for="kurzbeschreibung">Kurzbeschreibung</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <textarea id="rahmenbedingungen" class="materialize-textarea" length="320"></textarea>
                    <label for="rahmenbedingungen">Rahmenbedingungen</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">ring_volume</i>
                    <textarea id="Kommunikation" class="materialize-textarea" length="320"></textarea>
                    <label for="Kommunikation">Kommunikation</label>
                </div>
            </div>
        </div>
    </div>
    <div id="zusatz" class="col s12">
        <div class="card-content">
            <span class="card-title">Zusatzinformationen</span>
            <div class="row">
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Standort</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Bereich</label>
                </div>
                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Team</label>
                </div>
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Auswählen</option>
                        <option value="1">Standort 1</option>
                        <option value="2">Standort 2</option>
                        <option value="3">Standort 3</option>
                    </select>
                    <label>Projektleiter</label>
                </div>
            </div>
        </div>
    </div>
    <div id="kennzahl" class="col s12">
        <div class="card-content">
            <span class="card-title">Kennzahlen</span>
        </div>
    </div>
    <div id="IstZahl" class="col s12">
        <div class="card-content">
            <span class="card-title">Ist-Werte</span>
        </div>
    </div>
</div>
            
        <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
        </div>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel.carousel-slider').carousel();
        $('.carousel').carousel();
        $('ul.tabs').tabs();
    });
</script>