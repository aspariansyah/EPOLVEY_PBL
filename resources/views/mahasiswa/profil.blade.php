@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        /* Minimal custom CSS yang tidak tersedia di Bootstrap */
        .bg-dark-custom {
            background-color: #2d2d2d;
        }
    </style>
</head>
<body class="bg-light min-vh-100 d-flex align-items-center py-5">
    <div class="container">
        <div class="card bg-dark-custom text-white mx-auto" style="max-width: 500px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div class="d-flex align-items-center">
                        <div class="position-relative">
                            <img src="/api/placeholder/120/120" alt="Profile" 
                                 class="rounded-circle border border-3 border-success" 
                                 style="width: 120px; height: 120px; object-fit: cover;">
                            <span class="position-absolute bottom-0 end-0 bg-success rounded-circle p-2">
                                <i class="fas fa-check text-white"></i>
                            </span>
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm">
                        <i class="fas fa-edit"></i> EDIT
                    </button>
                </div>

                <h4 class="mb-1">John Doe</h4>
                <p class="text-muted small mb-4">Lagos, Nigeria</p>

                <div class="mb-4 text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-secondary"></i>
                </div>

                <div class="info-section">
                    <div class="mb-3">
                        <div class="text-muted small">Email</div>
                        <div>johndoe@gmail.com</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">City</div>
                        <div>Ikoyi</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">State</div>
                        <div>Lagos</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Country</div>
                        <div>Nigeria</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Phone</div>
                        <div>(+234)802-446-8361</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
