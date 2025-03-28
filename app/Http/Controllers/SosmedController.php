<?php

namespace App\Http\Controllers;
use App\Models\SosmedModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    public function index()
    {
        $data = SosmedModels::all();
        return view('admin/sosial_media_page/sosmed', [
            'sosmed' => $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaSMMU' => 'required',
            'namaSM' => 'required',
            'linkSM' => 'required',
            'fotoSM' => 'required',
            'statusSM' => 'required',
        ]);

        $fotoPath = $request->file('fotoSM')->store('sosmed_images', 'public');

        $data = [
            'nama_sosmed_upt' => $request->namaSMMU,
            'nama_sosmed' => $request->namaSM,
            'link_sosmed' => $request->linkSM,
            'foto_sosmed' => $fotoPath,
            'status' => $request->statusSM,
        ];

        SosmedModels::create($data);

        return redirect('/master/sosmed')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_namaSMU' => ['required', 'max:50'],
            'edit_namaSM' => ['required', 'max:50'],
            'edit_linkSM' => ['required', 'max:255'],
            'edit_fotoSM' => ['nullable', 'image', 'mimes:jpg,png,jpeg'],
            'edit_statusSM' => ['required', 'max:50'],
        ]);

        $sosmed = SosmedModels::findOrFail($id);

        $data = [
            'nama_sosmed_upt' => $request->edit_namaSMU,
            'nama_sosmed' => $request->edit_namaSM,
            'link_sosmed' => $request->edit_linkSM,
            'status' => $request->edit_statusSM,
            
        ];

        if ($request->hasFile('edit_fotoSM')) {
            
            if ($sosmed->foto_sosmed) {
                Storage::disk('public')->delete($sosmed->foto_sosmed);
            }

            $fotoPath = $request->file('edit_fotoSM')->store('sosmed_images', 'public');
            $data['foto_sosmed'] = $fotoPath;
        }


        $sosmed->update($data);

        return redirect('/master/sosmed')->with('ubah', 'Data Berhasil Diubah');
    }


    public function destroy($id)
    {
        $data = SosmedModels::findOrFail($id);
        $data->delete();

        return redirect('/master/sosmed')->with('hapus', 'Data Berhasil Dihapus');
    }
}
