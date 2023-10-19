<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();
        $allPdfs = [];

        foreach ($users as $user) {
            $data = [
                'title' => 'Welcome to ItSolutionStuff.com',
                'date' => date('m/d/Y'),
                'user' => $user
            ];

            $pdf = app('dompdf.wrapper')->loadView('myPDF', $data);
            $allPdfs[] = $pdf;
        }
        $zip = new \ZipArchive;
        $zipFilename = 'user_pdfs.zip';

        // Create Publie Folder pdfs Folder
        if ($zip->open(public_path('pdfs/' . $zipFilename), \ZipArchive::CREATE) === TRUE) {
            foreach ($allPdfs as $key => $pdf) {
                $filename = 'user_' . $users[$key]->id . '_pdf.pdf';
                $pdf->save(public_path('pdfs/' . $filename));
                $zip->addFile(public_path('pdfs/' . $filename), $filename);
            }
            $zip->close();
        }
        return response()->download(public_path('pdfs/' . $zipFilename))->deleteFileAfterSend(true);
    }
}
