<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradQuestionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pageOne()
    {
        return view('dashboard.questioner.page1pertanyaan', [
            'title' => 'Isi Survei - Halaman 1'
        ]);
    }

    public function pageTwo(Request $request)
    {
        // Simpan nilai halaman pertama ke session
        $request->validate([
            'question1' => 'required',
            // Validasi lainnya untuk halaman 1
        ]);

        session(['survey_page_one' => $request->only('question1')]);
        // tambahkan nilai lainnya ke session jika ada

        return view('dashboard.questioner.page2pertanyaan', [
            'title' => 'Isi Survei - Halaman 2'
        ]);
    }

    public function submit(Request $request)
    {
        // Validasi halaman kedua
        $request->validate([
            'question2' => 'required',
            // Validasi lainnya untuk halaman 2
        ]);

        // Ambil data dari session
        $pageOneData = session('survey_page_one');
        $pageTwoData = $request->only('question2');
        // tambahkan nilai lainnya dari halaman 2

        // Gabungkan semua data
        $surveyData = array_merge($pageOneData, $pageTwoData);

        // Proses penyimpanan data survei di sini
        // Contoh: Survey::create($surveyData);

        // Hapus data dari session
        session()->forget('survey_page_one');

        return redirect()->route('survey.pageOne')->with('success', 'Survei telah disimpan!');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
