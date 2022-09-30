{include file="header.tpl"}

<h1>{$title}</h1>
<table>
    <thead>
        <td>Titulo</td>
        <td>Sinopsis</td>
        <td>Género</td>
        <td>Fecha de publicacion</td>
    </thead>
    <tbody>
        {foreach from=$books item=$book}
            <tr>
                <td bgcolor='#D8FE3F'>{$book->Titulo}</td>
                <td>{$book->Sinopsis}</td>
                <td>{$book->Genero}</td>
                <td>{$book->Fecha_pub}</td>
            </tr>
        {{/foreach}}
                
    </tbody>
</table>

{include file="footer.tpl"}