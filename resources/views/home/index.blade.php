@extends('layouts.master')

@section('title','Home')

@section('container')

@include('layouts.partials.slider')


<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4" >
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('frontend/images/img_1.jpg');">
          <div class="text">
            <h2 class="h5 text-white">5 Fakta Menarik Sejarah Liverpool</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
            {{-- <iframe width="300" height="300" src="https://www.youtube.com/embed/ahREMVp1Qis" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('frontend/images/img_2.jpg');">
          <div class="text">
            <h2 class="h5 text-white">sad</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      {{-- <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('frontend/images/img_3.jpg');">
          <div class="text">
            <h2 class="h5 text-white">sad</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p> --}}

            <div class="col-md-6 col-lg-4" >
              <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('frontend/images/img_1.jpg');">
                <div class="text">
                  <h2 class="h5 text-white">WEB INFORMASI LIVERPOOL F.C.</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-blocks-vs site-section bg-light">
  <div class="container">

    

    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('frontend/images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">

      <div class="row align-items-center">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
@foreach ($lastgame as $lg)
    

          <div class="text-center text-lg-left">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                <img src="{{ URL::asset('frontend/images/Liverpool.png')}}" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3 class="h5 mb-0 text-black">Liverpool</h3>
                <span class="text-uppercase small country text-black">Britania raya</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
          <h4 class="mb-2"><small class="text-uppercase text-black font-weight-bold">Latest match</small></h4>
          <div class="d-inline-block">
            
            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">{{$lg->liga}}</small></p>
            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">{{$lg->score}}</span></div>
            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{$lg->date}}</small></p>
          </div>
        </div>

        <div class="col-md-12 col-lg-4 text-center text-lg-right">
          <div class="">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                <img src="{{ URL::asset($lg->logo)}}" height="60" width="60">
              </div>
              <div class="text order-1">
                <h3 class="h5 mb-0 text-black">{{$lg->team_musuh}}</h3>
                <span class="text-uppercase small country text-black">{{$lg->negara}}</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    @endforeach
    <div class="row">
      <div class="col-md-12">
        
        <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Most Recent Matches</h2>
        <div class="site-block-tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              {{-- <a class="nav-link active" id="pills-home-tab" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">Match</a> --}}
            </li>
          
          </ul>
          
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              @foreach($gamer as $tester)
              <div class="row align-items-center">
                <div class="col-md-12">


                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
                      
                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="{{ URL::asset('frontend/images/Liverpool.png')}}" alt="Image" class="img-fluid">
                          </div>
                         
                          <div class="text">
                            
                            <h3 class="h5 mb-0 text-black">Liverpool</h3>
                            <span class="text-uppercase small country">Britania Raya</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">{{ $tester->score }}</span></div>
                      </div>
                    </div>
                    
                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="{{URL::asset($tester->logo) }}" width="40" height="40"  >
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">{{ $tester->team_musuh }}</h3>
                            <span class="text-uppercase small country">{{ $tester->negara }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                
                  <!-- END row -->

                  
               
                  <!-- END row -->

               
            </div>
          </div>
        </div>
      </div>
                  <!-- END row -->

                

                  <!-- END row -->

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/hero_bg_3.jpg');"  data-stellar-background-ratio="0.5">

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-white">More Game Highlights</h2>
      </div>
    </div>

    <div class="row">
      <div class="nonloop-block-13 owl-carousel">
        {{-- mulai dari sini --}}
        {{-- mulai card --}}
    <div class="item">
      <!-- uses .block-12 -->
      <div class="block-12">
        <figure>
          <img src="{{ URL::asset('frontend/images/img_1.jpg')}}" width="250" height="250">
        </figure>
        <div class="text">
          <span class="meta">May 20th 2018</span>
          <div class="text-inner">
            <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
          </div>
        </div>
      </div>
    </div>
{{-- selesai card --}}
    
{{-- end of more highligt --}}
  </div>
    </div>
  </div>

</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Latest News</h2>
      </div>
    </div>
    <div class="row">
      @foreach($news as $nw)
      <div class="col-md-6 col-lg-4">
        <div class="post-entry">
          <div class="image">
          <img src="{{ asset( $nw->gambar ) }}" alt="Image" class="img-fluid">
          </div>
          <div class="text p-4">
            <h2 class="h5 text-black"><a href="{{ route('news.isi_berita', $nw->id) }}">{{$nw->judul}}</a></h2>
            <span class="text-uppercase date d-block mb-3"><small>{{$nw->created_at}}</small></span>
            <p class="mb-0"><a href="{{ route('news.isi_berita', $nw->id) }}" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
    
      @endforeach
      
    </div>
  </div>
</div>

@include('layouts.partials.footer')

@endsection

