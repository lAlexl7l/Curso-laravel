<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class reporte extends Model
{
   
    protected $connection = 'sqlsrv_Reporte';
    protected $primaryKey = 'idr';
    protected $table = 'reportes';
    protected $dateFormat = 'M j Y h:i:s';
    //public $timestamps = false;
    $users = DB::table('users')
            ->join('reporte', 'users.id', '=', 'reporte.usuario_id')
            ->select('users.name', 'reporte.description')
            ->get();
    /*public function usuario(){
        return $this->belongsTo(User::class); */
  }
}
