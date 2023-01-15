@extends('layout')
@section('title','كل الموظفين')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               كل الموظفين
                                <a href="{{url('employee/create')}}" class="float-end btn btn-sm btn-green">موظف جديد</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>القسم</th>
                                            <th>الاسم كامل</th>
                                            <th>الصورة</th>
                                            <th>العنوان</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>القسم</th>
                                            <th>الاسم كامل</th>
                                            <th>الصورة</th>
                                            <th>العنوان</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->department->title}}</td>
                                                <td>{{$d->full_name}}</td>
                                                <td><img src="{{asset('public/images/'.$d->photo)}}" width="80" /></td>
                                                <td>{{$d->address}}</td>
                                                <td >
                                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href=""
                                                    role="button" aria-expanded="true"><i class="fas fa-ellipsis-v"></i></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"href="{{url('employee/'.$d->id)}}" class="btn btn-green btn-sm">عرض</a></li>
                                                    <li><a class="dropdown-item"href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-green btn-sm">تعديل</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" onclick="return confirm('هل أنت متأكد من مسح البيانات؟')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-green btn-sm">مسح</a>

                                                    </li>
                                                  </ul>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>




@endsection
