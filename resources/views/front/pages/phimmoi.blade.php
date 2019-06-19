@extends('front.layout.default')
@section('content') 
@php( $filmbytype = \App\Film::showByType($id_type_film) )  
<div class="site-section" >
      <div class="container" style="margin-top: 45px">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Phim mới</h2>
          </div>
        </div>
        <div class="row">
        @foreach($filmbytype as $row)
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 35px;">
            <a href="#" class="unit-9">
              <div class="image" style="background-image: url({{$row['link_avt']}});"></div>
              <div class="unit-9-content">
                <h2>{{ $row['vn_name'] }}</h2>
                <span>{{ $row['en_name'] }}</span>
              </div>
            </a>
          </div>
        @endforeach
        </div>
      </div>
    </div>
@endsection