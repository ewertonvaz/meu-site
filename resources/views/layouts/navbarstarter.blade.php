    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" 
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          @if (!Route::is('root'))
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Início <span class="sr-only">(current)</span></a>
            </li>
          @endif

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desabilitado</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">Escolha</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/welcome">Boas vindas</a>
              <a class="dropdown-item" href="/about">Sobre nós</a>
              <a class="dropdown-item" href="/contact">Contato</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Digite sua pesquisa..." aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
