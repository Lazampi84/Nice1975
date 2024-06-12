<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary shadow fs-5">
    <div class="container-fluid d-flex justify-content-between">
        <a href="{{ route('homepage') }}" class="d-md-none d-block">
            <img src="/media/logoNice.png" class="logo d-none d-md-block" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse modaleNav" id="navbarNav">
            <div class="d-flex justify-content-center d-md-block d-none ">
                <a href="{{ route('homepage') }}">
                    <img src="/media/logoNice.png" class="logo d-md-block d-none mb-1" alt="">
                </a>
            </div>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('products.index') }}">Prodotti</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('projects.progetti') }}">I nostri Progetti</a>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle nav-link mx-2 " data-bs-toggle="dropdown"
                            aria-expanded="false">Le Nostre Collaborazioni</button>
                        <ul class="dropdown-menu">
                            <li><a class="nav-item fs-5 linkNav" href="https://www.griffegenova.com/">Griffe Home</a></li>
                            <li><a class="nav-item fs-5 linkNav"
                                    href="https://www.instagram.com/casa.nice.bogliasco?igsh=cXg3dmRzcDFjb2du">Casa
                                    Nice</a></li>
                        </ul>
                    </li>
                </ul>
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('contattaci') }}">Contattaci</a>
                </li>
        </div>
    </div>
</nav>
