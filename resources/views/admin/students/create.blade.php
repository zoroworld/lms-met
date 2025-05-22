<!-- Header -->
@include('admin.include.header')
<!-- sidebar -->
@include('admin.include.sidebar')


<!-- main content -->
<div class="admin-content">

    {{-- content header --}}
    @include('admin.include.content.header')

    {{-- student content --}}
    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Create Student</strong></h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="pending">Pending</option>
                                        <option value="active">Active</option>
                                        <option value="suspend">Suspend</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-xxl-6">
                                 <div class="mb-3">
                                    <label for="institute_code" class="form-label">Institute Name</label>
                                    <select class="form-select" id="institute_code" name="institute_code">
                                        <option value="select">Select Institute</option>
                                        @foreach ($institutes as $institute)
                                            <option value="{{ $institute->institute_code }}">{{ $institute->institute_name }}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                            <div>
                               <div class="mb-3">
                                    <label for="studentCourseCategory" class="form-label">Course</label>
                                    <select class="form-select" id="studentCourseCategory" name="course_ids[]" multiple required>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                              
                        </div>

                        <button type="submit" class="btn btn-primary">Create Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- content footer --}}
    @include('admin.include.content.footer')

</div>

<!-- footer -->

@include('admin.include.footer')
