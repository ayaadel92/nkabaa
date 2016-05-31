@include('master')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center text-uppercase">
                <h2>My Strengths</h2>
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
                    <div class="item">
                        <div class="bar">
                            <span class="percent">92%</span>
            
                            <div class="item-progress" data-percent="60">
                                <span class="title">المتبقي الاجمالي</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
                    
                    <div class="item">
                        <div class="bar">
                            <span class="percent">71%</span>
            
                            <div class="item-progress" data-percent="71">
                                <span class="title">المتبقي من العمليات</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
                    
                    <div class="item">
                        <div class="bar">
                            <span class="percent">82%</span>
            
                            <div class="item-progress" data-percent="82">
                                <span class="title">المتبقي من التحليل</span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <div class="bar">
                            <span class="percent">67%</span>
            
                            <div class="item-progress" data-percent="67">
                                <span class="title">المتبقي من الاشعه</span>
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