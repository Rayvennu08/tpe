{include file="header.tpl"}
<form method="POST" action="validate">
    <h5>{$login}</h5>
    
    <div class="form-group">
        <label for="email">{$email}</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="password">{$pass}</label>
        <input type="password" class="form-control" name="password">
    </div>

    {if $error} 
        <div class="alert alert-danger mt-3">
            {$error}
        </div>
    {/if}

    <div>
        <button class="btn btn-primary ml-auto">Login</button>
    </div>
</form>
{include file="footer.tpl"}