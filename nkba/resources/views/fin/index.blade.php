@include('master')

     <div class="col-md-9"> 

<div style="height: 100px"></div> 
    <div style="margin-right: 0px" >
        <h3 style="color: #3D7A33 ;alignment-adjust: left">كشف الحساب الخاص بيك </h3>
         <h5 style="color: #3D7A33 ;alignment-adjust: left">نقدم لك خدمتنا فقط لاسعادك </h5>
        <div style="height: 100px"></div> 
    </div>
        <div class="container content" >
<i class="fa-stethoscope fa-2x" style="size: 20px"> متابعة رصيد العمليات</i> 
                <br>
               <i class="fa-stethoscope fa-2x">متابعة رصيد التحاليل والأشعة</i> 
   <div style="height: 100px"></div> 
                <div class="sing-img-text-left">
                    <div class="blog-right1">
                       

                            @if($message && $limit == ""&& $transfers == "")      
                            <div class="alert alert-warning" style="height: 300px">

                                <strong>Warning!</strong> {{$message}}.

                            </div>
                            @endif

                            @if ($limit && $message == ""|| $transfers)
                            
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- //.text-center -->
                                    </div>
                                    <!-- //.col-md-12 -->
                                </div>
                                <!-- //.row -->

                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <div class="bar-chart">



                                            <div class="chart clearfix">
                                              <p style="color:#B32B2B ; font-size: 25px" > المتبقي من الإجمالي :{{$limit['0']->total_remainder}}</p>
                                             
                                              <div class="item animate swing">

                                                <div class="bar">

                                                    <span class="percent">{{ ($limit['0']->total_remainder /17000)*100}}%</span>

                                                    <div class="item-progress" data-percent="{{ ($limit['0']->total_remainder /17000)*100}}">
                                                        <span class="title"></span>
                                                    </div>
                                                    <!-- //.item-progress -->
                                                </div>
                                                <!-- //.bar -->
                                            </div>
                                            <!-- //.item -->
                                            <p style="color:#B32B2B ; font-size: 25px"> التمبقي من العمليات :{{$limit['0']->surgery_credit}}</p>
                                            <div class="item animate swing">
                                                <div class="bar">
                                                    <span class="percent">{{($limit['0']->surgery_credit/5000)*100}}%</span>

                                                    <div class="item-progress" data-percent="{{ ($limit['0']->surgery_credit/5000)*100}}">

                                                    </div>
                                                    <!-- //.item-progress -->
                                                </div>
                                                <!-- //.bar -->
                                            </div>
                                            <!-- //.item -->
                                            <p style="color:#B32B2B ; font-size: 25px"> المتبقي من التحليل و الأشعة:{{$limit['0']->analysis_credit}}</p>
                                            <div class="item  animate swing">
                                                <div class="bar">
                                                    <span class="percent">{{($limit['0']->analysis_credit/1000)*100}}%</span>

                                                    <div class="item-progress" data-percent="{{($limit['0']->analysis_credit/1000)*100}}">

                                                    </div>
                                                    <!-- //.item-progress -->
                                                </div>
                                                <!-- //.bar -->
                                            </div>
                                            <!-- //.item    radiopology_credit-->
                                        </div>
                                        <!-- //.chart -->
                                    </div>
                                    <!-- //.bar-chart -->
                                </div>
                                <!-- //.col-md-4 -->
                            </div>
 <div style="height: 100px"></div> 
                            <!-- //.row -->
                       
                        <!-- //.container -->
                    </div>

                </div>
            </div>
     
    </div>


    <div class="clearfix"></div>




   <div class="clearfix"></div>
   <div class="clearfix"></div> 
   <table class="table table-hover">
    <thead>
      <tr>
          <th style="color:#3D7A33 ; font-size: 25px">نوع التحويله </th>
          <th style="color:#3D7A33; font-size: 25px" >التأريخ  </th>
          <th style="color:#3D7A33; font-size: 25px"> سعر التكلفة </th>
          <th style="color:#3D7A33; font-size: 25px"> التشخيص </th>
          <th style="color:#3D7A33; font-size: 25px"> اسم الدكتور </th>
          <th style="color:#3D7A33; font-size: 25px"> اسم المستشفى </th>
          <th style="color:#3D7A33; font-size: 25px"> اسم المعمل  </th>

      </tr>
  </thead>
  <tbody>


    @foreach ($transfers as $transfer)
    <tr>
        <td style="color:#777">  <p style="color:#000 ; font-size: 20px"> {{ $transfer->type }}</p> </td> 
        <td  style="color:#777" >  <p style="color:#000; font-size: 20px "> {{ $transfer->transfer_date }}</p> </td> 
        <td  style="color:#777">   <p style="color:#000; font-size: 20px "> {{ $transfer->total_cost }}</p> </td> 
        <td  style="color:#777">   <p style="color:#000 ; font-size: 20px"> {{ $transfer->medical_diagnosis }}</p> </td> 
        <td  style="color:#777">     <p style="color:#000; font-size: 20px "> {{ $transfer->doctor_name }}</p> </td> 
        <td  style="color:#777">      <p style="color:#000; font-size: 20px "> {{ $transfer->hospital_name }}</p> </td> 
        <td  style="color:#777">    <p style="color:#000 ; font-size: 20px"> {{ $transfer->lab_name }}</p> </td> 
    </tr>
    @endforeach
    
</tbody>
</table>

@endif    

<div style="height:200px"></div>

</div>

</div>
<div id="footer" class="background-grey" style="background-color: #555555">
    <div class="container">
        <div class="row">

          
        </div>
    </div>
</div>







<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
    .body {
    background-color: #c1e8c8;
    padding-top: 0px;
}


.bar-chart {
padding-left: 50px;
width: 100%;
margin-top: 15px;
}

.bar-chart > .legend {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40px;
    margin-bottom: -45px;
    border-top: 1px solid #000;
}

.bar-chart > .legend > .item {
    position: relative;
    display: inline-block;
    float: left;
    width: 25%;
}

.bar-chart > .legend > .item:before {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    content: '';
    width: 1px;
    height: 8px;
    background-color: #000;
    margin-top: -8px;
}

.bar-chart > .legend > .item.text-right:before {
    right: 0;
    left: auto;
}



.bar-chart > .chart {
    position: relative;
    width: 100%;
}

.bar-chart > .chart > .item {
    position: relative;
    width: 100%;
    height: 40px;
    margin-bottom: 10px;
    color: #fff;
    text-transform: uppercase;
}

.bar-chart > .chart > .item > .bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #decba5;
    z-index: 5;
}

.bar-chart > .chart > .item > .bar > .percent {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    height: 40px;
    line-height: 40px;
    padding-right: 12px;
    z-index: 15;
}

.bar-chart > .chart > .item > .bar > .item-progress {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background-color: #3D7A33;
    z-index: 10;
}

.bar-chart > .chart > .item > .bar > .item-progress > .title {
    display: block;
    position: absolute;
    height: 40px;
    line-height: 40px;
    padding-left: 12px;
    letter-spacing: 2px;
    z-index: 15;
}
</style>

<script>
    $(document).ready(function(){
        barChart();

        $(window).resize(function(){
            barChart();
        });

        function barChart(){
            $('.bar-chart').find('.item-progress').each(function(){
                var itemProgress = $(this),
                itemProgressWidth = $(this).parent().width() * ($(this).data('percent') / 100);
                itemProgress.css('width', itemProgressWidth);
            });
        };
    });
</script>

































