@php
$page = 'dashboard';
@endphp
@extends('employee.layout')
@section('title', 'EMS - Dashboard')
@section('page-title')
    <div class="title-section">
        <h3><span><i class="fa-solid fa-gauge-high"></i>&nbsp;</span>Dashboard</h3>
        <p><span><i class="fa-solid fa-house"></i></span> / <span class="text">Dashboard</span></p>
    </div>
@endsection

@section('main-content')
       <div class="features-list">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Registered Employees</p>
                                    <span>2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="list-item bg-warning">
                                <div class="icon">
                                    <i class="fa-solid fa-copy"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Listed Departments</p>
                                    <span>4</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="list-item bg-danger">
                                <div class="icon">
                                    <i class="fa-solid fa-thumbtack"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Listed Leave Type</p>
                                    <span>2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-title">
                <h3>Leaves Details</h3>
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-item bg-info">
                                <div class="icon">
                                    <i class="fa-solid fa-file-signature"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Leave Applied</p>
                                    <span>2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-item bg-warning">
                                <div class="icon">
                                    <i class="fa-solid fa-hourglass-half"></i>
                                </div>
                                <div class="list-deails">
                                    <p>New Leave Requests</p>
                                    <span>6</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-item bg-danger">
                                <div class="icon">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Rejected Leave Requests</p>
                                    <span>3</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="list-item bg-success">
                                <div class="icon">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <div class="list-deails">
                                    <p>Approved Leave Requests</p>
                                    <span>1</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
       </div>
@endsection