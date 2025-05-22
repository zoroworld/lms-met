<!-- Header -->
@include('admin.include.header')
<!-- sidebar -->
@include('admin.include.sidebar')

<!-- main content -->
<div class="admin-content">

    {{-- content header --}}
    @include('admin.include.content.header')

    <div class="admin-main-content main-container dashboard-board">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>LMS Dashboard</strong></h1>

            <div class="row">
                <!-- Institute Management -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h4 class="card-title">Total Institutes</h4>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="truck"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-2">{{ $totalInstitutions }}</h1>
                            <div class="mb-0">
                                <p class="mb-1">Active: <span class="badge bg-success">{{ $totalInstitutionsActive }}</span></p>
                                <p class="mb-1">Suspended: <span class="badge bg-danger">{{ $totalInstitutionsInactive }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Management -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h4 class="card-title">Total Students</h4>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-2">{{ $totalStudents }}</h1>
                            <div class="mb-0">
                                <p class="mb-1">Active: <span class="badge bg-success">{{ $totalStudentsActive }}</span></p>
                                <p class="mb-1">Suspended: <span class="badge bg-warning">{{ $totalStudentsInactive }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Management -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h4 class="card-title">Total Courses</h4>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="book"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-2">{{ $totalCourses }}</h1>
                            <div class="mb-0">
                                <p class="mb-1">Active: <span class="badge bg-success">{{ $totalCoursesActive }}</span></p>
                                <p class="mb-1">Suspended: <span class="badge bg-warning">{{ $totalCoursesInactive }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Meeting -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h4 class="card-title">Total Meeting</h4>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-2"><span>{{ $totalMeetings }}</span></h1>
                            <div class="mb-0">
                                <p class="mb-1">Scheduled: <strong class="badge bg-success">{{ $totalMeetingsScheduled }}</strong></p>
                                <p class="mb-1">Cancelled: <strong class="badge bg-danger">{{ $totalMeetingsCancelled }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meetings and Attendance -->
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card flex-fill calender-card">
                        <div class="card-body d-flex">
                            <h5 class="mb-0">Calendar</h5>
                            <div class="align-self-center w-100">
                                <div class="chart">
                                    <div id="datetimepicker-dashboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center">
                                <i class="fas fa-history me-2 text-danger"></i> Recent Meetings
                            </h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Meeting Subject</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentMeetings as $meeting)
                                        <tr>
                                            <td>{{ $meeting->subject->subject_name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($meeting->meeting_date)->format('Y-m-d') }}</td>
                                            <td>
                                                @if ($meeting->status === 'Completed')
                                                    <span class="badge bg-success">Completed</span>
                                                @elseif ($meeting->status === 'Cancelled')
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $meeting->status }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No recent meetings found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center">
                                <i class="fas fa-bullhorn me-2 text-warning"></i> Recent Announcements
                            </h5>
                            <div class="list-group">
                                @php 
                                    $recentAnnouncements = [
                                        (object)[
                                            'title' => 'New Course Available',
                                            'description' => 'Check out our new course on Web Development.',
                                            'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell text-warning"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>',
                                            'link' => '#',
                                            'time_ago' => '2 hours ago'
                                        ],
                                        (object)[
                                            'title' => 'System Maintenance',
                                            'description' => 'Scheduled maintenance on 15th March.',
                                            'icon_svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell text-warning"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>',
                                            'link' => '#',
                                            'time_ago' => '1 day ago'
                                        ]
                                    ]; 
                                @endphp
                                @forelse ($recentAnnouncements as $announcement)
                                    <a href="{{ $announcement->link ?? '#' }}" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                {!! $announcement->icon_svg !!}
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">{{ $announcement->title }}</div>
                                                <div class="text-muted small mt-1">{{ $announcement->description }}</div>
                                                <div class="text-muted small mt-1">{{ $announcement->time_ago }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <div class="list-group-item text-center text-muted">No announcements found.</div>
                                @endforelse
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
