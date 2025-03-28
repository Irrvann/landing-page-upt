<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\ServicesModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = ServicesModel::all();

        return view('admin/services_page/services', [
            'services' => $data
        ]);
    }

    public function create()
    {
        return view('admin/services_page/services-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeS' => ['required',  'max:11'],
            'namaS' => ['required', 'max:200'],
            'deskripsiS' => ['required', 'max:255'],
            'fotoS' => ['required', 'image', 'mimes:jpg,png,jpeg'],
            'statusS' => ['required', 'max:50'],
        ]);

        $fotoPath = $request->file('fotoS')->store('services_images', 'public');

        $data = [
            'kode_services' => $request->kodeS,
            'nama_services' => $request->namaS,
            'deskripsi_services' => $request->deskripsiS,
            'foto_services' => $fotoPath,
            'status' => $request->statusS,
        ];

        ServicesModel::create($data);

        return redirect('/master/services')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'edit_kodeS' => ['required', 'max:11'],
            'edit_namaS' => ['required', 'max:200'],
            'edit_fotoS' => ['nullable', 'image', 'mimes:jpg,png,jpeg'],
            'edit_deskripsiS' => ['required', 'max:255'],
            'edit_statusS' => ['required', 'max:50'],
        ]);

        $about = ServicesModel::findOrFail($id);

        $data = [
            'kode_services' => $request->edit_kodeS,
            'nama_services' => $request->edit_namaS,
            'nama_foto' => $request->edit_fotoS,
            'deskripsi_services' => $request->edit_deskripsiS,
            'status' => $request->edit_statusS,
        ];
    
        if ($request->hasFile('edit_fotoS')) {
            
            if ($about->foto_about) {
                Storage::disk('public')->delete($about->foto_about);
            }

            $fotoPath = $request->file('edit_fotoS')->store('services_images', 'public');
            $data['foto_services'] = $fotoPath;
        }
    
        $about->update($data);
    

        return redirect('/master/services')->with('ubah', 'Data Berhasil Diubah');
    }


    public function destroy($id)
    {
        $data = ServicesModel::findOrFail($id);
        $data->delete();

        return redirect('/master/services')->with('hapus', 'Data Berhasil Dihapus');
    }
}
