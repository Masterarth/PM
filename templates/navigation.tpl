{if $showNavbar == TRUE}
    <nav class="white" role="navigation">
        <div class="navbar-fixed ">
            <nav class="white">
                <div class="nav-wrapper container">
                    <a href="/pm/dashboard" class="brand-logo">PAMS</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down grey-text">
                        {include file="nav_elements.tpl"}
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <div class="userView">
                                <img class="background" src="/pm/bin/custom/images/office.jpg">
                                <div class="section"></div>
                                <div class="section"></div>
                                <a href="/pm/mitarbeiter/{$smarty.session.user->getU_id()}" class="hoverable">
                                    <div class="section"></div>
                                    <span class="white-text name valign" style="font-size: 24px;">{$smarty.session.user->getVorname()} {$smarty.session.user->getNachname()}</span>
                                    <div class="section"></div>
                                </a>
                                <div class="section"></div>
                            </div>
                        </li>
                        {include file="nav_elements.tpl"}
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
{/if} 

