{include file="header.tpl"}
<table class="table">
    <thead>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
    </thead>

    <tbody>
        {foreach from=$games item=$game}
                <tr>
                    <td><a href="show.php?id=<?php echo ?>
                    <td>{$game->calificacion}</td>
                    <td>{$game->brand_name}</td>
                </tr>
        {/foreach} 
    </tbody>
</table>
{include file="footer.tpl"}