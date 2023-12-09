{{-- @dump($product) --}}

<div class="col-12 col-md-6">
<div class="card t-r shadow-sm m-3 rounded-5" style="max-width: 500px">
    
            
            <img src="{{ Storage::url($product->img) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->price }}</p>
                <p class="text-end">{{ $product->user->name }}</p>
                <div class="col-12 d-block">
                <a href="{{ route('product.show', compact('product')) }}"class="btn btn-primary">Detail</a>
                
                @if ($product->categories)
                @foreach($product->categories as $category)
                <a class="btn btn-success " href="{{ route('product.filterByCategory', ['category' => $category]) }}"
                    class="text-end">{{ $category->name }}</a>
                    @endforeach
                    @endif
                    @if (Route::currentRouteName() == 'user.home')
                    <a href="{{ route('product.edit', compact('product')) }}"class="btn btn-warning">Edit</a>
                    <form action="{{ route('product.destroy', compact('product')) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    @endif
                </div>
                </div>
            </div>
        
    </div>
    