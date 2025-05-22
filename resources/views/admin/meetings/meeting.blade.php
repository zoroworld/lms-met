@include('admin.include.header')
@include('admin.include.sidebar')

<div class="admin-content">
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Meeting Dashboard</strong></h1>

            <!-- Add New Meeting Button -->
            <div class="mb-3">
                <a href="{{ route('create.meetings') }}" class="btn btn-primary">Add New Meeting</a>
            </div>

            <!-- Meeting Records Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Scheduled Meetings</h5>
                        </div>
                         @include('admin.include.message')
                        <div class="card-body">
                            @if($meetings->count())
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Link</th>
                                            <th>Course</th>
                                            <th>Subject</th>
                                            <th>Teacher</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($meetings as $meeting)
                                            <tr>
                                                <td>{{ $meeting->id }}</td>
                                                <td>{{ $meeting->meeting_subject }}</td>
                                                <td>{{ \Carbon\Carbon::parse($meeting->meeting_date)->format('Y-m-d') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($meeting->meeting_time)->format('h:i A') }}</td>
                                                <td>
                                                    <a href="{{ $meeting->meeting_link }}" target="_blank">Join Meeting</a>
                                                </td>
                                                <td>{{ $meeting->course->course_name ?? 'N/A' }}</td>
                                                <td>{{ $meeting->subject->subject_name ?? 'N/A' }}</td>
                                                <td>{{ $meeting->teacher->name ?? 'N/A' }}</td>
                                                <td>
                                                    <span class="badge 
                                                        {{ $meeting->status == 'scheduled' ? 'bg-warning' : 
                                                           ($meeting->status == 'ongoing' ? 'bg-success' : 'bg-secondary') }}">
                                                        {{ ucfirst($meeting->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit.meetings', $meeting->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                    <form action="{{ route('delete.meetings', $meeting->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No meetings scheduled yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.include.content.footer')
</div>

@include('admin.include.footer')
