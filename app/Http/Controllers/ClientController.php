<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\client;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $clients = DB::table('clients')->where('name','LIKE','%'.$query.'%')
                                        ->orwhere('direccion','LIKE','%'.$query.'%')
                                        ->orwhere('barrio','LIKE','%'.$query.'%')
                                        ->orwhere('telefono','LIKE','%'.$query.'%')
                                        ->orwhere('celular','LIKE','%'.$query.'%')
                                        ->orderBy('id','asc')->paginate(8);

        return view('maptable')->with(compact('clients','query'));
    }


    public function delete($client){
        //$client = client::find($id)->delete();

       client::destroy($client);
         session()->flash('message','Usuario eliminado');

        return redirect()->route('datos');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client;
        return view('client.create')->with(['client' =>$client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
          'name' => 'required|string|max:100',
          'direccion_full' => 'required|string|max:200',
          'direccion' => 'required|string|min:6'

    ];

    $messages = [
      'name.required' => 'Es necesario ingresar el nombre del Usuario',
      'name.max' => 'El nombre es demasiado extenso',
      'direccion.required' => 'Debes Ingresar una dirección',
      'direccion.min' => 'Debes ingresar una dirección mayor a 6 Caracteres'

    ];

    $this->validate($request, $rules, $messages);

        $client = new client();
        $client->name = $request->input('name');
        $client->direccion_full = $request->input('direccion_full');
        $client->direccion = $request->input('direccion');
        $client->barrio = $request->input('barrio');
        $client->localidad = $request->input('localidad');
        $client->telefono = $request->input('telefono');
        $client->celular = $request->input('celular');
        $client->telefono2 = $request->input('telefono2');
        $client->acudiente = $request->input('acudiente');
        $client->relacion = $request->input('relacion');
        $client->latitude = $request->input('latitude');
        $client->longitude = $request->input('longitude');

        $client->save();

        session()->flash('message','Has creado con exito un Usuario');

        return redirect()->route('datos');


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
    public function edit($id)
    {
        $client = client::find($id);

        return view('client.edit', compact('client'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $rules = [
          'name' => 'required|string|max:100',
          'direccion_full' => 'required|string|max:200',
          'direccion' => 'required|string|min:6'

    ];

    $messages = [
      'name.required' => 'Es necesario ingresar el nombre del Usuario',
      'name.max' => 'El nombre es demasiado extenso',
      'direccion.required' => 'Debes Ingresar una dirección',
      'direccion.min' => 'Debes ingresar una dirección mayor a 6 Caracteres'

    ];

    $this->validate($request, $rules, $messages);

        $client = client::find($id);
        $client->name = $request->input('name');
        $client->direccion_full = $request->input('direccion_full');
        $client->direccion = $request->input('direccion');
        $client->barrio = $request->input('barrio');
        $client->localidad = $request->input('localidad');
        $client->telefono = $request->input('telefono');
        $client->celular = $request->input('celular');
        $client->telefono2 = $request->input('telefono2');
        $client->acudiente = $request->input('acudiente');
        $client->relacion = $request->input('relacion');
        $client->latitude = $request->input('latitude');
        $client->longitude = $request->input('longitude');

        $client->save();
        session()->flash('message','Has editado con exito el Usuario');
         return redirect()->route('datos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
