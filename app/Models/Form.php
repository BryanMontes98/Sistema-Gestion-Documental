<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = "documentos";

    protected $primaryKey = 'id_documento';

    protected $fillable = [
        'nombre_documento',
        'documento',
        'descripcion',
        'area',
        'fecha_vigencia',
        'tipo_documento',
        'estado',
        'version'
    ];

    public function historial() {
        return $this->hasMany(History::class, 'id_documento', 'id_documento');
    }
}
