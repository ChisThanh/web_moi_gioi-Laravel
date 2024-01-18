<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    protected $model;
    protected $table;
    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User)->getTable();
        view()->share('title', ucwords($this->table));
    }
    public function index(Request $request)
    {
        $query = $this->model
            ->clone()
            ->latest('id');

        $selectRole = $request->get('role');
        $selectCity = $request->get('city');

        if (isset($selectRole)) {
            $query->where('role', $selectRole);
        }

        if (isset($selectCity)) {
            $query->where('city', $selectCity);
        }

        $users = $query->paginate(3);

        $roles = UserRoleEnum::asArray();

        $cities = $this->model
            ->clone()
            ->distinct()
            ->pluck('city');

        $users->appends(['role' => $selectRole, 'city' => $selectCity]);

        return view("admin.$this->table.index", [
            'users' => $users,
            'roles' => $roles,
            'cities' => $cities,
            'selectRole' => $selectRole,
            'selectCity' => $selectCity,
        ]);
    }
    public function create()
    {
        return view("admin.$this->table.create");
    }

    public function edit(User $user)
    {
        return view(
            "admin.$this->table.edit",
            [
                'user' => $user,
            ]
        );
    }
    public function update(Request $request, $userId)
    {
        $data =  $request->except([
            '_token',
            '_method',
        ]);
        $object = $this->model->find($userId);
        $object->fill($data);
        $object->save();
        return redirect()->route('admin.users.index');
    }
    public function destroy($userId)
    {
        User::destroy($userId);
        return redirect()->back();
    }
}
