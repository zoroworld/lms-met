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

            <h1 class="h3 mb-3"><strong>Assign Teacher</strong></h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="card">
                            @include('admin.include.message')
                            <div class="card-body">
                                <h5 class="card-title">Assign Teacher to Class</h5>
                                <form action="{{ route('teachers.assignSubjects.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="teacher_id" class="form-label">Select Teacher</label>
                                        <select name="teacher_id" class="form-select" required>
                                            <option value="" disabled selected>Select a teacher</option>
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                   <!-- Course Dropdown -->
                                    <div class="mb-3">
                                        <label for="courseSelect" class="form-label">Select Course</label>
                                        <select id="courseSelect" name="course_id" class="form-select" required>
                                            <option value="" disabled selected>Select a course</option>
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Subject Dropdown -->
                                    <div class="mb-3">
                                        <label for="subject_id" class="form-label">Select Subject</label>
                                        <select name="subject_id" id="subjectSelect" class="form-select" required>
                                            <option value="" disabled selected>Select a subject</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="class" class="form-label">Batch</label>
                                        <input type="text" class="form-control" name="class" placeholder="Enter Batch">
                                    </div>

                                    <div class="mb-3">
                                        <label for="date" class="form-label">Class Date</label>
                                        <input type="date" class="form-control assign-start-date-js" name="date" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="start_time" class="form-label">Start Time</label>
                                        <input type="time" class="form-control assign-start-end-time-js" name="start_time" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="end_time" class="form-label">End Time</label>
                                        <input type="time" class="form-control assign-start-end-time-js"  name="end_time" required>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Assign</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Assigned Teachers</h5>
                        </div>
                        <div class="card-body py-3">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Teacher</th>
                                        <th>Subject</th>
                                        <th>Institute</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($teachers_assign as $assign)
                                        <tr>
                                            <td>{{ $assign->teacher->name ?? 'N/A' }}</td>
                                            <td>{{ $assign->subject->subject_name ?? 'N/A' }}</td>
                                            <td>{{ $assign->institute->institute_name ?? 'N/A' }}</td>
                                            <td>{{ $assign->course->course_name ?? 'N/A' }}</td>
                                            <td>{{ $assign->batch }}</td>
                                            <td>
                                                @if($assign->status === 'active')
                                                    <span class="badge bg-success">Assigned</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ ucfirst($assign->status) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                <!-- edit -->
                                                <a href="{{ route('teachers.assignSubjects.edit', $assign->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{ route('teachers.assignSubjects.destroy', $assign->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No teacher assignments found.</td>
                                        </tr>

                                    @endforelse
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
