<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Language;
use Illuminate\Http\Request;

class SystemConfigController extends Controller
{
    public static function getAndCache()
    {
        return cache()->remember('configs', 24 * 60 * 60, function () {
            $arr = [];
            $arr['languages'] = Language::query()->get();
            $arr['companies'] = Company::query()->get();
            return $arr;
        });
    }
}
