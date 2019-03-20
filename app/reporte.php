<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{
   
    protected $connection = 'sqlsrv_Reporte';
    protected $primaryKey = 'idr';
    protected $table = 'reportes';
    protected $dateFormat = 'M j Y h:i:s';
    //public $timestamps = false;
    public function usuario(){
        return $this->belongsTo(User::class); 
  }
}
