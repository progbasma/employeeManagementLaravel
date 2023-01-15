@extends('layout1')
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
                                                <td>
                                                    <a href="{{url('employee/'.$d->id)}}" class="btn btn-green btn-sm">عرض</a>
                                                    <a href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-green btn-sm">تعديل</a>
                                                    <a onclick="return confirm('هل أنت متاكد من حذف البيانات ؟')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-green btn-sm">حذف</a>
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
