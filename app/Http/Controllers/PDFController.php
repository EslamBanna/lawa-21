<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use PDF;
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

    public function exportPdf()
    {
        $officers = Officer::all();
        $pdf = PDF::loadView('officers-pdf', compact('officers'));
        return $pdf->download('officers.pdf');
        return redirect()->to('/officer-database');
    }


}
