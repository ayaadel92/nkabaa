@extends('layouts.app')
@section('content')
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
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">خدمة التحويلات </h2>
                <p class="animate fadeIn">  بدلا من  ضياع وقتك في الذهاب الي النقابه لعمل التحويات العلاجيه الآن اصبح من السهل عليك عملها دون الحاجة لذلك</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">اقرب دكتور إليك</h2>
                <p class="animate fadeIn"> أقرب دكتور إليك بحسب موقعك الجغرافى</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">كشف الحساب </h2>
                <p class="animate fadeIn">يمكنك معرفة حساب التأمين الصحي الخاص بك و البيانات الكلية الخاصه بك </p>
            </div>
            <!-- End Icons -->
        </div>

        <div class="row padding-vert-60">
            <!-- Icons -->
            <div class="col-md-4 text-center">
                <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">ملفك الشخصي </h2>
                <p class="animate fadeIn">يمكنك معرفة معلوماتك الشخصيه أول بأول </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">مواعيدك الشخصيه</h2>
                <p class="animate fadeIn">لأن مواعيد الشخصيه تهمنا يمكنك إضافة مواعيد ادويتك واعمالك المهمة  </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn"  style="font-size: 35px">الشكاوي</h2>
                <p class="animate fadeIn">لأن  رأيك يهمنا اصبح من حقك أن تبدي برأيك  في اي وقت و سوف نهتم بها </p>
            </div>
            <!-- End Icons -->
        </div>
        <div class="row padding-vert-60">
            <!-- Icons -->
            <div class="col-md-4 text-center">
                <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn"  style="font-size: 35px">تجديد الإشتراك </h2>
                <p class="animate fadeIn">الآن يمكنك تجديد إشتراكاتك سواء الإشتراك السنوي او الإشتراك في التأمين عن طريق خدمة موبى كاش</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn" style="font-size: 35px">الإشتراك التأمينى</h2>
                <p class="animate fadeIn">الآن اصبح من حقك الإشتراك لك ولاسرتك  عن طريق الموقع الخاص بنا </p>
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
                <h3 style="color: #3D7A33">أهلا بك في نقابه مهندسين الأسكندرية</h3>
                <div style="height: 50px"></div> 
                <p style="alignment-adjust: central"> لان هدفنا اسعادك و تحقيق الرفاهيه ا لك أنشأنا هذا الموقع لتحقيق ذلك </p>
                <p style="alignment-adjust: central"> المهندس هو من تقوم علي اكتافه الدول المتقدمه فا الإهتمام بك جزء لا يتجزأ من  منظومه التطور التي تسع اليها البلاد </p>
            </div>
            <!-- End Main Text -->
            
        </div>
    </div>
</div>


<div id="icons" class="bottom-border-shadow">
    <div class="container background-grey bottom-border">
        
                  <div class="form-group">
                    <center><h3 style="color: #3D7A33"> البحث عن طبيب</h3></center>
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


    </div>
</div>

  
    
<div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
         <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
                    <div class="row padding-top-40">
                        <ul class="portfolio-group">
                            <!-- Portfolio Item -->
                             <center><h1 style="color: #3D7A33">المستشفيات الأعلي تقييما</h1></center>
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image1" src="{{$hospitals['0']->path}}"  style="height: 300px">
                                        <figcaption>
                                          <center> <h1>{{$hospitals['0']->name}}</h1></center>
                                            <center><span style="font-size: 25px ;color: #555555">{{$hospitals['0']->discription}}</span></center>
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$hospitals['0']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$hospitals['1']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$hospitals['2']->rate}}</span></center>
                                        </figcaption>
                                </a>
                            </li>
                       
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
                             <center><h1 style="color: #3D7A33"> الدكتور الأعلي تقييما</h1></center>
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                   <figure class="animate fadeInRight">
                                        <img alt="image2" src="{{$users['0']->path}}" style="height: 300px">
                                        <figcaption>
                                            <center> <h1>{{$users['0']->name}}</h1></center>
                                            <center><span style="font-size: 25px ;color: #555555">{{$users['0']->discription}}</span></center>
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$users['0']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$users['1']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$users['2']->rate}}</span></center>
                                        </figcaption>
                                </a>
                            </li>
                       
                            <!-- //Portfolio Item// -->
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
                            <center><h1 style="color: #3D7A33"> المعامل الأعلي تقييما </h1></center>
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                     <figure class="animate fadeInRight">
                                        <img alt="image2" src="{{$labs['0']->path}}" style="height: 300px">
                                        <figcaption>
                                            <center> <h1>{{$labs['0']->name}}</h1></center>
                                            <center><span style="font-size: 25px ;color: #555555">{{$labs['0']->discription}}</span></center>
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$labs['0']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$labs['1']->rate}}</span></center>
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
                                            <center><span style="color:#3D7A33 ;font-size: 20px">تقييم:{{$labs['2']->rate}}</span></center>
                                        </figcaption>
                                </a>
                            </li>
                       
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

        console.log(ValueArea);
         
    };
  }
}


</script>
