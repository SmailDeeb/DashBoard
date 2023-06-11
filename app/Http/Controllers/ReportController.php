<?php

namespace App\Http\Controllers;

use App\Enums\ReportStatusEnum;
use App\Models\Report;
use Illuminate\Http\Request;
use SebastianBergmann\Type\Exception;

class ReportController extends Controller
{
    public function showreport()
    {
        $reports = Report::All();

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
            $report = Report::create([
                'from' => $request->from,
                'about' => $request->about,
                'content' => $request->content,
                'status' => $request->type,
            ]);

            if ($report) {
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            return abort(500);
        }
    }

    public function markAsRead($id)
    {
        // return 'test';
        try {
            $report = Report::find($id);

            if ($report) {
                $report->status = ReportStatusEnum::SEEN_REPORT->value;
                $report->save();
                return redirect()->route('showreport');
            } else {
                return abort(404);
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function delete($id)
    {
        try {
            $report = Report::find($id);

            if ($report) {
                $report->delete();

                return redirect()->route('showreport');
            } else {
                return abort(404);
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function showArchivedReports()
    {
        $archivedReports = Report::onlyTrashed()->get();
        // return $archivedReports;
        return view('report.archived')->with(['reports' => $archivedReports]);
    }

    public function restore($id)
    {
        // return $id;
        try {
            $report = Report::onlyTrashed()->where('id', $id)->first();

            if ($report) {
                $report->restore();

                return redirect()->route('showreport');
            } else {
                return abort(404);
            }
        } catch (\Throwable $th) {
            return abort(500);
        }
    }
}
