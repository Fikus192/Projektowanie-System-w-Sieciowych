<table class="alt">
        <thead>
		    <tr>
                <th>Typ</th>
                <th>Model</th>
                <th>Data Prod.</th>
                <th>Cena</th>
            {if \core\RoleUtils::inRole('admin') or \core\RoleUtils::inRole('user')}
                <th>Opcje</th>
            {/if}
            {if \core\RoleUtils::inRole('admin')}
                <form action="{$conf->action_url}addCanoeShow" method="post">
                    <div class="inner"><button class="button small" type="submit">+ Nowy</button></div>
                </form>
            {/if}
            </tr>
        </thead>
        <tbody>
            {if !empty($data)}
                {foreach $data as $canoe}
                    {strip}
                    <tr>
                            <td>{$canoe["type"]}</td>
                            <td>{$canoe["model"]}</td>
                            <td>{$canoe["production_date"]}</td>
                            <td>{$canoe["price"]}</td>
                            <td>
                                {if \core\RoleUtils::inRole('admin')} 
                                    <form action="{$conf->action_url}deleteCanoe" method="post">
                                        <button class="button small" name="buttonValue" type="submit" value={$canoe['id_canoe']}>Usuń</button>
                                    </form>
                                {/if}
                                {if \core\RoleUtils::inRole('user')}
                                    {if empty($canoe['id_rent'])}
                                        <form action="{$conf->action_url}processBooking" method="post">
                                            <button class="button small" name="buttonValue" type="submit" value={$canoe['id_canoe']}>Wypożycz</button>
                                        </form>
                                    {else}
                                        <h4>Wypożyczony.</h4>
                                    {/if}
                                {/if}   
                            </td>
                    </tr>   
                    {/strip}
                {/foreach}
            {else}
                <td>Brak zawartości do wyświetlenia.</td>
            {/if}
        </tbody>
</table>
