<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Message;

class Contact extends Model
{
    protected $fillable = ["name", "role", "tel", "email"];
    use HasFactory;

    public function Message()
    {
        return $this->belongsToMany(Message::class,);
    }

    public function Client()
    {
        return $this->belongsToMany(Client::class, );
    }

   
}
