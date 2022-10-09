{include file="header.tpl"}
<table class="table">
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
    </thead>

    <tbody>
        {foreach from=$games item=$game}
                <tr>
                    <td><a href="show.php?id=<?php echo ?>
                    " style="text-decoration: none; color: rgb(159, 16, 25);">{$game->juego_name}</a></td>
                    <td>{$game->calificacion}</td>
                    <td>{$game->brand_name}</td>
                </tr>
        {/foreach} 
    </tbody>
</table>
{include file="footer.tpl"}