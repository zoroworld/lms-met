<!-- Header -->
@include('include.header')

<div class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="content-contain  text-center mt-4">
                        <h1>Get started</h1>
                        <p class="lead">
                            Start creating the best possible user experience for you customers.
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Name -->
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input
                                                    class="form-control form-control-md @error('name') is-invalid @enderror"
                                                    type="text" name="name" value="{{ old('name') }}"
                                                    placeholder="Enter your name" />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input
                                                    class="form-control form-control-md @error('email') is-invalid @enderror"
                                                    type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="Enter your email" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Role and phone-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- role -->
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select
                                                    class="form-control form-control-md @error('role') is-invalid @enderror"
                                                    name="role">
                                                    <option value="select" selected>Select your role</option>
                                                    <option value="student">Student</option>
                                                    <option value="trainer">Trainer</option>
                                                </select>
                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- phone -->
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input
                                                    class="form-control form-control-md @error('phone') is-invalid @enderror"
                                                    type="text" name="phone" value="{{ old('phone') }}"
                                                    placeholder="Enter your phone number" />
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Password -->
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input
                                                    class="form-control form-control-md @error('password') is-invalid @enderror"
                                                    type="password" name="password" placeholder="Enter password" />
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <input
                                                    class="form-control form-control-md @error('password_confirmation') is-invalid @enderror"
                                                    type="password" name="password_confirmation"
                                                    placeholder="Confirm password" />
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Institute Code -->
                                            <div class="mb-3">
                                                <label class="form-label">Institute Code</label>
                                                <select
                                                    class="form-control form-control-md @error('institute_code') is-invalid @enderror"
                                                    name="institute_code">
                                                    <option value="select" selected>Select your Institute</option>
                                                    <option value="INC41"
                                                        {{ old('institute_code') == 'INC41' ? 'selected' : '' }}>INC41
                                                    </option>
                                                    <option value="INC521"
                                                        {{ old('institute_code') == 'INC521' ? 'selected' : '' }}>
                                                        INC521</option>
                                                </select>
                                                @error('institute_code')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Status -->
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select
                                                    class="form-control form-control-md @error('status') is-invalid @enderror"
                                                    name="status">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- address -->
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input
                                            class="form-control form-control-md @error('address') is-invalid @enderror"
                                            type="text" name="address" value="{{ old('address') }}"
                                            placeholder="Enter your address (optional)" />
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-center mt-3">
                                        <button type="submit" class="w-100 btn-sm btn btn-lg btn-primary">Sign
                                            up</button>
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

<!-- Header -->
@include('include.footer')
