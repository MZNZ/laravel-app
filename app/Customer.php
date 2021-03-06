<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Fillable solution
    // Only the field names inside the array can be mass-assign
    // protected $fillable = ['name', 'email', 'active', 'company_id'];

    // Guarded solution
    // Guarded specifies which fields are not mass assignable
    protected $guarded = [];

    // Set 'active' default value
    protected $attributes = ['active' => 1];

    public function getActiveAttribute($attribute) {
      return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query) {
      return $query->where('active', 1);
    }

    public function scopeInactive($query) {
      return $query->where('active', 0);
    }

    public function company() {
      return $this->belongsTo(Company::class);
    }

    public function activeOptions() {
      return [0 => 'Inactive', 1 => 'Active'];
    }
}
