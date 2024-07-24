<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All data</title>
</head>
<body>
    <table>
        
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Update</th>
        <th>Show</th>
        </tr>
        @foreach ($customers as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td><a href="/editcust/{{$row->id}}">update</a></td>
            <td><a href="/showcust{{$row->id}}">Show</a> </td>
            <td>
<form action="{{route('deletecust')}}" method='post'>
@csrf
@method('DELETE')
<input type="hidden" name="id" value="{{$row->id}}">
<input type="submit"  value="Delete">


</form>

            </td>
           
        </tr>
        @endforeach





    </table>
    <form action=" {{route ('showdeleted') }}"method='get'>
    <input type="submit"value="show deleted data">
</form>
</body>
</html>