<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PesquisaController extends Controller
{
    public function index() {

        $pets = Pet::all();
        $queries = [];
        $columns = [
            'espécie',
            'porte',
        ];

        foreach($columns as $column) {
            if (request()->has($column)){
                $pets = $pets->where($column, request($column));
                $queries[$column] = request($column);
            } 
        }

        $pets = $pets->append($queries);

        return view('pesquisa', ['pets' => $pets]);
    }
}
