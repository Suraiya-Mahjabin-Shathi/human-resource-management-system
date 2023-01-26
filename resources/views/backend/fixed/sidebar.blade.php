{{-- Sidebar Start --}}
<div class="sidebar  pe-4 pb-3">
    <nav class="navbar bg-info navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>HRMS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
           
            <a href="{{ route('organization') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Organization</a>
            <a href="  " class="nav-item nav-link"><i class="fa fa-users me-2"></i>Employees</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-table me-2"></i>Attendance</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-table me-2"></i>Leave</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-th me-2"></i>Projects</a>
                    <a href="   " class="nav-item nav-link"><i class="fa fa-list-ul me-2"></i>Payroll</a>
                    <a href="    " class="nav-item nav-link"><i class="fa fa-hand-holding-usd me-2"></i>Loan</a>
                    <a href="    " class="nav-item nav-link"><i class="fa fa-money-bill-alt me-2"></i>Assets</a>
                    <a href="  " class="nav-item nav-link"><i class="fa fa-bell me-2"></i>Notice</a>
                    <a href="  " class="nav-item nav-link"><i class="fa fa-trophy me-2"></i>Awards</a>
                    <a href="  " class="nav-item nav-link"><i class="fa fa-cogs me-2"></i>Settings</a>
            
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
{{-- Sidebar End --}}