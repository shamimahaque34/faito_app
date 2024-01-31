<?php

namespace App\Models\Backend\BlogManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'blog_category_id',
        'title',
        'image',
        'content',
        'status',
        'view_count',
    ];

    protected $searchableFields = ['*'];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
