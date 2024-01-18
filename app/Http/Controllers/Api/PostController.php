<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\post\GenerateSlugRequest;
use App\Imports\PostImport;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    private $model;
    use ResponseTrait;

    public function __construct()
    {
        $this->model = Post::query();
    }
    public function index()
    {
        $data  = $this->model->paginate(10);
        foreach ($data as $each) {
            $each->currency_salary = $each->currency_salary_code;
        }
        return $data;
    }
    public function generateSlug(GenerateSlugRequest $request)
    {
        try {
            $title = $request->get('title');
            $slug = SlugService::createSlug(Post::class, 'slug', $title);
            return $this->successResponse($slug, 'Success');
        } catch (\Throwable $th) {
            return $this->errorResponse('Error');
        }
    }
}
