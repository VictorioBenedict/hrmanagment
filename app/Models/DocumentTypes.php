<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type'
    ];
}
