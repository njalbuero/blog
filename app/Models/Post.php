<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['title', 'body', 'excerpt'];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(isset($filters['search']), function($query){
            $query->where(function($query){
                $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%')
                ->orWhere('excerpt', 'like', '%' . request('search') . '%');
            });
        });

        $query->when(isset($filters['category']), function($query){
            $query->whereHas('category', function($query){
                $query->where('slug', request('category'));
            });
        });

        $query->when(isset($filters['author']), function($query){
            $query->whereHas('author', function($query){
                $query->where('username', request('author'));
            });
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsto(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
