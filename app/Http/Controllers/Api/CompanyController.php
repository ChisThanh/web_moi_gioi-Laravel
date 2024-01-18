<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Controllers\SystemConfigController;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $model;
    use ResponseTrait;

    public function __construct()
    {
        $this->model = Company::query();
    }
    public function index()
    {

        $configs = SystemConfigController::getAndCache();
        return $this->successResponse($configs['companies']);
    }
    public function check($companyName)
    {
        $check = $this->model
            ->where('name', $companyName)
            ->exists();

        return $this->successResponse($check, '');
    }
}
