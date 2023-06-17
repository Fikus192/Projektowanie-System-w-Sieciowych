{assign var=inRoleAdmin value=\core\RoleUtils::inRole('admin') nocache}
{assign var=inRoleUser value=\core\RoleUtils::inRole('user') nocache}

<header id="header">
    <h1 id="logo"><a href="{$conf->action_url}homePage">Wypożyczalnia Kajaków</a></h1>
    <nav id="nav">
        <ul>
            {if $inRoleUser or $inRoleAdmin}
                {if $inRoleAdmin}
                        <li><a href="{$conf->action_url}manageAccountsShow">Konta</a></li>
                        <li><a href="{$conf->action_url}manageProductsShow">Produkty</a></li>
                {else}
                        <li><a href="{$conf->action_url}reservationsShow">Rezerwacje</a></li>
                        <li><a href="{$conf->action_url}accountShow">Ustawienia</a></li>
		        {/if}

                        <li><a class="button primary" href="{$conf->action_url}logout">Wyloguj się</a></li>
                {else}
		        <li class="active"><a href="{$conf->action_url}registerShow">Zarejestruj się</a></li>
    		        <li><a class="button primary" href="{$conf->action_url}loginShow">Zaloguj się</a></li>
	        {/if}		
	    </ul>
    </nav>    
</header>