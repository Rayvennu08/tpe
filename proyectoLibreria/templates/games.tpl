{include file="header.tpl"}

<h1>{$title}</h1>
<table>
    <thead bgcolor='#BFBFBF'>
        <td style="font-weight: bold;">Titulo</td>
        <td style="font-weight: bold;">Calificacion</td>
        <td style="font-weight: bold;">Empresa</td>
    </thead>
    <tbody>
        {foreach from=$games item=$game}
            <tr>
                <td bgcolor='#5F9EA0' style="font-weight: 600;">{$game->juego_name}</td>
                <td bgcolor='#D8FE3F'>{$game->calificacion}</td>
                <td bgcolor='#2F6'>{$game->brand_name}</td>
            </tr>
        {{/foreach}}
    </tbody>
</table>

{include file="footer.tpl"}