@extends('layouts.frontend.app')
@section('content')
<div class="main-area pt-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="video-upload-title">
          <h2>What's hot?</h2>
          <p class="percentence">---Login to access this page---</p>
          <div class="custom-form">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <form action="" method="POST" id="submit_post">
                  <input type="hidden" name="" value=""><input type="hidden" id="post_url" value="">
                  <div class="form-group">
                    <textarea name="caption" oninput="mycaption()" id="caption" class="form-control" cols="30"
                      rows="10"></textarea>
                  </div>
                  <div class="video-public-privet-action">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" checked="" id="public" name="status" class="custom-control-input"
                        value="1"><label class="custom-control-label" for="public">Public</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="privet" name="status" class="custom-control-input" value="0"><label
                        class="custom-control-label" for="privet">Privet</label>
                    </div>
                  </div>
                  <div class="submit-post-action f-right">
                    <a href="#">Cancel</a>
                    <button class="disabled" id="upload_btn" type="submit">Post</button>
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
