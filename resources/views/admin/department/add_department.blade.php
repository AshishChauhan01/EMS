@php 
    $page = "department";
@endphp

@extends('admin.layout')

@section('title', 'Add Department')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @else
                    <div class="alert alert-danger">{{session('error')}}</div>    
                @endif
                <div class="form-box">
                    <h4>Add Department</h4>
                    <form action="{{url('save-department')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="department" class="form-label">Department Name</label>
                            <input type="text" name="department" placeholder="Enter Department Name" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection