<?php

namespace App\Models\Backend\BikeManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BikeYearVersion extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'info', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'bike_year_versions';

    public function motorBikes()
    {
        return $this->hasMany(MotorBike::class);
    }
}
