<x-layout>
    <div class="container">
        <div class="row">
            @if (session('success'))
            <div class="col-12">
                <div class="alert alert-success">
                    <p>{{session('success')}}</p>

                </div>
            </div>
            @endif
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-12 col-md-6 d-flex justify-content-around">
                        <x-card :product="$product"/>
                    </div>
                        
                    @endforeach
                </div>
            </div>
          
        </div>
    </div>
</x-layout>