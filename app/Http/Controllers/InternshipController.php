<?php

namespace App\Http\Controllers;

use SnappyPDF;
use Terbilang;
use App\Models\Internship;
use Jenssegers\Agent\Agent;
use App\Http\Requests\StoreInternshipRequest;
use App\Http\Requests\UpdateInternshipRequest;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_str = file_get_contents('assets/data/data1.json');
        $data_json = json_decode($data_str, true);
        return view('create-certificate', ['data' => $data_json['internships']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInternshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInternshipRequest  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInternshipRequest $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }

    public function PDFExport(Internship $internship, $id)
    {
        $agent = new Agent();
        $platform = $agent->platform();

        if (stripos($platform, 'MAC') !== false || stripos($platform, 'OS') !== false) {
            config(['snappy.pdf.binary' => base_path('public/assets/binary/wkhtmltopdf-mac')]);
            config(['snappy.image.binary' => base_path('public/assets/binary/wkhtmltoimage-mac')]);
        }

        $id = (int)$id;
        $id = $id - 1;
        $data_str = file_get_contents('assets/data/data1.json');
        $data_json = json_decode($data_str, true);
        $total_performance = 0;
        $total_string = '';

        foreach ($data_json['internships'][$id]['performance'] as $performance) {
            $total_performance = $total_performance + (int)$performance['nilai'];
        }

        $total_summary = $total_performance / count($data_json['internships'][$id]['performance']);
        $total_summary = (int)$total_summary;
        $total_summary_s = Terbilang::make($total_summary);

        if ($total_summary <= 100 && $total_summary > 85) {
            $total_string = 'A';
        } else if ($total_summary <= 85 && $total_summary > 70) {
            $total_string = 'B';
        } else if ($total_summary <= 70) {
            $total_string = 'C';
        }

        $pdf = SnappyPDF::loadView('certificate', ['data' => $data_json['internships'][$id], 'total_number'  => $total_performance, 'total_summary'  => $total_summary, 'total_string' => $total_string, 'total_summary_s' => $total_summary_s])->setPaper('a4')->setOrientation('landscape')->setOption('margin-top', 0)->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-right', 0);
        return $pdf->download('sertifikat.pdf');
    }
}
