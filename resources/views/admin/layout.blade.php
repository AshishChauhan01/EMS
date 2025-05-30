@include('head')
<body>
    <div class="main-pannel">
        <div class="side-bar left-side-section">
            <div class="logo-div">
                <h2 class="logo-text">EMS - Admin</h2>
            </div>
            <div class="side-menu">
                <ul>
                    <li class="{{($page == 'dashboard')?'active':'';}}"><a href="{{url('admin')}}"><i class="fa-solid fa-gauge-high"></i>Dashboard</a></li>
                    <li class="has-child {{($page == 'department')?'active':'';}}"><a href="{{url('admin/department')}}"><i class="fa-solid fa-building"></i>Department</a>
                        <ul>
                            <li><a href="{{url('admin/add-department')}}"><i class="fa-solid fa-building-user"></i>Add Department</a></li>
                            <li><a href="{{route('manage-department')}}"><i class="fa-solid fa-user-gear"></i>Manage Department</a></li>
                        </ul>
                    </li>
                    <li class="has-child {{$page == 'leave'?'active':''}}"><a href="javascript:;"><i class="fa-solid fa-file-lines"></i>Leave Type</a>
                        <ul>
                            <li><a href="{{url('admin/add-leave')}}"><i class="fa-solid fa-building-user"></i>Add Leave</a></li>
                            <li><a href="{{url('admin/manage-leave')}}"><i class="fa-solid fa-user-gear"></i>Manage Leave</a></li>
                        </ul>
                    </li>
                    <li class="has-child"><a href="#"><i class="fa-regular fa-circle-user"></i>Employee</a></li>
                    <li class="has-child"><a href="#"><i class="fa-solid fa-indian-rupee-sign"></i>Salary</a></li>
                    <li class="has-child"><a href="#"><i class="fa-solid fa-hand"></i>Leave Requests</a></li>
                    <li class="has-child"><a href="#"><i class="fa-solid fa-flag"></i>Report</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content-right right-side-section ">
            <div class="upper-header">
                <div class="toggle-menu"><i class="fa-solid fa-bars"></i></div>
                <div class="user-detail">
                    <i class="fa-solid fa-user me-2 fs-16"></i>
                    <span>Welcome Back :</span>&nbsp;<span>Admin</span>
                </div>
            </div>
            @hasSection("page-title")
                <div class="page-title">
                    @yield('page-title')
                </div>
            @endif
            <div class="main-pannel-content">
                @yield('main-content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>