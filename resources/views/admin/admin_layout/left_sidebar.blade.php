<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index-2.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('assets')}}/images/logo.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('assets')}}/images/logo_sm.png" alt="" height="16">
                    </span>
    </a>

    <!-- LOGO -->
    <a href="index-2.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('assets')}}/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('assets')}}/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>


    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
{{--                <a href="{{route('admin.dashboard.file')}}">--}}
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                       aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span class="badge bg-success float-end">4</span>
                        <span> Dashboards </span>
                    </a>
{{--                </a>--}}
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.dashboard.file')}}">Main Dashbord</a>
                        </li>
                        <li>
                            <a href="{{route('admin.roomBooking.page')}}">Booked Room List</a>
                        </li>
                        <li>
                            <a href="dashboard-projects.html">Projects</a>
                        </li>
                        <li>
                            <a href="dashboard-wallet.html">E-Wallet <span
                                    class="badge rounded bg-danger font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

{{--            <li class="side-nav-item">--}}
{{--                <a href="apps-calendar.html" class="side-nav-link">--}}
{{--                    <i class="uil-calender"></i>--}}
{{--                    <span> Calendar </span>--}}
{{--                </a>--}}
{{--            </li>--}}



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm5" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
{{--                    <span class="badge bg-danger text-white float-end">New</span>--}}
                    <span> Features </span>
                </a>
                <div class="collapse" id="sidebarCrm5">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('feature.list.page')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('feature.list.page.index')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm1" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span> Facilities </span>
                </a>
                <div class="collapse" id="sidebarCrm1">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('facilities.list.page')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('facilities.add.show.page')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>




            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm2" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    {{--                    <span class="badge bg-danger text-white float-end">New</span>--}}
                    <span> Our Staffs </span>
                </a>
                <div class="collapse" id="sidebarCrm2">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('staff.list.page')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('view.addStaff.page')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm3" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    {{--                    <span class="badge bg-danger text-white float-end">New</span>--}}
                    <span>Rooms</span>
                </a>
                <div class="collapse" id="sidebarCrm3">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('room.list.show.page')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('room.add.show.page')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm4" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span>Category</span>
                </a>
                <div class="collapse" id="sidebarCrm4">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('category.room.list')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('category.room.input')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm6" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span>Service</span>
                </a>
                <div class="collapse" id="sidebarCrm6">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.service.list.show.page')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.add.page.show')}}">Add</a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>




        <div class="clearfix"></div>
    </div>
</div>
    <!-- Sidebar -left -->


<!-- Left Sidebar End -->
