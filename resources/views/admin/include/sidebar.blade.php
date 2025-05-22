<aside id="sidebar" class="admin-sidebar sidebar js-sidebar">
    <nav class="sidebar-content js-simplebar">
        <div class="w-100 px-2">
            <a class="sidebar-brand" href="index.php">
                <span class="align-middle">ADMIN</span>
            </a>

            <ul class="sidebar-nav">
                @php
                    //for axtive and colapse show
                    $actveadmindashboard = ['admin.dashboard', 'admin.test'];
                    $activestudentRoutes = ['admin.students', 'students.create', 'students.edit', 'students.report', 'students.fee'];
                    $activeteacherRoutes = ['admin.teachers','teachers.add' , 'teachers.assignSubjects.create', 'teachers.schedules', 'teachers.reports'];
                    $activeinstituteRoutes = ['admin.institutes','create.institutes', 'store.institutes', 'edit.institutes', 'update.institutes', 'delete.institutes', 'reports.institutes'];
                    $activecourseRoutes = ['admin.courses', 'create.courses', 'reports.courses'];
                    $activesubjectRoutes = ['admin.subjects', 'create.subjects', 'assign.subjects'];
                    $mergesubjectandcourse =  array_merge($activecourseRoutes, $activesubjectRoutes);
                    $activeattentdenceRoutes =['admin.attendance',  'create.attendance'];
                    $activemeetingRoutes =['admin.meeting', 'create.meetings'];
                    $activehistoryRoutes =['admin.history'];
                    $activesettingUserRoutes = ['admin.users'];
                    $activesettingsupportRoutes = ['admin.support'];
                    $mergesettinguserandsupportroutes =  array_merge( $activesettingUserRoutes , $activesettingsupportRoutes);
              @endphp

                <li class="sidebar-item {{ in_array(request()->route()->getName(),  $actveadmindashboard ) ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                        <i class="align-middle" data-feather="sliders"></i>
                        <span class="align-middle">Dashboard</span>
                    </a>
                    {{-- <a class="sidebar-link" href="{{ route('admin.test') }}">
                        <i class="align-middle" data-feather="sliders"></i>
                        <span class="align-middle">test</span>
                    </a> --}}
                </li>

                {{-- <li class="sidebar-header">students Management</li> --}}
                <li class="sidebar-item {{ in_array(request()->route()->getName(), $activestudentRoutes) ? 'active' : '' }}
">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#studentsDropdown"
                        aria-expanded="{{ request()->routeIs('admin.students') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="user"></i>
                        <span class="align-middle">Manage students</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>

                    <ul id="studentsDropdown"
                        class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activestudentRoutes) ? 'show' : '' }}">
                        <li
                            class="sidebar-item sidebar-drop {{ request()->routeIs('admin.students') ? 'active' : '' }}">
                            <a class="sidebar-link"  href="{{ route('admin.students') }}">View Students</a>
                        </li>
                        <li
                            class="sidebar-item sidebar-drop  {{ request()->routeIs('students.create') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('students.create') }}">Add Student</a>
                        </li>
                    
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('students.report') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('students.report') }}">Student Reports</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('students.fee') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('students.fee') }}">Fee Management</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-header">Teachers Management</li> --}}
                <li class="sidebar-item  {{ in_array(request()->route()->getName(),  $activeteacherRoutes) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#teachersDropdown"
                        aria-expanded="{{ request()->routeIs('admin.teachers') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="user"></i>
                        <span class="align-middle">Manage teachers</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>

                    <ul id="teachersDropdown"
                        class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activeteacherRoutes) ? 'show' : '' }}">
                        <li
                            class="sidebar-item sidebar-drop {{ request()->routeIs('admin.teachers') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('admin.teachers') }}">View Teachers</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('teachers.add') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('teachers.add') }}">Add Teacher</a>
                        </li>

                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('teachers.assignSubjects.create') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('teachers.assignSubjects.create') }}">Assign Subjects</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('teachers.schedules') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('teachers.schedules') }}">Teacher Schedules</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('teachers.reports') ? 'active' : '' }}">
                            <a class="sidebar-link" href="{{ route('teachers.reports') }}">Teacher Reports</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-header">institutes Management</li> --}}
                <li class="sidebar-item  {{ in_array(request()->route()->getName(), $activeinstituteRoutes) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#instituteDropdown"
                        aria-expanded="{{ request()->routeIs('admin.institutes') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="home"></i>
                        <span class="align-middle">Manage Institutes</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>
                    <ul id="instituteDropdown" class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activeinstituteRoutes) ? 'show' : '' }}">
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('admin.institutes') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.institutes') }}">View Institutes</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('create.institutes') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('create.institutes') }}">Add Institute</a>
                        </li>
                        {{-- <li class="sidebar-item sidebar-drop {{ request()->routeIs('update.institutes') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('update.institutes') }}">Update
                                Institute</a></li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('delete.institutes') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('delete.institutes') }}">Delete
                                Institute</a></li> --}}
                    </ul>
                </li>

                {{-- <li class="sidebar-header">Courses & Subjects Management</li> --}}
                <li class="sidebar-item {{ in_array(request()->route()->getName(),  $mergesubjectandcourse) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#courseDropdown" aria-expanded="{{ request()->routeIs($mergesubjectandcourse) ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="book"></i>
                        <span class="align-middle">Courses & Subjects</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>


                    <ul id="courseDropdown" class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $mergesubjectandcourse) ? 'show' : '' }}">

                        <!-- Manage Courses -->
                        <li class="sidebar-item sidebar-drop {{ in_array(request()->route()->getName(),  $activecourseRoutes
                    ) ? 'active' : '' }}">
                            <a class="sidebar-link sidebar-toggle {{ request()->routeIs('admin.courses') ? 'active' : '' }}"
                                href="#" data-bs-toggle="collapse" data-bs-target="#manageCoursesDropdown"
                                aria-expanded="{{ request()->routeIs('admin.courses') ? 'true' : 'false' }}">
                                Manage Courses
                                <i class="align-middle float-end" data-feather="chevron-down"></i>
                            </a>
                            <ul id="manageCoursesDropdown" class="sidebar-dropdown list-unstyled collapse  {{ in_array(request()->route()->getName(),  $activecourseRoutes) ? 'show' : '' }}">
                                <li class="sidebar-item  sidebar-drop {{ request()->routeIs('admin.courses') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.courses') }}">View Courses</a></li>
                                <li class="sidebar-item  sidebar-drop {{ request()->routeIs('create.courses') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('create.courses') }}">Add Course</a></li>
                                {{-- <li class="sidebar-item  sidebar-drop {{ request()->routeIs('reports.courses') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('reports.courses') }}">Course Reports</a>
                                </li> --}}
                            </ul>
                        </li>

                        <!-- Manage Subjects -->
                        <li class="sidebar-item sidebar-drop  {{ in_array(request()->route()->getName(),  $activesubjectRoutes
                    ) ? 'active' : '' }}">
                            <a class="sidebar-link sidebar-toggle {{ request()->routeIs('admin.subjects') ? 'active' : '' }}"
                                href="#" data-bs-toggle="collapse" data-bs-target="#manageSubjectsDropdown"
                                aria-expanded="{{ request()->routeIs('admin.subjects') ? 'true' : 'false' }}">
                                Manage Subjects
                                <i class="align-middle float-end" data-feather="chevron-down"></i>
                            </a>
                            <ul id="manageSubjectsDropdown" class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activesubjectRoutes) ? 'show' : '' }}">
                                <li class="sidebar-item sidebar-drop {{ request()->routeIs('admin.subjects') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.subjects') }}">View Subjects</a>
                                </li>
                                <li class="sidebar-item sidebar-drop {{ request()->routeIs('create.subjects') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('create.subjects') }}">Add Subject</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                {{-- <li class="sidebar-header">Attendance Management</li> --}}
                <li class="sidebar-item  {{ in_array(request()->route()->getName(), $activeattentdenceRoutes) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#attendanceDropdown" aria-expanded="{{ request()->routeIs('admin.attendance') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="list"></i>
                        <span class="align-middle">Attendance</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>
                    <ul id="attendanceDropdown" class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activeattentdenceRoutes) ? 'show' : '' }}">
                        <li class="sidebar-item sidebar-drop  {{ request()->routeIs('admin.attendance') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.attendance') }}">
                            Attendance</a></li>
                        <li class="sidebar-item sidebar-drop  {{ request()->routeIs('create.attendance') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('create.attendance') }}">Mark
                                Attendance</a></li>
                        {{-- <li class="sidebar-item sidebar-drop  {{ request()->routeIs('reports.meetings') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('reports.meetings') }}">Attendance
                                Reports</a></li> --}}
                    </ul>
                </li>

                {{-- <li class="sidebar-header">Meeting Management</li> --}}
                <li class="sidebar-item {{ in_array(request()->route()->getName(), $activemeetingRoutes) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#meetingDropdown" aria-expanded="{{ request()->routeIs('admin.meetings') ? 'true' : 'false' }}">
                        <i class="align-middle" data-feather="external-link"></i>
                        <span class="align-middle">Meetings</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>
                    <ul id="meetingDropdown" class="sidebar-dropdown list-unstyled collapse {{ in_array(request()->route()->getName(), $activemeetingRoutes) ? 'show' : '' }}">
                        <li class="sidebar-item sidebar-drop  {{ request()->routeIs('admin.meeting') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.meeting') }}">View
                                Meetings</a></li>
                        <li class="sidebar-item sidebar-drop  {{ request()->routeIs('create.meetings') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('create.meetings') }}">Add
                                Meeting</a></li>
                    </ul>
                </li>



                {{-- <li class="sidebar-header">History Management</li> --}}
                {{-- <li class="sidebar-item {{ request()->routeIs('admin.history') ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#historyDropdown" aria-expanded="false">
                        <i class="align-middle" data-feather="refresh-ccw"></i>
                        <span class="align-middle">History</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>
                    <ul id="historyDropdown" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item sidebar-drop"><a class="sidebar-link" href="#">Student</a></li>
                        <li class="sidebar-item sidebar-drop"><a class="sidebar-link" href="#">Teacher</a></li>
                        <li class="sidebar-item sidebar-drop"><a class="sidebar-link" href="#">Meeting</a></li>
                        <li class="sidebar-item sidebar-drop"><a class="sidebar-link" href="#">Mark
                                Attendance</a></li>
                        <li class="sidebar-item sidebar-drop"><a class="sidebar-link" href="#">Attendance
                                Reports</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="sidebar-header">setting Management</li> --}}
                <!-- <li class="sidebar-item {{ in_array(request()->route()->getName(), $mergesettinguserandsupportroutes) ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-toggle" href="#" data-bs-toggle="collapse"
                        data-bs-target="#settingsDropdown" aria-expanded="false">
                        <i class="align-middle" data-feather="settings"></i>
                        <span class="align-middle">Setting</span>
                        <i class="align-middle float-end" data-feather="chevron-down"></i>
                    </a>
                    <ul id="settingsDropdown" class="sidebar-dropdown list-unstyled collapse  {{ in_array(request()->route()->getName(), $mergesettinguserandsupportroutes) ? 'show' : '' }}">
                        <li class="sidebar-item sidebar-drop  {{ request()->routeIs('admin.users') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.users') }}">User Manage</a>
                        </li>
                        <li class="sidebar-item sidebar-drop {{ request()->routeIs('admin.support') ? 'active' : '' }}"><a class="sidebar-link" href="{{ route('admin.support') }}">Support
                                Manage</a></li>
                    </ul>
                </li> -->

            </ul>
        </div>
    </nav>
</aside>
