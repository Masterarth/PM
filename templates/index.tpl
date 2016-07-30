<!DOCTYPE html>
<html>
    <head>
        <title>PAMS</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset='utf-8' />
        {* -------  Fonts Start ------ *}
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {* -------  Fonts End  ------- *}
        {* -------  CSS Start  ------- *}        
        <link type="text/css" rel="stylesheet" href="/pm/bin/materialize/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/pm/bin/custom/css/main.css">
        {* -------  CSS End  ------- *}
        {* -------  JS Start  ------- *}
        <script type="text/javascript" src="/pm/bin/jquery/jquery-2.1.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script type="text/javascript" src="/pm/bin/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/main.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/loader.js"></script>
        <script type="text/javascript" src="/pm/bin/custom/js/GanttPM.js"></script>
        {* -------  JS End  ------- *}
    </head>

    <body>

        <!-- Navigation -->
        {include file="navigation.tpl"}

        <!-- Inhalt -->
        <div class="container content">
            {if isset($pageTitle)}
                {if $pageTitle != ""}
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{$pageTitle}</span>
                        </div>
                    </div>
                {/if}
            {/if}
            {include file=$page}
        </div>

        {include file="fixed_menu_button.tpl"}

    </body>