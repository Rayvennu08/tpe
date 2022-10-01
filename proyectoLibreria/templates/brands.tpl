{include file="header.tpl"}

<h1>{$title}</h1>
<table>
    <thead>
        <td bgcolor='#BFBFBF' style="font-weight: bold;">Empresas</td>
    </thead>
    <tbody>
        {foreach from=$brands item=$brand}
            <tr>
                <td bgcolor='#DEB887' style="font-weight: 600;"><a href="{$brand->brand_name}">{$brand->brand_name}</a></td>
            </tr>
        {{/foreach}}
    </tbody>
</table>

{include file="footer.tpl"}