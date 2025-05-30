@php
$page = 'leave';
@endphp

@extends('admin.layout')

@section('title', 'EMS - Leave')

@section('main-content')
    <div class="add-leave">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="data-section">
                        <h4>Add Leave Type</h4>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! session('success') !!}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @else
                        @endif
                        <form action="{{url('admin/save-leave')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="leave_type" class="form-label">Leave Type</label>
                                <input type="text" name="leave_type" placeholder="Enter Leave Type" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-sm btn-success">Add Leave</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection