<?php

namespace App\Models\Backend\BikeManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BikeMotorType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'image', 'other_info', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'bike_motor_types';

    protected static $bikeMotorTypes;

    public static function saveOrUpdatebikeMotorType($request, $id = null)
    {
        BikeMotorType::updateOrCreate(['id' => $id], [
            'name'       => $request->name,
            'other_info' => $request->other_info,
            'image'      => isset($id) ? fileUpload($request->file('image'), 'image/', 'bike-motor-type-image', '400', '650', BikeMotorType::find($id)->image) : fileUpload($request->file('image'), 'image/', 'bike-motor-type-image', '400', '650'),
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }

    // public function contacts()
    // {
    //     return $this->hasMany(Contact::class);
    // }

    public function motorBikes()
    {
        return $this->hasMany(MotorBike::class);
    }
}
