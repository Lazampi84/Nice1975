<x-layout title="Contattaci">

    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6">
                <h1 class="text-center p-2">CONTATTACI O VIENI A TROVARCI</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex mt-5 justify-content-center">
        <div class="row vw-100 justify-content-center align-item-center">
            <div class="col-12 col-md-4 text-white my-5 ms-5 justify-content-center align-item-center">
                <h3>DOVE SIAMO</h3>
                <h4>Via S. Sebastiano 30r
                <h4>16123 Genova</h4>
                <button class="btn link"><a
                        href="https://www.google.it/maps/dir//Via+di+S.+Sebastiano,+30,+16123+Genova+GE/@44.4093558,8.9329742,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x12d343e7d59304f1:0x66eed80cf7144a!2m2!1d8.9355545!2d44.409352?hl=it&entry=ttu"
                        class="fs-4 link">Indicazioni</a><i class="bi bi-geo-alt-fill ms-3 fs-3"></i>
                </button>
                <h3 class="mt-5">MAIL & TELEFONO</h3>
                <a href="" class="link">
                <h4 class="link">info@griffegenova.com</h4>
                </a>
                <h4>+39 010 86 03 599</h4>
                <h3 class="mt-5">ORARI</h3>
                <h4>Lunedì dalle 15:00 alle 18:00</h4>
                <h4>Martedì dalle 10:00 alle 18:00e</h4>
                <h4>Mercoledì dalle 10:00 alle 18:00</h4>
                <h4>Giovedì dalle 10:00 alle 18:00</h4>
                <h4>Venerdì dalle 10:00 alle 18:00</h4>
                <h4>Sabato e Domenica CHIUSO</h4>
            </div>

            <div class="col-12 col-md-4 justify-content-center align-item-center my-5">
                    <form class="p-5 shadow rounded formContatti" method="POST" action="{{route('contact.submit')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Inserisci il tuo nome completo</label>
                            <input type="text" name="username" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Inserisci la tua e-mail</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Scrivi il tuo messaggio</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btnForm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-layout>
