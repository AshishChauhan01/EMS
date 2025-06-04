@php
$page = 'department';
@endphp
@extends('admin.layout')
@section('title', 'EMS - Department')
@section('main-content')
    <div class="manage-department">
        <div class="container">
           <div class="data-section">
            <h4>Manage Departments</h4>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @else
                @endif  
                <div class="text-end">
                    <a href="{{url('admin/add-department')}}" class="btn btn-success btn-sm">Add Department</a>
                </div>
                <div>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $key => $department)
                                <tr>
                                    <td scope="row">{{$key + 1 . '.'}}</td>
                                    <td>{{$department->department_name}}</td>
                                    <td>
                                        <a href="{{url('admin/view-department', ['id' => $department->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{url('admin/delete-department', ['id' => $department->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                {{ $departments->links() }}   
                </div>
           </div>
        </div>
    </div>
@endsection