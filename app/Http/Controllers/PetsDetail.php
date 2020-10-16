<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;


class PetsDetail extends Controller
{
    public function index($id) {

        $pets = Pet::all();
        $pets = $pets->where('id', $id);
        return view('pet_detail', ['pets' => $pets]);
    }
}
