<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
</head>
<body>
  <h1>Edit Player</h1>
  <form action="{{ url('/players/update', $player->id) }}" method="POST">
    @csrf
    <span>Name</span>
    <input type="text" name="name" value="{{ $player->name ?? ''}}"></input>

    </br></br>
    <span>Age</span>
    <input type="number" name="age" value="{{ $player->age ?? ''}}"></input>

    </br></br>
    <span>Height</span>
    <input type="number" name="height" value="{{ $player->height ?? ''}}"></input>

    </br></br>

    <span>Club</span>
    <input type="text" name="club" value="{{ $player->club ?? ''}}"></input>
    <br><br>

    <span>Salary</span>
    <input type="number" name="salary" value="{{ $player->salary ?? ''}}"></input>
    <br><br>

    <span>Gender</span>
    <select name="gender" value="{{ $player->gender }}">
      <option value="L" {{ $player->gender === 'L'? 'selected': '' }}>Laki-Laki</option>
      <option value="P" {{ $player->gender === 'P'? 'selected': '' }}>Perempuan</option>
    </select>

    </br></br>

    <span>Status</span>
    <select name="status" value="{{  $player->status }}">
      <option value="0" {{ $player->status === '0'? 'selected': '' }}>Inactive</option>
      <option value="1" {{ $player->status === '1'? 'selected': '' }}>Active</option>
    </select>

    </br></br>

    <span>Position</span>
    <select name="position" value="{{ $player->position }}">
      <option value="GK" {{ $player->position === 'GK'? 'selected': '' }}>GK</option>
      <option value="CB" {{ $player->position === 'CB'? 'selected': '' }}>CB</option>
      <option value="LB" {{ $player->position === 'LB'? 'selected': '' }}>LB</option>
      <option value="RB" {{ $player->position === 'RB'? 'selected': '' }}>RB</option>
      <option value="DMF" {{ $player->position === 'DMF'? 'selected': '' }}>DMF</option>
      <option value="CMF" {{ $player->position === 'CMF'? 'selected': '' }}>CMF</option>
      <option value="AMF" {{ $player->position === 'AMF'? 'selected': '' }}>AMF</option>
      <option value="LMF" {{ $player->position === 'LMF'? 'selected': '' }}>LMF</option>
      <option value="RMF" {{ $player->position === 'RMF'? 'selected': '' }}>RMF</option>
      <option value="SS" {{ $player->position === 'SS'? 'selected': '' }}>SS</option>
      <option value="CF" {{ $player->position === 'CF'? 'selected': '' }}>CF</option>
    </select>

    </br></br>

    <span>Country</span>
    <input type="text" name="country" value="{{ $player->country }}"></input>

    </br></br>

    <span>Photo</span>
    <input type="file" name="photo" value="{{ $player->photo }}"></input>

    </br></br>

    <button type="submit">Edit</button>
  </form>
</body>
</html>