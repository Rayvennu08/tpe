{include file="header.tpl"}

<h1>{$title}</h1>

{if isset($smarty.session.USER_ID)}
    <a href="agregar_empresa" type='button' class='btn btn-primary ml-auto'>Agregar empresa</a>
{/if}

<table class="table">
    <thead>
        <tr>
            <th bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</th>
            <th>Ver empresa</th>
            {if isset($smarty.session.USER_ID)}
                <th>Eliminar empresa</th>
                <th>Editar empresa</th>
            {/if}
        </tr>
    </thead>

    {if isset($smarty.session.USER_ID)}
        <div class="alert alert-dark mt-3">
            <p>Para eliminar una empresa primero debe borrar todos los juegos con esa marca. (ESTO ES POR SEGURIDAD DE LA BASE DE DATOS).</p>
        </div>
    {/if}
    
    <tbody>
        
        {foreach from=$brands item=$brand}
            <tr>
                <td>
                    <p>
                        {$brand->brand_name}
                    </p>
                </td>

                <td>
                    <a href="ver_empresa/{$brand->id_brand}" type='button' class='btn btn-primary ml-auto'>Ver</a>
                </td>

                {if isset($smarty.session.USER_ID)}
                    <td>
                        <a href='delete_brand/{$brand->id_brand}'type='button' class="btn btn-danger">Eliminar</button></td>
                    </td>

                    <td>
                        <a href='editar_empresa/{$brand->id_brand}' type='button' class="btn btn-success">Editar</button>
                    </td>
                {/if}
            </tr>
        {{/foreach}}
    </tbody>
</table>
{include file="footer.tpl"}