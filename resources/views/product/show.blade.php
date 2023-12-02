<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">{{ $product->name }}</h1>
            </div>
            <div class="col-12 col-md-6 justify-content-center">
            <img src="{{Storage::url($product->img)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-evenly">
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
            </div>
    
        </div>
    </div>
</x-layout>