@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-lg-5 shadow-sm ">
            <div class="col-md-6 col-12 ">
                <img src="{{ asset('img/6343825.jpg') }}" class="img-fluid w-100" alt="">
            </div>
            <div class="col-md-6 col-12 mt-md-5 p-3 rounded p-md-5 mt-lg-5 pt-lg-5 shadow-lg">
                <form action="{{ route('login') }}" class="mt-lg-5 pt-lg-5" method="POST">
                    <h6 class="text-primary">Welcome Back</h6>
                    <p>Please Connect to your account so we can have more info .</p>
                    @csrf
                    <div class="form-group my-3">
                        <input type="text" placeholder="abcd@gmail.com"
                            class="form-control @error('email')
                        is-invalid
                        @enderror"
                            name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <input type="password" placeholder="password" id="text"
                            class="form-control @error('password')
                        is-invalid
                        @enderror"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-check form-switch my-3">
                        <input class="form-check-input" id="switch" onclick="showPassword()" value="button"
                            type="checkbox" role="switch" id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Show Password</label>
                    </div>
                    <button class="btn btn-outline-primary w-100">Login</button>
                    <h6 class="mt-3 text-center">Don't have an Account ?<a href="{{ route('Register') }}">Sign Here</a></h6>
                </form>
            </div>


        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
