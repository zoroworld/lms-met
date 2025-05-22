<!-- Header -->
@include('admin.include.header')
<!-- sidebar -->
@include('admin.include.sidebar')

<!-- main content -->
<div class="admin-content">
    {{-- content header --}}
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container-fluid p-4">
            <h1 class="h3 mb-3"><strong>Create New Course</strong></h1>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="createCourseForm" action="{{ route('store.courses') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="course_name" class="form-label">Course Title</label>
                                    <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course title" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_code" class="form-label">Course Code</label>
                                    <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Enter course code" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_type" class="form-label">Course Type</label>
                                    <select class="form-select" id="course_type" name="course_type" required>
                                        <option value="">Select type</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="course_duration" class="form-label">Course Duration (in months)</label>
                                    <input type="number" class="form-control" id="course_duration" name="course_duration" min="1" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_fee" class="form-label">Course Fee</label>
                                    <input type="number" step="0.01" class="form-control" id="course_fee" name="course_fee" min="0" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_start_date" class="form-label">Start Date</label>
                                    <input type="text" class="form-control assign-start-date-js"  name="course_start_date" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_end_date" class="form-label">End Date</label>
                                    <input type="text" class="form-control assign-end-date-js" id="course_end_date" name="course_end_date" required>
                                </div>

                                <div class="mb-3">
                                    <label for="course_description" class="form-label">Course Description</label>
                                    <textarea class="form-control" id="course_description" name="course_description" rows="4" placeholder="Enter course description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Additional Notes</label>
                                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Optional notes"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="courseCategory" class="form-label">Subjects</label>
                                    <select class="form-select" id="courseCategory" name="subject[]" multiple>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="instituteName" class="form-label">Institute Name</label>
                                    <select class="form-select" id="instituteName" name="institute_code">
                                        <option value="select">Select Institute</option>
                                        @foreach ($institutes as $institute)
                                            <option value="{{ $institute->institute_code }}">{{ $institute->institute_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="courseImage" class="form-label">Course Image</label>
                                    <input type="file" class="form-control" id="courseImage" name="course_image">
                                </div>

                                <button type="submit" class="btn btn-primary">Create Course</button>
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
