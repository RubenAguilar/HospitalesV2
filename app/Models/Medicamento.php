<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $id
 * @property $Nombre_medicamento
 * @property $gramaje
 * @property $tipo_med
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
		'Nombre_medicamento' => 'required|regex:/^[a-zA-Z\s]+$/u|max:100',
		'gramaje' => 'required',
		'tipo_med' => 'required|regex:/^[a-zA-Z\s]+$/u|max:100',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_medicamento','gramaje','tipo_med'];



}
