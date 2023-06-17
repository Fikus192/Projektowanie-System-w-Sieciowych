{extends file="main.tpl"}

{block name=content}

{include file='menu.tpl'}

<div style="width:90%; margin: 2em auto;">

<section>
    <h3>{$page_title}</h3>
        <form method="post" action="{$conf->action_url}addCanoe">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12 col-12-xsmall">
                    <input id="id_type" type="text" name="type" placeholder="Typ Kajaka:" />
                </div>
            	<div class="col-12 col-12-xsmall">
                    <input id="id_model" type="text" name="model" placeholder="Model Kajaka:" />
                </div>
				<div class="col-12 col-12-xsmall">
                    <input id="id_production_date" type="text" name="production_date" placeholder="Data Produkcji Kajaka:" />
                </div>
				<div class="col-12 col-12-xsmall">
                    <input id="id_price" type="text" name="price" placeholder="Cena Kajaka:" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Dodaj" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </form>
</section>

</div>
{/block}
