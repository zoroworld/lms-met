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

            <h1 class="h3 mb-3"><strong>Teacher Schedule</strong></h1>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text">Teacher ID</span>
                        <input type="text" class="form-control" id="teacherIdInput" placeholder="Enter Teacher ID">
                        <span class="input-group-text">Teacher Name</span>
                        <input type="text" class="form-control" id="teacherNameInput" placeholder="Enter Teacher Name">
                        <button class="btn btn-primary" onclick="filterSchedule()">Search</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header text-white">
                            <h5 class="card-title mb-0"><i class="align-middle me-2" data-feather="calendar"></i> Class Schedule</h5>
                        </div>
                       <table class="table table-hover my-0" id="scheduleTable">
                            <thead class="table-dark">
                                <tr>
                                    <th>Teacher Name</th>
                                    <th>Course Name</th>
                                    <th>Subject Name</th>
                                    <th class="d-none d-xl-table-cell">Date</th>
                                    <th class="d-none d-xl-table-cell">Time</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Room</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($teachersAssign as $assign)
                                    <tr>
                                        <td>{{ $assign->teacher->name }}</td>
                                         <td>{{ $assign->course->course_name }}</td>
                                        <td>{{ $assign->subject->subject_name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ \Carbon\Carbon::parse($assign->date)->format('d/m/Y') }}</td>
                                        <td class="d-none d-xl-table-cell">
                                            {{ \Carbon\Carbon::parse($assign->start_time)->format('h:i A') }} - 
                                            {{ \Carbon\Carbon::parse($assign->end_time)->format('h:i A') }}
                                        </td>
                                        <td>
                                            @if($assign->status === 'active')
                                                <span class="badge bg-success">Scheduled</span>
                                            @elseif($assign->status === 'pending')
                                                <span class="badge bg-warning">Pending</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            {{ $assign->batch ?? 'N/A' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No teacher assignments found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header border border-secondary text-white">
                            <h5 class="card-title mb-0"><i class="align-middle me-2" data-feather="clock"></i> Upcoming Events</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <div class="align-self-center w-100">
                                <div id="datetimepicker-dashboard"></div>
                                <ul class="list-group list-group-flush mt-3">
                                    <li class="list-group-item">Parent-Teacher Meeting <span class="text-muted">15/03/2025</span></li>
                                    <li class="list-group-item">Science Fair <span class="text-muted">20/03/2025</span></li>
                                    <li class="list-group-item">Exam Week <span class="text-muted">25/03/2025 - 30/03/2025</span></li>
                                </ul>
                                <button class="btn btn-sm btn-info w-100">Add Event</button>
                            </div>
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
