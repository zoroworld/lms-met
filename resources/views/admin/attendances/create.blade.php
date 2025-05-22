@include('admin.include.header')
@include('admin.include.sidebar')

<div class="admin-content">
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container mt-5">
            <h2 class="mb-4 text-center">Student Attendance</h2>

            <form action="{{ route('store.attendance') }}" method="POST">
                @csrf

                <!-- Select Course -->
                <div class="mb-3">
                    <label for="courseSelect" class="form-label">Select Course</label>
                    <select id="courseSelect" name="courseSelect" class="form-select">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Select Date -->
                <div class="mb-3">
                    <label for="date" class="form-label">Select Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <!-- Students Attendance -->
                <div id="studentAttendanceContainer"></div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-success">Submit Attendance</button>
                </div>
            </form>
        </div>
    </div>

    @include('admin.include.content.footer')
</div>

<script>
    const coursesWithStudents = @json($courses);
</script>

@include('admin.include.footer')

