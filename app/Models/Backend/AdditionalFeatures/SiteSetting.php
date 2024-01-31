<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSetting extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'title',
        'description',
        'menu_logo',
        'favicon',
        'footer_logo',
        'default_seo_header',
        'default_seo_footer',
        'fb_link',
        'tiktok_link',
        'insta_link',
        'youtube_link',
        'helpline_number',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'site_settings';
}
