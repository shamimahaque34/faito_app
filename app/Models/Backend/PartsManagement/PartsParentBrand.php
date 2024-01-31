<?php

namespace App\Models\Backend\PartsManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsParentBrand extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'logo', 'description', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'parts_parent_brands';

    public function partsBrandCategories()
    {
        return $this->hasMany(PartsBrandCategory::class);
    }
}
