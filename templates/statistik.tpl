<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active teal-text" href="#projekt">Projekt</a></li>
            <li class="tab col s3"><a class="teal-text" href="#mitarbeiter">Mitarbeiter</a></li>
        </ul>
    </div>
</div>

<div id="projekt" class="col s12">

</div>
<div id="mitarbeiter" class="col s12">
    <div class="row">
        <div class="section">
            <h5 class="teal-text">Mitarbeiterinformationen</h5>
            <div class="divider"></div>
        </div>
    </div>
</div>


<div class="row">
    <div class="section">
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">assignment</i>
            <h5>Anzahl offener Anträge</h5>
            <h4>{$statistik->getNumberOfEmployees()}</h4>
        </div>
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">check_circle</i>
            <h5>Anzahl genehmigter Anträge</h5>
            <h4></h4>
        </div>
        <div class="col s12 m4 center">
            <i class="material-icons bigger teal-text">block</i>
            <h5>Abgelehnte Anträge</h5>
            <h4></h4>
        </div>
    </div>
</div>