<?php

namespace App\Models\Backend\PartsManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsProduct extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'parts_brand_category_id',
        'title',
        'sub_title',
        'short_description',
        'long_description',
        'features',
        'view_count',
        'status',
        'sku',
        'main_image',
        'sub_images',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'parts_products';

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'parent_model_id');
    }

    public function partsBrandCategory()
    {
        return $this->belongsTo(PartsBrandCategory::class);
    }

    public function marketVerdors()
    {
        return $this->belongsToMany(MarketVerdor::class);
    }

    public function motorBikes()
    {
        return $this->belongsToMany(MotorBike::class);
    }
}
