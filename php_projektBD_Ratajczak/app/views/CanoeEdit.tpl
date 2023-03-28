{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
<form action="{$conf->action_root}canoeSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kajaka</legend>
		<div class="col-6 col-12-xsmall">
            <label for="type">Typ</label>
            <input id="type" type="text" placeholder="Typ" name="type" value="{$form->type}">
        </div>
		<div class="col-6 col-12-xsmall">
            <label for="model">Model</label>
            <input id="model" type="text" placeholder="Model" name="model" value="{$form->model}">
        </div>
		<div class="col-6 col-12-xsmall">
            <label for="productiondate">Data prod.</label>
            <input id="productiondate" type="text" placeholder="Data prod." name="productiondate" value="{$form->productiondate}">
        </div>
        <div class="col-6 col-12-xsmall">
            <label for="price">Cena</label>
            <input id="price" type="text" placeholder="Cena" name="price" value="{$form->price}">
        </div>
		<div class="col-12">
            <ul class="actions">
			    <li><input type="submit" value="Zapisz" class="primary" /></li>
			<a class="pure-button button-secondary" href="{$conf->action_root}canoeList">Powrót</a>
		</div>
	    </fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
