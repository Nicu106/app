@extends('layout.base')

@section('content')
    <div class="container my-4">
        <h3 class="mb-4">Chat</h3>
        <div class="row">
            <div class="col-md-4">
                <!-- Contacts List -->
                <div class="list-group">
                    <h5 class="mb-3">Contacts</h5>
                    <a href="{{route('dm-chat')}}" class="list-group-item list-group-item-action flex-row align-items-center">
                        <img src="path/to/contact1.jpg" alt="Contact 1" class="rounded-circle me-3" width="50" height="50">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h6 class="mb-1">Alice Johnson</h6>
                                <p class="mb-1 text-muted">Hey! Are we still on for tomorrow?</p>
                            </div>
                            <small class="text-muted">10:15 AM</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-row align-items-center">
                        <img src="path/to/contact2.jpg" alt="Contact 2" class="rounded-circle me-3" width="50" height="50">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h6 class="mb-1">Bob Smith</h6>
                                <p class="mb-1 text-muted">Can you send me the files?</p>
                            </div>
                            <small class="text-muted">Yesterday</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-row align-items-center">
                        <img src="path/to/contact3.jpg" alt="Contact 3" class="rounded-circle me-3" width="50" height="50">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h6 class="mb-1">Charlie Brown</h6>
                                <p class="mb-1 text-muted">Great job on the project!</p>
                            </div>
                            <small class="text-muted">2 days ago</small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-row align-items-center">
                        <img src="path/to/contact4.jpg" alt="Contact 4" class="rounded-circle me-3" width="50" height="50">
                        <div class="d-flex w-100 justify-content-between">
                            <div>
                                <h6 class="mb-1">Daisy White</h6>
                                <p class="mb-1 text-muted">Let’s catch up soon!</p>
                            </div>
                            <small class="text-muted">5 days ago</small>
                        </div>
                    </a>
                    <!-- Add more contacts as needed -->
                </div>
            </div>


        </div>
    </div>

    <style>
        .chat-box {
            background-color: #f8f9fa;
            height: 100%;
        }

        .chat-header {
            border-bottom: 1px solid #dee2e6;
        }

        .message {
            margin-bottom: 1rem;
        }

        .message .bg-light {
            background-color: #f8f9fa !important;
        }

        .message .bg-primary {
            background-color: #007bff !important;
        }
    </style>
@endsection
