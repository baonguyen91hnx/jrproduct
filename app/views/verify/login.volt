<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>
    {{ stylesheet_link('gentella/bootstrap/dist/css/bootstrap.min.css') }}
    {{ stylesheet_link('gentella/font-awesome/css/font-awesome.min.css') }}
    {{ stylesheet_link('gentella/custom.min.css') }}

  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{url('verify/login')}}">
              <h1>Đăng Nhập</h1>
              <div class="row">
                  {% if flash.has() %}{{flash.output()}}{% endif %}
              </div>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Tên Đăng Nhập" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mật Khẩu" required="" />
              </div>
              <div>
                <button class="btn btn-default" type="submit" >Đăng Nhập</button>
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
