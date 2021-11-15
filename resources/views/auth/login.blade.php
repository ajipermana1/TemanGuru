@extends('auth.template.login-main')

@section('content')
<div class="row m-0">
    <div class="col-12 p-0">
      <div class="login-card">
        <div>
          {{-- <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div> --}}
          <div class="login-main">

            <form class="theme-form" action="/login" method="POST">
              @csrf
              <h4>Login sebelum masuk</h4>
              <p>Masukan detail akun kamu</p>


              @if (session()->has('success'))
              <div class="alert alert-success p-0 " role="alert">
                <p style="color:black" class="text-center pt-2">{{ session('success') }}</p>
              </div>
              @endif
              @if (session()->has('loginError'))
              <div class="alert alert-danger p-0 " role="alert">
                <p style="color:black" class="text-center pt-2">{{ session('loginError') }}</p>
              </div>

          @endif


              <div class="form-group">
                <label class="col-form-label">Email</label>
                <input class="form-control" type="email" name="email" autofocus id="email" required="" placeholder="gurubaik@gmail.com">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                  <input class="form-control" type="password" id="password" name="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show">                         </span></div>
                </div>
              </div>
              <div class="form-group mb-0">

                <div class="text-end mt-3">
                  <button class="btn btn-primary btn-block w-100" type="submit">Login</button>
                </div>
              </div>

              <p class="mt-4 mb-0 text-center">Belum punya akun?<a class="ms-2" href="/registration">Daftar Sekarang</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
