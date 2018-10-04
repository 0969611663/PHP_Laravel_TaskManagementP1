<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="{{ url('/library') }}">
    <div class="col-md-12">
        <!--        list-->
        <h2 style="color: chocolate">STUDENT</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Sex</th>
                <th>Birthday</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->sex }}</td>
                    <td>{{ $student->birthday }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <input type="submit" class="btn btn-info" value="BACK">
    </div>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
