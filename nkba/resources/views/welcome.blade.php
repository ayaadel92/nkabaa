@extends('layouts.app')

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/assets/js/touchTouch.jquery.js"></script>
<script src="/assets/js/script.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/assets/js/wow.js"></script>


@section('content')


{{-- <div class="container">
  <br>
      <div class="clearfix"> </div> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" height="618px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->'
    <div class="clearfix"> </div> 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/assets/images/image1.jpg" alt="Chania" width="100%" height="640px">
      </div>

      <div class="item">
        <img src="/assets/images/image2.jpg" alt="Chania" width="100%" height="640px">
      </div>
    
      <div class="item">
        <img src="/assets/images/image3.jpg" alt="Flower" width="100%" height="640px">
      </div>

      <div class="item">
        <img src="/assets/images/image4.jpg" alt="Flower" width="100%" height="640px">
`      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> --}}

{{-- begine slider --}}

  {{-- <div class="full-width-container block-1">
    <div class="camera_container">
      <div id="camera_wrap">
        <div class="item" data-src="/assets/images/index_img_slider-1.jpg">
          <div class="camera_caption fadeIn">
            <h3>We'll Give Your Business Fresh Ideas</h3>
            <p>Contact Us by</p>
            <a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
            <a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
            <a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
          </div>
        </div>
        <div class="item" data-src="/assets/images/index_img_slider-2.jpg">
          <div class="camera_caption fadeIn">
            <h3>We'll Make You Noticeable</h3>
            <p>Contact Us by</p>
            <a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
            <a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
            <a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  --}}
  {{-- end of slider --}}
  {{-- begin search --}}

 {{--  <div class="form-group">
    <center> البحث عن طبيب</center>
        <label>المحافظه</label>
        <select class="input-large form-control">
            <option value="" selected="selected">اختر محافظه</option>
            <option value="alex" >الاسكندريه</option>
           
        </select>
        <label>المنطقه</label>
        <select class="input-large form-control">
          {{-- <option value="" selected="selected">اختر المنطقه</option> --}}
            {{--  @foreach($area as $areas)
                 @foreach($areas as $ar)
                     <option value="alex" >{{$ar}}</option>
                  @endforeach   
                  @endforeach --}}

       {{--  </select>
        <label>التخصص</label>
        <select class="input-large form-control"> --}}
          {{-- <option value="" selected="selected">اختر المنطقه</option> --}}
            {{--  @foreach($specialization as $specials)
                 @foreach($specials as $special)
                     <option value="alex" >{{$special}}</option>
                  @endforeach   
                  @endforeach --}}

                  {{--  </select> --}}
                  {{-- </div> --}}  


                  {{-- end of search  --}}

                  {{-- B Searching --}}

                  <div class="form-group">
                    <center><h3> البحث عن طبيب</h3></center>
                    <label><h5>اختر نوعيه البحث </h5></label>
                    <select class="input-large form-control" id="choice" onchange="GetValueSelected()">
                      <option value="" selected="selected">--اختر--</option>
                      <option value="1">المحافظه</option>
                      <option value="2" >التخصص</option>
                      <option value="3">اسم الدكتور</option>


                    </select>

                    <div id="glopalSelect" style=" visibility: hidden;">
                      <p> اختر المحافظه</p>
                      <select class="input-large form-control" name="choice" >
                        <option value="1" selected="selected">الاسكندريه</option>



                      </select>
                    </div>
                    <div id="areaSelect" style=" visibility: hidden;">
                      <p> اختر المنطقه</p>
                      <select class="input-large form-control" name="choice" id="area">
                        <option value="" selected="selected">--اختر--</option>
                        @foreach($area as $areas)
                        @foreach($areas as $ar)
                        <option value="{{$ar}}" >{{$ar}}</option>
                        @endforeach   
                        @endforeach
                      </select>
                     <button id="myButton" class="float-left submit-button" >Search</button>
                    </div>


                    <div id="specialSelect" style=" visibility: hidden;">
                      <p>اختر التخصص</p>
                      <select class="input-large form-control" name="choice" id="special">
                        <option value=" " selected="selected">--اختر--</option>
                        @foreach($specialization as $specials)
                            @foreach($specials as $special)
                               <option value="{{$special}}" >{{$special}}</option>
                            @endforeach   
                        @endforeach


                      </select>
                      <button id="myButton2" class="float-left submit-button" >Search</button>
                    </div>

                    <div id="nameDoctor" style=" visibility: hidden;">
                      <p>ادخل اسم الدكتور</p>
                      <input type="text" vlaue="namedoctor" name="doctor" id="nameDoctor2">
                      <button id="myButton3" class="float-left submit-button" >Search</button>
                    </div>




                    {{-- E searching --}}

                    <hr>
                    <!--end-banner-->
                    {{-- test --}}
                    <center>
                      <table>  




                       <section id="content">
                        <div class="full-width-container block-1">
                          <div class="container">

                            <div class="row">

                              <div id="touch_gallery">

                               <tr>

                                <td>
                                  <br><br>
                                  <div  class="alert alert-info" role="alert"><center>الخدمات المقدمه ذات تقيم : 4.5 <center></div>

                                  <div class="grid_4">
                                    <div class="img_container"><a href="/assets/images/index-2_img-1-big.jpg"><img src="/assets/images/index-2_img-1.jpg" alt="projects"></a></div>
                                    <article>
                                      <h4>تامين صحى </h4>
                                      <p>لكا عضو فى الرعيه الصحيه له الحق فى الحصول على رعايه صحيه متكامله تشمل جميع التخصصات باسعار وخصوم محدده من قبل النقابه.</p>
                                     
                                    </article>
                                  </div>
                                </td>


                                <td>
                                  <br><br>
                                  <div  class="alert alert-info" role="alert"><center>الخدمات المقدمه ذات تقيم : 4.5 <center></div> 
                                  <div class="grid_4">
                                    <div class="img_container"><a href="/assets/images/index-2_img-2-big.jpg"><img src="/assets/images/index-2_img-2.jpg" alt="projects"></a></div>
                                    <article>
                                      <h4>ادخال عضو جديد</h4>
                                      <p>لكل عضو فى النقابه وايضا فى الرعايه الصحيه له الحق فى ادخال احد من ذو الاقار ولكا شخص يتم ادخاله له نسبه محدده تتوقف على درجه القرابه والتى يتم تحديدها من قبل النقابه والرعايه الصحيه للنقابه فهى تختلف من سنه الى اخرى.</p>
                                     
                                    </article>
                                  </div>
                                </td>


                                <td>
                                  <br><br>
                                  <div  class="alert alert-info" role="alert"><center>الخدمات المقدمه ذات تقيم : 4.5 <center></div>
                                  <div class="grid_4">
                                    <div class="img_container"><a href="/assets/images/index-2_img-3-big.jpg"><img src="/assets/images/index-2_img-3.jpg" alt="projects"></a></div>
                                    <article>
                                      <h4>خدمات اخرى</h4>
                                      <p>هناك  العديد من الخدمات التى يحصل عليها العضو بمجرد اشتراكه فى الرعايع الصحيه , فنحن نهدف فى النهايه الى خدمه صحه الاعضاء .</p>
                                      
                                    </article>
                                  </div>
                                </td>
                              </tr>

                              <br><br><br>
                              <tr>


                                @foreach($lab as $key)
                                <div style=" width: 10px; height: 20px;">
                                  <td>
                                    <br><br>
                                    <div  class="alert alert-info" role="alert"><center>{{$key->rate}} <center></div>
                                    <div class="grid_4">
                                      <div class="img_container"><a href="{{$key->path}}"><img src="{{$key->path}}" alt="projects"></a></div>
                                      <article>
                                        <h5> Name:{{
                                         $key->name
                                       }}</h5>
                                       <p>Address:{{
                                         $key->address
                                       }}</p><br>
                                       <p>Discription:{{
                                         $key->discription
                                       }}</p><br>
                                       <p>Phone:{{
                                         $key->phone
                                       }}</p><br>
                                       <p>Rate:{{
                                         $key->rate
                                       }}</p><br>
                                       
                                     </article>
                                   </div>
                                 </td>
                               </div>
                               @endforeach

                             </tr>

                             <tr>

                {{-- <td>
                  <br><br>
                  <div  class="alert alert-info" role="alert"><center>االمستشفيات المقدمه ذات تقيم : 4.5 <center></div>
              <div class="grid_4">
                <div class="img_container"><a href="/assets/images/index-2_img-1-big.jpg"><img src="/assets/images/index-2_img-1.jpg" alt="projects"></a></div>
                <article>
                  <h4> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 1</h4>
                  <p> تقدم المستفى رعايه متكامله فى ميع التخصصات ..</p><br><p>المواعيد : من الساعه التاسعه صباحا حتى الساعه التاسعه مساء وذلك فى جميع ايام الاسبوع </p>
                  <a href="">Readmore</a>
                </article>
              </div>
            </td> --}}
            @foreach($hospital as $key)
            <div style=" width: 10px; height: 20px;">
              <td>
                <br><br>
                <div  class="alert alert-info" role="alert"><center>{{$key->rate}} <center></div>
                <div class="grid_4">
                  <div class="img_container"><a href="{{$key->path}}"><img src="{{$key->path}}" alt="projects"></a></div>
                  <article>
                    <h5> Name:{{
                     $key->name
                   }}</h5>
                   <p>Address:{{
                     $key->address
                   }}</p><br>
                   <p>Discription:{{
                     $key->discription
                   }}</p><br>
                   <p>Phone:{{
                     $key->phone
                   }}</p><br>
                   <p>Rate:{{
                     $key->rate
                   }}</p><br>
                   
                 </article>
               </div>
             </td>
           </div>
           @endforeach

             {{--  <td>
                <br><br>
                <div  class="alert alert-info" role="alert"><center>االمستشفيات المقدمه ذات تقيم : 4.5 <center></div>
              <div class="grid_4">
                <div class="img_container"><a href="/assets/images/index-2_img-2-big.jpg"><img src="/assets/images/index-2_img-2.jpg" alt="projects"></a></div>
                <article>
                  <h4> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 2</h4>
                  <p> تقدم المستفى رعايه متكامله فى ميع التخصصات ..</p><br>

                  <a href="">Readmore</a>
                </article>
              </div>
            </td> --}}



             {{--  <td>
                <br><br>
                <div  class="alert alert-info" role="alert"><center>االمستشفيات المقدمه ذات تقيم : 4.5 <center></div>
              <div class="grid_4">
                <div class="img_container"><a href="/assets/images/index-2_img-3-big.jpg"><img src="/assets/images/index-2_img-3.jpg" alt="projects"></a></div>
               <article>
                  <h4> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 3</h4>
                  <p> تقدم المستفى رعايه متكامله فى ميع التخصصات ..</p><br><p>المواعيد : من الساعه التاسعه صباحا حتى الساعه التاسعه مساء وذلك فى جميع ايام الاسبوع </p>
                  <a href="">Readmore</a>
                </article>
              </div>
            </td> --}}


          </tr>

          <tr>

            {{-- <td>
              <br><br>
              <div  class="alert alert-info" role="alert"><center>الاطباء المقدمه ذات تقيم : 4.5 <center></div>
            <div class="grid_4">
              <div class="img_container"><a href="/assets/images/index-2_img-1-big.jpg"><img src="/assets/images/index-2_img-1.jpg" alt="projects"></a></div>
              <article>
                <h4> دكتور احمد رزق</h4>
                <p> تخصص باطن  </p><br><p>مواعيد العمل من الساعه السادسه مساءا حتى الساعه الحاديه عشر مساءا</p>
                <a href="">Readmore</a>
              </article>
            </div>
          </td> --}}
          
          @foreach($use as $key)
          <div style=" width: 10px; height: 20px;">
            <td>
              <br><br>
              <div  class="alert alert-info" role="alert"><center>{{$key->rate}} <center></div>
              <div class="grid_4">
                <div class="img_container"><a href="{{$key->path}}"><img src="{{$key->path}}" alt="projects"></a></div>
                <article>
                  <h5> Name:{{
                   $key->name
                 }}</h5>
                 <p>Degree:{{
                   $key->degree
                 }}</p><br>
                 <p>Specialization:{{
                   $key->specialization
                 }}</p><br>
                 <p>Phone:{{
                   $key->phone
                 }}</p><br>
                 <p>Rate:{{
                   $key->rate
                 }}</p><br>
                 <a href="{{ url('/DoctorName/')}}/{{  $key->name }}">Readmore</a>
               </article>
             </div>
           </td>
         </div>
         @endforeach
          {{-- <td>
            <br><br>
            <div  class="alert alert-info" role="alert"><center>الاطباء المقدمه ذات تقيم : 4.5 <center></div>
          <div class="grid_4">
            <div class="img_container"><a href="/assets/images/index-2_img-3-big.jpg"><img src="/assets/images/index-2_img-3.jpg" alt="projects"></a></div>
          <article>
              <h4> دكتور ابراهيم محمود</h4>
              <p> تخصص جراحه  </p><br><p></p>
              <a href="">Readmore</a>
            </article>
          </div>
        </td> --}}

      </tr>

    </div>
  </div>

</div>
</div>
</section>

<br>

</table>
</center>
<br><br>
<br><br>
{{-- end test --}}









<!--start-smoth-scrolling-->

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--JS-->
<script type="text/javascript" src="/assets/js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->
<script type="text/javascript">
function GetValueSelected()
{
   
  var SelectElemet=document.getElementById('choice').value;
  if(SelectElemet==1)
  {

    document.getElementById('glopalSelect').style.visibility="visible";
    document.getElementById('specialSelect').style.visibility="hidden";
    document.getElementById('nameDoctor').style.visibility="hidden";
    document.getElementById('areaSelect').style.visibility="visible";
     

    document.getElementById("myButton").onclick = function () {
      var ValueArea=document.getElementById('area').value;
        location.href = "http://localhost:8000/SearchDoctor/"+ValueArea;

        console.log(ValueArea);
         alert(ValueArea);
    };

  }
  else if(SelectElemet==2)
  {

    document.getElementById('specialSelect').style.visibility="visible";
    document.getElementById('glopalSelect').style.visibility="hidden";
    document.getElementById('nameDoctor').style.visibility="hidden";
    document.getElementById('areaSelect').style.visibility="hidden";
    document.getElementById("myButton2").onclick = function () {
      var ValueArea=document.getElementById('special').value;
        location.href = "http://localhost:8000/DoctorSpecial/"+ValueArea;

        console.log(ValueArea);
         alert(ValueArea);
    };
  }
  else if(SelectElemet==3)
  {
    document.getElementById('nameDoctor').style.visibility="visible";
    document.getElementById('specialSelect').style.visibility="hidden";
    document.getElementById('glopalSelect').style.visibility="hidden";
    document.getElementById('areaSelect').style.visibility="hidden";
    document.getElementById("myButton3").onclick = function () {
      var ValueArea=document.getElementById('nameDoctor2').value;
        location.href = "http://localhost:8000/DoctorName/"+ValueArea;

        console.log(ValueArea);
         alert(ValueArea);
    };
  }
}


</script>

</body>
</html>
@endsection
