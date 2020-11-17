<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ong;
use App\Models\Pet;

use function Psy\debug;

class OngsDetail extends Controller
{
    public function index($id) {

        $ongs = Ong::all();
        $ongs = $ongs->where('id', $id);

        foreach($ongs as $ong)
            $singleOng = $ong;

        $pets = Pet::all();
        $pets = $pets->where('ong', $singleOng->nome);

        return view('ong_detail', ['ongs' => $ongs, 'pets' => $pets]);
    }
}