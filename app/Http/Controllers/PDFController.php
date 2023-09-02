<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use PDF;
use ArPHP\I18N\Arabic;

class PDFController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('testPDF', $data);

        return $pdf->download('tutsmake.pdf');
    }

    public function exportPdf(Request $request)
    {
        $officers = json_decode($request->officers);
        // $officers = $officers->sortBy('name');
        $view_name = 'officers-pdf';
        if ($request->has('semi_officers')) {
            $view_name = 'semi-officers-pdf';
            $officers = json_decode($request->semi_officers);
        } else if ($request->has('soliders')) {
            $view_name = 'soliders-pdf';
            $officers = json_decode($request->soliders);
        }
        $reportHtml = view($view_name,  compact('officers'))->render();

        $arabic = new Arabic();
        $p = $arabic->arIdentify($reportHtml);

        for ($i = count($p) - 1; $i >= 0; $i -= 2) {
            $utf8ar = $arabic->utf8Glyphs(substr($reportHtml, $p[$i - 1], $p[$i] - $p[$i - 1]));
            $reportHtml = substr_replace($reportHtml, $utf8ar, $p[$i - 1], $p[$i] - $p[$i - 1]);
        }

        $pdf = PDF::loadHTML($reportHtml)->setPaper('a4', 'landscape');
        return $pdf->download('officers.pdf');
    }
}
