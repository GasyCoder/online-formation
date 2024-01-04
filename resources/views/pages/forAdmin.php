<!-- ============================ Dashboard: Dashboard Start ================================== -->
<x-app-layout>
    <section class="pt-4 gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">
                        <div class="d-user-avater">
                            <img src="assets/img/user-3.jpg" class="img-fluid avater" alt="">
                            <h4>Adam {{ auth()->user()->name }}</h4>
                            <span>Candidat(e)</span>
                            <div class="elso_syu89">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="elso_syu77">
                                <div class="one_third">
                                    <div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div>
                                    <span>Ratings</span>
                                </div>
                                <div class="one_third">
                                    <div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i>
                                    </div><span>Courses</span>
                                </div>
                                <div class="one_third">
                                    <div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div>
                                    <span>Enrolled User</span>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="d-navigation">
                        <ul id="side-menu">
                            <li class="active"><a href="dashboard.html"><i class="fas fa-th"></i>Dashboard</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-shopping-basket"></i>Courses<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="manage-course.html">Manage Courses</a></li>
                                    <li><a href="add-new-course.html">Add New Course</a></li>
                                    <li><a href="course-category.html">Course Category</a></li>
                                    <li><a href="coupons.html">Coupons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-gem"></i>Enrollment<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="enroll-history.html">Enroll History</a></li>
                                    <li><a href="enroll-student.html">Enroll a Student</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-archive"></i>Report<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="admin-revenue.html">Admin Revenue</a></li>
                                    <li><a href="instructor-revenue.html">Instructor Revenue</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-user-shield"></i>Admins<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="manage-admins.html">Manage Admins</a></li>
                                    <li><a href="add-admin.html">Add New Admins</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-toolbox"></i>Instructors<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="manage-instructor.html">Manage Instructors</a></li>
                                    <li><a href="add-instructor.html">Add New Instructors</a></li>
                                    <li><a href="instructor-payout.html">Instructors Payouts</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-user"></i>Students<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="manage-students.html">Manage Students</a></li>
                                    <li><a href="add-students.html">Add New Student</a></li>
                                </ul>
                            </li>
                            <li><a href="addon-manager.html"><i class="fas fa-layer-group"></i>Addon</a></li>
                            <li><a href="themes.html"><i class="fas fa-paint-brush"></i>Themes</a></li>
                            <li><a href="messages.html"><i class="fas fa-comments"></i>Message</a></li>
                            <li><a href="my-profile.html"><i class="fas fa-address-card"></i>My Profile</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><i class="fas fa-cog"></i>Settings<span
                                        class="ti-angle-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="website-settings.html">Website Settings</a></li>
                                    <li><a href="system-settings.html">System Settings</a></li>
                                    <li><a href="payment_settings.html">Payment Settings</a></li>
                                    <li><a href="social-login.html">Social Logins</a></li>
                                    <li><a href="smtp-setting.html">SMTP Settings</a></li>
                                    <li><a href="dash-about.html">About App</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}

                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="pb-4 col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Admin Revenue This Year</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg">
                                    <div class="mb-0 text-white position-absolute h5"><i class="fas fa-book"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>607</h4> <span>Number of Cources</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary">
                                    <div class="mb-0 text-white position-absolute h5"><i class="fas fa-video"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>5.2k</h4> <span>Number of Lession</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning">
                                    <div class="mb-0 text-white position-absolute h5"><i class="fas fa-users"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>78k</h4> <span>Number of Students</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple">
                                    <div class="mb-0 text-white position-absolute h5"><i class="fas fa-gem"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content">
                                    <h4>32k</h4> <span>Number of Enrollment</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row">

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h5>Featured Cources</h5>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-7.png" class="img-fluid" alt="" /></div>
                                            <div class="grousp_crs_caption">
                                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                            </div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="text-white btn theme-bg">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-6.png" class="img-fluid" alt="" /></div>
                                            <div class="grousp_crs_caption">
                                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                            </div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="text-white btn theme-bg">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-5.png" class="img-fluid" alt="" /></div>
                                            <div class="grousp_crs_caption">
                                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                            </div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="text-white btn theme-bg">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-4.png" class="img-fluid" alt="" /></div>
                                            <div class="grousp_crs_caption">
                                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                            </div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="text-white btn theme-bg">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-3.png" class="img-fluid" alt="" /></div>
                                            <div class="grousp_crs_caption">
                                                <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                            </div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="text-white btn theme-bg">View Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Notifications</h6>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div class="p-3 rounded-circle p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                            <div class="mb-0 position-absolute text-success h5"><i class="fas fa-user"></i>
                                            </div>
                                        </div>


                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">New User Enrolled in Python</small>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div class="p-3 rounded-circle p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
                                            <div class="mb-0 position-absolute text-danger h5"><i class="fas fa-comments"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Shilpa Rana</a></h6>
                                            <small class="text-fade">Shilpa Send a Message</small>
                                            <span class="small">02 Min Ago</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div class="p-3 rounded-circle p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
                                            <div class="mb-0 position-absolute text-info h5"><i class="fas fa-grin-squint-tears"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Amar Muskali</a></h6>
                                            <small class="text-fade">Need Responsive Business Tem...</small>
                                            <span class="small">10 Min Ago</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div class="p-3 rounded-circle p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
                                            <div class="mb-0 position-absolute text-purple h5"><i class="fas fa-briefcase"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">Maryam Amiri</a></h6>
                                            <small class="text-fade">Next Meeting on Tuesday..</small>
                                            <span class="small">15 Min Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                </div>

            </div>

        </div>
    </section>
</x-app-layout>
<!-- ============================ Dashboard: Dashboard End ================================== -->
