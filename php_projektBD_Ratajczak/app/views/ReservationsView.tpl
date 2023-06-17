{extends file='main.tpl'}

{block name=content}

{include file='menu.tpl'}

<form action="{$conf->action_url}reservationsProcessFiltering" method="post" class="">
    <ul class="actions">
        {include file='searchBar.tpl'}
    </ul>
</form>

<div class="table-wrapper">
<table class="alt">
        <thead>
		    <tr>
                <th>ID Rezerwacji</th>
                <th>Typ</th>
                <th>Model</th>
                <th>Data Prod.</th>
                <th>Cena</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            {if !empty($data)}
                {foreach $data as $canoe}
                    {strip}
                    <tr>
                            <td>{$canoe["id_rent"]}</td>
                            <td>{$canoe["type"]}</td>
                            <td>{$canoe["model"]}</td>
                            <td>{$canoe["production_date"]}</td>
                            <td>{$canoe["price"]}</td>
                            <td>
                                {if !empty($canoe['id_rent'])}
                                    <form action="{$conf->action_url}processReturned" method="post">
                                        <button class="button small" name="buttonValue" type="submit" value={$canoe['id_canoe']}>Zwróć</button>
                                    </form>
                                {/if}
                            </td>
                    </tr>
                    {/strip}
                {/foreach}
            {else}
                <h4>Brak zawartości do wyświetlenia.</h4>
            {/if}
        </tbody>
</table>
</div>

{/block}