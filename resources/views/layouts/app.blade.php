<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Latihan</title>
</head>
<body>
{{-- Navbar --}}
@include('layouts.navbar')

{{-- Sidebar --}}
@include('layouts.sidebar')

<!-- Page Content -->
<div style="margin-left:25%">

  <div class="w3-container w3-teal">
    @yield('title')
  </div>

  <img src="https://www.w3schools.com/w3css/img_car.jpg" alt="Car" style="width:100%">

  <div class="w3-container">
    @yield('subtitle')
    <p>The sidebar with is set with "style="width:25%".</p>
    <p>The left margin of the page content is set to the same value.</p>
  </div>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>