{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: {$user->login}</span>
</div>

<form method="post" action="{$conf->action_url}canoeList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Model" name="model" value="{$searchForm->model}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a class="pure-button button-success" href="{$conf->action_root}canoeNew">+ Nowy kajak</a>
</div>	

<table id="tab_canoe" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>typ</th>
		<th>model</th>
		<th>data prod.</th>
		<th>cena</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $canoe as $c}
{strip}
	<tr>
		<td>{$c["type"]}</td>
		<td>{$c["model"]}</td>
		<td>{$c["productiondate"]}</td>
		<td>{$c["price"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}canoeEdit/{$p['ID_Canoe']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}canoeDelete/{$p['ID_Canoe']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
