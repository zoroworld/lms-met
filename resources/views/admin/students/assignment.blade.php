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

            <h1 class="h3 mb-3"><strong>Assignment</strong></h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Sales</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="truck"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">2.382</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Visitors</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">14.212</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Earnings</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">$21.300</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Orders</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">64</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="container">
                            <h1>Student Assignment Details</h1>

                            <div class="assignment-info">
                                <h2>Assignment Title: <span id="assignmentTitle">Math Homework</span></h2>
                                <p><strong>Student Name:</strong> <span id="studentName">John Doe</span></p>
                                <p><strong>Submission Date:</strong> <span id="submissionDate">2025-03-10</span></p>
                                <p><strong>Status:</strong> <span id="status">Submitted</span></p>
                            </div>

                            <div class="assignment-content">
                                <h3>Assignment Content:</h3>
                                <p id="assignmentContent">
                                    Solve the following equations and show your work:
                                    <br> 1. 2x + 5 = 15
                                    <br> 2. 3y - 7 = 11
                                </p>
                            </div>

                            <div class="actions">
                                <button onclick="downloadAssignment()">Download</button>
                                <button onclick="goBack()">Back to List</button>
                            </div>
                        </div>

                        <script>
                            function downloadAssignment() {
                                alert('Downloading assignment...');
                            }

                            function goBack() {
                                window.history.back();
                            }
                        </script>
                    </div>
                </div>
            </div>>

        </div>
    </div>

    {{-- content footer --}}
    @include('admin.include.content.footer')

</div>

<!-- footer -->

@include('admin.include.footer')
