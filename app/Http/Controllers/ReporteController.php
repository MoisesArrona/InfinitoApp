<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\ReporteDetalle;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReporteMail;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;
use App\Http\Requests\ReporteRequest;
use Illuminate\Support\Carbon;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportesI = Reporte::where('estatus','!=','finalizado')->get();
        $reportesT = Reporte::where('estatus','=','finalizado')->whereMonth('created_at', Carbon::now()->startOfMonth())->get();
        $reportes = Reporte::all();
        return view('reporte.index', compact(['reportesI', 'reportesT', 'reportes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$usuario = User::all();*/
        return view('reporte.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReporteRequest $request)
    {
        $reporte = new Reporte($request->input());
         //Condicionamos para saber si existe una foto en la peticion
         if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->nombre.'_'.$request->id_usuario.'.png';
            $file->move(public_path().'/imagenes/reportes/',$name);
            $reporte->foto = $name;
        }
        $reporte->id_usuario = auth()->user()->id;
        $reporte->save();
        //Envio de correo de alta de reporte
        Mail::to(auth()->user()->email)->send(new ReporteMail($reporte));
        return redirect('reporte/')->with('estatus', 'Se levanto el ticket'.$reporte->nombre.' correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = Reporte::find($id);
        $detalles = ReporteDetalle::where('id_reporte', '=', $id)->get();
        $reportes = Reporte::where('estatus', '!=', 'finalizado')->take(5)->orderBy('id','DESC')->get();
        return view('reporte.mostrar', compact(['reporte', 'detalles', 'reportes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        /*$usuario = User::all();*/
        return view('reporte/editar', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        $reporte->estatus =$request->input('estatus');
        $reporte->save();
        //Registro de detalle del reporte
        $detalle = new ReporteDetalle();
        $detalle->observacion = $request->input('observacion');
        $detalle->id_usuario = auth()->user()->id;
        $detalle->id_reporte = $reporte->id;
        $detalle->save();
        Mail::to(auth()->user()->email)->send(new ReporteMail($reporte));
        return redirect('reporte/')->with('estatus', 'Se edito correctamente el ticket: '.$reporte->nombre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
    }
}
