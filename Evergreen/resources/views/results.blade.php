<h2>Users</h2>
<div class="row row-cols-1 row-cols-md-3">
    @foreach($users as $user)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Name: {{$user->name}}</h5>
                    <p class="card-text">Position: {{$user->position}}</p>
                    <p class="card-text">Gender: {{$user->gender}}</p>
                    <p class="card-text">Age: {{$user->age}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
