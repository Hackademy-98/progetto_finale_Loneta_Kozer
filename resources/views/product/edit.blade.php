<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create product</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('product.update',compact("product"))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name"name="name" value="{{ $product->name }}">
                      @error('name') <p class="text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                        @error('description') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                    <div class="mb-3 form-check">
                      <label class="form-label" for="price">Price</label>
                      <input type="text" class="form-input" id="price"name="price" value="{{$product->price}}">
                      @error('price') <p class="text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-label" for="img">Image</label>
                        <input type="file" class="form-input" id="img" >
                        @error('img') <p class="text-danger">{{$message}}</p>@enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

  
</x-layout>