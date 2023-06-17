{extends file="main.tpl"}

{block name=content}
    
{include file='menu.tpl'}
                                                      
<header class="major">    
    <h2>{$page_title}</h2>
    <hr>
    <form action="{$conf->action_url}processFiltering" method="post">
        <ul class="actions">
            {include file='searchBar.tpl'}
        </ul>
    </form>

<div class="table-wrapper" id="table">
    {include file="Table.tpl"}
</div>
  

<div class="pagination">
  <button class="button small" onclick="selectPage({$pagination->currentPage - 1}, '{$conf->action_url}selectPage', 'table');">&laquo;</button>

    {for $counter=($pagination->firstPage) to ($pagination->lastPage)}
      {if $pagination->currentPage == $counter}
        <button class="button small">{$counter + 1}</button>
      {else}
        <button class="button small" onclick="selectPage({$counter}, '{$conf->action_url}selectPage', 'table');">{$counter + 1}</button>
      {/if}
    {/for}

  <button class="button small" onclick="selectPage({$pagination->currentPage + 1}, '{$conf->action_url}selectPage', 'table');">&raquo;</button>
</div>

    <hr>                  

</header>  
{/block}
