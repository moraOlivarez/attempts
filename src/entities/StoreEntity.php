<?php

namespace Attempts\entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreEntity extends Model{
    protected $table = 'store_store';
    protected static $nameTable = 'lorganization_colaborador';
    protected static $correo = 'correoColaborador';
    protected $fillable = [
       
    ];

    use SoftDeletes;



}