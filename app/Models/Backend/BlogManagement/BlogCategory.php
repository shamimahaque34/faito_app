<?php

namespace App\Models\Backend\BlogManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'image', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'blog_categories';

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
