@extends('layouts.app')
@section('content')
<<<<<<< HEAD


=======
<!--rgb(17, 113, 37)-->
<div id="" class="bottom-border-shadow">
  <div class="container no-padding background-white bottom-border">
    <div class="row">

     <img src="/assets/img/slideshow/image11.jpg" alt="Logo" />
   </div>
 </div>
</div>
<div id="icons" class="bottom-border-shadow">
  <div class="container background-grey bottom-border">
    <div class="row padding-vert-60">
      <!-- Icons -->
      <div class="col-md-4 text-center">
        <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">خدمات التحويلات </h2>
        <p class="animate fadeIn"> لان اصبح من الهل دون ضايع وقتك في الذهاب الي النقابه لاخذ التحويله العلاجيه دون مشقه</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">اقرب دكتور اليك</h2>
        <p class="animate fadeIn"> اوجد اقرب دكتور اليك علي حسب موقعك الخغرافي</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">كشف الحساب </h2>
        <p class="animate fadeIn">اصبح من السهل معرفك حسابات التامين الصحي الخاص بيك و البيانات الكامله الخاصه بيك </p>
      </div>
      <!-- End Icons -->
    </div>

    <div class="row padding-vert-60">
      <!-- Icons -->
      <div class="col-md-4 text-center">
        <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">ملفك الشخصي </h2>
        <p class="animate fadeIn">اصبح من السهل معرفه معلومات الشخصيه محدثه من النقابه بستمرار </p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">مواعيدك الشخصيه</h2>
        <p class="animate fadeIn">لان مواعيد الشخصيه تهمنا باضافه ان مواعيد ادويتك و جوزاتك مهمه بنسبه لنا </p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn"  style="font-size: 35px">الشكاوي</h2>
        <p class="animate fadeIn">لان ريك ما يدعمنا اصبح من حقك ان تبدي برايك او شكاوتك في اي وقت و سوف نهتم بيها </p>
      </div>
      <!-- End Icons -->
    </div>
    <div class="row padding-vert-60">
      <!-- Icons -->
      <div class="col-md-4 text-center">
        <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn"  style="font-size: 35px">التجديد الاشتراك </h2>
        <p class="animate fadeIn"> اصبح من حقك ان توفر وقتك و تجديد الاشتركات الخاصه بيك سواء الاشتراك السنوي او الاشتراك في التامين عن طريق التليفون</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
        <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">الاشتراك التامين</h2>
        <p class="animate fadeIn">لان اصبح من حقك الاشتراك لك ولاسرتك سواء ولادتك او ولادك او لزوجتك او لابنك عن طريق الانترنت </p>
      </div>

      <!-- End Icons -->
    </div>
  </div>
</div>


<div id="content" class="bottom-border-shadow">
  <div class="container background-white bottom-border">
    <div class="row margin-vert-30">
      <!-- Main Text -->
      <div class="col-md-12">
        <h3 style="color: #3D7A33">اهلا بيك في نقابه مهندسين الاسكندريه</h3>
        <div style="height: 50px"></div> 
        <p style="alignment-adjust: central"> لان هدفنا اسعادك و تحقيق الرفاهيه المطلوبه لحياه اسعد لكل المهندسين المصرين فاصبح من الوجب عمل هذا الموقع لتحقيق كل رغبتك</p>
        <p style="alignment-adjust: central"> المهندس هو من تقوم علي اكتافه الدول المتقدمه فلاهتمام بك جزاء لا يتجزء من منظومه التطور التي تسعد اليها البلاد </p>
      </div>
      <!-- End Main Text -->

    </div>
  </div>
</div>


<div id="icons" class="bottom-border-shadow">
  <div class="container background-grey bottom-border">
>>>>>>> 7a0c38d5e3253d3ee296ce297f4d247232acbeec

    <div class="form-group">
      <center><h3 style="color: #3D7A33"> البحث عن طبيب</h3></center>
      <label><h5>اختر نوعيه البحث </h5></label>
      <select class="input-large form-control" id="choice" onchange="GetValueSelected()">
        <option value="" selected="selected">--اختر--</option>
        <option value="1">المحافظه</option>
        <option value="2" >التخصص</option>
        <option value="3">اسم الدكتور</option>


      </select>

<<<<<<< HEAD
                  <div class="form-group">
                    <center><h3> اختر نوعيه البحث </h3></center>

                    <select class="input-large form-control" id="choiceSearch" onchange="GetValueSelected()">
                      <option value="" selected="selected">--اختر--</option>
                      <option value="1">البحث عن طبيب</option>
                      <option value="2" >البحث عن مستشفى </option>
                      <option value="3">البحث عن معمل</option>


                    </select>
                    </div>

                     {{-- For Hospiatl --}}
                    <div style=" visibility: hidden;" id="hospital">
                      
                    <label><h5>اختر نوعيه البحث </h5></label>
                    <select class="input-large form-control" id="choicehospital" onchange="GetValueSelected()">
                      <option value="" selected="selected">--اختر--</option>
                      <option value="1">اسم المستشفى </option>


                    </select>
                    </div>

                     {{-- End Hospital --}}

                     {{-- For Lab --}}
                      <div style=" visibility: hidden;" id="lab">
                      
                    <label><h5>اختر نوعيه البحث </h5></label>
                    <select class="input-large form-control" id="choicelab" onchange="GetValueSelected()">
                      <option value="" selected="selected">--اختر--</option>
                      <option value="1">البحث بالمنطقه  </option>


                    </select>
                    </div>
                     {{-- End Lab --}}


                    {{-- For Doctor --}}
                   

                    <div style=" visibility: hidden;" id="doctor">
                      <h3> البحث عن طبيب </h3>
                    <label><h5> اختر نوعيه البحث </h5></label>
                    <select class="input-large form-control" id="choicedoctor" onchange="GetValueSelected()">
                      <option value="" selected="selected">--اختر--</option>
                      <option value="1">المحافظه</option>
                      <option value="2" >التخصص</option>
                      <option value="3">اسم الدكتور</option>


                    </select>
                    </div>

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
                     <button id="myButtonArea" class="float-left submit-button" >Search</button>
                    </div>


                    <div id="areaSelectLab" style=" visibility: hidden;">
                      <p> اختر المنطقه</p>
                      <select class="input-large form-control" name="choice" id="areaLab">
                        <option value="" selected="selected">--اختر--</option>
                        @foreach($areaLab as $areaLab)
                        @foreach($areaLab as $arLab)
                        <option value="{{$arLab}}" >{{$arLab}}</option>
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

                    {{-- Name Of Doctor --}}
                    <div id="nameDoctor" style=" visibility: hidden;">
                      <p id ='name'></p>
                      <input type="text" vlaue="namedoctor" name="doctor" id="nameDoctor2">
                      <button id="myButton3" class="float-left submit-button" >Search</button>
                    </div>
                     



                     {{-- End Doctor --}}
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

              
            {{ $hospitals[0]->name}}
            @foreach($hospitals as $key)
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
        
=======
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
>>>>>>> 7a0c38d5e3253d3ee296ce297f4d247232acbeec


    </div>
  </div>

  

  <div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
     <div id="portfolio" class="bottom-border-shadow">
      <div class="container bottom-border">
        <div class="row padding-top-40">
          <ul class="portfolio-group">
            <!-- Portfolio Item -->
            <center><h1 style="color: #3D7A33">المستشفيات الاعلي تقيما</h1></center>
        @if($hospitals)
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
                <figure class="animate fadeInLeft">
                  <img alt="image1" src="{{$hospitals['0']->path}}"  style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$hospitals['0']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$hospitals['0']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$hospitals['0']->rate}}</span></center>
                  </figcaption>
                </figure>
              </a>
            </li>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
                <figure class="animate fadeIn">
                  <img alt="image2" src="{{$hospitals['1']->path}}" style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$hospitals['1']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$hospitals['1']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$hospitals['1']->rate}}</span></center>
                  </figcaption>
                </figure>
              </a>
            </li>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
                <figure class="animate fadeInRight">
                  <img alt="image2" src="{{$hospitals['2']->path}}" style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$hospitals['2']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$hospitals['2']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$hospitals['2']->rate}}</span></center>
                  </figcaption>
                </a>
              </li>
          @endif
              <!-- //Portfolio Item// -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="content" class="bottom-border-shadow">
    <div class="container background-grey bottom-border">
     <div id="portfolio" class="bottom-border-shadow">
      <div class="container bottom-border">
        <div class="row padding-top-40">
          <ul class="portfolio-group">
            <!-- Portfolio Item -->
            <center><h1 style="color: #3D7A33"> الدكتور اعلي تقيما</h1></center>
        @if($users)
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
               <figure class="animate fadeInRight">
                <img alt="image2" src="{{$users['0']->path}}" style="height: 300px">
                <figcaption>
                  <center> <h1>{{$users['0']->name}}</h1></center>
                  <center><span style="font-size: 25px ;color: #555555">{{$users['0']->discription}}</span></center>
                  <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$users['0']->rate}}</span></center>
                </figcaption>
              </a>
            </li>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
                <figure class="animate fadeInRight">
                  <img alt="image2" src="{{$users['1']->path}}" style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$users['1']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$users['1']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$users['1']->rate}}</span></center>
                  </figcaption>
                </a>
              </li>
              <!-- //Portfolio Item// -->
              <!-- Portfolio Item -->
              <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                <a href="#">
                 <figure class="animate fadeInRight">
                  <img alt="image2" src="{{$users['2']->path}}" style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$users['2']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$users['2']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$users['2']->rate}}</span></center>
                  </figcaption>
                </a>
              </li>
              <!-- //Portfolio Item// -->
          @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
     <div id="portfolio" class="bottom-border-shadow">
      <div class="container bottom-border">
        <div class="row padding-top-40">
          <ul class="portfolio-group">
            <!-- Portfolio Item -->
            <center><h1 style="color: #3D7A33"> المعامل الاعلي تقيما </h1></center>
        @if($labs)
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
               <figure class="animate fadeInRight">
                <img alt="image2" src="{{$labs['0']->path}}" style="height: 300px">
                <figcaption>
                  <center> <h1>{{$labs['0']->name}}</h1></center>
                  <center><span style="font-size: 25px ;color: #555555">{{$labs['0']->discription}}</span></center>
                  <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$labs['0']->rate}}</span></center>
                </figcaption>
              </a>
            </li>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
               <figure class="animate fadeInRight">
                <img alt="image2" src="{{$labs['1']->path}}" style="height: 300px">
                <figcaption>
                  <center> <h1>{{$labs['1']->name}}</h1></center>
                  <center><span style="font-size: 25px ;color: #555555">{{$labs['1']->discription}}</span></center>
                  <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$labs['1']->rate}}</span></center>
                </figcaption>
              </a>
            </li>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
              <a href="#">
                <figure class="animate fadeInRight">
                  <img alt="image2" src="{{$labs['2']->path}}" style="height: 300px">
                  <figcaption>
                    <center> <h1>{{$labs['2']->name}}</h1></center>
                    <center><span style="font-size: 25px ;color: #555555">{{$labs['2']->discription}}</span></center>
                    <center><span style="color:#3D7A33 ;font-size: 20px">تقيم:{{$labs['2']->rate}}</span></center>
                  </figcaption>
                </a>
              </li>
          @endif
              <!-- //Portfolio Item// -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio -->

  <div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
      <div class="row">



      </div>
    </div>

    @endsection
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


<<<<<<< HEAD
<!--//JS-->
<script type="text/javascript">

function GetValueSelected()
{
     
      var SelectElemet=document.getElementById('choiceSearch').value;
     var SelectAreaForLab= document.getElementById('lab').value;
     var LabSearch=document.getElementById('choicelab').value;
     var ValueArea=document.getElementById('areaSelectLab').value;
      
      if(SelectElemet==1)
      {

        alert(SelectElemet);
        document.getElementById('doctor').style.visibility="visible";
         SelectDoctorSearch=document.getElementById('choicedoctor').value;
        alert(SelectDoctorSearch);
        if(SelectDoctorSearch==1)
        { 
           document.getElementById('glopalSelect').style.visibility="visible";
           document.getElementById('areaSelect').style.visibility="visible";
           document.getElementById('specialSelect').style.visibility="hidden";
          document.getElementById('nameHospital').style.visibility="hidden";
          

        }
        else if (SelectDoctorSearch==2)
        {
          document.getElementById('specialSelect').style.visibility="visible";
           document.getElementById('nameDoctor').style.visibility="hidden";
          document.getElementById('areaSelect').style.visibility="hidden";
          document.getElementById('glopalSelect').style.visibility="hidden";
          document.getElementById('nameHospital').style.visibility="hidden";

          
        }

        else if (SelectDoctorSearch==3)
        {



          document.getElementById('name').innerHTML="ادخل اسم الدكتور :";
          document.getElementById('nameDoctor').style.visibility="visible";
          document.getElementById('areaSelect').style.visibility="hidden";
          document.getElementById('glopalSelect').style.visibility="hidden";
          document.getElementById('nameHospital').style.visibility="hidden";
          document.getElementById('specialSelect').style.visibility="hidden";
          
          
          

        }
        document.getElementById("myButton").onclick = function () {
          var ValueAreaChoiceArea=document.getElementById('area').value;
            location.href = "http://localhost:8000/SearchDoctor/"+ValueAreaChoiceArea;

            console.log(ValueAreaChoiceArea);
             alert(ValueAreaChoiceArea);
        };
        document.getElementById("myButton2").onclick = function () {
      var ValueAreaChoiceSP=document.getElementById('special').value;
        location.href = "http://localhost:8000/DoctorSpecial/"+ValueAreaChoiceSP;

        console.log(ValueAreaChoiceSP);
         alert(ValueAreaChoiceSP);
    };
   
        document.getElementById("myButton3").onclick = function () {
      var ValueAreaNameDoctor=document.getElementById('nameDoctor2').value;
        location.href = "http://localhost:8000/DoctorName/"+ValueAreaNameDoctor;

        console.log(ValueAreaNameDoctor);
         alert(ValueAreaNameDoctor);
    };


  }
  else if(SelectElemet==2)
  {
     alert(SelectElemet);
     document.getElementById('hospital').style.visibility="visible";
     var SelectHospitalSearch=document.getElementById('choicehospital').value;
     
     
       if(SelectHospitalSearch == 1)
      {
        document.getElementById('nameDoctor').style.visibility="visible";
        document.getElementById('name').innerHTML="ادخل اسم المستشفى";
        document.getElementById('glopalSelect').style.visibility="hidden";

      }
  
   
    
    document.getElementById("myButton3").onclick = function () {
      var ValueArea=document.getElementById('nameDoctor2').value;
        location.href = "http://localhost:8000/SearchHospital/"+ValueArea;

        console.log(ValueArea);
         alert(ValueArea);
    };

  }
  else if(SelectElemet==3)
  {
    alert(SelectElemet);
    document.getElementById('lab').style.visibility="visible";
     LabSearch=document.getElementById('choicelab').value;
    alert(LabSearch);
      if(LabSearch==1)
      {
        document.getElementById('areaSelectLab').style.visibility="visible";

        document.getElementById('nameDoctor').style.visibility="hidden";

      }
      

    document.getElementById("myButton").onclick = function () {
       ValueArea=document.getElementById('areaLab').value;
        location.href = "http://localhost:8000/SearchLab/"+ValueArea;
=======
          document.getElementById("myButton").onclick = function () {
            var ValueArea=document.getElementById('area').value;
            location.href = "http://localhost:8000/SearchDoctor/"+ValueArea;

            console.log(ValueArea);

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
>>>>>>> 7a0c38d5e3253d3ee296ce297f4d247232acbeec

            console.log(ValueArea);

<<<<<<< HEAD
</script>
=======
          };
        }
      }

>>>>>>> 7a0c38d5e3253d3ee296ce297f4d247232acbeec

    </script>
