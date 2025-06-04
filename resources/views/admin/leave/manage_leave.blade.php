@php
$page = 'leave';
@endphp
@extends('admin.layout')
@section('title', 'EMS - Department')
@section('main-content')
    <div class="manage-department">
        <div class="container">
           <div class="data-section">
            <h4>Manage Leave Types</h4>

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
                    <a href="{{url('admin/add-leave')}}" class="btn btn-success btn-sm">Add Leave Type</a>
                </div>   
                <div>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type Of Leave</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaves as $key => $leave)
                                <tr>
                                    <td scope="row">{{$key + 1 . '.'}}</td>
                                    <td>{{$leave->leave_type}}</td>
                                    <td>
                                        <a href="{{url('admin/edit-leave', ['id' => $leave->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{url('admin/delete-leave', ['id' => $leave->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{$leaves->links()}}
                </div>
           </div>
        </div>
    </div>
@endsection