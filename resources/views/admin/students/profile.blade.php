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

            <h1 class="h3 mb-3"><strong>Student Report</strong></h1>

            <div class="container-fluid p-0">
                <div class="row">

                    <!-- Left Panel: Profile Summary -->
                   <!-- Left Panel: Profile Summary -->
                    <div class="col-md-4 col-xl-3">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Profile Summary</h5>
                            </div>
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/adminassets/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                                    class="img-fluid rounded-circle mb-2" width="128" height="128" />
                                <h5 class="card-title mb-0">Christina Mason</h5>
                                <div class="text-muted mb-2">Grade 10 - Section A</div>
                                <p><strong>Student Code:</strong> STU123456</p> <!-- Added Student Code -->
                                <p><strong>Student Name:</strong> Christina Mason</p> <!-- Added Student Name -->

                                <div>
                                    <a class="btn btn-primary btn-sm" href="#">Contact</a>
                                    <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <h5 class="h6 card-title">Institute</h5>
                                <p>Springfield High School</p>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <h5 class="h6 card-title">Courses Enrolled</h5>
                                <ul class="list-unstyled mb-0">
                                    <li>Science Stream</li>
                                    <li>Mathematics Advanced</li>
                                    <li>English Literature</li>
                                </ul>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <h5 class="h6 card-title">Subjects</h5>
                                <a href="#" class="badge bg-primary me-1 my-1">Mathematics</a>
                                <a href="#" class="badge bg-primary me-1 my-1">Physics</a>
                                <a href="#" class="badge bg-primary me-1 my-1">Chemistry</a>
                                <a href="#" class="badge bg-primary me-1 my-1">English</a>
                                <a href="#" class="badge bg-primary me-1 my-1">History</a>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <h5 class="h6 card-title">Contact Info</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> +1 555 123 4567</li>
                                    <li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> christina.mason@example.com</li>
                                    <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> San Francisco, CA</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Right Panel: Report Content -->
                    <div class="col-md-8 col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Academic Report & Activities</h5>
                            </div>
                            <div class="card-body h-100">

                                <!-- Recent Activities -->
                                
                                <h6 class="mb-3">Achievements</h6>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="award" class="text-warning me-2"></i>
                                        <div>
                                            <strong>Math Olympiad Winner</strong><br />
                                            <small class="text-muted">Awarded First Place in Regional Math Olympiad - 2025</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="book-open" class="text-primary me-2"></i>
                                        <div>
                                            <strong>Honor Roll Student</strong><br />
                                            <small class="text-muted">Consistent academic excellence for the past 3 semesters</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="users" class="text-success me-2"></i>
                                        <div>
                                            <strong>Student Council Member</strong><br />
                                            <small class="text-muted">Active member of student council for 2024-2025</small>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                             

                                <!-- Academic Scores -->
                                <h6 class="mt-4 mb-3">Scores</h6>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Exam</th>
                                            <th>Score</th>
                                            <th>Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mathematics</td>
                                            <td>Midterm</td>
                                            <td>85</td>
                                            <td>A-</td>
                                        </tr>
                                        <tr>
                                            <td>Physics</td>
                                            <td>Midterm</td>
                                            <td>90</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Chemistry</td>
                                            <td>Midterm</td>
                                            <td>78</td>
                                            <td>B+</td>
                                        </tr>
                                        <tr>
                                            <td>English</td>
                                            <td>Midterm</td>
                                            <td>88</td>
                                            <td>A-</td>
                                        </tr>
                                        <tr>
                                            <td>History</td>
                                            <td>Midterm</td>
                                            <td>92</td>
                                            <td>A</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Load More Button -->
                                <div class="d-grid mt-3">
                                    <a href="#" class="btn btn-primary">Load more</a>
                                </div>

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
