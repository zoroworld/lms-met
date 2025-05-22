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
            <h1 class="h3 mb-3"><strong>Edit Subject</strong></h1>

            <!-- Edit Subject Form -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Update Subject Details</h5>
                            <form id="editSubjectForm" action="{{ route('update.subjects', $subject->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="subjectName" class="form-label">Subject Name</label>
                                    <input type="text" class="form-control" name="subjectName" value="{{ old('subjectName', $subject->subject_name) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="subjectCode" class="form-label">Subject Code</label>
                                    <input type="text" class="form-control" name="subjectCode" value="{{ old('subjectCode', $subject->subject_code) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="subjectDescription" class="form-label">Description</label>
                                    <textarea class="form-control" name="subjectDescription" rows="3">{{ old('subjectDescription', $subject->subject_description) }}</textarea>
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="active" {{ $subject->status === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $subject->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Subject</button>
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
