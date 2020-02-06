<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <h2 style="text-align: center;">Update User</h2>

    <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="mx-sm-4">
            <label for="name">Name </label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}"> <br> <br>
        </div>
        <div class="mx-sm-4">
            <label for="role">Role </label>
            <input type="text" class="form-control" name="role" value="{{$user->role}}"> <br> <br>
        </div>
        <div class="mx-sm-4">
            <label for="email">E-mail </label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}"> <br> <br>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>

    <br><a href="{{route('users.index')}}" class="btn btn-dark">Back</a>

</body>
</html>
