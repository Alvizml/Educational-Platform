<!-- Navbar -->

  <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">Educational Platform</span>
    </a>

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info"style="color: white; font-weight: bold;">
          {{ Auth::user()->name }}
      </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        @if(Auth::user()->category==1)
          <li class="nav-item">
            <a href="{{url('admin/admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/admin/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Teacher
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/student/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Student
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/class/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Class
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/subject/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Subject
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/assign_subject/list')}}" class="nav-link">
             <i class="fas fa-graduation-cap"></i>
              <p>
                Assign Subject
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/assign_class_teacher/list')}}" class="nav-link">
             <i class="fas fa-graduation-cap"></i>
              <p>
                Assign Class Teacher
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{url('logout')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
          </li>
        @elseif(Auth::user()->category==2)
          <li class="nav-item">
            <a href="{{url('student/student/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('student/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Student
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{url('logout')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
          </li>
        @elseif(Auth::user()->category==3)
          <li class="nav-item">
            <a href="{{url('teacher/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                My Student
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                My class and subject
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                My Exam timetable
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Marks Register 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Homework
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                My notice board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Send email to students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teacher/list')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{url('logout')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
          </li>

        @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    