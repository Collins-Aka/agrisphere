<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hours extends Model
{
  protected $table = 'hours';

  public function restorant(): BelongsTo
  {
    return $this->belongsTo(Restorant::class);
  }
}
