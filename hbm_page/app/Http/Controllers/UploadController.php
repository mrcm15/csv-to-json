<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showUpLoadForm(){
            return view('csv.subir_csv_principal');
    }
    public function upload(Request $request)
    {
       //sube el archivo a la carpeta storage/app/csv
        $file = $request->file('fileToUpload')->store('csv');
        $data['ruta'] = $file;
        $data['nodo'] = $request->input('nomb_tabla');
        return view('csv.listar_nodos',['ruta'=>$data]);
     
    }
}