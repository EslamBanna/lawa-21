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

    public function exportPdfCard(Request $request)
    {
        try {
            // return $request->all();
            $view_name = 'officer';
            if ($request->has('officer')) {
                $officer = json_decode($request->officer);
            } else if ($request->has('semi_officer')) {
                $officer = json_decode($request->semi_officer);
                $view_name = 'semi-officer';
            } else if ($request->has('solider')) {
                $officer = json_decode($request->solider);
                $view_name = 'solider';
            }
            $photo_len = strlen((isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/images/' . $view_name . 's/');
            $officer_image = substr($officer->image, $photo_len);
            $photo_len = strlen((isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/images/' . $view_name . 's_id_images/');
            $id_image = substr($officer->id_image, $photo_len);
            $photo_len = strlen((isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/images/' . $view_name . 's_militray_images/');
            $militray_image = substr($officer->militray_image, $photo_len);
            $reportHtml = view($view_name . '-pdf-card',  compact('officer', 'officer_image', 'id_image', 'militray_image'))->render();
            $arabic = new Arabic();
            $p = $arabic->arIdentify($reportHtml);
            for ($i = count($p) - 1; $i >= 0; $i -= 2) {
                $utf8ar = $arabic->utf8Glyphs(substr($reportHtml, $p[$i - 1], $p[$i] - $p[$i - 1]));
                $reportHtml = substr_replace($reportHtml, $utf8ar, $p[$i - 1], $p[$i] - $p[$i - 1]);
            }
            $pdf = PDF::loadHTML($reportHtml)->setPaper('a4', 'landscape');
            return $pdf->download('officer-card.pdf');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function exportPlans(Request $request){
        try{
            $plans = json_decode($request->plans);
            $reportHtml = view('plans-pdf',  compact('plans'))->render();
            $arabic = new Arabic();
            $p = $arabic->arIdentify($reportHtml);
            for ($i = count($p) - 1; $i >= 0; $i -= 2) {
                $utf8ar = $arabic->utf8Glyphs(substr($reportHtml, $p[$i - 1], $p[$i] - $p[$i - 1]));
                $reportHtml = substr_replace($reportHtml, $utf8ar, $p[$i - 1], $p[$i] - $p[$i - 1]);
            }
            $pdf = PDF::loadHTML($reportHtml)->setPaper('a4');
            return $pdf->download('plans.pdf');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function exportPlansKataeb(Request $request){
        try{
            $data = json_decode($request->data);
            $reportHtml = view('kataeb-plans-pdf',  compact('data'))->render();
            $arabic = new Arabic();
            $p = $arabic->arIdentify($reportHtml);
            for ($i = count($p) - 1; $i >= 0; $i -= 2) {
                $utf8ar = $arabic->utf8Glyphs(substr($reportHtml, $p[$i - 1], $p[$i] - $p[$i - 1]));
                $reportHtml = substr_replace($reportHtml, $utf8ar, $p[$i - 1], $p[$i] - $p[$i - 1]);
            }
            $pdf = PDF::loadHTML($reportHtml)->setPaper('a4');
            return $pdf->download('kataeb-plans.pdf');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
