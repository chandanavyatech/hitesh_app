<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'no_of_images'
    ];

    public function taskUsers()
    {
        return $this->hasMany('App\Models\UserTask');
    }
}
