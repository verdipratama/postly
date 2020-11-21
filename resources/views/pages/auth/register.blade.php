@extends('layouts.frontend.app')
@section('content')
<!-- main area start -->
<section>
  <div class="login-area pt-150 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-section">
            <div class="login-title">
              <h3>Registrasi</h3>
              <div class="login-form">
                <form action="/register" method="POST">
                  @csrf
                  <h6>Nama Depan dan Belakang</h6>
                  <div class="login-birthday-display d-flex">
                    <div class="login-form-gorup first-name">
                      <input type="text" id="first_name" class="login-form-control" name="first_name" value="" required
                        autocomplete="first_name" autofocus placeholder="Nama Depan">
                    </div>
                    <div class="login-form-gorup last-name">
                      <input type="text" id="last_name" class="login-form-control " name=" last_name" value="" required
                        autocomplete="last_name" autofocus placeholder="Nama Belakang">
                    </div>
                  </div>
                  <h6>Username</h6>
                  <div class="login-form-gorup">
                    <input type="text" id="username" class="login-form-control" name=" username" value="" required
                      autocomplete="username" autofocus placeholder="Username">
                  </div>
                  <h6>Email</h6>
                  <div class="login-form-gorup">
                    <input type="email" id="email" class="login-form-control" name="email" value="" required
                      autocomplete="email" autofocus placeholder="Email">
                  </div>
                  <h6>Password</h6>
                  <div class="login-form-gorup">
                    <input type="password" id="password" class="login-form-control" name="password" value="" required
                      autocomplete="password" autofocus placeholder="Password">
                  </div>
                  <div class="login-form-gorup">
                    <input type="password" id="password" class="login-form-control" placeholder="Konfirmasi Password"
                      name="password_confirmation">
                  </div>
                  <div class="login-form-button">
                    <button type="submit">Daftar Sekarang</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- main area end -->
@endsection
