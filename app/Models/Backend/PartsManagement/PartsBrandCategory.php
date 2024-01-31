<?php

namespace App\Models\Backend\PartsManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsBrandCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'parts_parent_brand_id',
        'parts_brand_category_id',
        'name',
        'image',
        'description',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'parts_brand_categories';

    public function partsParentBrand()
    {
        return $this->belongsTo(PartsParentBrand::class);
    }

    public function partsBrandCategory()
    {
        return $this->belongsTo(PartsBrandCategory::class);
    }

    public function partsBrandCategories()
    {
        return $this->hasMany(PartsBrandCategory::class);
    }

    public function partsProducts()
    {
        return $this->hasMany(PartsProduct::class);
    }
}
