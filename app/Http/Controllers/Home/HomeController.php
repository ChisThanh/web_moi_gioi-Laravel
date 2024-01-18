<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // app()->setLocale('vi');
        $data = Post::query()
            ->with([
                'languages',
                'company' => function ($q) {
                    return $q->select([
                        'id',
                        'name',
                        'logo',
                    ]);
                }
            ])
            ->latest()
            ->paginate(9);
        return view('home', [
            'data' => $data,
        ]);
    }
}
