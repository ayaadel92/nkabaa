<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    {!!Html::style('/assets/admin/css/bootstrap.min.css')!!}
    {!!Html::style('/assets/css/bootstrap-rtl.css')!!}
    <!-- bootstrap theme -->
    {!! Html::style('/assets/admin/css/bootstrap-theme.css') !!}
    <!--external css-->
    <!-- font icon -->
    {!! Html::style('/assets/admin/css/elegant-icons-style.css') !!}
    {!! Html::style('/assets/admin/css/font-awesome.min.css') !!}
    <!-- Custom styles -->
    {!! Html::style('/assets/admin/css/style.css') !!}
    {!! Html::style('/assets/admin/css/style-responsive.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">  
    @include('admin.include.header')
    @include('admin.include.sidemenu')
      <!--main content start-->
      
          <section class="wrapper">
            @yield('content')
          </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    {!!Html::script('/assets/admin/js/jquery.js')!!}
    {!! Html::script('/assets/admin/js/bootstrap.min.js') !!}

    <!-- nice scroll -->
    {!! Html::script('/assets/admin/js/jquery.scrollTo.min.js') !!}
    {!! Html::script('/assets/admin/js/jquery.nicescroll.js') !!}

    <!-- jquery validate js -->
    {!! Html::script('/assets/admin/js/jquery.validate.min.js') !!}

    <!-- custom form validation script for this page-->
    {!! Html::script('/assets/admin/js/form-validation-script.js') !!}

    <!--custome script for all page-->
    {!! Html::script('/assets/admin/js/scripts.js') !!}



  </body>
</html>
