<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['title', 'body', 'slug', 'author'])]

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';
    protected $guarded = [];

    // eager loading by default to reduce the number of queries when fetching posts
    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // scope to filter posts by category
    #[Scope]
    protected function scopeFilter(Builder $query, array $filters): void
    {

        //    $query->when($filters['search'] ?? false, function ($query, $search) {
        //         $query->where('title', 'like', '%' . $search . '%')
        //             ->orWhere('body', 'like', '%' . $search . '%');
        //     });

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) => $query->where(fn ($query) => $query->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%')
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) => $query->whereHas('category', fn ($query) => $query->where('slug', $category)
            )
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) => $query->whereHas('author', fn ($query) => $query->where('username', $author)
            )
        );
    }
}
