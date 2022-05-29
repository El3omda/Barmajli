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
                            <h2 class="text-center fw-bold mb-5 text-uppercase">Login</h2>
                            <form action="" method="POST">
                                @csrf

                                {{-- Email --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="form-control" />
                                </div>

                                {{-- Password --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" />
                                </div>

                                {{-- Remmeber Me --}}
                                <div class="col-md-6">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input me-2" type="checkbox" name="remamber"
                                            id="remamber" />
                                        <label class="form-check-label" for="remamber">
                                            Remamber Me
                                        </label>
                                    </div>
                                </div>

                                {{-- Login Button --}}
                                <button type="submit" class="btn btn-primary btn-block w-100 shadow-none mb-4">
                                    Login
                                </button>

                                {{-- Social Login --}}
                                <div class="text-center">
                                    <p>Or Sign In With</p>
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
