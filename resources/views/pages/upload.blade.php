@extends('layouts.frontend.app')
@section('content')

<!-- error-alert start -->
<div class="error-message-area">
  <div class="error-content">
    <h4 class="error-msg">{{ __('Your Settings Successfully Updated') }}</h4>
  </div>
</div>
<!-- error-alert end -->

<div class="main-area pt-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="video-upload-title">
          <h2>{{ __('Whats Hot?') }}</h2>
          <p class="percentence">{{ __('Post a video to your account') }}</p>
          <div class="custom-form">
            <div class="row">
              <div class="col-lg-6 mx-auto">

                <form action="{{ route('upload') }}" method="POST">
                  @csrf

                  <div class="form-group">
                    <textarea name="caption" oninput="mycaption()"
                      class="form-control @error('caption') is-invalid @enderror" cols="30" rows="10"></textarea>
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="video-public-privet-action">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" checked="" id="public" name="status" class="custom-control-input"
                        value="1"><label class="custom-control-label" for="public">Public</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="privet" name="status" class="custom-control-input" value="0"><label
                        class="custom-control-label" for="privet">Private</label>
                    </div>
                  </div>

                  <div class="submit-post-action f-right">
                    <a href="{{ route('upload') }}">Cancel</a>
                    <button type="submit">Post</button>
                  </div>
                </form>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.custom-form -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
