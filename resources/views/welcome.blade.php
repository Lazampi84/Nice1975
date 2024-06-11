<x-layout title="Nice 1975">
    <div class="container-fluid d-flex justify-content-center">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <h1 class="text-center p-5 mt-5 title">NICE 1975</h1>
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
