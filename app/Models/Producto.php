<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $talla
 * @property $observaciones
 * @property $cantidad_inventario
 * @property $created_at
 * @property $updated_at
 * @property $marca_id
 *
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'talla' => 'required',
		'observaciones' => 'required',
		'cantidad_inventario' => 'required',
		'marca_id' => 'required',
    'fecha_de_embarque' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','talla','observaciones','cantidad_inventario','marca_id','fecha_de_embarque'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    

}
