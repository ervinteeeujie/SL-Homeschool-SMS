 <!--Sidebar Title-->
 <ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center" href="index.php">
        <div class="sidebar-brand-icon" >
          <img src="img/logo/attnlg.jpg">
        </div>
        <div class="sidebar-brand-text mx-3">AMS</div>
      </a>

      <!--Dashboard Side Bar Title-->
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!--Class and Class Arms Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Class Subject
      </div>

      <!--Class Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1234"
          aria-expanded="true" aria-controls="collapseBootstrap1234">
          <i class="fas fa-chalkboard"></i>
          <span>Manage Class Subject</span>
        </a>

        <!--Class Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrap1234" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Class Subject</h6>
            <a class="collapse-item" href="createClass.php">Create and Edit</a>
          </div>
        </div>
      </li>

      <!--Class Arms Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapusers"
          aria-expanded="true" aria-controls="collapseBootstrapusers">
          <i class="fas fa-code-branch"></i>
          <span>Manage Class Section</span>
        </a>

        <!--Class Arms Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrapusers" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Class Section</h6>
            <a class="collapse-item" href="createClassArms.php">Create and Edit</a>
          </div>
        </div>
      </li>

      <!--Teachers Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Teachers
      </div>

      <!--Manage Teachers Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapassests"
          aria-expanded="true" aria-controls="collapseBootstrapassests">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Manage Teachers</span>
        </a>

        <!--Manage Teachers Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrapassests" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Class Teachers</h6>
             <a class="collapse-item" href="createClassTeacher.php">Create and Edit</a>
          </div>
        </div>
      </li>
  
      <!--Parents Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Parents
      </div>

      <!--Manage Parents Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Manage Parents</span>
        </a>

        <!--Manage Parents Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Student Parents</h6>
             <a class="collapse-item" href="createStudentParents.php">Create and Edit</a>
          </div>
        </div>
      </li>

      <!--Students Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Students
      </div>

      <!--Manage Students Side Bar On-Click Dropdown-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2">
          <i class="fas fa-user-graduate"></i>
          <span>Manage Students</span>
        </a>

        <!--Manage Students Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Students</h6>
            <a class="collapse-item" href="createStudents.php">Create and Edit</a>
          </div>
        </div>
      </li>

      <!--Session & Term Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Session & Term
      </div>

       <!--Manage Session & Term Side Bar On-Click Dropdown-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
          aria-expanded="true" aria-controls="collapseBootstrapcon">
          <i class="fa fa-calendar-alt"></i>
          <span>Manage Session & Term</span>
        </a>

        <!--Manage Session & Term Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contribution</h6>
            <a class="collapse-item" href="createSessionTerm.php">Create and Edit</a>
          </div>
        </div>
      </li>

      <!--Generate and View Student Attendance Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Generate and View Student Attendance
      </div>

      <!--Manage Attendance Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapfine"
          aria-expanded="true" aria-controls="collapseBootstrapfine">
          <i class="fa fa-calendar-alt"></i>
          <span>Manage Attendance</span>
        </a>

        <!--Manage Attendance Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrapfine" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Attendance</h6>
            <a class="collapse-item" href="viewAttendance.php">View Class Attendance</a>
            <a class="collapse-item" href="viewStudentAttendance.php">View Student Attendance</a>
            <a class="collapse-item" href="downloadRecord.php">Today's Report (.xls)</a>
          </div>
        </div>
      </li>

      <!--Feedback Side Bar Title-->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Feedback
      </div>

      <!--View Feedback Side Bar On-Click Dropdown-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapfeedback"
          aria-expanded="true" aria-controls="collapseBootstrapfeedback">
          <i class="fa fa-calendar-alt"></i>
          <span>View Feedback</span>
        </a>

        <!--View Feedback Side Bar On-Click Dropdown Content-->
        <div id="collapseBootstrapfeedback" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="feedback.php">Feedback From User</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>