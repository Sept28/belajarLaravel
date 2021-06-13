@php

  $isEdit = isset($player);
  $title = $isEdit ? 'Edit' : 'Create Player';
  $route = $isEdit ? route('player.update', $player->id) : '/players/store';

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
</head>
<body>
  <h1>{{ $title }}</h1>
  <form action="{{ $route }}" method="POST">
    @csrf
    <span>Name</span>
    <input type="text" name="name" value="{{ isset($player->name) ? $player->name : ''}}"></input>

    </br></br>
    <span>Age</span>
    <input type="number" name="age" value="{{ isset($player->age) ? $player->age : ''}}"></input>

    </br></br>
    <span>Height</span>
    <input type="number" name="height" value="{{ isset($player->height) ? $player->height : ''}}"></input>

    </br></br>

    <span>Club</span>
    <input type="text" name="club" value="{{ isset($player->club) ? $player->club : ''}}"></input>
    <br><br>

    <span>Salary</span>
    <input type="number" name="salary" value="{{ isset($player->salary) ? $player->salary : ''}}"></input>
    <br><br>

    <span>Gender</span>
    <select name="gender">
      <option value="L" {{ $isEdit ? ($player->gender === 'L'? 'selected': '') : '' }}>Laki-Laki</option>
      <option value="P" {{ $isEdit ? ($player->gender === 'P'? 'selected': '') : '' }}>Perempuan</option>
    </select>

    </br></br>

    <span>Status</span>
    <select name="status">
      <option value="0" {{ $isEdit ? ($player->status === '0'? 'selected': '') : ''}}>Inactive</option>
      <option value="1" {{ $isEdit ? ($player->status === '1'? 'selected': '') : '' }}>Active</option>
    </select>

    </br></br>

    <span>Position</span>
    <select name="position">
      <option value="GK" {{ $isEdit ? ($player->position === 'GK'? 'selected': '') : ''}}>GK</option>
      <option value="CB" {{ $isEdit ? ($player->position === 'CB'? 'selected': '') : ''}}>CB</option>
      <option value="LB" {{ $isEdit ? ($player->position === 'LB'? 'selected': '') : ''}}>LB</option>
      <option value="RB" {{ $isEdit ? ($player->position === 'RB'? 'selected': '') : ''}}>RB</option>
      <option value="DMF" {{ $isEdit ? ($player->position === 'DMF'? 'selected': '') : ''}}>DMF</option>
      <option value="CMF" {{ $isEdit ? ($player->position === 'CMF'? 'selected': '') : ''}}>CMF</option>
      <option value="AMF" {{ $isEdit ? ($player->position === 'AMF'? 'selected': '') : ''}}>AMF</option>
      <option value="LMF" {{ $isEdit ? ($player->position === 'LMF'? 'selected': '') : ''}}>LMF</option>
      <option value="RMF" {{ $isEdit ? ($player->position === 'RMF'? 'selected': '') : ''}}>RMF</option>
      <option value="SS" {{ $isEdit ? ($player->position === 'SS'? 'selected': '') : ''}}>SS</option>
      <option value="CF" {{ $isEdit ? ($player->position === 'CF'? 'selected': '') : ''}}>CF</option>
    </select>

    </br></br>

    <span>Country</span>
    <input type="text" name="country" value="{{ isset($player->country) ? $player->country : ''}}"></input>

    </br></br>

    <span>Photo</span>
    <input type="file" name="photo" value="{{ isset($player->photo) ? $player->photo : ''}}"></input>

    </br></br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>