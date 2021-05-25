<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Hospital extends Controller
{
    //

    public function consultHospital()
    {
        $hospital = DB::table('hospital')->get();

        return json_encode($hospital[0]->nombre);
    }

    public function insertHospital(Request $request)
    {
        $name = $request->input('nombre');

        DB::table('hospital')->insert([
            ['nombre' => $name],
        ]);

        return "Creado con exito";
    }

    public function createDoctor(Request $request)
    {
        $name = $request->input('allName');
        $direccion = $request->input('direccion');
        $phone = $request->input('phone');
        $blood = $request->input('blood');
        $exp = $request->input('exp');
        $date = $request->input('date');

        DB::table('medico')->insert([
            [
                'nombre' => $name,
                'direccion' => $direccion,
                'telefono' => $phone,
                'tipo_sangre' => $blood,
                'experiencia_a' => $exp,
                'fecha_nacimiento' => $date,
                'hospital_id' => 1,
            ]
        ]);

        return redirect('docs');
    }

    public function doctors()
    {
        $doctors = DB::table('medico')->get();

        return view('doctors', ['doctors' => $doctors]);
    }

    public function doctorsDelete($id)
    {
        DB::table('medico')->delete($id);

        return redirect('docs');
    }

    public function imprimirDoc($id)
    {
        $doctor = DB::table('medico')->where('id', $id)->get();
        return view('edit', ['doctor' => $doctor[0]]);
    }

    public function editarDoc($id, Request $req)
    {
        $doctor = DB::table('medico')->where('id', $id)->update(
            [
                "nombre" => $req->allName,
                "direccion" => $req->direccion,
                "telefono" => $req->phone,
                "tipo_sangre" => $req->blood,
                "experiencia_a" => $req->exp,
                "fecha_nacimiento" => $req->date
            ]
        );
        if ($doctor) {
            return redirect('docs');
        } else {
            return ["result" => "Falla a la hora de actualizar la información del doctor"];
        }
    }

    public function crearCliente(Request $request)
    {
        $identificacion = $request->input('cc');
        $nombre = $request->input('allName');
        $eps = $request->input('eps');
        $phone = $request->input('phone');
        $direccion = $request->input('direccion');
        $parnerName = $request->input('parnerName');
        $parnerPhone = $request->input('parnerPhone');
        $antece = $request->input('antece');

        $dataInsert = [
            'nombre' => $nombre,
            'identificacion' => $identificacion,
            'eps_asociada' => $eps,
            'telefono' => $phone,
            'direccion' => $direccion,
            'nombre_ayudante' => $parnerName,
            'telefono_ayudante' => $parnerPhone,
        ];

        if (!empty($antece)) {
            $dataInsert['antecedentes'] = 1;
            $dataInsert['antecedentes_texto'] = $antece;
        } else {
            $dataInsert['antecedentes'] = 0;
        }

        DB::table('cliente')->insert([
            $dataInsert
        ]);

        return redirect('/');
    }

    public function consultarCliente($documento)
    {
        $client = DB::table('cliente')->where('identificacion', $documento)->first();

        return view('consulta', ['paciente' => $client]);
    }

    public function consultarCovid($id, Request $req)
    {
        return $req;
    }

    public function csrfun()
    {
        return csrf_token();
    }
}
