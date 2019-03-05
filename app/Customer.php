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

    public function scopeActive($query) {
      return $query->where('active', 1);
    }

    public function scopeInactive($query) {
      return $query->where('active', 0);
    }

    public function company() {
      return $this->belongsTo(Company::class);
    }
}
