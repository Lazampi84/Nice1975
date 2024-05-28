
 <div class="container-fluid bg-dark my-1 p-3">
     <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top bg-body-tertiary">
         <div class="col-12 mb-3 d-flex justify-content-center flex-column align-items-center">
             <a href="{{ route('homepage') }}" class="link-body-emphasis text-decoration-none">
                 <div class="d-flex flex-column justify-content-center align-items-center">
                     <img src="/media/logoNice.png" class="logoFooter" alt="">
                     <li class="list-unstyled">
                         <i> © Claudia Zampini 2024</i>
                     </li>
                 </div>
             </a>
         </div>


         <div class="col-12 mb-3 text-center">
             <h5 class="tx-1">Sessioni</h5>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2"><a href="{{ route('homepage') }}"
                         class="nav-link p-0 text-body-secondary font-dosis">Home</a></li>
                 <li class="nav-item mb-2"><a href="{{ route('products.index') }}"
                         class="nav-link p-0 text-body-secondary font-dosis">Prodotti</a></li>
                 <li class="nav-item mb-2"><a href="{{ route('contattaci') }}"
                         class="nav-link p-0 text-body-secondary font-dosis">Contatti</a></li>
             </ul>
         </div>

         <div class="col-12 mb-3 text-center">
             <h5 class="tx-1">Info</h5>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-body-secondary font-dosis">Privacy policy</a></li>
                 <li class="nav-item mb-2"><a href=""
                         class="nav-link p-0 text-body-secondary font-dosis">Copyright</a></li>
             </ul>
         </div>

         <div class="col-12 mb-3 text-center">
             <h5 class="tx-1">Seguici sui Social</h5>
             <ul class="nav flex-column">
                 <li class="nav-item mb-2 display-5"><a href="https://www.instagram.com/nice1975genova?igsh=cGlibW55bW1uZjN2" target="_blank"
                         class="nav-link p-0 text-body-secondary font-dosis">
                         <i class="bi bi-instagram tx-acc"></i>
                     </a></li>
             </ul>
         </div>
     </footer>
 </div>