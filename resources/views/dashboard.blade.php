@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4 text-primary font-weight-bold">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard Overview</li>
        </ol>
        <div class="row">
            <!-- Stock Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4 shadow-lg rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Stock</h5>
                        <i class="fas fa-boxes fa-2x"></i>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('all.product') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Sold Products Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4 shadow-lg rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Sold Products</h5>
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('sold.products') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Available Products Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4 shadow-lg rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Available Products</h5>
                        <i class="fas fa-warehouse fa-2x"></i>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('available.products') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <!-- Pending Orders Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4 shadow-lg rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pending Orders</h5>
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('pending.orders') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Custom CSS for enhanced styles -->
<style>
    /* Dashboard Title */
    h1 {
        font-size: 2.5rem;
    }

    /* Card Styling */
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-body h5 {
        font-size: 1.2rem;
        font-weight: 600;
    }

    /* Icon Styling */
    .card-body i {
        color: rgba(255, 255, 255, 0.8);
    }

    /* Footer Link */
    .stretched-link {
        font-weight: bold;
        text-decoration: underline;
    }

    /* Breadcrumb */
    .breadcrumb-item.active {
        font-weight: bold;
    }
</style>

@endsection
