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
            <h1 class="h3 mb-3"><strong>Course Management Dashboard</strong></h1>

            <!-- Course Summary Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Courses</h5>
                            <h1 id="totalCourses">{{$totalCount}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Courses</h5>
                            <h1 id="activeCourses">{{$activeCount}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inactive Approval</h5>
                            <h1 id="pendingCourses">{{$inactiveCount}}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course List Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Course List</h5>
                        </div>
                        @include('admin.include.message')
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Course Fee</th>
                                        <th>Institute Name</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->course_code }}</td>
                                        <td>{{ $course->course_fee }}</td>
                                        <td>{{ $course->institute->institute_name }}</td>
                                        <td><span class="badge bg-{{ $course->status == 'active' ? 'success' : 'warning' }}">{{ ucfirst($course->status) }}</span></td>
                                        <td>{{ $course->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-bs-target="#ISC{{$course->course_code}}" data-bs-toggle="modal">See Subject</button>
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                       
                                        <div class="modal fade" id="ISC{{$course->course_code}}" aria-hidden="true" aria-labelledby="#{{$course->course_code}}Label" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="{{$course->course_code}}Label">List of subject</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        @foreach($course->subjects as $subject)
                                                            <li class="list-group-item">{{ $subject-> subject_name}} => {{ $subject-> subject_description}} </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
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
