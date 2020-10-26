<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ciao</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>lastname</th>
                <th>gender</th>
                <th>date of birth</th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->date_of_birth}}</td>
            </tr>
        @endforeach
    </table>
  </body>
</html>
