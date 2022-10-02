{include file="header.tpl"}
<h1>{$title}</h1>
<table class="table">
    <thead>
        <td bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</td>
    </thead>
    <tbody>
        {foreach from=$brands item=$brand}
            <tr>
                <td>
                    <a href="filtrado/{$brand->brand_name}" style="text-decoration: none; font-weight: 600;">
                        {$brand->brand_name}
                    </a>
                    </td>
            </tr>
        {{/foreach}}
    </tbody>
</table>
{include file="footer.tpl"}