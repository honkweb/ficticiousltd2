<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Message extends Model
{
    protected $fillable = ["client", "title", "message"];
    use HasFactory;


public function Contact()
    {
        return $this->belongsToMany(Contact::class);
    }
};