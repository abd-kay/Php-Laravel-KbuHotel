<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img src="{{asset('assets')}}/dashboard/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">ThemeKit</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item @if(Request::url() === route('admin') ) active @endif  ">
                    <a href="{{ route('admin') }}"><i class="ik ik-bar-chart-2 @if(Request::url() === route('admin') ) text-orange @endif "></i><span>Dashboard</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('admin_category'))  active @endif "  >
                    <a href="{{route('admin_category')}}"><i class="ik ik-grid @if(Request::url() === route('admin_category')) text-orange @endif"></i><span>Categories</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('hotels')) active @endif ">
                    <a href="{{route('hotels')}}"><i class="ik ik-home @if(Request::url() === route('hotels')) text-orange @endif"></i><span>Hotels</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('admin_reservations')) active @endif ">
                    <a href="{{route('admin_reservations')}}"><i class="ik ik-book @if(Request::url() === route('admin_reservations')) text-orange @endif"></i><span>Reservations</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('messages')) active @endif ">
                    <a href="{{route('messages')}}"><i class="ik ik-message-square @if(Request::url() === route('messages')) text-orange @endif"></i><span>Messages</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('reviews')) active @endif ">
                    <a href="{{route('reviews')}}"><i class="ik ik-star @if(Request::url() === route('reviews')) text-orange @endif"></i><span>Reviews</span></a>
                </div>

                <div class="nav-lavel">Other</div>
                <div class="nav-item @if(Request::url() === route('admin_users')) active @endif ">
                    <a href="{{route('admin_users')}}"><i class="ik ik-user @if(Request::url() === route('admin_users')) text-orange @endif"></i><span>Users</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('admin_faqs')) active @endif ">
                    <a href="{{route('admin_faqs')}}"><i class="ik ik-help-circle @if(Request::url() === route('admin_faqs')) text-orange @endif"></i><span>FAQS</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('admin_setting')) active @endif ">
                    <a href="{{route('admin_setting')}}"><i class="ik ik-settings @if(Request::url() === route('admin_setting')) text-orange @endif"></i><span>Settings</span></a>
                </div>
                <div class="nav-item @if(Request::url() === route('admin_front_setting')) active @endif ">
                    <a href="{{route('admin_front_setting')}}"><i class="ik ik-monitor @if(Request::url() === route('admin_front_setting')) text-orange @endif"></i><span>Ui Settings</span></a>
                </div>


       
                <div class="nav-lavel">Forms</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                    <div class="submenu-content">
                        <a href="pages/form-components.html" class="menu-item">Components</a>
                        <a href="pages/form-addon.html" class="menu-item">Add-On</a>
                        <a href="pages/form-advance.html" class="menu-item">Advance</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="pages/form-picker.html"><i class="ik ik-terminal"></i><span>Form Picker</span> <span class="badge badge-success">New</span></a>
                </div>

                <div class="nav-lavel">Tables</div>
                <div class="nav-item">
                    <a href="pages/table-bootstrap.html"><i class="ik ik-credit-card"></i><span>Bootstrap Table</span></a>
                </div>
                <div class="nav-item">
                    <a href="pages/table-datatable.html"><i class="ik ik-inbox"></i><span>Data Table</span></a>
                </div>

                <div class="nav-lavel">Charts</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-pie-chart"></i><span>Charts</span> <span class="badge badge-success">New</span></a>
                    <div class="submenu-content">
                        <a href="pages/charts-chartist.html" class="menu-item active">Chartist</a>
                        <a href="pages/charts-flot.html" class="menu-item">Flot</a>
                        <a href="pages/charts-knob.html" class="menu-item">Knob</a>
                        <a href="pages/charts-amcharts.html" class="menu-item">Amcharts</a>
                    </div>
                </div>

                <div class="nav-lavel">Apps</div>
                <div class="nav-item">
                    <a href="pages/calendar.html"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                </div>
                <div class="nav-item">
                    <a href="pages/taskboard.html"><i class="ik ik-server"></i><span>Taskboard</span></a>
                </div>

                <div class="nav-lavel">Pages</div>

                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                    <div class="submenu-content">
                        <a href="pages/login.html" class="menu-item">Login</a>
                        <a href="pages/register.html" class="menu-item">Register</a>
                        <a href="pages/forgot-password.html" class="menu-item">Forgot Password</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span>Other</span></a>
                    <div class="submenu-content">
                        <a href="pages/profile.html" class="menu-item">Profile</a>
                        <a href="pages/invoice.html" class="menu-item">Invoice</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="pages/layouts.html"><i class="ik ik-layout"></i><span>Layouts</span><span class="badge badge-success">New</span></a>
                </div>
                <div class="nav-lavel">Other</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Levels</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)" class="disabled"><i class="ik ik-slash"></i><span>Disabled Menu</span></a>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Sample Page</span></a>
                </div>
                <div class="nav-lavel">Support</div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>
