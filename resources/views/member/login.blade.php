@extends("layout.layout")

@section("style")
    <style type="text/css">

.panel h2{ color:#444444; font-size:18px; margin:5px 5px 5px 5px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 5px auto 30px;
  max-width: 38%;
  padding: 30px 70px 40px 70px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

    </style>
@endsection


@section("htmlBody")
        
<div class="login-form">
    <div class="main-div">
        <div class="panel">
            <h2>เข้าสู่ระบบสมาชิก</h2>
        </div>
        <form id="Login" action="{{url('member/login')}}" method="post">
            {{ csrf_field() }}
            
            <div class="form-group">
                <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="Username">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password">
            </div>

            <div class="forgot">
                <a href="reset.html">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </div>
</div>



@endsection