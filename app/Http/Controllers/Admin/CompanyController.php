<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\Company\StoreRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ResponseTrait;
    public function store(StoreRequest $request)
    {
        try {
            $arr = $request->validated();
            $arr['logo'] = optional($request->file('logo'))->store('company_logo');
            Company::query()->create($arr);

            return $this->successResponse('', 'thanh cong');
        } catch (\Throwable $e) {
            $mgs = '';

            if ($e->getCode() === '23000') {
                $mgs = 'cais gif dos';
            }

            return $this->errorResponse($mgs);
        }
    }
}
