@extends('layout.base')

@section('content')
    <div class="container my-4">
        <!-- Profile Header -->
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6">
                <!-- Logo (User Profile Picture) -->
                <img src="profile-img/nicu.png" alt="User Logo" class="rounded-circle img-fluid border border-light shadow">
            </div>
            <div class="col-lg-8 col-md-6">
                <h3 class="mb-1">Cociorva Nicolae</h3>
                <p class="text-muted">Developer</p>
                <!-- Rating -->
                <div class="rating mb-2">
                    <span class="text-warning">★★★★★</span> <span>(5 / 5)</span>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mb-4">
            <h5 class="mb-3">Skills</h5>
            <div class="d-flex flex-wrap">
                <span class="badge bg-primary me-2 mb-2">#It</span>
                <span class="badge bg-primary me-2 mb-2">#stat-up</span>
                <span class="badge bg-primary me-2 mb-2">#Leader</span>
                <span class="badge bg-primary me-2 mb-2">#antreprenor</span>
            </div>
        </div>

        <!-- Activity Section -->
        <div class="mb-4">
            <h5 class="mb-3">Activity & Portfolio</h5>
            <div class="row">
                <div class="col-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="user_pictures/1.jpeg" alt="Activity Image 1" class="card-img-top rounded">
                        <div class="card-body text-center">
                            <p class="small mb-0">#Univerity</p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-6 col-md-4 mb-3">--}}
{{--                    <div class="card">--}}
{{--                        <img src="user_pictures/2.jpeg" alt="Activity Image 2" class="card-img-top rounded">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <p class="small mb-0">#Love</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="user_pictures/3.jpeg" alt="Activity Image 3" class="card-img-top rounded">
                        <div class="card-body text-center">
                            <p class="small mb-0">#Sisters</p>
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
                    <span>Ora de lucru (Coding)</span>
                    <span class="badge bg-success">$10</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Mentorat</span>
                    <span class="badge bg-success">15$ - orǎ</span>
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
