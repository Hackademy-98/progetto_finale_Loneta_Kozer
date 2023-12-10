<x-layout>
  @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>
  @endif
  <body>
    
  
  <header class="headerCustom overflow-hidden">
    <div class="container vh-100">
      <div class="row vh-100">
{{--  lato sinistro         --}}
        <div class="col-12 col-md-4 leftCol">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h2 class="fc-p"> "Suona la Melodia della Tua Anima con i Nostri Strumenti"</h2>
              </div>
              <div class="carousel-item">
                <h2 class="fc-p">"Libera il Tuo Potenziale Musicale con i Nostri Strumenti</h2>                          
              </div>
              <div class="carousel-item">
                <h2 class="fc-p">Affina il Tuo Stile: Esplora il Nostro Mondo di Strumenti Musicali</h2>
              </div>
            </div>
          </div>
        </div>
{{--  imagine a destra        --}}
<div class="container">
  <div class="row">
    <div class="col-6 col-md-6 rightCol d-flex justify-content-center flex-column">
      <img class="slideLeft" src="./media/uomoNeve.jpg" alt="">

      </div>
      <div class="col-2 col-md-6 rightCol d-flex justify-content-end">

      <img class="slideLeft" src="./media/tree2.jpg" alt="">
    

    </div>
    <span class="arrow">
      <a class="arrowButton text-success position-absolute bottom-0 end-0 pe-5" href="#target"><i class="fa-solid fa-circle-arrow-down fa-beat fs-1"></i></a>
  </span>
  </div>

</div>
        
        
      </div>
    </div>
    
  </header>
  <div class="container">
    <div class="row">
      @foreach($products as $product)
      <x-card :product="$product"/>
      @endforeach
    </div>
  </div>
 

    
</body>
</x-layout>