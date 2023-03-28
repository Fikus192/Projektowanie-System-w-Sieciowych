{extends file="main.tpl"}

{block name=content}

<h2 class="content-head is-center">Rejestracja do systemu</h2>	

<form action="{$conf->action_url}register" method="post">
	<fieldset>
	<div class="row gtr-uniform gtr-50">
        <div class="col-12 col-6-xsmall">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" placeholder="Hasło" /><br />
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_repeat_pass">Powtórz hasło: </label>
			<input id="id_repeat_pass" type="password" name="repeat_pass" placeholder="Powtórz hasło" /><br />
		</div>
        <div class="col-12 col-6-xsmall">
			<label for="id_email">Email: </label>
			<input id="id_email" type="email" name="email" placeholder="Email" /><br />
		</div>
        <div class="col-12 col-6-xsmall">
			<label for="id_phone_number">Numer telefonu: </label>
			<input id="id_phone_number" type="phone_number" name="phone_number" placeholder="Phone Number" /><br />
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Zarejestruj się" class="primary" /> <a href="{$conf->action_url}login" class="button">Wróć</a></li>
            </ul>    
		</div>
	</div>
	</fieldset>
</form>	

{/block}