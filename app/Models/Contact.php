<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Contact extends Model
{
    protected $fillable = ["name", "role", "tel", "email"];
    use HasFactory;

    public function Client()
    {
        return $this->hasMany(Client::class);
    }
}
