<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Create New Player</h1>
  <form action="/players/store" method="POST">
    @csrf
    <span>Name</span>
    <input type="text" name="name"></input>

    </br></br>
    <span>Age</span>
    <input type="number" name="age"></input>

    </br></br>
    <span>Height</span>
    <input type="number" name="height"></input>

    <br><br>

    <span>Club</span>
    <input type="text" name="club"></input>
    <br><br>

    <span>Salary</span>
    <input type="number" name="salary"></input>
    <br><br>

    <span>Gender</span>
    <select name="gender">
      <option value="L">L</option>
      <option value="P">P</option>
    </select>

    </br></br>

    <span>Status</span>
    <select name="gender">
      <option value="0">Inactive</option>
      <option value="1">Active</option>
    </select>

    </br></br>

    <span>Position</span>
    <select name="position">
      <option value="GK">GK</option>
      <option value="CB">CB</option>
      <option value="LB">LB</option>
      <option value="RB">RB</option>
      <option value="DMF">DMF</option>
      <option value="CMF">CMF</option>
      <option value="AMF">AMF</option>
      <option value="LMF">LMF</option>
      <option value="RMF">RMF</option>
      <option value="SS">SS</option>
      <option value="CF">CF</option>
    </select>

    </br></br>

    <span>Country</span>
    <input type="text" name="country"></input>

    </br></br>

    <span>Photo</span>
    <input type="file" name="photo"></input>

    </br></br>

    <button type="submit">Add</button>
  </form>
</body>
</html>