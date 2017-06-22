a:9:{i:0;s:55:"<!DOCTYPE html>
<html lang="en">
    <head>
        ";s:4:"head";a:1:{i:0;a:4:{s:4:"type";i:313;s:4:"path";a:4:{s:4:"type";i:260;s:5:"value";s:16:"global/head.volt";s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:4;}s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:4;}}i:1;s:175:"
    </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                ";s:7:"sidebar";a:1:{i:0;a:4:{s:4:"type";i:313;s:4:"path";a:4:{s:4:"type";i:260;s:5:"value";s:19:"global/sidebar.volt";s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:11;}s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:11;}}i:2;s:112:"
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                ";s:6:"navbar";a:1:{i:0;a:4:{s:4:"type";i:313;s:4:"path";a:4:{s:4:"type";i:260;s:5:"value";s:18:"global/navbar.volt";s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:16;}s:4:"file";s:55:"D:\wamp64\www\mcorder\app/views/global/full_layout.volt";s:4:"line";i:16;}}i:3;s:2706:"
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
                ";s:7:"content";N;i:4;s:886:"
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
";}