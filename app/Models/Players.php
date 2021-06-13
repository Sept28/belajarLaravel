<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Players extends Model
{
    protected $fillable =['name', 'age', 'height', 'club', 'salary', 'gender', 'status', 'position', 'country', 'photo'];

    public function editPlayer($id)
    {
        return DB::table('players')->where('id', $id)->first();
    }
}
