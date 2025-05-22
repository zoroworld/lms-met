<!-- Meeting Dashboard -->
@include('admin.include.header')
@include('admin.include.sidebar')

<div class="admin-content">
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container mt-5">
            <h2 class="mb-4 text-center">Add a Meeting</h2>
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('store.meetings') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="meetingSubject" class="form-label">Meeting Subject</label>
                                <input type="text" class="form-control" name="meetingSubject"
                                    placeholder="Enter meeting subject" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="meetingLink" class="meeting-link-app form-label mb-0">
                                    <span>Meeting Link</span>
                                    <a href="https://meet.google.com/landing" target="_blank" class="gmeetingwork"><img
                                            src="{{ asset('assets/adminassets/img/photos/gmeet.png') }}"
                                            alt=""></a>
                                    <a href="https://www.zoom.com/home" target="_blank"
                                        class="zoomwork"><img
                                            src="{{ asset('assets/adminassets/img/photos/zoom.png') }}"
                                            alt=""></a>
                                </label>
                                <input type="url" class="form-control" name="meetingLink" placeholder="Enter meeting link" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Course Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="courseSelect" class="form-label">Select Course</label>
                                <select class="form-select" name="courseSelect" id="courseSelect" required>
                                    <option selected disabled>Select Course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Subject Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="subjectSelect" class="form-label">Select Subject</label>
                                <select class="form-select" name="subjectSelect" id="subjectSelect" required>
                                    <option selected disabled>Select Subject</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Teacher Dropdown -->
                            <div class="col-md-4 mb-3">
                                <label for="teacherSelect" class="form-label">Select Teacher</label>
                                <select class="form-select" name="teacherSelect" id="teacherSelect" required>
                                    <option selected disabled>Select Teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="meetingDate" class="form-label">Date</label>
                                <input type="text" class="form-control assign-start-date-js" name="meetingDate" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="meetingTime" class="form-label">Time</label>
                                <input type="text" class="form-control assign-start-end-time-js" name="meetingTime" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="meetingStatus" class="form-label">Status</label>
                                <select class="form-select" name="meetingStatus">
                                    <option value="scheduled">Scheduled</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="complete">Complete</option>
                                    <option value="cancel">Cancel</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Schedule Meeting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.include.content.footer')
</div>

@include('admin.include.footer')
