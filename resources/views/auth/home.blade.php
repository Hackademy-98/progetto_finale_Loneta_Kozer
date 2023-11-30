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
            @foreach ($products as $product)
            <div class="col-3">
                <x-card :product="$product"/>
            </div>
                
            @endforeach
        </div>
    </div>
</x-layout>