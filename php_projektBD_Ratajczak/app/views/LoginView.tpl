{extends file="main.tpl"}

{block name=content}

{include file='menu.tpl'}

<div style="width:90%; margin: 2em auto;">

<section>
        <h3>Wprowadź dane do logowania</h3>
        <form method="post" action="{$conf->action_url}login">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
                            <input id="id_login" type="text" name="login" placeholder="Login" />
                        </div>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_pass" type="password" name="pass" placeholder="Hasło" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Zaloguj" class="primary" /></li></form>
                                    <li><form action="{$conf->action_url}registerShow" method="post"><input type="submit" value="Załóż konto" class="button" /></form></li>      
                                </ul>
                        </div>
                </div>
        </form>

</section>

</div>
{/block}
