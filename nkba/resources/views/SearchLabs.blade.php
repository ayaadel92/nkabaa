

         @foreach($doctor as $doc)
 <div style=" width: 10px; height: 20px;">
  <td>
    <br><br>
    <div  class="alert alert-info" role="alert"><center><center></div>
    <div class="grid_4">
      <div class="img_container"><a href="{{$doc->path}}"><img src="{{$doc->path}}" alt="projects"></a></div>
      <article>
        <h5> Name:{{
         $doc->name
       }}</h5>
       <p>Address:{{
         $doc->address
       }}</p><br>
       <p>Discription:{{
         $doc->discription
       }}</p><br>
       <p>Phone:{{
         $doc->phone
       }}</p><br>
        <a href="http://localhost:8000/">Back</a>
                  
       <!-- Begine Star Of Evaluate-->


<!-- This is true stars -->




  
  <!-- End Star Of Evaluate -->

</article>
</div>

</td>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endforeach

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

