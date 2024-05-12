<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['user_id','title', 'description','is_active'];

    public function scopeActive($query){
        return $query->where('is_active', 1);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
