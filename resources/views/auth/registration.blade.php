@extends('auth.template.login-main')

@section('content')
<div class="row m-0">
    <div class="col-12 p-0">    
      <div class="login-card">
        <div>
          <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
          <div class="login-main"> 
            <form class="theme-form" action="/registration" method="POST">
              @csrf
              <h4>Buat akun kamu</h4>
              <p>Daftarkan detail diri kamu untuk bergabung</p>
              <div class="form-group">
                <label class="col-form-label pt-0">Nama</label>
                <div class="row g-2">
                  <div class="col-12">
                    <input class="form-control" type="text" required="" autofocus name="name" id="name" placeholder="Nama lengkap">
                  </div>
                
                </div>
              </div>
          
              <div class="form-group">
                <label class="col-form-label">Email</label>
                <input class="form-control" type="email" required="" name="email" id="email" placeholder="gurubaik@gmail.com">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                  <input class="form-control" type="password" name="password" id="password"
                  required="" placeholder="*********">
                  <div class="show-hide"><span class="show"></span></div>
                </div>
              </div>
              <div class="form-group mb-0">
              
                <button class="btn btn-primary btn-block w-100" type="submit">Buat Akun</button>
              </div>
             
              <p class="mt-4 mb-0">Sudah pernah daftar?<a class="ms-2" href="/">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection