{include file="header.tpl"}

  <h2>{$titulo}</h2>


  <div class="card">
    <div class="card-body">
      <h6 class="card-subtitle">Videojuego:</h6>
      <h5>{$game->juego_name}</h5>
      <h6 class="card-subtitle">Sinopsis/Descripcion:</h6>
      <p class="card-text">{$game->sinopsis}</p>
      <h6 class="card-subtitle mb-2 text-muted">Empresa:
        {foreach from = $brands item = $brand}
          {if $brand->id_brand == $game->id_brand}
              <td>{$brand->brand_name}</td>
          {/if}
        {/foreach}
      </h6>
    </div>
  </div>


  <a href="gameList" type="button" class='btn btn-primary ml-auto'>Volver</a>

{include file="footer.tpl"}