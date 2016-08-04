{if $showNavbar == TRUE}
    <nav class="white" role="navigation">
        <div class="navbar-fixed ">
            <nav class="white">
                <div class="nav-wrapper container">
                    <div class="brand-logo">
                        <a href="/pm/" class="black-text"><i class="material-icons">polymer</i></a>
                        <a href="/pm/" class="black-text hide-on-med-and-down">PAMS</a>
                        {if isset($pageTitle)}<span> | {$pageTitle}</span>{/if}
                    </div>
                    <a href="#" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down grey-text">
                        {include file="nav_elements.tpl"}
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <div class="userView">
                                <img class="background" src="/pm/bin/custom/images/projekt_1.jpg">
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

