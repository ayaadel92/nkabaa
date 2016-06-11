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
                <div class="panel-heading"><h3>Login</h3></div>
                <div class="panel-body">
                   <div class="jumbotron"> 
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> &nbsp Member_id</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="login" value="{{ old('login') }}">

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            
                            <label class="col-md-4 control-label"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>&nbsp &nbsp Password</label>

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
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <center>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success" >
                                        <i class="fa fa-btn fa-sign-in"></i>Login
                                    </button>
                                      {{-- class="btn btn-link" --}}
                                      <br>
                                   <a  href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                      </center>
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
