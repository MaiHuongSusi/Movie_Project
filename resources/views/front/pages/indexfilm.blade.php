@extends('front.layout.default')
@section('content')

<div class="container" style="margin-top: 45px; margin-bottom:160px;">
        <div class="row" data-aos="fade" style="margin-left: 0;">
            <div class="container">
              <div class="row" style="margin-top: 150px;border: 1px solid white;margin-bottom: 70px;padding: 20px;border-radius: 12px;" >
              <h2 class="hnew" style="color:white">{{$film->vn_name}}</h2>
              </div>
            </div>
      </div>

        <div class="row" style="margin-top: -55px;">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 35px;">
                    <a href="#" class="unit-9">
                        <div class="image" style="background-image: url({{$film->link_avt}});">
                        </div>
                        <div class="unit-9-content">
                            <h2>{{ $film->vn_name }}</h2>
                            <span>{{ $film->en_name}}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-9" data-aos="fade-up" data-aos-delay="100" style="padding:20px 20px 20px;color:white !important;border-radius: 12px;padding-bottom: 35px;border: 1px solid white">
                    <div class="row" style="padding-left:20px; padding-right:20px">
                            <label>Thể loại: </label>
                            @if($counttype>1)
                                @foreach ($type as $t)
                                    <label class=""> {{$t->name_type}} , </label>
                                @endforeach
                            @endif
                    </div>

                    </div>
        </div>
      </div>
@endsection
