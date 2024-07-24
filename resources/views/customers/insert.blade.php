<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action= "{{ route('store')}}" method="post">
        @csrf
        @error('name')
        {{$message}}
        @enderror
        <label>Customer name:</label>

<input type="text" name="name"><br><br>
@csrf
        @error('email')
        {{$message}}
        @enderror
<label>Customer Email:</label>
<input type="text" name="email"><br><br>
<input type="submit" >

    </form>
</body>
</html>