<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All users list</h1>
                <table class="table table-bordered table-striped">
                    @foreach ($data as $id => $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->age}} </td>
                            <td><a href="{{ route('view.user', $user->id)}}" class="btn btn-primary btn-sm">view</a></td>
                            <td><a href="{{ route('delete.user', $user->id)}}" class="btn btn-danger btn-sm">delete</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

</body>
</html>
