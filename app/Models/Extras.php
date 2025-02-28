<?php

namespace App\Models;

use App\Models\TranslateAwareModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extras extends TranslateAwareModel
{
  use SoftDeletes;

  protected $table = 'extras';

  public $translatable = ['name'];

  public function item(): HasOne
  {
    return $this->hasOne(Items::class, 'id', 'item_id');
  }

  public function variants(): BelongsToMany
  {
    return $this->belongsToMany(Variants::class, 'variants_has_extras', 'extra_id', 'variant_id');
  }
}
