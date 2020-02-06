<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <h2 style="text-align: center;">Users</h2>

    <br><div class="mx-sm-5"><a href="{{route('users.create')}}" class="btn btn-primary">Add</a></div> <br>

    @foreach ($users as $user)
    <div class="card" style="width: 26rem; display: inline-block; text-align:center; left:40px;">
        <div class="card-header">
            {{$user->name}}
        </div>
        <div class="card-body">
            <strong>Role: </strong>{{$user->role}} <br>
            <strong>E-mail: </strong>{{$user->email}} <br>
            <a href="{{route('users.show', $user->id)}}" class="btn btn-light">Show</a>
            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display: inline-block;">{{ method_field('DELETE') }}{{ csrf_field() }}<button type="submit" class="btn btn-danger">Delete</button></form>
        </div>
    </div>
    @endforeach

</body>
</html>
