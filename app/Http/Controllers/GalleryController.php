<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;
class GalleryController extends Controller
{
    public function index()
    {
        $data = GalleryModel::all();

        return view('admin/gallery_page/gallery', [
            'gallery' => $data
        ]);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'kodeG' => ['required',  'max:11'],
            'namaG' => ['required', 'max:50'],
            'fotoG' => ['required', 'image', 'mimes:jpg,png,jpeg'],
            'statusG' => ['required', 'max:50'],
        ]);

        $fotoPath = $request->file('fotoG')->store('gallery_images', 'public');

        $data = [
            'kode_foto' => $request->kodeG,
            'nama_foto' => $request->namaG,
            'foto_gallery' => $fotoPath,
            'status' => $request->statusG,
        ];
        
        GalleryModel::create($data);

        return redirect('/master/galeri')->with('sukses', 'Data Berhasil Ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_kodeG' => ['required', 'max:11'],
            'edit_namaG' => ['required', 'max:50'],
            'edit_fotoG' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'edit_statusG' => ['required', 'max:50'],
        ]);

        $gallery = GalleryModel::findOrFail($id);

        $data = [
            'kode_foto' => $request->edit_kodeG,
            'nama_foto' => $request->edit_namaG,
            'status' => $request->edit_statusG,
        ];

        if ($request->hasFile('edit_fotoG')) {
            $fotoPath = $request->file('edit_fotoG')->store('gallery_images', 'public');
            $data['foto_gallery'] = $fotoPath;
        }

        $gallery->update($data);

        return redirect('/master/galeri')->with('sukses', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = GalleryModel::findOrFail($id);
        $data->delete();

        return redirect('/master/galeri')->with('sukses', 'Data Berhasil Dihapus');
    }
    
}
