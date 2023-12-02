
    <div class="card">
        <img src="{{ Storage::url($product->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->price}}</p>
          <p class="text-end">{{$product->user->name}}</p>
          <a href="{{route('product.show',compact('product'))}}"class="btn btn-primary">Detail</a>
          @if (Route::currentRouteName() == 'user.home')
          <a href="{{ route('product.edit',compact("product"))}}"class="btn btn-warning">Edit</a>
    <form action="{{route('product.destroy',compact('product'))}}" method="POST">
      @csrf
      @method('delete')
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
          @endif
        </div>
      </div>