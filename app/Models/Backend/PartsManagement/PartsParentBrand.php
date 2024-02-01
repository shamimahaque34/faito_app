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

    protected static $bikeBrands;

    public static function saveOrUpdatePartsParentBrand($request, $id = null)
    {
        PartsParentBrand::updateOrCreate(['id' => $id], [
            'name'        => $request->name,
            'description' => $request->description,
            'logo'        => isset($id) ? fileUpload($request->file('logo'), 'logo/', 'parts-parent-brand-logo', '400', '650', PartsParentBrand::find($id)->logo) : fileUpload($request->file('logo'), 'logo/', 'parts-parent-brand-logo', '400', '650'),
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function partsBrandCategories()
    {
        return $this->hasMany(PartsBrandCategory::class);
    }
}
