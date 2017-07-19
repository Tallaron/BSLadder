<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BSource - Ladder</title>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="css/slick.css" rel="stylesheet" type="text/css"/>
        <script src="js/slick.js" type="text/javascript"></script>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <script src="js/js.js" type="text/javascript"></script>
    </head>
    <body style="background-color: #cccccc;">






            <div class="carousel">
                {foreach from=$data item=$ladder}
                    <div class="custom-item">
                        <table border="1">
                        {foreach from=$ladder->getObjects() item=$rank}
                            <tr>
                                <td>{$rank->pos}</td>
                                <td>{$rank->level}</td>
                                <td>{$rank->class}</td>
                                <td>{$rank->name}</td>
                                <td>{$rank->time}</td>
                            </tr>
                        {/foreach}
                        </table>
                    </div>
                {/foreach}
            </div>










    </body>
</html>