@php
$page = 'employee'
@endphp

@extends('admin.layout')

@section('title', 'EMS - Employee')

@section('main-content')
    <div class="container">
        <div class="data-section">
            <h4>Add Employee</h4>
            <form action="#">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="Enter Employee First Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Enter Employee Last Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName" class="form-label">Department</label>
                            <select name="department" id="" class="form-control">
                                <option value="" disabled selected class="d-none">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->department_name}}">{{$department->department_name}}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Employee Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobileNumber" class="form-label">Mobile No</label>
                            <input type="text" name="mobileNumber" class="form-control" placeholder="Enter Employee Contact Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select name="country" id="" class="form-control">
                                <option value="" disabled selected>Select Employee Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select name="state" id="" class="form-control">
                                <option value="" disabled selected>Select Employee State</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="" class="form-control">
                                <option value="" disabled selected>Select Employee City</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dateOfBirth" class="form-label">Date of birth</label>
                            <input type="date" name="dateOfBirth" class="form-control" placeholder="Enter Employee Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dateOfJoining" class="form-label">Date of joining</label>
                            <input type="date" name="dateOfJoining" class="form-control" placeholder="Enter Employee Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="photo" class="form-label">Employee Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" class="form-label">Employee Address</label>
                           <textarea name="address" id="" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="confirmPassword" class="form-label">Password</label>
                            <input type="password" name="confirmPassword" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                     <button type="submit" class="btn btn-success btn-md">Save Employee Details</button>
                    </div>
                </div> 
            </form>
        </div>    
    </div>
@endsection 