<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Alfa6661\AutoNumber\AutoNumberTrait;

class student extends Model

{
    //mengimport trait kedalam class
    use AutoNumberTrait;

    //mengantisipasi jika error update column dan field list 
    public $timestamps=false;

    //wajib fillable untuk proteksi bahwa kolom ini yang bisa di isi
    protected $fillable = ['NAMA_PELANGGAN', 'RESI', 'NO_HP', 'TANGGAL_MASUK', 'KERUSAKAN', 'TINDAKAN', 'STATUS', 'BIAYA', 'TANGGAL_KELUAR', 'KETERANGAN'];
 
    public function getAutoNumberOptions()
    {
        return [
            'RESI' => [
                'format' => '2021?', // Format kode yang akan digunakan.
                'length' => 4 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }
    
}



