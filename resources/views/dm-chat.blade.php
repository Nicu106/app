@extends('layout.base')

@section('content')
    <div class="container my-4">
        <a href="{{route('chat')}}"><h3 class="mb-4">#Chat</h3></a>
        <div class="row">
            <div class="col-md-8">
                <!-- Chat Area -->
                <div class="chat-box border rounded p-3">
                    <div class="chat-header mb-3">
                        <h5>Alice Johnson</h5>
                    </div>
                    <div class="chat-messages mb-3" style="height: 400px; overflow-y: auto;">
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/contact1.jpg" alt="Contact 1" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-light rounded p-2">
                                    <p class="mb-1"><strong>Alice Johnson</strong></p>
                                    <p class="mb-0">Hey! Are we still on for tomorrow?</p>
                                </div>
                            </div>
                        </div>
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/user-logo.jpg" alt="User" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-primary text-white rounded p-2">
                                    <p class="mb-1"><strong>You</strong></p>
                                    <p class="mb-0">Yes, what time do you prefer?</p>
                                </div>
                            </div>
                        </div>
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/user-logo.jpg" alt="User" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-primary text-white rounded p-2">
                                    <p class="mb-1"><strong>You</strong></p>
                                    <p class="mb-0">Yes, what time do you prefer?</p>
                                </div>
                            </div>
                        </div>
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/user-logo.jpg" alt="User" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-primary text-white rounded p-2">
                                    <p class="mb-1"><strong>You</strong></p>
                                    <p class="mb-0">Yes, what time do you prefer?</p>
                                </div>
                            </div>
                        </div>
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/user-logo.jpg" alt="User" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-primary text-white rounded p-2">
                                    <p class="mb-1"><strong>You</strong></p>
                                    <p class="mb-0">Yes, what time do you prefer?</p>
                                </div>
                            </div>
                        </div>
                        <div class="message mb-2">
                            <div class="d-flex align-items-start">
                                <img src="path/to/contact1.jpg" alt="Contact 1" class="rounded-circle me-2" width="40" height="40">
                                <div class="bg-light rounded p-2">
                                    <p class="mb-1"><strong>Alice Johnson</strong></p>
                                    <p class="mb-0">Let’s say 3 PM?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Message Input -->
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Type a message..." aria-label="Type a message">
                        <button class="btn btn-primary" type="button">Send</button>
                    </div>
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
