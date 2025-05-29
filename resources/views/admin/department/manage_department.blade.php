@php
    $page = 'department';
@endphp
@extends('admin.layout')
@section('title')
@section('main-content')
<div class="manage-department">
    <div class="container">
        <div class="row">
            @foreach ($departments as $department)
                <div>{{$department->department_name}}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection