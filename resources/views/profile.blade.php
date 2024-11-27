@extends('layout.base')

@section('content')
    <div class="container my-4">
        <!-- Profile Header -->
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6">
                <!-- Logo (User Profile Picture) -->
                <img src="path/to/user-logo.jpg" alt="User Logo" class="rounded-circle img-fluid border border-light shadow">
            </div>
            <div class="col-lg-8 col-md-6">
                <h3 class="mb-1">John Doe</h3>
                <p class="text-muted">Professional Photographer & Videographer</p>
                <!-- Rating -->
                <div class="rating mb-2">
                    <span class="text-warning">★★★★☆</span> <span>(4.5 / 5)</span>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mb-4">
            <h5 class="mb-3">Skills</h5>
            <div class="d-flex flex-wrap">
                <span class="badge bg-primary me-2 mb-2">Photography</span>
                <span class="badge bg-primary me-2 mb-2">Videography</span>
                <span class="badge bg-primary me-2 mb-2">Editing</span>
                <span class="badge bg-primary me-2 mb-2">Lighting Setup</span>
            </div>
        </div>

        <!-- Activity Section -->
        <div class="mb-4">
            <h5 class="mb-3">Activity & Portfolio</h5>
            <div class="row">
                <div class="col-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="path/to/activity-image1.jpg" alt="Activity Image 1" class="card-img-top rounded">
                        <div class="card-body text-center">
                            <p class="small mb-0">Wedding Photography</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="path/to/activity-image2.jpg" alt="Activity Image 2" class="card-img-top rounded">
                        <div class="card-body text-center">
                            <p class="small mb-0">Event Videography</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="path/to/activity-image3.jpg" alt="Activity Image 3" class="card-img-top rounded">
                        <div class="card-body text-center">
                            <p class="small mb-0">Portrait Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div>
            <h5 class="mb-3">Pricing</h5>
            <div class="list-group">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Basic Session</span>
                    <span class="badge bg-success">$100</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Standard Package</span>
                    <span class="badge bg-success">$250</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Premium Experience</span>
                    <span class="badge bg-success">$500</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        .rating span {
            font-size: 1.25rem;
        }

        .badge.bg-primary {
            background-color: #007bff;
        }

        .badge.bg-success {
            font-size: 1rem;
            padding: 0.5em 0.75em;
        }
    </style>
@endsection
