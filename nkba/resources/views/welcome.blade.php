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
<!-- Portfolio -->
<div id="portfolio" class="bottom-border-shadow">
    <div class="container bottom-border">
        <div class="row padding-top-40">
            <ul class="portfolio-group">
                <!-- Portfolio Item -->
                 @foreach($lab as $key)
                <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                    <a href="#">
                        <figure class="animate fadeInLeft">
                            <img alt="image1" src="assets/img/frontpage/image1.jpg">
                            <figcaption>
                                <h3>Name:{{$key->name}}</h3>
                                <span>ddress:{{
                                         $key->address
                                       }}</span>
                                
                                <span>
                                    Discription:{{
                                         $key->discription
                                       }}
                                </span>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                
                 @endforeach
        
            
            
            </ul>
        </div>
    </div>
</div>

<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">
       
            <!-- Copyright -->
            <div id="copyright" class="col-md-12>
                <p class="pull-right" style="font-size: 20px ; color: #fff">(c) ITI OPEN SOURCE AYA ADEL & AYA AHMED & MANAR AHMED & MERVET MOSAD </p>
            </div>
            <!-- End Copyright -->
        </div>
    </div>
</div>

@endsection
