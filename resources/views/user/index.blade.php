<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <a href="/user/create"><button>Add</button></a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($getData as $user)
            <tr> 
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="/user/{{$user->id}}/edit">Edit</a>&ensp;
                    <form method="POST" action="/user/{{$user->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>  
            @endforeach
        </tbody>
    </table>
</body>
</html>