@extends("layout.layout")

@section("stlye")

@endsection


@section("htmlBody")

    <!-- <form action="{{url('member/login')}}" class="form-group">
        
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input class="form-control" type="text" name="txtusername" placeholder="กรอก Username">
        </div>

        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input class="form-control" type="password" name="txtpassword" placeholder="รหัสผ่าน">
        </div>

        <div class="input-group">
            <input class="btn" type="button" name="txtpassword" placeholder="รหัสผ่าน">
        </div>
    
    </form> -->
        

    <h1 class="form-heading">login Form</h1>
    <form action="{{url('member/login')}}" class="form-group">
        <div class="form-group">
            <input type="text" class="form-control" name="txtusername" id="txtusername" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="txtpassword" id="txtpassword" placeholder="Password">
        </div>

        <a href="{{url('#')}}">ลืมรหัสผ่าน</a>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection