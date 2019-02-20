<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::all();

        return $pokemons;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokemon = new Pokemon;
        $pokemon->name = $request->name;
        $pokemon->save();

        return 'Registro insertado correctamente: ' . $pokemon->name;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon, $id)
    {

        return Pokemon::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon ,$id)
    {
        $pokemon = Pokemon::find($id);

        $pokemon->name = $request->name;
        $pokemon->save();

        return 'Registro ACTUALIZADO correctamente: ' . $pokemon->name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();

        return 'Registro eliminado correctamente ' . $pokemon->name;
    }
}
