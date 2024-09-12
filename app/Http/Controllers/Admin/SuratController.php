<?php

namespace App\Http\Controllers\Admin;

use App\Models\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SuratController extends Controller
{
    public function create()
    {
        $letter = Letter::all();
        return view('admin.letter.create',compact('letter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,[
            'day'    => 'required',
            'date'    => 'required',
            'no_letter'    => 'required',
            'document'    => 'required|mimes:pdf,doc,xlxs,docx',
        ]);
        $document = $request->file('document');
        $document->storeAs('public/document', $document->hashName());

        $letter = Letter::create([
           'day'    => $request->day,
            'date'    => $request->date,
            'no_letter'    => $request->no_letter,
            'document'        => $document->hashName(),
        ]);

        
        if ($letter) {
            Alert::success('Berhasil Ditambahkan');
            return redirect()->route('index');
        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
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
    public function edit( $id)
    {   
       $letter   = Letter::findOrFail($id);
        return view('admin.letter.edit',compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        $this->validate($request,[
            'day'    => 'required',
            'date'    => 'required',
            'no_letter'    => 'required',
            'document'    => 'required|image|mimes:pdf,doc,xlxs,doct',
        ]);
        $document = $request->file('document');
        $document->storeAs('public/document', $document->hashName());

        Letter::create([
           'day'    => $request->day,
            'date'    => $request->date,
            'no_letter'    => $request->no_letter,
            'document'        => $document->hashName(),
        ]);
           
        return redirect()->route('index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy( $id)
    {   
        $letter = Letter::findOrFail($id);
        $letter->delete();
        Alert::success('Berhasil Dihapus');
        return redirect()->back()->with('success', 'Data Berhasil dihapus');

    }
}
