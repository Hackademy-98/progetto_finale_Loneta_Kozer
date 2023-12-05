{{-- @dd($category->products); --}}
<x-layout>
    <div class="container">
        <div class="row">
            @foreach($category->products as $product)
            <div class="col-3">
                <div class="card">
                    <img src="{{ Storage::url($product->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">{{ $product->price }}</p>
                      @foreach($product->categories as $category)
                      <a href="{{ route('product.filterByCategory', ['category' => $category]) }}"
                          class="text-end">{{ $category->name }}</a>
                          @endforeach                    
                            <a href="{{ route('product.show', compact('product')) }}" class="btn btn-primary">Detaglio</a>
                      <a href="{{ route('product.edit', compact('product')) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('product.destroy',compact('product'))}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"class="btn btn-danger">Delete</button>

                    </form>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</x-layout>