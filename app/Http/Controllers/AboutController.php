<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\AboutModel;
class AboutController extends Controller
{
    public function index()
    {

        $data = AboutModel::all();

        return view('admin/about_page/about', [
            'about' => $data
        ]);

    }


    public function edit($id)
    {
        $data = AboutModel::findOrFail($id);

        return view('admin/about-edit', [
            'about' => $data
        ]);
    }

    public function create()
    {
        return view('admin/about-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'max:50'],
            'foto' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'status' => ['required', 'max:50'],
        ]);

        $fotoPath = $request->file('foto')->store('about_images', 'public');

        $data = [
            'nama_foto' => $request->nama,
            'foto_about' => $fotoPath,
            'status' => $request->status,
        ];

        AboutModel::create($data);

        return redirect('/master/tentang')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'max:50'],
            'foto' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'status' => ['required', 'max:50'],
        ]);

        $about = AboutModel::findOrFail($id);

        $data = [
            'nama_foto' => $request->nama,
            'status' => $request->status,
        ];
    
        if ($request->hasFile('foto')) {
            
            if ($about->foto_about) {
                Storage::disk('public')->delete($about->foto_about);
            }

            $fotoPath = $request->file('foto')->store('about_images', 'public');
            $data['foto_about'] = $fotoPath;
        }
    
        $about->update($data);
    

        return redirect('/master/tentang')->with('sukses', 'Data Berhasil Diubah');
    }



    public function destroy($id)
    {
        $data  = AboutModel::findOrFail($id);
        $data->delete();
        return redirect('/master/tentang')->with('sukses', 'Data Berhasil Dihapus');
    }
}
