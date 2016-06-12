@extends('layouts.app')

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/assets/js/touchTouch.jquery.js"></script>
<script src="/assets/js/script.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/assets/js/wow.js"></script>


@section('content')




                  {{-- end of search  --}}

                  {{-- B Searching --}}

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

        console.log(ValueArea);
         alert(ValueArea);
    };
  }
}

</script>

</body>
</html>
@endsection
