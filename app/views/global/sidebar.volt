<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MindConnect JSC</span></a>
    </div>

    <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                    {% if current_user.display_name != null %}
                        {{current_user.display_name}}
                    {% else %}
                        {{current_user.name}}
                    {% endif %}
                </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>MC Project Manager</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Thành Viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('user/index')}}">Quản Lý </a></li>
                            <li><a href="{{url('user/add')}}">Thêm Mới</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Chức Vụ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('role/index')}}">Quản Lý</a></li>
                            <li><a href="{{url('role/add')}}">Thêm Mới</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Khách Hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('customer/index')}}">Quản Lý</a></li>
                            <li><a href="{{url('customer/add')}}">Thêm Mới</a></li>
                            <li><a href="{{url('customer/log')}}">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Cơ Sở <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('place/index')}}">Quản Lý</a></li>
                            <li><a href="{{url('place/add')}}">Thêm Mới</a></li>
                            <li><a href="{{url('place/log')}}">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('product/index')}}">Quản Lý</a></li>
                            <li><a href="{{url('product/add')}}">Thêm Mới</a></li>
                            <li><a href="{{url('product/log')}}">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Hóa Đơn <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('ticket/index')}}">Quản Lý</a></li>
                            <li><a href="{{url('ticket/add')}}">Thêm Mới</a></li>
                            <li><a href="{{url('ticket/log')}}">Thống Kê</a></li>

                        </ul>
                    </li>


                    <li><a><i class="fa fa-bar-chart-o"></i> Chỉ Đường <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs.html">Chart JS</a></li>
                            <li><a href="chartjs2.html">Chart JS2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Slam </h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-bug"></i> Chiến Dịch <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('campaign/index')}}">Quản Lý</a></li>
                                <li><a href="{{url('campaign/add')}}">Thêm Mới</a></li>
                                <li><a href="{{url('campaign/log')}}">Thống Kê</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-windows"></i> Offers <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('offer/index')}}">Quản Lý</a></li>
                                <li><a href="{{url('offer/add')}}">Thêm Mới</a></li>
                                <li><a href="{{url('offer/log')}}">Thống Kê</a></li>

                            </ul>
                        </li>
                        <li><a href="{{url('log/index')}}"><i class="fa fa-sitemap"></i> Thống Kê <span class="fa fa-chevron-down"></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
