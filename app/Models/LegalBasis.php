<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalBasis extends Model
{
    use HasFactory;
    protected $table = 'legalbasis';
    protected $fillable = ['code', 'description'];
}
