<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MindConnect Project Sale Manager </title>
    <?= $this->tag->stylesheetLink('gentella/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('gentella/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->tag->stylesheetLink('gentella/custom.min.css') ?>

  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= $this->url->get('verify/createOnceBefore') ?>">
                <h1>Đăng Kí</h1>
                <div class="row">
                    <?php if ($this->flash->has()) { ?><?= $this->flash->output() ?><?php } ?>
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Tên Đăng Nhập"  />
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mật Khẩu"  />
                </div>
                <div class="form-group">
                    <input type="password" name="re-password" class="form-control" placeholder="Nhập Lại Mật Khẩu"  />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email"  />
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Số Điện Thoại" />
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit" >Xác Nhận</button>
                </div>

                <div class="clearfix"></div>
                <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                    <h1>MindConnect JSC  </h1>
                    <p>©2017 All Rights Reserved - Support By baonguyen91hn@gmail.com or 0976056027 </p>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
