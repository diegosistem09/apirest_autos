<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Auto;
use App\Http\Resources\AutoResource;


class AutoController extends Controller
{
    //

    public function index()
    {
    	$auto = Auto::paginate(10);
    	return AutoResource::collection($auto);
    }

      public function create()
    {
        //
    }    
    
    public function show($id)
    {
    	$auto = Auto::findOrFail($id);
		return new AutoResource($auto);
    }
    public function edit($id){}

    public function update(Request $request, $id)
    {
    	$auto =Auto::findOrFail($id);
    	$auto->placa = $request->placa;
    	$auto->num_pasajeros = $request->numero_pasajeros;
    	$auto->estado = $request->estado;
    	$auto->marca = $request->marca;
    	$auto->color = $request->color;

    	 if($auto->save()){
            return new AutoResource($auto);
        }
    }

    public function store(Request $request)
    {
    	$auto = new Auto();
    	$auto->placa = $request->placa;
    	$auto->num_pasajeros = $request->numero_pasajeros;
    	$auto->estado = $request->estado;
    	$auto->marca = $request->marca;
    	$auto->color = $request->color;

    	if($auto->save()){
            return new AutoResource($auto);
        }

        
    }


    public function destroy($id){
    	$auto = Auto::findOrFail($id);

    	if($auto->delete()){
    		return new AutoResource($auto);
    	}
    }
}
