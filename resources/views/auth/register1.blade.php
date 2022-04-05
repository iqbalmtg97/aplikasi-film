@extends('layouts.apps')

@section('content')
    <h3 class="text-center mt-0 m-b-15">
        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="24" alt="logo"></a>
    </h3>

    <div class="p-3">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf

            <input class="form-control" name="role" type="hidden" required="" value="User">

            <div class="form-group row">
                <div class="col-12">
                    <input class="form-control" name="email" type="email" required="" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input class="form-control" name="name" type="text" required="" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input class="form-control" name="username" type="text" required="" placeholder="Username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input class="form-control" id="password" name="password" type="password" required=""
                        placeholder="Password" autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input class="form-control" id="password-confirmation" name="password_confirmation" type="password"
                        required="" placeholder="Confirm Password" autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div class="form-group row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#"
                                class="text-muted">Terms and Conditions</a></label>
                    </div>
                </div>
            </div> --}}

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-danger btn-block waves-effect waves-light"
                        type="submit">{{ __('Register') }}</button>
                </div>
            </div>

            <div class="form-group m-t-10 mb-0 row">
                <div class="col-12 m-t-20 text-center">
                    <a href="{{ url('/login') }}" class="text-muted">Already have account?</a>
                </div>
            </div>
        </form>
    </div>
@endsection
