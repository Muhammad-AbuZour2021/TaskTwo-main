<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanningSolution extends Model
{
    use HasFactory;
      protected $fillable = [
        'title',
        'description',
        'type',
        'button_text',
        'button_link',
    ];

   
    public function features()
{
    return $this->hasMany(ScanningFeature::class);
}
}
