<?php

namespace App\Models;

use App\Traits\HasConfig;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Restorant
{
  use HasConfig;
  use HasFactory;


  protected $guarded = [];

  protected $modelName = Restorant::class;

  protected $appends = ['alias', 'logom', 'icon', 'coverm'];

  protected $imagePath = '/uploads/restorants/';

  protected $table = 'companies';
}