@extends('layout')
@section('title','كل الأقسام')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                كل الأقسام
                                <a href="{{url('depart/create')}}" class="float-end btn btn-sm btn-green">قسم جديد</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table   table-striped">
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

                                                <td >
                                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href=""
                                                    role="button" aria-expanded="true"><i class="fas fa-ellipsis-v"></i></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"href="{{url('depart/'.$d->id)}}" class="btn btn-green btn-sm">عرض</a></li>
                                                    <li><a class="dropdown-item"href="{{url('depart/'.$d->id.'/edit')}}" class="btn btn-green btn-sm">تعديل</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" onclick="return confirm('هل أنت متأكد من مسح البيانات؟')" href="{{url('depart/'.$d->id.'/delete')}}" class="btn btn-green btn-sm">مسح</a>

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
