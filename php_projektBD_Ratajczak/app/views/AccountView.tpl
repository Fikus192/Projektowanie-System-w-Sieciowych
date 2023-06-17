{extends file="main.tpl"}

{block name=content}

{include file='menu.tpl'}

<div style="width:90%; margin: 2em auto;">

<section>
        <h3>{$page_title}</h3>
        <form method="post" action="{$conf->action_url}accountUpdate">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
                            <input id="id_pass" type="password" name="pass" placeholder="Nowe hasło:" />
                        </div>
                        <div class="col-12 col-12-xsmall">
                               <input id="id_repeat_pass" type="password" name="repeat_pass" placeholder="Powtórz hasło:" />
                        </div>
			<div class="col-12 col-12-xsmall">
                               <input id="id_email" type="email" name="email" placeholder="Nowy adres e-mail:" />
                        </div>
			<div class="col-12 col-12-xsmall">
                               <input id="id_phone_number" type="text" name="phone_number" placeholder="Nowy numer telefonu:" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Zaktualizuj" class="primary" /></li>
                                </ul>
                        </div>
                </div>
        </form>

</section>

</div>
{/block}
