<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Request extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'file_link'];

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
