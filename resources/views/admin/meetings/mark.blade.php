<!-- Teacher Meeting Attendance Dashboard -->
@include('admin.include.header')
@include('admin.include.sidebar')

<div class="admin-content">
    @include('admin.include.content.header')

    <div class="admin-main-content main-container">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Teacher Meeting Attendance Dashboard</strong></h1>

            <!-- Teacher & Meeting Selection -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="teacherSelect" class="form-label">Select Teacher</label>
                    <select class="form-select" id="teacherSelect">
                        <option value="1">Teacher 1</option>
                        <option value="2">Teacher 2</option>
                        <option value="3">Teacher 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="meetingSelect" class="form-label">Select Meeting</label>
                    <select class="form-select" id="meetingSelect">
                        <option value="1">Meeting 1</option>
                        <option value="2">Meeting 2</option>
                        <option value="3">Meeting 3</option>
                    </select>
                </div>
            </div>

            <!-- Attendance Summary Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Meetings</h5>
                            <h1 id="totalMeetings">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Meetings Attended</h5>
                            <h1 id="attendedMeetings">8</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Meetings Missed</h5>
                            <h1 id="missedMeetings">2</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Attendance Table -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detailed Meeting Attendance Records</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Meeting ID</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Math Workshop</td>
                                        <td>2025-03-10</td>
                                        <td>10:00 AM</td>
                                        <td><span class="badge bg-success">Attended</span></td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Science Training</td>
                                        <td>2025-03-11</td>
                                        <td>02:00 PM</td>
                                        <td><span class="badge bg-danger">Missed</span></td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Parent-Teacher Meeting</td>
                                        <td>2025-03-12</td>
                                        <td>01:00 PM</td>
                                        <td><span class="badge bg-success">Attended</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.include.content.footer')
</div>

@include('admin.include.footer')

<!-- Let me know if you want any adjustments or enhancements! 🚀 -->
