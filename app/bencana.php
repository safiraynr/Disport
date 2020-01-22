<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class bencana extends Model
{
  use Sortable;

    protected $fillable = ['jenis_bencana','deskripsi_bencana','provinsi_bencana',
  'kabupaten_bencana', 'kecamatan','kode_pos','alamat_lengkap','foto_bencana','status','id_pelapor'];

  public $sortable = ['id','jenis_bencana','deskripsi_bencana','provinsi_bencana',
'kabupaten_bencana', 'kecamatan','kode_pos','alamat_lengkap','foto_bencana','status']; 

  public function pelapor(){
    return $this->belongsTo('App\User','id_pelapor','id');
  }

}
