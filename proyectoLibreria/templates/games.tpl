{include file="header.tpl"}

<h1>{$titulo}</h1>

<div>
    <form action="Filtrar" method="POST">
        <input type="hidden" name="brand" id="">
        <select name="brand" id="brand">
            <option value="0">Seleccione la empresa</option>
            {foreach from=$brands item=$brand}
                <option value="{$brand->id_brand}">{$brand->brand_name}</option>
            {/foreach}
        </select>
        <button type="submit" class='btn btn-primary ml-auto'>Filtrar</button>
    </form> 
</div>

<div>
    <p style="">↶ Pulsa aqui para insertar tu videojuego favorito</p>
    <a href="add" type='button' class='btn btn-primary ml-auto'>Agregar videojuego</a>
</div>

<div>
    <table class="table table-striped">
        <thead bgcolor='#BFBFBF'>
            <td style="font-weight: bold;">Titulo</td>
            <td style="font-weight: bold;">Calificacion</td>
            <td style="font-weight: bold;">Empresa</td>
            <td style="font-weight: bold;">Eliminar item</td>
            <td style="font-weight: bold;">Ver item</td>
            <td style="font-weight: bold;">Editar item</td>
        </thead>
        <tbody>
            {foreach from=$games item=$game}
                <tr class="table-info">
                    <td style="font-weight: 600;">{$game->juego_name}</td>
                    <td>{$game->calificacion}</td>
                    {foreach from = $brands item = $brand}
                        {if $brand->id_brand == $game->id_brand}
                            <td>{$brand->brand_name}</td>
                        {/if}
                    {/foreach}
                    <td><a href='delete/{$game->id_juego}'type='button' class="btn btn-danger">Eliminar</button></td>
                    <td>
                        <a href="ver_juego/{$game->id_juego}" type='button' class='btn btn-primary ml-auto'>VER</a>
                    </td>
                    <td>
                        <a href='editar/{$game->$id_juego}' type='button' class="btn btn-success">Editar</button>
                    </td>
                </tr>
            {{/foreach}}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}