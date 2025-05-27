@extends('layout')
@php
    $hideHeaderFooter = true;
@endphp
@section('title', 'Employee - Login')
@section('content-section')
    <div class="login screen-partition">
        <div class="container">
            <div class="login-section">
                <h2>Employee Management System</h2>
                <div class="login-screen">
                    <h4><i class="fa-solid fa-user-tie me-3"></i>Sign In | Admin</h4>
                    <form action="#">
                        <div class="form-group mt-3">
                            <label for="username" class="form-label">USERNAME</label>
                            <input type="text" name="username" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">PASSWORD</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mt-1">
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn main-btn w-100 mb-2">SIGN IN</button>
                            <a href="{{url('/')}}" class="btn btn-info text-white w-100">Home Page</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection