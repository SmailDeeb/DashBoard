<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Car;
use App\Models\Post;
use App\Models\Report;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        try {
            $reports = Report::all();
            $admins = Admin::orderBy('created_at', 'DESC')->limit(5)->get();
            $adminsCount = Admin::count();

            return view('dashboard', ['admins' => $admins, 'adminsCount' => $adminsCount, 'reports' => $reports]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function analyes()
    {
        $cars = Car::all();
        $admins = Admin::all();
        $posts = Post::all();
        $users = User::all();

        return view('analyes', ['posts' => $posts, 'admins' => $admins, 'users' => $users, 'cars' => $cars]);
    }

    public function request()
    {
        $posts = Post::all();

        return view('posts.requests', ['posts' => $posts]);
    }
}
