<?php

namespace App\Models;

use App\Traits\HasConfig;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plans extends Model
{
  use HasConfig;
  use SoftDeletes;

  protected $modelName = Plans::class;

  protected $table = 'plan';
}