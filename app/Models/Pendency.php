<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendency extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'value',
        'sender_id',
        'receiver_id',
    ];

    public function account(){
        return $this->belongsTo(Account::class);
    }
}