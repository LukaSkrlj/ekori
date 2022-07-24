<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'image',
        'updated_by',
        'created_by',
        'long',
        'latt',
        'resolved',
        'help',
        'street',
        'number',
        'city'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
