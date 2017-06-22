<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gentellela Alela! | </title>

<!-- Bootstrap -->

<?= $this->tag->stylesheetLink('gentella/bootstrap/dist/css/bootstrap.min.css') ?>
<!-- Font Awesome -->

<?= $this->tag->stylesheetLink('gentella/font-awesome/css/font-awesome.min') ?>
<!-- Custom Theme Style -->

<?= $this->tag->stylesheetLink('gentella/custom.min.css') ?>

    </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
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
                    <?php if ($current_user->display_name != null) { ?>
                        <?= $current_user->display_name ?>
                    <?php } else { ?>
                        <?= $current_user->name ?>
                    <?php } ?>
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
                            <li><a href="<?= $this->url->get('user/index') ?>">Quản Lý </a></li>
                            <li><a href="<?= $this->url->get('user/add') ?>">Thêm Mới</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Chức Vụ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->url->get('role/index') ?>">Quản Lý</a></li>
                            <li><a href="<?= $this->url->get('role/add') ?>">Thêm Mới</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Khách Hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->url->get('customer/index') ?>">Quản Lý</a></li>
                            <li><a href="<?= $this->url->get('customer/add') ?>">Thêm Mới</a></li>
                            <li><a href="<?= $this->url->get('customer/log') ?>">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Cơ Sở <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->url->get('place/index') ?>">Quản Lý</a></li>
                            <li><a href="<?= $this->url->get('place/add') ?>">Thêm Mới</a></li>
                            <li><a href="<?= $this->url->get('place/log') ?>">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Sản Phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->url->get('product/index') ?>">Quản Lý</a></li>
                            <li><a href="<?= $this->url->get('product/add') ?>">Thêm Mới</a></li>
                            <li><a href="<?= $this->url->get('product/log') ?>">Thống Kê</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Hóa Đơn <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->url->get('ticket/index') ?>">Quản Lý</a></li>
                            <li><a href="<?= $this->url->get('ticket/add') ?>">Thêm Mới</a></li>
                            <li><a href="<?= $this->url->get('ticket/log') ?>">Thống Kê</a></li>

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
                                <li><a href="<?= $this->url->get('campaign/index') ?>">Quản Lý</a></li>
                                <li><a href="<?= $this->url->get('campaign/add') ?>">Thêm Mới</a></li>
                                <li><a href="<?= $this->url->get('campaign/log') ?>">Thống Kê</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-windows"></i> Offers <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?= $this->url->get('offer/index') ?>">Quản Lý</a></li>
                                <li><a href="<?= $this->url->get('offer/add') ?>">Thêm Mới</a></li>
                                <li><a href="<?= $this->url->get('offer/log') ?>">Thống Kê</a></li>

                            </ul>
                        </li>
                        <li><a href="<?= $this->url->get('log/index') ?>"><i class="fa fa-sitemap"></i> Thống Kê <span class="fa fa-chevron-down"></span></a></li>
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

            </div>

            <!-- top navigation -->
            <div class="top_nav">
                
<div class="nav_menu">
  <nav>
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li class="">
        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="images/img.jpg" alt="">
            <?php if ($current_user->display_name != null) { ?>
                <?= $current_user->display_name ?>
            <?php } else { ?>
                <?= $current_user->name ?>
            <?php } ?>
          <span class=" fa fa-angle-down"></span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu pull-right">
          <li><a href="javascript:;"> Profile</a></li>
          <li>
            <a href="javascript:;">
              <span class="badge bg-red pull-right">50%</span>
              <span>Settings</span>
            </a>
          </li>
          <li><a href="javascript:;">Help</a></li>
          <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
        </ul>
      </li>

      <li role="presentation" class="dropdown">
        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-envelope-o"></i>
          <span class="badge bg-green">6</span>
        </a>
        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
          <li>
            <a>
              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <div class="text-center">
              <a>
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row tile_count">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                        <div class="count">123.50</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                        <div class="count green">2,500</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                        <div class="count">4,567</div>
                        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                        <div class="count">2,315</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                        <div class="count">7,325</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                </div>
                <div class="row">
                    <?php if ($this->flash->has()) { ?><?= $this->flash->output() ?><?php } ?>
                </div>
                


<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Trang Chủ</a></li>
        <li class="active">Thay Đổi Thông Tin Cơ Sở</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-8">
        <h3>Thay Đổi Thông Tin Cơ Sở</h3>
        <span>Vui Lòng Điền Đầy Đủ Thông Tin Bên Dưới</span>
    </div>
</div>
<div class="row">
    <form method="post" action="<?= $this->url->get('place/edit/?id=' . $place->id) ?>">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label>Tên Cơ Sở</label>
                <input type="text" class="form-control" name="name" value="<?= $place->name ?>" />
            </div>
            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" class="form-control" name="address" value="<?= $place->address ?>" />
            </div>
            <div class="form-group">
                <label>Trực Thuộc Đơn Vị</label>
                <select class="form-control" name="slam_id">
                    <?php foreach ($slams as $slam) { ?>
                        <option <?php if ($slam->id == $place->slam_id) { ?> selected="selected" <?php } ?> value="<?= $slam->id ?>"><?= $slam->display_name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Tạo Mới</button>
            <a href="<?= $this->url->get('place/index') ?>" class="btn btn-default">Quay Lại</a>
        </div>

    </form>
</div>



            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
        <!-- /footer content -->
        </div>
    </div>
    <?= $this->tag->javascriptInclude('gentella/jquery/dist/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('gentella/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>
    <?= $this->tag->javascriptInclude('gentella/tinymce/tinymce.min.js') ?>
    <?= $this->tag->javascriptInclude('gentella/bootstrap/dist/js/bootstrap.min.js') ?>
    <!-- Custom Theme Scripts -->
    <?= $this->tag->javascriptInclude('gentella/custom.min.js') ?>
  </body>
</html>
