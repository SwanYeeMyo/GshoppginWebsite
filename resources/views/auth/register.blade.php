@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-lg-5 shadow ">

            <div class="col-md-6 col-12 p-3 rounded  ">
                <img src="{{ asset('img/life_style_working_02.jpg') }}" class="img-fluid w-100" alt="">
            </div>
            <div class="col-md-6 col-12 mt-md-5 p-3 rounded p-md-5 mt-lg-5 pt-lg-5 shadow-lg">
                <h6 class="text-primary">Sign Up </h6>
                <p>Please fill the form with correct so that we can contact you .</p>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group my-3">
                        <input type="text"
                            class="form-control  @error('name')
                        is-invalid
                        @enderror"
                            placeholder="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <input type="text"
                            class="form-control    @error('email')
                        is-invalid
                        @enderror"
                            placeholder="email" name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group my-3">
                        <input type="text"
                            class="form-control @error('password')
                        is-invalid
                        @enderror"
                            placeholder="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <input type="text"
                            class="form-control @error('password_confirmation')
                        is-invalid
                        @enderror"
                            placeholder="Confirm Password" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <textarea name="address"
                            class="form-control @error('address')
                            is-invalid
                        @enderror"
                            placeholder="address" id="" cols="10" rows="5"></textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn w-100 btn-outline-primary">Register</button>
                    <h6 class="mt-3 text-center">Already have an Account ?<a href="{{ route('login') }}">Sign Here</a>
                    </h6>
                </form>
            </div>


        </div>
    </div>
@endsection
