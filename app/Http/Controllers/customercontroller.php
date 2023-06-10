<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\student;

class customercontroller extends Controller
{
    public function index(request $request)
    {
        $students = DB::table('students')->get();
        return view ('customer.index', ['students' => $students]);
    }

    
public function search (request $request)
    {
        
        $search = request()->query('teangan');
        $resi = student::get('RESI');


            if (filter_var($search, FILTER_VALIDATE_INT)) 
            {  
            // seleksi search != resi dibawah menghasilkan nilai true makanya bisa nge eksekusi resiview, karena faktanya yang diinput terus dibungkus ke $search walaupun no resi yg sesuai tapi tidak sama dengan $resi. jika false hasilnya tidak ditampilkan
                if ($search != $resi) { 
                $students = \App\student::where('RESI', '=', $search)->first();
                $resiview =  $students['RESI'];

                    if ($resiview != $search) { 
                    return redirect ('/customer')->with('status','Resi belum terdaftar, tunggu 1x24jam atau silahkan hubungi cs@sodagarkomputer.com');
                    }
                
                    else { return view('customer.show', compact ('students'));  }
                }

            else { return 'Resi belum terdaftar, tunggu 1x24jam atau silahkan hubungi cs@sodagarkomputer.com'; } 
    }
        //diperlukan sebagai wadah saat mengembalikan ke halaman index customer 
        $students = DB::table('students')->get();
        
        //menampilkan semua page berikut dengan wadah yang di samarkan
        return view ('customer.index', ['students' => $students]);
    
} 
}