@extends('layout1')
@section('title','موظف جديد')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        إضافة موظف
        <a href="{{url('employee')}}" class="float-end btn btn-sm btn-green">عرض الكل</a>
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
        <form method="post" action="{{url('employee')}}" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>الاقسام</th>
                    <td>
                        <select name="depart" class="form-control">
                            <option value="">-- اختر القسم --</option>
                            @foreach($departments as $depart)
                                <option value="{{$depart->id}}">{{$depart->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>الاسم كامل</th>
                    <td>
                        <input type="text" name="full_name" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>الصوره</th>
                    <td>
                        <input type="file" name="photo" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>العنوان</th>
                    <td>
                        <input type="text" name="address" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>الجوال</th>
                    <td>
                        <input type="text" name="mobile" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>الحالة</th>
                    <td>
                        <input type="radio" name="status" value="1" /> نشط
                        <br />
                        <input type="radio" checked="checked" name="status" value="0" /> غير نشط
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="ارسال" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection
