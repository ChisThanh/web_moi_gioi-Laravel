<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    public function getRoleNameAttribute()
    {
        return UserRoleEnum::getKeys($this->role)[0];
    }
    // public function getNameAttribute()
    // {
    //     return '';
    // }
}
