

@extends('layouts.app')


@section('content')


    @foreach($doctor as $doc)
<div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
        <div class="row margin-vert-30">
    <div class="blog">
        <div class="clearfix"></div>
        <div class="blog-post-body row margin-top-15">
            <div class="col-md-5">
                <img class="margin-bottom-20" src="{{$doc->path}}" alt="thumb1" style="height: 300px">
            </div>
            <div class="col-md-7">
                <h5> الاسم:{{$doc->name }}</h5>
           <p>العنوان:{{ $doc->address}}</p><br>
           <p>الوصف :{{$doc->discription }}</p><br>
           <p>الهاتف :{{$doc->phone}}</p><br>

                <!-- Read More -->
              
                <!-- End Read More -->
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
    @endforeach

<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">
       
   
       
    </div>
</div>
</div>


@endsection

