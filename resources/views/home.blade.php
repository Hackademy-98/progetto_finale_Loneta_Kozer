<x-layout>
  @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>
  @endif
  <body>
    
  
  <header class="headerCustom">
    <div class="container-fluid">
      <div class="row h-100">
{{--  lato sinistro         --}}
        <div class="col-12 col-md-4 leftCol d-flex justify-end">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="fc-p"> "Suona la Melodia della Tua Anima con i Nostri Strumenti"</p>
              </div>
              <div class="carousel-item">
                <p class="fc-p">"Libera il Tuo Potenziale Musicale con i Nostri Strumenti</p>                          
              </div>
              <div class="carousel-item">
                <p class="fc-p">Affina il Tuo Stile: Esplora il Nostro Mondo di Strumenti Musicali</p>
              </div>
            </div>
          </div>
        </div>
{{--  imagine a destra        --}}
        <div class="col-12 col-md-8 rightCol">
          
        </div>
        
      </div>
    </div>
    
  </header>
</body>
</x-layout>