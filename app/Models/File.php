<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'link',
        'type',
    ];

    protected static function booted()
    {
        static::creating(static function ($object) {
            $object->user_id = 1;
        });
    }
}
