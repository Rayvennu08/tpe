{include file="header.tpl"}

<h2>{$titulo}</h2>


  <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h6 class="card-subtitle">Videojuego:</h6>
      <h5 class="card-title">{$game->juego_name}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Empresa: {$game->id_brand}</h6>
      <h6 class="card-subtitle">Sinopsis/Descripcion:</h6>
      <p class="card-text">{$game->sinopsis}</p>
    </div>
  </div>


<a href="gameList" type="button" class='btn btn-primary ml-auto'>Volver</a>
{include file="footer.tpl"}