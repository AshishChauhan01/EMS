@php
$page = "department";
@endphp

@extends('admin.layout')

@section('title', 'EMS - Department')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="data-section">
                    <h4>Update Department</h4>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @else
                    @endif
                    <form action="{{url('admin/update-department',$department->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="department" class="form-label">Department Name</label>
                            <input type="text" name="department" value='{{$department->department_name}}' placeholder="Enter Department Name" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-sm btn-success">Update Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection