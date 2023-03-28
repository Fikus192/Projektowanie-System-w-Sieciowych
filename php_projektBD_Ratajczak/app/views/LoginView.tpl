{extends file="main.tpl"}

{block name=content}

<h2 class="content-head is-center">Logowanie do systemu</h2>	

<form action="{$conf->action_url}login" method="post">
	<fieldset>
	<div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
        <div class="col-6 col-12-xsmall">
			<label for="id_pass">Password: </label>
			<input id="id_pass" type="password" name="pass" placeholder="Hasło" /><br />
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Zaloguj" class="primary" /></li><br />
				<li><form action="{$conf->action_url}register" method="post"><input type="submit" value="Załóż konto" class="button" /></form></li>
			</ul>	
		</div>
	</div>
	</fieldset>
</form>	

{/block}
