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
                    <p style="color:teal; font-weight: 600;">
                        {$brand->brand_name}
                    </p>
                    </td>
            </tr>
        {{/foreach}}
    </tbody>
</table>
{include file="footer.tpl"}