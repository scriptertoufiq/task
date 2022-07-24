@extends('layouts.admin.app')
@section('title', 'Reset')
@section('content')

<div class="signUP-admin">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="signUP-admin-left position-relative">
                    <div class="signUP-overlay">
                        <img class="svg signupTop" src="{{ asset('admin/img/svg/signupTop.svg') }}" alt="img" />
                        <img class="svg signupBottom" src="{{ asset('admin/img/svg/signupBottom.svg') }}" alt="img" />
                    </div>
                    <div class="signUP-admin-left__content">
                        {{-- <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                            <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="#">a</a>
                            <span class="text-dark">admin</span>
                        </div> --}}
                        <h1>Stand Up</h1>
                    </div>
                    <div class="signUP-admin-left__img">
                        <img class="img-fluid svg" src="{{ asset('admin/img/svg/signupIllustration.svg') }}"
                            alt="img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                <div class="signUp-admin-right  p-md-40 p-10">
                    <div
                        class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                        <p class="mb-0">
                            Already have an account?
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="color-primary">Sign In</a>
                            @endif
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10 col-md-12 ">
                            <div class="edit-profile mt-md-25 mt-0">
                                <div class="card border-0">
                                    <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                        <div class="edit-profile__title">
                                            <h6>Send Password Reset Link   <span class="color-primary">Stand Up</span></h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="edit-profile__body">
                                            <form method="POST" action="{{ route('password.update') }}">
                                                @csrf
                                                <div class="form-group mb-20">
                                                    <label for="name">email address</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required placeholder="Email"
                                                        autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div
                                                    class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Send Password Reset Link') }}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
