<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'tie',
        'content',
        'category_id',
        'is_active',
        'slug_title'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
