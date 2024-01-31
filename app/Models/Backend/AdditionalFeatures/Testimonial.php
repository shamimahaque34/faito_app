<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_name',
        'user_image',
        'user_designation',
        'message',
        'product_type',
        'parent_model_id',
        'status',
    ];

    protected $searchableFields = ['*'];

    public function motorBike()
    {
        return $this->belongsTo(MotorBike::class, 'parent_model_id');
    }

    public function partsProduct()
    {
        return $this->belongsTo(PartsProduct::class, 'parent_model_id');
    }
}
