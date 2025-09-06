<?php

namespace App\Models;

use App\Enums\Subject;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'title',
        'description',
        'subject',
        'urls'
    ];

    protected $casts = [
        'subject' => Subject::class,
        'urls' => 'array',
    ];
}
