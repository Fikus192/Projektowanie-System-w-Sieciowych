{extends file='main.tpl'}

{block name=content}

{include file='menu.tpl'}

<div class="table-wrapper">
<table class="alt">
        <thead>
		    <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Hasło</th>
                <th>E-mail</th>
                <th>Numer Telefonu</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <form action="{$conf->action_url}addUserShow" method="post">
            <div class="inner"><button class="button small" type="submit">+ Nowy</button></div>
        </form>
        <tbody>
            {if !empty($data)}
                {foreach $data as $user}
                    {strip}
                    <tr>
                            <td>{$user["id_user"]}</td>
                            <td>{$user["login"]}</td>
                            <td>{$user["pass"]}</td>
                            <td>{$user["email"]}</td>
                            <td>{$user["phone_number"]}</td>
                            <td>
                                <form action="{$conf->action_url}resetPassword" method="post">
                                    <button class="button small" name="buttonValue" type="submit" value={$user['id_user']}>Zresetuj hasło</button>
                                </form>
                                <form action="{$conf->action_url}deleteUser" method="post">
                                    <button class="button small" name="buttonValue" type="submit" value={$user['id_user']}>Usuń</button>
                                </form>
                            </td>
                    </tr>
                    {/strip}
                {/foreach}
            {else}
                <td>Brak zawartości do wyświetlenia.</td>
            {/if}
        </tbody>
</table>
</div>

{/block}