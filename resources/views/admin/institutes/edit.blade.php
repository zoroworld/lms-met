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

            <h1 class="h3 mb-3"><strong>Edit Institute</strong></h1>

            <!-- Edit Institute Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Update Institute</h5>
                </div>
                <div class="card-body"> 
                    <form action="{{ route('update.institutes', $institute->id) }}" method="POST">
                        @csrf
                        @method('PUT') 

                        <div class="mb-3">
                            <label class="form-label">Institute code</label>
                            <input type="text" class="form-control" name="instituteCode" value="{{ $institute->institute_code }}" placeholder="Enter Institute code">
                        </div>
                        <div class="mb-3">
                            <label for="instituteName" class="form-label">Institute name</label>
                            <input type="text" class="form-control" name="instituteName" value="{{  $institute->institute_name }}" placeholder="Enter Institute name">
                        </div>
                        <div class="mb-3">
                            <label for="instituteAddress" class="form-label">Institute address</label>
                            <input type="text" class="form-control" name="instituteAddress" value="{{ $institute->institute_address }}" placeholder="Institute address">
                        </div>
                        <div class="mb-3">
                            <label for="instituteStatus" class="form-label">Status</label>
                            <input type="text" class="form-control" name="instituteStatus" value="{{  $institute->status }}" placeholder="Status">
                        </div>

                        <input type="submit" value="Update Institute" class="btn btn-primary">
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
