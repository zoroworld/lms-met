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
            <h1 class="h3 mb-3"><strong>Attendance Dashboard</strong></h1>

            <!-- Course Selection -->
           
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="courseSelect" class="form-label">Select Course</label>
                        <select class="form-select" id="courseSelect" name="course_id" onchange="this.form.submit()">
                            <option value="">-- Select a Course --</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                    {{ $course->course_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
     

            <!-- Attendance Summary Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Total Students</h5>
                            <h1 id="totalStudents">{{ $totalStudents }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Present Today</h5>
                            <h1 id="presentToday">{{ $presentToday }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Absent Today</h5>
                            <h1 id="absentToday">{{ $absentToday }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attendance Table -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detailed Attendance Records</h5>
                        </div>
                        @include('admin.include.message')
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendanceRecords as $attendance)
                                        <tr data-course-id="{{ $attendance->course->id }}">
                                            <td>{{ $attendance->student->id }}</td>
                                            <td>{{ $attendance->student->name }}</td>
                                            <td>
                                                @if($attendance->status === 'present')
                                                    <span class="badge bg-success">Present</span>
                                                @else
                                                    <span class="badge bg-danger">Absent</span>
                                                @endif
                                            </td>
                                            <td>{{ $attendance->date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{-- Pagination if required --}}
                 
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const courseSelect = document.getElementById('courseSelect');
        const rows = document.querySelectorAll('tbody tr');

        courseSelect.addEventListener('change', function () {
            const selectedCourseId = this.value;

            rows.forEach(row => {
                const courseId = row.getAttribute('data-course-id');
                if (selectedCourseId === "all" || selectedCourseId === courseId) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
