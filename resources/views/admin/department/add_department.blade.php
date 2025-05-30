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
                    <h4>Add Department</h4>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {!! session('success') !!}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @else
                    @endif
                    <form action="{{url('admin/save-department')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="department" class="form-label">Department Name</label>
                            <input type="text" name="department" placeholder="Enter Department Name" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-sm btn-success">Add Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection