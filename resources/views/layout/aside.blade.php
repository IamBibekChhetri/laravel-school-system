


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('dashboard')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">School</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{asset('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Course Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#course"
                    aria-expanded="true" aria-controls="course">
                    <i class="fas fa-fw fa-star"></i>
                    <span>Course</span>
                </a>
                <div id="course" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{asset('course/create')}}">Add Course</a>
                        <a class="collapse-item" href="{{asset('course')}}">View Course</a>
                    </div>
                </div>
            </li>

            <!-- Section Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#section"
                    aria-expanded="true" aria-controls="section">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Section</span>
                </a>
                <div id="section" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('section/create')}}">Add Section</a>
                        <a class="collapse-item" href="{{asset('section')}}">View Section</a>
                       
                    </div>
                </div>
            </li>
            <!-- Semester Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#semester"
                    aria-expanded="true" aria-controls="semester">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Semester</span>
                </a>
                <div id="semester" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('semester/create')}}">Add Semester</a>
                        <a class="collapse-item" href="{{asset('semester')}}">View Semester</a>
                       
                    </div>
                </div>
            </li>
            <!-- Class Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#class"
                    aria-expanded="true" aria-controls="class">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Class</span>
                </a>
                <div id="class" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('classes/create')}}">Add Class</a>
                        <a class="collapse-item" href="{{asset('classes')}}">View Class</a>
                       
                    </div>
                </div>
            </li>
            <!-- Subject Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subject"
                    aria-expanded="true" aria-controls="subject">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Subject</span>
                </a>
                <div id="subject" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('subject/create')}}">Add Subject</a>
                        <a class="collapse-item" href="{{asset('subject')}}">View Subject</a>
                       
                    </div>
                </div>
            </li>
            <!-- Books Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#books"
                    aria-expanded="true" aria-controls="books">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Books</span>
                </a>
                <div id="books" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('book/create')}}">Add Books</a>
                        <a class="collapse-item" href="{{asset('book')}}">View Books</a>
                       
                    </div>
                </div>
            </li>
            <!-- Student Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#student"
                    aria-expanded="true" aria-controls="student">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Student</span>
                </a>
                <div id="student" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('student/create')}}">Add Student</a>
                        <a class="collapse-item" href="{{asset('student')}}">View Student</a>
                       
                    </div>
                </div>
            </li>
            <!-- Teacher Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#teacher"
                    aria-expanded="true" aria-controls="teacher">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Teacher</span>
                </a>
                <div id="teacher" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{asset('teacher/create')}}">Add Teacher</a>
                        <a class="collapse-item" href="{{asset('teacher')}}">View Teacher</a>
                       
                    </div>
                </div>
            </li>

           

        </ul>
        <!-- End of Sidebar -->
