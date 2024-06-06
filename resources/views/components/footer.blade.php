
 <div class="container-fluid d-block bg-dark my-1 p-3 fs-6">
     <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top bg-body-tertiary">
         <div class="col-12 mb-3 d-flex justify-content-center flex-column align-items-center">
             <a href="{{ route('homepage') }}" class="link-body-emphasis text-decoration-none">
                 <div class="d-flex flex-column justify-content-center align-items-center">
                     <img src="/media/logoNice.png" class="logoFooter" alt="">
                     <li class="list-unstyled">
                         <i class="fs-7"> © By LaZampy2024</i>
                     </li>
                 </div>
             </a>
         </div>


         <div class="col-12 mb-3 text-center">
             <h3 class="tx-1">Sessioni</h3>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2"><a href="{{ route('homepage') }}"
                         class="nav-link p-0 text-body-secondary">Home</a></li>
                 <li class="nav-item mb-2"><a href="{{ route('products.index') }}"
                         class="nav-link p-0 text-body-secondary">Prodotti</a></li>
                 <li class="nav-item mb-2"><a href="{{ route('contattaci') }}"
                         class="nav-link p-0 text-body-secondary">Contatti</a></li>
             </ul>
         </div>

         <div class="col-12 mb-3 text-center">
             <h3 class="tx-1">Info</h3>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-body-secondary">Privacy policy</a></li>
                 <li class="nav-item mb-2"><a href=""
                         class="nav-link p-0 text-body-secondary">Copyright</a></li>
             </ul>
         </div>

         <div class="col-12 mb-3 text-center">
             <h3 class="">Seguici sui Social</h3>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2 display-5"><a href="https://www.instagram.com/nice1975genova?igsh=cGlibW55bW1uZjN2" target="_blank"
                         class="nav-link p-0 text-body-secondary">
                         <i class="bi bi-instagram tx-acc link"></i>
                     </a></li>
             </ul>
         </div>
     </footer>
 </div>