{include file="header.tpl"}

<h1 style="text-align: center;">{$titulo}</h1>

<form action="{$accion}" method="POST" style="text-align: center;">
    {if $accion == "Mandar_BD"}
        <div>
            <input type="text" name="id" id="" value="" hidden>
        </div>

        <div>
            <label for="title">Videojuego:</label>
            <input type="text" class="form-label" name="title" id="" value="">
        </div>

        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" class="form-label" name="qualification" id="" value="">
        </div>

        <div>
            <label for="sinopsis">Sinopsis:</label>    
            <input type="text" class="form-label" name="sinopsis" id="" value="">
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

    {elseif $accion == "modificar"}
        <div>
            <input type="text" name="id" id="" value="{$juego->id_juego}" hidden>
        </div>

        <div>
            <label for="title">Videojuego:</label>
            <input type="text" name="title" id="" value="{$juego->juego_name}">
        </div>

        <div>
            <label for="qualification">Calificacion:</label>
            <input type="text" name="qualification" id="" value="{$juego->calificacion}">
        </div>

        <div>
            <label for="sinopsis">Sinopsis:</label> 
            <textarea id="" name="sinopsis" rows="4" cols="50" >
              {$juego->sinopsis}
            </textarea>
        </div>

        <div>
            <label for="brand">Empresa:</label>
            <input type="hidden" name="brand" id="">
            <select name="brand" id="brand">
                <option value="{$empresaJuego->id_brand}">{$empresaJuego->brand_name}</option>
                {foreach from=$empresas item=$empresa}
                    <option value="{$empresa->id_brand}">{$empresa->brand_name}</option>
                {/foreach}
            </select>
        </div>

        <div>
            <button type="submit" class='btn btn-primary ml-auto'>{$boton}</button>
            <a href="gameList" type='button' class='btn btn-primary ml-auto'>Cancelar</a>
        </div>
            
    {/if}
</form>
{include file='footer.tpl'}