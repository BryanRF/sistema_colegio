<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Certificado;
use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function search(Request $request)
    {
        $dni = $request->input('dni');
        $tipo = $request->input('tipo');

        $alumno = Alumno::whereHas('persona', function ($query) use ($dni) {
            $query->where('dni', $dni);
        })->first();

        if (!$alumno) {
            return response()->json(['status' =>404]);

        }

        $data = [];

        if ($tipo === 'certificados') {
            // $data = DB::select("CALL GetCertificadosByDNI(?)", array($dni));
            $data = DB::table('certificados as c')
            ->join('alumnos as a', 'c.alumno_id', '=', 'a.id')
            ->join('personas as p', 'a.persona_id', '=', 'p.id')
            ->join('talleres as t', 'c.taller_id', '=', 't.id')
            ->selectRaw("
                CASE WHEN c.estado = 0 THEN 'no asistio' ELSE 'asistio' END as asistencia,
                t.nombre as nombre_taller,
                t.fecha as fecha_taller
            ")
            ->where('p.dni', $dni)  // Reemplaza 'dni' con el valor que necesites
            ->get();

        } elseif ($tipo === 'cursos') {
            // $data = Curso::select()->where('grado_id', $alumno->grado_id)->get();
            $data = DB::table('cursos as c')
            ->join('grados as g', 'c.grado_id', '=', 'g.id')
            ->join('alumnos as a', 'a.grado_id', '=', 'g.id')
            ->join('personas as p', 'a.persona_id', '=', 'p.id')
            ->selectRaw("c.nombre as curso,g.nivel as nivel,  g.nombre as grado")
            ->where('p.dni', $dni) ->distinct() // Reemplaza 'dni' con el valor que necesites
            ->get();


        } elseif ($tipo === 'matriculas') {
            // $data = Matricula::where('alumno_id', $alumno->id)->get();
            $data = DB::table('matriculas as m')
            ->join('alumnos as a', 'm.alumno_id', '=', 'a.id')
            ->join('grados as g', 'm.grado_id', '=', 'g.id')
            ->join('personas as p', 'a.persona_id', '=', 'p.id')
            ->selectRaw("CONCAT(p.nombre,' ',p.apellido_paterno,' ',p.apellido_materno) as alumnos,
            p.dni as DNI,
            p.genero as genero,
            m.numero_matricula as intento,
            YEAR(m.fecha_ingreso) as año,
            m.ciclo_modalidad as modalidad,
            m.estado as estado,
            g.nombre as grado,
            g.nivel as nivel

            ")
            ->where('p.dni', $dni)->distinct()
            ->get();


        }


        return response()->json($data);
    }

    public function getAlumnos()
    {
        $data = Persona::all();
        return response()->json($data);
    }
}

