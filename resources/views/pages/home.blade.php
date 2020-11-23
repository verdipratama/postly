@extends('layouts.frontend.app')
@section('content')

{{-- @php
    dd(auth()->user())
@endphp --}}

<div class="main-area pt-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-desctiption">
          <div class="jumbotron mt-10">
            <h1 class="display-4">Selamat Datang</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt alias non, dolorum
              tenetur perferendis est accusantium distinctio, sed nostrum voluptatem, totam ab iure commodi? Nostrum
              consectetur voluptatem non ducimus!</p>
            <hr class="my-2">
            <p class="lead">
              <a class="btn btn-primary btn-lg pjax" href="{{ route('register') }}" role="button">Registrasi
                sekarang!</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
