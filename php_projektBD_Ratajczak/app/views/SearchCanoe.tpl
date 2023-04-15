{extends file="main.tpl"}

{block name=content}

<div style="width: 90%; margin: 2em auto;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: {$user->login}</span>
</div>

<form method="post" action="{$conf->action_url}searchCanoe">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="model" value="{$searchForm->model}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a class="pure-button button-success" href="{$conf->action_root}canoeNew">+ Nowy kajak</a>
</div>	

<table id="tab_canoe" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Typ</th>
		<th>Model</th>
		<th>Data prod.</th>
		<th>Cena</th>
		<th>Opcje</th>
	</tr>
</thead>
<tbody>
{foreach $canoe as $c}
{strip}
	<tr>
		<td>{$c["type"]}</td>
		<td>{$c["model"]}</td>
		<td>{$c["production_date"]}</td>
		<td>{$c["price"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}canoeEdit/{$p['id_canoe']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}canoeDelete/{$p['id_canoe']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error bottom-margin{/if} {if $msg->isWarning()}info bottom-margin{/if} {if $msg->isInfo()}info bottom-margin{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}
	
{/block}

</div>

{/block}
