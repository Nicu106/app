<!-- resources/view/components/instagram-post.blade.php -->

<div class="d-flex justify-content-center my-5">
    <div class="card" style="width: 95%; max-width: 400px;">

        <!-- Post Header: User Profile -->
        <div class="card-header d-flex align-items-center">
            <img src="{{ $profilePic }}" alt="Profile Picture" class="rounded-circle" width="40" height="40">
            <h5 class="ms-2 mb-0">{{ $username }}</h5>
        </div>

        <!-- Post Image -->
        <img src="{{ $postImage }}" class="card-img-top" alt="Post Image">

        <!-- Post Actions and Description -->
        <div class="card-body">
            <!-- Action icons (like, comment, share) -->
            <div class="d-flex justify-content-start mb-2">
                <a href="#" class="me-3"><i class="bi bi-heart fs-4"></i></a> <!-- Like Icon -->
                <a href="#" class="me-3"><i class="bi bi-chat fs-4"></i></a> <!-- Comment Icon -->
                <a href="#"><i class="bi bi-send fs-4"></i></a> <!-- Share Icon -->
            </div>

            <!-- Like Count and Post Description -->
            <p><strong>{{ $likes }} likes</strong></p>
            <p><strong>{{ $username }}</strong> {{ $description }}</p>
        </div>

    </div>
</div>
