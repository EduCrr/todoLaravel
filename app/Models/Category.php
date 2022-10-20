<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function taks(){
        return $this->hasMany(Task::class);
    }
}
