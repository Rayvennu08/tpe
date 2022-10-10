{include file="header.tpl"}

<h1>{$titulo}</h1>

<div>
    <p>↶ Pulsa aqui para insertar tu videojuego favorito</p>
    <a href="add" type='button' class='btn btn-primary ml-auto'>Agregar videojuego</a>
</div>

<div>
    <form action="Filtrar" method="POST">
        <input type="hidden" name="brand" id="">
        <select name="brand" id="brand">
            {foreach from=$brands item=$brand}
                <option value="{$brand->id_brand}">{$brand->brand_name}</option>
            {/foreach}
        </select>
        <button type="submit" class='btn btn-primary ml-auto'>Filtrar</button>
    </form> 
</div>


<div class="tabla">
    <table class="table table-striped">
        <thead bgcolor='#BFBFBF'>
            <th>Titulo</th>
            <th>Calificacion</th>
            <th>Empresa</th>
            <th>Ver item</th>
            <th>Eliminar item</th>
            <th>Editar item</th>
        </thead>
        <tbody>
            {foreach from=$games item=$game}
                <tr class="table-info">
                    <td class="game">{$game->juego_name}</td>
                    <td>{$game->calificacion}</td>
                    {foreach from = $brands item = $brand}
                        {if $brand->id_brand == $game->id_brand}
                            <td>{$brand->brand_name}</td>
                        {/if}
                    {/foreach}
                    <td>
                        <a href='ver_juego/{$game->id_juego}' type='button' class='btn btn-primary ml-auto'>VER</a>
                    </td>

                    <td>
                        <a href='delete/{$game->id_juego}' type='button' class="btn btn-danger">Eliminar</a>
                    </td>
                    
                    <td>
                        <a href='editar/{$game->$id_juego}' type='button' class="btn btn-success">Editar</a>
                    </td>
                </tr>
            {{/foreach}}
        </tbody>
    </table>
</div>

{include file="footer.tpl"}