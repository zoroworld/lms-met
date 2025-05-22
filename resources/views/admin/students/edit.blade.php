<!-- Header -->
@include('admin.include.header')
<!-- Sidebar -->
@include('admin.include.sidebar')

<!-- Main Content -->
<div class="admin-content">
    {{-- Content Header --}}
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Edit Student</strong></h1>

            <div class="row">
                <div class="col-md-8">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                        </div>

                         <div class="mb-3">
                            <label class="form-label">INSTITUTE CODE</label>
                            <input type="text" name="institute_code" value="{{ $student->institute_code }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control">{{ $student->address }}</textarea>
                        </div>

                        

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ $student->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $student->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Student</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    {{-- Content Footer --}}
    @include('admin.include.content.footer')
</div>

<!-- Footer -->
@include('admin.include.footer')
