<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-black">
  <div class="container-fluid d-flex justify-content-between">
        <a href="{{ route('homepage') }}" class="d-md-none d-block">
            <img src="/media/logoNice.png" class="logo" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex justify-content-center d-md-block d-none">
                <a href="{{ route('homepage') }}">
                    <img src="/media/logodt3.png" class="logo" alt="">
                </a>
            </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Prodotti</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            I Nostri Progetti
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('projects.poseidonia') }}">Poseidonia</a></li>
            <li><a class="dropdown-item" href="{{ route('projects.sigarette') }}">Sigarette</a></li>
            <li><a class="dropdown-item" href="{{ route('projects.mostra') }}">Mostra</a></li>
            <li><a class="dropdown-item" href="{{ route('projects.purificatore') }}">Purificatore</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contattaci</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>