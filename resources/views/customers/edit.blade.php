<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<form action= "{{ route('updatecust',[$customer->id])}}" method="post">
        @csrf
        @method('put')
        <label>Customer name:</label>

<input type="text" name="name" value="{{$customer->name}}"><br><br>
<label>Customer Email:</label>
<input type="text" name="email" value="{{$customer->email}}"><br><br>
<input type="submit" value="Update" >

    </form>
</body>
</html>