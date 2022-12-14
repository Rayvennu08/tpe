<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empresas y videojuegos</title>
        <!--Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                        <a class="navbar-brand" href="brandList">Empresas</a>
                        {if !isset($smarty.session.USER_ID)}
                            <a class="navbar-brand" href="login">Login</a>
                        {else} 
                            <a class="navbar-brand" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
                        {/if}
                        <a class="navbar-brand" href="gameList">Ver juegos</a>
                </div>
            </nav>
        </header>
        <!-- inicio main container -->
        <div>