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

            <h1 class="h3 mb-3"><strong>Teacher Report</strong></h1>

            <div class="row">
                <div class="col-xl-8 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header text-white">
                            <h5 class="card-title mb-0"><i class="align-middle me-2" data-feather="bar-chart-2"></i> Performance Overview</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Teacher Name</th>
                                    <th class="d-none d-xl-table-cell">Classes Taught</th>
                                    <th class="d-none d-xl-table-cell">Attendance Rate</th>
                                    <th>Average Rating</th>
                                    <th class="d-none d-md-table-cell">Feedback Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td class="d-none d-xl-table-cell">30</td>
                                    <td class="d-none d-xl-table-cell">95%</td>
                                    <td><span class="badge bg-primary">4.8</span></td>
                                    <td class="d-none d-md-table-cell">120</td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td class="d-none d-xl-table-cell">28</td>
                                    <td class="d-none d-xl-table-cell">92%</td>
                                    <td><span class="badge bg-primary">4.6</span></td>
                                    <td class="d-none d-md-table-cell">110</td>
                                </tr>
                                <tr>
                                    <td>Michael Brown</td>
                                    <td class="d-none d-xl-table-cell">25</td>
                                    <td class="d-none d-xl-table-cell">89%</td>
                                    <td><span class="badge bg-primary">4.4</span></td>
                                    <td class="d-none d-md-table-cell">95</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header text-dark border ">
                            <h5 class="card-title mb-0"><i class="align-middle me-2" data-feather="award"></i> Top Performers</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">John Doe - <span class="text-success">4.8 Rating</span></li>
                                <li class="list-group-item">Jane Smith - <span class="text-success">4.6 Rating</span></li>
                                <li class="list-group-item">Michael Brown - <span class="text-success">4.4 Rating</span></li>
                            </ul>
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
