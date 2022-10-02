{include file="header.tpl"}
<form action="post">
    <h5>{$login}</h5>
    
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">{$user}</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">{$pass}</label>
    </div>

    <div>
        <button class="btn">Login</button>
    </div>
</form>
{include file="footer.tpl"}