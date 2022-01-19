@extends('layouts.app')

@section('content')
    <div class = "container">
        <div class ="row justify-content-center">
            <div class ="col-md-4">
                <div class="list-group ">
                    <a href ="/management/category" class="list-group-item list-group-item-action"><i class="fas fa-bars"></i> Category</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-mug-hot"></i> Menu</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-chair"></i> Table</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-user-edit"></i> User</a>
                </div>
            </div>
            <div class = "col-md-8"></div>
        </div>
    </div>
@endsection

