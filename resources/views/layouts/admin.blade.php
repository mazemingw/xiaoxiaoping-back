<html>
    <head>
        <title>校小评 - @yield('title')</title>
          <!-- Favicon -->
  <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/assets/css/argon.css?v=1.2.0" type="text/css">
    </head>


    <body>
        @section('sidebar')
          <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('admin')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">工作台</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">用户管理</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">院校库</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">专业库</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">分数线</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">院校圈</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">系统设置</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">说明文档</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">入门指南</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">故障排除</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">工程师的记事本</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">系统版本 21.06.22</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

        @show

        <div class="container">
            @yield('content')
        </div>

        <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="http://cmosshenzhen.oss-cn-shenzhen.aliyuncs.com/argon/assets/js/argon.js?v=1.2.0"></script>
    </body>

</html>