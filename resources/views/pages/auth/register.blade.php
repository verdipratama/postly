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

                <form action="{{ route('register') }}" method="POST">
                  @csrf

                  <h6>Nama Depan dan Belakang</h6>
                  <div class="login-birthday-display d-flex">
                    <div class="login-form-gorup first-name">
                      <input type="text" id="first_name"
                        class="login-form-control @error('first_name') is-invalid @enderror" name="first_name"
                        value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                        placeholder="Nama Depan">
                      @error('first_name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <div class="login-form-gorup last-name">
                      <input type="text" id="last_name"
                        class="login-form-control @error('last_name') is-invalid @enderror" name="last_name"
                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                        placeholder="Nama Belakang">
                      @error('last_name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <h6>Username</h6>
                  <div class="login-form-gorup">
                    <input type="text" id="username" class="login-form-control @error('username') is-invalid @enderror"
                      name=" username" value="{{ old('username') }}" required autocomplete="username" autofocus
                      placeholder="Username">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <h6>Email</h6>
                  <div class="login-form-gorup">
                    <input type="email" id="email" class="login-form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                      placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <h6>Password</h6>
                  <div class="login-form-gorup">
                    <input type="password" id="password"
                      class="login-form-control @error('password') is-invalid @enderror" name="password" value=""
                      required autocomplete="password" autofocus placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="login-form-gorup">
                    <input type="password" id="password"
                      class="login-form-control @error('password_confirmation') is-invalid @enderror"
                      placeholder="Konfirmasi Password" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
