<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View ;
use Illuminate\Http\UploadedFile;
use App\bencana;
Use Auth;

use Session;

class BencanaController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bencanas = Bencana::sortable()->paginate(5);
        return view('bencana.index', compact('bencanas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('bencana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $bencana = new bencana;

      // $bencana -> foto_bencana = $request -> foto_bencana();
      // if ($request->hasFile('foto_bencana')) {
      //   $filename = $request->foto_bencana->getClientOriginalName();
      //   $request->foto_bencana->storeAs('public/upload',$filename);
      // }


        $this -> validate($request,[
          'jenis_bencana'           => 'required',
          'deskripsi_bencana'    =>  'required',
          'provinsi_bencana'     =>  'required',
          'kabupaten_bencana'           => 'required',
          'kecamatan'    =>  'required',
          'kode_pos'     =>  'required',
          'alamat_lengkap' => 'required',
          'foto_bencana' => 'required',

          'status' => 'required'
        ]);
        $bencana = new Bencana([
          'jenis_bencana'=> $request->get('jenis_bencana'),
          'deskripsi_bencana'=> $request->get('deskripsi_bencana'),
          'provinsi_bencana'=> $request->get('provinsi_bencana'),
          'kabupaten_bencana'=> $request->get('kabupaten_bencana'),
          'kecamatan'=> $request->get('kecamatan'),
          'kode_pos'=> $request->get('kode_pos'),
          'alamat_lengkap'=> $request->get('alamat_lengkap'),
          'foto_bencana'=> $request->get('foto_bencana'),
          'id_pelapor'=> Auth::user()->id,



          'status'=> $request->get('status'),
        ]);
        $bencana->save();
        return redirect()->route('bencana.index')->with('success', 'Laporan berhasil ditambah.');
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
        $bencana = bencana::find($id);
        return view('bencana.edit',compact('bencana','id'));
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
        $this->validate($request,[
          'jenis_bencana'           => 'required',
          'deskripsi_bencana'    =>  'required',
          'provinsi_bencana'     =>  'required',
          'kabupaten_bencana'           => 'required',
          'kecamatan'    =>  'required',
          'kode_pos'     =>  'required',
          'alamat_lengkap' => 'required',
          'foto_bencana' => 'required',
          'status' => 'required',
        ]);
        $bencana = bencana::find($id);
        $bencana->jenis_bencana = $request->get('jenis_bencana');
        $bencana->deskripsi_bencana = $request->get('deskripsi_bencana');
        $bencana->provinsi_bencana = $request->get('provinsi_bencana');
        $bencana->kabupaten_bencana = $request->get('kabupaten_bencana');
        $bencana->kecamatan = $request->get('kecamatan');
        $bencana->kode_pos = $request->get('kode_pos');
        $bencana->alamat_lengkap = $request->get('alamat_lengkap');
        $bencana->foto_bencana = $request->get('foto_bencana');
        $bencana->status = $request->get('status');

        $bencana->save();
        return redirect()->route('bencana.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bencana = bencana::find($id);
      $bencana->delete();
      return redirect('admin/bpbd/rekap')->with('success','Laporan berhasil dihapus!');
      //return redirect()->route('bpbd.index')->with('success', 'Data Deleted');
    }  //
}
