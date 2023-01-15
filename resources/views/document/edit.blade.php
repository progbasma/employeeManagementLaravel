@extends('layout')
@section('title','تعديل مستند')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        تعديل مستند
        <a href="{{url('document')}}" class="float-end btn btn-sm btn-green">عرض الكل </a>
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
                        <select name="employee" class="form-control">
                            <option value="">-- اختر الموظف--</option>
                            @foreach($employees as $employee)
                                <option @if($employee->id==$data->employee_id) selected @endif value="{{$employee->id}}">{{$employee->full_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>اسم المستند</th>
                    <td>
                        <input type="text" value="{{$data->title}}" name="title" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>الملف</th>
                    <td>
                        <input type="file" name="photo" class="form-control" />
                        <p>
                            <img src="{{asset('public/images/'.$data->photo)}}" width="200" />
                            <input type="hidden" name="prev_photo" value="{{$data->photo}}" />
                        </p>
                    </td>
                </tr>
                <tr>
                    <th>الوصف</th>
                    <td>
                        <input value="{{$data->description}}" type="text" name="description" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>النوع </th>
                    <td>
                        <input value="{{$data->type}}" type="text" name="type" class="form-control" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection
