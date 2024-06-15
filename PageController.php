<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equipment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function Login()
    {
        return view("login");
    }

    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function equipment()
    {
        $equipment = equipment::orderBy('id', 'desc')->get();
        return view("equipment", ["key" => "equipment", "eq" => $equipment]);
    }

    public function formadd()
    {
        return view("form-add", ["key" => "equipment"]);
    }

    public function saveequipment(Request $request)
    {
        $file_name = time()."-".$request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');

        equipment::create([
            'Jenis_Sport' => $request->Jenis_Sport,
            'Nama' => $request->Nama,
            'Brand' => $request->Brand,
            'Deskripsi' => $request->Deskripsi,
            'poster' => $path
        ]);

        return redirect('/equipment')->with('alert', 'Data Berhasil Disimpan');
    }

    public function formeditequipment($id)
    {
        $equipment = equipment::find($id);
        return view("form-edit", ["key" => "equipment", "eq" => $equipment]);
    }

    public function updateequipment($id, Request $request)
    {
        $equipment = equipment::find($id);

        $equipment ->Jenis_Sport = $request->Jenis_Sport;
        $equipment ->Nama = $request->Nama;
        $equipment ->Brand = $request->Brand;
        $equipment ->Deskripsi = $request->Deskripsi;

        if ($request->hasFile('poster'))
        {
            if ($equipment->poster)
            {
                Storage::disk('public')->delete($equipment->poster);
            }

            $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $equipment->poster = $path;
        }
        $equipment->save();

        return redirect("/equipment")->with('alert', 'Data Berhasil Di Ubah');      
    }

    public function deleteequipment($id)
    {
        $equip = equipment::find($id);
        
        if ($equip->poster)
        {
            Storage::disk('public')->delete($equip->poster);
        }

        $equip->delete();

        return redirect("/equipment")->with('alert', 'Data Berhasil Di Hapus');      

    }

    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function profile()
    {
        return view("profile", ["key" => "profile"]);
    }
}