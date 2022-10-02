{include file="header.tpl"}
<h1>{$title}</h1>

{include file="form_game.tpl"}

<table class="table table-striped">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Finalizar item</td>
        <td style="font-weight: bold;">Borrar item</td>
    </thead>
    <tbody>
        {foreach from=$games item=$game}
            <tr class="table-info">
                <td style="font-weight: 600;">{$game->juego_name}</td>
                <td>{$game->calificacion}</td>
                <td>{$game->brand_name}</td>
                <td><a href='delete/'type='button' class="btn btn-success">Finalizar</button></td>
                <td><a href='finalize/' type='button' class="btn btn-danger">Eliminar</button></td>
            </tr>
        {{/foreach}}
    </tbody>
</table>
{include file="footer.tpl"}