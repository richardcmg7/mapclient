<?php

namespace App\Http\Controllers;

use Illuminate\Auth;
use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use FarhanWazir\GoogleMaps\Facades;
use Illuminate\Support\Facades\DB;
use App\client;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
    }
    

    
    //Muestra la Tabla de Clientes
    public function data(Request $request)
    {
    
        $query=trim($request->get('searchText'));
        $clients = DB::table('clients')->where('name','LIKE','%'.$query.'%')->orderBy('id','asc')->paginate(8);

        return view('maptable')->with(compact('clients','query'));

    }

    // Dibuja el Mapa
    public function index(GMaps $gmaps)
    {
     $this->gmaps = $gmaps;
     $config['center'] = 'Bogota, Colombia';
     $config['zoom'] = 13;
     $config['map_height'] = '600px';
     $config['geocodeCaching'] = true;
     $config['scrollwheel'] = false;

     $Gmaps = new Gmaps();
     $Gmaps->initialize($config);
    
     //add maker

     $clients = DB::table('clients')->get();
      
     foreach ($clients as $key => $cliente) {
        $adress = $cliente->direccion;
        $barrio = $cliente->barrio;
        if ($adress) {
            if ($barrio){
                $direccion = $adress.", Barrio ".$barrio.", Bogota";
            }
            else {
                $direccion = $adress.", Bogota";   
            }
            
            $nombre = $cliente->name;
            $info = "<b>".$key.". ".$nombre."</b><br>".$direccion;

          $marker['position'] = $direccion;
          $marker['infowindow_content'] = $info;
          $marker['animation'] = 'DROP';
          $marker['title'] = $cliente->id;

          $marker['draggable'] = TRUE;
          
          if ($key <= 15){
                $marker['icon']='http://maps.google.com/mapfiles/ms/micons/orange-dot.png';
          }
          elseif ($key <= 30){
                $marker['icon']='http://maps.google.com/mapfiles/ms/micons/yellow-dot.png';
          }
          elseif ($key <= 55){
                $marker['icon']='http://maps.google.com/mapfiles/ms/micons/red-dot.png';
          }
          else{
                $marker['icon']='http://labs.google.com/ridefinder/images/mm_20_red.png';
          }
          $Gmaps->add_marker($marker);
        }
    }
      $marker['position'] = 'Calle 77B No 129 11, Bogota';
      $marker['title'] = "Desarrollador";
      $marker['infowindow_content'] = 'Parque Central de Occidente 2, Bogota';
      $marker['icon']='http://labs.google.com/ridefinder/images/mm_20_red.png';
      $Gmaps->add_marker($marker);



     $map = $Gmaps->create_map();

     return view('map')->with('map',$map);
       
    }
        

 }
