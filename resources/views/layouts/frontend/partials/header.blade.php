<header>
  <div class="header-area">
    <div class="container">
      <div class="row">

        @auth

        <div class="col-lg-3">
          <div class="logo-area">
            <input type="hidden" id="logo_change_url" value="logo_change">
            <a class="pjax" href="/"><img id="logo_mode" src="{{ asset('frontend/img/logo/logo.png') }}" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="header-search-area">
            <div class="header-searchbox text-center">
              <input type="text" placeholder="Search" id="search" oninput="" autocomplete="off">
            </div>
            <div class="search-append">
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="header-right-section f-right">
            <div class="upload-btn">
              <a class="pjax" href="/"><img id="home_mode" class="home" src="{{ asset('frontend/img/home.png') }}"
                  alt=""></a>
            </div>
            <div class="upload-btn">
              <div class="notification-menu">
                <a href="#" onclick="notification_unread()" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"><img id="notification_mode" src="{{ asset('frontend/img/notification.png') }}"
                    alt=""></a>
                <div class="notification-count">
                  <span class="notification_count d-none">123</span>
                </div>
                <div class="dropdown-menu dropdown-notification dropdown-menu-right">
                  <div class="notification-check">
                    <div class="notification-check">
                      <div class="not-found text-center">
                        <span>Tidak ada notifikasi.</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="profile-seeting">
              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="profile"
                  src="{{ asset('frontend/img/users.png') }}" alt=""></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="/" class="pjax dropdown-item">{{ auth()->user()->username }}</a>
                <a href="/" class="pjax dropdown-item">Edit Profile</a>
                <a href="/" class="pjax dropdown-item">Settings</a>

                @if (auth()->user()->is_admin == 1)
                <div class="dropdown-border">
                  <a href="{{ route('dashboard') }}" class="pjax dropdown-item">Admin Panel</a>
                </div>
                @endif

                <div class="dropdown-border">
                  {{-- Mengamankan logout dari cross site scripting --}}
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="pjax dropdown-item">Logout</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

        @endauth

        @guest

        <div class="col-lg-3">
          <div class="logo-area">
            <input type="hidden" id="logo_change_url" value="logo_change">
            <a class="pjax" href="/"><img id="logo_mode" src="{{ asset('frontend/img/logo/logo.png') }}" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="header-search-area">
            <div class="header-searchbox text-center">
              <input type="text" placeholder="Search" id="search" oninput="" autocomplete="off">
            </div>
            <div class="search-append">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="header-right-section f-right">
            <div class="upload-btn">
              <a class="pjax" href=""><img id="upload_mode" class="upload" src="{{ asset('frontend/img/upload.png') }}"
                  alt=""></a>
            </div>
            <a href="/login" class="btn login-btn pjax">Login</a>
          </div>
        </div>

        @endguest

      </div>
    </div>
  </div>
</header>
