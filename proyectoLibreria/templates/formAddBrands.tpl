{include file="header.tpl"}

<h1>{$titulo}</h1>

<form action="{$accion}" method="POST">
    {if $accion == "save_brand"}
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>
    
        <div>
            <label for="brand">Empresa:</label>
            <input type="text" name="brand" id="">

        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
            <a href="brandList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
    
        {elseif $accion == "modificar_empresa"}
            <div>
            <input type="text" name="id" id="" value="{$brand->id_brand}" hidden>
            </div>
            <div>
                <label for="brand">Empresa:</label>
                <input type="text" name="brand" id="" value="{$brand->brand_name}">
            </div>
            <div>
                <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
                <a href="brandList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
            </div>
    {/if}
</form>

{include file="footer.tpl"}