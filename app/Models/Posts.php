<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['post_title', 'post_slug', 'post_description', 'post_active', 'post_image', 'author_id', 'category_id'];

    protected $table = 'posts';

    protected function setPostSlugAttribute($value)
    {
        $this->attributes['post_slug'] = Str::slug($value);
    }

    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
}