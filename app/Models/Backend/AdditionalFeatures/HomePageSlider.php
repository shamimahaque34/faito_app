<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePageSlider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'slider_file_type',
        'file',
        'file_url',
        'file_type',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'home_page_sliders';
}
