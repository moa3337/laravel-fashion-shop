<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $fillable = ["model", "type", "number", "color", "quantity", "image"];
    public function getAbstract($max = 40)
    {
        return substr($this->text, 0, $max) . "...";
    }
}
