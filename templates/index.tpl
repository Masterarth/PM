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
        <link type="text/css" rel="stylesheet" href="/pm/bin/custom/css/main.css">
        {* -------  CSS End  ------- *}
        {* -------  JS Start  ------- *}
        <script type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/GanttPM.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/main.js"></script>
        <script type="text/javascript" src="/pm/bin/tablefilter/tablefilter.js"></script>
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
