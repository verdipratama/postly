@extends('layouts.frontend.app')
@section('content')

<div class="container">
  <div class="row justify-content-center pt-200 pb-150">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Reset Password
        </div>

        <div class="card-body">
          <div class="custom-form">
            <form method="POST" action="">
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">YOUR E-MAIL</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="" required
                    autocomplete="email" autofocus>
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn">
                    TESSS
                  </button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
