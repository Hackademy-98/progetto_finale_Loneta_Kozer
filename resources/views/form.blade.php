<x-layout>
    <div class="container my-5">
        <div class="row justify-center">
            <div class="col-12">
                <h1 class="text-center">Contact-us</h1>
            </div>
            <div class="col-8">
                <form method="POST" action="{{route('send.email')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input name="username" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                      </div>
                  
                    <div class="mb-3">
                        <label class="form-label" for="exampleCheck1">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   
</x-layout>