<div class="custom-item">
    {include file="parts/title.tpl"}

    <div class="div-table">
        {foreach from=$ladder->getObjects() key=$key item=$rank}
            {include file="rank.tpl"}
        {/foreach}
    </div>

</div>
