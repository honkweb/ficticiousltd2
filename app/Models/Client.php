<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ["name", "address", "tel", "email"];
    use HasFactory;

    public function Contact()
    {
        return $this->belongsToMany(Contact::class);
    }
}