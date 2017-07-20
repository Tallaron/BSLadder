<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="{CONTENT_RELOAD_TIME}">
        <title>BSource - Ladder</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="css/slick.css" rel="stylesheet" type="text/css"/>
        <script src="js/slick.js" type="text/javascript"></script>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <script src="js/js.js" type="text/javascript"></script>
    </head>
    <body>




        <div class="content-container">
            
            <div class="carousel">
                {foreach from=$data item=$ladder}
                    <div class="custom-item">
                        <div class="title"><span class="glyphicon glyphicon-stats"></span> {$settings->get('BNET_CLASSES', $ladder->getClass())}</div>

                        <div class="div-table">
                        {foreach from=$ladder->getObjects() key=$key item=$rank}
                            <div class="div-table-row{if $key%2!=0} light-grey{/if}">
                                <div class="div-table-cell cell-pos">{$rank->pos}</div>
                                <div class="div-table-cell cell-level">{$rank->level}</div>
                                <div class="div-table-cell cell-time">{$rank->time}</div>
                                <div class="div-table-cell cell-picture"><img src="gfx/{$rank->class}.png"></div>
                                <div class="div-table-cell cell-name">{$rank->name}</div>
                            </div>
                        {/foreach}
                        </div>


                    </div>
                {/foreach}
            </div>

            <div class="copyright">d3.tallaron.de</div>

        </div>











    </body>
</html>