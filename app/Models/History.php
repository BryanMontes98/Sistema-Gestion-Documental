<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'historial_documentos';

    protected $primaryKey = 'documento_id';

    protected $fillable = [
        'documento_id',
        'nombre_documento',
        'descripcion',
        'area',
        'fecha_vigencia',
        'tipo_documento',
        'documento',
        'version'
    ];

}
