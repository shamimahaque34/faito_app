<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketVerdor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'logo', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'market_verdors';

    public function partsProducts()
    {
        return $this->belongsToMany(PartsProduct::class);
    }
}
