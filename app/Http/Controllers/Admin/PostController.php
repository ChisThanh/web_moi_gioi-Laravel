<?php

namespace App\Http\Controllers\Admin;

use App\Enums\FileTypeEnum;
use App\Enums\ObjectLanguageEnum;
use App\Enums\PostCurrencySalaryEnum;
use App\Enums\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Controllers\SystemConfigController;
use App\Http\Requests\post\StoreRequest;
use App\Imports\PostImport;
use App\Models\Company;
use App\Models\File;
use App\Models\Language;
use App\Models\ObjectLanguage;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    protected $model;
    protected $table;
    use ResponseTrait;
    public function __construct()
    {
        $this->model = Post::query();
        $this->table = (new Post())->getTable();
        view()->share('title', ucwords($this->table));
    }
    public function index()
    {
        return view('admin.posts.index', [
            'table' => $this->table,
        ]);
    }
    public function create()
    {
        $languages = Language::get();
        // $currencySalary = PostCurrencySalaryEnum::getKeys();

        // $statusInstances = PostCurrencySalaryEnum::getInstances();
        // $statusArray = [];
        // foreach ($statusInstances as $instance) {
        //     $statusArray[$instance->key] = $instance->value;
        // }
        $statusArray = collect(PostCurrencySalaryEnum::getInstances())->pluck('value', 'key')->all();


        $configs = SystemConfigController::getAndCache();

        return view('admin.posts.create', [
            'languages' => $configs['languages'],
            'currencySalary' => $statusArray,
        ]);
    }

    public function store(StoreRequest $request)
    {
        try {
            DB::beginTransaction();

            $arr = $request->only([
                "company",
                "city",
                "distinct",
                "min_salary",
                "max_salary",
                "currency_salary",
                "requirement",
                "number_applicant",
                "start_date",
                "end_date",
                "title",
                "slug",
            ]);
            $companyName = $request->get("company");

            if (!empty($companyName)) {
                $arr['company_id'] = Company::query()->firstOrCreate(['name' => $companyName])->id;
            }
            $languages = $request->get('languages');
            $post =  Post::create($arr);

            foreach ($languages as $language) {
                ObjectLanguage::create([
                    'language_id' => $language,
                    'object_id' => $post->id,
                    'object_type' => ObjectLanguageEnum::POST,
                ]);
            }

            DB::commit();
            return $this->successResponse(
                '',
                'Thành công rồi nè',
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->errorResponse($th);
        }
    }

    public function importCSV(Request $request)
    {
        Excel::import(new PostImport, $request->file('file'));
    }
}
