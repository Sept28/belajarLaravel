<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  
</br>


<div class="container-fluid p-0">
  <div class="row">
    <div class="col-10 m-auto">
      <div class="mx-5">
        <center> <h1> Players Table </h1> </center>
        <a href="/players/create" class="btn btn-primary">Create New</a>
        <table class="table table-hover table-bordered border-success mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Height</th>
              <th scope="col">Club</th>
              <th scope="col">Salary</th>
              <th scope="col">Gender</th>
              <th scope="col">Status</th>
              <th scope="col">Position</th>
              <th scope="col">Country</th>
              <th scope="col">Photo</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          
          <tbody>
            @php
              $no = 1;
            @endphp

            @foreach ($players as $data )
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->age }}</td>
              <td>{{ $data->height }}</td>
              <td>{{ $data->club }}</td>
              <td>{{ $data->salary }}</td>
              <td>{{ $data->gender }}</td>
              <td>{{ $data->status }}</td>
              <td>{{ $data->position }}</td>
              <td>{{ $data->country }}</td>
              <td>{{ $data->photo }}</td>
              <td>
                <a href="{{ url('/players/edit', $data->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('/players/delete', $data->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <br>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>