<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;

class APIController extends Controller
{
    public function searchequipment(Request $request)
    {
        $cari = $request -> input('q');

        $equip = Equipment::where('Nama', 'LIKE', "%$cari%")->get();

        if ($equip -> isEmpty())
        {
            return response()->json([
                'success'   => false,
                'data'      => 'Data Tidak Ditemukan'
            ], 404) -> header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success'   => true,
                'data'      => $equip
            ], 200) -> header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500'); 
        }
    }
}
