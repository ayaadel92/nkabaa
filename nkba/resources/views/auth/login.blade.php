<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

@extends('layouts.app')
<!-- Latest compiled and minified CSS -->

@section('content')
<div class="container">
    <div class="row">
         <br><br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
                <center>
                   
                <div class="panel-heading"><h3>تسجيل الدخول</h3></div>
                <div class="panel-body">
                   <div class="jumbotron"> 
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> &nbsp رقم العضوية</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="login" value="{{ old('login') }}">

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                          

{{-- <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div> --}}



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            
                            <label class="col-md-4 control-label"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>&nbsp &nbsp كلمة المرور</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> تذكرنى
                                    </label>
                                </div>
                            </div>
                        </div>
                         <center>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success" >
                                    <i class="fa fa-btn fa-sign-in"></i>دخول
                                </button>
                                  {{-- class="btn btn-link" --}}
                                  <br>
                               <a  href="{{ url('/password/reset') }}">نسيت كلمة المرور؟</a>
                            </div>
                        </div>
                      </center>
                       <div><h6>تنويه !!<br> فى حاله التسجيل لأول مره , اذا كنت من احد اعضاء نقابه المهندسين فبأمكانك التسجيل وسيتم ارسال رساله عبر البريد الالكترونى الخاص بك . اذ لم تكن من احد اعضاء النقابه فلن تتمكن من التسجيل داخل الموقع ! </h6></div>
                    </form>
                   </div>
                </div>
            </div>
            <br><br><br><br><br><br>

             </center>
        </div>
    </div>
</div>
<script>
    function sub(){
        alert();
    }
</script>
@endsection
