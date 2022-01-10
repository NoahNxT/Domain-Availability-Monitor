@extends('layout.auth')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper"
                                 style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">
                            </div>
                        </div>
                        <div class="col-md-8 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="{{ route('login') }}"
                                   class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                                <h5 class="text-muted fw-normal mb-4">Create an account.</h5>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                               autocomplete="Username"
                                               placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Email">
                                    </div>


                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                               autocomplete="current-password" placeholder="Password" required
                                               autocomplete="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password Confirmation</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                               id="password_confirmation"
                                               autocomplete="current-password" placeholder="Password Confirmation"
                                               required autocomplete="password">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-2 mb-2 mb-md-0" type="submit">
                                            Sign up
                                        </button>
                                    </div>
                                    <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign
                                        in</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
