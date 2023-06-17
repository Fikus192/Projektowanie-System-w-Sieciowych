{extends file="main.tpl"}

{block name=content}

{include file='menu.tpl'}

<section>
        <h3>Rejestracja do systemu</h3>
        <form method="post" action="{$conf->action_url}register">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
                            <input id="id_login" type="text" name="login" placeholder="Login:" />
                        </div>
						<br>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_pass" type="password" name="pass" placeholder="Hasło:" />
                        </div>
						<br>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_confirm" type="password" name="repeat_pass" placeholder="Potwierdź hasło:" />
                        </div>
						<br>
                        <div class="col-12 col-12-xsmall">
                                <input id="id_email" type="email" name="email" placeholder="Email:" />
                        </div>
                                                <br>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_phone_number" type="text" name="phone_number" placeholder="Numer telefonu:" />
                        </div>
						<br>
                        <div class="col-12">
                                <ul class="actions">
                                        <li><input type="submit" value="Załóż konto" class="primary" /> <a href="{$conf->action_url}loginShow" class="button">Wróć</a></li>
                                </ul>
                        </div>
                </div>
        </form>
</section>

</div>
{/block}
