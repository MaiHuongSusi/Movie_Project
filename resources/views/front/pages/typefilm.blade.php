@extends('front.layout.default')
@section('content')
      <div class="container" style="margin-top: 45px; margin-bottom:160px;">
        <div class="row" data-aos="fade" style="margin-left: 0;">
            <div class="container">
              <div class="row" style="margin-top: 150px;border: 1px solid white;margin-bottom: 70px;padding: 20px;border-radius: 12px;" >
                <h2 class="hnew" style="color:white">{{$h}}</h2>
              </div>
            </div>
      </div>

        <div class="row">
            @foreach($listfilmbytype as $row)
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 35px;">
                    <a href="#" class="unit-9">
                        <div class="image" style="background-image: url({{$row->link_avt}});">
                        </div>
                        <div class="unit-9-content">
                            <h2>{{ $row->vn_name }}</h2>
                            <span>{{ $row->en_name}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
      </div>

@stop


