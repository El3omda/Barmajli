@extends('layout.app')

@section('title')
    Barmajli | Register
@endsection

@section('content')
    <div class="container my-5">
        <section class="mt-100">

            <div class="card mx-4 mx-md-5 shadow-5-strong">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="text-center fw-bold mb-5 text-uppercase">Register</h2>
                            <form action="/register/store" method="POST">
                                @csrf

                                {{-- Name --}}
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="first_name">First name</label>
                                            <input type="text" id="first_name" name="first_name"
                                                value="{{ old('first_name') }}" class="form-control" />
                                            @error('first_name')
                                                <small class="fw-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="last_name">Last name</label>
                                            <input type="text" id="last_name" name="last_name"
                                                value="{{ old('last_name') }}" class="form-control" />
                                            @error('last_name')
                                                <small class="fw-bold text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="form-control" />
                                        @error('email')
                                            <small class="fw-bold text-danger">{{ $message }}</small>
                                        @enderror
                                </div>

                                {{-- Gender --}}
                                <div class="row">
                                    {{-- Male --}}
                                    <div class="col-md-6">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input me-2" type="radio" name="gender" value="male" id="male"/>
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                    </div>

                                    {{-- Female --}}
                                    <div class="col-md-6">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input me-2" type="radio" name="gender" value="female" id="female"/>
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    @error('gender')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" />
                                    @error('password')
                                        <small class="fw-bold text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Register Button --}}
                                <button type="submit" class="btn btn-primary btn-block w-100 shadow-none mb-4">
                                    Register
                                </button>

                                {{-- Social Register --}}
                                <div class="text-center">
                                    <p>Or Sign Up With</p>
                                    <a href="" type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a href="" type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </a>

                                    <a href="" type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="" type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Section: Design Block -->
@endsection
