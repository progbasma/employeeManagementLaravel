
  <!doctype html>
  <html lang="ar" dir="rtl">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title> @yield('title')</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
  </head>

  <body>


    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-3 sidemenu ">
          <nav id="sidebarMenu" class="shadow col-lg-2 pt-4 d-md-block bg-white sidebar collapse">
            <img src="image/g-logo.png" class="nav-link" alt="" srcset="">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="{{ url('/') }}">
                    <i class="bi bi-house"></i>
                    الرئيسية
                  </a>
                </li>
              </ul>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-muted">
                <span>عرض الأقسام </span>
                <a class="link-secondary" href="{{ url('/depart') }}" aria-label="إضافة تقرير جديد">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/depart') }}">
                    <i class="bi bi-person"></i>
                    الأقسام
                  </a>
                </li>
              </ul>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-muted">
                <span>عرض الموظفين </span>
                <a class="link-secondary" href="{{ url('/employee') }}" aria-label="إضافة تقرير جديد">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/employee') }}">
                    <i class="bi bi-person"></i>
                    الموظفين
                  </a>
                </li>
              </ul>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-muted">
                <span>عرض المستندات </span>
                <a class="link-secondary" href="{{ url('/document') }}" aria-label="إضافة تقرير جديد">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/document') }}">
                    <i class="bi bi-person"></i>
                    المستندات
                  </a>
                </li>
              </ul>







            </div>
          </nav>
        </div>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 bg-gray">

          <nav class="navbar topmenu navbar-expand-lg navbar-light bg-white shadow rounded-2 mb-4">
            <div class="container-fluid">
              <div class="d-flex align-items-center">
                <img src="image/user.png" class="me-3" alt="" srcset="">
                <div class="me-3 d-inline-flex flex-column">
                  <span>
                    بسمة عبد الحليم أحمد
                  </span>
                  <span>
                    مطور مواقع إالكترونية
                  </span>
                </div>
                <!-- <div class="d-sm-flex d-none user-nav">
                  <p class="user-name font-weight-bolder mb-0"> John Doe </p><span class="user-status">admin</span>
                </div> -->
                <i class="fa-solid fa-sliders me-3"></i>
                <i class="far fa-bell me-3"></i>
                <i class="far fa-moon me-3"></i>
              </div>
              <div>
                <i class="fas fa-language"></i>
              </div>

              <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="عرض/إخفاء لوحة التنقل">
                <span class="navbar-toggler-icon"></span>
              </button>


            </div>
          </nav>



          <div class="row">
            @yield('content')


          </div> <!-- end col-9 -->
        </div>
      </div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
      </script>
      <script src="https://kit.fontawesome.com/798745816a.js" crossorigin="anonymous"></script>
  </body>

  </html>
