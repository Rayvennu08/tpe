{include file="header.tpl"}

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

<table class="table table-striped">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <th>Ver item</th>
        {if isset($smarty.session.USER_ID)}
            <th>Eliminar item</th>
            <th>Editar item</th>
        {/if}
    </thead>

    <tbody>
        {foreach from=$games item=$game}
                <tr class="table-info">
                {foreach from = $brands item = $brand}
                    {if $brand->id_brand == $game->id_brand}
                        <td>{$brand->brand_name}</td>
                    {/if}
                {/foreach}
                    <td>{$game->juego_name}</td>
                    <td>{$game->calificacion}</td>
                    {if isset($smarty.session.USER_ID)}
                        <td>                        
                            <a href="/ver_juego/{$game->id_juego}" type='button' class='btn btn-primary ml-auto'>Ver</a>
                        </td>
                        <td>
                            <a href="delete/{$game->id_juego}" type='button' class="btn btn-danger">Eliminar</a>
                        </td>
                        
                        <td>
                            <a href="editar/{$game->id_juego}" type='button' class="btn btn-success">Editar</a>
                        </td>
                    {else}
                        <td>                        
                            <a href="ver_juego/{$game->id_juego}" type='button' class='btn btn-primary ml-auto'>Ver</a>
                        </td>
                    {/if}
                </tr>
        {/foreach} 
    </tbody>
</table>

<a href="gameList" type="button" class='btn btn-primary ml-auto'>Volver</a>

{include file="footer.tpl"}