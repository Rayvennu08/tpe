{include file="header.tpl"}
<h2>{$titulo}</h2>

{foreach from=$games item=$game}
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Videojuego:{$game->juego_name}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Empresa: {$game->id_brand}</h6>
      <p class="card-text">Aca iria la descripcion del videojuego</p>
    </div>
  </div>
{/foreach}

<a href="gameList" type="button" class='btn btn-primary ml-auto'>Volver</a>
{include file="footer.tpl"}