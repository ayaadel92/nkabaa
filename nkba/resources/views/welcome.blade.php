@extends('layouts.app')

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="/assets/js/touchTouch.jquery.js"></script>
    <script src="/assets/js/script.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="/assets/js/wow.js"></script>
<script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>

@section('content')


{{-- <div class="container">
  <br>
      <div class="clearfix"> </div> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
        <img src="/assets/images/index-1_img-2.jpg" alt="Chania" width="800" height="345">
      </div>

      <div class="item">
        <img src="/assets/images/index-1_img-3.jpg" alt="Chania" width="800" height="345">
      </div>
    
      <div class="item">
        <img src="/assets/images/index-1_img-4.jpg" alt="Flower" width="800" height="345">
      </div>

      <div class="item">
        <img src="/assets/images/index-1_img-5.jpg" alt="Flower" width="800" height="345">
      </div>
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



  <div class="full-width-container block-1">
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


<hr>
    <!--//end-banner-->
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
                      <a href="">Readmore</a>
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
                      <a href="">Readmore</a>
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
                      <a href="">Readmore</a>
                    </article>
                  </div>
                 </td>
            </tr>
          
            <br><br><br>
            
           <tr>
           
                <td>
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
               </td>
               
              <td>
                <br><br>
                <div  class="alert alert-info" role="alert"><center>االمستشفيات المقدمه ذات تقيم : 4.5 <center></div>
              <div class="grid_4">
                <div class="img_container"><a href="/assets/images/index-2_img-2-big.jpg"><img src="/assets/images/index-2_img-2.jpg" alt="projects"></a></div>
                <article>
                  <h4> ﻣﺴﺘﺸﻔﻲ اﻟﺤﻤﺎﻳﺎﺕ 2</h4>
                  <p> تقدم المستفى رعايه متكامله فى ميع التخصصات ..</p><br><p>المواعيد : من الساعه التاسعه صباحا حتى الساعه التاسعه مساء وذلك فى جميع ايام الاسبوع </p>
                  <a href="">Readmore</a>
                </article>
              </div>
               </td>


           
              <td>
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
               </td>

         
          </tr>

          <tr>
           
            <td>
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
            </td>
       
          
          <td>
            <br><br>
           <div  class="alert alert-info" role="alert"><center>الاطباء المقدمه ذات تقيم : 4.5 <center></div>
          <div class="grid_4">
            <div class="img_container"><a href="/assets/images/index-2_img-2-big.jpg"><img src="/assets/images/index-2_img-2.jpg" alt="projects"></a></div>
            <article>
              <h4> دكتور محمد على</h4>
              <p> تخصص جلديه  </p><br><p>مواعيد العمل من الساعه السادسه مساءا حتى الساعه الحاديه عشر مساءا</p>
              <a href="">Readmore</a>
            </article>
          </div>
          </td>
          
          <td>
            <br><br>
            <div  class="alert alert-info" role="alert"><center>الاطباء المقدمه ذات تقيم : 4.5 <center></div>
          <div class="grid_4">
            <div class="img_container"><a href="/assets/images/index-2_img-3-big.jpg"><img src="/assets/images/index-2_img-3.jpg" alt="projects"></a></div>
          <article>
              <h4> دكتور ابراهيم محمود</h4>
              <p> تخصص جراحه  </p><br><p>مواعيد العمل من الساعه السادسه مساءا حتى الساعه الحاديه عشر مساءا</p>
              <a href="">Readmore</a>
            </article>
          </div>
         </td>
 
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

</body>
</html>
@endsection
