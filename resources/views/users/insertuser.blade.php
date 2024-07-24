<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
<form action= "{{ route('store')}}" method="post">
        @csrf
        <label>User name:</label>

<input type="text" name="name"><br><br>
<label>User Email:</label>
<input type="text" name="email"><br><br>
<input type="submit" >

    </form>
</body>
</html>