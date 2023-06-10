<?php

namespace App\Http\Controllers;

use App\Enums\PermissionsEnum;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['getLogin', 'login']);
        $this->middleware('permission:'.PermissionsEnum::CREATE_ADMIN->value)->only(['create', 'store']);
        $this->middleware('permission:'.PermissionsEnum::EDIT_ADMIN->value)->only(['edit', 'update']);
        $this->middleware('permission:'.PermissionsEnum::DELETE_ADMIN->value)->only(['destroy']);
        $this->middleware('permission'.PermissionsEnum::VIEW_ANALYSIS->value)->only(['analyes']);
        // $this->middleware('permission'.PermissionsEnum::VIEW_REPORTS->value)->only(['reports']);
        // $this->middleware('permission'.PermissionsEnum::ACCEPT_REQUEST->value)->only(['accept_request']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'test';
        try {
            $admins = Admin::all()->load('roles');

            return view('admins.index', ['admins' => $admins]);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $roles = Role::select('id', 'name')->get();

            return view('admins.create', ['roles' => $roles]);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required|min:4',
            'role' => 'required',
        ]);
        try {
            $admin = Admin::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $admin->assignRole($request->role);

            if ($admin) {
                return redirect()->route('admins.index');
            } else {
                return abort(500);
            }
        } catch (\Throwable $th) {
            // return $th->getMessage();
            return abort(500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        try {
            return view('admins.show', ['admin' => $admin]);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        try {
            $roles = Role::select('id', 'name')->get();
            $admin->load('roles');

            return view('admins.edit', ['admin' => $admin, 'roles' => $roles]);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        DB::beginTransaction();
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        try {
            $admin->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]);

            $admin->load('roles');

            $admin->removeRole($admin->roles[0]->id);
            $admin->assignRole($request->role);

            if ($admin) {
                DB::commit();

                return redirect()->route('admins.index');
            } else {
                DB::rollBack();

                return abort(500);
            }
        } catch (\Throwable $th) {
            DB::rollBack();

            return abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        try {
            $admin->delete();

            return redirect()->route('admins.index');
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function getLogin()
    {
        try {
            return view('auth.login');
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'username_or_email' => 'required',
            'password' => 'required',
        ]);
        try {
            if (Auth::attempt(['username' => $request->username_or_email, 'password' => $request->password]) || Auth::attempt(['email' => $request->username_or_email, 'password' => $request->password])) {
                return redirect()->intended(route('dashboard'));
            } else {
                return back()->withInput($request->only('username_or_email'));
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function logout()
    {
        try {
            Auth::logout();

            return redirect()->route('get.login');
        } catch (\Throwable $th) {
            return abort(500);
        }
    }
}
