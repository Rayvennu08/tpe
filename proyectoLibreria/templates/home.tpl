{include file="header.tpl"}

<p>{$login}</p>

<form action='post'>
    <label for=''>{$user}</label> 
    <input type="text"> 
    <label for=''>{$pass}</label> 
    <input type="password"> 
    <button class='button'>Login</button>
</form>

{include file="footer.tpl"}