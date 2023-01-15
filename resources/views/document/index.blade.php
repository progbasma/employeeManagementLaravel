@extends('layout1')
@section('title','كل المستندات')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                كل المستندات
                                <a href="{{url('document/create')}}" class="float-end btn btn-sm btn-green">مستند جديد</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الموظف </th>
                                            <th>اسم المستند</th>
                                            <th>الوصف</th>
                                            <th>الملف</th>

                                            <th>النوع</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الموظف </th>
                                            <th>اسم المستند</th>
                                            <th>الوصف</th>
                                            <th>الملف</th>

                                            <th>النوع</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>

	                                            <td>{{$d->employee->full_name}}</td>
                                                <td>{{$d->title}}</td>
                                                <td>{{$d->description}}</td>

                                                <td><img src="{{asset('public/images/'.$d->photo)}}" width="80" /></td>
                                                <td>{{$d->type}}</td>
                                                <td>
                                                    <a href="{{url('document/'.$d->id)}}" class="btn btn-green btn-sm">عرض</a>
                                                    <a href="{{url('document/'.$d->id.'/edit')}}" class="btn btn-green btn-sm">تعديل</a>
                                                    <a onclick="return confirm('هل انت متأكد من حذف البيانات ؟')" href="{{url('document/'.$d->id.'/delete')}}" class="btn btn-green btn-sm">حذف</a>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>

@endsection
