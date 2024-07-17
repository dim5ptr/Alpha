

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Profile</h1>
                </div>
                <div class="card-body">
                    @if (Route::currentRouteName() == 'profile' && isset($user))
                    <div class="text-center mb-4">
                        @if ($user->profile_photo)
                        <img src="{{ asset('storage/' . $user->profile_photo) }}" class="img-fluid rounded-circle" style="max-width: 150px;" alt="Profile Photo">
                        @else
                        <img src="{{ asset('path/to/default/photo.jpg') }}" class="img-fluid rounded-circle" style="max-width: 150px;" alt="Default Photo">
                        @endif
                    </div>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</li>
                        <!-- Add more details as needed -->
                    </ul>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="profile_photo">Profile Photo</label>
                            <input type="file" class="form-control-file" id="profile_photo" name="profile_photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
