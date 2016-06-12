<!DOCTYPE html>
<html lang="en">
<head>
	<!-- jQuery -->
    <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
    <!-- jQuery UI -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" media="all" rel="stylesheet" type="text/css" />
    <!--     PNotify -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/pnotify.core.min.css"/>
<!--     <link rel="stylesheet" href="/assets/css/pnotify.buttons.min.css"/> 
--> <link href="/assets/css/pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/css/jquery.pnotify.default.css">
<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
</style>
@include('headers')
</head>
<body>

<nav class="navbar navbar-default " role="navigation">
<ul class="nav pull-right">
            <!-- task notificatoin start -->
            <li id="task_notificatoin_bar" class="dropdown ">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicon glyphicon-bell col" href="#">
                    <span class="icon-task-l" style="margin-right: 18px;"></span>
                    <span class="badge bg-important" id="transfers-number"></span>
                </a>              
                <ul class="dropdown-menu extended tasks-bar selected ">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">التحويلات الحالية</p>
                    </li>
                    <li class="external">
                       <a class="navbar-brand" href="/transfer">عرض جميع التحويلات</a>
                    </li>
                </ul>
            </li>
            <!-- task notificatoin end -->
        </ul><ul class="nav pull-left ">
                      <li ><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>خروج</a></li></ul>

</nav>

@yield('content')

<!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- pnotify -->
    <script type="text/javascript" src="/assets/js/jquery.pnotify.js"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="/assets/js/pnotify.core.min.js"></script>
    <!--     <script type="text/javascript" src="assets/js/pnotify.buttons.min.js"></script>-->
    <script type="text/javascript" src="/assets/js/pnotify.custom.min.js"></script>
    <style type="text/css">
        .col{
            color: #1abc9c;
        }
    </style>
    <script type="text/javascript">
            function receive_acceptance() {
            var created, lastelem;
            var count = $(".selected").children().length;
            updated = $('li').last().attr('id');
            lastelem = $('.selected li:last-child').attr('id');
            if (!lastelem) {lastelem = 0;}
            if (!updated) {updated = 0;}
$.ajax({
                url: "{{url('ajax-response')}}/"+updated,
                type: "GET",
                success: function(data) {
                    if (data.length){$('#transfers-number').text(data.length);}
                    if (count < 8) {
                        for (var i = 0; i < 5; i++) {

                            $('.external').before('<li id="'+i+'"><a  class="tranmenu" href="{{url("transfer")}}/'+data[i].id+'"><div class="task-info">'+
                               '<div class="desc">تحويلة رقم '+data[i].id+'</div></div></a></li>');
                        }
                    }
                    setTimeout(receive_acceptance,1000);
                },
                error: function(err) {
                    setTimeout(receive_acceptance,5000);
                }
            })
        }
        receive_acceptance(); //call the function when the body load

    })(jQuery);
</script>
</body>
</html>


