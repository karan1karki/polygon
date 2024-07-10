@extends('backend.admin-master')
@section('site-title')
    {{__('Dashboard')}}
@endsection
@section('content')

    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3 mt-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.new.user')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_admin}}</span>
                                    <h4 class="title">{{__('Total Admin')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.blog.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-layout-width-default"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$blog_count}}</span>
                                    <h4 class="title">{{__('Total Blogs')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty(get_static_option('job_module_status')))
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.jobs.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-briefcase"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_jobs}}</span>
                                    <h4 class="title">{{__('Total Jobs')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(!empty(get_static_option('events_module_status')))
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.events.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-calendar"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_events}}</span>
                                    <h4 class="title">{{__('Total Events')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 mt-md-5 mb-3">
                            <div class="card">
                                <div class="dsh-box-style">
                                    <a href="{{route('admin.event.attendance.logs')}}" class="add-new"><i class="ti-eye"></i></a>
                                    <div class="icon">
                                        <i class="ti-ticket"></i>
                                    </div>
                                    <div class="content">
                                        <span class="total">{{$total_event_attendance}}</span>
                                        <h4 class="title">{{__('Total Events Attendance')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(!empty(get_static_option('donations_module_status')))
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.donations.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-face-sad"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_donations}}</span>
                                    <h4 class="title">{{__('Total Donations Cause')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 mt-md-5 mb-3">
                            <div class="card">
                                <div class="dsh-box-style">
                                    <a href="{{route('admin.donations.payment.logs')}}" class="add-new"><i class="ti-eye"></i></a>
                                    <div class="icon">
                                        <i class="ti-money"></i>
                                    </div>
                                    <div class="content">
                                        <span class="total">{{$total_donated_log}}</span>
                                        <h4 class="title">{{__('Total Donated')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(!empty(get_static_option('product_module_status')))
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.products.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-package"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_products}}</span>
                                    <h4 class="title">{{__('Total Products')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.products.order.logs')}}" class="add-new"><i class="ti-eye"></i></a>
                                <div class="icon">
                                    <i class="ti-shopping-cart"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_product_order}}</span>
                                    <h4 class="title">{{__('Total Products Order')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.services.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-blackboard"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_services}}</span>
                                    <h4 class="title">{{__('Total Courses')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card">
                            <div class="dsh-box-style">
                                <a href="{{route('admin.work.new')}}" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-write"></i>
                                </div>
                                <div class="content">
                                    <span class="total">{{$total_works}}</span>
                                    <h4 class="title">{{__('Total Activities')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
