@php
$hideHeaderFooter = true;
$main_pannel = true;
@endphp
@extends('layout')

@section('title', 'EMS - Employee')
@section('content-section')
    <div class="main-pannel">
        <div class="side-bar left-side-section">
            <div class="logo-div">
                <h2 class="logo-text">EMS - Employee</h2>
            </div>
           <div class="side-menu">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-gauge-high"></i>Dashboard</a></li> 
                    <li class="has-child active"><a href="#"><i class="fa-solid fa-building"></i>Department</a>
                       <ul>
                            <li><a href="#">Department 1</a></li>
                            <li><a href="#">Department 2</a></li>
                       </ul>
                    </li>  
                    <li class="has-child"><a href="#"><i class="fa-solid fa-file-lines"></i>Leave Type</a></li>
                    <li class="has-child"><a href="#"><i class="fa-regular fa-circle-user"></i>Employee</a></li>   
                    <li class="has-child"><a href="#"><i class="fa-solid fa-indian-rupee-sign"></i>Salary</a></li>
                    <li class="has-child"><a href="#"><i class="fa-solid fa-hand"></i>Leave Requests</a></li>   
                    <li class="has-child"><a href="#"><i class="fa-solid fa-flag"></i>Report</a></li>     
                </ul>
           </div>
        </div>
        <div class="main-content-right right-side-section ">
            <div class="upper-header">
                <div class="toggle-menu"><i class="fa-solid fa-bars"></i></div>
                <div class="user-detail">
                    <i class="fa-solid fa-user me-2 fs-16"></i>
                    <span>Welcome Back :</span>&nbsp;<span>Admin</span>
                </div>
            </div>
        </div>
    </div>
@endsection