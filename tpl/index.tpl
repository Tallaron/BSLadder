<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="{CONTENT_RELOAD_TIME}">
        <title>BSource - Ladder</title>
        <link href="{BASE_DIR}/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="{BASE_DIR}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="{BASE_DIR}/css/slick.css" rel="stylesheet" type="text/css"/>
        <script src="{BASE_DIR}/js/slick.js" type="text/javascript"></script>
        <link href="{BASE_DIR}/css/css.css" rel="stylesheet" type="text/css"/>
        <script src="{BASE_DIR}/js/js.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="content-container">
            
            <div class="carousel">
                {foreach from=$data item=$ladder}
                    {include file="ladder.tpl"}
                {/foreach}
            </div>

            {include file="parts/copyright.tpl"}

        </div>

    </body>
</html>