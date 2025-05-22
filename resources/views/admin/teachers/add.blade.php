<!-- Header -->
@include('admin.include.header')
<!-- sidebar -->
@include('admin.include.sidebar')


<!-- main content -->
<div class="admin-content">

    {{-- content header --}}
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>View Teacher</strong></h1>

            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('teachers.store') }}" method="POST">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name"  required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email_id" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email_id') is-invalid @enderror"
                                               id="email_id" name="email_id" required>
                                        @error('email_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="mb-3">
                                        <label for="mobile_no" class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control @error('mobile_no') is-invalid @enderror"
                                               id="mobile_no" name="mobile_no"  required>
                                        @error('mobile_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select @error('status') is-invalid @enderror"
                                                id="status" name="status" required>
                                            <option value="">Select Status</option>
                                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="suspend" {{ old('status') == 'suspend' ? 'selected' : '' }}>Suspend</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Institute Code -->
                                      <div class="mb-3">
                                        <label for="instituteName" class="form-label">Institute Name</label>
                                        <select class="form-select @error('institute_code') is-invalid @enderror" id="instituteName" name="institute_code">
                                            <option value="select">Select Institute</option>
                                            @foreach ($institutes as $institute)
                                                <option value="{{ $institute->institute_code }}">{{ $institute->institute_name }}</option>
                                            @endforeach
                                        </select>
                                         @error('institute_code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-success">Add Teacher</button>
                                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
                                </form>
                            </div>
                        </div>


                </div>

            </div>

        </div>
    </div>

    {{-- content footer --}}
    @include('admin.include.content.footer')

</div>

<!-- footer -->

@include('admin.include.footer')
