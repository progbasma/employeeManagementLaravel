@extends('layout')
@section('title','عرض قسم')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        عرض قسم
        <a href="{{url('depart')}}" class="float-end btn btn-sm btn-green">عرض الكل</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>العنوان</th>
                <td>
                    {{$data->title}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
