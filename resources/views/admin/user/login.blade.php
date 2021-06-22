
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login For xxp</title>
  <!-- Favicon -->
 
  <link rel="icon" href=" /assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href=" /assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href=" /assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href=" /assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- 整体的盒子 -->
  <div class="main-content">
    <!-- 头部文字 -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">校小评后台登陆
			  </h1>
              <p class="text-lead text-white">更专业的校园评价平台，致力服务每一位考生</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <!--登录框内的所有元素 -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
          <br><br><br>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>使用账号密码登录系统</small>
              </div>
              <!-- -------------------------------------登录表单起---------------------------------->
              <form  action="{{url('admin/check')}}" method="post">
                <!-- -------------------------------------用户名框---------------------------------->
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="用 户 名"  type="text" name="username"  required="请填写用户名" />
                  </div>
                </div>
                <!-- -------------------------------------密码框---------------------------------->
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control lock" placeholder="密 码"  type="password" name="password" />
                    <span class="help-block">{{session()->get('message','')}}</span>
                  </div>
                </div>
               <!-- -------------------------------------登录按钮---------------------------------->
                <div class="text-center">
                  <input type="submit" class="btn btn-primary my-4"  type="button" value="登录" />
                  {{csrf_field()}}
                </div>
              </form>
               <!-- -------------------------------------登录表单止---------------------------------->
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>忘记密码？</small></a>
               <!-- 自己做找回密码 -->
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>创建一个账户</small></a>
              <!-- 自己做登陆页面 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 页脚 -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">制作：软件1902 马壹元</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Powered  by argon theme</a>
              <!-- 这行绝对不能删除，否则会造成开源协议违规！ -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Argon Scripts 脚本引入-->
  <script src=" /assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src=" /assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src=" /assets/vendor/js-cookie/js.cookie.js"></script>
  <script src=" /assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src=" /assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS  脚本引入 -->
  <script src=" /assets/js/argon.js?v=1.2.0"></script>
</body>

</html>