@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome!</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">
                        <div class = "col-sm-3">
                            <a href ="/management">
                                <h4>Management</h4>
                                <img width ="50px" src = "{{asset('images/management.png')}}"/>
                            </a>
                            </div>

                        <div class = "col-sm-3">
                            <a href ="/order">
                                <h4>Orders</h4>
                                <img width ="50px" src = "{{asset('images/order.png')}}"/>
                            </a>
                        </div>

                        <div class = "col-sm-3">
                            <a href ="/menu">
                                <h4>Menu</h4>
                                <img width ="50px" src = "{{asset('images/menu.png')}}"/>
                            </a>
                        </div>
            
                        <div class = "col-sm-3">
                            <a href ="/report">
                                <h4>Report</h4>
                                <img width ="50px" src = "{{asset('images/monitor.png')}}"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
