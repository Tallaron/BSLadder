<div class="custom-item">
    {include file="parts/title.tpl"}

    <div class="table-background">
        <table class="ladder-table">
            {foreach from=$ladder->getObjects() key=$key item=$rank}
                {include file="rank.tpl"}
            {/foreach}
        </table>
    </div>

</div>
