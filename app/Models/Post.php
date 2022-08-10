<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // Fungsinya sama bisa dipake salah satu (Kebalikan)
    //protected $fillable = ['title','excerpt','body']; //Boleh diisi sisanya ga boleh
    protected $guarded = ['id']; //Ini ga boleh diisi sisanya boleh

    protected $with = ['category','author'];//eager load sesuai relasinya (kalau belongsto)

    public function scopeFilter($query , array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){//Kalau ga ada search = return false which means skip to next
            return $query->where('title','like','%'.$search.'%')
                        ->orWhere('body','like','%'.$search.'%');
        });

        // Function callback
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category',function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // // arrow function
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');//alias
    }

    public function getRouteKeyName()
    {
        return 'slug';//ngubah yang dikirim di route dari id ke slug
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'//sumber slug dari field di table
            ]
        ];
    }
    
}