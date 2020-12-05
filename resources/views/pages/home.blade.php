@extends('layouts.frontend.app')
@section('content')

<div class="main-area pt-50">

  <div class="text-center">
    @auth
    <img src="{{ asset('frontend/img/users.png') }}" alt class="ui-w-100 rounded-circle">
    <div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
      <h4 class="font-weight-bold my-4">{{ auth()->user()->first_name }}</h4>
      <div class="text-muted mb-4">
        {{ __('a senior UX Developer with five years of industry experience!') }}
      </div>
    </div>
    @endauth

    @guest
    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt class="ui-w-100 rounded-circle">
    <div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
      <h4 class="font-weight-bold my-4">{{ __('John Doe') }}</h4>
      <div class="text-muted mb-4">
        {{ __('a senior UX Developer with five years of industry experience!') }}
      </div>
    </div>
    @endguest
  </div>

  <div class="page-content container note-has-grid">
    <div class="tab-content bg-transparent">
      <div id="note-full-container" class="note-has-grid row">

        <div class="col-md-4 single-note-item all-category note-important">
          <div class="card card-body">
            <h5 class="note-title text-truncate w-75 mb-0">
              {{ __('@johndoe') }}
            </h5>
            <p class="note-date font-12 text-muted">{{ __('4 Fabruary 2021') }}</p>
            <div class="note-content">
              <p class="note-inner-content text-muted">
                {{ __('Blandit tempus porttitor aasfs. Integer posuere erat a ante
                venenatis.') }}
              </p>
            </div>
            <div class="d-flex align-items-center">
              <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>

@endsection
