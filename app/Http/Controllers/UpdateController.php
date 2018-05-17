<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use DB;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update()
    {
        $clients = DB::table('clients')
                ->orderBy('id', 'DESC')
                ->get();

        //$gmap_cache = DB::table('gmaps_geocache')->get();
        
            # code...
        
        foreach ($clients as $cliente) {
            $adress = $cliente->direccion;
            $barrio = $cliente->barrio;
            if ($adress) {
                    if ($barrio){
                        $direccion = $adress.", Barrio ".$barrio.", Bogota";
                    }
                    else {
                        $direccion = $adress.", Bogota";   
              
                    }
            $gmap_cache = DB::table('gmaps_geocache')
                ->where('address',$direccion)
                ->first();

            $latitude = $gmap_cache->latitude;
            $longitude = $gmap_cache->longitude;
            $id = $cliente->id;
            //echo $id;
            //echo $latitude;
            //echo $longitude;
                
            DB::table('clients')->where('id', $id)->update(['latitude' => $latitude,'longitude' => $longitude]);
                 
                
            }
            else {
                return ('home');
            }   


        }
        return ('home');
      }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
