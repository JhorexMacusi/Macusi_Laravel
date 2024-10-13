<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists of Students</title>
</head>
<body>
    <h1>Students</h1>
    <div>
        <table border ="1">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Number</th>
                <th>Email</th>
                </tr>
                @foreach($students as $student)

                <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->number}}</td>
                <td>{{$student->email}}</td>
                </tr>
                @endforeach
        </table>
    </div>
</body>
</html>