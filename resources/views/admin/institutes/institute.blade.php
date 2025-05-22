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

            <h1 class="h3 mb-3"><strong>Institute Management</strong></h1>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text">Institute ID</span>
                        <input type="text" class="form-control" id="instituteIdInput" placeholder="Enter Institute ID">
                        <span class="input-group-text">Institute Name</span>
                        <input type="text" class="form-control" id="instituteNameInput" placeholder="Enter Institute Name">
                        <button class="btn btn-primary" onclick="filterInstitutes()">Search</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-header text-white">
                            <h5 class="card-title mb-0"><i class="align-middle me-2" data-feather="building"></i> Institutes</h5>
                        </div>
                        @include('admin.include.message')
                        <table class="table table-hover my-0" id="instituteTable">
                            <thead class="table-dark">
                                <tr>
                                    <th>Institute ID</th>
                                    <th>Institute Name</th>
                                    <th>Location</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($institutes as $institute)
                                    <tr>
                                        <td>{{ $institute->institute_code }}</td>
                                        <td>{{ $institute->institute_name }}</td>
                                        <td>{{ $institute->institute_address }}</td>
                                        <td>{{ $institute->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <span class="badge bg-{{ $institute->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($institute->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            
                                            <a href="{{ route('edit.institutes', $institute->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('delete.institutes', $institute->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" >
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                  
                            </tbody>
                        </table>
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
