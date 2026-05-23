<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanningFeature extends Model
{
    use HasFactory;
      protected $fillable = [
        'scanning_solution_id',
        'feature',
    ];
    public function solution()
{
    return $this->belongsTo(ScanningSolution::class, 'scanning_solution_id');
}
}
