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
              <h3>Login</h3>
              <div class="login-form">
                <form action="/login" method="POST">
                  <h6>Email atau Username</h6>
                  <div class="login-form-gorup">
                    <input type="text" id="email" class="login-form-control " name="email" value=""
                      placeholder="Email atau username" required autocomplete="email" autofocus>
                  </div>

                  <div class="login-form-gorup">
                    <input type="password" id="password" class="login-form-control " name="password" required
                      autocomplete="current-password" placeholder="Password">
                  </div>

                  <div class="login-form-group">
                    <div class="custom-login-remember-forgotten">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember">
                      <label class="form-check-label" for="remember">
                        Ingatkan Saya?
                      </label>
                      <a class="pjax f-right" href="/reset">
                        Lupa Password?
                      </a>
                    </div>
                  </div>
                  <div class="login-form-button">
                    <button type="submit">Login</button>
                  </div>
                  <div class="login-form-group not-registered text-center">
                    <p>Belum Punya Akun?<a class="pjax" href="{{ route('register') }}">Daftar Sekarang!!!</a></p>
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
