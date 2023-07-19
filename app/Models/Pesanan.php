<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "tb_pesanan";
    protected $primaryKey = "id_pesanan";
    protected $guarded = [];
}
