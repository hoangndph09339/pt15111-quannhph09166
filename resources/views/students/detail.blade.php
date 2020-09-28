<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->phone_number}}</td>
                    <td>
                        @if($student->gender == 0)
                        Buê Đuê
                        @elseif($student->gender == 1)
                        Nam
                        @elseif($student->gender == 2)
                        Nữ
                        @endif
                    </td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->is_active === 0 ? 'Không' : 'Có'}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
