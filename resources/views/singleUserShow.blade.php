<h1>User detail</h1>
@foreach ($data as $id => $user)
    <h3>ID: {{$user->id}}</h3>
    <h3>Name: {{$user->name}}</h3>
    <h3>Email: {{$user->email}}</h3>
    <h3>Age: {{$user->age}}</h3>
@endforeach