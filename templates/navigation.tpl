{if $showNavbar == TRUE}
    <nav class="white" role="navigation">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper container">
                    <a href="/pm/start" class="brand-logo">PAMS</a>
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
    </nav>
{/if} 

