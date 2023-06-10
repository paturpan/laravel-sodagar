<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil namespace class untuk query dB
use Illuminate\Support\Facades\DB; 

//membuat namescape untuk query eloquent
use App\student;

class playsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if ($request->has('cari')) {
            $plays = \App\student::where('RESI', 'LIKE', '%' .$request->cari. '%')->paginate(3);
        }
        else {
        //eloquent dengan nama model student, yang mana namespace sudah dibuat sehingga tidak perlu lagi tulis /app/student
        // $plays difungsikan untuk pengenalan foreach di index
        $plays = student::paginate(3);
        }

	/*untuk query dari table plays dengan cara query builder
    $plays = DB::table('plays')->get(); */
	//kirim data yg sudah berhasil di ambil dari table students ke $plays 	
	//kembalikan nilai setelah query,ke file index.blade di folder views/plays lalu bungkus data tabel plays ke $plays
        
        // $id = student::prefix();
        return view ('plays.index', ['plays' => $plays]);
        //untuk hasil search
        return view ('plays.index', compact('plays', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
		 return view ('plays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = student::create($request->all());
        // dd ($student->RESI);

        //balikin ke page students dan tampilkan semua data
        return redirect ('/plays')->with('status','SUKSES DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(play $play)
    {
        //
        return view ('plays.show', compact ('play'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //validasi agar tidak bisa update dengan data kosong
        // $request->validate(['NAMA_PELANGGAN'=>'required', 'RESI'=>'required']);
        $play = \App\student::find($id);
        return view('plays.edit', compact ('play'));
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
        //validasi agar tidak bisa update dengan data kosong
        $request->validate(['NAMA_PELANGGAN'=>'required', 'RESI'=>'required']);

        //bungkus value berdasarkan id menjadi $play lalu update
        $play = \App\student::find($id);
        $play->update($request->all());
        return redirect('/plays')->with('status','BERHASIL DI UBAH');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function delete($id)
    {
        //bungkus value berdasarkan id menjadi $play lalu hapus
        $play = \App\student::find($id);
        $play->delete();

        return redirect ('/plays')->with('status','BERHASIL DI HAPUS');
    }

}
