@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard Header -->
            <div class="col-12 mb-4">
                <h1 class="text-center">Admin Dashboard : </h1>
            </div>

            <!-- Metrics Section -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Total Users : </h5>
                        <p class="card-text">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Total Sales : </h5>
                        <p class="card-text">${{ $totalSales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Pending Orders : </h5>
                        <p class="card-text">{{ $pendingOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Support Tickets : </h5>
                        <p class="card-text">{{ $supportTickets }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">User John Doe placed an order.</li>
                            <li class="list-group-item">Product XYZ was added to the inventory.</li>
                            <li class="list-group-item">Support ticket #123 was resolved.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Dashboard
@endsection

@section('title_page')
    Admin Dashboard
@endsection

@section('css')
    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
    </style>
@endsection

@section('js')
    <script>
        console.log('Dashboard loaded successfully.');
    </script>
@endsection
