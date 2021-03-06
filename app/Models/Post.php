<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'image_path',
        // 'video_path'
    
    ];
    
    public function user()
    {
       return $this -> belongsTo(User::class);
    }

    
}
