<x-layout>
  @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>
  @endif

    <header class="header">
         <div class="container">
            <div class="row">
                <div class="col-6 text-succes ">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <p> VENDI IL TUO STRUMENTO MUSICALE</p>
                          </div>
                          <div class="carousel-item">
                           <p>COMPRALO DA NOI!</p>                          
                        </div>
                          <div class="carousel-item">
                            <p>SPENDI IN MODO INTELLIGENTE</p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </header>
</x-layout>