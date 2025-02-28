<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\History;
use Illuminate\Pagination\Paginator;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Psr7\Message;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generatePdf(Request $request)
    {
        $id = $request->documento;

        $documento = Form::where('id_documento', $id)->first();

        if (isset($documento)) {

            return response()->download(public_path('docs/' . $documento->documento));
        }
    }

    public function index(Request $request)
    {

        Paginator::useBootstrap();

        $busqueda_nombre = $request->nombre;
        $busqueda_area = $request->area;
        $busqueda_tipo = $request->tipo_documento;
        $busqueda_fecha = $request->fecha_vigencia;

        // Construimos la consulta base
        $query = Form::query();

        if (!empty($busqueda_nombre)) {
            $query->where('nombre_documento', 'LIKE', '%' . $busqueda_nombre . '%');
        }

        if (!empty($busqueda_area) && $busqueda_area !== 'Todo') {
            $query->where('area', 'LIKE', '%' . $busqueda_area . '%');
        }

        if (!empty($busqueda_tipo) && $busqueda_tipo !== 'Todo') {
            $query->where('tipo_documento', 'LIKE', '%' . $busqueda_tipo . '%');
        }

        if (!empty($busqueda_fecha)) {
            $query->where('fecha_vigencia', 'LIKE', '%' . $busqueda_fecha . '%');
        }

        $query->where('estado', 1);

        $documentos = $query->latest('id_documento')->paginate(4);

        return view('sections.filtro-formulario', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* dd($request->all()); */

        $request->validate([

            'nombre_documento' => 'string | required',
            'descripcion' => 'string | required',
            'area' => 'string | required',
            'fecha_vigencia' => 'date | required',
            'tipo_documento' => ' string | required ',
            'documento' => ' file | required | mimes:pdf,doc,docx,jpg,jpeg,png',

        ]);

        if ($request->hasFile('documento')) {

            $file = $request->file('documento');
            $destinationPath = 'docs';
            $fileName = $file->getClientOriginalName();
            $uploadSuccess = $request->file('documento')->move($destinationPath, $fileName);
            $documento  = $fileName;
        }

        Form::create([

            'nombre_documento' => $request->nombre_documento,
            'descripcion' => $request->descripcion,
            'area' => $request->area,
            'fecha_vigencia' => $request->fecha_vigencia,
            'tipo_documento' => $request->tipo_documento,
            'documento' => $documento,

        ]);

        return redirect()->route('home.create')->with('success', 'formulario guardado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $documento)
    {
        return view('sections.actualizar-formulario', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $documento)
    {
        $validated = $request->validate([
            'documento' => 'required|file|mimes:pdf',
        ]);
    
        if ($request->hasFile('documento')) {
            // Generar un nombre único para el nuevo archivo
            $newFileName = $request->file('documento')->getClientOriginalName();
            
            // Ruta de destino para la carpeta "docs" dentro de "public"
            $destinationPath = public_path('docs');
    
            // Mover el archivo a la carpeta "docs"
            $request->file('documento')->move($destinationPath, $newFileName);
    
            // Actualizar el nombre del archivo en el registro del documento
            $documento->documento = $newFileName;
            $documento->save();
        }

        History::create([

            'documento_id' => $documento->id_documento,
            'nombre_documento' => $documento->nombre_documento,
            'descripcion' => $documento->descripcion,
            'area' => $documento->area,
            'fecha_vigencia' => $documento->fecha_vigencia,
            'tipo_documento' => $documento->tipo_documento,
            'documento' => $documento->documento,
            'version' => $documento->version,

        ]);

        /* if ($request->hasFile('documento')) {

            $file = $request->file('documento');
            $destinationPath = 'docs';
            $fileName = $file->getClientOriginalName();
            $uploadSuccess = $request->file('documento')->move($destinationPath, $fileName);
            $document  = $fileName;
        } else {
            $document = $documento->documento;
        }; */

        return redirect()->route('home.index')->with('success', 'Documento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $documento)
    {
        $documento->update(['estado' => 0]);
        return redirect()->route('home.index')->with('success', 'Se ha actualizado el estado del formulario');
    }
}
