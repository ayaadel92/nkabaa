@include('master')


<div class="container content" >

    @if($message && $limit == ""&& $transfers == "")      
    <div class="alert alert-warning" style="height: 300px">

        <strong>Warning!</strong> {{$message}}.

    </div>
    @endif

    @if ($limit && $message == ""|| $transfers)

    <p style="color:#000 "> {{ $limit['0']->analysis_credit }}</p>
     
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center text-uppercase">
                <h2>كشف الحساب</h2>
            </div>
            <!-- //.text-center -->
        </div>
        <!-- //.col-md-12 -->
    </div>
    <!-- //.row -->
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="bar-chart">
           
               
                
                <div class="chart clearfix">
                      <p style="color:#000"> المبقي من الاجمالي </p>
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
                      <p style="color:#000"> المبقي من العمليات </p>
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
                    <p style="color:#000"> المتبقي من التحليل </p>
                    <div class="item">
                        <div class="bar">
                            <span class="percent">{{($limit['0']->analysis_credit/1000)*100}}%</span>
            
                            <div class="item-progress" data-percent="{{($limit['0']->analysis_credit/1000)*100}}">
                              
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item    radiopology_credit-->
                 <p style="color:#000"> المتبقي من الاشعه</p>
                    <div class="item">
                        <div class="bar">
                            <span class="percent">{{($limit['0']->radiopology_credit/1000)*100}}%</span>
            
                            <div class="item-progress" data-percent="{{($limit['0']->radiopology_credit/1000)*100}}">
                              
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
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

  
    @foreach ($transfers as $transfer)
     <p style="color:#000 "> {{ $transfer->type }}</p>
     <p style="color:#000 "> {{ $transfer->transfer_date }}</p>
      <p style="color:#000 "> {{ $transfer->total_cost }}</p>
       <p style="color:#000 "> {{ $transfer->medical_diagnosis }}</p>
        <p style="color:#000 "> {{ $transfer->doctor_name }}</p>
         <p style="color:#000 "> {{ $transfer->hospital_name }}</p>
      <p style="color:#000 "> {{ $transfer->lab_name }}</p>

    @endforeach
    


    @endif

</div>



<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);

body {
    background-color: #f2f2f2;
    color: #000;
    font-family: 'Roboto', sans-serif;
}

.bar-chart {
    position: relative;
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
    background-color: #ff4081;
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
    background-color: #3e50b4;
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



























