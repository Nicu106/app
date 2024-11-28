<!-- resources/view/components/instagram-post.blade.php -->
<link rel="stylesheet" href="{{ asset('style/home.css') }}">

<div class="d-flex justify-content-center my-3">
    <div class="custom-card">

        <!-- Post Header: User Profile -->
        <div class="card-header">
            <img src="{{ $profilePic }}" alt="Profile Picture" class="card-profile-image" width="40" height="40" style="object-fit: cover;">
            <p>{{ $username }}</p>
        </div>

        <!-- Post Image -->
        <div class="card-image">
            <img src="{{ $postImage }}" class="card-img-top" alt="Post Image">
        </div>

        <!-- Post Actions and Description -->
        <div class="card-bottom">
            <div class="card-actions">
                <!-- Action icons (like, comment, share) -->
                <div class="d-flex justify-content-start">
                    <a href="#" class="me-3 like-icon"><i class="bi bi-heart fs-4"></i></a> <!-- Like Icon -->
                    <a href="#" class="me-3"><i class="bi bi-chat fs-4"></i></a> <!-- Comment Icon -->
                    <a href="#" class="send-icon"><i class="bi bi-send fs-4"></i></a> <!-- Share Icon -->
                </div>

                <div class="price-tag"><strong>{{ $price }}</strong></div>
            </div>

            <!-- Like Count and Post Description -->
            <p class="card-likes">{{ $likes }} aprecieri</p>
            <p class="card-description"><strong>{{ $username }}:</strong> {{ $description }}</p>
        </div>

    </div>
</div>
