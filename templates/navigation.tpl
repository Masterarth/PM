{*
<div class="row">
<div class="col s3 offset-s1">
<a class="black-text">PAMS</a>
</div>
<div class="col s8">
<a class="waves-effect waves-light btn">Neuer Antrag</a>
<a class="waves-effect waves-light btn">Anträge</a>
<a class="waves-effect waves-light btn">Stammdaten</a>
</div>
</div>
*}

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="anmelden" class="brand-logo">PAMS</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                {include file="nav_elements.tpl"}
            </ul>
            <ul class="side-nav" id="mobile-demo">
                {include file="nav_elements.tpl"}
            </ul>
        </div>
    </nav>
</div>