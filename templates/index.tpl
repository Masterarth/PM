<!DOCTYPE html>
<html>
    <head>
        <title>PAMS</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset='utf-8' />
        {* -------  Fonts Start ------ *}
        <link href="/pm/bin/custom/css/icons.css" rel="stylesheet">
        {* -------  Fonts End  ------- *}
        {* -------  CSS Start  ------- *}        
        <link type="text/css" rel="stylesheet" href="/pm/bin/materialize/css/materialize.css"  media="screen,projection"/>
        <link rel="stylesheet" href="/pm/bin/timeline/css/style.css"> <!-- timeline -->      
        <link type="text/css" rel="stylesheet" href="/pm/bin/custom/css/main.css">
        {* -------  CSS End  ------- *}
        {* -------  JS Start  ------- *}
        <script type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/loader.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/GanttPM.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/jquery.sticky-kit.min.js"></script>
        <script type="text/javascript" src="/pm/bin/timeline/js/modernizr.js"></script> <!-- timeline -->
        <script type="text/javascript" src="/pm/bin/timeline/js/main.js"></script> <!-- timeline -->
        <script type="text/javascript" src="/pm/bin/custom/js/main.js"></script>
        {* -------  JS End  ------- *}
    </head>

    <body>

        {if $userCheck == true}
            <!-- Navigation -->
            {include file="navigation.tpl"}
        {else}
            {include file="navigation_default.tpl"}            
        {/if}

        <!-- Inhalt -->
        {if !$parallax}
            <div class="container content">
                {include file=$page}
            </div>
        {else}
            {include file=$page}
        {/if}


        {if isset($toast)}
            {$toast}
        {/if}

        {include file="fixed_menu_button.tpl"}
        {*include file="footer.tpl"*}
    </body>