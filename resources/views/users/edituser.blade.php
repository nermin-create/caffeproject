<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<form action= "{{ route('updateuser',[$users->id])}}" method="post">
        @csrf
        @method('put')
        <label>User name:</label>

<input type="text" name="name" value="{{$users->name}}"><br><br>
<label>User Email:</label>
<input type="text" name="email" value="{{$users->email}}"><br><br>
<input type="submit" value="Update User" >

    </form>
</body>
</html>