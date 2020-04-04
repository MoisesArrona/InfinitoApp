<?php

namespace App\Http\Controllers;

use App\Reporte;
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
        return view('reporte.index', compact(['reportesI', 'reportesT']));
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
         //Condicionamos para saber si existe una foto en la peticion
         if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->nombre.'_'.$request->id_usuario.'.png';
            $file->move(public_path().'/imagenes/reportes/',$name);
        }
        /*$reporte = request()->except('_token');
        $reporte['foto']=$name;
        Reporte::insert($reporte);*/
        $reporte = new Reporte($request->input());
        $reporte->foto = $name;
        //accedemos a los datos del usuario
        $reporte->id_usuario = auth()->user()->id;
        $reporte->save();
        //Envio de correo de alta de reporte
        Mail::to(auth()->user()->email)->send(new ReporteMail($reporte));
        return new ReporteMail($reporte);
        //return redirect('reporte/')->with('estatus', 'Se guardo correctamente');
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
        return view('reporte.mostrar', compact('reporte'));
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
        //$reporte = request()->except('_method', '_token', 'foto');
        $reporte->fill($request->all());
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->nombre.'_'.$request->id_usuario.'.png';
            $reporte['foto']=$name;
            $file->move(public_path().'/imagenes/reportes/',$name);
        }
        //Reporte::where('id','=',$id)->update($reporte);
        return redirect('reporte/'.$reporte->id)->with('estatus', 'Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
    }
}
