<!--header start-->
<header class="header dark-bg">
    <!--logo start-->

    <a href="/employee-transfer" class="logo">نقابة <span class="lite lite-special">المهندسين</span></a>
    <img src="/assets/images/logo_admin.png" width="100px" height="60 px" alt="">

    <!--logo end-->
    <div class="top-nav notification-row">                
        <!-- notificatoin dropdown start-->

        <ul class="nav pull-right top-menu">
<li style="margin-top: 3px;">{{ link_to_route('employee-transfer.confirmed','عرض التحويلات المؤكدة') }}
</li>
            <!-- task notificatoin start -->
            <li id="task_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="icon-task-l" style="margin-right: 18px;"></span>
                    <span class="badge bg-important" id="transfers-number"></span>
                </a>
                <ul class="dropdown-menu extended tasks-bar selected">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">التحويلات الحالية</p>
                    </li>
                    <li class="external">
                        {{ link_to_route('employee-transfer.index','عرض جميع التحويلات') }}
                    </li>
                </ul>
            </li>
            <!-- task notificatoin end -->

        </ul>
        <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>خروج</a></li>
                            </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>      
<!--header end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<script>
    (function ($){

        function receiveTransfers() {
            var created, lastelem;
            var count = $(".selected").children().length;
            created = $('li').last().attr('id');
            lastelem = $('.selected li:last-child').attr('id');
            if (!lastelem) {lastelem = 0;}
            if (!created) {created = 0;}

            $.ajax({
                url: "{{url('ajax')}}/"+created,
                type: "GET",
                success: function(data) {
                    if (data.length){$('#transfers-number').text(data.length);}
                    if (count < 8) {
                        for (var i = 0; i < 5; i++) {

                            $('.external').before('<li id="'+i+'"><a  class="tranmenu" href="{{url("employee-transfer")}}/'+data[i].id+'"><div class="task-info">'+
                             '<div class="desc">تحويلة رقم '+data[i].id+'</div></div></a></li>');
                        }
                    }
                    setTimeout(receiveTransfers,1000);
                },
                error: function(err) {
                    setTimeout(receiveTransfers,5000);
                }
            })
        }

        receiveTransfers(); //call the function when the body load
        
    })(jQuery);
</script>
<style type="text/css">
    img{
        float: left;
    }
</style>