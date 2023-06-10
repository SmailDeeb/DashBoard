<?php

namespace App\Http\Controllers;

use App\Models\reports;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function showreport()
    {
        $reports = Reports::All();

        return view('viewreports', ['reports' => $reports]);
    }

    public function sendreport()
    {
        return view('sendreport');
    }

    public function store(Request $request)
    {
        // validate
    }
}
