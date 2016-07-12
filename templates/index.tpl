<!DOCTYPE html>
<html>
    <head>
        <title>Zeiterfassung</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="IE=10">
        <meta charset='utf-8' />
        {* -------  Favicon Start  ------- *}
        {* -------  Favicon End  ------- *}
        {* -------  CSS Start  ------- *}
        <link href="/bin/custom/css/main.css" type="text/css">
        {* -------  CSS End  ------- *}
        {* -------  JS Start  ------- *}
        <script src="/bin/custom/js/main.js" type="text/javascript"></script>
        {* -------  JS End  ------- *}
    </head>

    <body>
        <div class="container" id="frame">
            <!-- Header -->       
            <div class="row container">
                <div class="page-header">
                    {include file="header.tpl"}
                </div>
            </div>

            <!-- Navigation -->
            <div class="row container">
                {include file="navigation.tpl"}
            </div>

            <!-- Inhalt -->
            <div class="row container" id="inhalt">
                {include file=$page}
            </div>

            <!-- Footer -->
            <div class="row container" id="footer">
                {include file="footer.tpl"}
            </div>
        </div>
    </body>