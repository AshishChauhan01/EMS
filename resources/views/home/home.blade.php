@extends('layout')
@php
$hideHeaderFooter = true;
@endphp
@section('title', 'Employee Manegement System')
@section('content-section')
        <div class="home-page section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="home-image">
                            <img src="{{ asset('front-end/images/home_img.png')}}" alt="home-banner">
                        </div>
                        <h1 class="text-danger text-center mt-4 mb-0"><img src="{{asset('front-end/images/smile_emojji.png')}}" alt="smile-emojji">Employee Management System</h1>
                        <p class="text-center">© {{date('Y')}}. Developed by Ashish Chauhan.</p>
                        <div class="text-center">
                            <a href="{{ route('employeeLogin') }}" class="btn btn-info mx-1 text-white">Employee</a>
                            <a href="{{ route('adminLogin')}}" class="btn main-btn mx-1 text-white">Admin</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@endsection