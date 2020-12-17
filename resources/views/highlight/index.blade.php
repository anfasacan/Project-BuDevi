@extends('layouts.master')

@section('title','Highlights')

@section('container')


    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/berita.jpeg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-md-12 text-center text-md-center" data-aos="fade-up" data-aos-delay="400">
                <h1 class="bg-transparent">Highlight </h1>
            </div>
        </div>
    </div>
</div>






<div class="site-section">
    <div class="container">
        <div class="row mb-5">
        {{-- @foreach($news as $berita)

          <div class="col-md-6 col-lg-4 mb-5">
          <div class="post-entry">
        
            <div class="image">
            
                <a href="{{ route('news.isi_berita', $berita->id) }}">
              <img src="{{URL::asset($berita->gambar) }}" alt="Image" class="img-fluid">
            </a>
            </div>
            <div class="text p-4">
              <h2 class="h5 text-black"><a href="{{ route('news.isi_berita', $berita->id) }}">{{ $berita->judul }}</a></h2>
              <span class="text-uppercase date d-block mb-3"></span>
              <p class="mb-0 p-new">{!! Str::limit($berita->isi_berita, 80,'...') !!}</p>
              <a href="{{ route('news.isi_berita', $berita->id) }}">Baca Selangkapnya →</a> --}}
{{-- 
            @foreach ($highlight as $hl)
            <div style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 20px;">
              <div class="card" style="width: 20rem;">
                <img src="{{ URL::asset($hl->gambar)}}" class="card-img-top" width="250" height="250" alt="...">
                <div class="card-body">
                    <h3 style="text-align:center;"><a class="text-black">{{$hl->judul}}</a></h3>
                    <h4 style="text-align:center;"><a class="text-black">Score</a></h4>
                    <h5 style="text-align:center;"><a class="text-black">Liverpool - {{$hl->musuh}}</a></h5>
                    <h4 style="text-align:center;"><a class="text-black">{{$hl->score}}</a></h4>
                  <p class="card-text">{{$hl->isi_highlight}}</p>
                </div>
              </div>
            </div>
              @endforeach --}}

            @foreach ($highlight as $hl)
            <div style="margin-left: 30px; margin-right: 30px; margin-top: 30px; margin-bottom: 30px;">
              <div class="card" style="width: 20rem;">
                <img src="{{ URL::asset($hl->gambar)}}" class="card-img-top" width="250" height="250" alt="...">
                <div class="card-body">
                  <h3 class="card-title text-black" style="text-align:center;">{{$hl->judul}}</h3>
                  <p class="card-text">{{$hl->isi_highlight}}</p>
                </div>
                <ul class="list-group list-group-flush text-black">
                  <li class="list-group-item" style="text-align:center;" ><h4>Score</h4></li>
                  <li class="list-group-item" style="text-align:center;" >Liverpool - {{$hl->musuh}}</li>
                  <li class="list-group-item" style="text-align:center;" >{{$hl->score}}</li>
                </ul>
                <div class="card-body">
                  <p class="mb-0" style="text-align:center;" ><a href="{{$hl->link_video}}" target="_blank" class="btn btn-primary btn-sm px-2 py-1 border-1 rounded-0">Watch Highlights →</a></p>
                </div>
              </div>
            </div>
              @endforeach
  
            {{-- </div>
          </div>
        </div> --}}
        {{-- @endforeach --}}

        
        </div>
        <style>
          .pagination {
          display: center;
          justify-content: center;
        }
        
        .pagination li {
          display: block;
         }
        
        </style>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        <span> <h3>{{ $highlight->links() }}</h3> </span>
                    </ul>
                </div>
            </div>
        </div>
          
      

        @endsection









