<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;
use SebastianBergmann\Type\Exception;

class ReportController extends Controller
{
    public function showreport()
    {
        $reports = Reports::All();

        return view('report.viewreports', ['reports' => $reports]);
    }

    public function sendreport()
    {
        return view('report.sendreport');
    }

    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'about' => 'required',
            'content' => 'required',
            'type' => 'required',
        ]);
        try {
            $report = Reports::create([
                'from' => $request->from,
                'about' => $request->about,
                'content' => $request->content,
                'status' => $request->type,
            ]);

            if ($report) {
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
