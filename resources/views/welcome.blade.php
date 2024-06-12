<x-layout title="Nice 1975">
    <div class="container-fluid d-flex justify-content-center mt-5">
        <div class="row mt-5 ">
            <div class="col-12 mt-5">
                <img class="logoOrizz mt-5" src="/media/nice.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container my-5 rounded">
        <div class="row">
            <div class="col-12 text-white">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <x-description></x-description>
    <x-sezsquadra></x-sezsquadra>
    <x-sezprogetti></x-sezprogetti>
</x-layout>
