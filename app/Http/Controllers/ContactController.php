<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = ContactModel::all();
        return view('admin/contact_page/contact', [
            'contact' => $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nimC' => ['required', 'max:11'],
            'namaC' => ['required', 'max:50'],
            'linkC' => ['required'],
            'statusC' => ['required', 'max:50'],
        ]);

        $data = [
            'nim' => $request->nimC,
            'nama' => $request->namaC,
            'link' => $request->linkC,
            'status' => $request->statusC,
        ];

        ContactModel::create(($data));

        return redirect('/master/kontak')->with('sukses', 'Data Berhasil Ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_nimC' => ['required', 'max:11'],
            'edit_namaC' => ['required', 'max:50'],
            'edit_linkC' => ['required'],
            'edit_statusC' => ['required', 'max:50'],
        ]);

        $contact = ContactModel::findOrFail($id);

        $data = [
            'nim' => $request->edit_nimC,
            'nama' => $request->edit_namaC,
            'link' => $request->edit_linkC,
            'status' => $request->edit_statusC,
        ];

        $contact->update($data);

        return redirect('/master/kontak')->with('sukses', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = ContactModel::findOrFail($id);
        $data->delete();

        return redirect('/master/kontak')->with('sukses', 'Data Berhasil Dihapus');
    }
}


