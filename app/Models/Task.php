<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'is_done',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
