<!doctype html>
<html lang="en">
  <head>
    <title>All Customer Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
            <thead>
                <th>All Customer Table</th>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id}}</td>
                    <td>{{ $customer->name}}</td>
                    <td>{{ $customer->age}}</td>
                    <td>{{ $customer->email}}</td>
                    {{-- <td><a href="{{ route('view.user', $user->id)}}" class="btn btn-primary btn-sm">view</a></td> --}}
                    <td><a href="{{ route('delete.customer', $customer->id)}}" class="btn btn-danger btn-sm">delete</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </body>
</html>