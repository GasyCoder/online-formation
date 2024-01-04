<!-- ============================ Dashboard: Dashboard Start ================================== -->
<x-app-layout>
<section class="pt-4 gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="dashboard-navbar">
                    @can('apprenant')
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
                                <div class="one_45ic text-warning bg-light-warning"><i class="fas fa-comments"></i></div>
                                <span>Messages</span>
                            </div>

                            <div class="one_third">
                                <a href="#">
                                <div href="" class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i>
                                </div>
                                <span>Mes cours</span>
                                </a>
                            </div>

                            <div class="one_third">
                                <a href="#">
                                <div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div>
                                <span>Mon profil</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endcan

                    @can('dashboard')
                    <div class="d-navigation">
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
                    </div>
                    @endcan

                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">

                <!-- Row -->
                <div class="row">
                    <div class="pb-4 col-lg-12 col-md-12 col-sm-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste cours</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- /Row -->

            <!-- Row -->
            @can('admin')
            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div
                            class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg">
                            <div class="mb-0 text-white position-absolute h5"><i class="fas fa-book"></i></div>
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h4>607</h4> <span>Number of Cources</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div
                            class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary">
                            <div class="mb-0 text-white position-absolute h5"><i class="fas fa-video"></i></div>
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h4>5.2k</h4> <span>Number of Lession</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div
                            class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning">
                            <div class="mb-0 text-white position-absolute h5"><i class="fas fa-users"></i></div>
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h4>78k</h4> <span>Number of Students</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div
                            class="p-4 mb-2 rounded-circle p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple">
                            <div class="mb-0 text-white position-absolute h5"><i class="fas fa-gem"></i></div>
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h4>32k</h4> <span>Number of Enrollment</span>
                        </div>
                    </div>
                </div>

            </div>
            @endcan
            <!-- /Row -->


            <!-- Row -->
            @can('apprenant')
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <h5>Cours en vedette</h5>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="grousp_crs">
                                <div class="grousp_crs_left">
                                    <div class="grousp_crs_thumb"><img src="assets/img/c-7.png" class="img-fluid"
                                            alt="" /></div>
                                    <div class="grousp_crs_caption">
                                        <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                    </div>
                                </div>
                                <div class="grousp_crs_right">
                                    <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                    <div class="frt_but"><a href="#" class="text-white btn theme-bg">Voir le cours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grousp_crs">
                                <div class="grousp_crs_left">
                                    <div class="grousp_crs_thumb"><img src="assets/img/c-6.png" class="img-fluid"
                                            alt="" /></div>
                                    <div class="grousp_crs_caption">
                                        <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                    </div>
                                </div>
                                <div class="grousp_crs_right">
                                    <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                    <div class="frt_but"><a href="#" class="text-white btn theme-bg">Voir le cours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grousp_crs">
                                <div class="grousp_crs_left">
                                    <div class="grousp_crs_thumb"><img src="assets/img/c-5.png" class="img-fluid"
                                            alt="" /></div>
                                    <div class="grousp_crs_caption">
                                        <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                    </div>
                                </div>
                                <div class="grousp_crs_right">
                                    <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                    <div class="frt_but"><a href="#" class="text-white btn theme-bg">Voir le cours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grousp_crs">
                                <div class="grousp_crs_left">
                                    <div class="grousp_crs_thumb"><img src="assets/img/c-4.png" class="img-fluid"
                                            alt="" /></div>
                                    <div class="grousp_crs_caption">
                                        <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                    </div>
                                </div>
                                <div class="grousp_crs_right">
                                    <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                    <div class="frt_but"><a href="#" class="text-white btn theme-bg">Voir le cours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grousp_crs">
                                <div class="grousp_crs_left">
                                    <div class="grousp_crs_thumb"><img src="assets/img/c-3.png" class="img-fluid"
                                            alt="" /></div>
                                    <div class="grousp_crs_caption">
                                        <h4>Adobe Photoshop cc 2021 - Free Assential Training</h4>
                                    </div>
                                </div>
                                <div class="grousp_crs_right">
                                    <div class="frt_125"><i class="mr-1 fas fa-fire text-warning"></i>8.7</div>
                                    <div class="frt_but"><a href="#" class="text-white btn theme-bg">Voir le cours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endcan
            <!-- /Row -->

            <!-- Row -->
              @can('dashboard')
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="dashboard_wrap">

                            <div class="row">
                                <div class="mb-4 col-xl-12 col-lg-12 col-md-12">
                                    <h6 class="m-0">All Courses List</h6>
                                </div>
                            </div>

                            <div class="mb-5 row align-items-end">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Categories</label>
                                        <div class="smalls">
                                            <select id="cates" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">IT & Software</option>
                                                <option value="2">Banking</option>
                                                <option value="3">Medical</option>
                                                <option value="4">Insurence</option>
                                                <option value="5">Finance & Accounting</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Instructor</label>
                                        <div class="smalls">
                                            <select id="ins" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">Summer D. Friedel</option>
                                                <option value="2">Daniel D. Richards</option>
                                                <option value="3">Rosemary K. Delisle</option>
                                                <option value="4">Joseph S. Whetstone</option>
                                                <option value="5">Roger M. Gragg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="smalls">
                                            <select id="sts" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">Active</option>
                                                <option value="2">Incoming</option>
                                                <option value="3">Expired</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="smalls">
                                            <select id="prc" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">All</option>
                                                <option value="2">Free</option>
                                                <option value="3">Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <button type="button" class="text-white btn full-width theme-bg">Filter</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <div class="form-group smalls row align-items-center">
                                        <label class="col-xl-3 col-lg-3 col-sm-2 col-form-label">Show</label>
                                        <div class="col-xl-9 col-lg-9 col-sm-10">
                                            <select id="show" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">10</option>
                                                <option value="2">25</option>
                                                <option value="3">35</option>
                                                <option value="3">50</option>
                                                <option value="3">100</option>
                                                <option value="3">250</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="form-group smalls row align-items-center">
                                        <label class="col-xl-2 col-lg-2 col-sm-2 col-form-label">Search</label>
                                        <div class="col-xl-10 col-lg-10 col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-2 col-xl-12 col-lg-12 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table dash_list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Lectures</th>
                                                    <th scope="col">Enrolled</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <h6>UI/UX Design Pattern For Succesfull Software Applications</h6>
                                                        <p>Instructor:<span>Gabriel L. William</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Finance</div>
                                                    </td>
                                                    <td>
                                                        <div class="smalls">17 Lectures</div>
                                                    </td>
                                                    <td><span class="smalls">Total: 12</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <h6>Basic Knowledge About Hodiernal Bharat In History</h6>
                                                        <p>Instructor:<span>Theresa P. Crane</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Laravel</div>
                                                    </td>
                                                    <td>
                                                        <div class="smalls">22 Lectures</div>
                                                    </td>
                                                    <td><span class="smalls">Total: 2</span></td>
                                                    <td><span class="trip text-danger bg-light-danger">Expired</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <h6>Advance PHP Knowledge With Laravel To Make Smart Web</h6>
                                                        <p>Instructor:<span>David Dhavan</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Software</div>
                                                    </td>
                                                    <td><span class="smalls">41 Lectures</span></td>
                                                    <td><span class="smalls">Total: 4</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip gray">$99</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <h6>The Complete Accounting & Bank Financial Course 2021</h6>
                                                        <p>Instructor:<span>Stephen E. Foss</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Magento</div>
                                                    </td>
                                                    <td><span class="smalls">56 Lectures</span></td>
                                                    <td><span class="smalls">Total: 8</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <h6>The Complete Business Plan Course Includes 50 Templates</h6>
                                                        <p>Instructor:<span>Jeannette B. Curiel</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Business</div>
                                                    </td>
                                                    <td><span class="smalls">40 Lectures</span></td>
                                                    <td><span class="smalls">Total: 9</span></td>
                                                    <td><span class="trip text-danger bg-light-danger">Expired</span></td>
                                                    <td><span class="trip gray">$100</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <h6>Full Web Designing Course With 20 Web Template Designing</h6>
                                                        <p>Instructor:<span>Daniel E. Theriault</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">Science</div>
                                                    </td>
                                                    <td><span class="smalls">22 Lectures</span></td>
                                                    <td><span class="smalls">Total: 0</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>
                                                        <h6>Full Web Hosting Course With 20 Web Template Designing</h6>
                                                        </h6>
                                                        <p>Instructor:<span>Brian B. Cohn</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">JavaScript</div>
                                                    </td>
                                                    <td><span class="smalls">32 Lectures</span></td>
                                                    <td><span class="smalls">Total: 8</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip gray">$49</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>
                                                        <h6>Advance Laravel Coding Course Advance Technology</h6>
                                                        <p>Instructor:<span>Joshua G. Godinez</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">PHP</div>
                                                    </td>
                                                    <td><span class="smalls">20 Lectures</span></td>
                                                    <td><span class="smalls">Total: 7</span></td>
                                                    <td><span class="trip text-danger bg-light-danger">Expired</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>
                                                        <h6>Full Web Designing Course With 20 Web Template Designing</h6>
                                                        <p>Instructor:<span>R. Lindsley</span></p>
                                                    </td>
                                                    <td>
                                                        <div class="dhs_tags">WordPress</div>
                                                    </td>
                                                    <td><span class="smalls">10 Lectures</span></td>
                                                    <td><span class="smalls">Total: 6</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Active</span></td>
                                                    <td><span class="trip theme-cl theme-bg-light">Free</span></td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-action" href="#" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h"></i>
                                                            </a>
                                                            <div class="drp-select dropdown-menu">
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">View</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
                                                                <a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <p class="p-0">Showing 1 to 15 of 15 entire</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <nav class="float-right">
                                        <ul class="m-0 pagination smalls">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i
                                                        class="fas fa-arrow-circle-left"></i></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-arrow-circle-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
                @endcan
            <!-- /Row -->
        </div>
    </div>
</section>
</x-app-layout>
<!-- ============================ Dashboard: Dashboard End ================================== -->
