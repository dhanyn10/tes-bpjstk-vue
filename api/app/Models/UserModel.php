<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "user";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'nama', 'jenis_kelamin', 'tgl_lahir', 'username', 'password'
    ];
}
