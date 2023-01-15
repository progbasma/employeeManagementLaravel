@extends('layout1')
@section('title','كل الأقسام')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                كل الأقسام
                                <a href="{{url('depart/create')}}" class="float-end btn btn-sm btn-green">قسم جديد</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>العنوان</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>العنوان</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$d->id}}</td>
	                                            <td>{{$d->title}}</td>
                                                <td>
                                                    <a href="{{url('depart/'.$d->id)}}" class="btn btn-green btn-sm">عرض</a>
                                                    <a href="{{url('depart/'.$d->id.'/edit')}}" class="btn btn-green btn-sm">تعديل</a>
                                                    <a onclick="return confirm('هل أنت متأكد من مسح البيانات؟')" href="{{url('depart/'.$d->id.'/delete')}}" class="btn btn-green btn-sm">مسح</a>
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
