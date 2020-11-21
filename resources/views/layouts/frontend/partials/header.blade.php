<header>
  <div class="header-area">
    <div class="container">
      <div class="row">
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
      </div>
    </div>
  </div>
</header>
