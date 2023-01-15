@extends('layout1')
@section('title','all Documents')
@section('content')

<div class="col-md-12 mb-4 position-relative">
    <h5 class="fw-bold mb-0">
  المستندات
    </h5>

    <nav style="--bs-breadcrumb-divider: '>';" class="my-bread mb-0" aria-label="breadcrumb">
      <ol class="breadcrumb  mb-0">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page"> المستندات
        </li>
      </ol>
    </nav>
  </div>



  <div class="col-md-12">



    <div class="data_table bg-white mb-4 rounded-3 shadow  py-4">

      <h5 class="m-4 float-start">
        مستندات الموظف



      </h5>
      <a href="" class="btn btn-green m-4 float-end">إضافة مستند جديد</a>


      <table class="table   table-striped ">
        <thead>
          <tr>
            <th scope="col">
                الأسم
            </th>
            <th scope="col">  تاريخ الانتهاء
            </th>
            <th scope="col">الوصف</th>
            <th scope="col">النوع</th>
            <th scope="col">العمليات</th>
          </tr>
        </thead>
        <tbody>
          <tr data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
            <td data-label="الأسم"> قرار اداري
            </td>
            <td data-label=" الانتهاء ">
             --
            </td>
            <td data-label="الوصف">-- </td>
            <td data-label="النوع"><a href="https://www.trafficksa.com/public/site/files/traffic-profile.pdf" target="blank" class="pdf">
              <i class="far fa-file-pdf fa-lg" aria-hidden="true"></i>  </a></td>

              <td data-label="العمليات"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                role="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> حذف </a></li>
                <li><a class="dropdown-item" href="#"> تعديل</a></li>
              </ul>
            </td>

          </tr>
          <tr data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
            <td data-label="الأسم"> الهويه و الاقامة
            </td>
            <td data-label=" الانتهاء ">
             --
            </td>
            <td data-label="الوصف">-- </td>
            <td data-label="النوع"><a href="https://www.trafficksa.com/public/site/files/traffic-profile.pdf" target="blank" class="pdf">
              <i class="far fa-file-pdf fa-lg" aria-hidden="true"></i>  </a></td>

              <td data-label="العمليات"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                role="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> حذف </a></li>
                <li><a class="dropdown-item" href="#"> تعديل</a></li>
              </ul>
            </td>


          </tr>
          <tr data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
            <td data-label="الأسم"> عقد العمل
            </td>
            <td data-label=" الانتهاء ">
             --
            </td>
            <td data-label="الوصف">-- </td>
            <td data-label="النوع"><a href="https://www.trafficksa.com/public/site/files/traffic-profile.pdf" target="blank" class="pdf">
              <i class="far fa-file-pdf fa-lg" aria-hidden="true"></i>  </a></td>

              <td data-label="العمليات"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                role="button" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> حذف </a></li>
                <li><a class="dropdown-item" href="#"> تعديل</a></li>
              </ul>
            </td>


          </tr>
        </tbody>
      </table>



    </div>




  </div>
  @endsection
