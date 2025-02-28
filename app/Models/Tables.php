<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tables extends Model
{
  protected $fillable = [
    'name',
    'restaurant_id',
    'restoarea_id',
    'size',
  ];

  public function restoarea(): BelongsTo
  {
    return $this->belongsTo(RestoArea::class);
  }

  public function visits(): HasMany
  {
    return $this->hasMany(Visit::class, 'table_id', 'id');
  }

  public function restaurant(): BelongsTo
  {
    return $this->belongsTo(Restorant::class);
  }

  public function getFullNameAttribute()
  {
    return $this->restoarea ? $this->restoarea->name . ' - ' . $this->name : $this->name;
  }
}
