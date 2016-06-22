<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Articulo extends Model
{
    use Sluggable;

    // Tabla de Referencia
    protected $table='articulos';

    // Campos permitidos para llenarse                                                                                                                                                                         
    protected $fillable=['titulo','contenido','user_id','categoria_id'];

    // Relaciones
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function imagenes(){
    	return $this->hasMany('App\Imagen');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }
}
