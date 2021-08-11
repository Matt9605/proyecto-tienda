<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
   // use HasFactory;
    protected $table= "ventas";
    protected $fillable= ["numero_factura","fecha","valor_venta",'vendedor_id','tienda_id'];

    public function productos(){
        return $this->belongsToMany(Productos::class,'ventas_productos','venta_id','producto_id')
        ->withPivot('id','cantidad','producto_id','venta_id')->withTimestamps();
        }


        public function tienda(){
            return $this->belongsTo(Tienda::class);
        }
        
        public function vendedor(){
            return $this->belongsTo(User::class);
        }
    
}
