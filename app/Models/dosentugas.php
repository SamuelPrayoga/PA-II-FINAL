<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosentugas extends Model
{
    use HasFactory;
    protected $table = 'dosentugas';
    protected $primaryKey = 'nidn';
}
