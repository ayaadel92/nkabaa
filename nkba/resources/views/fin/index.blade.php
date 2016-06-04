@include('master')

<div class="clearfix"></div>
<div class="clearfix"></div> 
<div class="container content" >
    <div class="container">
        <h3 class="tittle  pull-right">كشف حساب التأمين الصحي </h3>
        <div class="clearfix"></div>
        <div class="about-top">
            <div class="col-md-7 about-top-right">
                <h4>نقدم لك خدمتنا فقط لاسعادك </h4>
                <p>متابعة رصيد العمليات</p>
                <p>متابعة رصيد التحاليل والأشعة</p>

                <div class="sing-img-text-left">
                    <div class="blog-right1">
                        <div class="container content" >

                            @if($message && $limit == ""&& $transfers == "")      
                            <div class="alert alert-warning" style="height: 300px">

                                <strong>Warning!</strong> {{$message}}.

                            </div>
                            @endif

                            @if ($limit && $message == ""|| $transfers)
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- //.text-center -->
                                    </div>
                                    <!-- //.col-md-12 -->
                                </div>
                                <!-- //.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <div class="bar-chart">



                                            <div class="chart clearfix">
                                              <p style="color:#000"> المتبقي من الإجمالي </p>
                                              <div class="item">

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
                                            <p style="color:#000"> التمبقي من العمليات </p>
                                            <div class="item">
                                                <div class="bar">
                                                    <span class="percent">{{($limit['0']->surgery_credit/5000)*100}}%</span>

                                                    <div class="item-progress" data-percent="{{ ($limit['0']->surgery_credit/5000)*100}}">

                                                    </div>
                                                    <!-- //.item-progress -->
                                                </div>
                                                <!-- //.bar -->
                                            </div>
                                            <!-- //.item -->
                                            <p style="color:#000"> المتبقي من التحليل و الأشعة</p>
                                            <div class="item  pull-right">
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

                            <!-- //.row -->
                        </div>
                        <!-- //.container -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-md-5 about-top-left">
        <img src="/assets/images/mony.jpg" class="img-responsive" alt="" style="height: 250px ;width: 400px"/>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<div class="clearfix"></div>
<div class="clearfix"></div>  

<div class="container content" >
   <div class="clearfix"></div>
   <div class="clearfix"></div> 
   <table class="table table-hover">
    <thead>
      <tr>
          <th style="color:#019e59">نوع التحويله </th>
          <th style="color:#019e59">التأريخ  </th>
          <th style="color:#019e59"> سعر التكلفة </th>
          <th style="color:#019e59"> التشخيص </th>
          <th style="color:#019e59"> اسم الدكتور </th>
          <th style="color:#019e59"> اسم المستشفى </th>
          <th style="color:#019e59"> اسم المعمل  </th>

      </tr>
  </thead>
  <tbody>


    @foreach ($transfers as $transfer)
    <tr>
        <td style="color:#777">  <p style="color:#000 "> {{ $transfer->type }}</p> </td> 
        <td  style="color:#777" >  <p style="color:#000 "> {{ $transfer->transfer_date }}</p> </td> 
        <td  style="color:#777">   <p style="color:#000 "> {{ $transfer->total_cost }}</p> </td> 
        <td  style="color:#777">   <p style="color:#000 "> {{ $transfer->medical_diagnosis }}</p> </td> 
        <td  style="color:#777">     <p style="color:#000 "> {{ $transfer->doctor_name }}</p> </td> 
        <td  style="color:#777">      <p style="color:#000 "> {{ $transfer->hospital_name }}</p> </td> 
        <td  style="color:#777">    <p style="color:#000 "> {{ $transfer->lab_name }}</p> </td> 
    </tr>
    @endforeach
    
</tbody>
</table>
</div>
@endif    

<div style="height:200px"></div>



<div class="footer">
    <div class="container">

        <div class="footer-text">
            <p>© ITI Graduation Project | Design by ITI</a> </p>
        </div>
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

.bar-chart > .legend > .item h4 {
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
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
    background-color: #019e59;
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

































