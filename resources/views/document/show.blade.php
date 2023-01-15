@extends('layout')
@section('title','عرض مستند')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        عرض مستند
        <a href="{{url('document')}}" class="float-end btn btn-sm btn-green">عرض الكل</a>
    </div>
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
        <form method="post" action="{{url('document/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>الموظف</th>
                    <td>
                        {{$data->employee->full_name}}
                    </td>
                </tr>
                <tr>
                    <th>العنوان</th>
                    <td>
                        {{$data->title}}
                    </td>
                </tr>
                <tr>
                    <th>الملف</th>
                    <td>
                        <img src="{{asset('public/images/'.$data->photo)}}" width="200" />
                    </td>
                </tr>
                <tr>
                    <th>الوصف</th>
                    <td>
                        {{$data->description}}
                    </td>
                </tr>
                <tr>
                    <th>النوع</th>
                    <td>
                        {{$data->type}}
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

@endsection
