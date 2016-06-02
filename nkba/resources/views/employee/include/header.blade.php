<!--header start-->
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="/employee-transfer" class="logo">نقابة <span class="lite">المهندسين</span></a>
    <!--logo end-->

    <div class="top-nav notification-row">                
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- task notificatoin start -->
            <li id="task_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="icon-task-l"></span>
                    <span class="badge bg-important">5</span>
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
                    if (lastelem < 5) {
                        for (var i = 0; i < 5; i++) {

                            $('.selected').append('<li id="'+i+'"><a  class="tranmenu" href="{{url("employee-transfer")}}/'+data[i].id+'"><div class="task-info">'+
                             '<div class="desc">تحويلة رقم ' + (i+1) +'</div></div></a></li>');
                        }
                    }
                    setTimeout(receiveTransfers,1000);
                },
                error: function(err) {
                    setTimeout(receiveTransfers,5000);
                }
            })
        }
          $('.selected').on('click','a',function() {
            $(this).parent().remove();
            // $(this).parent()
            // parentNode.parentNode.removeChild(parentNode)
        });
        receiveTransfers(); //call the function when the body load

    })(jQuery);

    // var pusher = new Pusher('{{ env("PUSHER_KEY")}}');
    // var channel = pusher.subscribe('event-tansfer');

    // channel.bind('App\Events\TransferEvent', function(data) {
    //  console.log(data);
    // });
</script>