<!-- Header -->
@include('include.header')

<div class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="content-contain text-center mt-4">
                        <h1>Welcome back, Charles</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/avatar.jpg') }}" alt="Charles Hall" class="img-fluid rounded-circle"
                                        width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Field -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-md" type="email" name="email" placeholder="Enter your email" required />

                                        <!-- Show error if email validation fails -->
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password Field -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-md" type="password" name="password" placeholder="Enter your password" required />

                                        <!-- Show error if password validation fails -->
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <small>
                                            <a href="#">Forgot password?</a>
                                        </small>
                                    </div>

                                    <!-- Login and Signup Buttons -->
                                    <div class="text-center mt-3 d-flex gap-2">
                                        <button type="submit" class="btn btn-sm w-50 btn-lg btn-primary">Sign in</button>
                                        <a href="{{ route('register') }}" class="btn btn-sm w-50 btn-lg btn-outline-primary">Sign up</a>
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


<!-- footer -->
@include('include.footer')
