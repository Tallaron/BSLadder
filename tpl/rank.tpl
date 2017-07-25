<tr{if $highlight != false && ($rank->name == $highlight || $rank->clan == $highlight)} class="highlight"{/if}>
    {include file="parts/rank_pos.tpl"}
    {include file="parts/rank_name.tpl"}
    {include file="parts/rank_level.tpl"}
    {include file="parts/rank_time.tpl"}
</tr>
