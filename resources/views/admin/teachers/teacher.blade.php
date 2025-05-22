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

            <h1 class="h3 mb-3"><strong>View Teacher</strong></h1>

            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="filter-container rounded shadow">
                        <form method="GET" action="{{ route('teachers.index') }}" class="w-100">
                            <div class="input-group">
                                <!-- Search Bar -->
                                <input type="text" name="search" class="form-control"
                                       placeholder="Search by Name, Email, or Mobile No"
                                       value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>

                                <!-- Status Dropdown -->
                                <select name="status" class="form-select" style="max-width: 200px;">
                                    <option value="">All Status</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="suspend" {{ request('status') == 'suspend' ? 'selected' : '' }}>Suspend</option>
                                </select>

                                <!--Clear Buttons -->
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Clear</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="row mt-4">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                         @include('admin.include.message')
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Status</th>
                                    <th>Institute Code</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email_id }}</td>
                                    <td>{{ $teacher->mobile_no }}</td>
                                    <td>
                                        <span class="badge
                                            {{ $teacher->status == 'active' ? 'bg-success' : ($teacher->status == 'pending' ? 'bg-warning' : 'bg-danger') }}">
                                            {{ ucfirst($teacher->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $teacher->institute_code }}</td>
                                    <td>{{ $teacher->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $teacher->updated_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
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
