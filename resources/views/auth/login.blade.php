@extends('template')
@section('content')
  <!-- header section end-->
  <!-- login section start-->
  <form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">แผนพัฒนาการศึกษาเทศบาลเมืองสิงหนคร</h1>
    </div>
  </div>
  <div class="login_section">
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">เข้าสู่ระบบ</h5>
            <form class="form-signin">
              <div class="form-label-group">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputEmail">อีเมล์</label>
              </div>
              <div class="form-label-group">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="inputPassword">รหัสผ่าน</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">จดจำรหัสผ่าน</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">ล๊อคอิน</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- login section end-->

  <!-- footer section start-->

  <!-- footer section end-->
  @endsection
