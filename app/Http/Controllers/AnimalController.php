<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return Animal::all();
    }

    public function showOneAnimal($id)
    {
        $animal = Animal::find($id);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'type_id' => 'required|exists:animals_types,id'
        ]);

        $animal = Animal::create([
            'name' => $validatedData['name'],
            'type_id' => $validatedData['type_id']
        ]);

        return response()->json(['message'=> $animal], 200);

    }

    public function grow (Request $request)
    {

    }

    public function filter(Request $request)
    {

    }

    public function delete($id)
    {
        $animal = Animal::find($id);

        if (!$animal) {
            return response()->json(['error'=> 'Animal not found'], 404);
        }

        $animal->delete();

        return response()->json(['message'=> 'Animal deleted successfully'], 200);
    }
}
