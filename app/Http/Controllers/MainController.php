<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class MainController extends Controller
{
    public function index()
    {
        try {
            $admins = Admin::orderBy('created_at', 'DESC')->limit(5)->get();
            $adminsCount = Admin::count();

            return view('dashboard', ['admins' => $admins, 'adminsCount' => $adminsCount]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function analyes()
    {
        return view('analyes');
    }

    public function request()
    {
        return view('request');
    }
}
