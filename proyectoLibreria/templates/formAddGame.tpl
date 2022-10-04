{include file="header.tpl"}

<h1>{$titulo}</h1>

<form action="{$accion}" method="POST">
    {if $accion == "Mandar_BD"}
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>
        <div>
            <label for="title">Videojuego:</label>
            <input type="text" name="title" id="" value="">
        </div>
        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" name="qualification" id="" value="">
        </div>
        <div>
            <label for="brand">Empresa:</label>
            <input type="hidden" name="brand" id="">
            <select name="brand" id="brand">
                <option value="0">Seleccione la empresa</option>
                {foreach from=$brands item=$brand}
                    <option value="{$brand->id_brand}">{$brand->brand_name}</option>
                {/foreach}
            </select>
        </div>
                
        <div>
            <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
            <a href="gameList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>

    {elseif $accion == "editar"}
        <div>
            <input type="text" name="id" id="" value="{$game->id_juego}" hidden>
        </div>

        <div>
            <label for="title">Videojuego:</label>
            <input type="text" name="title" id="" value="{$game->juego_name}">
        </div>

        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" name="qualification" id="" value="{$game->calificacion}">
        </div>

        <div>
            <label for="genero">Empresa:</label>
            <input type="hidden" name="brand" id="">
            <select name="brand" id="brand">
                <option value="{$brandGame->id_brand}">{$brandGame->brand_name}</option>
                {foreach from=$brands item=$brand}
                    <option value="{$brand->id_brand}">{$brand->brand_name}</option>
                {/foreach}
            </select>
        </div>

        <div>
            <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
            <a href="gameList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
            
    {/if}


</form>