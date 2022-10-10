{include file="header.tpl"}

<h1>{$title}</h1>

<a href="agregar_empresa" type='button' class='btn btn-primary ml-auto'>Agregar empresa</a>

<table class="table">
    <thead>
        <tr>
            <th bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</th>
            <th>Ver empresa</th>
            <th>Eliminar empresa</th>
            <th>Editar empresa</th>
        </tr>
    </thead>
    
    <tbody>
        {foreach from=$brands item=$brand}
            <tr>
                <td>
                    <p style="color:teal; font-weight: 600;">
                        {$brand->brand_name}
                    </p>
                </td>

                <td>
                    <a href="ver_juego/{$brand->id_brand}" type='button' class='btn btn-primary ml-auto'>VER</a>
                </td>

                <td>
                    <a href='delete/{$brand->id_brand}'type='button' class="btn btn-danger">Eliminar</button></td>
                </td>

                <td>
                    <a href='editar/{$brand->$id_brand}' type='button' class="btn btn-success">Editar</button>
                </td>

            </tr>
        {{/foreach}}
    </tbody>
</table>
{include file="footer.tpl"}