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

            <h1 class="h3 mb-3"><strong>Manage Institutes</strong></h1>

            <!-- Add Institute Form -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add New Institute</h5>
                </div>
                <div class="card-body"> 
                    <form  action="{{ route('store.institutes') }}" method="POST">
                         @csrf
                        <div class="mb-3">
                            <label for="instituteCode" class="form-label">Institute code</label>
                            <input type="text" class="form-control" name="instituteCode" placeholder="Enter Institute code">
                        </div>
                        <div class="mb-3">
                            <label for="instituteName" class="form-label">Institute name</label>
                            <input type="text" class="form-control" name="instituteName" placeholder="Enter Institute name">
                        </div>
                        <div class="mb-3">
                            <label for="instituteAddress" class="form-label">Institute address</label>
                            <input type="text" class="form-control" name="instituteAddress" placeholder="Institute address">
                        </div>
                         <div class="mb-3">
                            <label for="instituteStatus" class="form-label">Status</label>
                            <input type="text" class="form-control" name="instituteStatus" placeholder="Status">
                        </div>
                        <input type="submit" value="Add Institute" class="btn btn-primary">
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
