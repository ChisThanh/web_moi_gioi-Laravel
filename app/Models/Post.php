<?php

namespace App\Models;

use App\Enums\ObjectLanguageEnum;
use App\Enums\PostCurrencySalaryEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'company_id',
        'job_title',
        'district',
        'city',
        'remotable',
        'can_parttime',
        'min_salary',
        'max_salary',
        'currency_salary',
        'requirement',
        'start_date',
        'end_date',
        'number_application',
        'is_pinned',
        'slug',
    ];
    protected static function booted()
    {
        static::creating(static function ($object) {
            $object->user_id = 1;
        });
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'job_title'
            ]
        ];
    }
    public function getCurrencySalaryCodeAttribute()
    {
        return PostCurrencySalaryEnum::getKey($this->currency_salary);
    }

    public function languages()
    {
        return $this->hasManyThrough(
            Language::class,
            ObjectLanguage::class,
            'object_id', // Khóa ngoại trong bảng object_languages
            'id', // Khóa chính trong bảng post
            'id', // Khóa chính trong bảng languages
            'language_id' // Khóa ngoại trong bảng object_languages liên kết với languages
        )
            ->where('object_language.object_type', ObjectLanguageEnum::POST);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
