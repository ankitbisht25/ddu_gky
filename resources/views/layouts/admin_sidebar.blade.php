<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#c6cbc6;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">UI Elements</li> -->


 <!-- Master Menu -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Master</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add PIA</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Project</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Project</a></li> -->
              </ul>
            </div>
          </li>  
          
 <!-- Centre Menu -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Centre</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-centre')}}">Add Centre</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Centre List</a></li>
              </ul>
            </div>
          </li> 
          
          <!-- Staff Menu -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-staff') }}">Add Staff</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">staff List</a></li>
              </ul>
            </div>
          </li>  

<!-- Student Registration  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Registration</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate-register') }}">Student Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Student Register List</a></li>
              </ul>
            </div>
          </li>
<!-- Aptitude  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Aptitude</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Student Register</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Apptitude Result List</a></li>
              </ul>
            </div>
          </li>
<!-- Batch  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Batch</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-batch')}}">Create Batch</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Batch List</a></li>
              </ul>
            </div>
          </li>
<!-- Addmission  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Addmission</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate-admission') }}">Candidate Addmission </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Addmission List</a></li>
              </ul>
            </div>
          </li>
 <!-- Hostel  -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Hostel</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic7">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Hostel Details</a></li>
              </ul>
            </div>
          </li>  
 <!-- Study Material  -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Study Material </span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Study Material  List</a></li>
              </ul>
            </div>
          </li> 
        </ul>
    </nav>        