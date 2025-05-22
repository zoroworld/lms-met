<!-- Header -->
@include('admin.include.header')
<!-- sidebar -->
@include('admin.include.sidebar')


<!-- main content -->
<div class="admin-content">

    {{-- content header --}}
    @include('admin.include.content.header')

    {{-- student content --}}
    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>View Student</strong></h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    {{-- filter section --}}
                    <div class="row">
                        <div class="col-xl-6 col-xxl-3">
                            <div class="mb-3">
                                <label class="form-label">Filter by Role</label>
                                <select class="form-control">
                                    <option value="all">All</option>
                                    <option value="student">Student</option>
                                    <option value="trainer">Trainer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-12">
                    {{-- student view section --}}
                    @include('admin.include.message')
                    <h3>Student List</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Institute</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $index => $student)
                            <tr>
                                <td>{{ $index +  1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->institute->institute_name }}</td>
                                <td>{{ $student->status }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-target="#ISC{{$student->id}}" data-bs-toggle="modal">fees</button>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn text-warning btn-outline-warning">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <div class="modal fade" id="ISC{{$student->id}}" aria-hidden="true" aria-labelledby="#{{$student->id}}Label" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="{{$student->id}}Label">List of subject</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-group">
                                            @php $totalFee = 0; @endphp
                                            @foreach($student->courses as $course)
                                                @php $totalFee += $course->course_fee; @endphp
                                                <li class="list-group-item">{{ $course->  course_name}} : ₹{{ number_format($course->course_fee, 2) }} </li>
                                            @endforeach
                                            <li class="list-group-item bg-dark text-white">Total Fee: ₹{{ number_format($totalFee, 2) }}</li>
                                             
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- content footer --}}
    @include('admin.include.content.footer')

</div>

<!-- footer -->

@include('admin.include.footer')
