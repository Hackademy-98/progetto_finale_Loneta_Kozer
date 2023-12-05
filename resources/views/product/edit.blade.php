<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Update product</h1>
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

                    {{-- <label class="form-label" for="category">Category</label>
                    <select class="form-select" id="category" name="category">
                        <option selected>Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"@selected($category == $product->category) >{{ $category->name }}</option>
                        @endforeach
                    </select> --}}

                    <div class="row my-4">
                      <div class="col-12">
                          <h5>Category</h5>
                      </div>
                      @foreach ($categories as $category)
                          <div class="col-6 col-md col-lg-2 form-check">
                              <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                  id="category" name="category[]" @checked($product->categories->contains($category))>
                              <label class="form-check-label" for="flexCheckDefault">
                                  {{ $category->name }}
                              </label>
                          </div>
                      @endforeach


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