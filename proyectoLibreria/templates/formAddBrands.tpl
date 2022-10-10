{include file="header.tpl"}

<h1>{$titulo}</h1>

<form action="{$accion}" method="POST">
    {if $accion == "Mandar_BD"}
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>
    
        <div>
            <label for="brand">Empresa:</label>
            <input type="text" name="brand" id="">
        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
            <a href="brands" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
    
        {elseif $accion == "editar"}
        
            <div>
                <label for="brand">Empresa:</label>
                <input type="hidden" name="brand" id="">
                
            </div>
            <div>
                <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
                <a href="games" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
            </div>
    {/if}
</form>

{include file="footer.tpl"}