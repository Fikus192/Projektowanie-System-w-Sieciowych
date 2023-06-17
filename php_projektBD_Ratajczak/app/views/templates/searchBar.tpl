<div class="col-6 col-12-xsmall" style="width:250px; margin-left:20px;">
    <select name="typeSelect" id="typeSelect">
        <option value="0">Typ:</option>
        {if !empty($typesData)}
            {foreach $typesData as $type}
                <option value={$type}>{$type}</option>
            {/foreach}
        {/if}
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="modelSelect" id="modelSelect">
        <option value="0">Model:</option>
        {if !empty($modelsData)}
            {foreach $modelsData as $model}
                <option value={$model}>{$model}</option>
            {/foreach}
        {/if}
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="productionDateSelect" id="productionDateSelect">
        <option value="0">Data Prod.:</option>
        {if !empty($productionDatesData)}
            {foreach $productionDatesData as $productionDate}
                <option value={$productionDate}>{$productionDate}</option>
            {/foreach}
        {/if}
    </select>
</div>
<div class="col-6 col-12-xsmall" style="width:250px; margin-left:30px;">
    <select name="priceSelect" id="priceSelect">
        <option value="0">Cena:</option>
        {if !empty($pricesData)}
            {foreach $pricesData as $price}
                <option value={$price}>{$price}</option>
            {/foreach}
        {/if}
    </select>
</div>
<button class="button" style="width:250px; height:59px; margin-left:150px;" type="submit" name="buttonValue" value="search">Szukaj</button>
<button class="button primary" style="width:250px; height:59px; margin-left:20px;" type="submit" name="buttonValue" value="reset">Resetuj</button>
