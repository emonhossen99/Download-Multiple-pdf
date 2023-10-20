<?php

namespace App\Http\Controllers;

use App\Mail\PdfMail;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PDFController extends Controller
{

    public function mail(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $data = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.',
            'url' => url('/generate-pdf', ['start_date' => $start_date, 'end_date' => $end_date]),
        ];
        Mail::to('hadijaman.digital@gmail.com')->send(new PdfMail($data));
        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($start, $end)
    {
        $users = User::whereBetween('created_at', [$start,$end])->get();
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
