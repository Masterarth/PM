{if $showNavButton == TRUE}
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large teal">
            <i class="large material-icons">menu</i>
        </a>
        <ul>
            <li><a href="/pm/abmelden" class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Logout"><i class="material-icons">power_settings_new</i></a></li>
                {if isset($fixed_button_nav_elements)}
                    {foreach from=$fixed_button_nav_elements item=element}
                    <li><a href="{$element.url}" class="btn-floating red tooltipped {$element.classes} {$element.color}" {$element.other} data-position="left" data-delay="10" data-tooltip="{$element.tooltip}"><i class="material-icons">{$element.iconname}</i></a></li>
                        {/foreach}
                    {/if}
        </ul>
    </div>
{/if}