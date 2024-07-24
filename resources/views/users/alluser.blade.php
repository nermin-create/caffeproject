<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User data</title>
</head>
<body>
    <table>
        
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Update</th>
        <th>Show</th>
        <th>Delete</th>
        </tr>
        @foreach ($users as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td><a href="/edituser/{{$row->id}}">update</a></td>
            <td><a href="/showuser {{$row->id}}">show</a></td>
            <td>
             <form action="{{route('deleteuser')}}" method='post'>
              @csrf
              @method('DELETE')
              <input type="hidden" name="id" value="{{$row->id}}">
              <input type="submit"value="Delete">

             </form>

            </td>
           
        </tr>
        @endforeach

    </table>
    <form action="{{route('showdeleted')}}"method='get'>
         @csrf
         <input type="submit" value="Show deleted user">
        </form>


</body>
</html>