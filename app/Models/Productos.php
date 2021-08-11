<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table= "productos";
    protected $fillable= ["marca","precio","stock",'proveedor_id','tienda_id'];

    public function tienda(){
        return $this->belongsTo(Tienda::class);
    }
    
    public function proveedor(){
        return $this->belongsTo(Proveedores::class);
    }
}
